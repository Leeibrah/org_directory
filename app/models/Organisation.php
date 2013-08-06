<?php

class Organisation extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'when_did_you_start' => 'required',
		'telephone' => 'required'
	);
}