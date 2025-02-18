@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <!-- Contact Form -->
        <div class="card mb-3">
            <div class="card-body">

                <div style="display: flex;   justify-content: center;">
                    <img style="text-align: center" src="{{asset('assets/help-me.png')}}">
                </div>

                <h5 class="mb-3">Help Me to Find My Pet</h5>
                @if(session('success'))
                <div class="alert custom-alert-two alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle"></i>
                    {{ session('success') }}
                    <button class="btn btn-close btn-close-white position-relative p-1 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif


                @if($errors->any())

                    <div class="alert custom-alert-two alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-x-circle"></i>
                        {{ $errors->first() }}
                        <button class="btn btn-close btn-close-white position-relative p-1 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                @endif




                <div class="contact-form">
                    <form action="{{route('web.lostPetStore')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Pet Name" name="pet_name" required>
                        </div>



                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Owner's Full Name" name="owner_name" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Owner's Phone Number" name="owner_phone" required>
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Last Seen Place" name="last_seen" >
                        </div>

                        <div class="form-group mb-3">
                            <textarea class="form-control" name="details" cols="30" rows="10" placeholder="Description "></textarea>
                        </div>


                        <div class="form-group mb-3">
                            <input class="form-control" type="file" name="petImage">
                        </div>


                        <button class="btn btn-primary w-100">Help Me</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

