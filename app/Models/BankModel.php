<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class BankModel extends Model {
	
	protected $db;
	
	public function __construct(ConnectionInterface &$db) {
		$this->db =& $db;
	}

	function add($data) {
		return $this->db
        ->table('bank_details')
        ->insert($data);
	}
	
	public function auth_check($email)
	{
		$queryBank = $this->db->table('bank_details')->where('email', $email)->get();
		return $queryBank->getResultArray();
	}
    
    public function get_all_data($id)
    {
       $query = $this->db->query('SELECT * FROM bank_details WHERE `userid` = '.$id.' AND status != 2');
       return $query->getResultArray();
    }

	public function get_single_data($bankid)
   	{
		$querySingle = $this->db->query('SELECT * FROM bank_details WHERE `id` = "'.$bankid.'" AND status != 2');
       return $querySingle->getResultArray();
   	}

	//Update Bank Details
	public function update_data($id, $data = array())
	{
	   $this->db->table('bank_details')->update($data, array(
		   "id" => $id,
	   ));
	   return $this->db->affectedRows();
	}
}