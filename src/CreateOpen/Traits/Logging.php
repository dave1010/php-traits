<?php

namespace CreateOpen\Traits;

/**
 * A trait that will add logging capability to any class
 *
 * Note: use a logger that follows the PSR-3 Logger interface instead of this
 */
trait Logging
{

    protected $log_level = 1;

    protected $log_methods = array(
        // method 	   log level
        'errorLog' => 1,
    );

    public function log($message, $level = 1)
    {
        foreach ($this->log_methods as $method => $method_level) {
            if ($level >= $method_level) {
                $this->$method($message);
            }
        }
    }

    protected function errorLog($message)
    {
        error_log($message);
    }

}
