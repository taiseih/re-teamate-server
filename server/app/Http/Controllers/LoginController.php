<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * ログインメソッド
     *  $request
     *  
     */
    public function login(Request $request) {
        $user = User::select($request->email)->get();

        return $user;
        
    }
}
