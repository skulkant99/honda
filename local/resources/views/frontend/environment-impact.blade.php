<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
<?php require('inc_header.php'); ?>
<script src="js/Chart.min.js"></script>
</head>
<body>
<div class="container-fluid environment_page overflow-container">
    <?php require('inc_menu.php'); ?>
    <section class="row">
        <figure class="col-12 banner_inside" data-aos="fade-down">
            <img src="images/banner_environmentimpact.jpg">
            <figcaption class="container top_evr_impact">
                <div class="row">
                    <div class="col-12">
                        <h1>ENVIRONMENTAL IMPACT<br>IN ASIA AND OCEANIA REGION</h1>
                        <p>We strive to make our production facilities in Asia and Oceania the pride of the communities in which they operate. We are also working to conserve energy, minimize waste, and reduce environmental impacts in other areas.</p>
                        <p>
                            <strong>Note:</strong><br>
⦁	Historical figures have been adjusted to reflect an increase in the number of companies covered and a more detailed analysis of the data.<br>
⦁	Totals with more than three digits have been rounded to three significant digits.
                        </p>
                        <div class="wrap_btn_topevrimpact">
                            <a href="#energyconsumption"><img class="svg" src="images/green-energy.svg">Energy consumption</a><a href="#greenhousegasemissions"><img class="svg" src="images/co2.svg">Greenhouse gas emissions</a><a href="#waterconsumptionanddischarged"><img class="svg" src="images/water.svg"><span>Water consumption /<br> Wastewater discharged</span></a><a href="#wastegeneratedlandfilled"><img class="svg" src="images/garbage-bag.svg">Waste generated / landfilled</a>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </section>
    <section class="row bg_evimpact energyconsumption">
        <div class="container">
            <div class="row">
                <div class="col-12 detail_evimpact">
                    <h1><img src="images/green-energy.svg">Energy consumption</h1>
                    <div>
                        <p>Companies covered: All consolidated subsidiaries and affiliated companies of the Honda Group in Asia & Oceania region</p>
                        <div><i class="fas fa-chevron-right"></i>Purchased electricity has been converted to joules using the international standard 3.6 GJ/MWh.<br>
                        <i class="fas fa-chevron-right"></i>Calculations based mainly on energy consumed by stationary sources.<br>
                        <i class="fas fa-chevron-right"></i>A terajoule (TJ) is a unit of energy, “tera” meaning 1012</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>Indirect energy consumption</h1>
                    <canvas id="chart-energy01"></canvas>
                </div>
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>direct energy consumption</h1>
                    <canvas id="chart-energy02"></canvas>
                </div>
            </div>
        </div>
    </section>
    <section class="row bg_evimpact greenhousegasemissions">
        <div class="container" data-aos="fade-down" data-aos-delay="200">
            <div class="row">
                <div class="col-12 detail_evimpact">
                    <h1><img src="images/co2.svg">Greenhouse gas emissions</h1>
                    <div>
                        <p>Companies covered: All consolidated subsidiaries and affiliated companies of the Honda Group in Asia & Oceania region</p>
                        <div><i class="fas fa-chevron-right"></i>For information about greenhouse gas calculation methods, see the MOE/ METI (2004) “Greenhouse Gas Emissions Calculation and Reporting Manual, ver.3.4” and WRI/WBCSD (2004) “The Greenhouse Gas Protocol (Revised Edition).”<br>
                        <i class="fas fa-chevron-right"></i>CO2 emissions from purchased electricity are calculated for each utility based on the latest emission factors.<br>
                        <i class="fas fa-chevron-right"></i>Calculations based mainly on emissions from stationary sources.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>Direct emissions</h1>
                    <canvas id="chart-greenhouse01"></canvas>
                </div>
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>Indirect emissions</h1>
                    <canvas id="chart-greenhouse02"></canvas>
                </div>
            </div>
        </div>
    </section>
    <section class="row bg_evimpact waterconsumptionanddischarged">
        <div class="container" data-aos="fade-down" data-aos-delay="200">
            <div class="row">
                <div class="col-12 detail_evimpact">
                    <h1><img src="images/water.svg">Water consumption / Wastewater discharged</h1>
                    <div>
                        <p>Companies covered: All consolidated subsidiaries and affiliated companies of the Honda Group in Asia & Oceania region</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>Water use</h1>
                    <canvas id="chart-water01"></canvas>
                </div>
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>Wastewarter volume</h1>
                    <canvas id="chart-water02"></canvas>
                </div>
            </div>
        </div>
    </section>
    <section class="row bg_evimpact wastegeneratedlandfilled">
        <div class="container" data-aos="fade-down" data-aos-delay="200">
            <div class="row">
                <div class="col-12 detail_evimpact">
                    <h1><img src="images/garbage-bag.svg">Waste generated / landfilled</h1>
                    <div>
                        <p>Companies covered: All consolidated subsidiaries and affiliated companies of the Honda Group in Asia & Oceania region.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>Waste landfilled</h1>
                    <canvas id="chart-waste01"></canvas>
                </div>
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>Total waste generated</h1>
                    <canvas id="chart-waste02"></canvas>
                </div>
            </div>
        </div>
    </section>
    <?php require('inc_footer.php'); ?>
