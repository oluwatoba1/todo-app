<?php

namespace App;


class Item extends Model
{

	public function user()
	{

		return $this->belongsTo(User::class);

	}

	public function mark()
	{

		$this->completed = $this->completed ? false:true;

    	$this->save();

	}

}
