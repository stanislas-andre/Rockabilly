<?php

interface RbForm {

	/**
	 * Return the Form HTML fragment
	 * @return Form HTML fragment
	 */
	function render();

	/**
	 * Return the Article built from form submission
	 * @param Array $source Form submission
	 * @return Article HTML fragment
	 */
	function bind($source);

}
