@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }} | <a href="/settings" class="btn btn-primary">Settings</a>
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

                        <h2>Certificates </h2>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">hngi id</th>
                                <th scope="col">first name</th>
                                <th scope="col">last name</th>
                                <th scope="col">track</th>
                                <th scope="col">total downloads</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($certificates as $certificate)
                                <tr>
                                    <td>{{$certificate->hngi_id}}</td>
                                    <td>{{$certificate->first_name}}</td>
                                    <td>{{ $certificate->last_name }}</td>
                                    <td>{{ $certificate->track }}</td>
                                    <td>{{ $certificate->total_downloads }}</td>
                                    <td>
                                        @if($certificate->downloadable == 1)
                                            <a href="/block/{{$certificate->id}}" class="btn btn-danger">Block
                                                downloads</a>

                                        @else
                                            <a href="/enable/{{$certificate->id}}" class="btn btn-success">Enable
                                                downloads</a>

                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{$certificates->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
