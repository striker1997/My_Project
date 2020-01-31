
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
     //Functions to load the views.   
	public function index()
	{
        $this->load->view('first');
	}
    function load_master()
    {
        if($this->session->userdata('username')){
             $data['data']=$this->Insert_Model->getDeptCode();
            $this->load->view('masterdataentry',$data);
        }
        else
            $this->load->view('first');
    }
    function loadxmlform()
    {   $this->load->helper('date');
        $datestring = '%Y-%m-%d';
        $time=time();
        $date=mdate($datestring,$time);
         $this->load->model('Insert_Model','',TRUE);
        $data['data']=$this->Insert_Model->getDeptCode();
        $data['data1']=$this->Insert_Model->getObjectHead();
        $data['data2']=$this->Insert_Model->getalldata($date);
        $this->load->view('XMLform',$data);
    }
        function register()
        {
            $this->load->view("register");
        }
        function login()
        {
            $this->load->view("login");
        }
        function login_master()
        {
             $this->load->view("login_master");
        }
        function loaddownload()
        {
            if($this->session->userdata('username'))
            $this->load->view('Download');
            else
             $this->load->view('first');   
        }
        // Master registration and validation
        function master_reg()
        {
           // Master registration form 
            $this->load->model('Insert_Model','',TRUE);
                $this->load->database();
                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
              
                $this->form_validation->set_rules('email', 'Email', 'required');

                if ($this->form_validation->run())
                {
                   $ciphering = "AES-128-CTR"; 
                    $iv_length = openssl_cipher_iv_length($ciphering); 
                    $options = 0;
                    $encryption_iv = '0987654321763415'; 
                    $encryption_key = "BUDGETALLOCATION"; 
                    $data = array(
                        'ID' => $id= rand(),
                        'name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'username' => $this->input->post('username'),
                        'password' => openssl_encrypt($this->input->post('password'), $ciphering, 
                                                                   $encryption_key, $options, $encryption_iv), 
                        
                    );
                     $this->Insert_Model->form_insert_master($data);
                    $this->load->view('aftermasterregistraion');
                 
                }
       
                else
                {
                      
                    $this->load->view('signupmaster');
                
                       
                }
            
        }
        // Admin registration and validation
         public function validate()
        {
             //Admin registration form
                $this->load->model('Insert_Model','',TRUE);
                $this->load->database();
                $this->load->library('encryption');
                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
              
                $this->form_validation->set_rules('email', 'Email', 'required');

                if ($this->form_validation->run())
                {
                    $ciphering = "AES-128-CTR"; 
                    $iv_length = openssl_cipher_iv_length($ciphering); 
                    $options = 0;
                    $encryption_iv = '1234567891011121'; 
                    $encryption_key = "XMLGENERATOR"; 
                    $data = array(
                        'ID' => $id= rand(),
                        'name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'username' => $this->input->post('username'),
                        'password' => openssl_encrypt($this->input->post('password'), $ciphering, 
                                                                   $encryption_key, $options, $encryption_iv), 
                        
                    );
                     $this->Insert_Model->form_insert($data);
                    $this->load->view('afteradminregister');
                 
                }
       
                else
                {
                      
                    $this->load->view('Signup');
                
                       
                }
            
            
            
            
        }
        // master login check
        function check_master(){
            //master login check
            $ciphering = "AES-128-CTR"; 
            $iv_length = openssl_cipher_iv_length($ciphering); 
             $options = 0;
             $encryption_iv = '0987654321763415'; 
             $encryption_key = "BUDGETALLOCATION"; 
            $this->load->model('Insert_Model','',TRUE);
            $uname = $this->input->post('username');
            $pass=$this->input->post('pass');
            $password= openssl_encrypt($pass, $ciphering, $encryption_key, $options, $encryption_iv); 
           
            if($this->Insert_Model->verify_master($uname, $password))
            { 
                //echo "Hello";
                $data=array('username'=>$uname,'password'=>$pass,'logged_in'=>TRUE);
                $this->session->set_userdata($data);
                $data['data']=$this->Insert_Model->getDeptCode();
               $this->load->view('masterdataentry',$data);
               
            }
           else 
           {
               $str="Please enter correct credentials!!!!!!!";
                echo "<p style='color:red; font-family: courier; font-size: 160%;'>".$str."</p>";
                $this->load->view('login_master');
           }
        
        }
        
       //admin login check
        function check()
        {
            //admin login check
            $ciphering = "AES-128-CTR"; 
            $iv_length = openssl_cipher_iv_length($ciphering); 
             $options = 0;
             $encryption_iv = '1234567891011121'; 
             $encryption_key = "XMLGENERATOR"; 
            $this->load->model('Insert_Model','',TRUE);
            $uname = $this->input->post('username');
            $pass=$this->input->post('pass');
            $password= openssl_encrypt($pass, $ciphering, $encryption_key, $options, $encryption_iv); 
           
            if($this->Insert_Model->verify($uname, $password))
            { 
                 $session_data=array('username'=>$uname,'password'=>$pass,'logged_in'=>TRUE);
                $this->session->set_userdata($session_data);
                $this->load->helper('date');
                $datestring = '%Y-%m-%d';
                $time=time();
                $date=mdate($datestring,$time);
                 $this->load->model('Insert_Model','',TRUE);
                $data['data']=$this->Insert_Model->getDeptCode();
                $data['data1']=$this->Insert_Model->getObjectHead();
                $data['data2']=$this->Insert_Model->getalldata($date);
                $this->load->view('XMLform',$data);
            }
           else 
           {
               $str="Please enter correct password!!!!!!!";
                echo "<p style='color:red; font-family: courier; font-size: 160%;'>".$str."</p>";
                $this->logout();
           }
        
           
       } 

       // master data entry and validation
         function validation_master_data()
          {
             //master db data entry check
                $this->load->model('Insert_Model','',TRUE);
                $this->load->database();
                //$this->form_validation->set_rules('statecode', 'State Code', 'required');
                $this->form_validation->set_rules('Dept_Code', 'Dept Code', 'required');
                $this->form_validation->set_rules('Budget_Code', 'Budget Code', 'required');
                
                $this->form_validation->set_rules('Description', 'Description', 'required');
                if ($this->form_validation->run())
                {
                    $zero=0;
                    $data = array(
                        //'statecode' => $this->input->post('statecode'),
                        'PFMS'=>$zero,
                        'Dept_Code' =>$this->input->post('Dept_Code'),
                        'Budget_Code' =>$this->input->post('Budget_Code'),
                       
                        'Description' => $this->input->post('Description'),
                        
                        
                        
                        
                    );
                     $this->Insert_Model-> insert_master_data($data);
                     if($this->session->userdata('username'))
                        $this->load->view('aftermastersubmission');
                     else
                        $this->load->view('first');
                }
       
                else
                {
                    echo validation_errors();
                     $data['data']=$this->Insert_Model->getDeptCode();
                    $this->load->view('masterdataentry',$data);
                
                       
                }
    }
    // fetch budget code 
     function fetch_budget()
        {
       
         if($this->input->post('Dept_Code1'))
         {
          
          $data = $this->Insert_Model->fetch_budget($this->input->post('Dept_Code1'));
         $output = '<option value="">Select Code</option>';
                foreach($data as $row)
                {
                   $output .= '<option value="'.$row->Budget_Code.'">'.$row->Budget_Code.'</option>';
                }
                echo $output;
         
         }
         
        }

     //function admin data   
    function confirm()
    {
        $this->load->helper('date');
        $datestring = '%Y-%m-%d';
        $time=time();
        $date=mdate($datestring,$time);        
        if($this->input->post('action')==='add')
        {
        if($this->Insert_Model->getflag($date)==='yes')
         {
             $str="XML for the day already generated, No more data entry allowed!!!!!";
             echo "<p style='color:red; font-family: courier; font-size: 160%;'>".$str."</p>";  
             $this->load->view('login');
         }
         else
         {
        $object=NULL;
        $dat_g['data']= $this->Insert_Model->getDeptCode();
        $dat_g['data1']=$this->Insert_Model->getObjectHead();
       
         $this->form_validation->set_rules('timestamp', 'Time Stamp', 'required');
         $this->form_validation->set_rules('finyear1', 'Financial Year 1', 'required');
         $this->form_validation->set_rules('finyear2', 'Financial Year 2', 'required');
         $this->form_validation->set_rules('statecode', 'State Code', 'required');
         $this->form_validation->set_rules('Dept_Code', 'Department Code', 'required');
         $this->form_validation->set_rules('Budget_Code', 'Budget Code', 'required');
         $this->form_validation->set_rules('object_head', 'Object Head Code', 'required');
         $this->form_validation->set_rules('amount', 'Amount', 'required');
         
          if ($this->form_validation->run()){
            
           $data = array(
               'timestamp'=> $this->input->post('timestamp'),
               'finyear1'=> $this->input->post('finyear1'),
               'finyear2'=> $this->input->post('finyear2'),
               'statecode'=> $this->input->post('statecode'),
               'Dept_Code'=> $this->input->post('Dept_Code'),
               'Budget_Code'=> $this->input->post('Budget_Code'),
               'object_head'=> $this->input->post('object_head'),
               'amount'=> $this->input->post('amount'),
               'generate'=> 'no'
               
           );
            $this->Insert_Model->xml_data_insert($data);
             $dat_g['data2']=$this->Insert_Model->getalldata($date);
               if($this->session->userdata('username'))
               $this->load->view('XMLform',$dat_g);
               else
                $this->load->view('first');
            
               
            }
            
          
         else 
         {
            
                echo validation_errors();

                $dat_g['data']= $this->Insert_Model->getDeptCode();
                $dat_g['data1']=$this->Insert_Model->getObjectHead();
                $this->load->view("XMLform",$dat_g);
         }
        
    }
}
else
{
        
        $this->load->helper('date');
        $datestring = '%Y-%m-%d';
        $time=time();
        $date=mdate($datestring,$time);
        $date2=$this->input->post('messageid');
        $count=1;
        if($this->Insert_Model->getflag($date)==='yes')
        {
            $count++;            
            $date2=$date2."".$count;
        }
        else
        {
            $date2=$date2."".$count;
        }
        
        $data= $this->Insert_Model->getalldata($date);  
       
        $amount=0;
        //Create XML Document
        foreach($data as $row)
        {
            $amount=$amount+$row->amount;
        }
        $date1=$this->input->post('date');
        
        $xml= new DOMDocument();
        $xml->formatOutput=TRUE;
        $treasury=$xml->createElement('TreasuryBud');
        $xml->appendChild($treasury);
         $treasury->setAttribute("xmlns","http://cpsms.com/StateTreasuryBudget");
        $treasury->setAttribute("MsgDtTm",$date1);
         $treasury->setAttribute("MessageId",$date2);
         $treasury->setAttribute("Source","12");
         $treasury->setAttribute("Destination","CPSMS");
         $treasury->setAttribute("StateName","Arunachal Pradesh");
         $treasury->setAttribute("RecordsCount",count($data));
         $treasury->setAttribute("AmountSum",$amount.".00");
        
       foreach($data as $row)
        {
            if(strlen($row->object_head)===1){$row->object_head="0".$row->object_head;}
            $budget=$xml->createElement('Budget');
            $xml->appendChild($budget);
            $ind=$xml->createElement('Ind','B');
            $budget->appendChild($ind);
            $finyear1=$xml->createElement('Fin_Year1',$row->finyear1);
            $budget->appendChild($finyear1);
            $finyear2=$xml->createElement('Fin_Year2',$row->finyear2);
            $budget->appendChild($finyear2);
            $StateCode=$xml->createElement('StateCode','12');
            $budget->appendChild($StateCode);
            $BudgetCode=$xml->createElement('BudgetCode',$row->Budget_Code);
            $budget->appendChild($BudgetCode);
            $ObjectHeadCode=$xml->createElement('ObjectHeadCode',$row->object_head);
            $budget->appendChild($ObjectHeadCode);
            $Amount=$xml->createElement('Amount',$row->amount.'.00');
            $budget->appendChild($Amount);
            $StateBudgetUniqueID=$xml->createElement('StateBudgetUniqueID',$row->finyear1."".substr($row->finyear2,-2,2)."".$date2."0".$row->seq_id."".$row->Budget_Code);
            $budget->appendChild($StateBudgetUniqueID);
            $treasury->appendChild($budget);

        }
       
        //save xml
        $xml->save('C:/xampp/htdocs/My_Project/downloads/'.$date2.'.xml');
        $this->Insert_Model->insert_final();
        $this->Insert_Model->updateflag($date);
        $this->Insert_Model->generate_check($date2);
        $this->Insert_Model->delete();
        $this->load->view('Download');
     }     
 }

        
