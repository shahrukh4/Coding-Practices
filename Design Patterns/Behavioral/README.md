# Behavioral Patterns

These patterns provide ways to communicate between objects in a program.

[Cheat Sheet for Behavioral Design Patterns](https://refactoring.guru/design-patterns/behavioral-patterns)

## Table of Contents

| Category | Patterns |
| --- | --- |
| Behavioral | [Memento](#memento-pattern), [State](#state-pattern), [Iterator](#iterator-pattern), [Observer](#observer-pattern), Mediator, Strategy, Command, Template Method, Visitor, Chain of Responsibility |

___

### Memento Pattern

- This pattern is used to restore an object to its previous state. Basically this is used to store the state of the object and restore (undo) it when needed.

- We can use it where we need to implement the Undo/Redo functionality.

**Example** - [Memento Pattern](Memento.php)

### State Pattern

- This pattern is used to manage the state of an object.
- It can also be the example of Open-Closed Principle in SOLID Principles.

**Example** - [State Pattern](State.php)

### Iterator Pattern

- This pattern is used to iterate over a collection of objects.

- Iterator is a behavioral design pattern that allows sequential traversal through a complex data structure without exposing its internal details.

**Example** - [Iterator Pattern](Iterator.php)

### Observer Pattern

- This pattern is used to notify the object about the state of the subject.
- We can simply use it for the purpose of Event-Listeners functionality.
- Laravel uses Observer pattern for the purpose of Event-Listeners.

**Example** - [Observer Pattern](Observer.php)