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

    <x-belownav title="About Us" text="About" />

@section("content")
    <div class="row">
        <div class="col-12">
            <div class="row my-4">
                <div class="col-6">
                    <div class="">
                        <img src="{{ asset("img/cars/car25.jpg") }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="mb-0 fst-italic fw-bolder text-capitalize border-4 border-primary border-start">&nbsp;&nbsp; Welcome To CarWorld</h4>
                    <p class="text-black my-3 fw-bold">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam cum dolorem facilis nemo provident repellat suscipit, tempora. Alias excepturi perferendis possimus tempore veniam.
                    </p>
                    <p class="mb-0 text-black-50">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis eveniet illum modi necessitatibus sit. Aspernatur distinctio, harum hic in, labore minus molestiae natus possimus quasi, quia saepe soluta tenetur voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis deleniti deserunt dignissimos, distinctio dolore error facilis, hic ipsum laboriosam quidem voluptate voluptatum! Beatae ea eligendi quidem! Distinctio, quo?
                    </p>
                </div>
            </div>
            <div class="row my-4 mt-5">
                <div class="col-6">
                    <h4 class="mb-0 fst-italic fw-bolder text-capitalize border-4 border-primary border-start">&nbsp;&nbsp; Why Choice Us</h4>
                    <p class="text-black-50 my-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam cum dolorem facilis nemo provident repellat suscipit, tempora. Alias excepturi perferendis possimus tempore veniam.
                        Lorem ipsum dolor sit anim facere modi nostrum quae quasi quo? Dolorem!
                    </p>
                    <div class="">
                        <p class="text-black-50">
                            <i class="fas fa-solid fa-check text-primary fw-bolder me-3 h5"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <p class="text-black-50">
                            <i class="fas fa-solid fa-check text-primary fw-bolder me-3 h5"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <p class="text-black-50">
                            <i class="fas fa-solid fa-check text-primary fw-bolder me-3 h5"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <p class="text-black-50">
                            <i class="fas fa-solid fa-check text-primary fw-bolder me-3 h5"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <p class="text-black-50">
                            <i class="fas fa-solid fa-check text-primary fw-bolder me-3 h5"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="">
                        <img src="{{ asset("img/cars/car21.jpg") }}" height="" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
