<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Admin</title>
</head>

<body>
    <h1>Student Loged in</h1>
    {{-- {{ Auth::student() }} --}} @auth('student') @endauth
    <br> {{Auth('student')->id()}}
    <br> @foreach ($student->courses as $course) {{$course->courseTitle}} | @endforeach
    <h1></h1>

</body>

</html>