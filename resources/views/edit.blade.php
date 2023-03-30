<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    {{-- <pre>
       {{ print_r($student);}}
    </pre> --}}
   
        <form method="POST" action="{{ route('edit', $student->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $student->Name }}" required>
        <br>
        <label for="roll">Roll No:</label>
        <input type="text" name="roll" value="{{ $student->Roll }}" required>
        <br>
        <button type="submit">Save</button>
    </form>

</body>
</html>