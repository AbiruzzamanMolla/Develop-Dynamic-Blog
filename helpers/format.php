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
}
 ?>