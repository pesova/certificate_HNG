<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="/css/cert%20four.css">
    <title>Certificate Four</title>
</head>
<body>
<div class="container-fluid">
    <div class="cert-box">
        <div class="logo">
            <img class="img-fluid" src="/assets/img/hng_logo-min 3.png" alt="">
        </div>
        <div class="text-box">
            <div class="certificate">
                <h2>CERTIFICATE</h2>
                <p>OF Completion</p>
            </div>
            <div class="certify-that">
                <p>This is to certify that</p>
            </div>
            <div class="name">
                <h2>{{$certificate->first_name}} {{$certificate->last_name}}</h2>
            </div>
            <div class="div-con">
                <div class="divider"></div>
            </div>
            <div class="completed">
                <p>completed the HNGi7 that lasted from <span>16 July</span> through to <span>18 Sept</span></p>
            </div>
            <div class="as">
                <p>As a</p>
            </div>
            <div class="track">
                <h3>{{$certificate->track}}</h3>
            </div>
            <div class="row">
                <div class="col">
                    <div class="sign sign-one">
                        <div class="signature">
                            <p class="date-issued">15th july 2020</p>
                            <div class="sign-line"></div>
                            <p>Date Issued</p>
                        </div>
                        <small>
                            Verify at <a href="{{ url('certificates/' . $certificate->hngi_id) }}">{{ url('certificates/' . $certificate->hngi_id) }}</a>
                        </small>
                    </div>
                </div>
                <div class="col">
                    <div class="sign sign-two">
                        <div class="signature">
                            <p class="signer">Seyi Onifade</p>
                            <div class="sign-line"></div>
                            <p>CEO, HNG Internship</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
  let today = new Date()
  date = today.toDateString()
  document.querySelector('.date-issued').textContent = date;
</script>
</body>
</html>
