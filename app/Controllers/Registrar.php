<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Registrar extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('registrar', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        if ($this->request->getVar('tipo')==1) {
        $rules = [
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[usuarios.email]',
            'est_nome'      => 'required|min_length[6]|max_length[120]',            
            'est_curso'      => 'required|min_length[6]|max_length[120]',            
            'est_ano'      => 'required|min_length[4]|max_length[4]',                
            'est_curriculo'      => 'required|min_length[4]|max_length[5000]',            
            'senha'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[senha]'
        ];
    } else {
        $rules = [
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[usuarios.email]',
            'empresa_nome'      => 'required|min_length[6]|max_length[120]',            
            'empresa_endereco'      => 'required|min_length[6]|max_length[360]',            
            'empresa_contato'      => 'required|min_length[4]|max_length[120]',                
            'empresa_descricao'      => 'required|min_length[4]|max_length[5000]',            
            'senha'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[senha]'
        ];        
    }
        if($this->validate($rules)){
            $model = new UserModel();
            if ($this->request->getVar('tipo')==1) {
            $data = [
                'email'    => $this->request->getVar('email'),
                //'senha' => password_hash($this->request->getVar('senha'), PASSWORD_DEFAULT)
                'est_nome'      => $this->request->getVar('est_nome'),            
                'est_curso'      => $this->request->getVar('est_curso'),           
                'est_ano'      => $this->request->getVar('est_ano'),                
                'est_curriculo'      =>  $this->request->getVar('est_curriculo'),                
                'tipo'      =>  $this->request->getVar('tipo'),                          
                'senha' => md5($this->request->getVar('senha'))
            ];
        } else {
            $data = [
                'email'    => $this->request->getVar('email'),
                //'senha' => password_hash($this->request->getVar('senha'), PASSWORD_DEFAULT)
                'empresa_nome'      => $this->request->getVar('empresa_nome'),            
                'empresa_endereco'      => $this->request->getVar('empresa_endereco'),           
                'empresa_contato'      => $this->request->getVar('empresa_contato'),                
                'empresa_descricao'      =>  $this->request->getVar('empresa_descricao'),                
                'tipo'      =>  $this->request->getVar('tipo'),                          
                'senha' => md5($this->request->getVar('senha'))
            ];            
        }
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('registrar', $data);
        }
         
    }
 
}