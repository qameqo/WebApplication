<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentnext extends CI_Controller {

    public function one($idc)
    {
        $data['idc'] = $idc;
        $this->load->view('header');
        $this->load->view('Rentnext',$data);
        $this->load->view('footer');

    }
    public function insup($idc)
    {   
        
        $Date = $this->input->post("start");
        $dat = date("Y-m-d", strtotime($Date));
        $Date2 = $this->input->post("end");
        $dat2 = date("Y-m-d", strtotime($Date2));
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->join('Brand', 'Carregis.id_Brand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
        $this->db->where('idCarregis',$idc);
        $query = $this->db->get();
        $qq = $query->result_array();
        foreach($qq as $data){
            $da = date("Y-m-d");
            $ga = $data['RentalPrice'];
            $ins = 25;
            $percen = 100;
            $totalpricee = $this->input->post("total"); //ราคารวม
            $pricecar = $this->input->post("totalcar2");
            $ow = 0.7;
            $com = 0.3;
            $owner = $ow * $pricecar; //รายได้ลูกค้า
            $company = $com * $pricecar; //รายได้บริษัท
            $De = $com * $totalpricee;
            $object = array(

                'Datebooking' => $da,
                'totalprice' => $totalpricee,
                'Carownerincome' => $owner,
                'Companyincome' => $company,
                'idstatus'=>"9",
                'idMember' => $this->session->userdata('id_Member'),
                'id_Insurance' => $this->input->post("ins")
            );
        }
        
        $this->db->insert('Rental', $object);
        $insert_id = $this->db->insert_id();
        foreach($qq as $data){
            $da = date("Y-m-d");
            $ga = $data['RentalPrice'];
            $ins = 25;
            $percen = 100;
            $totalpricee = $this->input->post("total"); //ราคารวม
            $pricecar = $this->input->post("totalcar2");
            $ow = 0.7;
            $com = 0.3;
            $owner = $ow * $pricecar; //รายได้ลูกค้า
            $company = $com * $pricecar; //รายได้บริษัท
            $De = $com * $totalpricee;
        $in = array(
            'startDate'=> $dat,
            'endDate'=> $dat2,
            'PriceCar'=> $pricecar,
            'PriceIns'=> $this->input->post("totalins"),
            'PriceDe' => $De,
            'PriceVat'=> $this->input->post("totalvat"),
            'idCarregis'=> $idc,
            'idRent'=> $insert_id
        );
    }
        $this->db->insert('RentalDetail', $in);
        
        $car = array('idStatus' => '10');
        $this->db->where('idCarregis', $idc);
        $this->db->update('Carregis', $car);
        
        echo "<script>";
        echo "alert('บันทึกข้อมูลการจองเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Payment/sh/$insert_id ';";
        echo "</script>";
        // redirect('Payment/sh/'.$insert_id);
        // $this->db->order_by('idCarregis', 'desc');
        // $query =  $this->db->get('Carregis', 1);
        // $qq = $query->row_array();
        // echo $qq['idCarregis'];
        // echo $qq['id_Gen'];
        // redirect('Owner2/show/'. $qq['id_Gen'].'/'. $qq['idCarregis']);
    }
    public function selectdate($idc)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->where('idCarregis',$idc);
        $query = $this->db->get();
        $qq = $query->result_array();
        $gh = $qq[0]['RentalPrice']; // ราคารถ
        $fg = 0.25;
        $total = $gh * $fg;
        $total2 = $total + $gh; // ราคาประกัน
        $vat = 0.07;
        $total3 = $total2 * $vat; //ราคา vat
        $totalprice = $total2 + $total3; //ราคารวมประกันพื้นฐาน
        $totalplus = $totalprice;
        echo $totalplus;
        
    }
    
    public function selectdate3($idc)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->where('idCarregis',$idc);
        $query = $this->db->get();
        $qq = $query->result_array();
        $gh = $qq[0]['RentalPrice'];
        $car = $gh * 1; // ราคารถ
        $fg = 0.25;
        $total = $gh * $fg;
        $total2 = $total + $gh; // ราคาประกัน
        $vat = 0.07;
        $total3 = $total2 * $vat; //ราคา vat
        $totalprice = $total2 + $total3; //ราคารวม
        
        echo $car; // ราคารถ
        
    }
    public function selectdate6($idc)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->where('idCarregis',$idc);
        $query = $this->db->get();
        $qq = $query->result_array();
        $gh = $qq[0]['RentalPrice']; // ราคารถ
        $fg = 0.3;
        $total = $gh * $fg;
        $total2 = $total + $gh; // ราคาประกัน
        $vat = 0.07;
        $total3 = $total2 * $vat; //ราคา vat
        $totalpric = $total2 + $total3; //ราคารวมประกันพรีเมี่ยม
        $totalpluss = $totalpric;
        echo $totalpluss;
        
    }
    public function selectdate4($idc)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->where('idCarregis',$idc);
        $query = $this->db->get();
        $qq = $query->result_array();
        $gh = $qq[0]['RentalPrice']; // ราคารถ
        $fg = 0.25;
        $total = $gh * $fg;
        $total2 = $total + $gh; // ราคาประกัน
        $vat = 0.07;
        $total3 = $total2 * $vat; //ราคา vat
        $totalprice = $total2 + $total3; //ราคารวม
        
        echo $total3; // vat
        
    }
    public function selectdate5($idc)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->where('idCarregis',$idc);
        $query = $this->db->get();
        $qq = $query->result_array();
        $gh = $qq[0]['RentalPrice']; // ราคารถ
        $f5 = 0.35;
        $inspre = $gh * $f5; // ราคาประกัน
        echo $inspre; // ประกันพรีเมี่ยม

        
    }
    public function selectdate2($idc)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->where('idCarregis',$idc);
        $query = $this->db->get();
        $qq = $query->result_array();
        $gh = $qq[0]['RentalPrice']; // ราคารถ
        $fg = 0.25;
        $insstand = $gh * $fg; // ราคาประกัน
        echo $insstand; //ประกันพื้นฐาน
        
    }


}

/* End of file Controllername.php */
 ?>