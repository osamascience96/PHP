<?php
    class ProductModel extends Database{
        public function GetAllProducts(){
            $this->query("SELECT * FROM product");
            $response = $this->resultSet();
            return $response;
        }

        public function InsertCart($userid, $productid){
            $this->query("INSERT INTO orders (user_id, product_id) VALUES (:userid, :productId)");
            $this->bind(":userid", $userid);
            $this->bind(":productId", $productid);
            $this->execute();
        }

        public function GetUserCart($userid){
            $this->query("SELECT * FROM orders WHERE user_id = :user_id AND confirmed_status = 0");
            $this->bind(":user_id", $userid);
            return $this->resultSet();
        }

        public function GetAllCartOrders($userid){
            $this->query("SELECT * FROM product LEFT JOIN orders ON orders.product_id = product.id WHERE orders.user_id = :userid AND orders.confirmed_status = 0");
            $this->bind(":userid", $userid);
            return $this->resultSet();
        }

        public function CheckoutUserOrders($userid){
            $this->query("UPDATE orders SET confirmed_status = 1 WHERE user_id = :userid");
            $this->bind(":userid", $userid);
            $this->execute();
        }
    }
?>