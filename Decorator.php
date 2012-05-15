<?php

namespace CreateOpen\Traits;

/**
 * Add behaviour to an object dynamically
 *
 * The class using this trait should implement all interfaces that the
 * decorated object implements.
 */
trait Decorator {

    protected $object;

    public function __construct($object) {
        $this->set_object($object);
    }

    public function set_object($object) {
    	$this->object = $object;
    }

    public function __call($method, $args) {
        return call_user_func_array(array($this->object, $method), $args);
    }

}
