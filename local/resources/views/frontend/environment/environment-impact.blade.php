<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')

<script src="{{asset('frontend/js/Chart.min.js')}}"></script>
</head>
<body>
<div class="container-fluid environment_page overflow-container">
    @include('../frontend.inc_menu')
    <section class="row">
        <figure class="col-12 banner_inside" data-aos="fade-down">
            <img src="{{ asset('local/public/backend/environment_image') }}/{{$image->image}}">
            <figcaption class="container top_evr_impact">
                <div class="row">
                    <div class="col-12">
                        <h1>{{$detail_banner->header}}<br>{{$detail_banner->header2}}</h1>
                        <p>{!!($detail_banner->detail)!!}</p>
                    
                        <div class="wrap_btn_topevrimpact">
                            <a href="#energyconsumption"><img class="svg" src="images/green-energy.svg">{{$detail->topic_en}}</a><a href="#greenhousegasemissions"><img class="svg" src="images/co2.svg">{{$detail2->topic_en}}</a><a href="#waterconsumptionanddischarged"><img class="svg" src="images/water.svg"><span>{{$detail3->topic_en}}</span></a><a href="#wastegeneratedlandfilled"><img class="svg" src="images/garbage-bag.svg">{{$detail4->topic_en}}</a>
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
                    <h1><img src="{{ asset('images/green-energy.svg') }}">{{$detail->topic_en}}</h1>
                    <div>
                      {!!($detail->detail_en)!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>{{$detail->topicchart_en}}</h1>
                    <canvas id="chart-energy01"></canvas>
                </div>
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>{{$detail->topicchart2_en}}</h1>
                    <canvas id="chart-energy02"></canvas>
                </div>
            </div>
        </div>
    </section>
    <section class="row bg_evimpact greenhousegasemissions">
        <div class="container" data-aos="fade-down" data-aos-delay="200">
            <div class="row">
                <div class="col-12 detail_evimpact">
                    <h1><img src="images/co2.svg">{{$detail2->topic_en}}</h1>
                    <div>
              {!!($detail2->detail_en)!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>{{$detail2->topicchart_en}}</h1>
                    <canvas id="chart-greenhouse01"></canvas>
                </div>
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>{{$detail2->topicchart2_en}}</h1>
                    <canvas id="chart-greenhouse02"></canvas>
                </div>
            </div>
        </div>
    </section>
    <section class="row bg_evimpact waterconsumptionanddischarged">
        <div class="container" data-aos="fade-down" data-aos-delay="200">
            <div class="row">
                <div class="col-12 detail_evimpact">
                    <h1><img src="images/water.svg">{{$detail3->topic_en}}</h1>
                    <div>
                     {!!($detail3->detail_en)!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>{{$detail3->topicchart_en}}</h1>
                    <canvas id="chart-water01"></canvas>
                </div>
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>{{$detail3->topicchart2_en}}</h1>
                    <canvas id="chart-water02"></canvas>
                </div>
            </div>
        </div>
    </section>
    <section class="row bg_evimpact wastegeneratedlandfilled">
        <div class="container" data-aos="fade-down" data-aos-delay="200">
            <div class="row">
                <div class="col-12 detail_evimpact">
                    <h1><img src="images/garbage-bag.svg">{{$detail4->topic_en}}</h1>
                    <div>
                       {!!($detail4->detail_en)!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>{{$detail4->topicchart_en}}</h1>
                    <canvas id="chart-waste01"></canvas>
                </div>
                <div class="col-12 col-md-6 wrap_impactchart">
                    <h1>{{$detail4->topicchart2_en}}</h1>
                    <canvas id="chart-waste02"></canvas>
                </div>
            </div>
        </div>
    </section>
    @include('../frontend.inc_footer')
</div>
    
<script>
    /*ENERGY*/
    var configenergy01 = {
        type: 'bar',
        data: {
            datasets: [{
                data: [
                  @foreach($chart1 AS $r)
                    {{$r->chart_value}},
                 @endforeach
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
                @foreach($chart1 AS $r)
                    {{$r->year}},
                 @endforeach
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
                 @foreach($chart2 AS $r)
                    {{$r->chart_value}},
                 @endforeach
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
               @foreach($chart2 AS $r)
                    {{$r->year}},
                 @endforeach
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
                      @foreach($chart3 AS $r)
                    {{$r->chart_value}},
                 @endforeach
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
               @foreach($chart3 AS $r)
                    {{$r->year}},
                 @endforeach
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
                    @foreach($chart4 AS $r)
                    {{$r->chart_value}},
                 @endforeach
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
               @foreach($chart4 AS $r)
                    {{$r->year}},
                 @endforeach
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
                   @foreach($chart5 AS $r)
                    {{$r->chart_value}},
                 @endforeach
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
                @foreach($chart5 AS $r)
                    {{$r->year}},
                 @endforeach
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
                   @foreach($chart6 AS $r)
                    {{$r->chart_value}},
                 @endforeach
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
           @foreach($chart6 AS $r)
                    {{$r->year}},
                 @endforeach
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
                   @foreach($chart7 AS $r)
                    {{$r->chart_value}},
                 @endforeach
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
              @foreach($chart7 AS $r)
                    {{$r->year}},
                 @endforeach
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
                @foreach($chart8 AS $r)
                    {{$r->chart_value}},
                 @endforeach
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
                   @foreach($chart8 AS $r)
                    {{$r->year}},
                 @endforeach
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