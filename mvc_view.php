<?php

class View {

	private $data = array();
	public $path = '';

	public function __construct($path) {
		$this->path = $path;
	}
	public function render() {
		extract($this->data);
		ob_start();
		require $this->path;
		return ob_get_clean();
	}
	public function __set($key, $value) {
		$this->data[ $key ] = $value;
	}
}

$v = new View( 'example_view.php' );
$v->title = 'Test';
echo $v->render();