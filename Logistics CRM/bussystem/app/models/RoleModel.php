<?php
    class RoleModel extends Database{
        public $id;
        public $userId;
        public $roleid;
        public $isActive;
        public $timestamp;

        public function SelectAllDefinedRoles(){
            $this->query("SELECT * FROM `roles`");
            return $this->resultSet();
        }

        public function new(){
            $this->query("INSERT INTO `user_roles`(user_id, role_id, is_active) VALUES (:userId, :roleId, :isActive)");

            $this->bind(":userId", $this->userId);
            $this->bind(":roleId", $this->roleid);
            $this->bind(":isActive", 1);

            return $this->execute();
        }

        public function update(){
            $this->query("UPDATE `user_roles` SET is_active = :isActive WHERE id = :id");

            $this->bind(":isActive", $this->isActive);
            $this->bind(":id", $this->id);

            return $this->execute();
        }

        public function SelectByUserRoleId(){
            $this->query("SELECt * FROM `user_roles` WHERE user_id = :userId AND role_id = :roleId");

            $this->bind(":userId", $this->userId);
            $this->bind(":roleId", $this->roleid);
            return $this->single();
        }

        public function SelectByUserId(){
            $this->query("SELECt * FROM `user_roles` WHERE user_id = :userId");

            $this->bind(":userId", $this->userId);
            return $this->resultSet();
        }

        public function SelectActiveByUserId(){
            $this->query("SELECt * FROM `user_roles` WHERE user_id = :userId AND is_active = 1");

            $this->bind(":userId", $this->userId);
            return $this->resultSet();
        }
    }
?>