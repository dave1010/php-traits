<?php
namespace CreateOpen\Traits;

trait Options {

	protected $options_container;

	protected function set_options_container($container = null) {
		$this->options_container = $container ? $container : new \stdClass;
	}

	protected function get_options_container() {
		return $this->options_container;
	}

	public function get_option($name, $default = null) {
		$c = $this->get_options_container();
		return isset($c->$name) ? $c->$name : $default;
	}
	
	public function update_option($name, $newvalue) {
		$c = $this->get_options_container();
		return $c->$name = $newvalue;
	}

}
