<?php

/** Default config file name */
define('RB_DEFAULT_CONFIG_FILE', 'rb.conf.php');
/** Default form type */
define('RB_DEFAULT_FORM_TYPE', 'Default');

/**
 * Main Rockabilly component
 *
 * @author San & GBO
 * @date 08/03/2012
 */
class Rockabilly {

	/** Array: Config table */
	private $config;
	/** RbStore: Storage component */
	private $storage;

	/**
	 * Constructor
	 * @param String $filenameConfig Configuration file name
	*/
	public function __construct($filenameConfig = RB_DEFAULT_CONFIG_FILE) {
		
		include $filenameConfig;
		$this->config = $config;
		$class = $config['storage'];
		require_once 'store/' . $class . '.class.php';
		$this->storage = new $class($config);
	
	}

	/**
	 * Render a form of type $type
	 * @param String $type Form type
	 * @return String Form fragment
	 */
	public function renderForm($type = RB_DEFAULT_FORM_TYPE) {
		$class = 'Rb' . $type . 'Form';
		require_once('forms/' . $class . '.class.php');
		$form = new $class();

		return $form->render();
	}

	/**
	 * Bind a form submission and store the produced article
	 * @param String $type Form type
	 */
	public function bindForm($type = RB_DEFAULT_FORM_TYPE) {
		$content = $form->bind($_POST);
		
		$categorie = 'default';

		

		$this->storage->saveArticle($categorie, $content);
	}

	/** Return storage */
	public function getStorage() {
		return $this->storage;
	}

}