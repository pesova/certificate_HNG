@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header  bg-white text-center text-bold title">{{ __('HNGI CERTIFICATE MANAGER') }}</h2>
                    <form action="{{ route('generate') }}" method="POST">
                        <div class="card-body">
                        @csrf
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="first_name">First Name</label>
                            <input type="text"
                              class="form-control" name="first_name" id="first_name" aria-describedby="first_name-help" placeholder="John" required>
                            <small id="first_name-help" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="form-group  col-md-6">
                            <label for="last_name">Last Name</label>
                            <input type="text"
                              class="form-control" name="last_name" id="last_name" aria-describedby="last_name-help" placeholder="Doe" required>
                            <small id="last_name-help" class="form-text text-muted">Help text</small>
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="hngi_id">HNGI-ID</label>
                                <input type="text"
                                  class="form-control" name="hngi_id" id="hngi_id" aria-describedby="hngi_id-help" placeholder="John" required>
                                <small id="hngi_id-help" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="track_id">TRACK</label>
                                  <select class="form-control" name="track_id" id="track_id" required>
                                    <option value="1">Design</option>
                                    <option value="2">Front End</option>
                                    <option value="3">Back End</option>
                                    <option value="4">Mobile</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                                <div class="form-group">
                                  <label for="track_id">TRACK</label>
                                  <select class="form-control" name="track_id" id="track_id" required>
                                    <option value="7.0">7.0</option>
                                    <option value="6.0">6.0</option>
                                    <option value="5.0">5.0</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                        </div>
                        </div>
                        <div class="card-footer text-center">
                        <input type="submit" class="btn btn-primary mr-3" name="Download" value="Download">
                        <input type="submit" class="btn btn-warning ml-3" name="email" value="Send to mail">
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
