<?php
namespace App\Http\Controllers\Admin;

use App\Contracts\PacketContract;
use App\Http\Controllers\BaseController;
use App\Models\Packet;
use Illuminate\Http\Request;

class PacketController extends BaseController
{
    protected $packetRepository;

    public function __construct(PacketContract $packetRepository)
    {
        $this->packetRepository = $packetRepository;
    }

    public function index()
    {
        $packets = $this->packetRepository->listPackets();

        $this->setPageTitle('Pakiety', 'Lista wszystkich pakietów', 'pe-7s-shopbag icon-gradient bg-happy-itmeo',
            array( [ 'name'=>'Nowy Pakiet', 'icon'=> 'fa fa-plus', 'link' => route('admin.pakiety.create'), 'color'=>'btn-success' ]) );

        return view('admin.packet.index', compact('packets'));
    }

    public function create()
    {
        $this->setPageTitle('Pakiet', "Tworzysz nowy pakiet ", 'pe-7s-shopbag icon-gradient bg-happy-itmeo');
        return view('admin.packet.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);
        $params = $request->except('_token');

        $packet = $this->packetRepository->createPacket($params);

        if($packet) return $this->responseRedirect('admin.pakiety.edit', $packet,'Pomyślnie dodano pakiet' ,'success');
        return $this->responseError('Pojawił się problem podczas dodawania pakietu.');
    }

    public function edit(Packet $packet)
    {
        $this->setPageTitle('Pakiet', "Edytujesz pakiet ".$packet->name, 'pe-7s-shopbag icon-gradient bg-happy-itmeo');
        return view('admin.packet.edit', $packet);
    }

    public function update(Request $request, Packet $packet)
    {
        $this->validate($request, [
            'name'      => 'required',
            'image'     => 'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $packet = $this->packetRepository->updatePacket($packet, $params);

        if($packet) return $this->responseRedirectBack('Pomyślnie zaktualizowano pakiet.' ,'success');
        return $this->responseError('Wystąpił błąd podczas aktualizowania pakietu.');
    }

    public function destroy(Packet $packet)
    {
        if(!$this->packetRepository->deletePacket($packet->id)) return $this->responseError("Błąd podczas usuwania pakietu");
        else return $this->responseRedirect('admin.pakiety.index', null,'Pozytywnie usunięto pakiet', 'success');
    }
}
