<?php
namespace Daw\models;
use mysqli;

class Db
{
  private $host="localhost";
  private $user="root";
  private $pass="root";
  private $name="juegosdb";
  public $conexion;
  public $error=false;

  function __construct()
  {
    $mysqli =  new mysqli("localhost", "root", "", "juegosdb");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
        $mysqli->connect_error;
    }else {
        echo "Conexion realizada";
        $this->conexion=$mysqli;
        echo "<br>";
    }
  }

    // GETTERS Y SETTERS
    
    public function getHost()
    {
        return $this->host;
    }

    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }


    public function getPass()
    {
        return $this->pass;
    }


    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setDbName($name)
    {
        $this->db_name = $name;

        return $this;
    }

    public function getConexion()
    {
        return $this->conexion;
    }

    public function setConexion($conexion)
    {
        $this->conexion = $conexion;

        return $this;
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }
  }
 ?>
