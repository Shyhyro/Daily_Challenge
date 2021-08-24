<?php


class User
{
    private ?int $id;
    private ?string $email;
    private ?string $password;
    private ?string $birthdate;
    private ?string $username;
    private ?int $activate;
    private ?string $registration;


    /**
     * User constructor.
     * @param int|null $id
     * @param string|null $email
     * @param string|null $password
     * @param string|null $birthdate
     * @param string|null $username
     * @param int|null $activate
     * @param string|null $registration
     */
    public function __construct(int $id = null, string $email = null, string $password = null, string $birthdate = null, string $username = null,
                                int $activate = null, string $registration = null)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->birthdate = $birthdate;
        $this->username = $username;
        $this->activate = $activate;
        $this->registration = $registration;
    }

    /**
     * Return id
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Return email
     * @return false|string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set the email of User
     * @param false|string|null $email
     */
    public function setEmail($email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Return password
     * @return false|string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set the password of User
     * @param false|string|null $password
     */
    public function setPassword($password): User
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Return birthdate
     * @return false|string|null
     */
    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }

    /**
     * Set the birthdate of User
     * @param false|string|null $birthdate
     */
    public function setBirthdate($birthdate): User
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * Return username
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Set the username of User
     * @param string|null $username
     */
    public function setUsername(?string $username): User
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Return activate
     * @return int|null
     */
    public function getActivate(): ?int
    {
        return $this->activate;
    }

    /**
     * Return registration date
     * @return false|string|null
     */
    public function getRegistration(): ?string
    {
        return $this->registration;
    }

}