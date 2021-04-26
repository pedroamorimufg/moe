<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'usuarios';
    protected $allowedFields = ['email','senha','tipo','est_nome','est_curso','est_ano','est_curriculo','empresa_nome','empresa_endereco','empresa_contato','empresa_descricao'];
}