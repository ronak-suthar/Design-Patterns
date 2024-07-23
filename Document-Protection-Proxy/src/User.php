<?php

namespace App;


/**
 * Class User
 *
 * @package App
 */
class User {

    /**
     * Level one user
     */
    public const LEVEL_ONE = 1;

    /**
     * Level two user
     */
    public const LEVEL_TWO = 2;

    /**
     * Level three user
     */
    public const LEVEL_THREE = 3;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $designation;

    /**
     * @var int
     */
    private $accessLevel;

    /**
     * User constructor.
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $designation
     * @param int    $accessLevel
     */
    public function __construct(string $firstName, string $lastName, string $email, string $designation, int $accessLevel)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->designation = $designation;
        $this->accessLevel = $accessLevel;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getDesignation(): string
    {
        return $this->designation;
    }

    /**
     * @return int
     */
    public function getAccessLevel(): int
    {
        return $this->accessLevel;
    }

}
