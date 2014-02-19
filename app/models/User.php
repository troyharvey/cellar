<?php

class User extends Eloquent
{
    protected $guarded = [];

    public function formulas()
    {
        return $this->belongsToMany('Formula', 'user_formula');
    }
}
