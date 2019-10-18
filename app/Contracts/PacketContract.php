<?php
/**
 * Created by PhpStorm.
 * User: szymon
 * Date: 12.10.19
 * Time: 12:35
 */

namespace App\Contracts;

use App\Models\Packet;

interface PacketContract
{
    public function listPackets(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    public function listPacketsForOrder();

    public function findPacketById(int $id);

    public function createPacket(array $params);

    public function updatePacket(Packet $packet, array $params);

    public function deletePacket($id);
}
