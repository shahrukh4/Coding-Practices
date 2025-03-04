# Creational Patterns

These patterns provide ways to create objects in a program.

[Cheat Sheet for Creational Design Patterns](https://refactoring.guru/design-patterns/creational-patterns)

## Table of Contents

| Category                           | Patterns                                                                                                                                                                                |
| ---------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [Creational](#creational-patterns) | [Singleton](#singleton-pattern), [Prototype](#prototype-pattern), [Factory Method](#factory-method-pattern), [Abstract Factory](#abstract-factory-pattern), [Builder](#builder-pattern) |

---

### Singleton Pattern

- This pattern is used to ensure that a class has only one instance and provides a global point of access to that instance.

- We can use it when we need a single instance of a class and we don't want to create multiple instances.

**Example** - [Singleton Pattern](Singleton.php)

---

### Prototype Pattern

- This pattern is used to create a new instance of an object without having to call the constructor.

- We can use it when we need to create multiple instances of a class and we don't want to modify the constructor. Simply, when we need to clone an object multiple times, we can use the Prototype pattern.

**Example** - [Prototype Pattern](Prototype.php)

---

### Factory Method Pattern

- This pattern is used to create an object without having to specify the type of object that will be created.

- Basically we don't need to initiate an object, we can just call a static factory method to create an object.

**Example** - [Factory Method Pattern](FactoryMethod.php)

---

### Abstract Factory Pattern

- This pattern is used to create a family of related objects without specifying their concrete classes.
- Basically we can use this pattern to get the object and use all the related properties and behaviors without thinking about the concrete classes.

**Example** - [Abstract Factory Pattern](AbstractFactory.php)

---

### Builder Pattern

- This pattern is used to create an object step by step.

- We can use it when we need to create a complex object and we don't want to create it all at once in a constructor passing too many arguments.

**Example** - [Builder Pattern](Builder.php)

---

## Usage

To explore the implementation of each design pattern, refer to the corresponding navigation links and their respective PHP files. Each file contains examples and explanations of how the respective design pattern is applied.
