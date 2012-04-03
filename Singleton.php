<?php
namespace Dave1010\Traits;
// Note: use dependency injection instead of the singleton pattern

trait Singleton {
	public static function instance() {
		static $instance = null;
		if( $instance === null ) {
			$instance = new self;
		}
		return $instance;
	}
}