</div>
    
<script>
    /*ENERGY*/
    var configenergy01 = {
        type: 'bar',
        data: {
            datasets: [{
                data: [
                     5308, 
                     5151,
                     4230,
                     4512,
                     4728 
                ],
                backgroundColor: [
                    "#f3921d",
                    "#f6ae3f",
                    "#f05a28",
                    "#8dc047",
                    "#00a750",
                    "#00a69c"
                ],
                label: ''
            }],
            labels: [
                "2014",
                "2015",
                "2016",
                "2017",
                "2018"
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                callbacks: {
					label: function(tooltipItem, data) {
						var value = data.datasets[0].data[tooltipItem.index];
						value = value.toString();
						value = value.split(/(?=(?:...)*$)/);
						value = value.join(',');
						return value;
					}
			     }
              },
            legend: {
              display: false
            },
            fontFamily: " 'Roboto', 'Prompt', sans-serif ",
            title:{
                display:false
            },
            maintainAspectRatio: true,
            pieceLabel: {
              render: 'label',
              fontColor: ['black'],
              precision: 1,
                position: 'outside'
            },
            scales: {
                xAxes: [{
                    display: true,
                    barPercentage: 0.8,
                    gridLines: {
                        color: "#eee"
                    },
                    ticks: {
                      min: 0,
                        fontSize: 14,
                        fontColor: '#000'
                    },
                    scaleLabel: {
                    display: false,
                    labelString: 'ปี',
                        fontSize: 13
                    }
                }],
                yAxes: [{
                    display: true,
                    //type: 'logarithmic',
                    ticks: {
                      min: 0,
                      stepSize: 2000,
                        fontSize: 14,
                        fontColor: '#000',
                        userCallback: function(value, index, values) {
                            value = value.toString();
                            value = value.split(/(?=(?:...)*$)/);
                            value = value.join(',');
                            return value;
                        }
                    },
                    gridLines: {
                        color: "#ccc"
                    },
                    scaleLabel: {
                    display: true,
                    labelString: 'TJ',
                        fontSize: 14,
                        fontColor: '#000'
                    }
                }]
            },
        }
    };
    
    var configenergy02 = {
        type: 'bar',
        data: {
            datasets: [{
                data: [
                     5103, 
                     5507, 
                     5979, 
                     6080, 
                     6031 
                ],
                backgroundColor: [
                    "#f3921d",
                    "#f6ae3f",
                    "#f05a28",
                    "#8dc047",
                    "#00a750",
                    "#00a69c"
                ],
                label: ''
            }],
            labels: [
                "2014",
                "2015",
                "2016",
                "2017",
                "2018"
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                callbacks: {
					label: function(tooltipItem, data) {
						var value = data.datasets[0].data[tooltipItem.index];
						value = value.toString();
						value = value.split(/(?=(?:...)*$)/);
						value = value.join(',');
						return value;
					}
			     }
              },
            legend: {
              display: false
            },
            fontFamily: " 'Roboto', 'Prompt', sans-serif ",
            title:{
                display:false
            },
            maintainAspectRatio: true,
            pieceLabel: {
              render: 'label',
              fontColor: ['black'],
              precision: 1,
                position: 'outside'
            },
            scales: {
                xAxes: [{
                    display: true,
                    barPercentage: 0.8,
                    gridLines: {
                        color: "#eee"
                    },
                    ticks: {
                      min: 0,
                        fontSize: 14,
                        fontColor: '#000'
                    },
                    scaleLabel: {
                    display: false,
                    labelString: 'ปี',
                        fontSize: 13
                    }
                }],
                yAxes: [{
                    display: true,
                    //type: 'logarithmic',
                    ticks: {
                      min: 0,
                      stepSize: 2000,
                        fontSize: 14,
                        fontColor: '#000',
                        userCallback: function(value, index, values) {
                            value = value.toString();
                            value = value.split(/(?=(?:...)*$)/);
                            value = value.join(',');
                            return value;
                        }
                    },
                    gridLines: {
                        color: "#ccc"
                    },
                    scaleLabel: {
                    display: true,
                    labelString: 'TJ',
                        fontSize: 14,
                        fontColor: '#000'
                    }
                }]
            },
        }
    };
    
    /*GEENHOUSE*/
    var configgreenhouse01 = {
        type: 'bar',
        data: {
            datasets: [{
                data: [
                     324,
                     321,
                     274, 
                     287, 
                     304 
                ],
                backgroundColor: [
                    "#cc911c",
                    "#ff8d3d",
                    "#ffc63d",
                    "#7cffe5",
                    "#1ccc77"
                ],
                label: ''
            }],
            labels: [
                "2014",
                "2015",
                "2016",
                "2017",
                "2018"
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                callbacks: {
					label: function(tooltipItem, data) {
						var value = data.datasets[0].data[tooltipItem.index];
						value = value.toString();
						value = value.split(/(?=(?:...)*$)/);
						value = value.join(',');
						return value;
					}
			     }
              },
            legend: {
              display: false
            },
            fontFamily: " 'Roboto', 'Prompt', sans-serif ",
            title:{
                display:false
            },
            maintainAspectRatio: true,
            pieceLabel: {
              render: 'label',
              fontColor: ['black'],
              precision: 1,
                position: 'outside'
            },
            scales: {
                xAxes: [{
                    display: true,
                    barPercentage: 0.8,
                    gridLines: {
                        color: "#333"
                    },
                    ticks: {
                      min: 0,
                        fontSize: 14,
                        fontColor: '#FFF'
                    },
                    scaleLabel: {
                    display: false,
                    labelString: 'ปี',
                        fontSize: 13
                    }
                }],
                yAxes: [{
                    display: true,
                    //type: 'logarithmic',
                    ticks: {
                      min: 0,
                      stepSize: 100,
                        fontSize: 14,
                        fontColor: '#FFF',
                        userCallback: function(value, index, values) {
                            value = value.toString();
                            value = value.split(/(?=(?:...)*$)/);
                            value = value.join(',');
                            return value;
                        }
                    },
                    gridLines: {
                        color: "#adabac"
                    },
                    scaleLabel: {
                    display: true,
                    labelString: '1,000t-CO2 equivalent',
                        fontSize: 14,
                        fontColor: '#FFF'
                    }
                }]
            },
        }
    };
    
    var configgreenhouse02 = {
        type: 'bar',
        data: {
            datasets: [{
                data: [
                     983,
                    1052,
                     1118, 
                     1076, 
                     1034 
                ],
                backgroundColor: [
                    "#cc911c",
                    "#ff8d3d",
                    "#ffc63d",
                    "#7cffe5",
                    "#1ccc77"
                ],
                label: ''
            }],
            labels: [
                "2014",
                "2015",
                "2016",
                "2017",
                "2018"
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                callbacks: {
					label: function(tooltipItem, data) {
						var value = data.datasets[0].data[tooltipItem.index];
						value = value.toString();
						value = value.split(/(?=(?:...)*$)/);
						value = value.join(',');
						return value;
					}
			     }
              },
            legend: {
              display: false
            },
            fontFamily: " 'Roboto', 'Prompt', sans-serif ",
            title:{
                display:false
            },
            maintainAspectRatio: true,
            pieceLabel: {
              render: 'label',
              fontColor: ['black'],
              precision: 1,
                position: 'outside'
            },
            scales: {
                xAxes: [{
                    display: true,
                    barPercentage: 0.8,
                    gridLines: {
                        color: "#333"
                    },
                    ticks: {
                      min: 0,
                        fontSize: 14,
                        fontColor: '#FFF'
                    },
                    scaleLabel: {
                    display: false,
                    labelString: 'ปี',
                        fontSize: 13
                    }
                }],
                yAxes: [{
                    display: true,
                    //type: 'logarithmic',
                    ticks: {
                      min: 0,
                      stepSize: 300,
                        fontSize: 14,
                        fontColor: '#FFF',
                        userCallback: function(value, index, values) {
                            value = value.toString();
                            value = value.split(/(?=(?:...)*$)/);
                            value = value.join(',');
                            return value;
                        }
                    },
                    gridLines: {
                        color: "#adabac"
                    },
                    scaleLabel: {
                    display: true,
                    labelString: '1,000t-CO2 equivalent',
                        fontSize: 14,
                        fontColor: '#FFF'
                    }
                }]
            },
        }
    };
    
    /*Water*/
    var configwater01 = {
        type: 'bar',
        data: {
            datasets: [{
                data: [
                     10093,
                    10873,
                    11056, 
                    11352, 
                    11412
                ],
                backgroundColor: [
                    "#4b67de",
                    "#6075cd",
                    "#6098cd",
                    "#84bbee",
                    "#95c6f4"
                ],
                label: ''
            }],
            labels: [
                "2014",
                "2015",
                "2016",
                "2017",
                "2018"
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                callbacks: {
					label: function(tooltipItem, data) {
						var value = data.datasets[0].data[tooltipItem.index];
						value = value.toString();
						value = value.split(/(?=(?:...)*$)/);
						value = value.join(',');
						return value;
					}
			     }
              },
            legend: {
              display: false
            },
            fontFamily: " 'Roboto', 'Prompt', sans-serif ",
            title:{
                display:false
            },
            maintainAspectRatio: true,
            pieceLabel: {
              render: 'label',
              fontColor: ['black'],
              precision: 1,
                position: 'outside'
            },
            scales: {
                xAxes: [{
                    display: true,
                    barPercentage: 0.8,
                    gridLines: {
                        color: "#eee"
                    },
                    ticks: {
                      min: 0,
                        fontSize: 14,
                        fontColor: '#000'
                    },
                    scaleLabel: {
                    display: false,
                    labelString: 'ปี',
                        fontSize: 13
                    }
                }],
                yAxes: [{
                    display: true,
                    //type: 'logarithmic',
                    ticks: {
                      min: 0,
                      stepSize: 5000,
                        fontSize: 14,
                        fontColor: '#000',
                        userCallback: function(value, index, values) {
                            value = value.toString();
                            value = value.split(/(?=(?:...)*$)/);
                            value = value.join(',');
                            return value;
                        }
                    },
                    gridLines: {
                        color: "#ccc"
                    },
                    scaleLabel: {
                    display: true,
                    labelString: '1,000m3',
                        fontSize: 14,
                        fontColor: '#000'
                    }
                }]
            },
        }
    };
    
    var configwater02 = {
        type: 'bar',
        data: {
            datasets: [{
                data: [
                     5024,
                     5391,
                     5171,
                     5165,
                     5434 
                ],
                backgroundColor: [
                    "#4b67de",
                    "#6075cd",
                    "#6098cd",
                    "#84bbee",
                    "#95c6f4"
                ],
                label: ''
            }],
            labels: [
                "2014",
                "2015",
                "2016",
                "2017",
                "2018"
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                callbacks: {
					label: function(tooltipItem, data) {
						var value = data.datasets[0].data[tooltipItem.index];
						value = value.toString();
						value = value.split(/(?=(?:...)*$)/);
						value = value.join(',');
						return value;
					}
			     }
              },
            legend: {
              display: false
            },
            fontFamily: " 'Roboto', 'Prompt', sans-serif ",
            title:{
                display:false
            },
            maintainAspectRatio: true,
            pieceLabel: {
              render: 'label',
              fontColor: ['black'],
              precision: 1,
                position: 'outside'
            },
            scales: {
                xAxes: [{
                    display: true,
                    barPercentage: 0.8,
                    gridLines: {
                        color: "#eee"
                    },
                    ticks: {
                      min: 0,
                        fontSize: 14,
                        fontColor: '#000'
                    },
                    scaleLabel: {
                    display: false,
                    labelString: 'ปี',
                        fontSize: 13
                    }
                }],
                yAxes: [{
                    display: true,
                    //type: 'logarithmic',
                    ticks: {
                      min: 0,
                      stepSize: 3000,
                        fontSize: 14,
                        fontColor: '#000',
                        userCallback: function(value, index, values) {
                            value = value.toString();
                            value = value.split(/(?=(?:...)*$)/);
                            value = value.join(',');
                            return value;
                        }
                    },
                    gridLines: {
                        color: "#ccc"
                    },
                    scaleLabel: {
                    display: true,
                    labelString: '1,000m3',
                        fontSize: 14,
                        fontColor: '#000'
                    }
                }]
            },
        }
    };
    
    /*Waste*/
    var configwaste01 = {
        type: 'bar',
        data: {
            datasets: [{
                data: [
                    3.72,
                     15.40,
                     8.41,
                     9.74,
                     8.86 
                ],
                backgroundColor: [
                    "#003056",
                    "#024f87",
                    "#116b8d",
                    "#039fda",
                    "#4bdcbb"
                ],
                label: ''
            }],
            labels: [
                "2014",
                "2015",
                "2016",
                "2017",
                "2018"
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                callbacks: {
					label: function(tooltipItem, data) {
						var value = data.datasets[0].data[tooltipItem.index];
//						value = value.toString();
//						value = value.split(/(?=(?:...)*$)/);
//						value = value.join(',');
						return value;
					}
			     }
              },
            legend: {
              display: false
            },
            fontFamily: " 'Roboto', 'Prompt', sans-serif ",
            title:{
                display:false
            },
            maintainAspectRatio: true,
            pieceLabel: {
              render: 'label',
              fontColor: ['black'],
              precision: 1,
                position: 'outside'
            },
            scales: {
                xAxes: [{
                    display: true,
                    barPercentage: 0.8,
                    gridLines: {
                        color: "#333"
                    },
                    ticks: {
                      min: 0,
                        fontSize: 14,
                        fontColor: '#FFF'
                    },
                    scaleLabel: {
                    display: false,
                    labelString: 'ปี',
                        fontSize: 13
                    }
                }],
                yAxes: [{
                    display: true,
                    //type: 'logarithmic',
                    ticks: {
                      min: 0,
                      stepSize: 5,
                        fontSize: 14,
                        fontColor: '#FFF',
                        userCallback: function(value, index, values) {
                            value = value.toString();
                            value = value.split(/(?=(?:...)*$)/);
                            value = value.join(',');
                            return value;
                        }
                    },
                    gridLines: {
                        color: "#adabac"
                    },
                    scaleLabel: {
                    display: true,
                    labelString: '1,000t',
                        fontSize: 14,
                        fontColor: '#FFF'
                    }
                }]
            },
        }
    };
    
    var configwaste02 = {
        type: 'bar',
        data: {
            datasets: [{
                data: [
                     262,
 307,
 302,
 339,
 364 
                ],
                backgroundColor: [
                    "#003056",
                    "#024f87",
                    "#116b8d",
                    "#039fda",
                    "#4bdcbb"
                ],
                label: ''
            }],
            labels: [
                "2014",
                "2015",
                "2016",
                "2017",
                "2018"
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                callbacks: {
					label: function(tooltipItem, data) {
						var value = data.datasets[0].data[tooltipItem.index];
						//value = value.toString();
						//value = value.split(/(?=(?:...)*$)/);
						//value = value.join(',');
						return value;
					}
			     }
              },
            legend: {
              display: false
            },
            fontFamily: " 'Roboto', 'Prompt', sans-serif ",
            title:{
                display:false
            },
            maintainAspectRatio: true,
            pieceLabel: {
              render: 'label',
              fontColor: ['black'],
              precision: 1,
                position: 'outside'
            },
            scales: {
                xAxes: [{
                    display: true,
                    barPercentage: 0.8,
                    gridLines: {
                        color: "#333"
                    },
                    ticks: {
                      min: 0,
                        fontSize: 14,
                        fontColor: '#FFF'
                    },
                    scaleLabel: {
                    display: false,
                    labelString: 'ปี',
                        fontSize: 13
                    }
                }],
                yAxes: [{
                    display: true,
                    //type: 'logarithmic',
                    ticks: {
                      min: 0,
                      stepSize: 100,
                        fontSize: 14,
                        fontColor: '#FFF',
                        userCallback: function(value, index, values) {
                            value = value.toString();
                            value = value.split(/(?=(?:...)*$)/);
                            value = value.join(',');
                            return value;
                        }
                    },
                    gridLines: {
                        color: "#adabac"
                    },
                    scaleLabel: {
                    display: true,
                    labelString: '1,000t',
                        fontSize: 14,
                        fontColor: '#FFF'
                    }
                }]
            },
        }
    };

    window.onload = function() {
        var cteng1 = document.getElementById("chart-energy01").getContext("2d");
        window.myBar01 = new Chart(cteng1, configenergy01);
        var cteng2 = document.getElementById("chart-energy02").getContext("2d");
        window.myBar02 = new Chart(cteng2, configenergy02);
        var ctgh1 = document.getElementById("chart-greenhouse01").getContext("2d");
        window.myBar03 = new Chart(ctgh1, configgreenhouse01);
        var ctgh2 = document.getElementById("chart-greenhouse02").getContext("2d");
        window.myBar04 = new Chart(ctgh2, configgreenhouse02);
        var ctwt1 = document.getElementById("chart-water01").getContext("2d");
        window.myBar05 = new Chart(ctwt1, configwater01);
        var ctwt2 = document.getElementById("chart-water02").getContext("2d");
        window.myBar06 = new Chart(ctwt2, configwater02);
        var ctwa1 = document.getElementById("chart-waste01").getContext("2d");
        window.myBar05 = new Chart(ctwa1, configwaste01);
        var ctwa2 = document.getElementById("chart-waste02").getContext("2d");
        window.myBar06 = new Chart(ctwa2, configwaste02);
    };
