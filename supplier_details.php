<?php 
	require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Food Universe</title>
	
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  <link rel="stylesheet" type="text/css"  href="form.css"/>
  
  
  <style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 15%;
    background-color: rgba(86,79,79,1.00);
    position: fixed;
    height: 100%;
    overflow: auto;
	margin-top: -21px;
}

li a {
    display: block;
    color: #F8F2F2;
    padding: 8px 16px;
    text-decoration: none;
	text-decoration-line: none

	
}



li a:hover:not(.active) {
    background-color: #D35254;
    color: white;
	 text-decoration: none;
	text-decoration-line: none
}
	  
	  
	  .container{
		  
		  float: right;
		  margin-top:-18px;
		  margin-left: 5px;
		  margin-right: -4px;
		  font-size: 35px;
		  
	  }
	  
	  
	  /*  Drop Down Button*/
	  
	  
	  .dropbtn {
		  
		  
  
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 11px 14px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}



	  
/*Search bar code*/
	  
	  #search {
    float: right;
    margin-top: 30px;
    width: 250px;
}

.search {
    padding: 5px 0;
    width: 250px;
    height: 60px;
    position: relative;
    left: 10px;
    float: left;
    line-height: 22px;
}

    

        .search:hover input, .search input:focus {
            width: 200px;
            margin-left: 0px;
        }

.btn {
    height: 30px;
    position: absolute;
    right: 0;
    top: 5px;
    border-radius:1px;
}

	  
	 /*form-----------------*/ 
	  
	  
.red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
	padding: 10px 40px 60px;
	margin: 20px 0px 60px;
	border: 1px solid GREY;
	}
	  
	 
</style>
 
 
 <script>
	
	$(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});

	
	</script>
  
	
</head>
<body>

	<nav class="navbar navbar-default" style="width: 1350px;">
  <div class="container-fluid" style="background-color: rgba(94,66,66,1.00); width: 1350px;margin-left: -2px;margin-top: 1px;">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: rgba(241,230,231,1.00);font-size: 40px;">Food Universe <img src="icons/letter-f2.png"></a>
     
       <div class="dropdown" style="margin-left: 1240px; margin-top: -200px;"><img src="icons/if_Snapchat_UI-11_2310087 (2).png" style="margin-bottom: -50px;">
  <button class="dropbtn"></button>
  <div class="dropdown-content">
  
  
  
   
    
    <form action="dashboard.php" method="post">
    		<input type="submit" name="sub" value="logout" style="width: 100px;background-image: url(icons/on-off2.png);background-repeat: no-repeat;"/>
    		
    	
    	
    </form>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    

   
   	 <?php
	 
	  	if(isset($_POST['sub'])){

			session_start();
			session_unset();
			session_destroy();
			header("Location:Login.php");
			exit();

		}
	  

?>
    
 
    
   
   
    
  </div>
</div>

       
       
       
      
    </div>
   
  </div>
</nav>

<div>
	
<ul>
   <li style="background-color:rgba(73,140,91,1.00);"><a href="dashboard.php">Dashboard &nbsp;  &nbsp; &nbsp;&nbsp;  <img src="icons/if_dashboard_blue_68713.ico"></a></li>
  
  <li><a href="addnewcustomer.php">Customers&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/business_user.png"></a></li>
  
   <li><a href="add_new_item.php">Items&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <img src="icons/shopping_cart.png"></a></li>
  
  
  <li><a href="">Price Rules&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp; <img src="icons/dollar_currency_sign.png"></a></li>
  
  <li><a href="add_new_supplier.php">Suppliers&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="icons/icons8-Shipped-32.png"></a></li>
  
  <li><a href="reports.php">Reports&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img src="icons/chart.png"></a></li>
  
  <li><a href="sales_history.php">Sales History&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp;  <img src="icons/sale.png"></a></li>
  
   
  <li><a href="add_new_employee.php">Employees&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img src="icons/users.png"></a></li>
  
  <li><a href="">Discounts&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="icons/tag.png"></a></li>
  
  <li><a href="">Store&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img
    src="icons/home.png"></a></li>
