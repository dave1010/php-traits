<?php
namespace CreateOpen\Traits;

trait Options
{
    protected $optionsContainer;

    protected function setOptionsContainer($container = null)
    {
        $this->optionsContainer = $container ? $container : new \stdClass;
    }

    protected function getOptionsContainer()
    {
        return $this->optionsContainer;
    }

    public function getOption($name, $default = null)
    {
        $c = $this->getOptionsContainer();

        return isset($c->$name) ? $c->$name : $default;
    }

    public function updateOption($name, $newValue)
    {
        $c = $this->getOptionsContainer();

        return $c->$name = $newValue;
    }

}
