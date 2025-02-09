# Structural Patterns

These patterns provide ways to structure objects in a program.

[Cheat Sheet for Structural Design Patterns](https://refactoring.guru/design-patterns/structural-patterns)

## Table of Contents

| Category | Patterns |
| --- | --- |
| Structural | [Facade](#facade-pattern), Adapter, [Decorator](#decorator-pattern), Proxy, Composite, Bridge, Flyweight |

___

### Facade Pattern

- This pattern is used to provide a single point of access to a complex system or a set of related objects.
- We can use this pattern when there are lot of interrelated things are going on and that can be managed by only one class.
- For e.g. Hotels (Rooms, Food, Laundry), Airlines (Flights, Meals, Spa), Banks (Accounts, Cheques, Loans).

**Example** - [Facade Pattern](Facade.php)

### Decorator Pattern

- This pattern is used to add additional functionality to an object without modifying its structure.
- For e.g. Food (Veg, Non-Veg), Rooms (Luxury, Normal), Flights (Business, Economy).

**Example** - [Decorator Pattern](Decorator.php)