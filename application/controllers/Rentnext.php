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
        $dat = date("Y-m-d H:i:sa", strtotime($Date));
        $Date2 = $this->input->post("end");
        $dat2 = date("Y-m-d H:i:sa", strtotime($Date2));
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
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
            $owner = $total2 * 60 /100;
            $company = $total2 * 30 /100;
            $object = array(

                'Datebooking' => $da,
                'totalprice' => $total2,
                'Carownerincome' => $owner,
                'Companyincome' => $company,
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
            'idCarregis'=> $idc,
            'idRent'=> $insert_id
        );
        $this->db->insert('RentalDetail', $in);

        redirect('Payment/sh/'.$insert_id);
        // $this->db->order_by('idCarregis', 'desc');
        // $query =  $this->db->get('Carregis', 1);
        // $qq = $query->row_array();
        // echo $qq['idCarregis'];
        // echo $qq['id_Gen'];
        // redirect('Owner2/show/'. $qq['id_Gen'].'/'. $qq['idCarregis']);
    }

}

/* End of file Controllername.php */
 ?>