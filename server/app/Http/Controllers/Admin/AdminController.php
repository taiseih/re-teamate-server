<?php

namespace App\Http\Controllers\Admin;

use App\Http\Actions\Admin\LoginAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * 管理者ログイン
     *
     * @return void
     */
    public function login(LoginRequest $request, LoginAction $action)
    {
        $response = $action->execute($request->makeData());
    }
}
