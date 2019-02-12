<?php

class Database
{
    public $mysqli;

    public function connect()
    {
        $host = 'localhost';
        $user = 'pmauser';
        $pass = 'passwd';
        $db = 'users';
        // Create connection
        $this->mysqli = new mysqli($host, $user, $pass, $db);
    }

    public function addUser($user)
    {
        $id = $user->id;
        $username = $user->username;
        $email = $user->email;
        $password = $user->password;
        $connected = $user->connected;

        if ($stmt = $this->mysqli->prepare('INSERT INTO users (id, username,email,password,connected) VALUES (?, ?, ?, ?, ?)')) {
            // Bind the variables to the parameter as strings.
            $stmt->bind_param('issss', $id, $username, $email, $password, $connected);

            // Execute the statement.
            $stmt->execute();

            // Close the prepared statement.
            $stmt->close();
        }
    }

    public function deleteUser($user)
    {
        $id = $user->id;
        if ($stmt = $this->mysqli->prepare('DELETE FROM users WHERE id = ?')) {
            // Bind the variable to the parameter as a string.
            $stmt->bind_param('i', $id);

            // Execute the statement.
            $stmt->execute();

            // Close the prepared statement.
            $stmt->close();
        }
    }

    public function updateName($user, $newName)
    {
        $id = $user->id;
        if ($stmt = $mysqli->prepare('UPDATE users SET username = ? WHERE id = ?')) {
            // Bind the variables to the parameter as strings.
            $stmt->bind_param('si', $newName, $id);

            // Execute the statement.
            $stmt->execute();

            // Close the prepared statement.
            $stmt->close();
        }
    }

    public function updateEmail($user, $newEmail)
    {
        $id = $user->id;
        if ($stmt = $mysqli->prepare('UPDATE users SET email = ? WHERE id = ?')) {
            // Bind the variables to the parameter as strings.
            $stmt->bind_param('si', $newEmail, $id);

            // Execute the statement.
            $stmt->execute();

            // Close the prepared statement.
            $stmt->close();
        }
    }
}

class User
{
    public function __construct($id, $username, $email, $password, $connected)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->connected = $connected;
    }

    public function connectUser()
    {
        $this->connected = 'yes';
    }

    public function disconnectUser()
    {
        $this->connected = 'no';
    }

    public function updateName($name)
    {
        $this->username = $name;
    }

    public function updateEmail($newEmail)
    {
        $this->email = $newEmail;
    }
}
