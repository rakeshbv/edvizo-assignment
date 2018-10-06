<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Merienda+One|Montserrat|PT+Sans|Sanchez" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js'></script>
		<script scr='https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js'></script>
        <link rel="stylesheet" type="text/css" href="css/base.css">
		<script src="js/home.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">NITK-MART</a>
                </div>

                <div class="collapse navbar-collapse" id="navBar">
                    <ul class="nav navbar-nav">
                        <li><a href="{% url 'complaint:all' %}"><span class="glyphicon glyphicon-king"></span>&nbsp; MEN</a></li>
                        <li><a href="{% url 'complaint:new' %}"><span class="glyphicon glyphicon-queen"></span>&nbsp; WOMEN</a></li>
                        <li><a href="{% url 'complaint:status' %}"><span class="glyphicon glyphicon-pawn"></span>&nbsp; CHILDREN</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                       <li><a href="{% url 'accounts:dashboard' %}"><span class="glyphicon glyphicon-user"></span>&nbsp; Profile</a></li>
                       <li><a href="{% url 'accounts:logout' %}"><span class="glyphicon glyphicon-off"></span>&nbsp; Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<div class="container-fluid">
			<div class="pageBody">
				  <div class="row">
						<div class="col-sm-3 col-md-3 col-xs-12">
						   <div class="panel choicepage" style="background-color: white;">
							  <div class="panel-body" style="color: black;">
	                              <b>refined by</b>
	                              <br>
	                              <span id="filters">no filters applaied</span>
			                      <br>
                                  <ul style='list-style-type: none;'>
			                         <br>
                                     <b>colour </b> 
		                             <li><input class='colour' type="checkbox" value='red' onclick="filter()">red</li>
                                     <li><input class='colour' type="checkbox" value='blue' onclick="filter()">blue</li>
                                     <li><input class='colour' type="checkbox" value='white' onclick="filter()">white</li>
			                         <li><input class='colour' type="checkbox" value='black' onclick="filter()">black</li>
			                         <li><input class='colour' type="checkbox" value='green' onclick="filter()">green</li>
                                     <br>
                                     <b>size</b>
                                     <li><input class='size' type="checkbox" value='xl' onclick="filter()">extra-large</li>
                                     <li><input class='size' type="checkbox" value='l' onclick="filter()">large</li>
                                     <li><input class='size' type="checkbox" value='m' onclick="filter()">medium</li>
				                     <li><input class='size' type="checkbox" value='s' onclick="filter()">small</li>
				                     <li><input class='size' type="checkbox" value='xs' onclick="filter()">extra-small</li>
                                   </ul>
			                       <b style="text-padding-left:200px;">price</b><hr>
			                       <input type="text" maxlength="9" id="low-price" placeholder="Min" name="low-price"  aria-label="Min" style="width:65px;">
			                       <input type="text" maxlength="9" id="high-price" placeholder="Max" name="high-price" aria-label="Max" style="width:65px;">
			                       <input class="a-button-input" type="submit" value="update" aria-labelledby="a-autoid-13-announce">
							   </div>
	                        </div>
					   </div>
					   <div class="items">
					     <?php  
						 foreach ($h->result() as $row)  
						 {  
							?>
							<div class="col-sm-3 col-md-3 col-xs-12">
							   <a href="">
						          <div class="panel homePage" style="background-color: white;">
								      <div class="panel-body" style="color: black;">
								            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode(  $row->photo ).'" class="image" alt="image" width="150px" height="175px"/>';?>
									        <br>
									        <h1 style="color: black;"><?php echo $row->name;?></h1>
									       <div style='text-align:left;'>
									          <b class="homeBig" style="color: black;">RS:<?php echo $row->price;?></b><br>	
									          <b class="homeBig" style="color: black;"><?php echo $row->material;?></b><br>
									          <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span>
									       </div>  
								       </div>
							       </div>
							   </a>
					        </div>
						
					        <?php
						      }
						    ?>
						 </div>
				   </div>
		   </div>
	   </div>
</body>
</html>
