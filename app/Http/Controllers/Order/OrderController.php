<?php

namespace App\Http\Controllers\Order;

use App\Contracts\PacketContract;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class OrderController extends BaseController
{
    private $packetRepository;

    public function __construct(PacketContract $packetRepository)
    {
        $this->packetRepository = $packetRepository;
    }

    public function index()
    {
        return view('ordering.index');
    }

    public function getPackets(){
        $packets = $this->packetRepository->listPacketsForOrder();
        return $this->responseJson(false, 200, 'success', $packets);
    }
}
