@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-5 pb-7 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-9 pt-5">
                        <h1 class="text-white">{{ __('PowerMarket Solar Mapping') }}</h1>
                        <h3 class="text-white">
                            {{ __('Beta') }}
                        </h3>

                        <h2 class="text-lead text-light mt-3 mb-0">
                            {{ __('Locate ideal solar sites, forecast their generation prospects, and calculate your potential ROI') }}
                            @include('alerts.migrations_check')
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
