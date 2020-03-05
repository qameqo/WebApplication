<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pricecar extends CI_Controller {

    public function pri($id,$idc)
    {
        $data['id'] = $id;
        $data['idc'] = $idc;
        $this->load->view('header');
        $this->load->view('Pricecar',$data);
        $this->load->view('footer');
    }
    public function price()
    {
        // echo"ครับ";

        // print_r($_POST);
        
        // exit;
        
        $this->db->where('idCarregis', $this->input->post('idCarregis'));
       
        $data = array( 
            'RentalPrice' => $this->input->post('Price'),
            'Bankname' =>  $this->input->post('bank'),
            'Bankaccount' => $this->input->post('income')
        );

        $query=$this->db->update('Carregis',$data);

        echo "<script>";
        echo "alert('ยืนยันราคาเรียบร้อย ตรวจสอบผลการลงทะเบียนได้ภายใน 24 ชม.หลังจากนี้');";
        echo "window.location.href = '". base_url(). "Dataregis ';";
        echo "</script>";
    }
    public function raka($id)
    {
        $query = $this->db->query('SELECT * FROM Generation , Brand WHERE Brand.idBrand = Generation.idBrand and Generation.id_Gen = '. $id);
        $qq = $query->result_array();
        $qa = $qq[0]['Price'];
        $qb = $qa * 0.0015;
        $qc = $qa * 0.0025;
        echo $qc;
        
        

    }
    public function raka2($id)
    {
        $query = $this->db->query('SELECT * FROM Generation , Brand WHERE Brand.idBrand = Generation.idBrand and Generation.id_Gen = '. $id);
        $qq = $query->result_array();
        $qa = $qq[0]['Price'];
        $qb = $qa * 0.0015;
        $qc = $qa * 0.0025;
        echo $qb;
        
    }
    public function Price1($id,$idc){
        $query = $this->db->query("SELECT * FROM Carregis INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen
         WHERE Generation.id_Gen = $id and Carregis.idCarregis = '$idc'");
         $qq = $query->result_array();
         $aa = $qq[0]['Price'];
         $year = $qq[0]['Yearlicense'];
         $y = date('Y');
         $year1 = $y - $year;
         $raka1 = 0.002;
         $raka2 = 0.0019;
         $raka3 = 0.0018;
         $raka4 = 0.0017;
         $raka5 = 0.0016;
         $raka6 = 0.0015;
         $raka7 = 0.0014;
        $total1 = $aa * $raka1;
        $total2 = $aa * $raka2;
        $total3 = $aa * $raka3;
        $total4 = $aa * $raka4;
        $total5 = $aa * $raka5;
        $total6 = $aa * $raka6;
        $total7 = $aa * $raka7;
         if($year1 == 0){
               echo $total1;
         }elseif($year1 == 1){
            echo $total1;
         }elseif($year1 == 2){
            echo $total2;
        }elseif($year1 == 3){
            echo $total3;
        }elseif($year1 == 4){
            echo $total4;
        }elseif($year1 == 5){
            echo $total5;
        }elseif($year1 == 6){
            echo $total6;
        }elseif($year1 == 7){
            echo $total7;
        }elseif($year1 > 7){
            echo "อายุการใช้งานเกินไม่สามารถลงทะเบียนได้";
        }
        
    }
    public function hee()
    {
        $hee = 2020 - 2019;
        $hee = $hee /10000;
        $raka = 0.002 - $hee;
        
       
        $raka1 = 549000 * $raka;
        echo $raka1;
    }

}

/* End of file Controllername.php */
 ?>