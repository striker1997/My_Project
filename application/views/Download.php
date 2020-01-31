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
    <title>Download Page</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url()?>assets/XMLform/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/XMLform/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url()?>assets/XMLform/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/XMLform/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url()?>assets/XMLform/css/main.css" rel="stylesheet" media="all">
<!---->

</head>

<body>

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Budget Entry Allocation</h2>
                </div>
                <div class="card-body">
                    <form name="downloadform" id="downloadform" method="POST" action="<?php echo base_url('Welcome/download');?>" >

                       <div class="form-row m-b-55">
                            <div class="name">Download today's file</div>
                             <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                          <input placeholder="Enter sequence number" class="input--style-5"  type="text" name="seq1" id="seq">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br><br><br>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                          <button type='submit' name= "download" class="btn btn--radius-2 btn--red"  id="download" value='today'> Download</button>  
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <pre> 
                        <div class="form-row m-b-55">
                        <div class="name"><h3 style="color: blue">OR, Select date below to download the desired file. </h3></div>
                      </div>
                      </pre>
                    <div class="form-row m-b-55">
                      <div class="name">Seq No.</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                             <input placeholder="Enter sequence number" class="input--style-5"  type="text" name="seq" id="seq">
                                            <input type='hidden' name='messageid' id='messageid'>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                             <br><br><br><br><br><br>
                            <div class="name">Date</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5"  type="date" name="date" id="date">
                                            <input type='hidden' name='messageid' id='messageid'>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                       
                        
                       
                         
                      
                        <div>
                            
                            <button class="btn btn--radius-2 btn--red" type='submit' name= "download" value='datewise'> Download</button>
                             <pre>
                                                       <a href="<?php echo base_url('Welcome/loadxmlform')?>">Go Back to form </a> 


                                                       
                               <a href="<?php echo base_url('Welcome/logout')?>">Logout </a>
                              </pre>
                        </div>
                  
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url()?>assets/XMLform/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url()?>assets/XMLform/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/XMLform/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url()?>assets/XMLform/js/global.js"></script>
<script>
$(document).ready(function()
{
  var date=$('#date').val();
  var day=date.substring(8,9);
  $('#messageid').val(date2);
})

</script>
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
</style>
</body>

</html>
