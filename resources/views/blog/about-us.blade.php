@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('About Us') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <center>
                            Halaman ini menampilkan informasi mengenai kami
                        </center><br>
                        Contoh About-Us : <br>
                        Grammarly improves communication among the world’s 2+ billion native and
                        non-native English writers. Our flagship product, the Grammarly® Editor, corrects
                        contextual spelling mistakes, checks for more than 250 common grammar errors, enhances
                        vocabulary usage and provides citation suggestions. More than 4 million registered users
                        worldwide trust Grammarly’s products, which are also licensed by more than 600 leading universities
                        and corporations. Grammarly is a privately held company with offices in San Francisco and Kyiv.<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection