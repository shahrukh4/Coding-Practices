# Structural Patterns

These patterns provide ways to structure objects in a program.

[Cheat Sheet for Structural Design Patterns](https://refactoring.guru/design-patterns/structural-patterns)

## Table of Contents

| Category   | Patterns                                                                                                                                                                                                      |
| ---------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Structural | [Facade](#facade-pattern), [Adapter](#adapter-pattern), [Decorator](#decorator-pattern), [Proxy](#proxy-pattern), [Composite](#composite-pattern), [Bridge](#bridge-pattern), [Flyweight](#flyweight-pattern) |

---

### Facade Pattern

- This pattern is used to provide a single point of access to a complex system or a set of related objects.

- We can use this pattern when there are lot of interrelated things are going on and that can be managed by only one class.

- _For e.g. Hotels (Rooms, Food, Laundry), Airlines (Flights, Meals, Spa), Banks (Accounts, Cheques, Loans)._

**Example** - [Facade Pattern](Facade.php)

---

### Adapter Pattern

- This pattern is used to allow incompatible objects to collaborate with each other.

- _For e.g. Notification library (i.e SMS, Email, Slack, Facebook, Twitter etc) is the best example of this pattern._

**Example** - [Adapter Pattern](Adapter.php)

---

### Decorator Pattern

- This pattern is used to add additional functionality to an object without modifying its structure.

- _For e.g. Food (Veg, Non-Veg), Rooms (Luxury, Normal), Flights (Business, Economy)._

**Example** - [Decorator Pattern](Decorator.php)

---

### Proxy Pattern

- This pattern is used to provide a proxy object that controls access to a real object.

- This can be used when we want to implement some extra functionality to an object without modifying its structure.

- _For e.g. File system, Database, Caching, Downloading etc._

**Example** - [Proxy Pattern](Proxy.php)

---

### Composite Pattern

- This pattern is used to represent a tree structure of objects.

- We can use it when we need to work on a group of objects rather than individual objects.

- _For e.g. File system, Heirarchy of a directory, Organization of employees, Products of an order inside a box etc._

**Example** - [Composite Pattern](Composite.php)

---

### Bridge Pattern

- This pattern is used to decouple an abstraction from its implementation so that the two can vary independently.

- We can use it when we need to separate the behavior from the implementation.

- We can use it when we want to implement the functionalities separately which can be used together, so we can easily develop them and it can be opened for extension.

- There are similarities between **Adapter, Decorator and Bridge patterns**.

- _For e.g. Car (Electric, Diesel, Petrol), Engine (Diesel Engine, Petrol Engine, Electric Engine)._

**Example** - [Bridge Pattern](Bridge.php)

---

### Flyweight Pattern

- This pattern is used to share a lot of data between objects.

- We can use it when we want to use the repeating data in Shared state (Extrinsic) and the changing state (Intrinsic).

- It is also known as **Cache pattern**.

- This is not very commonly used design pattern, so we can avoid it.

- _For e.g. Text (Normal, Bold, Italic), Font (Small, Medium, Large), Color (Red, Green, Blue)._

**Example** - [Flyweight Pattern](Flyweight.php)

---

## Usage

To explore the implementation of each design pattern, refer to the corresponding navigation links and their respective PHP files. Each file contains examples and explanations of how the respective design pattern is applied.
