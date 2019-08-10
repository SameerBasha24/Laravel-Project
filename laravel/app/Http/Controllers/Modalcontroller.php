<?php

/**
 * 
 */
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Modalcontroller extends Controller
{
	
	public function index(){
		return view('modal');
	}

	public function insertform() {
      return view('modal');
   }
	
   public function insert(Request $request) {
      echo "Hi DB";
      $email = $request->input('email');
      $phn=$request->input("phn");
      DB::insert('insert into form (eamil) values(?)',[$email]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }

   public function sameeradd(Request $re){
      $n=$r->input("name");
      $e=$r->input("email");
      $p=$r->input("phone");
      
      DB::table('form')->insert(['name'=>$n,'email'=>$e,"phone"=>$p]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/student">Click Here</a> to go back.';
   }

   public function show(){
      $entry=DB::table('form')->where('name','Sameer')->first();
      echo $entry->name;
      echo $entry->email;
      echo $entry->phone;
   }
}

?>