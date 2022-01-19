    <?php

        class User {

            private $username;
            private $password;
            private $age;

            public function __construct($username, $password) {

                $this -> setUsername($username);
                $this -> setPassword($password);
            }
    
            public function getUsername() {

                return $this -> username;
            }
            public function setUsername($username) {

                if (strlen($username) < 3 || strlen($username) > 16)
                    throw new Exception("La Username deve essere compresa fra 3 e 16 caratteri");

                $this -> username = $username;
            }

            public function getPassword() {
                
                return $this -> password;
            }

            public function setPassword($password) {

                if (ctype_alnum($password))
                    throw new Exception("La password deve contenere un carattere speciale");

                $this -> password = $password;
            }

            public function getAge() {

                return $this -> age;
            }
            public function setAge($age) {

                if (!is_numeric($age))
                    throw new Exception("L'eta' deve essere un valore numerico");

                $this -> age = $age;
            }


            public function printMe() {
                echo $this;
           }
       
           public function printFull() {
       
               $this -> printMe();
           }

            public function __toString() {
    
                return $this -> getUsername() . ": " . $this -> getAge(). " [" . $this -> getPassword() . "]" ;
            }
            
        }


        try {

            $u1 = new User("Emanuele", "password.");
            $u1 -> setAge(25);
            echo $u1 . "<br>";
            $u1 -> printFull(). "<br>";
            
            // salvo $e1 in database
    
        } catch (Exception $e) {

            echo $e . "<br><h1>" . $e -> getMessage() . "</h1>";

        } finally {

            echo "<br>" . "esecuzione finale indipendente dagli errori";

        }

        // $pws = "hello_mondo";
        // $pwsArr = str_split($pws);

        // for ($x=0;$x<count($pwsArr);$x++) {
        //     $pwsChar = $pwsArr[$x];
        //     echo $pwsChar . "<br>";
        // }
        

        ?>

