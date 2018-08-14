<?php

namespace App\Http\Requests;


class SessionRequest extends Request
{
    public function rules()
    {
        return [
            'username' => ['required','max:20'],
            'password' => ['required','max:16'],
        ];
    }

    public function arrtibutes()
    {
        return [
          'username' => '用户名',
          'password' => '密码',
        ];
    }
}
