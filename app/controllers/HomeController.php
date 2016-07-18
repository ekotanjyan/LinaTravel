<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$data['destinations'] = Populardestinations::orderBy('updated_at', 'desc')->take(4)->get();
        $data['honeymoon'] = DB::table('populardestinations')->select(DB::raw('*,count(*) as size'))->groupBy('place')->orderBy('updated_at', 'desc')->take(3)->get();
		return View::make('pages.home',$data);
	}
    public function a($lang = 0)
    {
$data['a'] =$lang;
        return View::make('pages.a',$data);
    }
	public function lang($lang='en')
	{
		Session::put('lang',$lang);
		App::setLocale($lang);
		return Redirect::to('home');
	}
	public function tours()
	{
		$data['tours'] = Mostpopulartours::all();
		$data['partners'] = Partners::all();
        $data['last']= Mostpopulartours::orderBy('updated_at', 'desc')->take(6)->get();
		return View::make('pages.tours',$data);
	}
	public function tours_upload()
	{
		$old_path = Input::file('file')->getRealPath();
		$t = imagecreatefromjpeg($old_path);
		$x = imagesx($t);
		$y = imagesy($t);
		$new_sizes = $this->ProportionalResize($x, $y, "270", "161");
		$new_width = $new_sizes[0];
		$new_height = $new_sizes[1];
		$s = imagecreatetruecolor($new_width, $new_height);
		imagecopyresampled($s, $t, 0, 0, 0, 0, $new_width, $new_height, $x, $y);
		$name = hash("md5", date("Y-m-d H:i:s"));
		imagejpeg($s, "../public/content/".$name, "100");
		
		
		
		//Input::file('file')->move("public/content/", $name);
		$tour = new Mostpopulartours;
		$tour->name = htmlentities(Input::get('name'));
		$tour->price = (int)Input::get('price');
		$tour->imgurl = "content/".$name;
		$tour->save();
		return Redirect::to('tours');
	}
	public function login_form()
	{
        if (Input::get('name') == 'admin' && Input::get('password') == 'admin'){
            Session::put('login','admin');
        }

		return Redirect::to('admin');
	}
	public function flights()
	{
		return View::make('pages.flights');
	}
	public function cruises()
	{
        $data['cruises'] = Populardestinations::orderBy('updated_at', 'desc')->take(4)->get();
		return View::make('pages.cruises',$data);
	}
	public function aboutus()
	{
		return View::make('pages.aboutus');
	}
	public function contactus()
	{
		if (Input::has('name') && Input::has('email') && Input::has('subject') && Input::has('message'))
		{
//			mail(Input::get('email'),Input::get('subject'),Input::get('message'));
			return Redirect::back();
		}
		return View::make('pages.contactus');
	}
	public function ProportionalResize($old_width, $old_height, $new_width=false, $new_height=false) 
	{ 
	        $old_aspect_ratio = $old_width / $old_height; 
	        if (($new_width === false) && ($new_height === false)) 
	        { 
	            return false; 
	        } 
	        elseif ($new_width === false) 
	        { 
	            $new_width = $new_height * $old_aspect_ratio; 
	        } 
	        elseif ($new_height === false) 
	        { 
	            $new_height = $new_width / $old_aspect_ratio; 
	        } 
	        $new_aspect_ratio = $new_width / $new_height; 
	        if ($new_aspect_ratio == $old_aspect_ratio) 
	        { 
	            // great, done 
	        } 
	        elseif ($new_aspect_ratio < $old_aspect_ratio) 
	        { 
	            // limited by width 
	            $new_height = $new_width / $old_aspect_ratio; 
	        } 
	        elseif ($new_aspect_ratio > $old_aspect_ratio) 
	        { 
	            // limited by height 
	            $new_width = $new_height * $old_aspect_ratio; 
	        } 
	        return array(intval(round($new_width)), intval(round($new_height))); 
    } 
}
