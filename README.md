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

## License (MIT)

Copyright (C) 2012 Dave Hulbert

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

