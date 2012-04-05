<?php
interface RbStore {

	/**
	 * Get an Article
	 * @param $id String
	 * @param $category String
	 */
	public function getArticle($category, $id);
	
	/**
	 * Save an Article
	 * @param: 	Category String
	 *			Content String
	 */
	public function saveArticle($category, $content);
}
