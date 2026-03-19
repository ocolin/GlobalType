# GlobalType
## Description

GlobalType is a simple library that allows type checks on global arrays. Because by default the array elements are mixed, one has to check the element type before using. This library makes it easier to tell PHP what type you are expecting from a global array.

## Requirements

The only requirement is PHP version 8.0 or higher. 

## Installation

composer require ocolin/global-type

## Usage

### Available Classes

GlobalType has a class for each of the PHP Globals:

| Class | Global|
|-------|-------|
|   COOKIE::class    |    $_COOKIE   |
|    ENV::class   |    $_ENV   |
|    FILES::class   |   $_FILES    |
|    GET::class   |   $_GET    |
|    GLOBALS::class   |   $GLOBALS    |
|    POST::class    |   $_POST    |
|   REQUEST::class    |   $_REQUEST    |
|   SERVER::class    |   $_SERVER    |
|   SESSION::class    |   $_SESSION    |


### Available Methods

Every class shares the same functions which are used on the classes corresponding PHP Global

| Method | Description                           |
|--------|---------------------------------------|
| getString | Return a string or '' if not found.   |
| getStringNull | Return a string or null if not found. |
| getInt | Return an int or 0 if not found.      |
| getIntNull | Return an int or null if not found.   |
| getFloat | Return a float or 0.0 if not found.   |
| getFloatNull | Return a float of null if not found. |
| getBool | Return a bool or false if not found. |
| getBoolNull | Return a bool or null if not found. |
| getArray | Return an array or [] if not found. |
| getArrayNull | Return an array or null if not found. |
|    getObject    |    Return same object or null if not found.                                   |


### Arguments

Both the Null and non-Null methods take a name parameter, while the Null methods only take a name argument.

- name - The name of the array key in the targeted PHP global.
- default -  If the element is not found or the type does not match, you can return a default value of your choice.


### Basic Usage

```php
use Ocolin\GlobalType\GET;
$_GET['parameter'] = 'value';

$value = GET::getString( name: 'parameter' );
// string(5) "value"

$value = GET::getInt( name: 'parameter' );
// int(0)

$value = GET::getIntNull( name: 'parameter' );
// NULL

$value = GET::getInt( name: 'parameter', default: 777 );
//int(777)
```
