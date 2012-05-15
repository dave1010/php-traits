<?php

namespace CreateOpen\Traits;

/**
 * Allow an object to be converted into a string
 */
trait ToString {

	/**
	 * @return string
	 */
	abstract public function render();

	/**
	 * @return string
	 */
	protected function handle_exception($e) {
		error_log($e->getMessage());
		return '';
	}

	public function __toString() {
		// cannot throw exceptions in toString
		try {
			$r = (string) $this->render();
			return $r;
		} catch (Exception $e) {
			return (string) $this->handle_exception($e);
		}
	}
}
