<?php

trait Decorator {

    protected $object;

    public function __construct($object) {
        $this->object = $object;
    }

    public function __call($method, $args) {
        return call_user_func_array(array($this->object, $method), $args);
    }

}
