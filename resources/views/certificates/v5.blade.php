<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>

    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="/css/cert%20five.css">
</head>
<body>
<div class="container">
    <div class="side">
        <img class="side-img" src="/img/image-1.png">
        <span class="side-text">HNG Internship</span>
        <div class="bg-img"><img src="/img/Vector.png"></div>
    </div>
    <div class="certificate">
        <p><small> Issued on <span class="my-date">the 16th of September 2020</span></small></p>
        <div class="user-info">
            <h2>Certificate Of Completion</h2>
            <p>Awarded to</p>
            <h1>{{$certificate->first_name}} {{$certificate->last_name}}</h1>
            <p>For completing HNG i7 as a</p>
            <h2>{{$certificate->track}}</h2>
            <p class="date">The internship lasted from 18th July through to 20th September 2020</p>
        </div>

        <div class="signature">
            <p class="sign-name">Seyi Onifade</p>
            <hr class="line">
            <small>CEO HNG Internship</small>
        </div>
        <div class="bg-img2"><img src="/img/Vector-2.png" alt="" srcset=""></div>
    </div>
</div>
@if($certificate->downloadable == 1)
    <form action="/generate-pdf" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$certificate->hngi_id}}">
        <button class="btn btn-success">Download</button>
    </form>
@endif

<script>
  let today = new Date()
  date = today.toDateString()
  document.querySelector('.my-date').textContent = date;
</script>
</body>
</html>
