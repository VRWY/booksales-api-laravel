<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index(){
        $transaction = Transaction::with('user', 'book')->get();

        if ($transaction->isEmpty()){
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $transaction
        ], 200);
    }

    public function store(Request $request){
        // 1. validator & cek validator
        $validator = Validator::make($request->all(),[
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Validator error',
                'data' => $validator->errors()
            ], 422);
        }
        
        // 2. generate orderNumber -> unique | ORD-0003
        $uniqueCode = 'ORD.' . strtoupper(uniqid());
        
        // 3. ambil user login
        $user = auth('api')->user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 401);
        }

        // 4. cari data buku
        $book = Book::find($request->book_id);

        // 5. cek stok
        if ($book->stok < $request->quantity){
            return response()->json([
                'success' => false,
                'message' => 'Stok barang tidak cukup'
            ], 400);
        }

        // 6. hitung total
        $totalAmount = $book->price * $request->quantity;
        
        // 7. kurangi stok buku (update)
        $book->stok -= $request->quantity;
        $book->save();

        // 8. simpan data 
        $transaction = Transaction::create([
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $request->book_id,
            'total_amount' => $totalAmount
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaction Create Successfully',
            'data' => $transaction
        ], 201);
    }

    public function show(string $id){
        $transaction = Transaction::with('user', 'book')->find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get detail resource',
            'data' => $transaction
        ], 200);
    }

    public function update(string $id, Request $request){
        // 1. Cari transaction berdasarkan ID
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        // 2. Validasi input
        $validator = Validator::make($request->all(), [
            'book_id' => 'sometimes|exists:books,id',
            'quantity' => 'sometimes|integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. Update data transaction
        if ($request->has('book_id')) {
            $book = Book::find($request->book_id);
            if ($book) {
                $transaction->book_id = $request->book_id;
            }
        }

        if ($request->has('quantity')) {
            // Update total amount based on new quantity
            $book = Book::find($transaction->book_id);
            if ($book) {
                $transaction->total_amount = $book->price * $request->quantity;
            }
        }

        $transaction->save();

        // 4. Response sukses
        return response()->json([
            'success' => true,
            'message' => 'Transaction updated successfully',
            'data' => $transaction
        ], 200);
    }

    public function destroy(string $id){
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        $transaction->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete resource successfully'
        ]);
    }
}
