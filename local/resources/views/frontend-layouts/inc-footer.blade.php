<link rel="stylesheet" href="{{ asset('asset/frontend/css/inc_footer.css') }}">

<section class="row">
    <div class="col wrap_footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap_newsletter">
                        <input placeholder="Email Address"><button>subscribe now</button>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-8">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="link_footer"><a href="about.php">About Puri Company</a></div>
                            <div class="footer_submenu">
                                <div class="link_footer"><a href="payment.php">Payment</a></div>
                                <div class="link_footer"><a href="returnsandexchanges.php">Returns & Exchanges</a></div>
                                <div class="link_footer"><a href="shipping.php">Shipping</a></div>
                                <div class="link_footer"><a href="termsandcondition.php">Terms & Condition</a></div>
                                <div class="link_footer"><a href="firstmember_benefits.php">PAÑPURI First</a></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="link_footer"><a href="store_locator.php">Store Locator</a></div>
                            <div class="link_footer"><a href="termsofuse.php">Terms of Use</a></div>
                            <div class="link_footer"><a href="cookies.php">Cookies Policy</a></div>
                            <div class="link_footer"><a href="policy.php">Privacy Policy</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 footer_mb-nopadleft">
                    <div class="wrap_social">
                        <div class="link_footer"><span>Connect With Us</span></div>
                        <div class="footer_social">
                            <a href="https://www.facebook.com/panpuriofficial" target="_blank"><img src="{{ asset('asset/frontend/images/Icon03-fb.svg') }}" alt=""></a>
                            <a href="https://www.instagram.com/panpuriofficial/" target="_blank"><img src="{{ asset('asset/frontend/images/Icon03-ig.svg') }}" alt=""></a>
                            <a href="https://twitter.com/panpuriofficial" target="_blank"><img src="{{ asset('asset/frontend/images/Icon04-tw.svg') }}" alt=""></a>
                            <a href="https://www.weibo.com/panpuriofficial" target="_blank"><img src="{{ asset('asset/frontend/images/Icon05-weibo.svg') }}" alt=""></a>
                            <a href="https://www.youtube.com/channel/UCbxpOyY0xniThwLGWxnp-xA" target="_blank"><img src="{{ asset('asset/frontend/images/Icon06-yt.svg') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="wrap_customersupport">
                        <div class="link_footer"><span>Customer Support</span></div>
                        <div class="customer_icon footericon_phone"><img src="{{ asset('asset/frontend/images/icon_tel.svg') }}" alt=""> 02-253-5858 Ext.233 (Weekday 9am – 6pm)</div>
                        <div class="customer_icon footericon_mail"><img src="{{ asset('asset/frontend/images/email.svg') }}" alt=""> panpuri.eshopth@panpuri.com</div>
                        <div class="customer_icon footericon_line"><a href="http://line.me/ti/p/%40panpur" target="_blank"><img src="{{ asset('asset/frontend/images/icon-line.svg') }}" alt=""> @panpuri</a></div>
                        <div class="qrcode_line"><img src="{{ asset('asset/frontend/images/qr-code-line.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col footer_changelang">
                    Change Region :
                    <div class="lang_btn"><a data-fancybox data-src="#modal" href="javascript:;">Thailand</a>
                        <div style="display: none;" class="selectlang_popup" id="modal">
                          <h1>Choose your country or region.</h1>
                          <ul>
                              <li><a href="th">Thailand</a></li>
                              <li><a href="ch">China</a></li>
                              <li><a href="jp">Japan</a></li>
                              <li><a href="kr">South Korea</a></li>
                              <li><a href="fr">France</a></li>
                              <li><a href="en">International</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap_cc">
            <div class="row">
                <div class="col txt_cc">
                    COPYRIGHT © 2019 PAÑPURI. ALL RIGHTS RESERVED.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="row">
    <div class="col wrap_barmenu">
        <div class="row">
            <div class="col-3 menubar_footer">
                <a href="index.php" class="mb_menufooter"><img src="{{ asset('asset/frontend/images/IconEC-Home.svg') }}" class="svg" alt=""><div>Home</div></a>
            </div>
            <div class="col-3 menubar_footer">
                <a href="listing_products.php" class="mb_menufooter"><img src="{{ asset('asset/frontend/images/IconEC-Shop.svg') }}" class="svg" alt=""><div>Shop</div></a>
            </div>
            <div class="col-3 menubar_footer">
                <a href="https://www.panpuri.com/wellness" target="_blank" class="mb_menufooter"><img src="{{ asset('asset/frontend/images/icon-massage.svg') }}" class="svg" alt=""><div>Book</div></a>
            </div>
            <div class="col-3 menubar_footer">
                <a href="" class="mb_menufooter btn_showsocial"><img src="{{ asset('asset/frontend/images/IconEC-Connect.svg') }}" class="svg" alt=""><div>Connect</div></a>
                <div class="wrap_selectsocial">
                    <a href=""><img src="{{ asset('asset/frontend/images/icon-skfooter-fb.svg') }}" alt=""></a>
                    <a href="http://line.me/ti/p/%40panpur"><img src="{{ asset('asset/frontend/images/icon-skfooter-line.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('asset/frontend/images/icon-skfooter-mail.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('asset/frontend/images/icon-skfooter-call.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    $('.btn_showsocial').click(function (event) {
        $(".wrap_selectsocial").slideToggle();
        event.preventDefault();
    });

    $( '.lang_btn span' ).click(function (event) {
        $(".dropdown_lang").slideToggle();
        event.preventDefault();
    });
    $( '.dropdown_lang div' ).click(function (event) {
        $(".dropdown_lang").slideUp();
        $('.dropdown_lang div').removeClass('active');
        $(this).addClass('active');
        $( '.lang_btn span' ).html($(this).html());
        event.preventDefault();
    });
</script>


<script>
$(document).ready(function(){
    $(function(){
        jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Check if the viewport is set, else we gonna set it if we can.
                if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }

                // Replace image with new SVG
                $img.replaceWith($svg);

                $( '.mapoceania .svg path' ).click(function (event) {
                    var pathnation = $(this).attr('id');

                });

            }, 'xml');

        });
    });

});
</script>
