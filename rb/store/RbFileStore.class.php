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

	/**
	 * Get article by id
	 * @param $id Integer Article id
	 */
	public function getArticle($id) {
		
	}

	public function getArticlesByCategory($category) {

	}
	
	public function getContent($id) {

	}

	/**
	 * Return the id of the new article
	 * @param $article Article
	 * @param $content String HTML content
	 */
	public function saveArticle($article, $content) {
		$id = uniqid();
		file_put_contents($this->dir . $category . '/' . $id . '.html', $content);
		return $id;
	}
}