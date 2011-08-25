<?php
namespace Dave1010\Traits;

/**
* A trait that will add logging capability to any class
*/
trait Logging {
	public function log($message) {
		error_log($message)
	}
}
