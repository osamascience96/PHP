<?php

use function PHPSTORM_META\type;

    class CompanyModel extends Database{
        public $id;
        public $userId;
        public $name;
        public $address;
        public $companyassignedid;
        public $timestamp;

        public function new(){
            $this->query("INSERT INTO company(user_id, name, address, company_assigned_id) VALUES 
                (:userid, :name, :address, :companyassignedid)");
            
            $this->bind(":userid", $this->userId);
            $this->bind(":name", $this->name);
            $this->bind(":address", $this->address);
            $this->bind(":companyassignedid", $this->companyassignedid);

            return $this->execute();
        }

        public function update(){
            $this->query("UPDATE `company` SET name = :name, address = :address, company_assigned_id = :companyassignedid WHERE id = :id");

            $this->bind(":id", $this->id);
            $this->bind(":name", $this->name);
            $this->bind(":address", $this->address);
            $this->bind(":companyassignedid", $this->companyassignedid);

            return $this->execute();
        }

        public function SelectById(){
            $this->query("SELECT * FROM company WHERE id = :id");

            $this->bind(":id", $this->id);
            return $this->single();
        }

        public function SelectAllByUserId(){
            $this->query("SELECT * FROM company WHERE user_id = :userid");

            $this->bind(":userid", $this->userId);
            return $this->resultSet();
        }

        public function SelectByCompanyAssignedId(){
            $this->query("SELECT * FROM company WHERE company_assigned_id = :companyassignedid");

            $this->bind(":companyassignedid", $this->companyassignedid);
            return $this->single();
        }

        public function DeleteCompanyById(){
            $this->query("DELETE FROM `company` WHERE company.id = :id");

            $this->bind(":id", $this->id);
            return $this->execute();
        }
    }
?>