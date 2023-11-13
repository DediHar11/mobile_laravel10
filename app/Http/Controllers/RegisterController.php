<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Http\Request;

class RegisterController extends BaseController
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'username' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $token = $user->createToken('RandomKeyPassportAuth')->accessToken;

        return $this->sendResponse(['token' => $token], 'Oke....Register berhasil !!');
    }
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('RandomKeyPassportAuth')->accessToken;
            return $this->sendResponse(['token' => $token], 'Login berhasil ...!!.');
        } else {
            return $this->sendError(['error' => 'Unauthorised'], "Maaf login gagal...!" . 401);
        }
    }
    public function userInfo()
    {
        $user = auth()->user();

        return $this->sendResponse(['user' => $user], 'Berhasil read info user ...!!!');
    }
}
