<?php
    class EmployeeModel extends Database{
        public $id;
        public $userId;
        public $companyId;
        public $branchId;
        public $joinDate;
        public $tenureEnd;
        public $timestamp;


        public function new(){
            $this->query("INSERT INTO employee(user_id, company_id, branch_id, join_date, tenure_end) VALUES 
                (:userId, :companyId, :branchId, :joinDate, :tenureEnd)");
            
            $this->bind(":userId", $this->userId);
            $this->bind(":companyId", $this->companyId);
            $this->bind(":branchId", $this->branchId);
            $this->bind(":joinDate", $this->joinDate);
            $this->bind(":tenureEnd", $this->tenureEnd);

            return $this->execute();
        }

        public function update(){
            $this->query("UPDATE `employee` SET user_id = :userId, company_id = :companyId, 
            branch_id = :branchId, join_date = :joinDate, tenure_end = :tenureEnd WHERE id = :id");

            $this->bind(":id", $this->id);
            $this->bind(":userId", $this->userId);
            $this->bind(":companyId", $this->companyId);
            $this->bind(":branchId", $this->branchId);
            $this->bind(":joinDate", $this->joinDate);
            $this->bind(":tenureEnd", $this->tenureEnd);

            return $this->execute();
        }

        public function SelectById(){
            $this->query("SELECT employee.*, users.id as UserId, users.first_name as FirstName, 
                            users.last_name as LastName, users.email as Email, users.password as Password, 
                            company.id as companyId, company.company_assigned_id as companyassign, 
                            company.name as companyname, branch.id as BranchId, branch.name as BranchName 
                            FROM `employee` LEFT JOIN users ON users.id = employee.user_id 
                            LEFT JOIN company ON company.id = employee.company_id 
                            LEFT JOIN branch ON branch.id = employee.branch_id 
                            WHERE employee.id = :id");
            
            $this->bind(":id", $this->id);
            return $this->single();
        }

        public function SelectByUserId(){
            $this->query("SELECT employee.*, users.id as UserId, users.first_name as FirstName, 
            users.last_name as LastName, users.email as Email, users.password as Password, 
            company.id as companyId, company.company_assigned_id as companyassign, 
            company.name as companyname, branch.id as BranchId, branch.name as BranchName 
            FROM `employee` LEFT JOIN users ON users.id = employee.user_id 
            LEFT JOIN company ON company.id = employee.company_id 
            LEFT JOIN branch ON branch.id = employee.branch_id 
            WHERE employee.user_id = :userId");

            $this->bind(":userId", $this->userId);
            return $this->single();
        }

        public function SelectAllByCompanyId(){
            $this->query("SELECT employee.*, users.first_name as FirstName, users.last_name as LastName, 
                            users.email as Email, company.name as CompanyName, 
                            company.company_assigned_id as CompanyId, branch.name as BranchName 
                            FROM employee LEFT JOIN users ON employee.user_id = users.id 
                            LEFT JOIN company ON employee.company_id = company.id 
                            LEFT JOIN branch ON employee.branch_id = branch.id 
                            WHERE employee.company_id = :companyId");

            $this->bind(":companyId", $this->companyId);
            return $this->resultSet();
        }

        public function DeleteById(){
            $this->query("DELETE FROM `employee` WHERE id = :id");

            $this->bind(":id", $this->id);
            return $this->execute();
        }
    }
?>