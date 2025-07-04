<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/addTeacher.css') }}">
  <title>Create</title>
</head>
<body>
  
 <form action="{{route('storeTeacher')}}" method="POST">
  @csrf
  <div>
    <label for="name">name:</label>
    <input type="text" id="name" name="name" required>
  </div>
  
  <div>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required>
  </div>
  
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>
  
  <div>
    <label for="salary">Salary:</label>
    <input type="number" id="salary" name="salary" required>
  </div>

  <button type="submit">Create Teacher</button>
 </form>


</body>
</html>