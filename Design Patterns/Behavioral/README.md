# Behavioral Patterns

These patterns provide ways to communicate between objects in a program.

[Cheat Sheet for Behavioral Design Patterns](https://refactoring.guru/design-patterns/behavioral-patterns)

## Table of Contents

| Category   | Patterns                                                                                                                                                                                                                                     |
| ---------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Behavioral | [Memento](#memento-pattern), [State](#state-pattern), [Iterator](#iterator-pattern), [Observer](#observer-pattern), [Mediator](#mediator-pattern), [Strategy](#strategy-pattern), Command, Template Method, Visitor, Chain of Responsibility |

---

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

### Mediator Pattern

- This pattern is used to manage the communication between the components of an application.

- We can simply use it for the purpose of Centralized Control over the application with their number of components.

- For e.g - A smart app controlling all the other smart devices (T.V, Camera, Light, Fan etc) which cannot be controlled individually or have a direct link for themselves.

**Example** - [Mediator Pattern](Mediator.php)

### Strategy Pattern

- This pattern is used to define a family of algorithms, encapsulate each one, and make them interchangeable.

- Strategy lets the algorithm vary independently from clients that use it.

- It has similarities with Adapter pattern, Factory pattern, and Bridge pattern.

**Example** - [Strategy Pattern](Strategy.php)
