<?php

namespace CreateOpen\Traits;

/**
 * Add utility methods to a class
 */
trait ClassExtras
{
    public function cloneObj()
    {
        return clone $this;
    }

    public function getClassName()
    {
        return get_class($this);
    }

}
