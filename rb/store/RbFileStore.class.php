<?php
require_once('RbStore.interface.php');


class RbFileStore implements RbStore {

	// Directory of all articles
	private $dir;		// String

	// Initialize $dir properties - The path must end by slash "/" !
	// For example : "/myWebSite/articles/"
	public function __construct($config) {
		$this->dir = $config['storeDir'];
	}

	public function getArticle($category, $id) {
		return file_get_contents($this->dir . $category . '/' . $id . '.html');
	}
	
	// Return the id of the new article
	public function saveArticle($category, $content) {
		$id = uniqid();
		file_put_contents($this->dir . $category . '/' . $id . '.html', $content);
		return $id;
	}
}