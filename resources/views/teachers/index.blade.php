<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/teacher.css') }}">
  <title>AllTeachers</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>lastName</th>
        <th>Email</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($teachers as $teacher)
        <tr>
          <td>{{ $teacher->id }}</td>
          <td>{{ $teacher->name }}</td>
          <td>{{ $teacher->last_name }}</td>
          <td>{{ $teacher->email }}</td>
          <td>{{ $teacher->Salary }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div class="add-teacher-container">
    <a href="{{ route('newTeacher') }}">Add a new Teacher</a>
  </div>
  
</body>
</html>