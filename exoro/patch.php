<?php
class exploitPatch {
	public function remove($string) {
		return trim(explode(")", str_replace("\0", "", explode("#", explode("~", explode("|", explode(":", trim(htmlspecialchars($string,ENT_QUOTES)))[0])[0])[0])[0]))[0]);
	}
	public function charclean($string) {
		return preg_replace("/[^A-Za-z0-9 ]/", '', $string);
	}
	public function numbercolon($string){
		return preg_replace("/[^0-9,-]/", '', $string);
	}
	public function number($string){
		return preg_replace("/[^0-9]/", '', $string);
	}
}
?>