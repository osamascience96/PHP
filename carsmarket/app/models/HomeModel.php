<?php
    class HomeModel extends Database{

        // call a function that would fetch all the cars on sale 
        public function GetAllCarsOnSale(){
            $this->query("SELECT * FROM `cars` WHERE buyer_id = 0");
            return $this->resultSet();
        }
    }
?>