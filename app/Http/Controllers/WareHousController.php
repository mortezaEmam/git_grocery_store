<?php

namespace App\Http\Controllers;

use App\Models\WareHouse;
use App\Models\WareHouseDetaile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WareHousController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        if (!filled($user->warehouse))
            return view('admin.warehouse.warehouse-create', compact('user'));
        return redirect()->back();

    }

    public function store(Request $request)
    {
        $warehouse = new WareHouse();
        if (filled($request->status)) {
            $status = $request->status;
        } else {
            $status = 'off';
        }

        $warehouse->origin_id = Auth::id();
        $warehouse->address = $request->address;
        $warehouse->phone = $request->phone;

        $warehouse->status = $status;
        $warehouse->save();
        return redirect()->route('warehouse.index');
    }

    public function show(WareHouse $warehouse)
    {
    }

    public function edit(WareHouse $warehouse)
    {
        return view('admin.warehouse.warehouse-edit', compact('warehouse'));
    }

    public function update(Request $request, WareHouse $warehouse)
    {
        if (filled($request->status)) {
            $status = $request->status;
        } else {
            $status = 'off';
        }
        WareHouse::query()->find($warehouse->id)->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'status' => $status,
        ]);

        return redirect()->route('warehouse.index');
    }

    public function destroy(WareHouse $warehouse)
    {
        $user = Auth::user();
        $warehouse_find=WareHouse::query()->where('id',$warehouse->id)->where('origin_id',$user->id)->get();
        if (filled($warehouse_find))
            {
                if (filled($warehouse->getWarehouseDetaile))
                    {
                        abort(403, 'انبار دارای موجودی کالا می باشد ابتدا انبار خود را خالی کنید سپس حذف کنید');

                    }
                else
                    {
                    WareHouse::query()->find($warehouse->id)->delete();
                    }

            }
        else
            {
            abort(403, 'no access for action');
             }
     return redirect()->back();
    }
}
