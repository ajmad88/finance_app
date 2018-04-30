<?php
class CRUD
{
  private $Db;
  function __construct($DB_CON)
  {
    $this->Db = $DB_CON;
  }
  public function checkCredentials($username, $password)
  {
    $user = $this->getUserByUsername($username);
    //calls function below to check for matching username
    if(!$user)
    {
      //No matching username in dbase
      return false;
    }
    if(!password_verify($password, $user['password']))
    {
      //password does not match
      return false;
    }
    if(password_needs_rehash($user['password'], PASSWORD_DEFAULT))
    {
      //this password was hashed with old hashing algorithm.
      $this->updatePassword($user['id'], $password);
      //send password to be updated below
    }
    //password is no longer needed and is unset from user data.
    unset($user['password']);
    return $user;
  }
  //Funcition to check username in database
  public function getUserByUsername($username)
  {
    $sth = $this->Db->prepare("SELECT * FROM users WHERE username LIKE :username");
    $sth->bindValue(":username", $username);
    $sth->execute();
    return $sth->fetch(PDO::FETCH_ASSOC);
  }
  //Function to update password if old hash
  public function updatePassword($id, $password)
  {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sth = $this->Db->prepare("UPDATE users SET password = :password WHERE user_id - :id");
    $sth->bindValue(":passowrd", $hash);
    $sth->bindValue(":id", id, PDO::PARAM_INT);
    return $sth;
  }
  //function to create new user
  public function createUser($role, $username, $email, $fname, $lname, $password)
  {
    try
    {
      $hashpass = password_hash($password, PASSWORD_DEFAULT);
      $statement = $this->Db->prepare("INSERT INTO users(user_role, username, email, fname, lname, password) VALUES (:role, :uname, :email, :fname, :lname, :pass)");
      $statement->bindparam(":role", $role);
      $statement->bindparam(":uname", $username);
      $statement->bindparam(":email", $email);
      $statement->bindparam(":fname", $fname);
      $statement->bindparam(":lname", $lname);
      $statement->bindparam(":pass", $hashpass);
      $statement->execute();
      return true;
    }
    catch(PDOException $ex)
    {
      echo $ex->getMessage();
      return false;
    }
  }
}
?>
