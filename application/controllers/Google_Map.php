<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Google_Map extends CI_Controller {

    function __construct(){
        parent::__construct();
    } 

    public function index()
    {
        // $this->load->library('googlemaps');

        // $config['center'] = '37.4419, -122.1419';
        // $config['zoom'] = 'auto';
        // $this->googlemaps->initialize($config);
        
        // $marker = array();
        // $marker['position'] = '40.429, -122.1419';
        // $this->googlemaps->add_marker($marker);
        // $data['map'] = $this->googlemaps->create_map();
        
        $this->load->view('Google_Map_view/Map_view');
    }
}

/* End of file ConCarregis.php */
 ?>

 