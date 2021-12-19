<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    //
    public function postlogin(Request $request)
    {
        $user = User::where('nik',$request->nik)->first();
        if($request->password == $user->password){
            if($user->departemen == "Manager Warehouse")
            {
                return redirect('/manager_warehouse');
            }
            elseif($user->departemen == "warehouse")
            {
                return redirect('/admin_warehouse');
            }
            else{
                return redirect('/user');
            }

        }
        else{
            return redirect('/');
        }

    }

        public function logout()
        {
           return redirect('/');
        }


}
