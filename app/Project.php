<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Task;

class Project extends Model
{

	/**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'slug'
    ];


    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
