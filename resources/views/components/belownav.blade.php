@section("belowNav")

    <div class="container-fluid bg-dark">
        <div class="row bg-overlay-4">
            <div class="col-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-10">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="text-white fw-bolder fst-italic mt-2 mb-1">{{ $title }}</h3>
                                    <x-breadcrumb breadText="{{ $text }}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
