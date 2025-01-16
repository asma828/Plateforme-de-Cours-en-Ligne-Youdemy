<?php
namespace Youdemy\Classes;


namespace Youdemy\Classes;

use PDO;
use Exception;

class User {
    private $id;
    private $name;
    private $email;
    private $role_id;
    private $passwordHash;

    public function __construct($id, $name, $email, $role_id ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->role_id = $role_id;
    }

    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getEmail() { return $this->email; }
    public function getRole(): string {return $this->role_id;}

    public function save() {
        try {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare('INSERT INTO users (name, email, password, role_id) VALUES (?, ?, ?, ?)');
        if ($stmt->execute([$this->name, $this->email, $this->passwordHash, $this->role_id])) {
            $this->id = $db->lastInsertId(); // Get the ID of the newly inserted user
            return true;
        }
        return false;
    } catch (Exception $e) {
        throw new Exception('Database error: ' . $e->getMessage());
    }
}

    private function setPasswordHash($password) {
        $this->passwordHash = password_hash($password, PASSWORD_BCRYPT);
    }

    public static function signup($name, $email, $password, $role) {
        $db = Database::getInstance()->getConnection();
        try {
            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Invalid email format.');
            }

            // Check if email already exists
            $stmt = $db->prepare('SELECT id FROM users WHERE email = ?');
            $stmt->execute([$email]);
            if ($stmt->fetchColumn()) {
                throw new Exception('Email already registered.');
            }

            // Fetch role ID based on role name
            $stmt = $db->prepare('SELECT id FROM roles WHERE name = ?');
            $stmt->execute([$role]);
            $roleId = $stmt->fetchColumn();

            if (!$roleId) {
                throw new Exception('Invalid role selected.');
            }

            $user = new User(null, $name, $email, $roleId);
            $user->setPasswordHash($password);
            
            if ($user->save()) {
                throw new Exception('Failed to save user to database.');
            }

            return true;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

 
}



    




?>