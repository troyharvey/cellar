<?php

class Formula extends Eloquent
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany('User', 'user_formula');
    }
}
