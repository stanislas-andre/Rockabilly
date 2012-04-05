<?php
require_once('RbForm.interface.php');

class RbDefaultForm implements RbForm {

	function render() {
		echo 'Title <input type="text" name="title" /><br />';
		echo '<textarea name="content"></textarea>';
	}

	function bind($source) {
		$result = '<article>';
		$result .= '<title>' . $source['title'] . '</title>';
		$result .= '<p>' . $source['content'] . '</p>';
		$result .= '</article>';
		return $result;
	}
	
}
