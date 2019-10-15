<?php

namespace App\Repositories;

use App\Contracts\PacketContract;
use App\Models\Packet;
use App\Traits\UploadAble;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;

class PacketRepository extends BaseRepository implements PacketContract
{
    use UploadAble;

    public function __construct(Packet $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function listPackets(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    public function findPacketById(int $id)
    {
        try{
            return $this->findOneOrFail($id);
        }catch (ModelNotFoundException $e){
            throw new ModelNotFoundException($e);
        }
    }

    public function createPacket(array $params)
    {
        try{
            $collection = collect($params);

            $image = null;

            if ($collection->has('image') && ($params['image'] instanceof UploadedFile)) {
                $image = $this->uploadOne($params['image'], 'packets');
            }

            $active = $collection->has('active') ? 1 : 0;

            $merge = $collection->merge(compact('active', 'image'));

            $packet = new Packet($merge->all());

            $packet->save();

            return $packet;
        }catch (QueryException $exception){
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    public function updatePacket(Packet $packet, array $params)
    {
        $collection = collect($params)->except('_token');

        $image = $packet->image;

        if ($collection->has('image') && ($params['image'] instanceof  UploadedFile)) {
            if ($packet->image != null) {
                $this->deleteOne($packet->image);
            }
            $image = $this->uploadOne($params['image'], 'packets');
        }

        $active = $collection->has('active') ? 1 : 0;

        $merge = $collection->merge(compact('active', 'image'));

        $packet->update($merge->all());

        return $packet;
    }

    public function deletePacket($id)
    {
        $packet = $this->findPacketById($id);
        $packet->delete();
        return $packet;
    }
}
