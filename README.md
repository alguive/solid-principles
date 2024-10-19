# SOLID Principles PHP Examples

## Single Responsibility Principle
| A class should only have one reason to change, which means it should only have one task

## Open/Closed Principle
| Object/Entities should be opened to be extended, but closed to be modified

## Liskov Substitution Principle
| The principle says that we can use any inheriting class in place of the base class. If we implement a subclass, we must also be able to use it instead of the main class. Otherwise, it means that inheritance has been implemented incorrectly.

## Interface Segregation Principle
| The rule is: “No client should be forced to depend on methods it does not use”.
| We should not use “fat interfaces” that declare multiple methods if any of them could be left unused. Better to have a few dedicated small interfaces than one that is too general. It is also in line with the single responsibility principle.

## Dependency Injection Principle
| We should reduce dependencies to specific implementations but rely on interfaces. If we make any change to the interface (it violates the open/close principle), this change necessitates changes in the implementations of this interface.
