<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Certificate Landing Page"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<link rel="stylesheet" href="/css/index.css">
<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
<title>JL - Certify</title>
</head>
<body>

    <!--HEADER / NAVIGATION -->

    <header class="header">
        <div class="main-nav">
            <div class="logo">JL-<span class="text-danger">Certify</span></div>
            <div class="navigation">
                <a href="/" class="link current">Home</a>
                <a href="#certs" class="link">Certificates</a>
            </div>
            <div class="menu-btn">
                <div class="btn-line"></div>
                <div class="btn-line"></div>
                <div class="btn-line"></div>
            </div>
        </div>

        <div class="landing my-5">
            <h1 class="landing-text text-center">THE BEST <span class="text-danger">CERTIFICATES</span></h1>
            <h4>ALL LAID OUT</h4>
            <br>
            <br>
        <a class="btn btn-success"  href="{{ route('landing') }}"> Request Certificate Now</a>
        </div>
    </header>

    <!-- End of Navigation -->

    <!--USAGE SECTION -->
    <div class="container-fluid py-5" id="usage">
        <h2 class="text-center title my-3">Guide</h2>
        <p class="text-center text-secondary">Browse through our collections of certificates and make your pick</p>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mt-5 usage-card">
                <h1 ><i class='bx bxs-book-content icon'></i></h1>
                <div class="desc">
                    <h4>Browse</h4>
                    <p>Browse through our certificates</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mt-5 usage-card">
                <h1><i class='bx bxs-hand-up icon'></i></h1>
                <div class="desc">
                    <h4>Pick</h4>
                    <p>Select your most preferred</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mt-5 usage-card">
                <h1><i class='bx bx-money icon'></i></h1>
                <div class="desc">
                    <h4>Fill</h4>
                    <p>Fill in the required details</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mt-5 usage-card">
                <h1 ><i class='bx bxs-download icon'></i></h1>
                <div class="desc">
                    <h4>Download</h4>
                    <p>Get certificate with license and rights</p>
                </div>
            </div>
        </div>
    </div>

    <!-- END OF LANDING -->


    <!-- Expenditure Section -->
    <section class="expenditure" id="certs">
        <h2 class="text-center mt-5 title">Gallery</h2>
        <p class="text-center text-secondary">Browse through our collections of certificates and make your pick</p>
        <div class="container-fluid expenditure-row">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mt-5">
                    <a href="#" class="preview" data-toggle="modal" data-target="#cert1">
                        <div class="expenditure-card">
                        <div class="certificate" id="img1"></div>
                        <div class="contain">
                            <a href="#" class="preview" data-toggle="modal" data-target="#cert1">Preview</a>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mt-5">
                    <a href="#" data-toggle="modal" data-target="#cert2" class="preview">
                        <div class="expenditure-card">
                        <div class="certificate" id="img2">
                        </div>
                        <div class="contain">
                            <a href="#" data-toggle="modal" data-target="#cert2" class="preview">Preview</a>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mt-5">
                    <a href="#" data-toggle="modal" data-target="#cert3" class="preview">
                        <div class="expenditure-card">
                        <div class="certificate" id="img3">
                        </div>
                        <div class="contain">
                            <a href="#" data-toggle="modal" data-target="#cert3" class="preview">Preview</a>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-5">
                    <a href="#" data-toggle="modal" data-target="#cert4" class="preview">
                        <div class="expenditure-card">
                        <div class="certificate" id="img4">


                        </div>
                        <div class="contain">
                            <a href="#" data-toggle="modal" data-target="#cert4" class="preview">Preview</a>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-5">
                    <a href="#" data-toggle="modal" data-target="#cert5" class="preview">
                        <div class="expenditure-card">
                        <div class="certificate" id="img5">


                        </div>
                        <div class="contain">
                            <a href="#" data-toggle="modal" data-target="#cert5" class="preview">Preview</a>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mt-5">
                    <div class="expenditure-card">
                        <div class="certificate" id="img1">


                        </div>
                        <div class="contain">
                            <a href="#" class="preview">Preview</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mt-5">
                    <div class="expenditure-card">
                        <div class="certificate" id="img1">


                        </div>
                        <div class="contain">
                            <a href="#" class="preview">Preview</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mt-5">
                    <div class="expenditure-card">
                        <div class="certificate" id="img1">


                        </div>
                        <div class="contain">
                            <a href="#" class="preview">Preview</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mt-5">
                    <div class="expenditure-card">
                        <div class="certificate" id="img1">


                        </div>
                        <div class="contain">
                            <a href="#" class="preview">Preview</a>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>

    </section>

    <!-- <section class="container-fluid my-5" id="pricing">
        <h4 class="title text-center ">Pricing</h4>

    </section> -->
    <footer>
        <div>made by Team <span class="text-danger">Justice-League</span></div>
    </footer>

    {{-- Modals  --}}
    <div class="modal fade" id="cert1" tabindex="-1" role="dialog" aria-labelledby="certificatee1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img class="img-fluid" src="/img/certificate1.png" alt="certificate1">
                <div class="modal-footer">
                    <a href="{{route('landing')}}?type=1" class="btn btn-primary" type="button">Select</a>
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cert2" tabindex="-1" role="dialog" aria-labelledby="certificate2" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img class="img-fluid" src="/img/certificate2.png" alt="certificate1">
                <div class="modal-footer">
                    <a href="{{route('landing')}}?type=2" class="btn btn-primary" type="button">Select</a>
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cert3" tabindex="-1" role="dialog" aria-labelledby="certificate3" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img class="img-fluid" src="/img/certificate3.png" alt="certificate3">
                <div class="modal-footer">
                    <a href="{{route('landing')}}?type=3" class="btn btn-primary" type="button">Select</a>
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cert4" tabindex="-1" role="dialog" aria-labelledby="certificate44" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img class="img-fluid" src="/img/certificate4.png" alt="certificate4">
                <div class="modal-footer">
                    <a href="{{route('landing')}}?type=4" class="btn btn-primary" type="button">Select</a>
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cert5" tabindex="-1" role="dialog" aria-labelledby="certificate5" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img class="img-fluid" src="/img/certificate5.png" alt="certificate5">
                <div class="modal-footer">
                    <a href="{{route('landing')}}?type=5" class="btn btn-primary" type="button">Select</a>
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>



<script src="/js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
