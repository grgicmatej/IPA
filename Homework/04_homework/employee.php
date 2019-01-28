<?php
class Employee
{
    private $id;
    private $firstName;
    private $lastName;
    private $birthDay;
    private $gender;
    private $income;

    public function __construct($id, $firstName, $lastName, $birthDay, $gender, $income)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDay = $birthDay;
        $this->gender = $gender;
        $this->income = $income;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function getBirthDay()
    {
        return $this->birthDay;
    }
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getIncome()
    {
        return $this->income;
    }
    public function setIncome($income)
    {
        $this->income = $income;
    }
}
