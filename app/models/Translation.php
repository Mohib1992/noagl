<?php
/**
 * Created by PhpStorm.
 * User: Moinkhan
 * Date: 3/22/2015
 * Time: 1:55 PM
 */

class Translation extends Eloquent{

    protected $fillable = array('id','content','type','language_id','token');
    public $timestamps  = false;

    public function language()
    {
        return $this->belongsTo('Language');
    }
}