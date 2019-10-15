@extends('layouts.dashboard')
@section('content')

    <form action="{{ route('admin.clients.store') }}" method="POST" class="row">
                @csrf
                @method('POST')
                <div class="col-md-6 col-12">
                    <div class="main-card card">
                        <div class="card-body">
                            <h5 class="card-title">Dane osobowe</h5>

                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Imię</label>
                                            <input name="name" type="text"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   value="{{ old('name') }}" required>
                                            @error('name') <span class='text-danger'> {{ $message }} </span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Nazwisko</label>
                                            <input name="surname" type="text"
                                                   class="form-control @error('surname') is-invalid @enderror"
                                                   value="{{ old('surname') }}" required>
                                            @error('surname') <span class='text-danger'> {{ $message }} </span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Mail</label>
                                    <input name="email" type="text"
                                           class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email') }}" required>
                                    @error('email') <span class='text-danger'> {{ $message }} </span> @enderror
                                </div>

                                <div class="form-group">
                                    <label>Telefon</label>
                                    <input name="phone" type="text"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           value="{{ old('phone') }}" required>
                                    @error('phone') <span class='text-danger'> {{ $message }} </span> @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label>Notatka</label>
                                    <textarea name="note"
                                              class="form-control @error('note') is-invalid @enderror">{{ old('note') }}</textarea>
                                    @error('note') <span class='text-danger'> {{ $message }} </span> @enderror
                                    <small class="form-text text-muted">Nie widoczna dla klienta</small>
                                </div>

                            <div class="col-12 w-100 text-right p-0">
                                <button class="text-right btn btn-primary btn-lg">Zapisz</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-4 mt-md-0">
                    <div class="main-card card">
                        <div class="card-body">
                                <h5 class="card-title">Dane adresowe</h5>

                                <div class="form-group">
                                    <label>Miasto</label>
                                    <input name="city" type="text"
                                           class="disabled form-control @error('name') is-invalid @enderror"
                                           value="{{ old('city', 'Wrocław') }}" required>
                                    @error('city') <span class='text-danger'> {{ $message }} </span> @enderror
                                </div>

                                <div class="form-group">
                                    <label>Kod pocztowy</label>
                                    <input name="postcode" type="text"
                                           class="form-control @error('postcode') is-invalid @enderror"
                                           value="{{ old('postcode') }}" required>
                                    @error('postcode') <span class='text-danger'> {{ $message }} </span> @enderror
                                </div>

                                <div class="form-group">
                                    <label>Ulica</label>
                                    <input name="street" type="text"
                                           class="form-control @error('street') is-invalid @enderror"
                                           value="{{ old('street') }}" required>
                                    @error('street') <span class='text-danger'> {{ $message }} </span> @enderror
                                </div>

                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Nr budynku</label>
                                            <input name="building_nr" type="text"
                                                   class="form-control @error('building_nr') is-invalid @enderror"
                                                   value="{{ old('building_nr') }}" required>
                                            @error('building_nr') <span class='text-danger'> {{ $message }} </span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Nr mieszkania</label>
                                            <input name="room_nr" type="text"
                                                   class="form-control @error('room_nr') is-invalid @enderror"
                                                   value="{{ old('room_nr') }}">
                                            @error('room_nr') <span class='text-danger'> {{ $message }} </span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Piętro</label>
                                            <input name="floor" type="text"
                                                   class="form-control @error('floor') is-invalid @enderror"
                                                   value="{{ old('floor') }}">
                                            @error('floor') <span class='text-danger'> {{ $message }} </span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Nr klatki</label>
                                            <input name="stair_case" type="text"
                                                   class="form-control @error('stair_case') is-invalid @enderror"
                                                   value="{{ old('stair_case') }}">
                                            @error('stair_case') <span class='text-danger'> {{ $message }} </span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Kod do klatki</label>
                                            <input name="stair_case_code" type="text"
                                                   class="form-control @error('stair_case_code') is-invalid @enderror"
                                                   value="{{ old('stair_case_code') }}">
                                            @error('stair_case_code') <span class='text-danger'> {{ $message }} </span> @enderror
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
    </form>
@endsection
