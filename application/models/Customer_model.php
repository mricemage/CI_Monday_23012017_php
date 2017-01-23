<?php
Class Customer_model extends CI_model {
	public function getCustomers(){
		$this->db->select('*');
		$this->db->from('Customers');
		return $this->db->get()->result_array();
	}

	public function addCustomer($insert_data){
		
		$test = $this->db->insert('Customers', $insert_data);
		if ($this->db->affected_rows() > 0) //reseting data when inserting new rows
		return true;
		else return false;
	}

	public function deleteCustomer($chosen_id) {
		$this->db->where('id_customer', $chosen_id); //id_customer chính là ID của khách hàng trong MySQL Data.
		$this->Customer_model->deleteCustomer($chosen_id);
		
	}
	
	public function updateCustomer($update_data, $id_customers) {
		$this->db->where('id_customers', $id_customers);
		$this->db->update('Customers', $update_data);
	}
}
