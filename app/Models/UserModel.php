<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class UserModel extends Model {
	
	protected $db;
	
	public function __construct(ConnectionInterface &$db) {
		$this->db =& $db;
	}

	function add($data) {
		return $this->db
        ->table('users')
        ->insert($data);
	}
	
	public function auth_check($email)
	{
		//$this->db = \Config\Database::connect();
		$queryService = $this->db->table('users')->where('email',$email)->get();
		return $queryService->getResultArray();
	}
	
}