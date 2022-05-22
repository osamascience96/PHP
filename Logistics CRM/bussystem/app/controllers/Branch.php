<?php
    class Branch extends Controller{
        private $branchModel;
        private $companyModel;
        private $sessionHelper;

        public function __construct()
        {
            $this->branchModel = $this->model("BranchModel");
            $this->companyModel = $this->model("CompanyModel");
            $this->sessionHelper = new SessionHelper();
        }

        public function index(){

            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userContext = $this->sessionHelper->get_session_value('user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();
            
            if(!$is_sub_user || count(array_intersect(array(6, 4, 5, 14), $userroles)) > 0){
                $this->companyModel->userId = $userContext->id;
                $companies = $this->companyModel->SelectAllByUserId();

                $branhlist = array();

                foreach($companies as $company){
                    $this->branchModel->companyId = $company->id;
                    $list = $this->branchModel->SelectAllByCompanyId();

                    foreach($list as $item){
                        array_push($branhlist, $item);
                    }
                }

                $data = ['branchlist' => $branhlist];
                $this->view("Dashboard/Branch/index", $data);
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function add(){

            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(4, 5), $userroles)) > 0){
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    
                    $this->branchModel->id = $id;
                    $branch = $this->branchModel->SelectById();
    
                    $data = ['branch' => $branch, 'companyassign' => $branch->companyassign];
                    $this->view("Dashboard/Branch/add", $data);
                }else if(isset($_GET['companyid'])){
                    $companyId = $_GET['companyid'];
                    $assignedid = $_GET['companyassign'];
    
                    $data = ['companyid' => $companyId, 'companyassign' => $assignedid];
                    $this->view("Dashboard/Branch/add", $data);
                }else{
                    header("Location:" . URLROOT . "/Company?error=Please Select from the following Companies.");
                }
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function Save(){

            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(4, 5), $userroles)) > 0){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    
                    $name = $_POST['name'];
                    $address = $_POST['address'];

                    $this->branchModel->name = $name;
                    $this->branchModel->address = trim($address);

                    if(!isset($_POST['id'])){
                        $companyid = $_POST['companyid'];
                        $this->branchModel->companyId = $companyid;
                        $branch = $this->branchModel->SelectByAddress();

                        if(!$branch){
                            // add new branch
                            $this->branchModel->new();

                            header("Location:" . URLROOT . "/Branch");
                        }else{
                            header("Location:" . URLROOT . "/Branch?error=Branch Already Exists");
                        }
                    }else{
                        $id = $_POST['id'];

                        $this->branchModel->id = $id;

                        // update branch
                        $this->branchModel->update();

                        header("Location:" . URLROOT . "/Branch");
                    }
                }
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function del(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(14), $userroles)) > 0){
                $message = "";

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $this->branchModel->id = $id;

                    try {
                        
                        $this->branchModel->DeleteById();
                        header("Location: " . URLROOT . "/Branch");

                    } catch (Exception $e) {
                        $message = "Cannot delete the branch due to linked employees or shipments. Please Check any before delete the branch.";
                        header("Location: " . URLROOT . "/Branch" . "?error=" . $message);
                    }
                }else{
                    $message = "Please Provide id to delete the branch";
                    header("Location: " . URLROOT . "/Branch" . "?error=" . $message);
                }
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        // Functions for EndPoints
        public function GetAllCompanyBranches(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $companyId = $_POST['companyId'];

                $this->branchModel->companyId = $companyId;

                $branches = $this->branchModel->SelectAllByCompanyId();

                echo json_encode($branches);
            }
        }
    }
?>