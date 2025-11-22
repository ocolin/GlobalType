# GlobalType

## Description

A simple utility for getting values from Global variables as a specific type. Rather than having to type check them when you know what type to expect, this can ensure those globals are of the right type.

## Globals supported

* $_ENV
* $_POST
* $_GET
* $_REQUEST
* $_SESSION
* $_SERVER
* $_REQUEST
* $_FILES
* $_COOKIES
* $GLOBALS

## Types supported

* string
* int
* float
* array
* object
* bool

## Format

Functions are all static and come in two modes. One for returning a type even if the input is the wrong type, and one for returning null if the type is wrong.

### GET - Examples

```php
$output = Ocolin\GlobalType\GT::getSring( name: 'value' );
$output = Ocolin\GlobalType\GT::getSringNull( name: 'value' );
$output = Ocolin\GlobalType\GT::getInt( name: 'value' );
$output = Ocolin\GlobalType\GT::getIntNull( name: 'value' );
$output = Ocolin\GlobalType\GT::getFloat( name: 'value' );
$output = Ocolin\GlobalType\GT::getFloatNull( name: 'value' );
$output = Ocolin\GlobalType\GT::getArray( name: 'value' );
$output = Ocolin\GlobalType\GT::getArrayNull( name: 'value' );
$output = Ocolin\GlobalType\GT::getObject( name: 'value' );
$output = Ocolin\GlobalType\GT::getObjectNull( name: 'value' );
$output = Ocolin\GlobalType\GT::getBool( name: 'value' );
$output = Ocolin\GlobalType\GT::getBoolNull( name: 'value' );
```
The input parameter is always the name of the global variable. The type of global will be the name of the global type in lowercase as the prefix of the function name.

```
$output = Ocolin\GlobalType\GT::{global name}{type}{null}( name: '{var name}');
```
