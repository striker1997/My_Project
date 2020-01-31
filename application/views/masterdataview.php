<!DOCTYPE html>
<html lang="en">
<head>
	<title>Master Table</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/masterdataview/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/masterdataview/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/masterdataview/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/masterdataview/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/masterdataview/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/masterdataview/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/masterdataview/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/masterdataview/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<a href="<?php echo base_url('Welcome/load_master')?>">Data Entry page</a>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">PFMS</th>
								<th class="column2">Dept. Code</th>
								<th class="column3">Budget Code</th>
								<th class="column3">Description</th>
							</tr>
						</thead>
						<tbody>
								<?php  
						         foreach ($h as $row)  
						         {  
						            ?><tr>  
						            <td><?php echo $row->PFMS;?></td>  
						            <td><?php echo $row->Dept_Code;?></td>
						             <td><?php echo $row->Budget_Code;?></td> 
						              <td><?php echo $row->Description;?></td>   
						            </tr>  
						         <?php }  
						         ?>  
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="<?php echo base_url()?>assets/masterdataview/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/masterdataview/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()?>assets/masterdataview/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/masterdataview/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/masterdataview/js/main.js"></script>
	<style type="text/css">
    a:link {
  color: red;
}

/* visited link */
a:link,a:visited {
  color:  white;
  background-color:#005ce6;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  border-radius: 12px;
  display: inline-block;
}

/* mouse over link */
a:hover {
   background-color:#00ccff;
}

/* selected link */
a:active {
  color: blue;
}

</body>
</html>