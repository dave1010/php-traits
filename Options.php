<?php
namespace Dave1010\Traits;

trait Options {
	protected function get_options_container() {
		static $options = new stdClass;
		return $options;
	}

	public function get_option($name, $default = null) {
		$c = $this->get_options_container();
		return isset($c->$name) ? $c->$name : $default;
	}
	
	public function update_option($name, $newvalue) {
		$c = $this->get_options_container();
		return $c->$name = $newvalue;
	}

	//public function update_options($values, $defaults=array()) {}
}
