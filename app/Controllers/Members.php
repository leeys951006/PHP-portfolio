<?php

namespace App\Controllers;

use App\Models\MembersModel; 
use CodeIgniter\Controller;

class Members extends Controller
{
    public function register()
    {
        return view('members/register'); 
    }

    public function processRegister()
    {
        $validation = \Config\Services::validation();

       
        $validation->setRules([
            'mb_email'    => 'required|valid_email|is_unique[members.mb_email]',
            'mb_password' => 'required|min_length[6]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // 사용자 데이터 저장
        $membersModel = new MembersModel();
        $membersModel->save([
            'mb_email'    => $this->request->getPost('mb_email'),
            'mb_password' => password_hash($this->request->getPost('mb_password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/login')->with('success', '회원가입이 완료되었습니다.');
    }
}
