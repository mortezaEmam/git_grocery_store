<?php

namespace App\Http\Controllers;

use App\Models\ProductCountingUnit;
use App\Models\WareHouse;
use App\Models\WareHouseDetaile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WareHouseDetaileController extends Controller
{
    public function index()
    {
        if(filled( Auth::user()->warehouse ))
        {$warehouse = Auth::user()->warehouse;
            $warehousesDetaile = WareHouseDetaile::query()->where('warehouse_id',$warehouse->id)->get();
            return view('admin.warehouse.warehouseDetaile-index', compact('warehouse', 'warehousesDetaile'));
        }
        return redirect()->route('warehouse.create');


    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(WareHouse $warehouse)
    {
        $warehouseDetails = WareHouseDetaile::query()->where('warehouse_id',$warehouse->id)->get();
        return view('admin.warehouse.warehouse-show',compact('warehouseDetails','warehouse'));

    }

    public function edit($warehousedetaile, $wareHouse)
    {
        $wareHouse = WareHouse::query()->where('id', $wareHouse)->first();
        $wareHousess = WareHouse::query()->where('origin_id', Auth::id())->get();
        $warehousedetaile = WareHouseDetaile::query()
            ->where('warehouse_id', $wareHouse->id)
            ->where('id', $warehousedetaile)->first();
        $product_counting_units = ProductCountingUnit::all();
        $data = [
            'wareHousess' => $wareHousess,
            'wareHouse' => $wareHouse,
            'warehousedetaile' => $warehousedetaile,
            'product_counting_units' => $product_counting_units,
        ];
        return view('admin.warehouse.warehouseDetaile-edit', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\WareHouseDetaile $wareHousedetaile
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $wareHousedetaile)
    {
        $find_wareHousedetaile = WareHouseDetaile::query()->where('id', $wareHousedetaile)->first();
        $find_wareHousedetaile->warehouse_id = $request->warehouse_id;
        $find_wareHousedetaile->product_counting_unit_id = $request->vahed;
        $find_wareHousedetaile->stock = $request->stock;
        $find_wareHousedetaile->save();
        return redirect()->route('warehouseDetaile.index');

    }


    public function destroy($id)
    {
        //
    }
}
