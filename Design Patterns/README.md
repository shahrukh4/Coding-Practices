# Design Patterns

## Table of Contents

| Category | Patterns |
| --- | --- |
| [Creational](#creational-patterns) | Singleton, Builder, Factory Method, Abstract Factory, Prototype |
| [Structural](#structural-patterns) | Adapter, Decorator, Proxy, Facade, Composite, Bridge, Flyweight |
| [Behavioral](#behavioral-patterns) | [Memento](#memento-pattern), [State](#state-pattern), Iterator, Observer, Mediator, Strategy, Command, Template Method, Visitor, Chain of Responsibility |

## Description

*"Design patterns are solutions to common and repeating problems in software design."*

[Cheat Sheet for Design Patterns](https://refactoring.guru)

___

## Creational Patterns

- These patterns provide ways to create objects in a program.

## Structural Patterns

- These patterns provide ways to 
structure objects in a program.

## Behavioral Patterns

These patterns provide ways to communicate between objects in a program.

___

### Memento Pattern

- This pattern is used to restore an object to its previous state. Basically this is used to store the state of the object and restore (undo) it when needed.

- We can use it where we need to implement the Undo/Redo functionality.

**Example** - [Memento Pattern](Memento.php)

### State Pattern

- This pattern is used to manage the state of an object.
- It can also be the example of Open-Closed Principle in SOLID Principles.

**Example** - [State Pattern](State.php)

