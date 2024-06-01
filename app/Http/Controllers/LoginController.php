<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller {
    public function login( Request $request ) {
        $request->validate( [
            'user' => 'required',
            'psw' => 'required',
        ] );

        $user = $request->input( 'user' );
        $pass = $request->input( 'psw' );

        $usercheck = DB::table( 'users' )
        ->where( 'name', $user )
        ->where( 'password', $pass )
        ->first();

        if ( $usercheck ) {
            return redirect( '/dashboard' )->with( 'message', 'User Login Successfully..' );
        } else {
            return back()->with( 'error', 'User or password may incorrect.... Kindly Check' );
        }
    }

    public function logout() {
        Auth::logout();

        return redirect( '/' );
    }

}
