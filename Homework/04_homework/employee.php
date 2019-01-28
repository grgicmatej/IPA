<?php
class Employee
{
    private $id;
    private $firstName;
    private $lastName;
    private $birthDay;
    private $gender;
    private $income;
    /**
     * Employee constructor.
     * @param $id
     * @param $firstName
     * @param $lastName
     * @param $birthDay
     * @param $gender
     * @param $income
     */
    public function __construct($id, $firstName, $lastName, $birthDay, $gender, $income)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDay = $birthDay;
        $this->gender = $gender;
        $this->income = $income;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    /**
     * @return mixed
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }
    /**
     * @param mixed $birthDay
     */
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;
    }
    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    /**
     * @return mixed
     */
    public function getIncome()
    {
        return $this->income;
    }
    /**
     * @param mixed $income
     */
    public function setIncome($income)
    {
        $this->income = $income;
    }
}
