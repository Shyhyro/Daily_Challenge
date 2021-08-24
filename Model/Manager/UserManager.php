<?php

class UserManager
{
    /**
     * Search a User in table user for log
     * @param $username
     * @return User
     */
    public function searchUser($username): ?User
    {
        $stmt = Database::getInstance()->prepare('SELECT * FROM user_485751 WHERE username = :username');
        $stmt->bindValue(':username', $username);
        $state = $stmt->execute();
        if($state && $userData = $stmt->fetch())
        {
            $user = new User($userData['id'], $userData['email'], $userData['password'], $userData['birthdate'], $userData['username'], $userData['activate'], $userData['registration']);
        }
        else
        {
            $user = null;
        }
        return $user;
    }

    /**
     * Add a new user
     * @param $email
     * @param $password
     * @param $birthdate
     * @param $username
     * @return bool
     */
    public function addUser($email, $password, $birthdate, $username) :bool
    {
        $stmt = Database::getInstance()->prepare("INSERT INTO user_485751 (email, password, birthdate, username) 
            VALUES (:email, :password , :birthdate, :username)");
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        $stmt->bindValue(':birthdate', $birthdate);
        $stmt->bindValue(':username', $username);
        return $stmt->execute();
    }
}