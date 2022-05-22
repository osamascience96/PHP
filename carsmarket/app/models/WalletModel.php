<?php
    class WalletModel extends Database{
        // function to buy any car 
        public function buycar($carid){
            
        }

        public function GetCarwithUserData($carid){
            $this->query("SELECT cars.id as carid, cars.car_model as carmodel, cars.photo as carphoto, cars.price as carprice, users.id as sellerid, users.name as sellername FROM cars JOIN users ON users.id = cars.seller_id WHERE cars.id = :carid");
            $this->bind(":carid", $carid);
            return $this->single();
        }

        // function to get all the sold cars of the user
        public function GetAllUsersSoldCars($userid){
            $this->query("SELECT * FROM cars WHERE seller_id = :userid");
            $this->bind(":userid", $userid);
            return $this->resultSet();
        }

        // function to get all the buyed cars of the user
        public function GetAllUsersBuyedCars($userid){
            $this->query("SELECT * FROM cars WHERE buyer_id = :userid");
            $this->bind(":userid", $userid);
            return $this->resultSet();
        }

        // function to set the price of the user
        public function SetUserWalletAmount($wallet_amount, $userid){
            $this->query("UPDATE users SET wallet_amount = :wallet_amount WHERE id = :userid");
            $this->bind(":wallet_amount", $wallet_amount);
            $this->bind(":userid", $userid);
            $this->execute();
        }

        public function updateselleramount($amount, $userid){
            $this->query("UPDATE users SET wallet_amount = wallet_amount + :amount WHERE id = :userid");
            $this->bind(":amount", $amount);
            $this->bind(":userid", $userid);
            $this->execute();
        }

        public function updatecarbuyer($carid, $userid){
            $this->query("UPDATE cars SET buyer_id = :userid WHERE id = :carid");
            $this->bind(":userid", $userid);
            $this->bind(":carid", $carid);
            $this->execute();
        }

        public function InsertCar($sellerid, $carmodel, $yom, $price, $image, $details){
            $this->query("INSERT INTO cars(seller_id, car_model, year_of_manufacturer, details, photo, price) VALUES (:sellerid, :model, :yom, :details, :photo, :price)");
            $this->bind(":sellerid", $sellerid);
            $this->bind(":model", $carmodel);
            $this->bind(":yom", $yom);
            $this->bind(":details", $details);
            $this->bind(":photo", $image);
            $this->bind(":price", $price);
            
            if($this->execute()){
                return true;
            }

            return false;
        }
    }
?>