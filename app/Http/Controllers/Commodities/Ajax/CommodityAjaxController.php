<?php

namespace App\Http\Controllers\Commodities\Ajax;

use App\Commodity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommodityAjaxController extends Controller
{
    public function store(Request $request)
    {
        
        $commodities = new Commodity();

        $commodities->school_operational_assistance_id = $request->school_operational_assistance_id;
        $commodities->commodity_location_id = $request->commodity_location_id;
        $commodities->item_code = $request->item_code;
        $commodities->name = $request->name;
        $commodities->date_of_purchase = date_format(date_create($request->date_of_purchase),"d-m-Y");
        $commodities->condition = $request->condition;
        $commodities->note = $request->note;
        $commodities->brand = $request->brand;
        $commodities->save();
        

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $commodities], 200);
    }

    public function show($id)
    {
        $commodity = Commodity::findOrFail($id);

        $data = [
            'school_operational_assistance_id' => $commodity->school_operational_assistance->name,
            'commodity_location_id' => $commodity->commodity_location->name,
            'item_code' => $commodity->item_code,
            'name' => $commodity->name,
            'date_of_purchase' => $commodity->date_of_purchase,
            'condition' => $commodity->condition,
            'note' => $commodity->note,
            'brand' => $commodity->brand
        ];

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $data], 200);
    }

    public function edit($id)
    {
        $commodity = Commodity::findOrFail($id);

        $data = [
            'school_operational_assistance_id' => $commodity->school_operational_assistance_id,
            'commodity_location_id' => $commodity->commodity_location_id,
            'item_code' => $commodity->item_code,
            'name' => $commodity->name,
            'date_of_purchase' => date_format(date_create($commodity->date_of_purchase),"Y-m-d"),
            'condition' => $commodity->condition,
            'note' => $commodity->note,
            'brand'=> $commodity->brand
        ];

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $data], 200);
    }

    public function update(Request $request, $id)
    {
        $commodities = Commodity::findOrFail($id);

        $commodities->school_operational_assistance_id = $request->school_operational_assistance_id;
        $commodities->commodity_location_id = $request->commodity_location_id;
        $commodities->item_code = $request->item_code;
        $commodities->name = $request->name;
        $commodities->date_of_purchase = date_format(date_create($request->date_of_purchase),"d-m-Y");
        $commodities->condition = $request->condition;
        $commodities->note = $request->note;
        $commodities->brand = $request->brand;
        $commodities->save();

        return response()->json(['status' => 200, 'message' => 'Success'], 200);
    }

    public function destroy($id)
    {
        Commodity::findOrFail($id)->delete();

        return response()->json(['status' => 200, 'message' => 'Success'], 200);
    }
}