function download(){
if($this->input->post('download')==='datewise')
{
    $date=$this->input->post('date'); 
    $datestr=strtotime($date);
    $datestr=date("d-m-Y", $datestr);
    $datestr=str_replace('-', '', $datestr);
    $seq0=$this->input->post('seq');  
    $datestr="12Budget".$datestr."".$seq0;
    $file = 'C:/xampp/htdocs/My_Project/downloads/'.$datestr.'.xml';
    echo $datestr;
    die();
    // Download Code
    if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
    }
    else
    {
    $str="FILE DOES NOT EXIST.....Please generate XML file first.";
             echo "<p style='color:red; font-family: courier; font-size: 160%;'>".$str."</p>";

     $this->load->view('Download');        
    }  
}
 else
 {
        $this->load->helper('date');
        $datestring ='%d-%m-%Y';
        $time=time();
        $dat=mdate($datestring,$time);
        $dat=str_replace('-', '', $dat);
        $seq1=$this->input->post('seq1'); 
        $date="12Budget".$dat."".$seq1;
        $file = 'C:/xampp/htdocs/My_Project/downloads/'.$date.'.xml';
    // Download Code
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;

        }
    else
    {
        $str="FILE DOES NOT EXIST.....Please generate XML file first.";
                 echo "<p style='color:red; font-family: courier; font-size: 160%;'>".$str."</p>";

         $this->load->view('Download');        
    }
  }
}
 function viewmasterdata()
 {
    $this->load->model('Insert_Model','',TRUE);
    $data['h']=$this->Insert_Model->getmasterdata();
    $this->load->view('masterdataview',$data);
 } 

 function logout()
 {
    $this->load->library('session');
    
    $this->session->sess_destroy();

    redirect('Welcome');
 }
 function logout_master()
 {
     $this->load->library('session');
    
    $this->session->sess_destroy();

    redirect('Welcome');

 }
}
