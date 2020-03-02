<div class="container"><br>
    <h1>แจ้งปัญหา</h1>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">ชื่อปัญหา</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">รายละเอียด</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">หมวดปัญหา</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>อุบัติเหตุ</option>
                <option>รถยนต์เสีย</option>

            </select>
        </div>

        <style>
            /* #map {
                height: 60%;
            }

            html,
            body {
                height: 100%;
                margin: 0;
                padding: 0;
            } */
        </style>
        <!-- <div class="col-md-6 mb-4">

            <div class="card card-cascade narrower">
                <div id="map"></div>
            </div>
        </div> -->


        <?php 
        
        // header('Content-Type: application/json');
        // $objConnect = mysqli_connect("45.77.254.49", "admin_touch", "touch1234", "admin_GDragon");

        // $strSQL = "SELECT * FROM Problem";
        // $objQuery = mysqli_query($strSQL);
        // $resultArray = array();
        // while($obResult = mysqli_fetch_assoc($objQuery))
        // {
        //     array_push($resultArray,$obResult);
        // }
        // echo json_encode($resultArray);
        
        ?>


        <!-- <script>
            function initMap() {
                var mapOptions = {
                    center:{
                        lat: 13.762184,
                        lng: 100.551387
                    },
                    zoom: 10,
                }

                var maps = new google.maps.Map(document.getElementById("map"),mapOptions);

                infoWindow = new google.maps.InfoWindow;

                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found. lat: ' + position.coords.latitude + ', lng: ' + position.coords.longitude + ' ');
                    infoWindow.open(maps);
                    map.setCenter(pos);

                    }, function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\'t support geolocation.');
                infoWindow.open(map);
            }
        </script> -->
        <!-- <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDm99OvTNgTOhiwkH-c7f4lJNLP5Dewhfg&callback=initMap"
            async defer></script> -->

        <button type="submit" class="btn btn-primary">ยืนยันการแจ้งปัญหา</button>
    </form>
</div>