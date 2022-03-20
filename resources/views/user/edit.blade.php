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

<x-belownav title="Edit Profile" text="Edit Profile" />

@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-3 shadow-lg">
                <div class="card-body">
                    <form action="{{ route("user-update",$user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="text-center">
                            <img src="{{ asset("storage/profile/".$user->photo) }}" id="profilePrev" class="mb-3 shadow-lg rounded-circle border border-primary border-1 user-img" style="cursor: pointer" alt="">
                        </div>
                        <input type="file" class="d-none" name="photo" id="profileImg">
                        @error("photo")
                        <small class="fw-bolder text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" value="{{ old("name",$user->name) }}" id="yourName" placeholder="name@example.com">
                            <label for="yourName">Your Name</label>
                            @error("name")
                                <small class="fw-bolder text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="email" class="form-control" name="email" value="{{ old("email",$user->email) }}" id="yourEmail" placeholder="Password">
                            <label for="yourEmail">Your Email</label>
                            @error("email")
                            <small class="fw-bolder text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <button class="btn btn-primary w-100 btn-lg mt-3">Update Your Profile</button>
                    </form>
                </div>
            </div>
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