</ul>
	
	
</div>


<div class="container" >
 
  <div class="panel panel-default" style="margin-left: 6px;">
    <div class="panel-heading">Supplier Details</div>
    <div class="panel-body" style="height: 630px;">
    	
    	
    	
    				<div class="container">
<div class="col-md-5" style="margin-left: 300px;border-color: aliceblue;">
    <div class="form-area" >  
        <form action="" method="post">
        <br style="clear:both">
                   
                   
                   <?php
		
							$name="";
							$email="";
							$mobile="";
							$val=NULL;
							$sid="";
							
							
							
							
						if(isset($_POST['search'])){
							
							
							
							
							
								
							$val=$_POST['val'];
								
								
							
								
		
							$query="select supplier_id, company_name,email,phone_number from add_new_supplier where company_name='$val'";
							$q=mysql_query($query);
		
							while($row=mysql_fetch_array($q)){
								
							$name=$row['company_name'];
							$email=$row['email'];
							$mobile=$row['phone_number'];
							$sid=$row['supplier_id'];
								
								
								
							}
								
						}else{
							$name="";
							$email="";
							$mobile="";
							$val=NULL;
							$sid="";
							
						}
                   ?>
                   
                   
                    
                   <div class="form-group">
					<label style="font-size: 15px;">Supplier ID<input type="text" class="form-control" id="sid" value="<?php echo $sid; ?>" name="sid"></label>
					</div>	
                    
    				<div class="form-group">
						<label style="font-size: 15px;">Company Name<input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>"></label>
					</div>
					<div class="form-group">
					<label style="font-size: 15px;">Email<input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" style="width: 190px;"></label>
					</div>
					<div class="form-group">
					<label style="font-size: 15px;">Mobile<input type="text" class="form-control" id="mobile" value="<?php echo $mobile; ?>" name="mobile"></label>
					</div>
         					
          			
          			
          			<div style="font-size: 20px;">
          			
          					
          			<input type="text" name="val" placeholder="Enter Compnay Name" style="font-size: 15px;height: 35px;border-radius: 4px;color: red;border: solid;border-color: tomato;width: 210px;"/><br/><br/>
          			
          			
          				<button style="border-radius: 5px;"><img src="icons/search.png"><input type="submit" name="search" value="Search" style="border-radius: 5px;font-size: 20px;border: solid;border-color: gainsboro;"/></button> 
          				
          		
          				
          				
          			</div>	
           			
            
            		 <?php
				if(isset($_POST['delete'])){
					
						$c=$_POST['sid'];
					
						$de="DELETE FROM add_new_supplier WHERE supplier_id='$c'";
						mysql_query($de);
						
					
				}
 			 	
       			?>
       			
       			
        
      
       
    </div>

    			
 			 
						
				
 		
    		</div>
    		
    		 <button type="submit" name="delete"  style="font-size: 13px;margin-top:20px;">Delete Supplier<img src="icons/recycle-full.png"></button><br/>
 			 
 			 	
 			 	
 			 	
       				<?php  
						
					
				if(isset($_POST['update'])){
					
						$c=$_POST['sid'];
						$name=$_POST['name'];
							$email=$_POST['email'];
							$mobile=$_POST['mobile'];
							
					
					
		$up="UPDATE add_new_supplier SET company_name='$name', email='$email',phone_number='$mobile'  WHERE supplier_id='$c'";


						mysql_query($up);
					
					
				}
					
					
				?>
 			 
 			 
 			  <button type="submit" name="update"  style="font-size: 13px;margin-top:20px;">Update Supplier<img src="icons/reload.png">
 			  
 
 			</form>
 	
</div>
	</div>
</div>
  	
   		
   	
   						
  
    
  




	


</body>



</html>











