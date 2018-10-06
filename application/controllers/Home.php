<?php  
   class Home extends CI_Controller  
   {  
      public function index()  
      {  
         //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['h']=$this->select->select();  
         //return the data in view  
         $this->load->view('home', $data);  
      }  
	  public function filter()
	  {
		 $colour=$this->input->post('colour');
		 $size=$this->input->post('size');
		 $this->load->model('select');
		 if (!empty($colour) and !empty($size)) 
		  {
			$h=$this->select->getColourSize($colour,$size);
		  }
		 else if ((!empty($colour)) and empty($size)) 
		  {
			$h=$this->select->getColour($colour);
		  }
		 else if ((empty($colour)) and !empty($size))			
		  {
			$h=$this->select->getSize($size);
		  }
		 else 
		  {
			$h=$this->select->getAll(); 
		  }
		 $output="";
		 $output.='<div class="items">';
		 foreach ($h as $row) 
		  {
			$output.='<div class="col-sm-3 col-md-3 col-xs-12">
							<a href="">
						        <div class="panel homePage" style="background-color: white;">
								   <div class="panel-body" style="color: black;">';
								     $output.='<img src="data:image/jpeg;base64,'.base64_encode($row->photo).'" class="image" alt="image" width="150px" height="175px"/>';
									 $output.=' <br>
									  <h1 style="color: black;">'.$row->name.'</h1>'
									  .'<div style="text-align:left;">
									     <b class="homeBig" style="color: black;">RS:'.$row->price.'</b><br>	
									     <b class="homeBig" style="color: black;">'.$row->material.'</b><br>
									     <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span>
									  </div>  
								   </div>
							   </div>
							</a>
					    </div>
						</div>';
		  }
	   echo $output;
      }
   }   