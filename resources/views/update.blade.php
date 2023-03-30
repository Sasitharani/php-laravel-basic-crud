<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
    {{-- <pre>
        {{print_r($studentsView)}}
    </pre> --}}
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Roll No</th>
            </tr>
        </thead>
        <tbody>
            <pre>
                {{-- {{print($flag)}} --}}
            </pre>
         
            @foreach ($studentsView as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td><input value={{ $student->Name }} /> </td>
                <td><input value= {{ $student->Roll }}/></td>
                <td><a href="{{route('edit',['id'=> $student->id])}}"><button name='update'>Edit</button></td></a>
                <td><a href="{{route('students.destroy',['id'=> $student->id])}}"><button name='update'>Delete</button></td></a>
            </tr>
            @endforeach
        </tbody>
    </table>
</head>
<body>
    
</body>
</html>