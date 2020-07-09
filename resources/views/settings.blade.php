@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Settings') }} | <a href="/home"
                                                                       class="btn btn-primary">Dashboard</a>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <h2>Options </h2>

                        <form action="/settings" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="founder">Founder</label>
                                <input type="text" class="form-control" name="founder" id="founder"
                                       aria-describedby="emailHelp" value="{{$settings->founder}}">
                            </div>
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date"
                                       value="{{$settings->start_date}}">
                            </div>
                            <div class="form-group">
                                <label for="grad_date">Graduation Date</label>
                                <input type="date" class="form-control" id="grad_date" name="grad_date"
                                       value="{{$settings->grad_date}}">
                            </div>
                            <div class="form-group">
                                <label for="cohort">Cohort</label>
                                <input type="text" class="form-control" id="cohort" name="cohort"
                                       value="{{$settings->cohort}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
