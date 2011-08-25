<?php
namespace Dave1010\Traits;

trait ToString {
	abstract public function render();

	public function __toString() {
		// cannot throw exceptions in toString
		try {
			$r = (string) $this->render();
			return $r;
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}
}
