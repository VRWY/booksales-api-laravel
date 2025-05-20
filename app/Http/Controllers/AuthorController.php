<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        if ($authors->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Resource data not found!'
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get All Resource',
            'data' => $authors
        ], 200);
    }

    public function store(Request $request)
    {
        // 1. Validasi
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'title' => 'required|string'
        ]);

        // 2. Jika validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. Simpan ke database
        $author = Author::create([
            'name' => $request->name,
            'title' => $request->title
        ]);

        // 4. Response sukses
        return response()->json([
            'success' => true,
            'message' => 'Author added successfully',
            'data' => $author
        ], 201);
    }
}
