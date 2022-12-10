<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
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

   public function calc(Request $request)
    {
       $a = $request->input('a');
       $b = $request->input('b');

       $c = $a + $b;

        return Response('test'.$c , 200, []);
    }
    

    public function add(Request $request): Response{

        $a = $request->input('name');

        $fligth = new Flight();
        $fligth->name = $a;
        $fligth->airline = "test";
        $fligth->save();

        return new Response("ok", 200);
    }


    public function read(Request $request) {
        return response()->json(Flight::all());
    }

    public function update(Request $request) {
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
?>
