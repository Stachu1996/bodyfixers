<?php
/**
 * Created by PhpStorm.
 * User: szymon
 * Date: 15.10.19
 * Time: 18:04
 */

namespace App\Contracts;

use App\Models\Client;

interface ClientContract
{
    public function listClients(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    public function createClient(array $params);

    public function updateClient(Client $client, array $params);
}
