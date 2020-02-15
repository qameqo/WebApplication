<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Rent');
        $this->load->view('footer');
        
    }
    public function selectcar()
    {

      
        //SELECT Carregis.idCarregis FROM Carregis WHERE Carregis.idCarregis NOT IN 
        //(SELECT Rental.idCarregis FROM Rental where Carregis.idCarregis = Rental.idCarregis)
        //SELECT Rental.endDate FROM Rental WHERE Rental.endDate NOT IN ('2020-02-14')
        // $query = $this->db->query("SELECT Rental.*, Images.Name_image, Brand.Name_Brand, Carregis.*, Generation.Name_Gen, Seat.Number_Seat 
        // FROM Carregis INNER JOIN Rental on Rental.idCarregis = Carregis.idCarregis 
        // INNER JOIN Images on Images.idCarregis = Carregis.idCarregis 
        // INNER JOIN Brand on Brand.idBrand = Carregis.idBrand 
        // INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen 
        // INNER JOIN Seat on Seat.id_Seat = Carregis.id_Seat 
        // WHERE Rental.startDate >= Rental.startDate and Rental.endDate <= Rental.endDate 
        // and Images.id_image = (SELECT Images.id_image FROM Images WHERE Images.idCarregis = Carregis.idCarregis LIMIT 1) 
        // and Rental.id_status='12' 
        // and Carregis.id_Status='5'");
        $query = $this->db->query("SELECT Carregis.*, Images.Name_image, Brand.Name_Brand, Carregis.*, Generation.Name_Gen, Seat.Number_Seat
        FROM Carregis 
        INNER JOIN Images on Images.idCarregis = Carregis.idCarregis 
        INNER JOIN Brand on Brand.idBrand = Carregis.idBrand 
        INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen 
        INNER JOIN Seat on Seat.id_Seat = Carregis.id_Seat 
        WHERE Carregis.idCarregis NOT IN
        (SELECT Rental.idCarregis FROM Rental where Carregis.idCarregis = Rental.idCarregis)
        and Images.id_image = (SELECT Images.id_image FROM Images WHERE Images.idCarregis = Carregis.idCarregis LIMIT 1) 
        and Carregis.id_Status='5'");
        $qq = $query->result_array();
        //echo $this->db->last_query();
        
        
        header('Content-Type: application/json');
        echo json_encode($qq);
        
        
        
        
        
    }

  

                    function fetch()
                    {
                    $output = '';
                    $query = '';
                    $this->load->model('ajaxsearch_model');
                    if($this->input->post('query'))
                    {
                    $query = $this->input->post('query');
                    }
                    $data = $this->ajaxsearch_model->fetch_data($query);
                    $output .= '
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                        <tr>
                        <th>ยี่ห้อ</th>
                        <th>รุ่น</th>
                      
                        </tr>
                    ';
                    if($data->num_rows() > 0)
                    {
                    foreach($data->result() as $row)
                    {
                        $output .= '
                        <tr>
                        <td>'.$row->Name_Brand.'</td>
                        <td>'.$row->Name_Gen.'</td>
                  
                        </tr>
                        ';
                    }
                    }
                    else
                    {
                    $output .= '<tr>
                        <td colspan="5">No Data Found</td>
                        </tr>';
                    }
                    $output .= '</table>';
                    echo $output;
                    }
                    
     }





/* End of file Controllername.php */
 ?>