@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Lista klientów</h5>

                        @if($clients->isNotEmpty())
                            <table class="mb-0 table table-hover datatable">
                                <thead>
                                <tr>
                                    <th>Imię</th>
                                    <th>Nazwisko</th>
                                    <th>Mail</th>
                                    <th>Telefon</th>
                                    <th>Ulica</th>
                                    <th class="text-center"><i class="fa fa-bolt icon-gradient bg-sunny-morning"> </i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->surname }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->phone }}</td>
                                        <td>{{ $client->street }}</td>

                                        <td class="d-flex align-items-center justify-content-center">
                                            <a href="{{ route('admin.clients.edit', $client) }}" data-toggle="tooltip" data-placement="bottom" title="Edytuj"
                                               class="mr-2 border-0 btn-transition btn btn-outline-info">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.clients.destroy', $client) }}" method="POST">
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
@endsection
