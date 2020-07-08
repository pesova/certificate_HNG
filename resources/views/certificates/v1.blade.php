<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
<h1>{{$certificate->first_name}} {{$certificate->last_name}}- hngd id{{$certificate->hngi_id}} </h1>
- {{$certificate->downloadable}}
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<form action="/generate-pdf" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$certificate->hngi_id}}">
    <button class="btn btn-success">Download</button>
</form>
</body>
</html>
