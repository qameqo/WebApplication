<script>

    $(document).ready( function () {
        $('.table').dataTable();
    } );

    $('#adding_btn').click(function(){
        $('#insert_form')[0].reset();
    });

    $('#adding_btn_car_price').click(function(){
        $('#insert_form')[0].reset();
    });
    
    $('#close_modal').click(function(){
        $('#insert_form')[0].reset();
    });

    $(function(){
        $('img').EZView();
    });  

</script>

<!-- <script>

                                $("#RentalPrice").change(function(){ 

                                
                                var de = $("#RentalPrice").val();
                                var up = $("#up").val();
                                var down = $("#down").val();
                                var pow = $("#pow").val();
                                // var one = de.toFixed(0);
                                // var two = up.toFixed(0);
                                // var three = down.toFixed(0);
                                console.log("de ="+de)
                                console.log("up ="+up)
                                console.log(down)
                                //console.log(pow)
                                var kk = parseInt(de)
                                //(de == pow && de > up) || (de == pow  && de < down)
                                // if((kk >= down) && (kk <= up))
                                // {

                                    
                                // }
                                // else
                                // {
                                    
                                //     // alert('ราคานี้ไม่อยู่ในข้อเสนอของทางบริษัท');
                                //     $("#RentalPrice").val(null);
                                //     $("#RentalPrice").focus();
                                    
                                // }


                                    
                                }); 
                                </script> -->
