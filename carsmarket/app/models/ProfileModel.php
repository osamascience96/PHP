<?php
    class ProfileModel extends Database{
        // function for update to the type
        public function UpdateUserType($type, $id){
            $this->query("UPDATE users SET type = :type WHERE id = :id");
            // bind the variables
            $this->bind(":type", $type);
            $this->bind(":id", $id);

            if($this->execute()){
                return true;
            }

            return false;
        }

        // function that updates the wallet amount of the user
        public function UpdateWalletAmount($amount, $userid){
            $this->query("UPDATE users SET wallet_amount = wallet_amount + :amount WHERE id = :userid");
            $this->bind(":amount", $amount);
            $this->bind(":userid", $userid);
            
            if($this->execute()){
                return true;
            }

            return false;
        }
    }
?>