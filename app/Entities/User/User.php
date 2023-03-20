<?php

namespace App\Entities\User;

use Doctrine\ORM\Mapping as ORM;
use App\Entities\Entity;

/**
 * class User
 * @package App\Entities\User
 * @ORM\Entity
 */
class User extends Entity
{
    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string|null $mobile
     */
    private ?string $mobile = null;

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $username
     * @param string $password
     * @param bool $isActive
     * @throws \Exception
     */
    public function __construct(

        /**
         * @ORM\Column(type="string", nullable=false)
         * @var string $firstName
         */
        private string $firstName,

        /**
         * @ORM\Column(type="string", nullable=false)
         * @var string $lastName
         */
        private string $lastName,

        /**
         * @ORM\Column(type="string", nullable=false, unique=true)
         * @var string $email
         */
        private string $email,

        /**
         * @ORM\Column(type="string", nullable=false, unique=true)
         * @var string $username
         */
        private string $username,

        /**
         * @ORM\Column(type="string", nullable=false)
         * @var string $password
         */
        private string $password,

        /**
         * @ORM\Column (type="boolean")
         * @var bool $isActive
         */
        private bool $isActive,
    )
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setIsActive($isActive);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return void
     * @throws \Exception
     */
    public function setFirstName(string $firstName): void
    {
        if (empty($firstName)) {
            throw new \Exception('First name is required');
        }
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return void
     * @throws \Exception
     */
    public function setLastName(string $lastName): void
    {
        if (empty($lastName)) {
            throw new \Exception('Last name is required');
        }
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     * @throws \Exception
     */
    public function setEmail(string $email): void
    {
        if (empty($email)) {
            throw new \Exception('Email is required');
        }
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return void
     * @throws \Exception
     */
    public function setUsername(string $username): void
    {
        if (empty($username)) {
            throw new \Exception('Username is required');
        }
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return void
     * @throws \Exception
     */
    public function setPassword(string $password): void
    {
        if (empty($password)) {
            throw new \Exception('Password is required');
        }
        $this->password = $password;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return void
     * @throws \Exception
     */
    public function setMobile(string $mobile): void
    {
        if (empty($mobile)) {
            $mobile = null;
        }
        $this->mobile = $mobile;
    }
}
