<?php
class Article {

	private $id;
	private $title;
	private $author;
	private $date;
	private $category;
	private $description;

	public function getId() {
		return $this->id;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getAuthor() {
		return $this->author;
	}

	public function getDate() {
		return $this->date;
	}

	public function getCategory() {
		return $this->category;
	}

	public function getDescription() {
		return $this->description;
	}

}