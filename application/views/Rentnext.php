<?php echo "ไอสัส";
      $this->db->select('*');
     $this->db->from('Carregis');
     $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
     $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
     $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
     $this->db->where('idCarregis',$idc);
     $query = $this->db->get();
     $qq = $query->result_array();
?>
    
<?php foreach($qq as $data){?> 
    <?php echo $data['RentalPrice']; ?>
<?php } ?>