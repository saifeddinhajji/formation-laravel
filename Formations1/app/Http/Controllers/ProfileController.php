<?php

namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Http\Request;
use App\User;
use DB;
use App\Http\Controllers\ControllerValidatesRequestsvalidate;
class ProfileController extends Controller
{
 
   public function add(Request $req){
    $this->validate($req, [
        'name' => 'required|string|min:4|max:8',  
        'firstname' => 'required|string|min:4|max:8',  
      ]);
      
       $pro =new Profile();
       $pro->name =$req->input('name');
       $pro->save();
       $profiles=DB::table('profiles')->select('name','id')->get();
       return view('post.create')->with('all',$profiles);
       

}
public function all(){
 //$profiles= Profile::select('name','id')->get();
 //$profile=Profile::where('id',1)->select('name')->get();
//$profiles=DB::table('profiles')->select('name','id')->get();
$profile=DB::table('profiles')->whereid(1)->select('name','id')->get();
    dump($profile);
}
}
