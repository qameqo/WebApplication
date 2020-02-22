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

}

/* End of file Controllername.php */
 ?>