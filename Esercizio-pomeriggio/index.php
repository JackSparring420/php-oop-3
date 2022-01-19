    <?php

        class Computer {

            private $id;
            private $model;
            private $price;
            private $brand;

            public function __construct($id, $price) {

                $this -> setId($id);
                $this -> setPrice($price);
            }
    
            public function getId() {

                return $this -> id;
            }
            public function setId($id) {

                if (strlen($id) != 6 || !is_numeric($id))
                    throw new Exception("La Id deve essere di 6 caratteri numerici");

                $this -> id = $id;
            }
            
            public function getModel() {
                
                return $this -> model;
            }
            public function setModel($model) {

                if (strlen($model) < 3 || strlen($model) > 20)
                    throw new Exception("Il modello deve contenere fra 3 e 20 caratteri");

                $this -> model = $model;
            }

            
            public function getPrice() {
                
                return $this -> price;
            }
            public function setPrice($price) {
                
                if ($price < 0 || $price > 2000)
                throw new Exception("Il prezzo deve essere comprefra in un valore tra 0 e 2000");
                
                $this -> price = $price;
            }
            
            public function getBrand() {

                return $this -> brand;
            }
            public function setBrand($brand) {

                $this -> brand = $brand;
            }

            public function printMe() {
                echo $this;
           }
       
           public function printFull() {
       
               $this -> printMe();
           }

            public function __toString() {
    
                return $this -> getBrand(). " " . $this -> getModel() . ": " . $this -> getId() . ": " . $this -> getPrice() . "$ [" . $this -> getID() . "]" ;
            }
            
        }


        try {

            $u1 = new Computer("123456", "1000");
            $u1 -> setBrand("Asus");
            $u1 -> setModel("tlls");

            $u1 -> printFull(). "<br>";
            
            // salvo $e1 in database
    
        } catch (Exception $e) {

            echo $e . "<br><h1>" . $e -> getMessage() . "</h1>";

        } finally {

            echo "<br>" . "esecuzione finale indipendente dagli errori";

        }
      

    ?>

