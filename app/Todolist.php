<?php

namespace todos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Todolist extends Model implements SluggableInterface
{
    use SoftDeletes;
    use SluggableTrait;

    protected $dates = ['deleted_at'];
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    public function tasks()
    {
        return $this->hasMany('todos\Task');
    }

    public function categories()
    {
        return $this->belongsToMany('todos\Category')->withTimestamps();
    }

    public function comments()
    {
        return $this->morphMany('\todos\Comment', 'commentable');
    }
}
