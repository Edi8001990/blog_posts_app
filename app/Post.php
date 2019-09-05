<?php

namespace BlogPostsApp;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;


    //Make a Relation
    public function user(){
       return $this->belongsTo('BlogPostsApp\User');
    }
}
