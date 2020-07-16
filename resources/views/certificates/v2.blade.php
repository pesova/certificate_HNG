<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">--}}
    <link rel="stylesheet" href="/css/cert two.css">
    <title>Certificate Two</title>

</head>
<body>
<div class="container-fluid">
    <!-- <div class="row"> -->
    <div class="cert-box">
        <div class="top-image">
            <img src="/img/Vector 2.png" class="img-fluid" alt="">
        </div>
        <div class="text-box">
            <div class="cert-complete">
                <h2>Certification of Completion</h2>
            </div>
            <div class="awarded">
                <p>Awarded To</p>
            </div>
            <div class="name">
                <p>{{$certificate->first_name}} {{$certificate->last_name}}</p>
            </div>
            <div class="completed">
                <p>For Completing HNGI7 As A</p>
            </div>
            <div class="row bottom">
                <div class="col-lg-8">
                    <div class="track">
                        <h2>{{$certificate->track}}</h2>
                    </div>
                    <div class="remarks">
                        <p>
                            he has proven to be deligent, resourceful and a <br> team player other accomplishements he
                            made on <br> the internship
                            <small>
                                Verify at <a href="{{ url('certificates/' . $certificate->hngi_id) }}">{{ url('certificates/' . $certificate->hngi_id) }}</a>
                            </small>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="signature-box">
                        <div class="signed">
                            <p>Seyi Onifade</p>
                            <div class="line"></div>
                            <div class="signed-position">
                                <p>CEO, HNG internship</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-img">
                    <img src="/img/Vector 3.png" alt="">
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
<!-- </div> -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
