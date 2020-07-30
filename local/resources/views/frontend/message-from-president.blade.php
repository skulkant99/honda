<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('frontend.inc_header')
</head>
<body>
<div class="container-fluid">
    @include('frontend.inc_menu')
    <section class="row wrap_banner_ceo" data-aos="fade-down">
    	<div class="container wrap_ceo_banner_text">
            <div class="row">
                <figure class="col-12 col-md-4">
                    <img src="images/ceo_img.png">
                </figure>
                <hgroup class="col-12 col-md-8 ceo_banner_text" data-aos="fade-down" data-aos-delay="200">
                    <h2>MESSAGE</h2>
                    <h1>{{$sHist->his_pos}}</h1>
                    <h3>{{$sHist->his_name}}</h3>
                    <p>{{$sHist->his_posde}}</p>
                </hgroup>
            </div>
        </div>
    </section>
    <section class="row" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text_ceo_bottom">
                    <br>
                    <?php 
                        echo $sHist->his_desc;
                    ?>
                    {{-- <h4>Dear readers,</h4>
                    <p>Welcome to the renewed Asia & Oceania Sustainability Website. This website has been updated with Honda’s activities continuing from the previous year and new activities begun in 2016 in the areas of the environment, safety and philanthropy in the Asia & Oceania (A&O) Region.</p>
                    <p>As the world’s No.1 engine maker, Honda has been pursuing various initiatives to provide appealing products and services that bring “joy” to our customers in all aspects of our business, including motorcycles, automobiles, and power products. This year, we have introduced the Honda “2030 Vision” as the direction that will guide Honda toward the future. In order for us to “serve people worldwide with the “joy of expanding their life’s potential” as stated in the vision, we will continue to provide safe and environmentally-friendly products and improve our technologies and activities to realize a carbon-free and a collision-free mobile society.</p>
                    <p>Toward a carbon-free society, Honda has set an environmental target of reducing CO2 emissions by 50% by 2050, compared to 2000 levels. In line with this global direction, Honda held its first Global Green Conference with Honda associates representing the six regional operations and shared new environmentally-sustainable activities that lead to the reduction of CO2 emissions and minimize impact on the global environment. These new activities set benchmarks for Honda to pursue further CO2 reduction activities across its operations globally. All Honda production operations in the A&O region have been working proactively to contribute to such global activities.</p>
                    <p>To realize a collision-free mobile society, Honda expanded the application of “Honda SENSING”, Honda’s safety and driver-assistive technologies, to support safe and comfortable driving in models such as Civic and CR-V. We also continuously promote our traffic safety education programs to expand safety driver training in society through safety driving training centers across the A&O region. In 2016, we launched several Honda Safety Driving Center (HSDC) in Thailand (in Chiang Mai and Phuket) and Vietnam (in Vinh Phuc).</p>
                    <p>Besides the education programs, we also initiated a 4-year in-depth analysis of the cause of accidents in Thailand as a first pilot study which will help improve road safety and contribute to the reduction of road traffic fatalities. We aim to contribute and extend this contribution in the future to other countries in Asia as well. </p>
                    <p>In the area of philanthropy, Honda strives to contribute to society with various social activities in areas such as education, community, the environment, and traffic safety.  We pursue the support of initiatives that reflect local circumstances and ensure that our activities align to the company’s principles and direction.</p>
                    <p>Driven by dreams, we will continue creating new value, by providing new products and services that bring joy to customers, striving to “be a company that society wants to exist” in the Asia & Oceania region.</p> --}}
                </div>
            </div>
        </div>
    </section>
    @include('frontend.inc_footer')
</div>

</body>
</html>