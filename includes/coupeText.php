<?php
mb_internal_encoding('UTF-8');
//POSSIBLE ($text,$length)
function coupeText($text) {
	$length=10; 
    if (mb_strlen($text) > $length) {
        $text = mb_substr($text, 0, $length) . '.';
    }
    return $text;
}
?>