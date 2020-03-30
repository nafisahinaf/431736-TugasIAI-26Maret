<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;


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
     
    public function index()
    {
        $result = User::get();

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response()->json($data);
    }
     
    public function store(Request $request)
    {
        $result = User::create([
            'no_hp' => $request->no_hp,
            'tangal_lahir' => $request->tanggal_lahir
        ]);

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response($data);
    }
     
    public function show($id)
    {
        $result = User::where('id', $id)->first();

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response()->json($data);
    }
    
    public function destroy($id)
    {
        $result = User::destroy('id', $id);

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $result = User::where('id',$id)->first();
        $result->no_hp = $request->input('no_hp');
        $result->tanggal_lahir = $request->input('tanggal_lahir');
        $result->password = Hash::make($request->input('password'));
        $result->save();

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response()->json($data);
    }
}
