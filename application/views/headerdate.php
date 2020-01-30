<head>

<script type='text/javascript' src="<?php echo base_url(); ?>game/js/jquery.min.js"></script>

  <script>
         var x = document.getElementById("datetimepickerstart");
         var y = document.getElementById("datetimepickerend");
         var dateFirst = new Date(x);
         var dateSecond = new Date(y);

         // time difference
         var timeDiff = Math.abs(dateSecond.getTime() - dateFirst.getTime());

         // days difference
         var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

         // difference
         alert (diffDays);
      </script>
</head>
<body>
    
