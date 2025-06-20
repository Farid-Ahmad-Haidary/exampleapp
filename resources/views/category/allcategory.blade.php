<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <style>
    table {
      width: 80%;
      margin: 40px auto;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
      background: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    th, td {
      padding: 12px 18px;
      border: 1px solid #e0e0e0;
      text-align: left;
    }
    th {
      background: #1976d2;
      color: #fff;
      font-weight: 600;
    }
    tr:nth-child(even) {
      background: #f5f7fa;
    }
    tr:hover {
      background: #e3f2fd;
    }
    img {
      max-width: 60px;
      max-height: 60px;
      border-radius: 6px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.10);
    }
  </style>
  <table>
    <thead>
      <tr>
        <th>Category ID</th>
        <th>Category Name</th>
        <th>Category Description</th>
        <th>Category Image</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
      <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
        <td>
          @if($category->image)
            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}">
          @else
            <span style="color: #888;">No Image</span>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>