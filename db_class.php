class db
{
    public $servername;
    public $username; 
    public $password;
    public $dbname;
    public $tablename;
    public $con;


    // constructor class
    public function __construct(
        $dbname = "test",
        $tablename = "sign",
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
        $this->con = mysqli_connect($servername, $username, $password , $dbname);
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
            (code_user INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(25) NOT NULL,
            ville VARCHAR(25) ,
            adresse VARCHAR(100),
            email VARCHAR(200)   ) ; ";
            if (!mysqli_query($this->con, $sql)) 
            {
                echo "Error creating table: " . mysqli_error($this->con);
            }
        }

    }
   




}