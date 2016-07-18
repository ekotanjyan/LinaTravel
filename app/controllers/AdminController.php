<?php

/**
 * Created by PhpStorm.
 * User: Narek
 * Date: 15.07.2016
 * Time: 13:15
 */
class AdminController extends BaseController
{
    public function index()
    {
        if(Input::get('r')=='tours')
        $data['tours'] = Mostpopulartours::orderBy('updated_at', 'desc')->get();
        elseif(Input::get('r')=='partners')
        $data['partners'] = Partners::orderBy('updated_at', 'desc')->get();
    else
        $data['destinations'] = Populardestinations::orderBy('updated_at', 'desc')->get();
        return View::make('admin.admin',$data);
    }
    public function info()
    {
        if (Input::get('id') !=""){

            $data = DB::table(Input::get('table'))->where('id',Input::get('id'))->first();
            return json_encode($data);
        }
        
    }
    public function add()
    {
        $table = Input::get('table');
        $ob = new $table;
        foreach (Input::get() as $key=>$value)
            if($key!='table' && $key!='_token' && $key!='id')
            $ob->$key = $value;

        if (Input::file('file'))
            $imgurl = self::UploadImage(Input::file('file'));
        else
            $imgurl = "/content/270.png";
        $ob->imgurl = $imgurl;
        $ob->save();
        return Redirect::back();

    }

    public function delete()
    {
        $table =Input::get('table');
        $user = $table::find(Input::get('id'));
        $user->delete();
        return Redirect::back();

    }
    public function update()
    {
        $table = Input::get('table');

        if (Input::get('imgurl'))
            $imgurl = Input::get('imgurl');
        else
            $imgurl = "/content/270.png";
            if (Input::file('file'))
                $imgurl = self::UploadImage(Input::file('file'));

            $ob = $table::find(Input::get('id'));
            foreach (Input::get() as $key=>$value)
                if($key!='table' && $key!='_token' && $key!='id')
                $ob->$key = $value;
            $ob->imgurl = $imgurl;
            $ob->save();


            return Redirect::back();

    }
    public static function UploadImage($img){
        $name = hash("md5", date("Y-m-d H:i:s"));

        list($width, $height) = getimagesize($img);
        $new_sizes = self::ProportionalResize($width, $height, "270", "161");
        $newwidth = $new_sizes[0];
        $newheight = $new_sizes[1];
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($img);
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
        imagejpeg($thumb, "../public/content/" . $name . ".jpg");
        return "/content/" . $name . ".jpg";
    }

    public static function ProportionalResize($old_width, $old_height, $new_width=false, $new_height=false)
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