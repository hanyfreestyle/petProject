@extends('layouts.app')

@section('content')

    @if(count($slider) > 0)
        <div class="tiny-slider-one-wrapper">
            <div class="tiny-slider-one">
                @foreach($slider as $slide)
                    @php
                        $photo =  Storage::disk('public')->url($slide['photo'])
                    @endphp
                    <div>
                        <div class="single-hero-slide bg-overlay" style="background-image: url('{{$photo}}')">
                            <div class="h-100 d-flex align-items-center text-center">
                                <div class="container">
                                    @if($slide['title'])
                                        <h3 class="text-white mb-1">{{$slide['title']}}</h3>
                                    @endif
                                    @if($slide['description'])
                                        <p class="text-white mb-4">{{$slide['description']}}</p>
                                    @endif
                                    @if($slide['url'])
                                        <a class="btn btn-creative btn-warning" href="{{$slide['url']}}">Read More</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="pt-3"></div>
    @endif

    <div class="container">
        <div class="card image-gallery-card direction-rtl">
            <div class="card-body">
                <h5>{{$about->title}}</h5>
                <p>{{$about->description}}</p>
            </div>
        </div>
    </div>


    @if(count($shelters) > 0)
        <div class="container">
            <div class="element-heading mt-5">
                <h6>Last Shelters add </h6>
            </div>
        </div>

        <div class="container">
            <div class="testimonial-slide-one-wrapper ">
                <div class="testimonial-slide testimonial-style1">
                    @foreach($shelters as $shelter)
                        <div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="single-testimonial-slide">
                                        <div class="image-wrapper shadow"><img src="{{asset('assets/img/bg-img/20.jpg')}}" alt=""></div>
                                        <div class="text-content">
                                            <h2>{{$shelter->name}}</h2>
                                            <p class="mb-5">{{$shelter->location}}</p>
                                            <p></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container py-4">

        </div>
    @endif




@endsection

