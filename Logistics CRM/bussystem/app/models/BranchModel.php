<?php
    class BranchModel extends Database{
        public $id;
        public $companyId;
        public $name;
        public $address;
        public $timestamp;

        public function new(){
            $this->query("INSERT INTO branch(company_id, name, address) VALUES 
                (:companyid, :name, :address)");
            
            $this->bind(":companyid", $this->companyId);
            $this->bind(":name", $this->name);
            $this->bind(":address", $this->address);

            return $this->execute();
        }

        public function update(){
            $this->query("UPDATE branch SET name = :name, address = :address WHERE id = :id");

            $this->bind(":name", $this->name);
            $this->bind(":address", $this->address);
            $this->bind(":id", $this->id);

            return $this->execute();
        }

        public function SelectById(){
            $this->query("SELECT branch.*, company.company_assigned_id as companyassign FROM branch LEFT JOIN company ON company.id = branch.company_id WHERE branch.id = :id");

            $this->bind(":id", $this->id);
            return $this->single();
        }

        public function SelectAll(){
            $this->query("SELECT branch.*, company.company_assigned_id as companyassignid FROM `branch` JOIN `company` ON branch.company_id = company.id");

            return $this->resultSet();
        }

        public function SelectAllByCompanyId(){
            $this->query("SELECT branch.*, company.company_assigned_id as companyassignid FROM `branch` JOIN `company` ON branch.company_id = company.id WHERE branch.company_id = :companyid");

            $this->bind(":companyid", $this->companyId);
            return $this->resultSet();
        }

        public function SelectByAddress(){
            $this->query("SELECT * FROM `branch` where lower(address) = :addr");

            $this->bind(":addr", strtolower($this->address));
            return $this->single();
        }

        public function DeleteById(){
            $this->query("DELETE FROM `branch` WHERE id = :id");

            $this->bind(":id", $this->id);
            return $this->execute();
        }
    }
?>