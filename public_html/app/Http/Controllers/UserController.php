<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function list(Request $request)
    {
        $list = User::all();
        return response()->json($list);
    }


    public function add(Request $request)
    {
        $name = $request->input('name');

        $user = new User();
        $user->name = $name;
        $user->save();

        return new Response("ok", 200);
    }


    public function read(Request $request)
    {
        return response()->json(Flight::all());
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');

        $fligth = Flight::find($id);

        if ($fligth === null) {
            return new Response("404", 404);
        }

        $fligth->name = $name;
        $fligth->save();

        return response()->json($fligth);
    }

    //
}
