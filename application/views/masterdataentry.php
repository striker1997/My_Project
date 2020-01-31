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
    <title>XML Generator form</title>

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
                    <h2 class="title">Master Data Entry </h2>
                </div>
                <div class="card-body">
                    <form name="xmlform" method="POST" action="<?php echo base_url('Welcome/validation_master_data');?>" >
                        <pre>                                                               <a href="<?php echo base_url('Welcome/viewmasterdata')?>">View Data </a> 


                                                                    <a href="<?php echo base_url('Welcome/logout_master')?>">Logout </a> 
                            
                              </pre>
                        <div class="form-row m-b-55">
                            <div class="name">State Code</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5"  type="text" name="statecode" id="statecode" value='12' readonly>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Department Code</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Dept_Code" id="Dept_Code">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <?php
                                            foreach($data as $d){ ?>
                                            
                                              <?php  echo '<option value="'.$d['Dept_Code'].'">'.$d['Dept_Code'].'</option>';?>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Budget Code</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                         <input class="input--style-5" type="text" name="Budget_Code">
                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                         <input class="input--style-5" type="text" name="Description">
                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Submit</button>
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

var today= new Date();
var month,day,tmp;
month=today.getMonth()+1;
day=today.getDate();
if(month.toString().length===1)
{
    month='0'+month;
}
if(day.toString().length===1)
{
    day='0'+day;
    
}
var date=today.getFullYear()+'-'+month+'-'+day+':'+today.getHours()+':'+today.getMinutes()+':'+today.getSeconds()+'.'+today.getMilliseconds();
$('#timestamp').val(date);
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
