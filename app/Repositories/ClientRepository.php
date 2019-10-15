<?php

namespace App\Repositories;

use App\Contracts\ClientContract;
use App\Models\Client;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ClientRepository extends BaseRepository implements ClientContract
{
    public function __construct(Client $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function listClients(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }


    public function createClient(array $params)
    {
        $client = new Client($params);
        $client->save();
        return $client;
    }

    public function updateClient(Client $client, array $params)
    {
        $client->update($params);
        return $client;
    }
}
