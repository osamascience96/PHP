<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $users = $this->userModel->findAll();
        
        $data = array();
        $data['users'] = $users;

        return view('list', $data);
    }

    public function create(){
        $response_array = [];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $input = $this->validate([
                'name' => 'required',
                'email' => 'required|valid_email'
            ]);

            if($input){
                // save user record
                $is_saved = $this->userModel->save([
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                ]);
                
                if($is_saved){
                    // return the view with success message
                    array_push($response_array, array('Success' => 'Data Saved Successfully'));
                }else{
                    array_push($response_array, array('Failed' => 'Data Save Procedure Failed'));
                }
            }else{
                // push the error response to the array
                array_push($response_array, array('validation' => $this->validate));
            }
        }

        return view('create', $response_array);
    }

    public function edit(){
        $response_array = array();
        $userid = $this->request->getVar('id');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $input = $this->validate([
                'name' => 'required',
                'email' => 'required|valid_email'
            ]);

            if($input){
                // save user record
                $is_saved = $this->userModel->update($id = $this->request->getVar('id'), 
                    [
                        'name' => $this->request->getVar('name'),
                        'email' => $this->request->getVar('email'),
                    ]
                );
                
                if($is_saved){
                    // return the view with success message
                    array_push($response_array, array('Success' => 'Data Saved Successfully'));
                }else{
                    array_push($response_array, array('Failed' => 'Data Save Procedure Failed'));
                }

                return redirect()->to('/edit?id='.$userid);
            }
        }else{
            $user = $this->userModel->find($userid);

            $data = array();
            $data['user'] = $user;
            return view('edit', $data);
        }
    }

    public function delete(){
        $userId = $this->request->getVar('id');

        $is_deleted = $this->userModel->delete($userId);

        return redirect()->to(base_url());
    }
}
