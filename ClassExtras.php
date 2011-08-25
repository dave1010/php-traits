<?php
namespace Dave1010\Traits;

trait ClassExtras {
	public function clone() {
		return clone $this;
	}
	public function get_class() {
		return get_class($this);
	}
}