</script>

<script>
$(document).ready(function(){
    if (Modernizr.mq('(max-width: 767px)')) {
        $('.bg_evimpact').css({
            //'min-height': $(window).height(),
            //'padding-top': $('.topbar').height() + 15             
        });
    } else{
        $('.bg_evimpact').css({
            'min-height': $(window).height(),
            'padding-top': $('.topbar').height() + 15             
        });
    }
    if(window.location.hash) {
        var evimpactlink = window.location.hash.substring(1);
        if (Modernizr.mq('(max-width: 767px)')) {
            $("html, body").animate({ scrollTop: $( "."+evimpactlink ).offset().top - $('.topbar').height() }, 1000);
        } else{
            $("html, body").animate({ scrollTop: $( "."+evimpactlink ).offset().top }, 1000);
        }
    }
    $('.wrap_btn_topevrimpact a').click(function (event) {
        var evimpactlink = $(this).attr('href').split('#')[1];
        if (Modernizr.mq('(max-width: 767px)')) {
            $("html, body").animate({ scrollTop: $( "."+evimpactlink ).offset().top - $('.topbar').height() }, 1000);
        } else{
            $("html, body").animate({ scrollTop: $( "."+evimpactlink ).offset().top }, 1000);
        }
    });
    $('.menu_environment li:nth-child(6)').addClass('active');
});
</script>

</body>
</html>