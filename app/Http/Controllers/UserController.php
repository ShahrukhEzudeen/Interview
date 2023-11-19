<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user= new users();
        echo json_encode($user->dis());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $user= new users();
        $data=array(
           'name'=>$request->name,
           'department'=>$request->department,
        );
        if($user->save($data)){
            echo json_encode("save");
        }
        else{
            echo json_encode("fail");
        }
      
    }

    /**
     * Display the specified resource.
     */
    public function show($users)
    {
        $user= new users();
        echo json_encode($user->show($users));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,Request $request)
    {
        $user= new users();
        $data=array(
           'name'=>$request->name,
           'department'=>$request->department,
        );
        if($user->edit($id,$data)){
            echo json_encode("save");
        }
        else{
            echo json_encode("fail");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
