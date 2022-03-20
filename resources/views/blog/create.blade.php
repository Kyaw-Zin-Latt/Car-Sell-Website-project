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

<x-belownav title="Create Blog" text="create blog" />

@section("content")
    <div class="row mt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-primary">Create New Blog</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("blog.store") }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="title" value="{{ old("title") }}" id="title" placeholder="title@example.com">
                            <label for="yourName">Please Enter Blog Title</label>
                            @error("title")
                            <small class="fw-bolder text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="">
                            <img src="{{ asset("storage/car/placeholder.jpg") }}" id="profilePrev" class="mb-3 shadow-lg" style="cursor: pointer; width: 100%; height: 400px" alt="">
                        </div>
                        <input type="file" class="d-none" name="photo" id="profileImg">

                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control" name="description" id="desc" placeholder="description@example.com" style="height: 250px">{{ old("description") }}</textarea>
                            <label for="yourName">Please Enter Your Description</label>
                            @error("description")
                            <small class="fw-bolder text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="">
                            <button class="btn btn-primary">Create New Blog</button>
                            <a href="" class="btn btn-outline-primary w-auto">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <di class="card">
                <div class="card-header">
                    <h4 class="text-primary">Post Preview</h4>
                </div>
                <div class="card-body">
                    <img id="previewImg" src="{{ asset("storage/car/placeholder.jpg") }}" class="" style="width: 100%; height: 200px" alt="">
                    <h6 id="previewTitle" class="mb-0 card-title fw-bolder text-dark fst-italic mt-3">The Title Name</h6>
                    <div class="mb-4 mt-2">
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-clock"></i>
                            {{ now()->format("d M Y") }}
                        </small> |
                        <small class="text-black-50 my-2 fw-bolder fst-italic">
                            <i class="far fa-comment"></i>
                            0 comment
                        </small>
                    </div>
                    <p class="text-black-50" id="previewDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ducimus, ipsa iste nihil non perspiciatis repellendus reprehenderit tempore voluptatum! Beatae commodi deleniti eligendi ipsum laboriosam modi nostrum obcaecati sequi voluptate!
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto aut cumque, dicta, distinctio doloribus eos illo impedit iusto minima nihil, porro possimus quidem repudiandae sunt tenetur ullam unde vitae.
                    </p>
                </div>
            </di>
        </div>
    </div>
@endsection
@push("scripts")

    <script>
        let profilePrev = document.querySelector("#profilePrev");
        let profile = document.querySelector("#profileImg");

        let title = document.querySelector("#title");
        let desc = document.querySelector("#desc");

        let prevTitle = document.querySelector("#previewTitle");
        let prevImg = document.querySelector("#previewImg");
        let prevDesc = document.querySelector("#previewDesc");

        title.addEventListener("keyup",_=>{
            let titleVal = title.value;
            console.log(titleVal);

            prevTitle.innerHTML = titleVal;
        })

        desc.addEventListener("keyup",_=>{
            let descVal = desc.value;
            console.log(descVal);

            prevDesc.innerHTML = descVal;
        })

        profilePrev.addEventListener("click",_=>profile.click())
        profile.addEventListener("change",_=>{
            let file = profile.files[0];
            let reader = new FileReader();
            reader.onload = function (){
                profilePrev.src = reader.result;
                prevImg.src = reader.result;
            }
            reader.readAsDataURL(file);
        })

    </script>

@endpush
