<?php

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
		$data['destinations'] = Populardestinations::all();
		return View::make('pages.home',$data);
	}
	public function tours()
	{
		$data['tours'] = Mostpopulartours::all();
		$data['partners'] = Partners::all();
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
		imagejpeg($s, "public/content/".$name, "100");
		
		
		
		//Input::file('file')->move("public/content/", $name);
		$tour = new Mostpopulartours;
		$tour->name = Input::get('name');
		$tour->price = Input::get('price');
		$tour->imgurl = "content/".$name;
		$tour->save();
		return Redirect::to('tours');
	}
	public function flights()
	{
		return View::make('pages.flights');
	}
	public function cruises()
	{
		return View::make('pages.cruises');
	}
	public function aboutus()
	{
		return View::make('pages.aboutus');
	}
	public function contactus()
	{
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
