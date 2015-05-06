<?php

use Carbon\Carbon;

/**
* 
*/
class Post
{
	// function __construct(argument)
	// {
		# code...
	// }

	public function pubDate()
	{
		return Carbon::createFromDate(2015, 7, 20, 'GMT')->diffForHumans();
	}
}

?>