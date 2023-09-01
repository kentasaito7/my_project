<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {

        $records = DB::connection('mysql')->select("select * from items");

        $name = $records[0]->name;

        // $insertResult = DB::connection("mysql")->table('users')->insert([
        //         ['email' => 'aaa@aaa1', 'name' => 'test1', 'password' => 'pass1'],
        //         ['email' => '222@aaa', 'name' => 'test2', 'password' => 'pass2'],
        //     ]);
        // dd($insertResult);

        $deleteResult = DB::connection("mysql")->delete("delete from users where name = 'test1'");
        dd($deleteResult);

        return view("sample/index" , []);
    }
}
