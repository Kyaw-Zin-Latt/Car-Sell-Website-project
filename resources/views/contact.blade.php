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
        .c-border{
            display: flex;
            width: 32px;
            height: 32px;
            border: 1px solid red;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
        }
    </style>

@endsection

<x-belownav title="Contact Us" text="Contact Us" />

@section("content")
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body px-0">
                    <h4 class="mb-3 fst-italic fw-bolder text-dark text-uppercase border-start border-5 border-primary">&nbsp;&nbsp; Contact Form</h4>
                    <form action="" class="px-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="fst-italic text-uppercase fw-bolder text-dark">Your Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name">
                                    </div>
                                    <div class="col">
                                        <label for="" class="fst-italic text-uppercase fw-bolder text-dark">Your Phone</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Phone">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <label for="" class="fst-italic text-uppercase fw-bolder text-dark">Your Email</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                    <div class="col">
                                        <label for="" class="fst-italic text-uppercase fw-bolder text-dark">Your Address</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="" class="fst-italic text-uppercase fw-bolder text-dark">Your Message</label>
                                    <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Enter Your Message/Comment/Feedback"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-primary btn-lg text-uppercase">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-3 mt-5">
        <div class="col-5 ">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-uppercase active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Showroom 1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-uppercase" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">showroom 2</button>
                </li>
            </ul>
            <div class="d-flex mb-3 align-items-center">
                <div class="c-border">
                    <i class="fas fa-location-dot text-primary"></i>
                </div>
                <p class="text-secondary mb-0 ms-2">
                    No 25, Anawmar Road, Tharkayta, Yangon
                </p>
            </div>
            <div class="d-flex mb-3 align-items-center">
                <div class="c-border">
                    <i class="fas fa-phone-alt text-primary"></i>
                </div>
                <p class="text-secondary mb-0 ms-2">
                    09773926994
                </p>
            </div>
            <div class="d-flex mb-3 align-items-center">
                <div class="c-border">
                    <i class="fas fa-envelope text-primary"></i>
                </div>
                <p class="text-secondary mb-0 ms-2">
                    kyawzinlat43021@gmail.com
                </p>
            </div>

        </div>
        <div class="col-7 px-0">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.6623834615843!2d96.19504931518111!3d16.793464524081248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed1fa51f955b%3A0x4a89bb25fa1ef161!2sAnawmar%20Street%2020%2C%20Yangon%2C%20Myanmar%20(Burma)!5e0!3m2!1sen!2ssg!4v1647668888110!5m2!1sen!2ssg" width="575" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
            </div>
        </div>
    </div>
@endsection
