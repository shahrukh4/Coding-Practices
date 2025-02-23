# Structural Patterns

These patterns provide ways to structure objects in a program.

[Cheat Sheet for Structural Design Patterns](https://refactoring.guru/design-patterns/structural-patterns)

## Table of Contents

| Category | Patterns |
| --- | --- |
| Structural | [Facade](#facade-pattern), [Adapter](#adapter-pattern), [Decorator](#decorator-pattern), [Proxy](#proxy-pattern), [Composite](#composite-pattern), Bridge, Flyweight |

___

### Facade Pattern

- This pattern is used to provide a single point of access to a complex system or a set of related objects.
- We can use this pattern when there are lot of interrelated things are going on and that can be managed by only one class.
- For e.g. Hotels (Rooms, Food, Laundry), Airlines (Flights, Meals, Spa), Banks (Accounts, Cheques, Loans).

**Example** - [Facade Pattern](Facade.php)

### Adapter Pattern

- This pattern is used to allow incompatible objects to collaborate with each other.
- For e.g. Notification library (i.e SMS, Email, Slack, Facebook, Twitter etc) is the best example of this pattern.

**Example** - [Adapter Pattern](Adapter.php)

### Decorator Pattern

- This pattern is used to add additional functionality to an object without modifying its structure.
- For e.g. Food (Veg, Non-Veg), Rooms (Luxury, Normal), Flights (Business, Economy).

**Example** - [Decorator Pattern](Decorator.php)

### Proxy Pattern

- This pattern is used to provide a proxy object that controls access to a real object.

- This can be used when we want to implement some extra functionality to an object without modifying its structure.

- For e.g. File system, Database, Caching, Downloading etc.

**Example** - [Proxy Pattern](Proxy.php)

### Composite Pattern

- This pattern is used to represent a tree structure of objects.

- We can use it when we need to work on a group of objects rather than individual objects.

- For e.g. File system, Heirarchy of a directory, Organization of employees, Products of an order inside a box etc.

**Example** - [Composite Pattern](Composite.php)