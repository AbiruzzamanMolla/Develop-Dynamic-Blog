<?php
/*
 * Formatting classes
 */
class Format{
	public function formatData($date){
		return date('F j, Y, g:i:a', strtotime($date));
	}  // function for date formatting

	public function textShorten($text, $limit = 400){
		$text = $text." ";
		$text = substr($text, 0, $limit);
		$text = substr($text, 0, strrpos($text, ' '));
		$text = $text."......";
		return $text;
	} // function to show limited text

	public function validation($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	public function title(){
		$path = $_SERVER['SCRIPT_FILENAME'];
		$title = basename($path, '.php');
		$title = str_replace('_',' ',$title);
		$title = str_replace('-',' ',$title);
		if($title == 'index'){
			$title = "home";
		} elseif($title == 'contect'){
			$title = "contect";
		}
		return $title = ucwords($title);
	}
}
 ?>