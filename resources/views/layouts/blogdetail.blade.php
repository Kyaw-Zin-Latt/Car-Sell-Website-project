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
        <div class="col-4 mb-3">
            <div class="card border-0 mb-3">
                <div class="position-relative">
                    <img src="{{ asset("img/cars/car-special1.jpg") }}" class="card-img-top">
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
                    <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">The Title Name</h6>
                    <div class="mb-4 mt-2">
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-clock"></i>
                            Jan 18, 2022
                        </small> |
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-comment"></i>
                            0 comment
                        </small>
                    </div>
                    <small class="d-block text-black-50 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, sequi, ullam! Earum illum ipsum quos sit totam. Aliquid animi commodi, cum cumque fugit maxime nostrum quis totam veritatis voluptas voluptatum.
                    </small>
                    <div class="d-flex">
                        <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Readmore</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="card border-0 mb-3">
                <div class="position-relative">
                    <img src="{{ asset("img/cars/car-special1.jpg") }}" class="card-img-top">
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
                    <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">The Title Name</h6>
                    <div class="mb-4 mt-2">
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-clock"></i>
                            Jan 18, 2022
                        </small> |
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-comment"></i>
                            0 comment
                        </small>
                    </div>
                    <small class="d-block text-black-50 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, sequi, ullam! Earum illum ipsum quos sit totam. Aliquid animi commodi, cum cumque fugit maxime nostrum quis totam veritatis voluptas voluptatum.
                    </small>
                    <div class="d-flex">
                        <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Readmore</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="card border-0 mb-3">
                <div class="position-relative">
                    <img src="{{ asset("img/cars/car-special1.jpg") }}" class="card-img-top">
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
                    <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">The Title Name</h6>
                    <div class="mb-4 mt-2">
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-clock"></i>
                            Jan 18, 2022
                        </small> |
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-comment"></i>
                            0 comment
                        </small>
                    </div>
                    <small class="d-block text-black-50 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, sequi, ullam! Earum illum ipsum quos sit totam. Aliquid animi commodi, cum cumque fugit maxime nostrum quis totam veritatis voluptas voluptatum.
                    </small>
                    <div class="d-flex">
                        <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Readmore</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="card border-0 mb-3">
                <div class="position-relative">
                    <img src="{{ asset("img/cars/car-special1.jpg") }}" class="card-img-top">
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
                    <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">The Title Name</h6>
                    <div class="mb-4 mt-2">
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-clock"></i>
                            Jan 18, 2022
                        </small> |
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-comment"></i>
                            0 comment
                        </small>
                    </div>
                    <small class="d-block text-black-50 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, sequi, ullam! Earum illum ipsum quos sit totam. Aliquid animi commodi, cum cumque fugit maxime nostrum quis totam veritatis voluptas voluptatum.
                    </small>
                    <div class="d-flex">
                        <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Readmore</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="card border-0 mb-3">
                <div class="position-relative">
                    <img src="{{ asset("img/cars/car-special1.jpg") }}" class="card-img-top">
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
                    <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">The Title Name</h6>
                    <div class="mb-4 mt-2">
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-clock"></i>
                            Jan 18, 2022
                        </small> |
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-comment"></i>
                            0 comment
                        </small>
                    </div>
                    <small class="d-block text-black-50 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, sequi, ullam! Earum illum ipsum quos sit totam. Aliquid animi commodi, cum cumque fugit maxime nostrum quis totam veritatis voluptas voluptatum.
                    </small>
                    <div class="d-flex">
                        <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Readmore</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="card border-0 mb-3">
                <div class="position-relative">
                    <img src="{{ asset("img/cars/car-special1.jpg") }}" class="card-img-top">
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
                    <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">The Title Name</h6>
                    <div class="mb-4 mt-2">
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-clock"></i>
                            Jan 18, 2022
                        </small> |
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-comment"></i>
                            0 comment
                        </small>
                    </div>
                    <small class="d-block text-black-50 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, sequi, ullam! Earum illum ipsum quos sit totam. Aliquid animi commodi, cum cumque fugit maxime nostrum quis totam veritatis voluptas voluptatum.
                    </small>
                    <div class="d-flex">
                        <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Readmore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
