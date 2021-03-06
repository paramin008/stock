<?php 

class Tb_test extends CI_Model {

    private $table = 'tb_test';

    public function __construct()
    {
        $this->load->database();
    }


    public function get_items() 
    {
        $this->db->order_by('updated', 'desc');
        return $this->db->get($this->table)->result();
    }

    public function getOrdersData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM tb_test WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM tb_test ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}



    public function get_item_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function create_item($value)
    {
        $this->db->set('created', 'now()', false);
        $this->db->set('updated', 'now()', false);
        $this->db->insert($this->table, $value);
    }

    public function update_item($id, $value)
    {
        $this->db->set('updated', 'now()', false);
        $this->db->update($this->table, $value, ['id' => $id]);
        
    }

    public function delete_item($id)
    {
        $this->db->delete($this->table, ['id' => $id]);
    }
}