@extends('layouts.app')

@section('content')



    <div class="page-content-wrapper py-3">
        <div class="container mb-5">
            <div class="card image-gallery-card direction-rtl">
                <div class="card-body">


                    <div class="text-center">
                        @if(!empty($about['photo']))
                            <img class="mb-3 rounded" src="{{ Storage::disk('public')->url($about['photo']) }}" alt="">
                        @endif
                    </div>



                    <h5>{{$about->title}}</h5>
                    <p>{{$about->description}}</p>

{{--                    <p class="mb-4">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything--}}
{{--                        embarrassing hidden in the middle of text.</p>--}}

{{--                    <div class="row">--}}
{{--                        <!-- Single Counter -->--}}
{{--                        <div class="col-4">--}}
{{--                            <div class="single-counter-wrap text-center mb-4">--}}
{{--                                <i class="bi bi-basket mb-1 text-success"></i>--}}
{{--                                <h4 class="mb-0 text-success">--}}
{{--                                    <span class="counter">1400</span>+--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Counter -->--}}
{{--                        <div class="col-4">--}}
{{--                            <div class="single-counter-wrap text-center mb-4">--}}
{{--                                <i class="bi bi-cup mb-1 text-primary"></i>--}}
{{--                                <h4 class="mb-0 text-primary">--}}
{{--                                    <span class="counter">16</span>k--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Counter -->--}}
{{--                        <div class="col-4">--}}
{{--                            <div class="single-counter-wrap text-center mb-4">--}}
{{--                                <i class="bi bi-emoji-smile mb-1 text-danger"></i>--}}
{{--                                <h4 class="mb-0 text-danger">--}}
{{--                                    <span class="counter">963</span>+--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    @if($about->title_2 and $about->description_2)
                        <h5>{{$about->title_2}}</h5>
                        <p>{{$about->description_2}}</p>
                    @endif

                    @if($about->title_3 and $about->description_3)
                        <h5>{{$about->title_3}}</h5>
                        <p>{{$about->description_3}}</p>
                    @endif

                    <a href="{{route('web.contact')}}" class="btn btn-primary mt-3 w-100">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
@endsection

