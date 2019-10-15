<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calory;
use App\Models\Variant;
use Illuminate\Http\Request;

class CaloryController extends Controller
{
    public function storeCalory(Request $request, Variant $variant)
    {
        $params = $request->except('_token');
        $params['variant_id'] = $variant->id;

        $calory = Calory::create($params);
        if( $calory ) return response()->json(['status' => 'success', 'calory'=> $calory], 200);
        return response()->json(['status' => 'error'], 500);
    }

    public function updateCalory(Request $request, Calory $calory)
    {
        $params = $request->except('_token');
        if( $calory->update($params) ) return response()->json(['status' => 'success', 'calory'=>$calory], 200);
        return response()->json(['status' => 'error'], 500);
    }

    public function deleteCalory(Request $request, Calory $calory)
    {
        if($calory->delete()) return response()->json(['status' => 'success'], 200);
        return response()->json(['status' => 'error'], 500);
    }
}
