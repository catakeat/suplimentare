<?php
class User {
   /*
    * deci in final am in sessiune
    *  $_SESSION['id'],$_SESSION['username'],$_SESSION['entitati']
    * unde entitati e un array asociativ : $this->entitati[$row['entitate_id']] = $row['nume'];
    * 
    */
    private $conn;
    public $entitati;
    public $id;
    public $username;
    public $areEntitati = false;

    //initializez cu conn  din class DbConnection
    public function __construct($db) {
        $this->conn = $db->conn;
    }

    public function login($username, $password) {
        $username = $this->conn->real_escape_string($username);
        $password = $this->conn->real_escape_string($password);

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $this->conn->query($query);

        if ($result->num_rows == 1) {
            $this->setSession($result); //asignez un id $_SESSION['id']= $row['id'] si username in sesiune
            $bool = $this->areEntitati($result);
            if ($bool) {                             // daca are vreo entitate pe care o vede inseamna ca e sef
                $this->getEntitati($this->id);
            }
            return true;
        } else {
            return false;
        }
        mysqli_free_result($result);
    }

    public function setSession($result) {
        session_start();
        while ($row = mysqli_fetch_assoc($result)) {
            $this->id = $row["id"];
            $this->username = $row['username'];
            
            $_SESSION['id'] = $row["id"];
            $_SESSION['username'] = $row['username'];
        }
    }

    public function areEntitati($result) {

        if ($result->num_rows > 0) {
            $_SESSION['areEntitati'] = true;
            return true;
        } else {
            $_SESSION['areEntitati'] = false;
            return false;
        }
    }

    public function getEntitati($id) {
        //folosim in pagina unde vedem entitatile
        $this->entitati = array();
        $query = "select * from access_entitati left join entitati on access_entitati.entitate_id=entitati.id where user_id='$id';";
        $result = $this->conn->query($query);

//apelez are entitati
    
        if ($result) {
            // Fetch each row from the result set and add it to the array
            while ($row = $result->fetch_assoc()) {
                //  !!!!!   a key value unde key este entitate_id , deci nu e o cheie oarecare   
                $this->entitati[$row['entitate_id']] = $row['nume'];
            }

            $_SESSION['entitati'] = $this->entitati;
            // Free the result set
            mysqli_free_result($result);
        }
    }


    public function isLoggedIn() {
        session_start();
        return isset($_SESSION['username']);
    }

    public function logout() {
        session_start();
        session_destroy();
    }
}

?>
