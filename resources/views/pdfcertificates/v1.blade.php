<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Google fonts CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Lovers+Quarrel&family=Poppins:wght@500&family=Roboto:wght@500&display=swap"
          rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="{{ltrim(public_path('/css/cert one.css'))}}">


    <title>Certificate 3</title>
</head>
<body>
<!-- main content -->
<div id="main">
    <div class="certificate-container">
        <div class="space"></div>
        <div class="certificate-content">
            <div class="first">
                <img src="{{ltrim(public_path('/img/HNG-Logo-web.svg'))}}" alt="HNG Logo">
                <h5>issued on the 16th of September 2020</h5>
            </div>

            <div class="second">
                <h1>Certificate of Completion</h1>
                <h3 class="presented">This certificate is presented to</h3>
                <h2 class="name">{{$certificate->first_name}} {{$certificate->last_name}}</h2>
                <h4 class="accomplishment-text">For the successfully completing HNGi7 as a</h4>
                <h2 class="stack">{{$certificate->track}}</h2>
            </div>

            <div class="third">
                <div class="creditations">
                    <h6>
                        Verify at <a href="#">hng.com/certificates/{{$certificate->hngi_id}}</a>
                    </h6>
                    <div>
                        <p>Hotels.ng Internship has verified that this individual has completed</p>
                        <p>to a degree the 8th Edition of the HNG Internship</p>
                    </div>
                </div>

                <div class="signature">
                    <h4 class="ceo-name">Seyi Onifade</h4>

                    <p>CEO, HNG internship</p>
                </div>
            </div>
        </div>
        <div class="space"></div>
    </div>
    @if($certificate->downloadable == 1)
        <form action="/generate-pdf" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$certificate->hngi_id}}">
            <button class="btn btn-success">Download</button>
        </form>
    @endif
</div>

</body>
</html>