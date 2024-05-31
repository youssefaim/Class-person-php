# Class-person-php
### Description of the PHP Code

This PHP script defines a class called `Personne` that represents a person with specific attributes and methods. The script includes functionalities to create instances of the `Personne` class and display their details, including their calculated age.

#### Class Definition and Constructor

1. **Class `Personne`**:
   - The class `Personne` is defined to represent a person.
   - It has three properties: `nom` (last name), `prenom` (first name), and `date_naissance` (date of birth).

2. **Constructor (`__construct`)**:
   - The constructor method initializes the properties of the class when a new instance is created.
   - It takes three parameters: `$nom`, `$prenom`, and `$date_naissance` to set the respective properties of the class.

#### Methods

1. **Method `presenter()`**:
   - This method returns a string that introduces the person.
   - The returned string includes the person's last name, first name, and date of birth.

2. **Method `age()`**:
   - This method calculates the age of the person.
   - It creates a `DateTime` object for the person's birth date and the current date.
   - The method calculates the difference between the current date and the birth date.
   - It extracts the number of full years from the `DateInterval` object, which represents the person's age.
   - The method returns the calculated age.

#### Creating Instances and Displaying Details

1. **Creating Instances**:
   - Two instances of the `Personne` class are created, representing two different people.
   - For example, `$p1` is created with the name "aim youssef" and birth date "2000-03-13", and `$p2` is created with the name "ali kabbour" and birth date "2001-06-14".

2. **Displaying Details**:
   - The `presenter()` method is called for each instance to get the introduction string.
   - The `age()` method is called for each instance to calculate and get the age.
   - The details, including the introduction and age, are printed for each instance.

#### Example Output

If today's date is "2024-05-31", the output of the script would be:
```
je suis aim youssef 2000-03-13 j'ai 24 ans.
je suis ali kabbour 2001-06-14 j'ai 22 ans.
```

### Summary

This PHP script demonstrates the use of object-oriented programming by defining a class to represent a person, initializing instances with specific attributes, and using methods to perform tasks like introducing the person and calculating their age. The example output shows how the script would display the details of two person instances.
