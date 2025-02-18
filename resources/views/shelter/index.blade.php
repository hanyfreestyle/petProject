@extends('layouts.app')

@section('content')

    <div class="pt-2"></div>

    <div class="container mt-2">


        @foreach($shelters as $shelter)
            <div class="card mt-3" style="border-radius: 10px">
                <div class="card-body d-flex align-items-center direction-rtl">
                    <div class="card-img-wrap">

                        @if(!empty($shelter->logo))
                            <img class="mb-3 rounded" src="{{ Storage::disk('public')->url($shelter->logo)  }}" alt="">
                        @else
                            <img class="mb-3 rounded" src="{{ asset('images/nophoto.jpg') }}" alt="">
                        @endif


                    </div>
                    <div class="card-content">
                        <h5 class="mb-3"> {{$shelter->name}}</h5>
                        <p><b>Our Services :</b>
                            {{Str::of($shelter->services)->limit(50)}}
                        </p>
                        <a class="btn btn-info rounded-pill" href="{{route('web.shelterView',['id'=>$shelter->id])}}">
                            <i class="fa-regular fa-heart"></i>
                            Learn More</a>
                    </div>
                </div>
            </div>
        @endforeach





    </div>

    <div class="pb-3"></div>
@endsection
