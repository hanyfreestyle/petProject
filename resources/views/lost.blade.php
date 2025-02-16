@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <!-- Contact Form -->
        <div class="card mb-3">
            <div class="card-body">

                <img src="{{asset('assets/help-me.png')}}">
                <h5 class="mb-3">Help Me to Find My Pet</h5>

                <div class="contact-form">
                    <form action="#">
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Pet Name" name="petName" required>
                        </div>



                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Owner's Full Name" name="ownerName" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Owner's Phone Number" name="ownerPhone" required>
                        </div>

                        <div class="form-group mb-3">
                            <textarea class="form-control" name="details" cols="30" rows="10" placeholder="Description "></textarea>
                        </div>


                        <div class="form-group mb-3">
                            <input class="form-control" type="file" name="petImage">
                        </div>


                        <button class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

