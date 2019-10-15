@extends('layouts.website')
@section('content')
<section id="kontakt" class="mt-5" style="">
    <div class="row">

        <div class="col-md-6">
        <!--<img class="img-fluid" src="{{ asset('images/hero.jpg') }}" alt="Dieta pudełkowa Body Fixers">-->
            <h2 class="text-secondary mb-5">Dane firmy</h2>

            <dl class="row">
                <dt class="col-3 d-flex align-items-center justify-content-end mb-0"><i class="fas fa-map-marker-alt fa-2x text-success"></i></dt>
                <dd class="col-9 d-flex align-items-center mb-0">
                    <p class="mb-0">
                        Wrocław<br/>
                        ul. kopalniana 65<br/>
                        32-054 Wrocław
                    </p>
                </dd>

                <dt class="col-3 d-flex align-items-center justify-content-end mb-0 mt-5"><i class="fa fa-phone fa-2x text-success" aria-hidden="true"></i></dt>
                <dd class="col-9 d-flex align-items-center mb-0 mt-5"><a class='text-dark' href='tel:603749629'>603 749 629</a></dd>

                <dt class="col-3 d-flex align-items-center justify-content-end mb-0 mt-3"><i class="fab fa-facebook-messenger fa-2x text-success"></i></dt>
                <dd class="col-9 d-flex align-items-center mb-0 mt-3"><a class='text-dark' href="https://m.me/BodyFixersWro">m.me/BodyFixersWro</a></dd>

                <dt class="col-3 d-flex align-items-center justify-content-end mb-0 mt-3"><i class="fa fa-envelope fa-2x text-success" aria-hidden="true"></i></dt>
                <dd class="col-9 d-flex align-items-center mb-0 mt-3"><a class='text-dark' href="mailto:bodyfixers@wp.pl">bodyfixers@wp.pl</a></dd>

            </dl>
        </div>

        <div class="col-md-6">
            <h2 class="text-secondary mb-5">Napisz do nas</h2>

            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Proszę przedstaw się.">
                    <small id="helpId" class="form-text text-muted">Imię i nazwisko</small>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId"
                               placeholder="Na jaki adres mamy odpisać?">
                        <small id="emailHelpId" class="form-text text-muted">Twój email</small>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text"
                               class="form-control form-control" name="" id="" aria-describedby="helpId"
                               placeholder="Mamy zadzwonić? - podaj numer.">
                        <small id="helpId" class="form-text text-muted">Numer telefonu</small>
                    </div>
                </div>

                <div class="form-group">
                    <small id="helpId" class="form-text text-muted">Twoja wiadomość</small>
                    <textarea class="form-control" name="" id="" rows="3" placeholder="Jakie masz do nas pytania?"></textarea>
                </div>

                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-success" style="min-width: 25%;">Wyślij</button>
                </div>

            </form>
        </div>

    </div>
</section>
@endsection
