<head>

<script type='text/javascript' src="<?php echo base_url(); ?>game/js/jquery.min.js"></script>

  <script>
        
         var dateFirst = new Date("11/25/2017");
         var dateSecond = new Date("11/28/2017");

         // time difference
         var timeDiff = Math.abs(dateSecond.getTime() - dateFirst.getTime());

         // days difference
         var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

         // difference
         alert(diffDays);
      </script>
</head>
<body>
    
