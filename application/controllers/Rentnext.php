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
    {   $Date = $this->input->post("start");
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
            $totalprice = $ga * $ins / $percen;
            $total2 = $ga + $totalprice;
            $vat =  $total2 * 7 /100;
            $kottotal = $total2 + $vat;
            $deposit = $kottotal * 30 /100; 
            $owner = $kottotal * 70 /100;
            $company = $kottotal * 30 /100;
            $object = array(

                'Datebooking' => $da,
                'totalprice' => $this->input->post('total'),
                'Carownerincome' => $owner,
                'Companyincome' => $company,
                'idstatus'=>"9",
                'idMember' => $this->session->userdata('id_Member'),
            );
        }
        
        $this->db->insert('Rental', $object);
        $insert_id = $this->db->insert_id();
       
        $in = array(
            'StartDate'=> $dat,
            'endDate'=> $dat,
            'PriceCar'=> $ga,
            'PriceIns'=> $totalprice,
            'PriceDe' => $deposit,
            'PriceVat'=> $vat,
            'idCarregis'=> $idc,
            'idRent'=> $insert_id
        );
        $this->db->insert('RentalDetail', $in);

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
        $gh = $qq[0]['RentalPrice'];
        $fg = 0.25;
        $total = $gh * $fg;
        $total2 = $total + $gh;
        echo $total2;
        

        

    }

}

/* End of file Controllername.php */
 ?>