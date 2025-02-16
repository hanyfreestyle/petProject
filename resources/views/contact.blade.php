@extends('layouts.app')

@section('content')

    <div class="container py-3">
        <!-- Contact Form -->
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="mb-3">Write to us</h5>

                <div class="contact-form">
                    <form action="#">
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Your name">
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="email" placeholder="Enter email">
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Subject">
                        </div>

                        <div class="form-group mb-3">
                         <textarea class="form-control" name="textarea" cols="30" rows="10" placeholder="Write details"></textarea>
                        </div>
                        <button class="btn btn-primary w-100">Send Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    @if($settings->map_is_active and $settings->map_url ?? null)
            <div class="card">
                <div class="card-body">
                    <div class="google-maps">
                        <h5 class="mb-3">Our location</h5>
                        <iframe class="w-100" src="{{urldecode($settings->map_url)}}" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="py-4"></div>
@endsection

