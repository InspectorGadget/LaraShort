<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Url extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'redirect', 'user'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model) {
           $model->user = Auth::user()->id;
        });
    }

}
