@extends('layouts.website')
@section('content')
<!---HERO SECTION -->
<section class="hero" style="margin-top: -76px">
    <div class="row vh-100 align-items-center">
        <div class="col-md-5">
            <h1 class="text-uppercase">Dieta pudełkowa</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fringilla, sem non varius facilisis, arcu augue convallis lacus, id dapibus dolor tellus at dolor. Quisque placerat vestibulum enim non pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
            <a href="#" class="btn btn-success mt-2">Sprawdź ofertę</a>
        </div>
        <div class="col-md-7">
            <img class="img-fluid" src="{{ asset('images/hero.jpg') }}" alt="Dieta pudełkowa Body Fixers">
        </div>
    </div>
</section>
<!--OFERTA SECTION -->
<section id="oferta">
    <div class="row justify-content-center">
        <div class="col-12 text-center my-50">
            <h2>Pakiety</h2>
        </div>
        <div class="col-md-4">
            <div class="card my-3">
                <img src="{{ asset('images/card_img.png') }}" class="card-img-top" alt="Zdjęcie oferty">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="btn btn-outline-success">Zamów</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card my-3">
                <img src="{{ asset('images/card_img.png') }}" class="card-img-top" alt="Zdjęcie oferty">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="btn btn-outline-success">Zamów</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card my-3">
                <img src="{{ asset('images/card_img.png') }}" class="card-img-top" alt="Zdjęcie oferty">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="btn btn-outline-success">Zamów</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card my-3">
                <img src="{{ asset('images/card_img.png') }}" class="card-img-top" alt="Zdjęcie oferty">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="btn btn-outline-success">Zamów</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card my-3">
                <img src="{{ asset('images/card_img.png') }}" class="card-img-top" alt="Zdjęcie oferty">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="btn btn-outline-success">Zamów</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CENNIK SECTION -->
<section id="cennik" class="mt-100">
    <div class="row">
        <div class="col-12 text-center mb-50">
            <h2>Cennik</h2>
        </div>
        <div class="col-12">
            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-1 h6 active" id="pills-pakiet1-tab" data-toggle="pill" href="#pills-pakiet1" role="tab" aria-controls="pills-home" aria-selected="true">Pakiet 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-1 h6" id="pills-pakiet2-tab" data-toggle="pill" href="#pills-pakiet2" role="tab" aria-controls="pills-profile" aria-selected="false">Pakiet 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-1 h6" id="pills-pakiet3-tab" data-toggle="pill" href="#pills-pakiet3" role="tab" aria-controls="pills-contact" aria-selected="false">Pakiet 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-1 h6" id="pills-pakiet4-tab" data-toggle="pill" href="#pills-pakiet4" role="tab" aria-controls="pills-contact" aria-selected="false">Pakiet 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-1 h6" id="pills-pakiet5-tab" data-toggle="pill" href="#pills-pakiet5" role="tab" aria-controls="pills-contact" aria-selected="false">Pakiet 5</a>
                </li>
            </ul>
            <div class="tab-content box-shadow pt-2 pb-3 px-4" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-pakiet1" role="tabpanel" aria-labelledby="pills-pakiet1-tab">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">1200 kcal</th>
                            <th scope="col">1500 kcal</th>
                            <th scope="col">2000 kcal</th>
                            <th scope="col">2500 kcal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">posiłki: 3</th>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                        </tr>
                        <tr>
                            <th scope="row">posiłki: 5</th>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-pakiet2" role="tabpanel" aria-labelledby="pills-pakiet2-tab">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">1200 kcal</th>
                            <th scope="col">1500 kcal</th>
                            <th scope="col">2000 kcal</th>
                            <th scope="col">2500 kcal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">posiłki: 3</th>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                        </tr>
                        <tr>
                            <th scope="row">posiłki: 5</th>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-pakiet3" role="tabpanel" aria-labelledby="pills-pakiet3-tab">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">1200 kcal</th>
                            <th scope="col">1500 kcal</th>
                            <th scope="col">2000 kcal</th>
                            <th scope="col">2500 kcal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">posiłki: 3</th>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                        </tr>
                        <tr>
                            <th scope="row">posiłki: 5</th>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-pakiet4" role="tabpanel" aria-labelledby="pills-pakiet4-tab">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">1200 kcal</th>
                            <th scope="col">1500 kcal</th>
                            <th scope="col">2000 kcal</th>
                            <th scope="col">2500 kcal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">posiłki: 3</th>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                        </tr>
                        <tr>
                            <th scope="row">posiłki: 5</th>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-pakiet5" role="tabpanel" aria-labelledby="pills-pakiet5-tab">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">1200 kcal</th>
                            <th scope="col">1500 kcal</th>
                            <th scope="col">2000 kcal</th>
                            <th scope="col">2500 kcal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">posiłki: 3</th>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                        </tr>
                        <tr>
                            <th scope="row">posiłki: 5</th>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                            <td>od 56,7 zł</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--PROMOCJE SECTION -->
<section id="promocja" class="mt-100">
    <div class="row">
        <div class="col-md-5">
            <h2>Rabaty</h2>
            <ul class="list-success mt-3">
                <li>przy zamówieniach <span>10+ to 15% rabatu</span></li>
                <li>przy zamówieniach <span>10+ to 15% rabatu</span></li>
                <li>przy zamówieniach <span>10+ to 15% rabatu</span></li>
            </ul>
            <a href="#" class="btn btn-outline-success ml-4 mt-2">Zamów</a>
        </div>
        <div class="col-md-7 row d-flex align-items-center">
            <div class="col-2">
                <i class="fa fa-car display-4 mb-3"></i>
            </div>
            <div class="col-10">
                <h4>Dostawa do domu</h4>
                <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</p>
            </div>
        </div>
    </div>
</section>
<!--ATUTY SECTION -->
<section id="atuty" style="margin-top: 100px; margin-bottom: 150px">
    <div class="row">
        <div class="col-12 text-center mb-50">
            <h2>Co nas <span class="text-success">wyróżnia</span>?</h2>
        </div>
        <div class="col-3 text-center">
            <i class="fa fa-star display-4 mb-3"></i>
            <h4>Lorem ipsum</h4>
            <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</p>
        </div>
        <div class="col-3 text-center">
            <i class="fa fa-star display-4 mb-3"></i>
            <h4>Lorem ipsum</h4>
            <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</p>
        </div>
        <div class="col-3 text-center">
            <i class="fa fa-star display-4 mb-3"></i>
            <h4>Lorem ipsum</h4>
            <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</p>
        </div>
        <div class="col-3 text-center">
            <i class="fa fa-star display-4 mb-3"></i>
            <h4>Lorem ipsum</h4>
            <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed.</p>
        </div>
    </div>
</section>
@include('website.include.section-faq')
@endsection
