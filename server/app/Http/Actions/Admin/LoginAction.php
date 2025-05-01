<?php

namespace App\Http\Actions\Admin;

use app\Http\Actions\DataTransferObject\Output\Admin\LoginActionOutput;

class LoginAction
{
    public function execute() : LoginActionOutput {
        // FIXME:ここのちゃんと書く
        return new LoginActionOutput('token');
    }
}
