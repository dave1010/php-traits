<?php
namespace Dave1010\Traits;

trait Singleton {
	public static function instance() {
		static $instance = null;
		if( $instance === null ) {
			$instance = new self;
		}
		return $instance;
	}
}
