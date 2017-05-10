<?php

namespace App;

use App\Events\PostWasPublished;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $events = [
    	'created' => PostWasPublished::class
    ];
}
