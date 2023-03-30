<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Students maangement System</h1>
   {{-- <h2>The name you have entered ids:{{$name}}</h2>
   <h2>The Roll no you have entered ids:{{$rNo}}</h2></br></br> --}}
   {{-- <h3>{{$msg}}</h3> --}}
   <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Roll No</th>
        </tr>
    </thead>
    <tbody>
        <pre>
            {{-- {{print_r($studentsView)}} --}}
        </pre>
       
        @foreach ($studentsView as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->Name }}</td>
            <td>{{ $student->Roll }}</td>

            <td><a href="{{route('edit',['id'=> $student->id])}}"><button name='update'>Edit</button></a></td>
            <td><a href="{{route('students.destroy',['id'=> $student->id])}}"><button name='update'>Delete</button></td></a>

        </tr>

        @endforeach
        <tr>
           
            <td> 

                    <td><label><b>Enter your name</b></label></td>
                    <td><label><b>Enter Your Roll NO</b></label> </td>
                   
                 
            </td>
        </tr>
        <tr>
           
            <td> 

                 <form action="{{route('test')}}"  method="POST">
                    @csrf
                    <td><input type="text" name="name" placeholder="Enter Name"></td>
                    <td> <input type="text" name="Rno" placeholder="Enter Roll No""></td>
                    <td><button type="submit" name="submit">Submit</button></td>
                  </form>
            </td>
        </tr>
    </tbody>
</table>

  </body>
</html>