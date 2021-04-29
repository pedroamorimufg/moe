<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('senha');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['senha'];
            
            if($pass == md5($password)){
                $ses_data = [
                    'id'       => $data['id'],
                    'email'    => $data['email'],
                    'tipo'      => $data['tipo'],
                    'est_nome'      => $data['est_nome'],
                    'est_curso'      => $data['est_curso'],
                    'est_ano'      => $data['est_ano'],
                    'est_curriculo'      => $data['est_curriculo'],
                    'empresa_nome'      => $data['empresa_nome'],
                    'empresa_endereco'      => $data['empresa_endereco'],
                    'empresa_contato'      => $data['empresa_contato'],
                    'empresa_descricao'      => $data['empresa_descricao'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Senha inválida');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'E-mail nao encontrado');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 