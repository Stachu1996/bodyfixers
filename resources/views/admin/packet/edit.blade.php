@extends('layouts.dashboard')
@section('content')
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link show active" id="tab-0" data-toggle="tab" href="#tab-content-0" aria-selected="true">
                <span>Edycja danych pakietu</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link show" id="tab-1" data-toggle="tab" href="#tab-content-1" aria-selected="false">
                <span>Edycja strony pakietu</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link show" id="tab-2" data-toggle="tab" href="#tab-content-2" aria-selected="false">
                <span>Edycja waraintów</span>
            </a>
        </li>
    </ul>
    <form action="{{ route('admin.pakiety.update', $id ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
    <div class="tab-content">

        <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card col-md-8">
                <div class="card-body"><h5 class="card-title">Dane podstawowe</h5>
                        <div class="form-group">
                            <label for="packetName" class="">Nazwa</label>
                            <input name="name" id="packetName" placeholder="Podaj nazwę pakietu" type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name', $name) }}" required>
                            @error('name') <span class='text-danger'> {{ $message }} </span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="shortDesc" class="">Krótki opis</label>
                            <textarea name="short_description" id="shortDesc"
                                      class="form-control @error('short_description') is-invalid @enderror">{{ old('short_description', $short_description) }}</textarea>
                            @error('short_description') <span class='text-danger'> {{ $message }} </span> @enderror
                            <small class="form-text text-muted">Skrócony opis widoczny na stronie głównej.</small>
                        </div>

                        <div class="position-relative row form-group">
                            <div class="col-sm-4 col-md-2">
                                <img id="packetImage" width="100" height="100" src="{{ isset($image) ? asset('storage/'.$image) : 'https://via.placeholder.com/100' }}" />
                            </div>
                            <div class="col-sm-8 col-md-10 ">
                                <label for="exampleFile" class="">Obrazek</label>
                                <input name="image" id="exampleFile" type="file"
                                       class="form-control-file @error('image') is-invalid @enderror"
                                       value="https://via.placeholder.com/100"
                                       onchange="loadFile(event, 'packetImage')"
                                >
                                <small class="form-text text-muted">Wgraj obrazek z dysku (do 1Mb).</small>
                                @error('image') <span class='text-danger'> {{ $message }} </span> @enderror
                            </div>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input @error('active') is-invalid @enderror" {{ old('active', $active) == 1 ? 'checked' : '' }}
                                       name="active"> Aktywny?
                                <small class="form-text text-muted">Zaznacz jeśli chcesz, żeby pakiet był dostępny.</small>
                                @error('active') <span class='text-danger'> {{ $message }} </span> @enderror
                            </label>
                        </div>

                        <div class="mt-3 w-100 text-right">
                            <button class="text-right btn btn-primary btn-lg" type="submit">Zapisz</button>
                        </div>
                </div>
            </div>
        </div>

        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
            <div class="main-card mb-3 card col-md-8">
                <div class="card-body"><h5 class="card-title">Opis wyświetlany na stronie pakietu</h5>
                        <div class="form-group">
                            <textarea name="description" id="packetDesc" rows="20"
                                      class="summernote form-control @error('description') is-invalid @enderror">{{ old('description', $description) }}</textarea>
                            @error('description') <span class='text-danger'> {{ $message }} </span> @enderror
                            <small class="form-text text-muted">Za pomocą edytora możesz stworzyć stronę pakietu.</small>
                        </div>

                        <div class="mt-3 w-100 text-right">
                            <button class="text-right btn btn-primary btn-lg" type="submit">Zapisz</button>
                        </div>
                </div>
            </div>
        </div>

        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
            <variants-component :packetid="{{ $id }}"></variants-component>
        </div>

    </div>
    </form>
@endsection
@push('scripts')
    <script>
        loadFile = function(event, id) {
            let output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endpush
