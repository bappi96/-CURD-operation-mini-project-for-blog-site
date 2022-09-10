<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    private static $news, $image, $imageName, $directory, $imageUrl,$id;
    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'img/News-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;

    }
    public static function newsPortal($request)
    {
        self::$news = new News();
        self::$news->name = $request->name;
        self::$news->author = $request->author;
        self::$news->heading = $request->heading;
        self::$news->description = $request->description;
        self::$news->image = self::getImageUrl($request);
        self::$news->save();

    }
    public static function deleteNews($id)

    {
        self::$news = News::find($id);

        if (file_exists( self::$news->image))

        {
            unlink(self::$news->image);
        }

        self::$news->delete();
    }


    public static function updateNews($request,$id)
    {
        self::$news = News::find($id);

        if($request->file('image'))
        {

            if (file_exists(self::$news->image))
            {
                unlink(self::$news->image);
            }

            self::$imageUrl = self::getImageUrl($request);

        }

        else
        {
            self::$imageUrl = self::$news->image;
        }
        self::$news->name = $request->name;
        self::$news->author = $request->author;
        self::$news->heading = $request->heading;
        self::$news->description = $request->description;
        self::$news->image = self::$imageUrl;

        self::$news->save();

    }
}


