@extends('home.app')
@section('content')
    <div class="home_content">
        <div class="w-100 h-500 Rectangle Rectangle1 d-flex justify-content-end">
            <div class="description text-white d-flex">
                <div class="text-white description_name">
                    <p class="font-weight-lighter">MACBOOK</p>
                    <p class="font-weight-bold">PRO</p>
                </div>
                <div class="description_param">
                    <p>16 INCH</p>
                    <p>268GB MEMORY</p>
                </div>
                <button type="button" class="bg-white  explore">
                    EXPLORE
                </button>
                {{--            <div class="btn bg-white  explore"> EXPLORE</div>--}}
            </div>
        </div>
        <div class="popular_categories_container">
            <p class="popular_text">Popular Categories</p>

            <div class="popular_categories_img_container">
                @for ($i = 0; $i < count($imgs) ; $i++)
                    <figure>
                        <div class="popular_categories_img">
                            <img src="{{asset('storage/'.$imgs[$i])}}" alt="photo">
                        </div>

                        <figcaption class="d-flex justify-content-center">{{$figcaption[$i]}}</figcaption>
                    </figure>
                @endfor

            </div>
        </div>

        <div class="w-100 h-500 Rectangle Rectangle2 d-flex justify-content-end">
            <div class="description text-white d-flex">
                <div class="text-white description_name">
                    <p class="font-weight-lighter">TURN THE</p>
                    <p class="font-weight-bold">WORLD</p>
                </div>
                <div class="description_param">
                    <div class='d-flex align-items-baseline justify-content-sm-between h-160'>
                        <p class="font-weight-lighter mr-2" >UPSIDE</p>
                        <p class="down">DOWN</p>
                    </div>
                    <div>
                        <p class="font-weight-lighter mr-2">WITH BRAND NEW</p>
                        <p class="font-weight-normal font_size mb-3">HEADPHONES</p>
                    </div>
                </div>
                <button type="button" class="bg-white  explore">
                    EXPLORE
                </button>
                {{--            <div class="btn bg-white  explore"> EXPLORE</div>--}}
            </div>
        </div>


    </div>
@endsection
