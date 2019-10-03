<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //name of the table by default pulural of class name in this case poste
    protected $table = "posts";

    //can change primary key 
    public $primaryKey = "id";

    //timestamps can also be changed or disabled
    public $timestamps = true;
}
