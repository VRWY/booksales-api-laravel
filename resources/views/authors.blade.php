<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Book</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #f4f4f4; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>List of Authors</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['title'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
