<?php  
   class select extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('product');  
         return $query;  
      } 
	  public function getColourSize($colour,$size)
	  {
		 $col = array();
		 $siz = array();
		 foreach($colour as $c) 
		 {
			if (!is_null($c))
				array_push($col,$c);
		 }
		 foreach($size as $s)
		 {
			if (!is_null($s))
				array_push($siz,$s);
		 }
		 $this->db->where_in('product.colour',$col);
		 $this->db->where_in('product.size',$siz);
		  
		 $query=$this->db->get('product');
		 return $query->result();
	  }
	  
	  public function getColour($colour) 
	  {
		  $col = array();
		 foreach($colour as $c) 
		 {
			if (!is_null($c))
				array_push($col,$c);
		 }
		 $this->db->where_in('product.colour',$col);
		 $query=$this->db->get('product');
		 return $query->result();
	  }
	  public function getSize($size) 
	  {
		  $siz = array();
		 foreach($size as $s) 
		 {
			if (!is_null($s))
				array_push($siz,$s);
		 }
		 $this->db->where_in('product.size',$size);
		 $query=$this->db->get('product');
		 return $query->result();
	  }
	  public function getAll() 
	  {
         $query = $this->db->get('product');  
		 return $query->result();
	  }
   }  
?>  