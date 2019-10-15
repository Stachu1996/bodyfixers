@extends('layouts.websiteVue')
@section('content')
<div id="order" class="justify-content-center mb-5">
    <div class="col-12">
        <h2 class="text-center">Wybierz pakiet</h2>
    </div>
    <div class="row justify-content-center">

        @for($i=0; $i<5; $i++)
        <div class="col-6 col-md-4 col-lg-2">
            <div class="card" style="border-radius: 20px">
                <img class="card-img-top" src="https://picsum.photos/600/300/?image=25" alt="" style="border-radius: 20px">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                </div>
            </div>
        </div>
        @endfor

    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
        Launch
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document" style="border-radius: 20px">
            <div class="modal-content" style="border-radius: 20px">
                <div class="modal-header p-0">
                    <img class="card-img-top" src="https://picsum.photos/600/300/?image=25" alt="" style="border-radius: 20px">
                </div>
                <div class="modal-body">
                    <h5 class="text-center">pACKET asfdafds</h5>

                    <h6 class="text-center">Wybierz ilość posiłków</h6>
                    <button class="btn btn-outline-secondary">3</button>

                    <h6 class="text-center">Wybierz kaloryczność</h6>
                    <button class="btn btn-outline-secondary">1200</button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
