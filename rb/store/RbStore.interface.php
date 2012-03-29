<?php
interface RbStore {

	/**
	 * Get an Article
	 * @param: 	Id String
	 *			Category String
	 */
	public function getArticle($category, $id);
	
	/**
	 * Save an Article
	 * @param: 	Category String
	 *			Content String
	 */
	public function saveArticle($category, $content);
}
