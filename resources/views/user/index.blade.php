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

<x-belownav title="Your Profile" text="Profile" />

@section("content")
    <div class="row mt-3">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset("storage/profile/".$user->photo) }}" id="profilePrev" class="shadow-lg rounded-circle border border-primary border-1 user-img" style="cursor: pointer" alt="">
                        <form action="">
                            <input type="file" class="d-none" name="photo" id="profileImg">
                        </form>
                        <h4 class="mb-0 mt-3 fst-italic fw-bolder">{{ $user->name }}</h4>

                    </div>
                    <div class="mt-4">
                        <p class="mb-1">
                            <i class="text-primary fas fa-envelope"></i>
                            Your Email -
                            <span class="fw-bolder">{{ $user->email }}</span>
                        </p>
                        <p class="mb-1">
                            <i class="text-primary fas fa-calendar"></i>
                            Your Register Date -
                            <span class="fw-bolder">{{ $user->created_at->format("d M Y") }}</span>
                        </p>
                    </div>
                    <div class="">
                        <i class="text-primary fa-brands fa-blogger-b"></i>
                        Your Total Blog -
                        <span class="fw-bolder">{{ count($allBlogs) }}</span>
                    </div>
                    <div class="">
                        <i class="text-primary fas fa-list"></i>
                        Your Total Post -
                        <span class="fw-bolder">0</span>
                    </div>
                    <a href="{{ route("user-edit",$user->id) }}" class="btn btn-primary w-100 mt-3">Edit Your Profile</a>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card border border-primary shadow-lg">
                <div class="card-header">
                    <h4 class="text-primary">
                        Your Uploaded Blogs
                    </h4>
                </div>
                <div class="card-body">
                   <div class="row">
                       @foreach($blogPag as $blog)
                           <div class="col-6 mb-3">
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
                   </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        {{ $blogPag->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

