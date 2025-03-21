# Behavioral Patterns

These patterns provide ways to communicate between objects in a program.

[Cheat Sheet for Behavioral Design Patterns](https://refactoring.guru/design-patterns/behavioral-patterns)

## Table of Contents

| Category   | Patterns                                                                                                                                                                                                                                                                                                                                             |
| ---------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Behavioral | [Memento](#memento-pattern), [State](#state-pattern), [Iterator](#iterator-pattern), [Observer](#observer-pattern), [Mediator](#mediator-pattern), [Strategy](#strategy-pattern), [Command](#command-pattern), [Template Method](#template-method-pattern), [Visitor](#visitor-pattern), [Chain of Responsibility](#chain-of-responsibility-pattern) |

---

### Memento Pattern

- This pattern is used to restore an object to its previous state. Basically this is used to store the state of the object and restore (undo) it when needed.

- We can use it where we need to implement the _Undo/Redo_ functionality.

**Example** - [Memento Pattern](Memento.php)

---

### State Pattern

- This pattern is used to manage the state of an object.

- It can also be the example of **Open-Closed Principle** in **SOLID Principles**.

**Example** - [State Pattern](State.php)

---

### Iterator Pattern

- This pattern is used to iterate over a collection of objects.

- Iterator is a behavioral design pattern that allows sequential traversal through a complex data structure without exposing its internal details.

**Example** - [Iterator Pattern](Iterator.php)

---

### Observer Pattern

- This pattern is used to notify the object about the state of the subject.

- We can simply use it for the purpose of Event-Listeners functionality.

- **Laravel** uses **Observer pattern** for the purpose of **Event-Listeners**.

**Example** - [Observer Pattern](Observer.php)

---

### Mediator Pattern

- This pattern is used to manage the communication between the components of an application.

- We can simply use it for the purpose of Centralized Control over the application with their number of components.

- _For e.g - A smart app controlling all the other smart devices (T.V, Camera, Light, Fan etc) which cannot be controlled individually or have a direct link for themselves._

**Example** - [Mediator Pattern](Mediator.php)

---

### Strategy Pattern

- This pattern is used to define a family of algorithms, encapsulate each one, and make them interchangeable.

- Strategy pattern lets the algorithm vary independently from clients that use it.

- It has similarities with **Adapter pattern, Factory pattern, and Bridge pattern**.

**Example** - [Strategy Pattern](Strategy.php)

---

### Command Pattern

- This pattern is used to encapsulate a request as an object, which can then be "undone" if required.

- We can simply use it for the purpose of _Undo/Redo_ functionality.

- It has similarities with the **Observer pattern**.

**Example** - [Command Pattern](Command.php)

---

### Template Method Pattern

- This pattern is used to define a skeleton of an algorithm, which can be inherited to create new algorithms.

- It is often used for the purpose of abstracting the common functionality of a set of related algorithms.

- It can be used, if some functionalities are common to multiple classes, then we can move them to the abstract base class and override them in the child classes.

**Example** - [Template Method Pattern](TemplateMethod.php)

---

### Visitor Pattern

- Visitor pattern lets you separate algorithms from the objects on which they operate.

- It is often used for the purpose of adding new functionality to an object without modifying the structure of the object.

- It follows the **Single Responsibility and Open/Closed Principle** very closely.

- _For e.g. We can order a Macbook, which can be configured for RAM, Storage, etc. separately. So we can visit each of these configurations and get the final price._

**Example** - [Visitor Pattern](Visitor.php)

---

### Chain of Responsibility Pattern

- This pattern is used to delegate the processing of a request to multiple potential handlers, each of which can decide whether to handle the request or pass it to the next handler.

- It is often used for the purpose of adding Middleware functionality to an application.

- In **Laravel**, we can use it for the purpose of adding **Middlewares** to an application.

**Example** - [Chain of Responsibility Pattern](ChainOfResponsibility.php)

---

## Usage

To explore the implementation of each design pattern, refer to the corresponding navigation links and their respective PHP files. Each file contains examples and explanations of how the respective design pattern is applied.
