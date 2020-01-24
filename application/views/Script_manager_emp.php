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

    $(function(){
        $('img').EZView();
    });

</script>