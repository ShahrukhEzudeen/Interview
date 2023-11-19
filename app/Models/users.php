<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class users extends Model
{
    public function dis(){

        $list = DB::table('user2')->get();
        return $list;
    }

    public function show($id){
        $list = DB::table('user2')->where('id', '=', $id)->get();
        return $list;
    }

    public function save($data=array()){
        $list = DB::table('user2')->insert($data);
        return $list;
       
    }
    public function edit($id=null,$data=array()){
         $list = DB::table('user2')->where('id', '=', $id)->update($data);
         return $list;
        
     }
}
