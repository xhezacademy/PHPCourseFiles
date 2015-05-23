<?php

use Carbon\Carbon;

class Post extends Model
{
	public static $_table = 'posts';

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

    public function pubDate()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);

        return $date->diffForHumans();
    }
}
