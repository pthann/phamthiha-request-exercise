<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RegisterController extends Controller {
    public function getForm() {
        return view("register");
    }

    public function getView(Request $request) {
        return view("user", [
            "name" => $request->input("name"),
            "username" => $request->input("username"),
            "password" => $request->input("password"),
        ]);
    }

    public function createUser(Request $request) {
        return redirect()->route('user.info', [
            "name" => $request->input("name"),
            "username" => $request->input("username"),
            "password" => $request->input("password"),
        ]);
    }
}
