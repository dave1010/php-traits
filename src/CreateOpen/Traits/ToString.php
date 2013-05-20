<?php

namespace CreateOpen\Traits;

/**
 * Allow an object to be converted into a string
 */
trait ToString
{
    /**
     * @return string
     */
    abstract public function toString();

    /**
     * @param \Exception $e
     * @return string
     */
    protected function handleException(\Exception $e)
    {
        error_log($e->getMessage());

        return '';
    }

    public function __toString()
    {
        // cannot throw exceptions in toString
        try {
            $r = (string) $this->toString();

            return $r;
        } catch (\Exception $e) {
            return (string) $this->handleException($e);
        }
    }
}
