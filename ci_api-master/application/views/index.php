<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-md-6">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    กราฟแท่ง
                    </button>
                </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php
                            $labels=array('Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange');
                            $data=array(12, 19, 3, 5, 2, 3);
                        ?>
                            <canvas id="bar_chart" width="100" height="50"></canvas>
                            <script>
                            var ctx = document.getElementById('bar_chart').getContext('2d');
                            var bar_chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: <?=json_encode($labels)?>,
                                    datasets: [{
                                        label: '# of Votes',
                                        data: <?=json_encode($data)?>,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </div>    


    <div class="col-md-6">
        <div class="accordion" id="accordionExamplePie">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOnePie" aria-expanded="true" aria-controls="collapseOne">
                    กราฟวงกลม
                    </button>
                </h2>
                </div>
                <div id="collapseOnePie" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExamplePie">
                    <div class="card-body">
                            <canvas id="pie_chart" width="100" height="50"></canvas>
                            <script>
                            var ctx = document.getElementById('pie_chart').getContext('2d');
                            var pie_chart = new Chart(ctx, {
                                type: 'pie',
                                data: {
                                    labels: <?=json_encode($labels)?>,
                                    datasets: [{
                                        label: '# of Votes',
                                        data: <?=json_encode($data)?>,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <div class="col-md-6">
        <div class="accordion" id="accordionExampleLine">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOneLine" aria-expanded="true" aria-controls="collapseOne">
                    กราฟเส้น
                    </button>
                </h2>
                </div>
                <div id="collapseOneLine" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExampleLine">
                    <div class="card-body">
                            <canvas id="line_line" width="100" height="50"></canvas>
                            <script>
                            var ctx = document.getElementById('line_line').getContext('2d');
                            var line_line = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: <?=json_encode($labels)?>,
                                    datasets: [{
                                        label: '# of Votes',
                                        data: <?=json_encode($data)?>,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </div>    


    <div class="col-md-6">
        <div class="accordion" id="accordionExampleLine2">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOneLine2" aria-expanded="true" aria-controls="collapseOne">
                    กราฟเส้น2
                    </button>
                </h2>
                </div>
                <div id="collapseOneLine2" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExampleLine2">
                    <div class="card-body">
                            <div id="line_line2" style="width:100%; height:250px;"></div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var myChart = Highcharts.chart('line_line2', {
                                        chart: {
                                            type: 'line'
                                        },
                                        title: {
                                            text: 'Fruit Consumption'
                                        },
                                        xAxis: {
                                            categories: ['Apples', 'Bananas', 'Oranges']
                                        },
                                        yAxis: {
                                            title: {
                                                text: 'Fruit eaten'
                                            }
                                        },
                                        series: [{
                                            name: 'Jane',
                                            data: [1, 0, 4]
                                        }, {
                                            name: 'John',
                                            data: [5, 7, 3]
                                        }]
                                    });
                                });
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </div>    


</div>
