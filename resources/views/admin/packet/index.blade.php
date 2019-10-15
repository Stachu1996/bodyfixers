@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Lista pakietów</h5>
                    <div class="table-responsive">
                    @if($packets->isNotEmpty())
                    <table class="mb-0 table table-hover">
                        <thead>
                        <tr>
                            <th>Nazwa</th>
                            <th>Aktywny?</th>
                            <th class="text-center"><i class="fa fa-bolt icon-gradient bg-sunny-morning"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($packets as $packet)
                        <tr>
                            <td>{{ $packet->name }}</td>
                            <td>
                                @if($packet->active == 1)
                                    <span class="badge badge-success">Tak</span>
                                @else
                                    <span class="badge badge-danger">Nie</span>
                                @endif
                            </td>
                            <td class="d-flex align-items-center justify-content-center">
                                <a href="{{ route('admin.pakiety.edit', $packet) }}" data-toggle="tooltip" data-placement="bottom" title="Edytuj"
                                        class="mr-2 border-0 btn-transition btn btn-outline-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.pakiety.destroy', $packet) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                <button data-toggle="tooltip" data-placement="bottom" title="Usuń"
                                                 class="mr-2 border-0 btn-transition btn btn-outline-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        Brak pakietów
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
