<?php

class CommonController extends \BaseController {

	public static function makeSlug($str){
		if(!$str) return false;
		$unicode = array(
			'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|A|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			'b'=>'B','c'=>'C','d'=>'d|D|đ|Đ',
	    	'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|E|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
			'f'=>'F','g'=>'G','h'=>'H',
	    	'i'=>'í|ì|ỉ|ĩ|ị|I|Í|Ì|Ỉ|Ĩ|Ị',
			'j'=>'J','k'=>'K','l'=>'L','m'=>'M','n'=>'N',
	     	'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|O|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Õ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
		  	'p'=>'P','q'=>'Q','r'=>'R','s'=>'S','t'=>'T',
	      	'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|U|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
		  	'v'=>'V','w'=>'W','x'=>'X',
	      	'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Y|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
		  	'z'=>'Z',
		  	'\ '=>'-'
		);
		foreach ($unicode as $nonUni => $uni) {
			$str = preg_replace("/($uni)/i", $nonUni, $str);
		}
		return $str;
	}

	public static function genName($length) {
	    $key = '';
	    $keys = array_merge(range(0, 9), range('a', 'z'));

	    for ($i = 0; $i < $length; $i++) {
	        $key .= $keys[array_rand($keys)];
	    }

    	return $key;
	}

}