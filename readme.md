# Design Patterns in PHP

Tested Design Pattern examples written in PHP.  From the origin Design Patterns (Gang of Four) book.  

[![Build Status](https://travis-ci.org/AndyWendt/design-patterns-in-php.svg?branch=master)](https://travis-ci.org/AndyWendt/design-patterns-in-php) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/AndyWendt/design-patterns-in-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/AndyWendt/design-patterns-in-php/?branch=master) [![Code Coverage](https://scrutinizer-ci.com/g/AndyWendt/design-patterns-in-php/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/AndyWendt/design-patterns-in-php/?branch=master)

## Abstract Factory


## Adapter


## Composite


## Decorator


## Factory Method


## [Observer](src/Observer)

>Define a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.


## [Strategy](src/Strategy)

>Define a family of algorithms, encapsulate each one, and make them interchangeable.  Strategy lets the algorithm vary 
independently from the clients that use it.

[In the ArrayModifier example](src/Strategy/ArrayModifier.php) of the Strategy Pattern, you see that an array and an 
array of [filters](src/Strategy/Filter) implementing the [filter interface](src/Strategy/Filter/Filter.php) are passed 
to `ArrayModifier::filter()`.  

That is essentially what the strategy pattern is.  You take common but different functionality and you encapsulate 
that functionality into classes that can be used interchangeably. They are interchangeable because they all implement the same interface.  

If we hardcoded the filters into the [ArrayModifier class](src/Strategy/ArrayModifier.php), it would create a number of 
problems: 

1. The filters would not be able to be used elsewhere.
2. To change the filtering or add a new filter you would have to alter the internal code of the ArrayModifier class. 
3. You would not be able to easily vary the filtering from one usage to the next thereby coupling yourself to one 
option.  
4. ArrayModifier should not care how the array is filtered, only that it can be done.  (See the [Single Responsibility Principle](http://en.wikipedia.org/wiki/Single_responsibility_principle).

  
## Template Method
 
 
