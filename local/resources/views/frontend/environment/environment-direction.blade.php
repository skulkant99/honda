<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')

</head>
<body>
<div class="container-fluid environment_page overflow-container">
    @include('../frontend.inc_menu')
    <section class="row">
        <figure class="col-12 banner_inside" data-aos="fade">
            <img src="images/img_environ_direction.jpg">
        </figure>
    </section>
    <section class="row bg_ev_direction" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-12 bg_w_direction" data-aos="fade-down" data-aos-delay="200">
                    <?php echo $direc->direc_detail ?>
                    {{-- {{$direc->direc_detail}} --}}
                    {{-- <hgroup>
                        <h2>Honda</h2>
                        <h1>Direction</h1>
                    </hgroup>
                    <p><strong>Reducing environmental impacts at every stage in the product lifecycle so as to achieve a livable, sustainable society.</strong></p>

<p>Since the 1960s, Honda has been actively striving to resolve environmental issues. In the 1970s, we developed the low-pollution Compound Vortex Controlled Combustion (CVCC) engine, which could reduce emissions of carbon monoxide, hydrocarbons and nitrogen oxide (NOx). This enabled Honda to be the world’s first automaker in compliance with the most stringent automobile emissions regulations in the world during that period – the U.S. Clean Air Act (Muskie Act).</p>

<p>In 1992, we formulated Honda Environment Statement, which outlined our corporate stance towards the reduction of environmental impacts at every stage of our products’ lifecycles, which include the design, development and production stages. This statement also forms the guidelines for all our environmental initiatives.</p>

<p>In addition, to further promote these environmental initiatives and to strive to be a company society wants to exist, we established the Honda Environmental and Safety Vision in 2010. As such, Honda’s operational sites around the world endeavor to alleviate environmental impacts, including the reduction of greenhouse gas emissions that are regarded as the cause of climate change, and the use of energy and resources. Both are closely linked with our products and corporate activities, focusing on our main aim of realizing the joy and freedom of mobility, and creating a sustainable society where people can enjoy life.</p> --}}


                </div>
            </div>
        </div>
    </section>
    @include('../frontend.inc_footer')
</div>
    
<script>
$(document).ready(function(){
    $('.menu_environment li:nth-child(2)').addClass('active');
});
</script>

</body>
</html>