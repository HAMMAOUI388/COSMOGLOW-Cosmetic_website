<?php
class creatdb
{
    public $servername;
    public $username; 
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    public function getData()
    {
        $sql = "SELECT * FROM product";
        $resul = mysqli_query($this->con,$sql);
        if(mysqli_fetch_assoc($resul)>0)
        {
            return $resul;
        }
    }
    public function getdatab()
    {
        $sql = "SELECT * FROM $this->tablename Limit 19";
        $resul = mysqli_query($this->con,$sql);
        if(mysqli_fetch_assoc($resul)>0)
        {
            return $resul;
        }
    }

    // constructor class
    public function __construct(
        $dbname = "Newdb",
        $tablename = "Panier1",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->tablename = $tablename; 

      


        // create connection
        $this->con = mysqli_connect($servername, $username, $password);
        // check connection
        if (!$this->con) 
        {
            die("Connection failed:".mysqli_connect_error());
        }
        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        // execute the query
        if (mysqli_query($this->con, $sql)) 
        {
            $this->con = mysqli_connect($servername, $username, $password, $dbname);
            // sql to create table
            $sql = "CREATE TABLE IF NOT EXISTS $tablename
            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            nam VARCHAR(25) NOT NULL,
            price DECIMAL(10,0),
            imag VARCHAR(100),
            infoprod VARCHAR(200),
            ancienPrice DECIMAL(10,0),
            categorie varchar(100) ); ";
            if (!mysqli_query($this->con, $sql)) 
            {
                echo "Error creating table: " . mysqli_error($this->con);
            }
        }
        
  

    
    }
    
    
   
}


?>