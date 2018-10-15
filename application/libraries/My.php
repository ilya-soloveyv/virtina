<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My {
	public function plural($number, $after) {
        $cases = array (2, 0, 1, 1, 1, 2);
        return $after[ ($number%100>4 && $number%100<20)? 2: $cases[min($number%10, 5)] ];
    }
}