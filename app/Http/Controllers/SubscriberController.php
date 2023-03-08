<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        
        if($request->ajax()){
            $validator = \Validator::make(
                $request->all(), 
                [
                    'name' => 'required',
                    'phone' => 'required',
                    'payment_type' => 'required',
                ], 
                [
                    'name.required' => 'الاسم مطلوب',
                    'phone.required' => 'رقم الهاتف مطلوب',
                    'payment_type.required' => 'طريقة الدفع مطلوبة',
                ]
            );

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()->all()
                ]);
            }

            $sub = Subscriber::create(
               $request->all()
            );

            return response()->json([
                'status' => true,
            ]);

        }

    }
}
