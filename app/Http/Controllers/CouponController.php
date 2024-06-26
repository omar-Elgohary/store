<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    public function coupons ()
    {
        $coupons = Coupon::get();
        return view( 'dashboard.coupons.index', get_defined_vars() );
    }

    public function storeCoupon ( Request $request )
    {
        $validator = Validator::make($request->all(), [
            'name'        => 'required|string|min:3',
            'type'        => 'required',
            'discount'    => 'required|numeric',
            'start_date' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    if (Carbon::parse($value)->isBefore(Carbon::today())) {
                        $fail('The '.$attribute.' must be a date after or equal to today.');
                    }
                },
            ],
            'expire_date' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    if (Carbon::parse($value)->isBefore(Carbon::today())) {
                        $fail('The '.$attribute.' must be a date after or equal to today.');
                    }
                },
            ],
            'minimum'     => 'nullable',
            'maximum'     => 'nullable',
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error', 'Validation failed! Please check your input.');
        }

        try {
            Coupon::create([
                'name' => $request->name,
                'type' => $request->type,
                'discount' => $request->discount,
                'start_date' => $request->start_date,
                'expire_date' => $request->expire_date,
                'minimum' => $request->minimum,
                'maximum' => $request->maximum,
            ]);
            return redirect()->route('coupons')->with('success', 'Coupon added successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function deleteCoupon ( $id )
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect()->back()->with('success', 'Coupon Deleted Successfully');
    }

}
