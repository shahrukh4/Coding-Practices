# Design Patterns

## Table of Contents

| Category | Patterns |
| --- | --- |
| [Creational](#creational-patterns) | [Singleton](#singleton-pattern), [Prototype](#prototype-pattern), Builder, Factory Method, Abstract Factory |
| [Structural](#structural-patterns) | [Facade](#facade-pattern), Adapter, Decorator, Proxy, Composite, Bridge, Flyweight |
| [Behavioral](#behavioral-patterns) | [Memento](#memento-pattern), [State](#state-pattern), Iterator, Observer, Mediator, Strategy, Command, Template Method, Visitor, Chain of Responsibility |

## Description

*"Design patterns are solutions to common and repeating problems in software design."*

[Cheat Sheet for Design Patterns](https://refactoring.guru)

___

## Creational Patterns

These patterns provide ways to create objects in a program.

___

### Singleton Pattern

- This pattern is used to ensure that a class has only one instance and provides a global point of access to that instance.

- We can use it when we need a single instance of a class and we don't want to create multiple instances.

**Example** - [Singleton Pattern](Singleton.php)

### Prototype Pattern

- This pattern is used to create a new instance of an object without having to call the constructor.

- We can use it when we need to create multiple instances of a class and we don't want to modify the constructor. Simply, when we need to clone an object multiple times, we can use the Prototype pattern.

**Example** - [Prototype Pattern](Prototype.php)

___

## Structural Patterns

These patterns provide ways to structure objects in a program.

___

### Facade Pattern

- This pattern is used to provide a single point of access to a complex system or a set of related objects.
- We can use this pattern when there are lot of interrelated things are going on and that can be managed by only one class.
- For e.g. Hotels (Rooms, Food, Laundry), Airlines (Flights, Meals, Spa), Banks (Accounts, Cheques, Loans).

**Example** - [Facade Pattern](Facade.php)

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

