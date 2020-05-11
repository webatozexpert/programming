<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderFooter extends Model
{
    protected $fillable = ['title_name','sub_title','address','mobile','copyright','status'];
}
