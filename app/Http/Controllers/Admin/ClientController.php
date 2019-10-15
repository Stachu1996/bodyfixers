<?php
namespace App\Http\Controllers\Admin;

use App\Contracts\ClientContract;
use App\Http\Controllers\BaseController;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends BaseController
{
    protected $clientRepository;

    public function __construct(ClientContract $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function index()
    {
        $clients = $this->clientRepository->listClients();

        $this->setPageTitle('Klienci', 'Lista wszystkich klientow', 'pe-7s-id icon-gradient bg-amy-crisp',
            array( [ 'name'=>'Nowy Klient', 'icon'=> 'fa fa-plus', 'link' => route('admin.clients.create'), 'color'=>'btn-success' ]) );

        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        $this->setPageTitle('Klienci', 'Tworzenie nowego klienta', 'pe-7s-id icon-gradient bg-amy-crisp' );
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'name'  => 'required',
            'surname'   => 'required',
            'phone' => 'required',
            'city'  => 'required',
            'postcode'  => 'required',
            'street'    => 'required',
            'building_nr'   => 'required',
        ]);
        $client = $this->clientRepository->createClient($request->all());
        if( $client ) return $this->responseRedirect('admin.clients.edit', $client, 'Pomyślnie dodano klienta.', 'success');
        return $this->responseError('Błąd podczas dodawania');
    }

    public function edit(Client $client)
    {
        $this->setPageTitle('Klienci', 'Edycja klienta: '.$client->name.' '.$client->surname, 'pe-7s-id icon-gradient bg-amy-crisp' );
        return view('admin.clients.edit', $client);
    }

    public function update(Request $request, Client $client)
    {
        if ( $this->clientRepository->updateClient($client, $request) ) return $this->responseRedirectBack('Pomyślnie zaktualizowano dane', 'success');
        return $this->responseError('Błąd podczas aktualizowania danych');
    }

    public function destroy(Client $client)
    {
        if($client->delete()) return $this->responseRedirect('admin.clients.index', null,'Pozytywnie usunięto klienta', 'success');
        return $this->responseError("Błąd podczas usuwania");
    }
}
