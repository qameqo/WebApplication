<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentnext extends CI_Controller {

    public function one($idc,$startdat,$dateendd)
    {
        // ,$startdat,$dateendd
        $data['idc'] = $idc;
        $data['startdat'] = $startdat;
        $data['dateendd'] = $dateendd;
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
        $this->db->join('Brand', 'Carregis.idBrand = Brand.idBrand');
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
            $Ov = $ow * $totalpricee;
            $object = array(

                'Datebooking' => $da,
                'totalprice' => $totalpricee,
                'Carownerincome' => $owner,
                'Companyincome' => $company,
                'id_status'=>"9",
                'id_Member' => $this->session->userdata('id_Member'),
                'id_Insurance' => $this->input->post("ins"),
                'startDate'=> $dat,
                'endDate'=> $dat2,
                'PriceCar'=> $pricecar,
                'PriceIns'=> $this->input->post("totalins"),
                'PriceDe' => $De,
                'PriceOver' =>$Ov,
                'PriceVat'=> $this->input->post("totalvat"),
                //'PriceFive' => $this->input->post("hapan"),
                'idCarregis'=> $idc,
            );
        }
       
       
        $this->db->insert('Rental', $object);
        $insert_id = $this->db->insert_id();    
        
        // $car = array('id_Status' => '10');
        // $this->db->where('idCarregis', $idc);
        // $this->db->update('Carregis', $car);
        echo "<script>";
        echo "alert('บันทึกข้อมูลการจองเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Payment/sh/$insert_id ';";
        echo "</script>";
    //     foreach($qq as $data){
    //         $da = date("Y-m-d");
    //         $ga = $data['RentalPrice'];
    //         $ins = 25;
    //         $percen = 100;
    //         $totalpricee = $this->input->post("total"); //ราคารวม
    //         $pricecar = $this->input->post("totalcar2");
    //         $ow = 0.7;
    //         $com = 0.3;
    //         $owner = $ow * $pricecar; //รายได้ลูกค้า
    //         $company = $com * $pricecar; //รายได้บริษัท
    //         $De = $com * $totalpricee;
    //     $in = array(
    //         'startDate'=> $dat,
    //         'endDate'=> $dat2,
    //         'PriceCar'=> $pricecar,
    //         'PriceIns'=> $this->input->post("totalins"),
    //         'PriceDe' => $De,
    //         'PriceVat'=> $this->input->post("totalvat"),
    //         'idCarregis'=> $idc,
    //         'idRent'=> $insert_id
    //     );
    // }
    //     $this->db->insert('RentalDetail', $in);
        
        
        
      
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
        //echo $totalplus;
        $a = 1000;
        $aa = 2001;
        $aaa = 3001;
        $aaaa = 4001;
        $aaaaa = 5000;
        $a1 = 1001;
        $b = 2000;
        $bb = 3000;
        $bbb = 4000;
        $stand1 = 250;
        $stand2 = 350;
        $stand3 = 450;
        $stand4 = 550;
        $stand5 = 650;
        $stand6 = 750;
        // ราคาต่ำกว่า 1000
        $nn =  $stand1 + $gh;
        $nnn = $nn * $vat;
        $n = $nnn + $nn;
        
        //ราคา 1001-2000
        $oo =  $stand2 + $gh;
        $ooo = $oo * $vat;
        $o = $ooo + $oo;

        //ราคา 2001-3000
        $mm =  $stand3 + $gh;
        $mmm = $mm * $vat;
        $m = $mmm + $mm;

        //ราคา 3001-4000
        $pp =  $stand4 + $gh;
        $ppp = $pp * $vat;
        $p = $ppp + $pp;

        //ราคา 4001-5000
        $ll =  $stand5 + $gh;
        $lll = $ll * $vat;
        $l = $lll + $ll;

        //ราคามากกว่า 5000
        $kk =  $stand6 + $gh;
        $kkk = $kk * $vat;
        $k = $kkk + $kk;
        //$insstand = $gh * $fg; // ราคาประกัน
        if($gh <= $a){
              
              echo $n;
        }else if(($gh >= $a1) && ($gh <= $b))
        {     echo $o;
        }else if(($gh >= $aa) && ($gh <= $bb)){
              echo $m;
        }else if(($gh >= $aaa) && ($gh <= $bbb)){
              echo $p;
        }
        else if(($gh >= $aaaa) && ($gh <= $aaaaa)){
            echo $l;
        }
        else if($gh > $aaaaa){
            echo $k;
        }
        
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
        $fg = 0.35;
        $total = $gh * $fg;
        $total2 = $total + $gh; // ราคาประกัน
        $vat = 0.07;
        $total3 = $total2 * $vat; //ราคา vat
        $totalpric = $total2 + $total3; //ราคารวมประกันพรีเมี่ยม
        $totalpluss = $totalpric;
        //echo $totalpluss;
        $a = 1000;
        $aa = 2001;
        $aaa = 3001;
        $aaaa = 4001;
        $aaaaa = 5000;
        $a1 = 1001;
        $b = 2000;
        $bb = 3000;
        $bbb = 4000;
        $stand1 = 400;
        $stand2 = 500;
        $stand3 = 600;
        $stand4 = 700;
        $stand5 = 800;
        $stand6 = 900;
        // ราคาต่ำกว่า 1000
        $nn =  $stand1 + $gh;
        $nnn = $nn * $vat;
        $n = $nnn + $nn;
        
        //ราคา 1001-2000
        $oo =  $stand2 + $gh;
        $ooo = $oo * $vat;
        $o = $ooo + $oo;

        //ราคา 2001-3000
        $mm =  $stand3 + $gh;
        $mmm = $mm * $vat;
        $m = $mmm + $mm;

        //ราคา 3001-4000
        $pp =  $stand4 + $gh;
        $ppp = $pp * $vat;
        $p = $ppp + $pp;

        //ราคา 4001-5000
        $ll =  $stand5 + $gh;
        $lll = $ll * $vat;
        $l = $lll + $ll;

        //ราคามากกว่า 5000
        $kk =  $stand6 + $gh;
        $kkk = $kk * $vat;
        $k = $kkk + $kk;
        //$insstand = $gh * $fg; // ราคาประกัน
        if($gh <= $a){
              
              echo $n;
        }else if(($gh >= $a1) && ($gh <= $b))
        {     echo $o;
        }else if(($gh >= $aa) && ($gh <= $bb)){
              echo $m;
        }else if(($gh >= $aaa) && ($gh <= $bbb)){
              echo $p;
        }
        else if(($gh >= $aaaa) && ($gh <= $aaaaa)){
            echo $l;
        }
        else if($gh > $aaaaa){
            echo $k;
        }
        
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
        //$inspre = $gh * $f5; // ราคาประกัน
        $a = 1000;
        $aa = 2001;
        $aaa = 3001;
        $aaaa = 4001;
        $aaaaa = 5000;
        $a1 = 1001;
        $b = 2000;
        $bb = 3000;
        $bbb = 4000;
        $stand1 = 400;
        $stand2 = 500;
        $stand3 = 600;
        $stand4 = 700;
        $stand5 = 800;
        $stand6 = 900;
        //$insstand = $gh * $fg; // ราคาประกัน
        if($gh <= $a){
              echo $stand1;
        }else if(($gh >= $a1) && ($gh <= $b))
        {     echo $stand2;
        }else if(($gh >= $aa) && ($gh <= $bb)){
              echo $stand3;
        }else if(($gh >= $aaa) && ($gh <= $bbb)){
              echo $stand4;
        }
        else if(($gh >= $aaaa) && ($gh <= $aaaaa)){
            echo $stand5;
        }
        else if($gh > $aaaaa){
            echo $stand6;
        }
        //echo $inspre; // ประกันพรีเมี่ยม

        
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
        $a = 1000;
        $aa = 2001;
        $aaa = 3001;
        $aaaa = 4001;
        $aaaaa = 5000;
        $a1 = 1001;
        $b = 2000;
        $bb = 3000;
        $bbb = 4000;
        $stand1 = 250;
        $stand2 = 350;
        $stand3 = 450;
        $stand4 = 550;
        $stand5 = 650;
        $stand6 = 750;
        //$insstand = $gh * $fg; // ราคาประกัน
        if($gh <= $a){
            echo $stand1;
        }else if(($gh >= $a1) && ($gh <= $b))
        {
            echo $stand2;
        }else if(($gh >= $aa) && ($gh <= $bb)){
            echo $stand3;
        }else if(($gh >= $aaa) && ($gh <= $bbb)){
            echo $stand4;
        }
        else if(($gh >= $aaaa) && ($gh <= $aaaaa)){
            echo $stand5;
        }
        else if($gh > $aaaaa){
            echo $stand6;
        }
        
        //echo $insstand; //ประกันพื้นฐาน
        
    }



    //vattttt
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
    public function selectdate8($idc)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->where('idCarregis',$idc);
        $query = $this->db->get();
        $qq = $query->result_array();
        $gh = $qq[0]['RentalPrice']; // ราคารถ
        $fg = 0.35;
        $total = $gh * $fg;
        $total2 = $total + $gh; // ราคาประกัน
        $vat = 0.07;
        $total3 = $total2 * $vat; //ราคา vat
        $totalprice = $total2 + $total3; //ราคารวม
        
        echo $total3; // vat
        
    }
    public function selectstart($start,$end,$idc)
    {
        $query = $this->db->query("SELECT * FROM Rental WHERE (('$start' BETWEEN Rental.startDate and Rental.endDate) 
        OR ('$end' BETWEEN Rental.startDate and Rental.endDate))
        AND Rental.idCarregis = '$idc' AND Rental.id_status <> '6' AND Rental.id_status <> '3'");
        //OR ($end BETWEEN Rental.startDate and Rental.endDate) 
        // $query1 = $this->db->query('SELECT * FROM Rental WHERE ('.$start.' BETWEEN Rental.startDate and Rental.endDate)');
        // OR ('.$end.' BETWEEN Rental.startDate and Rental.endDate)'

        //SELECT * FROM Rental WHERE ('2020-02-15' BETWEEN Rental.startDate and Rental.endDate) OR ('2020-02-15' 
        //BETWEEN Rental.startDate and Rental.endDate) and Rental.idCarregis = '72'
        //$st = $query->num_rows();
        //$st = $query->num_rows();
        if($query->num_rows() == 0) {
            echo "55";
        }
        else
        {
            echo "77";
        }
        
            
        
       
            // $this->db->select('*');
            // $this->db->from('Carregis');
            // $this->db->where('idCarregis',$idc);
            // $query = $this->db->get();
            // $qq = $query->result_array();
            // $gh = $qq[0]['RentalPrice'];
            // $car = $gh * 1; // ราคารถ
            // $fg = 0.25;
            // $total = $gh * $fg;
            // $total2 = $total + $gh; // ราคาประกัน
            // $vat = 0.07;
            // $total3 = $total2 * $vat; //ราคา vat
            // $totalprice = $total2 + $total3; //ราคารวม
            
            // echo $car; // ราคารถ
        
         
        
    }
    // public function checkdate()
    // {
    //     $this->load->model("check");
    //     if ($this->check->selectstart($_POST["start"])($_POST["end"])($_POST["id"])) {
    //         // echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> หมายเลขตัวถังรถนี้ได้ถูกใช้ไปแล้ว</label>';
    //         echo "true";
    //     } else {
    //         // echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> หมายเลขตัวถังรถนี้สามารถใช้ได้</label>';
    //         echo "false";
    //     }
        
    // }
    public function status($idc)
    {
        $query = $this->db->query("SELECT * FROM `Rental` WHERE Rental.idCarregis = '$idc'");
        if($query->num_rows() > 0)
        {
            echo "จองได้";

        }
        else
        {
            echo "จองไม่ได้";
        }
    
    }
    
    
}

/* End of file Controllername.php */
 ?>