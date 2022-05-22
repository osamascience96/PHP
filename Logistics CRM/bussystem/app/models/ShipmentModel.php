<?php
    class ShipmentModel extends Database{
        public $id;
        public $companyId;
        public $branchId;
        public $clientId;
        public $fromAddress;
        public $toAddress;
        public $pickUpDate;
        public $expectedDelieverDate;
        public $delieverDate;
        public $timestamp;


        public function new(){
            $this->query("INSERT INTO shipment(company_id, branch_id, client_id, from_address, to_address,
            pick_up_date, expected_deliever_date, deliever_date) VALUES (:companyId, :branchid, :clientId, 
            :fromAddress, :toAddress, :pickupdate, :expectedDelieverDate, :delieverDate)");
            
            $this->bind(":companyId", $this->companyId);
            $this->bind(":branchid", $this->branchId);
            $this->bind(":clientId", $this->clientId);
            $this->bind(":fromAddress", $this->fromAddress);
            $this->bind(":toAddress", $this->toAddress);
            $this->bind(":pickupdate", $this->pickUpDate);
            $this->bind(":expectedDelieverDate", $this->expectedDelieverDate);
            $this->bind(":delieverDate", $this->delieverDate);

            return $this->execute();
        }

        public function update(){
            $this->query("UPDATE shipment SET company_id = :companyId, branch_id = :branchid, 
                            client_id = :clientId, from_address = :fromAddress, to_address = :toAddress, 
                            pick_up_date = :pickupdate, expected_deliever_date = :expectedDelieverDate,
                            deliever_date = :delieverDate WHERE id = :id");
            
            $this->bind(":id", $this->id);
            $this->bind(":companyId", $this->companyId);
            $this->bind(":branchid", $this->branchId);
            $this->bind(":clientId", $this->clientId);
            $this->bind(":fromAddress", $this->fromAddress);
            $this->bind(":toAddress", $this->toAddress);
            $this->bind(":pickupdate", $this->pickUpDate);
            $this->bind(":expectedDelieverDate", $this->expectedDelieverDate);
            $this->bind(":delieverDate", $this->delieverDate);

            return $this->execute();
        }

        public function SelectById(){
            $this->query("SELECT shipment.*, client.id as clientId, users.first_name as client, 
                            company.id as companyId, company.company_assigned_id as Company, 
                            branch.name as Branch FROM shipment LEFT JOIN client 
                            ON client.id = shipment.client_id LEFT JOIN users 
                            ON users.id = client.user_id LEFT JOIN company 
                            ON company.id = shipment.company_id LEFT JOIN branch 
                            ON branch.id = shipment.branch_id WHERE shipment.id = :id");

            
            $this->bind(":id", $this->id);

            return $this->single();
        }

        public function SelectAllByClientId(){
            $this->query("SELECT shipment.*, users.first_name as client, company.company_assigned_id 
                            as Company, branch.name as Branch FROM shipment 
                            LEFT JOIN client ON client.id = shipment.client_id 
                            LEFT JOIN users ON users.id = client.user_id LEFT JOIN company 
                            ON company.id = shipment.company_id 
                            LEFT JOIN branch ON branch.id = shipment.branch_id 
                            WHERE shipment.client_id = :clientId");

            
            $this->bind(":clientId", $this->clientId);

            return $this->resultSet();
        }

        public function DeleteById(){
            $this->query("DELETE FROM `shipment` WHERE id = :id");

            $this->bind(":id", $this->id);
            return $this->execute();
        }
    }
?>