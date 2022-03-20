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

<x-belownav title="Create Sell Post" text="create new car" />

@section("content")
    <div class="row mt-3">
        <div class="col-12">
            <form action="">
                <div class="">
                    <img src="{{ asset("storage/car/placeholder.jpg") }}" id="profilePrev" class="mb-3 shadow-lg" style="cursor: pointer" alt="">
                </div>
                <input type="file" class="d-none" name="photo" id="profileImg">
            </form>
        </div>
    </div>
@endsection
@push("scripts")

    <script>
        let profilePrev = document.querySelector("#profilePrev");
        let profile = document.querySelector("#profileImg");
        profilePrev.addEventListener("click",_=>profile.click())
        profile.addEventListener("change",_=>{
            let file = profile.files[0];
            let reader = new FileReader();
            reader.onload = function (){
                profilePrev.src = reader.result;
            }
            reader.readAsDataURL(file);
        })

    </script>

@endpush
