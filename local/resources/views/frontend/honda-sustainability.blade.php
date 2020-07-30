<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('frontend.inc_header')
</head>
<body>
<div class="container-fluid overflow-container">
     @include('frontend.inc_menu')
    <section class="row bg_hondasustain">
        <div class="container bg_hondasustain_w" data-aos="fade-down" data-aos-delay="200">
            <div class="row">
                <div class="col-12 evtripplezero_head">
                    <hgroup>
                        <h2>Honda’s</h2>
                        <h1>Sustainability</h1>
                        <?php echo $sSus->sus_detail; ?>
                        {{-- <p>The Honda Philosophy forms the values shared by all Honda Group companies and all of their associates and is the basis for Honda’s corporate activities and the associates’ behavior and decision-making. In order to achieve both the creation of growth opportunities for the Company and a sustainable society, Honda has set striving to be “a company that society wants to exist” as its direction for the 21st century. It is also advancing initiatives known as “Creating the Joys,” “Expanding the Joys” and “Ensuring the Joys for the Next Generation.” The “2030 Vision” is one milestone indicating in concrete terms the direction Honda ought to take toward realizing these objectives. For Honda’s sustainability, it is important to both meet stakeholders’ expectations and needs by providing products and services of value, fulfill its corporate social responsibility such as by considering the impact on the environment and society, as well as to contribute to the resolution of social issues through its business activities. To this end, Honda is devising medium- and long-term strategies that consider the roles it should fulfill and contributions it should makel impact.</p> --}}
                    </hgroup>
                </div>
                <hgroup class="col-12 hs_vision">
                    <h3>2030 VISION</h3>
                    <h1><?php echo $sSus->sus_text1; ?></h1>
                    <h2><?php echo $sSus->sus_text2; ?></h2>
                </hgroup>
                <div class="col-12 hs_growththrough"><h1><?php echo $sSus->sus_text3; ?></h1></div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 item_hs">
                    <h1><?php echo $sSus2_1->sus2_topic; ?></h1>
                    <h2><?php echo $sSus2_1->sus2_text1; ?></h2>
                    <?php echo $sSus2_1->sus2_text2; ?>
                    {{-- <p>Provide People the joy and freedom of mobility</p>
                    <p>Provide People the joy of making their lives better</p> --}}
                </div>
                <div class="col-12 col-md-4 item_hs">
                    <h1><?php echo $sSus2_2->sus2_topic; ?></h1>
                    <h2><?php echo $sSus2_2->sus2_text1; ?></h2>
                    <?php echo $sSus2_2->sus2_text2; ?>
                    {{-- <p>Provide the ideal products and services that fullill societies expections and meet individual needs</p> --}}
                </div>
                <div class="col-12 col-md-4 item_hs">
                    <h1><?php echo $sSus2_3->sus2_topic; ?></h1>
                    <h2><?php echo $sSus2_3->sus2_text1; ?></h2>
                    <?php echo $sSus2_3->sus2_text2; ?>
                    {{-- <p>Lead efforts to realize a carbon-free society</p>
                    <p>Lead efforts to realize a collision-free mobile society</p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-12 hs_textbottom">
                    <p>Business view point to focus on: Effective utilization of corporate resources</p>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.inc_footer')
</div>
    
<script>
$(document).ready(function(){
    $('.bg_hondasustain').css('min-height', $(window).height() - $('footer').height());
    $('.bg_hondasustain').css('padding-top', $('.topbar').height());
});
</script>

</body>
</html>