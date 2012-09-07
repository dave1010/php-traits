This is a collection of handy PHP traits. These are all stand alone components, without any dependencies, 
that can be dropped into any project. Requires >= PHP 5.4.0 as it uses traits. Collaborators / pull requests welcome.

## Traits

 * **ClassExtras** - add utility methods to a class
 * **Decorator** - decorator design pattern: add behaviour to an object dynamically
 * **Logging** - log messages to 1 or more logs
 * **Options** - get and set an object's options
 * **Singleton** - design anti-pattern
 * **ToString** - safely convert an object to a string

## Installation

Use [packagist](http://packagist.org/packages/createopen/traits) - put this in your `composer.json`

    {
        "require": {
            "createopen/traits": "dev-master",
        }
    }

## Usage

    require 'vendor/autoload.php';

    class Foo {
        use CreateOpen\Traits\Decorator;
    }


## Traits to make

 * Event
 * Commandline
 * Publicize (use the magic `__call()` to make all methodds pseudo-public, for debugging)
 * Benchmarking
 * ArrayAccessible / Iterator / Countable / Traversable / Filter
 * ORM / DataMapper / ActiveRecord
 * Cache
 * Template
 * Foldl
 * Monads: Maybe, Collection

