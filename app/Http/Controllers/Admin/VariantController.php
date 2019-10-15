<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Packet;
use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends BaseController
{
    public function getPacketVariants(Request $request, Packet $packet)
    {
        return response()->json($packet->variants);
    }

    public function storeVariant(Request $request, Packet $packet)
    {
        $params = $request->except('_token');
        $params['packet_id'] = $packet->id;

        $variant = Variant::create($params);
        if( $variant ) return response()->json(['status' => 'success', 'variant'=> $variant], 200);
        return response()->json(['status' => 'error'], 500);
    }

    public function updateVariant(Request $request, Variant $variant)
    {
        $params = $request->except('_token');
        if( $variant->update($params) ) return response()->json(['status' => 'success', 'variant'=>$variant], 200);
        return response()->json(['status' => 'error'], 500);
    }

    public function deleteVariant(Request $request, Variant $variant)
    {
        if($variant->delete()) return response()->json(['status' => 'success'], 200);
        return response()->json(['status' => 'error'], 500);
    }
}
