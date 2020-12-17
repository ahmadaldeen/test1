<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use vendor;
class vendorLoginController extends Controller
{
    public function logout()
        {
            Auth::guard('vendor')->logout();

            return redirect('vendorLogin');
        }
    public function authenticate(Request $request){
        // Retrive Input
        
        $credentials = request(['username', 'password']);
         
        config()->set( 'auth.defaults.guard', 'vendor' );
        \Config::set('auth.providers.users.model', \App\vendor::class);
    try {
        if ($l = Auth::guard('vendor')->attempt($credentials)) {
            return redirect('/order/getOrderForVendor/'.Auth::user()->id);
        }
        }
         catch (JWTException $e) {
            return response()->json(['error' => 'sorry'], 500);
        }
        
        // if failed login
        return "f";
    }


}
