<?php

namespace CreateOpen\Traits;

/**
 * Add utility methods to a class
 */
trait ClassExtras {

	public function clone() {
		return clone $this;
	}

	public function get_class() {
		return get_class($this);
	}
	
}
