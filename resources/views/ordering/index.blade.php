@extends('layouts.websiteVue')
@section('content')

<div id="order" class="mb-5">
    <div class="col-12 mb-5 mt-50">
        <button class="btn btn-outline-secondary">Powrót do strony</button>
    </div>
    <div class="col-12 mb-50">
        <h2 class="text-center">Wybierz pakiet</h2>
    </div>
    <div class="row justify-content-center">

        @for($i=0; $i<5; $i++)
        <div class="col-6 col-md-4 col-lg-2" data-toggle="modal" data-target="#modelId">
            <div class="card" style="border-radius: 20px">
                <img class="card-img-top" src="{{ asset('images/card_img.png') }}" alt="" style="border-radius: 20px;">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                </div>
            </div>
        </div>
        @endfor
      <div class="col-12">
          <button class="btn btn-success" data-toggle="modal" data-target="#koszyk"><i class="fas fa-shopping-cart"></i>Koszyk <span class="badge badge-pill badge-light">2</span></button>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document" style="border-radius: 20px">
            <div class="modal-content border-0" style="border-radius: 20px">
                <div class="modal-header p-0 border-0">
                    <img class="card-img-top" src="https://picsum.photos/600/300/?image=25" alt="" style="border-radius: 20px">
                </div>
                <div class="modal-body my-4">
                    <h4 class="text-center mb-2">Title</h4>

                    <h6 class="text-center mb-3 mt-4">Wybierz ilość posiłków</h6>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-success mx-1">3</button>
                        <button class="btn btn-outline-success mx-1">5</button>
                    </div>

                    <h6 class="text-center mb-3 mt-4">Wybierz kaloryczność</h6>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-success mx-1">1200</button>
                        <button class="btn btn-outline-success mx-1">1500</button>
                        <button class="btn btn-outline-success mx-1">1800</button>
                        <button class="btn btn-outline-success mx-1">2000</button>
                    </div>


                   <div class="d-flex justify-content-center align-items-center mb-3 mt-5">
                       <h6 class="mr-4 m-0">Ilość:</h6>
                       <button  class="btn btn-outline-success mr-1 d-flex align-items-center" style="padding-left: .875rem; padding-right: .875rem">-</button>
                       <input type="number" class="d-inline-block border-0 text-center" value="1" min="1" style="max-width: 5rem">
                       <button class="btn btn-outline-success ml-1 d-flex align-items-center" >+</button>
                   </div>
                   <div class="d-flex flex-column align-items-center justify-content-center align-items-center mb-3 mt-5">
                       <button class="btn btn-outline-success mb-3">Dodaj</button>
                       <button class="btn btn-outline-danger border-0">Anuluj</button>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="koszyk" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" style="border-radius: 20px">
            <div class="modal-content border-0" style="border-radius: 20px">
                <div class="modal-body my-4">
                    <h4 class="text-success mb-4">Wybrałeś:</h4>
                   <div class="row justify-content-center">
                       <div class="col-6 mb-4">
                           <div class="card position-relative" style="border-radius: 20px">
                               <img class="card-img-top" src="{{ asset('images/card_img.png') }}" alt="" style="border-radius: 20px;">
                               <div class="card-body">
                                   <h5 class="card-title">Title</h5>
                               </div>
                               <div class="overlay position-absolute bg-white w-100 py-3 px-4" style="bottom:0; border-radius: 20px">
                                   <h5 class="card-title text-success mb-2">Title</h5>
                                   <small class="d-block mb-0">Posiłki: 5</small>
                                   <small class="d-block mb-0">Kaloryczność: 1200 kcal</small>
                                   <small class="d-block mb-0">Cena za dzień: od 55 zł</small>
                                   <div class="d-flex justify-content-center mt-2">
                                       <button class="btn bg-transparent text-secondary">E</button>
                                       <button class="btn bg-transparent text-danger">D</button>
                                   </div>
                               </div>
                           </div>
                           <div class="d-flex justify-content-center align-items-center mt-3">
                               <button  class="btn btn-outline-success mr-1 d-flex align-items-center" style="padding-left: .875rem; padding-right: .875rem">-</button>
                               <input type="number" class="d-inline-block border-0 text-center" value="1" min="1" style="max-width: 5rem">
                               <button class="btn btn-outline-success ml-1 d-flex align-items-center" >+</button>
                           </div>
                       </div>
                       <div class="col-6 mb-4">
                           <div class="card" style="border-radius: 20px">
                               <img class="card-img-top" src="{{ asset('images/card_img.png') }}" alt="" style="border-radius: 20px;">
                               <div class="card-body">
                                   <h5 class="card-title">Title</h5>
                               </div>
                           </div>
                           <div class="d-flex justify-content-center align-items-center mt-3">
                               <button  class="btn btn-outline-success mr-1 d-flex align-items-center" style="padding-left: .875rem; padding-right: .875rem">-</button>
                               <input type="number" class="d-inline-block border-0 text-center" value="1" min="1" style="max-width: 5rem">
                               <button class="btn btn-outline-success ml-1 d-flex align-items-center" >+</button>
                           </div>
                       </div>
                       <div class="col-12 d-flex flex-column align-items-center justify-content-center align-items-center mt-5">
                           <button class="btn btn-outline-success mb-3">Przejdź dalej</button>
                           <button class="btn btn-outline-danger border-0">Kontynuuj zakupy</button>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
