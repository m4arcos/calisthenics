<?php

class Employee
{
    private string $name;
    private string $surName; 
    private string $salary;

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function setSurname(string $surname)
    {
        $this->surName = $surname;

        return $this;
    }

    public function setSalary(string $salary)
    {
        $this->salary = $salary;

        return $this;
    }

    public function __toString()
    {
        $employeeInfo = 'Name: ' . $this->name . PHP_EOL;
        $employeeInfo .= 'Surname: ' . $this->surName . PHP_EOL;
        $employeeInfo .= 'Salary: ' . $this->salary . PHP_EOL;

        return $employeeInfo;
    }
}

# Create a new instance of the Employee class, Tom Smith, with a salary of 100:
$employee = (new Employee())
                ->setName('Tom')
                ->setSurname('Smith')
                ->setSalary('100');

# Display the value of the Employee instance:
echo $employee;

# Display:
# Name: Tom
# Surname: Smith
# Salary: 100