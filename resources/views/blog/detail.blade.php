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

<x-belownav title="{{ $blog->title }}" text="blog/{{ $blog->title }}" />

@section("content")
    <div class="row mt-3">
        <div class="col-12">
            <img id="previewImg" src="{{ asset("storage/blog/".$blog->photo) }}" class="w-100" alt="">
            <h6 id="previewTitle" class="mb-0 card-title fw-bolder text-dark fst-italic mt-3">{{ $blog->title }}</h6>
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
            <p class="text-black-50" id="previewDesc">
                {{ $blog->description }}
            </p>
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
