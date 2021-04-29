<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;

class Dashboard extends Controller
{
    public function index()
    {
        
        $session = session();
        /*$model = new UserModel();
        $data = $model->where('email', $session->get('email'))->first();        
        if ($data['tipo'] == 1) {
            echo "Bem vindo  ".$data['est_nome'];
        }
        else {
            echo "Bem vindo  ".$data['empresa_nome'];
         }
        echo '<br><br><a href="/login/logout">Sair</a>';
       
        if ($session->get('tipo') == 1) {
            echo "Bem vindo  ".$session->get('est_nome');
        }
        else {
            echo "Bem vindo  ".$session->get('empresa_nome');
         }
        echo '<br><br><a href="/login/logout">Sair</a>'; */
        echo view('dashboard');
    }
}