<?php

namespace CreateOpen\Traits;

/**
 * A trait that will add logging capability to any class
 */
trait Logging {

	const LOG_LEVEL_ERROR = 1;
	const LOG_LEVEL_WARNING = 2;
	const LOG_LEVEL_NOTICE = 3;

	protected $log_level = 1;

	protected $log_methods = array(
		// method 	   log level
		'error_log' => 1,
	);

	public function log($message, $level = 1) {
		foreach ($this->log_methods as $method => $method_level) {
			if ($level >= $method_level) {
				$this->$method($message);
			}
		}
	}

	protected function error_log($message) {
		error_log($message)
	}

}
