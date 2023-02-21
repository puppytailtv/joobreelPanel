<?php
 
namespace App\Constants;

class Rule
{
    // Rules According to API's
	private static $rules = [
        'CHECK_NUMBER' => [
            'phone'         =>'required',
        ],
        'CITIES' =>[
            'state_id'         =>'required',
        ],
        'PROFILE' => [
            'id'         =>'required',
        ],
        
	];

	public static function get($api){
		return self::$rules[$api];
	}
}