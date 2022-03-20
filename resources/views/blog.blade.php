@extends("layouts.master")

@section("style")

    <style>
        .bg-overlay-4{
            height: 80px;
            background: linear-gradient(90deg, #000000e8, #1a182094), url(http://localhost:8000/img/cars/car25.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 300px;
            box-shadow: #0b0b0e;
        }
    </style>

@endsection

<x-belownav title="Blog" text="Blog" />

@section("content")
    <div class="row mt-5 mb-2">
        @foreach($blogs as $blog)
        <div class="col-4 mb-3">
            <div class="card border-0 mb-3 h-100 scroll-reveal">
                <div class="position-relative">
                    <img src="{{ asset("storage/blog/".$blog->photo) }}" style="height: 220px" class="card-img-top">
                    <div class="position-absolute bottom-0 d-flex mb-2" style="right: 10px">
                        <div class="bg-secondary me-2 px-1">
                            <i class="fas fa-play-circle fa-fw"></i>
                        </div>
                        <div class="bg-secondary px-1">
                            <a class="venobox" href="{{ asset("img/cars/car-special1.jpg") }}">
                                <i class="fas fa-image fa-fw text-dark"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="card-body p-0 mt-3">
                    <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">{{ $blog->title }}</h6>
                    <div class="mb-4 mt-2">
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-clock"></i>
                            {{ $blog->created_at->format("d M Y") }}
                        </small> |
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-comment"></i>
                            0 comment
                        </small>
                    </div>
                    <small class="d-block text-black-50 ">
                        {{ $blog->excerpt }}
                    </small>
                </div>
                <div class="card-footer p-0" style="background-color: #fffeff;">
                    <a href="{{ route("blog.show",$blog->id) }}" class="btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Readmore</a>

                </div>
            </div>
        </div>
        @endforeach
        <div class="row mt-3">
           <div class="col-12 d-flex justify-content-center align-items-center">
               {{ $blogs->appends(Request::all())->links() }}
           </div>
        </div>
    </div>
@endsection
