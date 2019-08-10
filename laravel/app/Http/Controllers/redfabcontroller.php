<?php



namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
/**
 * 
 */
class Redfabcontroller extends Controller
{
	
	public function index()
	{
		# code...
		$user = DB::table('tours')->get();
		$data['users']=$user;
		
		
			return view('Redfabtours')->with($data);
		

		// foreach ($user as $key ) {
		// 	# code...
		// 	$data[a] = $key;
		// }
		// $data['z']=$user->
		
	}
	public function booking()
	{
		# code...
		$user = DB::table('tours')->get();
		$data['users']=$user;
		
		
			return view('Redfabtours')->with($data);
		

		// foreach ($user as $key ) {
		// 	# code...
		// 	$data[a] = $key;
		// }
		// $data['z']=$user->
		
	}
	public function notification()
	{
		# code...
		$user = DB::table('tours')->get();
		$data['users']=$user;
		
		
			return view('Redfabtours')->with($data);
		

		// foreach ($user as $key ) {
		// 	# code...
		// 	$data[a] = $key;
		// }
		// $data['z']=$user->
		
	}
	public function register(Request $r)
	{
		$e = $r->input("email");
		$u = $r->input("Username");
		$p = $r->input("password");

		DB :: table('registration')->insert(['email'=>$e ,'Username'=>$u ,'password'=>$p]);
		echo "registered succesfully";
		return redirect()->action('Redfabcontroller@index')->with('status','Login');
	}
	public function login(Request $r)
	{
		$e = $r->input("email");
		
		$p = $r->input("password");

		$profile =DB :: table('registration')->where('email',$e)->first();
		$password=$profile->password;
		$uname=$profile->Username;
		if($password==$p){
			echo "login succesfull";
			// $login=$profile->Username;
			return redirect()->action('Redfabcontroller@index')->with('status',$uname);
		}
		else{
			echo "login failed";
			return redirect()->action('Redfabcontroller@index')->with('status','Login');
		}
	}
	public function Details($i)
	{
		$d['det']= DB :: table('tours')->where('Id',$i)->first();
		// $data['name']=$d->name;
		 return view('Redfabpackage_detail')->with($d);
	// echo $d->name;
	}
}

?>