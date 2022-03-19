@extends("layouts.master")

@section("style")

    <style>
        [class^=imghvr-fade]:hover > img, [class*=" imghvr-fade"]:hover > img {
            opacity: 0.5;
        }
        .slick-list {
            position: relative;
            overflow: hidden;
            display: block;
            margin: 0px;
            padding: 10px;
        }

        .left {
            height: 50px;
            background: #e10200;
            position: relative;
        }
        .left:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            border-top: 50px solid #e10200;
            border-right: 37px solid #0f0e13;
            width: 0;
        }
        .bg-overlay{
            width: 100%;
            height: 450px;
            background: linear-gradient(92deg, #131315c7, #0f0e13), url(http://localhost:8000/img/cars/car7.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: bottom;
        }
        .bg-overlay-2{
            width: 100%;
            height: 380px;
            background: linear-gradient(92deg, #131315c7, #0f0e13), url({{ asset('img/cars/car-special2.jpg') }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: bottom;
        }
        .bg-overlay-3{
            height: 162px;
            background: url(http://localhost:8000/img/cars/car-special2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 49% !important;
            box-shadow: #0b0b0e;
        }
        .person-width{
            position: absolute;
            bottom: -10px;
            left: 15px;
            width: 45px;
            height: 45px;
        }
        .bg-overlay-4{
            height: 162px;
            background: url(http://localhost:8000/img/cars/car-special1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 49% !important;
        }
        .header-width {
            width: 325px !important;
        }
    </style>

@endsection

@section("car")
<div class="container-fluid">
    <div class="row">
        <div class="px-0">
            <img src="{{ asset("img/cars/home.jpg") }}" class="img-fluid" alt="">
        </div>
    </div>
</div>
@endsection

@section("content")
{{--    the best choice for you start--}}

   <div class="row mt-3">
       <div class="text-center">
           <small class="d-inline-block text-secondary fst-italic text-uppercase mb-2 fw-bold">Welcome to CarWorld</small>
           <h5 class="header-width mb-4 fw-bolder text-dark text-uppercase fst-italic border-start border-end border-5 mx-auto border-primary">The Best Choice For You</h5>
       </div>

       <div class="col-3">
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
                   <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">Name Car 2022</h6>
                   <small class="d-block text-primary my-2 fw-bolder fst-italic">$150.000</small>
                   <small class="d-block text-secondary fw-bold">Location: Poland / Lubusz / Biecz</small>
                   <small class="d-block text-secondary fw-bold">Engine: 4.2L TSi, Diesel</small>
                   <small class="d-block text-secondary fw-bold">Mileage: -</small>
                   <small class="d-block text-secondary fw-bold">Condition: <span class="text-light">new</span></small>
                   <div class="d-flex">
                       <a href="#" class="me-2 mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Details</a>
                       <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Compage</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-3">
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
                   <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">Name Car 2022</h6>
                   <small class="d-block text-primary my-2 fw-bolder fst-italic">$150.000</small>
                   <small class="d-block text-secondary fw-bold">Location: Poland / Lubusz / Biecz</small>
                   <small class="d-block text-secondary fw-bold">Engine: 4.2L TSi, Diesel</small>
                   <small class="d-block text-secondary fw-bold">Mileage: -</small>
                   <small class="d-block text-secondary fw-bold">Condition: <span class="text-light">new</span></small>
                   <div class="d-flex">
                       <a href="#" class="me-2 mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Details</a>
                       <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Compage</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-3">
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
                   <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">Name Car 2022</h6>
                   <small class="d-block text-primary my-2 fw-bolder fst-italic">$150.000</small>
                   <small class="d-block text-secondary fw-bold">Location: Poland / Lubusz / Biecz</small>
                   <small class="d-block text-secondary fw-bold">Engine: 4.2L TSi, Diesel</small>
                   <small class="d-block text-secondary fw-bold">Mileage: -</small>
                   <small class="d-block text-secondary fw-bold">Condition: <span class="text-light">new</span></small>
                   <div class="d-flex">
                       <a href="#" class="me-2 mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Details</a>
                       <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Compage</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-3">
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
                   <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">Name Car 2022</h6>
                   <small class="d-block text-primary my-2 fw-bolder fst-italic">$150.000</small>
                   <small class="d-block text-secondary fw-bold">Location: Poland / Lubusz / Biecz</small>
                   <small class="d-block text-secondary fw-bold">Engine: 4.2L TSi, Diesel</small>
                   <small class="d-block text-secondary fw-bold">Mileage: -</small>
                   <small class="d-block text-secondary fw-bold">Condition: <span class="text-light">new</span></small>
                   <div class="d-flex">
                       <a href="#" class="me-2 mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Details</a>
                       <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Compage</a>
                   </div>
               </div>
           </div>
       </div>

       <div class="col-3">
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
                   <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">Name Car 2022</h6>
                   <small class="d-block text-primary my-2 fw-bolder fst-italic">$150.000</small>
                   <small class="d-block text-secondary fw-bold">Location: Poland / Lubusz / Biecz</small>
                   <small class="d-block text-secondary fw-bold">Engine: 4.2L TSi, Diesel</small>
                   <small class="d-block text-secondary fw-bold">Mileage: -</small>
                   <small class="d-block text-secondary fw-bold">Condition: <span class="text-light">new</span></small>
                   <div class="d-flex">
                       <a href="#" class="me-2 mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Details</a>
                       <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Compage</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-3">
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
                   <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">Name Car 2022</h6>
                   <small class="d-block text-primary my-2 fw-bolder fst-italic">$150.000</small>
                   <small class="d-block text-secondary fw-bold">Location: Poland / Lubusz / Biecz</small>
                   <small class="d-block text-secondary fw-bold">Engine: 4.2L TSi, Diesel</small>
                   <small class="d-block text-secondary fw-bold">Mileage: -</small>
                   <small class="d-block text-secondary fw-bold">Condition: <span class="text-light">new</span></small>
                   <div class="d-flex">
                       <a href="#" class="me-2 mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Details</a>
                       <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Compage</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-3">
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
                   <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">Name Car 2022</h6>
                   <small class="d-block text-primary my-2 fw-bolder fst-italic">$150.000</small>
                   <small class="d-block text-secondary fw-bold">Location: Poland / Lubusz / Biecz</small>
                   <small class="d-block text-secondary fw-bold">Engine: 4.2L TSi, Diesel</small>
                   <small class="d-block text-secondary fw-bold">Mileage: -</small>
                   <small class="d-block text-secondary fw-bold">Condition: <span class="text-light">new</span></small>
                   <div class="d-flex">
                       <a href="#" class="me-2 mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Details</a>
                       <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Compage</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-3">
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
                   <h6 class="mb-0 card-title fw-bolder text-dark fst-italic">Name Car 2022</h6>
                   <small class="d-block text-primary my-2 fw-bolder fst-italic">$150.000</small>
                   <small class="d-block text-secondary fw-bold">Location: Poland / Lubusz / Biecz</small>
                   <small class="d-block text-secondary fw-bold">Engine: 4.2L TSi, Diesel</small>
                   <small class="d-block text-secondary fw-bold">Mileage: -</small>
                   <small class="d-block text-secondary fw-bold">Condition: <span class="text-light">new</span></small>
                   <div class="d-flex">
                       <a href="#" class="me-2 mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Details</a>
                       <a href="#" class="mt-4 btn btn-sm btn-secondary text-white fst-italic text-uppercase fw-bolder">Compage</a>
                   </div>
               </div>
           </div>
       </div>

   </div>

{{--    the best choice for you end--}}

@endsection

@section("whyChoiceCar")
{{--why choice carworld start--}}

    <div class="row bg-overlay m-0">
        <div class="col-12">
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <div class="container">
                        <div class="row py-4">
                            <div class="text-center">
                                <h5 class="header-width mb-4 fw-bolder text-white text-uppercase fst-italic mx-auto">
                                    Why Choice <span class="text-primary fst-italic fw-bolder"> CarWorld</span> ?
                                </h5>
                            </div>
                            <div class="col-6">
                                <p class="text-white fw-bolder fst-italic text-capitalize">
                                    editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years
                                </p>
                                <small class="text-white mb-0 text-white-50">
                                    of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </small>
                                <div class="mt-3">
                                    <p class="text-white fw-bolder fst-italic text-uppercase border-primary border-start border-4">
                                        &nbsp;&nbsp; Lorem Ipsum as their default model text
                                    </p>
                                    <p class="text-white fw-bolder fst-italic text-uppercase border-primary border-start border-4">
                                        &nbsp;&nbsp; Lorem Ipsum as their default model text
                                    </p>
                                    <p class="text-white fw-bolder fst-italic text-uppercase border-primary border-start border-4">
                                        &nbsp;&nbsp; Lorem Ipsum as their default model text
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <img src="{{ asset("img/cars/car-special2.jpg") }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--why choice carworld end--}}

{{--    carworld magazine start--}}

    <div class="row" style="background-color: #eee !important;">
        <div class="col-12">
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <div class="container">
                        <div class="row mt-3">
                            <div class="text-center">
                                <h5 class="header-width mb-4 fw-bolder text-dark text-uppercase fst-italic border-start border-end border-5 mx-auto border-primary">CarWorld Magazine</h5>
                            </div>

                            <div class="col-4">
                                <div class="card border-0 mb-3" style="background-color: #eee !important;">
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
                            <div class="col-4">
                                <div class="card border-0 mb-3" style="background-color: #eee !important;">
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
                            <div class="col-4">
                                <div class="card border-0 mb-3" style="background-color: #eee !important;">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    carworld magazine end--}}

    <div class="row bg-overlay-2 m-0">
    <div class="col-12">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <div class="container">
                    <div class="row py-4 justify-content-between">
                        <div class="text-center">
                            <div class="text-center">
                                <h5 class="header-width mb-4 fw-bolder text-white text-uppercase fst-italic border-start border-end border-5 mx-auto border-primary">Why Client love us</h5>
                            </div>
                        </div>
                    </div>
                    <div class="slick">
                        <div class="col-6">
                            <figure class="imghvr-fade" style="height: 230px; width: 98%">
                                <img src="{{ asset("img/cars/car1.jpg") }}" class="" style="height: 230px; width: 100%" alt="">
                                <figcaption>
                                    <p class="text-white text-capitalize">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque commodi cupiditate distinctio dolorem enim fugit hic in modi nulla, odio qui rem repudiandae soluta temporibus velit veniam vero voluptatem!
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-6">
                            <figure class="imghvr-fade" style="height: 230px; width: 98%">
                                <img src="{{ asset("img/cars/car21.jpg") }}" class="" style="height: 230px; width: 100%" alt="">
                                <figcaption>
                                    <p class="text-white text-capitalize">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque commodi cupiditate distinctio dolorem enim fugit hic in modi nulla, odio qui rem repudiandae soluta temporibus velit veniam vero voluptatem!
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-6">
                            <figure class="imghvr-fade" style="height: 230px; width: 98%">
                                <img src="{{ asset("img/cars/car24.jpg") }}" class="" style="height: 230px; width: 100%" alt="">
                                <figcaption>
                                    <p class="text-white text-capitalize">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque commodi cupiditate distinctio dolorem enim fugit hic in modi nulla, odio qui rem repudiandae soluta temporibus velit veniam vero voluptatem!
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-6">
                            <figure class="imghvr-fade" style="height: 230px; width: 98%">
                                <img src="{{ asset("img/cars/car20.jpg") }}" class="" alt="">
                                <figcaption>
                                    <p class="text-white text-capitalize">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque commodi cupiditate distinctio dolorem enim fugit hic in modi nulla, odio qui rem repudiandae soluta temporibus velit veniam vero voluptatem!
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-6">
                            <figure class="imghvr-fade" style="height: 230px; width: 98%">
                                <img src="{{ asset("img/cars/car21.jpg") }}" class="" style="height: 230px; width: 100%" alt="">
                                <figcaption>
                                    <p class="text-white text-capitalize">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque commodi cupiditate distinctio dolorem enim fugit hic in modi nulla, odio qui rem repudiandae soluta temporibus velit veniam vero voluptatem!
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-6">
                            <figure class="imghvr-fade" style="height: 230px; width: 98%">
                                <img src="{{ asset("img/cars/car25.jpg") }}" class="" style="height: 230px; width: 100%" alt="">
                                <figcaption>
                                    <p class="text-white text-capitalize">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque commodi cupiditate distinctio dolorem enim fugit hic in modi nulla, odio qui rem repudiandae soluta temporibus velit veniam vero voluptatem!
                                    </p>
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row my-4">
    <div class="col-12">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <div class="container">
                    <div class="row py-4 justify-content-between">
                        <div class="text-center">
                            <div class="text-center">
                                <h5 class="header-width mb-4 fw-bolder text-dark text-uppercase fst-italic border-start border-end border-5 mx-auto border-primary">Online Support 24/7</h5>
                                <p class="text-secondary fw-bolder fst-italic">Or contact us directly</p>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card shadow border border-secondary" style="max-width: 540px;">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-3 m-0">
                                        <img src="{{ asset("img/cars/profile.png") }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body py-3">
                                            <h6 class="card-title fw-bolder fst-italic mb-0">Northern Sale</h6>
                                            <p class="card-text text-primary">+95977326994</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card shadow border border-secondary" style="max-width: 540px;">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-3 m-0">
                                        <img src="{{ asset("img/cars/profile.png") }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body py-3">
                                            <h6 class="card-title fw-bolder fst-italic mb-0">Northern Sale</h6>
                                            <p class="card-text text-primary">+95977326994</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card shadow border border-secondary" style="max-width: 540px;">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-3 m-0">
                                        <img src="{{ asset("img/cars/profile.png") }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body py-3">
                                            <h6 class="card-title fw-bolder fst-italic mb-0">Northern Sale</h6>
                                            <p class="card-text text-primary">+95977326994</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card shadow border border-secondary" style="max-width: 540px;">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-3 m-0">
                                        <img src="{{ asset("img/cars/profile.png") }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body py-3">
                                            <h6 class="card-title fw-bolder fst-italic mb-0">Northern Sale</h6>
                                            <p class="card-text text-primary">+95977326994</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card shadow border border-secondary" style="max-width: 540px;">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-3 m-0">
                                        <img src="{{ asset("img/cars/profile.png") }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body py-3">
                                            <h6 class="card-title fw-bolder fst-italic mb-0">Northern Sale</h6>
                                            <p class="card-text text-primary">+95977326994</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card shadow border border-secondary" style="max-width: 540px;">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-3 m-0">
                                        <img src="{{ asset("img/cars/profile.png") }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body py-3">
                                            <h6 class="card-title fw-bolder fst-italic mb-0">Northern Sale</h6>
                                            <p class="card-text text-primary">+95977326994</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section("foot")


@endsection
