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
    <title>Budget Allocation Portal</title>

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
     <link href="<?php echo base_url()?>assets/bootstrap.css" rel="stylesheet" media="all">
<!---->
<style> 
        table { 
            width: 100%; 
        } 
          
        table, 
        th, 
        td { 
            border: 1px solid black; 
            border-collapse: collapse; 
        } 
          
        th, 
        td { 
            padding: 15px; 
            text-align: left; 
        } 
          
        table#t01 tr:nth-child(even) { 
            background-color: #eee; 
        } 
          
        table#t01 tr:nth-child(odd) { 
            background-color: #fff; 
        } 
          
        table#t01 th { 
            background-color: black; 
            color: white; 
        } 
    </style> 
</head>

<body>

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Budget Entry Allocation</h2>
                </div>
                <div class="card-body">

                    <form name="xmlform" method="POST" action="<?php echo base_url('Welcome/confirm');?>" >
                        <pre><a href="<?php echo base_url('Welcome/loaddownload')?>">Download </a>                                                   <a href="<?php echo base_url('Welcome/logout')?>">Logout </a> </pre>
                         <div class="form-row m-b-55">
                            <div class="name">Timestamp</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5"  type="text" name="timestamp" id="timestamp" readonly>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Financial Year 1</div>
                             <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5"  type="text" name="finyear1" id="finyear1" readonly>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Financial Year 2</div>
                             <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5"  type="text" name="finyear2" id="finyear2" readonly>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
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
                                        <select name="Budget_Code" id="Budget_Code">
                                           <option value="">Select Code</option> 
                                           
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Object Head Code</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="object_head" id="object_head">
                                           <option value="">Select Code</option>
                                            <?php
                                            foreach($data1 as $d1){ ?>
                                            
                                              <?php  echo '<option value="'.$d1['object_head'].'">'.$d1['object_head'].'</option>';?>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-row m-b-55">
                            <div class="name">Amount</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="amount">
                                           <input type="hidden" id="messageid" name="messageid" readonly>
                                           <input class="input--style-5"  type="hidden" name="date" id="date" readonly>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    <div>
                            <button class="btn btn--radius-2 btn--red" name='action' type="submit"  value='add'>ADD</button>
                        </div>
                        <br><br>
                        <table id="t01"> 
        <tr> 
            <th>Serial no</th> 
            <th>timestamp</th> 
            <th>Dept Code</th>
            <th>Budget Code</th>
            <th>Object</th>
            <th>Amount</th>
        </tr> 
           <?php $j=1;?>
            <?php foreach($data2 as $row){?>

               <?php echo "<tr><td>".$j."</td><td>"  
                               .$row->timestamp."</td><td>".$row->Dept_Code."</td><td>".$row->Budget_Code."</td><td>".$row->object_head."</td><td>".$row->amount."</tr>";?>
                <?php $j++;?>               
                
         <?php } ?>
          
                
      
    </table> 

                        <pre>
                            
                        </pre>
                         <div>
                            <button name='action'  type='submit' class="btn btn--radius-2 btn--red" value ='generate'>Generate XML</button>
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
$(document).ready(function(){
 $('#Dept_Code').change(function(){
  var Dept_Code1 = $('#Dept_Code').val();

  if(Dept_Code1!== '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>welcome/fetch_budget",
    method:"POST",
    data:{Dept_Code1:Dept_Code1},
    success:function(data)
    {
        
     $('#Budget_Code').html(data);
    
    }
   });
  }
  else
  {
   $('#Budget_Code').html('<option value="">Select Code</option>');
   
  }
 });

 
});
$(document).ready(function(){
 
  // Initialize select2
  $("#Dept_Code").select2();
});
$(document).ready(function(){
 
  // Initialize select2
  $("#Budget_Code").select2();
});
$(document).ready(function(){
 
  // Initialize select2
  $("#object_head").select2();
});
var today= new Date();
var month,day,hours,minutes,seconds;
month=today.getMonth()+1;
day=today.getDate();
hours=today.getHours();
minutes=today.getMinutes();
seconds=today.getSeconds();
if(month.toString().length===1)
{
    month='0'+month;
}
if(day.toString().length===1)
{
    day='0'+day;
    
}
if(hours.toString().length===1)
{
    hours='0'+hours;
    
}
if(minutes.toString().length===1)
{
    minutes='0'+minutes;
    
}
if(seconds.toString().length===1)
{
    seconds='0'+seconds;
    
}

var date=today.getFullYear()+'-'+month+'-'+day+':'+hours+':'+minutes+':'+seconds+'.'+today.getMilliseconds();
$('#timestamp').val(date);
var date2="12Budget"+day+month+today.getFullYear();
$('#messageid').val(date2);
$('#date').val(date);
if(month==='01'|| month==='02' || month==='03')
{
    $('#finyear1').val(today.getFullYear()-1);
     $('#finyear2').val(today.getFullYear());
}
else
{

    $('#finyear1').val(today.getFullYear());
     $('#finyear2').val(today.getFullYear()+1);
}
</script>
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