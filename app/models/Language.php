<?php


/**
 * Created by PhpStorm.
 * User: Moinkhan
 * Date: 3/22/2015
 * Time: 1:44 PM
 */

class Language extends Eloquent{

    protected $fillable = array('id','name');
    public $timestamps  = false;

    public function translation()
    {
        return $this->hasMany('Translation');
    }

    public function scopeEnglish($query)
    {
        return $query->where('name','english')->first()->id;
    }
}