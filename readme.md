# Head First Design Patterns - Learning Repository

Welcome to my repository! This repository contains my personal learnings and implementations of various design patterns from the book **"Head First Design Patterns"** by Eric Freeman, Elisabeth Robson, Bert Bates, and Kathy Sierra.

## Table of Contents

- [Introduction](#introduction)
- [Design Principles](#design-principles)
- [Design Patterns](#design-patterns)

## Introduction

Design patterns are typical solutions to common problems in software design. This repository is a collection of my learnings and code samples as I journey through the book "Head First Design Patterns". Each pattern is implemented in a separate directory with a detailed explanation and code example.


## Design Principles

1. **Encapsulate What Varies**
   - Identify the aspects of your application that vary and separate them from what stays the same.
   - By encapsulating the varying parts, you can change or extend them independently without affecting the stable parts of your system.

2. **Favor Composition Over Inheritance**
   - Use composition to assemble behaviors dynamically rather than inheriting from a base class.
   - This approach promotes flexibility and reuse of behaviors across different classes.

3. **Program to Interfaces, Not Implementations**
   - Depend on abstractions (interfaces) rather than concrete implementations.
   - This practice enhances code flexibility and interchangeability of components.

4. **Strive for Loosely Coupled Designs Between Objects that Interact**
   - Minimize dependencies between objects to make the system more maintainable and adaptable.
   - Loose coupling allows changes in one part of the system to have minimal impact on other parts.

5. **Classes Should Be Open for Extension, but Closed for Modification (Open/Closed Principle)**
   - Design your classes so that they can be extended with new behavior without altering existing code.
   - This principle helps in adding new functionality with minimal risk of breaking existing code.

6. **Depend Upon Abstractions, Not Concretions (Dependency Inversion Principle)**
   - High-level modules should not depend on low-level modules. Both should depend on abstractions.
   - This principle helps in creating more flexible and reusable code.

7. **Only Talk to Your Friends (Law of Demeter)**
   - A method should only call methods of objects it directly knows and not navigate through a chain of objects.
   - This principle helps in reducing the complexity and increasing the maintainability of your code.

8. **Don’t Call Us, We’ll Call You (Hollywood Principle)**
   - High-level components will determine when and how low-level components are called.
   - This principle helps in decoupling the execution flow and enhancing the flexibility of the system.

9. **A Class Should Have Only One Reason to Change (Single Responsibility Principle)**
   - Each class should have only one responsibility or job.
   - This principle makes your code easier to understand, maintain, and extend.

## Design Patterns

1. **Strategy Pattern**
   - Defines a family of algorithms, encapsulates each one, and makes them interchangeable.
   - Lets the algorithm vary independently from clients that use it.

2. **Observer Pattern**
   - Defines a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.

3. **Decorator Pattern**
   - Attaches additional responsibilities to an object dynamically.
   - Provides a flexible alternative to subclassing for extending functionality.

4. **Factory Pattern**
   - Defines an interface for creating an object, but lets subclasses alter the type of objects that will be created.

5. **Singleton Pattern**
   - Ensures a class has only one instance and provides a global point of access to it.

6. **Command Pattern**
   - Encapsulates a request as an object, thereby letting you parameterize clients with queues, requests, and operations.

7. **Adapter Pattern**
   - Converts the interface of a class into another interface the clients expect.
   - Lets classes work together that couldn’t otherwise because of incompatible interfaces.

8. **Facade Pattern**
   - Provides a unified interface to a set of interfaces in a subsystem.
   - Defines a higher-level interface that makes the subsystem easier to use.

9. **Template Method Pattern**
   - Defines the skeleton of an algorithm in a method, deferring some steps to subclasses.
   - Lets subclasses redefine certain steps of an algorithm without changing the algorithm's structure.
10. **Iterator Pattern**
    - Provides a way to access the elements of an aggregate object sequentially without exposing its underlying representation.

11. **Composite Pattern**
    - Composes objects into tree structures to represent part-whole hierarchies.
    - Lets clients treat individual and compositions objects uniformly.
12. **State Pattern**
    - Allows an object to alter its behavior when its internal state changes.
    - The object will appear to change its class.
<!---
13. **Proxy Pattern**
    - Provides a surrogate or placeholder for another object to control access to it.
-->
