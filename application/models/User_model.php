<?php 

class User_model extends CI_model{
	function create($formArray){
		$this->db->insert('student',$formArray);
		//insert operation of sql
	}

	function show(){
		return $user=$this->db->get('student')->result_array();
		// select * from student
	}

	function getUser($id){
		$this->db->where('id',$id);
		return $get=$this->db->get('student')->row_array();
		//select * from student where id=$id
	}

	function update($id,$formArray){
		$this->db->where('id',$id);
		$this->db->update('student',$formArray);
		// update student set name=?, ....
		//  where id=$id
	}

	function deleteUser($id){
		$this->db->where('id',$id);
		$this->db->delete('student');
		// delete from student where id=$id
	}
}

?>