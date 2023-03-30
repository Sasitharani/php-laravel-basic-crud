<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <h2>I am learning controllers</h2>
    <form action="{{route('test')}}"  method="POST">
        @csrf
            <label>Enter your name</label>
            <input type="text" name="name"></br>
            <label>Enter Your Roll NO</label>
            <input type="text" name="Rno">
            <button type="submit" name="submit">Submit</button>

    </form>
    <form action="{{route('test2')}}"  method="POST">
        @csrf
        <button type="submit" name="view">View</button>
    </form>
</body>
</html>