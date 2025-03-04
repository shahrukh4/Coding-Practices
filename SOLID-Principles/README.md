# SOLID Principles

This project demonstrates the SOLID principles of object-oriented design, which are essential for creating maintainable and scalable software. Each principle is implemented in its respective PHP file.

## Principles Overview

1. **Single Responsibility Principle (SRP)**:

- "_A class should have only one reason to change or have only one job/responsibility."_

- **Example** - In [Single-Responsibility.php](Single-Responsibility.php), the `User` class has a single responsibility of representing a user and other classes, such as `UserRepository` and `UserNotifier`, focus on their specific tasks.

---

2. **Open/Closed Principle (OCP)**:

- _"A class should be open for extensions but closed for modifications."_

- **Example** - In [Open-Closed.php](Open-Closed.php), the `Shape` class is open for extensions (adding new shapes) but closed for modifications (changing the `behavior(methods)` of existing shapes).

---

3. **Liskov Substitution Principle (LSP)**:

- _"Child or derived classes should be able to substitute their parent or base class without breaking the program's behavior."_

- **Example** -

  - In [Liskov-Substitution.php](Liskov-Substitution.php), the `Human` class is an interface that can be defined with its child class `Father` or `Child` to implement the `speak()` method. Means child class should have all the abilities of parent class, if it can't do it, then it is against the Liskov Substitution Principle.

  - We could've also implemented the `Father` interface for `Child` class but `Father` could have some features which `Child` may not have.

---

4. **Interface Segregation Principle (ISP)**:

- _"Classes should not be forced to implement methods they do not use/need."_

- **Example** -

  - In [Interface-Segregation.php](Interface-Segregation.php), If the `PrinterInterface` having the `scanDocument()` method, It is not required, so we need to implement a separate interface the `ScannerInterface` for it.

  - Accrodingly `MultiFunctionPrinter, SimplePrinter, SimpleScanner` classes can implement the desired interfaces.

---

5. **Dependency Inversion Principle (DIP)**:

- _"High-level classes should not depend on low-level classes but rather on abstractions."_

- **Example** -

  - In [Dependency-Inversion.php](Dependency-Inversion.php), `UserService` class is a High level class that does not directly depends on `MysqlDatabase` which is a low level class.

  - `UserService` class has a dependency on `DatabaseInterface` which is an abstraction of `MysqlDatabase` and `PostgresqlDatabase` classes.

---

## Usage

To explore the implementation of each principle, refer to the corresponding PHP files in this directory. Each file contains examples and explanations of how the respective principle is applied.
