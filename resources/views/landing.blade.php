@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header  bg-white text-center text-bold title">{{ __('HNGI CERTIFICATE MANAGER') }}</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('generate') }}" method="POST">

                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="first_name">First Name</label>
                                    <input type="text"
                                           class="form-control" name="first_name" id="first_name"
                                           aria-describedby="first_name-help" placeholder="John" required>
                                    <small id="first_name-help" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="last_name">Last Name</label>
                                    <input type="text"
                                           class="form-control" name="last_name" id="last_name"
                                           aria-describedby="last_name-help" placeholder="Doe" required>
                                    <small id="last_name-help" class="form-text text-muted">Help text</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="hngi_id">HNGI-ID</label>
                                    <input type="text"
                                           class="form-control" name="hngi_id" id="hngi_id"
                                           aria-describedby="hngi_id-help" placeholder="John" required>
                                    <small id="hngi_id-help" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">TRACK</label>
                                        <select class="form-control" name="track" id="" required>
                                            <option value="UI/UX Designer">Design</option>
                                            <option value="Frontend Developer">Front End</option>
                                            <option value="Frontend Developer">Back End</option>
                                            <option value="Mobile Developer">Mobile</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label for="cohort">cohort</label>
                                        <select class="form-control" name="cohort" id="cohort" required>
                                            <option value="7.0">7.0</option>
                                            <option value="6.0">6.0</option>
                                            <option value="5.0">5.0</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label for="version">Certificate Type</label>
                                        <select class="form-control" name="version" id="version" required>
                                            <option value="1">type 1</option>
                                            <option value="2">type 2</option>
                                            <option value="3">type 3</option>
                                            <option value="4">type 4</option>
                                            <option value="5">type 5</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Enter email" required>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with
                                            anyone else.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="form-group">
                                        <input type="checkbox" name="sendmail"> Send to my email
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <input type="submit" class="btn btn-primary mr-3" name="Create" value="Create">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
