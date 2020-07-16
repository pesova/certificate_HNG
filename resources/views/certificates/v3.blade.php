<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Google fonts CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="/css/cert%20three.css">


    <title>Certificate three</title>
</head>
<body>
<!-- main content -->
<div id="main">
    <div class="certificate-container">
        <div class="certificate">
            <div class="certificate-content">

                <!-- left-side of certificate -->
                <div class="left">
                    <h4 class="first">issued on <span class="my-date">18/03/2020</span></h4>
                    <h2 class="second">{{$certificate->first_name}} {{$certificate->last_name}}</h2>
                    <h4 class="third">has succesfully completed the 8th Edition of</h4>
                    <img src="/img/HNG Logo.svg" alt="HNG logo" class="logo">
                    <div class="sign">
                      <p class="sign">Seyi Onifade</p>
                      <hr/>
                      <h6 class="fourth">CEO</h6>
                    </div>
                </div>

                <!-- right-side of certificate -->
                <div class="right">
                    <div class="border-img">
                        <div class="long-img">
                            <div class="rectangle">
                                <img src="/img/ellipse.svg" alt="ellipse">

                                <div class="rectangle-text">
                                    <p>Programme</p>
                                    <p>Certificate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="certificate-banner">
                        <div class="rectangle">
                            <img src="assets/img/ellipse.svg" alt="ellipse">

                            <div class="rectangle-text">
                                <p>Programme</p>
                                <p>Certificate</p>
                            </div>
                        </div>
                        <div class="triangle_down"></div>
                    </div> -->

                    <div class="creditations">
                        <h6>
                            Verify at <a href="{{ url('certificates/' . $certificate->hngi_id) }}">{{ url('certificates/' . $certificate->hngi_id) }}</a>
                        </h6>
                        <div>
                            <p>Hotels.ng Internship has verified that this individual has completed</p>
                            <p>to a degree the 8th Edition of the HNG Internship</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($certificate->downloadable == 1)
        <form action="/generate-pdf" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$certificate->hngi_id}}">
            <button class="btn btn-success">Download</button>
        </form>
    @endif
</div>
<script>
  let today = new Date()
  date = today.toISOString().slice(0, 10)
  let splitString = date.split("-")
  console.log(splitString)
  let reverseArray = splitString.reverse();
  var joinArray = reverseArray.join("/")
  document.querySelector('.my-date').textContent = joinArray;
</script>
</body>
</html>
