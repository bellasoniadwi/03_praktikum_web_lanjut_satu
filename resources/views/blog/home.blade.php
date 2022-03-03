@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <center>
                            You Are Successfully Logged In!<br>
                            Halo, Selamat Datang di Website Saya!
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection