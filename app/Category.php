<?php

namespace todos;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [];

    public function todolists()
    {
        return $this->belongsToMany('todos\Todolist')->withTimestamps();
    }
}
