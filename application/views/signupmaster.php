<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sign Up</title>

    <!-- Icons font CSS-->
    
    <link href="<?php echo base_url('assets/signup/vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/signup/vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
   
    <link href="<?php echo base_url('assets/signup/vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/signup/vendor/datepicker/daterangepicker.css')?>" rel="stylesheet" media="all">
    
    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/signup/css/main.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/signup/css/bootstrap.min.css');?>" rel="stylesheet" media="all">
    
</head>
 
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" style="background-image: url('<?php echo base_url('assets/signup/images/bg-01.jpg')?>">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
               <?php if (validation_errors()){?>
                    <div id = "myAlert"  class="alert alert-danger fade show" role ="alert"> 
                        <button id ='linkClose' href="#" class="close" data-dismiss="alert"  >&times;</button>
                        <?php echo validation_errors();?>
                    </div>
               <?php }?>
                <div class="card-body">
                    
                  <h1 style='color:black' style='font:italic'>Registering as Master</h1>
                    
                           
                      <?php form_open('Welcome/master_reg');?>
                    <form method="POST"> 
                        
                        <div class="row row-space">
                           
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name">
                                
                                   

                            
                       
                       
                            
                                
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username">
                              
                            
                            
                                
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                               
                          <label class="label">Password</label>
                          <input class="input--style-4" type="password" name="password">
                        
                        <div class="p-t-15">
                            
                            <button id="btnSubmit" class="btn btn-primary" type="submit" >Submit</button>
                            
                            </div>
                          
                    </form>
                </div>
            </div>
        </div>
        

     
    </div>
    </div>
    </div>
    <!-- Jquery JS-->
    
    
    <script src="<?php echo base_url('assets/signup/vendor/jquery/jquery.min.js')?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url('assets/signup/vendor/select2/select2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/signup/vendor/datepicker/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets/signup/vendor/datepicker/daterangepicker.js')?>"></script>
    <script src="<?php echo base_url('assets\signup\js\sweetalert2.all.min.js')?>"></script>
    
    <!-- Main JS-->
    <script src="<?php echo base_url('assets/signup/js/global.js')?>"></script>
    <script src="<?php echo base_url('assets/signup/js/bootstrap.js')?>"></script>
     <script src="<?php echo base_url('assets/signup/js/alert.js')?>"></script>

</html>
