<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')
</head>
<body>
<div class="container-fluid csr_page overflow-container">
    @include('../frontend.inc_menu')
    <section class="row bg_csrsocailactivities" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12 head_csrsocailactivities">
                    <hgroup>
                        <h2>Honda</h2>
                        <h1><?php echo $sRow2->sc_topic; ?></h1>
                    </hgroup>
                    <?php echo $sRow2->sc_detail; ?>
                    {{-- <p>Since the Company was founded, Honda has sought to contribute to society and customers by creating quality products and technologies while coexisting harmoniously with the communities that 
host its operations. In the 1960s, while the Company was still in a period of early growth, Honda began to launch philanthropic initiatives designed to strengthen ties with local communities.</p>
                    <p>Currently, Honda undertakes various social activities in the six regions of the Company’s worldwide operations, aiming to share joy with people all around the world and to become a company 
society wants to exist. Honda also strives to support initiatives that reflect local circumstances in its corporate activities overseas. In order to be able to share joy, Honda will continue to pursue 
various social contribution activities while communicating with customers and local residents.
</p> --}}
                </div>
            </div>
        </div>
    </section>
    @include('../frontend.inc_footer')
</div>
    
<script>
$(document).ready(function(){
    $('.bg_csrsocailactivities').css('padding-top', $('.topbar').height()+50);
    $('.menu_csr li:nth-child(2)').addClass('active');
});
</script>

</body>
</html>