<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Insert_Model extends CI_Model {
   function form_insert($data){
       $this->db->insert('user', $data);
   }
    
  function verify($username, $password)
  {
      //verify admin
      $this->load->database();
         $q= $this->db->where(['username'=>$username, 'password'=>$password])->get('user');

        $k=$q->num_rows();
       
    if($k!=0)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
      
  }
   function form_insert_master($data)
   {
        $this->db->insert('master_user', $data);
   }
    function verify_master($username, $password)
    {
        // master login verification
        $this->load->database();
         $q= $this->db->where(['username'=>$username, 'password'=>$password])->get('master_user');

        $k=$q->num_rows();
       
    if($k!=0)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
      
    
  }
  
   function insert_master_data($data)
     {
             $this->db->insert('master', $data);
     }
     
    function getDeptCode() {
    $this->db->distinct();    
    $this->db->select('Dept_Code')->from('dept_code_master');
    $query=$this->db->get();
    return $query->result_array();
}
function getObjectHead()
{
    $this->db->distinct();
    $this->db->select('object_head')->from('object_head_master');
    $query=$this->db->get();
    return $query->result_array();
}
function fetch_budget($Dept_Code1)
 {
  $this->db->select('Budget_Code')->from('master');
  $this->db->where('Dept_Code', $Dept_Code1);
  $query = $this->db->get();
  $data=$query->result();
  ///echo $this->db->last_query();
  return $data;
  
 }

function getseq_id($data)
{
  $finyear1=$data['finyear1'];
  $finyear2=$data['finyear2'];
  $Budget_Code=$data['Budget_Code'];
  $timestamp=substr($this->gettimestamp($data),-15,2);
   $time=$data['timestamp'];
  $time=substr( $time,-15,2);
  if($timestamp!==$time)
  {
     $this->db->select_max('seq_id')->from('xml_file_data');
    $this->db->like('timestamp',$timestamp);
    $this->db->where('finyear1',$finyear1);
    $this->db->where('finyear2',$finyear2);
    $this->db->where('Budget_Code',$Budget_Code);
    $query=$this->db->get();
    $res=$query->row()->seq_id;
    return $res;
  }
  else
  {
    $this->db->select_max('seq_id')->from('xml_file_data');
    $this->db->like('timestamp',$timestamp);
    $this->db->where('finyear1',$finyear1);
    $this->db->where('finyear2',$finyear2);
    $this->db->where('Budget_Code',$Budget_Code);
    $query=$this->db->get();
    $res=$query->row()->seq_id;
    return $res;
  }
}
function gettimestamp($data)
{
    
  $finyear1=$data['finyear1'];
  $finyear2=$data['finyear2'];
  $Budget_Code=$data['Budget_Code'];
  $this->db->select_max('timestamp')->from('xml_file_data');
  $this->db->where('finyear1',$finyear1);
  $this->db->where('finyear2',$finyear2);
  $this->db->where('Budget_Code',$Budget_Code);
  $query=$this->db->get();
  $res=$query->row()->timestamp;
  return $res;
     
}

 function xml_data_insert($data)
 {   
     $this->load->helper('text');
     $Budget_Code=$data['Budget_Code'];
     $this->db->select('*');
    $this->db->from('xml_file_data');
    $this->db->like('Budget_Code', $Budget_Code);
    $seq_id=$this->db->count_all_results();
     $timestamp=substr($this->gettimestamp($data),-15,2);
     $time=$data['timestamp'];
     $time=substr( $time,-15,2);
      if($timestamp!==$time)
      {
        
        $data4=array('seq_id'=>$seq_id+1);
        $data=array_merge($data,$data4);
        $this->db->insert('xml_file_data',$data);

      }
      else
      {
           
           if($seq_id!=0)
            {
              $seq_id=$seq_id+1;
              $data2=array('seq_id'=>$seq_id);
              $data=array_merge($data,$data2);
               $this->db->insert('xml_file_data',$data);
            }
            else
            {
              $seq_id=$seq_id+1;
             $data4=array('seq_id'=>$seq_id);
             $data=array_merge($data,$data4);
             $this->db->insert('xml_file_data',$data);

            }
             

      }  
 
 } 

function getalldata($date)

{
  
  $this->db->select("*")->from('xml_file_data');
  $this->db->like('timestamp',$date);
  $query=$this->db->get();
  $result=$query->result();
  return $result;

}
function getmasterdata()
{
  $this->db->select("*")->from('master');
  $query=$this->db->get();
  return $query->result();
}
function updateflag($date)
{
   $this->db->set('generate','yes');
   $this->db->like('timestamp',$date);
   $this->db->update('final');
}
  function getflag($date)
  {
    $this->db->select_max('generate')->from('final');
    $this->db->like('timestamp',$date);
    $query=$this->db->get();
    $result=$query->row()->generate;
    return $result;
  }                                                                                                                
 function generate_check($date2)
 {
    $data=array('filename'=>$date2,'generated'=>'yes');
    $this->db->insert('generated_db',$data);
 } 

function insert_final()
{
  $this->db->query("INSERT INTO final SELECT * FROM xml_file_data");
}
function delete()
{
  $this->db->empty_table('xml_file_data');
}

}
