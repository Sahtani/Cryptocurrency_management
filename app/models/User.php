<?php

class User
{

    private $db;

<<<<<<< HEAD
    public function __construct()
    {
        $this->db = new Database;
=======
public function __construct(){
    $this->db = new Database;

}

public function displayCoin()
{
    $this->db->query("SELECT * FROM cryptomonnaies");
    $row = $this->db->resultSet();
    return $row;
}

public function displaywatchlist(){
    $this->db->query("SELECT * FROM cryptomonnaies");
    $row = $this->db->resultSet();
    return $row;
}


public function register($data){
    $this->db->query('INSERT INTO users (Prenom, Nom, Email, MotDePasse, DateDeNaissance ) VALUES(:prenom, :nom, :email, :password, :date )');
    // Bind values
    $this->db->bind(':prenom', $data['prenom']);
    $this->db->bind(':nom', $data['nom']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':date', $data['date']);

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
>>>>>>> 659e9ba46788e273e1bb1f8c9d7678ab50f2e067
    }

    public function displayCoin()
    {
        $this->db->query("SELECT * FROM coins");
        $row = $this->db->resultSet();
        return $row;
    }

    public function displaywatchlist()
    {
        $this->db->query("SELECT * FROM cryptomonnaies");
        $row = $this->db->resultSet();
        return $row;
    }


    public function register($data)
    {
        $this->db->query('INSERT INTO users (Prenom, Nom, Email, MotDePasse, DateDeNaissance ) VALUES(:prenom, :nom, :email, :password, :date )');
        // Bind values
        $this->db->bind(':prenom', $data['prenom']);
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':date', $data['date']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE Email = :email ');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        $hashed_password = $row->MotDePasse;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    public function checkEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE Email = :email ');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
