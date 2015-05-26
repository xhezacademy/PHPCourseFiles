<?php
namespace SimpleBlog\Models;

use SimpleBlog\Interfaces\ModelInterface;
use Carbon\Carbon;

class Post extends \Model implements ModelInterface
{
	public static $_table = 'posts';
//    public static $_table_use_short_name = true;

	public function user()
	{
		return $this->belongsTo('SimpleBlog\Models\User', 'user_id');
	}

    public function pubDate()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);

        return $date->diffForHumans();
    }
}
