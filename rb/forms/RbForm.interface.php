<?php

interface RbForm {

	/**
	 * Echo the HTML form fragment
	 */
	function render();

	/**
	 * Return the Article built from form submission
	 * @param Array $source Form submission
	 * @return Article HTML fragment
	 */
	function bind($source);

}
