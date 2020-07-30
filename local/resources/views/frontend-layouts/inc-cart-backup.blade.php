<style>
 .wrap_mainmenu2{
    position: fixed;
    top: 0px;
    right: 0;
    width: 500px;
    background-color: #FFF;
    height: 100%;
    z-index: 999;
    display: none;
     overflow-y: scroll;
	}
     .wrap_mainmenu2.loading{
         opacity: 0;
         z-index: -10;
         display: block;
     }
 .wrap_mainmenu_gift{
    position: fixed;
    top: 0px;
    right: 0;
    width: 500px;
    background-color: #FFF;
    height: 100%;
    z-index: 999;
    display: none;
	}
     .wrap_mainmenu_gift.loading{
         opacity: 0;
         z-index: -10;
         display: block;
     }
.mm_overlay2{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.8);
    display: none;
    z-index: 101;
}
.mm_overlay3{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.8);
    display: none;
    z-index: 101;
}
    .top_cart2{
        position: relative;
    }
.btn_close_mm{
    text-align: left;
    cursor: pointer;
    position: absolute;
    top: 20px;
    left: 30px;
    z-index: 9;
}
 .btn_close_mm img{
     width: 20px;
     height: auto;
     transform: rotate(180deg);
 }
.btn_close_mm2{
    text-align: left;
    cursor: pointer;
    position: absolute;
    top: 20px;
    left: 30px;
    z-index: 9;
}
 .btn_close_mm2 img{
     width: 20px;
     height: auto;
     transform: rotate(180deg);
 }
.cartopen_head{
        border-bottom: solid 1px #ddd;
        position: relative;
        padding-bottom: 5px;
        margin:0 30px;
    }
    .btn_filter{
        background-color: #d9d8d6;
        height: 40px;
        text-transform: uppercase;
        padding: 0 15px;
        font-size: 16px;
        line-height: 40px;
        position: relative;
        cursor: pointer;
        width: 100%;
        border: 0;
        text-align: left;
        font-weight: normal;
    }
    .btn_filter:before{
        content: "";
        background-image: url(images/icon_arrowdown.svg);
        background-size: 100%;
        width: 15px;
        height: 15px;
        position: absolute;
        top: 12px;
        right: 15px;
    }
    .title_cartopen2{
        text-align: center;
        text-transform: uppercase;
        font-size: 24px;
        vertical-align: top;
        padding: 25px 0 10px;
        position: relative;
    }
    .inccart{
        position: relative;
    }
    .inccart:before{
        content: "";
        background-image: url(images/Icon02-bag.svg);
        background-size: 100%;
        width: 30px;
        height: 30px;
        position: absolute;
        top: 25px;
        right: 0;
    }
    .mCSB_scrollTools .mCSB_draggerRail{
            background: rgba(0,0,0,0.1);
        }
       .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, .wrap_itembasket .mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar, .wrap_itembasket .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar{
            background-color: #000;
        }
    .dropdown-menu{
        width: 100%;
        box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.05);
        border: 0;
        border-radius: 0;
        padding: 0 15px 5px;
    }
    .dropdown-menu a{
        border-bottom: 1px solid #ddd;
        font-size: 15px;
        color: #333;
        padding: 7px 0;
    }
    .dropdown-menu a:last-child{
        border-bottom: 0;
    }
    .wrap_itembasket > .mCSB_inside > .mCSB_container{
        margin-right: 0;
    }
    .bottom_cart2{
        padding-left: 15px;
        padding-right: 15px;
    }
    .mm_opened2{
        position: fixed;
    }
/*
    .wrap_mainmenu2 .mCSB_inside > .mCSB_container{
        margin-right: 10px;
    }
    .wrap_mainmenu2 .mCSB_scrollTools .mCSB_draggerRail{
        background-color: transparent;
    }
    .wrap_mainmenu2 .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, .wrap_mainmenu2 > .mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{
        background-color: transparent;
    }
    .wrap_mainmenu2 .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar{
        background-color: #ccc;
    }

    .wrap_mainmenu2 .wrap_itembasket .mCSB_scrollTools .mCSB_draggerRail{
        background: rgba(0,0,0,0.1);
    }
    .wrap_mainmenu2 .wrap_itembasket .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, .wrap_mainmenu2 .mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{
        background-color: #000;
    }
*/

    @media (max-width: 575px){
        .wrap_mainmenu2, .wrap_mainmenu_gift{
            width: 100%;
            overflow-x: hidden;
            font-size: 15px;
        }
        .wrap_cartitem .cartopen_head, .wrap_cartitem .box_filter, .bg_cart_bannertop, .box_basketempty, .cart_boxpromocode{
            margin: 0 20px;
        }
        .btn_close_mm, .btn_close_mm2{
            left: 20px;
        }
        .btn_filter{
            font-size: 14px;
        }
        .title_cartopen2{
            font-size: 20px;
            padding-top: 15px;
            padding-bottom: 0;
        }
        .inccart:before{
            width: 27px;
            height: 27px;
            top: 15px;
        }
        .top_cart2 .btn_close_mm, .top_cart2 .btn_close_mm2{
            top: 10px;
        }
        .wrap_reach, .wrap_freegift, .cart_subtotal{
            margin: 10px 20px;
        }
        
    }
    
</style>   

<div>
    <div class="row">
        <div class="col">
            <div class="topmenu">
                <div class="btn_cart2">
                    <span>2</span>
                    <figure><img src="images/Icon02-bag.svg" alt=""></figure>
                </div>
            </div>
            
           
           
            <div class="mm_overlay2"></div>
            <div class="wrap_mainmenu2 loading wrap_cartitem">
                <div class="desc_cartopen">
                    <div class="top_cart2">
                        <div class="btn_close_mm"><img src="images/right-chevron.svg" alt=""></div>
                        <div class="cartopen_head">
                            <div class="row">
                                <div class="col">
                                    <h1 class="inccart title_cartopen2">your bag</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="cart_bannertop">
                        <div class="bg_cart_bannertop">
                            <div class="row">
                                <div class="col-8">
                                    <div class="txt_cart_bannertop">Get a LOTUS DEFENSE<sup>TM</sup> Everyday Anti-pollution Kit*</div>
                                    <div class="txt_cart_bannertop02">when you shop THB 4,000 or more.</div>
                                </div>
                                <div class="col-4 photo_bannercart">
                                    <img src="images/photo_bannercart_03.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
<!--
                        <div class="bannercart_select">
                            <div class="row">
                                <div class="col-12">
                                    <img src="images/desktop-blog02-detail_03.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
-->
                        
                    </div>
                    
                    <div class="basket_empty">
                        <div class="box_basketempty">
                            <div>Your shopping bag is empty.</div>
                            <a href="" class="btn_blackdefault">continue shopping</a>
                        </div>
                    </div>
                    
                    <div class="wrap_itembasket content mCustomScrollbar">
                        <div class="item_cartselect">
                            <div class="row">
                                <div class="col-12">
                                    <button class="cart_delitem">x</button>
                                </div>
                                <div class="col-4">
                                    <a href="product-page.php" class="photo_item_cartselect"> 
                                        <figure><img src="images/product05.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div>
                                        <a href="product-page.php" class="cart_item_cartselect">
                                            <div class="cart_nameproduct dotmaster">REVIVE Omega 9 Repair</div>
                                            <div class="cart_subnameproduct dotmaster">Hair Serum Oil</div>
                                            <div>30 ml</div>
                                        </a>
                                        <div class="cart_selectqty">
                                            <select class="form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                        </div>
                                        <div class="pricet_item_cartselect">THB 1,250</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_cartselect">
                            <div class="row">
                                <div class="col-12">
                                    <button class="cart_delitem">x</button>
                                </div>
                                <div class="col-4">
                                    <a href="product-page.php" class="photo_item_cartselect">
                                        <figure><img src="images/product05.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div>
                                        <a href="product-page.php" class="cart_item_cartselect">
                                            <div class="cart_nameproduct dotmaster">REVIVE Omega 9 Repair</div>
                                            <div class="cart_subnameproduct dotmaster">Hair Serum Oil</div>
                                            <div>30 ml</div>
                                        </a>
                                        <div class="cart_selectqty">
                                            <select class="form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                        </div>
                                        <div class="pricet_item_cartselect">THB 1,250</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_cartselect">
                            <div class="row">
                                <div class="col-12">
                                    <button class="cart_delitem">x</button>
                                </div>
                                <div class="col-4">
                                    <a href="product-page.php" class="photo_item_cartselect">
                                        <figure><img src="images/product05.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div>
                                        <a href="product-page.php" class="cart_item_cartselect">
                                            <div class="cart_nameproduct dotmaster">REVIVE Omega 9 Repair</div>
                                            <div class="cart_subnameproduct dotmaster">Hair Serum Oil</div>
                                            <div>30 ml</div>
                                        </a>
                                        <div class="cart_selectqty">
                                            <select class="form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                        </div>
                                        <div class="pricet_item_cartselect">THB 1,250</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_cartselect">
                            <div class="row">
                                <div class="col-12">
                                    <button class="cart_delitem">x</button>
                                </div>
                                <div class="col-4">
                                    <a href="product-page.php" class="photo_item_cartselect">
                                        <figure><img src="images/product05.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div>
                                        <a href="product-page.php" class="cart_item_cartselect">
                                            <div class="cart_nameproduct dotmaster">REVIVE Omega 9 Repair</div>
                                            <div class="cart_subnameproduct dotmaster">Hair Serum Oil</div>
                                            <div>30 ml</div>
                                        </a>
                                        <div class="cart_selectqty">
                                            <select class="form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                        </div>
                                        <div class="pricet_item_cartselect">THB 0</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bottom_cart2">
                        <div class="row">
                           <div class="col">
                               <div class="wrap_reach">
                                   <p>Shop THB 450 more to reach THB 3,500 </p>
                                   <p style="font-weight:bold;">FREE! Our GlowFor Day Set</p>
                               </div><!-- Reach -->

                               <div class="wrap_freegift">
                                   <div class="row">
                                       <div class="col-9">
                                           <div class="txt_freegift">YAY! YOU SCORED A FREE GIFT.</div>
                                           <div>Redeem yours now!</div>
                                       </div>
                                       <div class="col-3">
                                           <div class="btn_select">
                                                 <button>select</button>
                                            </div>
                                       </div>
                                   </div>
                               </div><!-- Free gift -->

                               <div class="box_btn-continueshop">
                                   <a href="" class="btn_blackdefault">continue shopping</a>
                               </div><!-- Continue Shop-->

                               <div class="cart_boxpromocode">
                                    <div class="text_promocode">PROMO CODE</div>
                                    <div>
                                        <input type="text" placeholder="Enter a new code"><button class="btn_blackdefault">redeem</button>
                                    </div>
                               </div><!-- Promo Code-->

                               <div class="cart_subtotal">
                                   <div class="row">
                                       <div class="col-7 txt_cartsubtotal txt_promocode">PROMO CODE</div>
                                       <div class="col-5 txt_cartpricesubtotal">special10</div>
                                   </div>
                                   <div class="row">
                                       <div class="col-7 txt_cartsubtotal">subtotal</div>
                                       <div class="col-5 txt_cartpricesubtotal">thb 1,250.00</div>
                                   </div>
                                   <div class="row">
                                       <div class="col-7 txt_cartsubtotal">discount</div>
                                       <div class="col-5 txt_cartpricesubtotal">-10%(THB 300)</div>
                                   </div>
                                   <div class="row">
                                       <div class="col-7 txt_cartsubtotal txt_cartbold">total</div>
                                       <div class="col-5 txt_cartpricesubtotal">thb 1,250.00</div>
                                   </div>
                               </div><!-- Subtotal-->

                               <div class="cart_checkout">
                                   <button onclick="window.location.href = 'checkout.php';" class="btn_blackdefault mb_btncheckout">checkout</button>
                               </div><!-- btn checkout-->

                           </div>
                        </div>
                    </div>
                    
                </div>
            </div><!--wrap_mainmenu2-->
            
            
           
            <div class="wrap_mainmenu_gift loading">
                <div class="desc_cartopen">
                    <div class="top_cart2">
                        <div class="btn_close_mm2"><img src="images/right-chevron.svg" alt=""></div>
                        <div class="cartopen_head">
                            <div class="row">
                                <div class="col">
                                    <h1 class="inccart title_cartopen2">FREE GIFT</h1>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="wrap_itembasket wrap_itemselect content mCustomScrollbar">
                        <div class="item_cartselect">
                            <div class="row">
                                <div class="col-4">
                                    <a href="" class="photo_item_cartselect"> 
                                        <figure><img src="images/product05.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div>
                                        <a href="" class="cart_item_cartselect">
                                            <div class="cart_nameproduct dotmaster">REVIVE</div>
                                            <div class="cart_subnameproduct dotmaster">Shower Gel</div>
                                            <div>30 ml</div>
                                        </a>
                                        <div class="row wrap_selectbtn">
                                            <div class="col-3">
                                                <div class="cart_selectqty">
                                                    <select class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <button class="btn_addcart"><img src="images/Icon02-bag-white.svg" alt=""> add to bag</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="item_cartselect">
                            <div class="row">
                                <div class="col-4">
                                    <a href="" class="photo_item_cartselect"> 
                                        <figure><img src="images/product05.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div>
                                        <a href="" class="cart_item_cartselect">
                                            <div class="cart_nameproduct dotmaster">REVIVE</div>
                                            <div class="cart_subnameproduct dotmaster">Shower Gel</div>
                                            <div>30 ml</div>
                                        </a>
                                        <div class="row wrap_selectbtn">
                                            <div class="col-3">
                                                <div class="cart_selectqty">
                                                    <select class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <button class="btn_addcart"><img src="images/Icon02-bag-white.svg" alt=""> add to bag</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_cartselect">
                            <div class="row">
                                <div class="col-4">
                                    <a href="" class="photo_item_cartselect"> 
                                        <figure><img src="images/product05.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div>
                                        <a href="" class="cart_item_cartselect">
                                            <div class="cart_nameproduct dotmaster">REVIVE</div>
                                            <div class="cart_subnameproduct dotmaster">Shower Gel</div>
                                            <div>30 ml</div>
                                        </a>
                                        <div class="row wrap_selectbtn">
                                            <div class="col-3">
                                                <div class="cart_selectqty">
                                                    <select class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <button class="btn_addcart"><img src="images/Icon02-bag-white.svg" alt=""> add to bag</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_cartselect">
                            <div class="row">
                                <div class="col-4">
                                    <a href="" class="photo_item_cartselect"> 
                                        <figure><img src="images/product05.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div>
                                        <a href="" class="cart_item_cartselect">
                                            <div class="cart_nameproduct dotmaster">REVIVE</div>
                                            <div class="cart_subnameproduct dotmaster">Shower Gel</div>
                                            <div>30 ml</div>
                                        </a>
                                        <div class="row wrap_selectbtn">
                                            <div class="col-3">
                                                <div class="cart_selectqty">
                                                    <select class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <button class="btn_addcart"><img src="images/Icon02-bag-white.svg" alt=""> add to bag</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row bottom_cart2">
                       <div class="col">
                           <div class="cart_checkout">
                               <button class="btn_blackdefault">select</button>
                           </div><!-- btn checkout-->

                       </div>
                    </div>
                </div>
            </div><!--wrap_mainmenu_gift-->
                                
                                
       </div>
       <!--filter-->
        
    </div>                         
</div>




<script>

$(document).ready(function(){
    
    $( '.btn_cart2' ).click(function (event) {
	  if (  $( ".wrap_mainmenu2" ).is( ":hidden" ) ) {
            $('.wrap_mainmenu2').effect('slide', { direction: 'right', mode: 'show' }, 1000);
          $('body').addClass('mm_opened2');
          $('.mm_overlay2').fadeIn();
		  $(".content").mCustomScrollbar({
					theme:"minimal"
				});
	  } else {
          $('.wrap_mainmenu2').effect('slide', { direction: 'right', mode: 'hide' }, 1000);
          $('body').removeClass('mm_opened2');
          $('.mm_overlay2').fadeOut();
	  }
	  event.stopPropagation();
	});
	
	 $( '.btn_close_mm' ).click(function (event) {
        $('.wrap_mainmenu2').effect('slide', { direction: 'right', mode: 'hide' }, 1000);
        $('body').removeClass('mm_opened2');
        $('.mm_overlay2').fadeOut();
        event.stopPropagation();
	});
	
}); 
</script>


<script>

$(document).ready(function(){
    
    $( '.btn_select' ).click(function (event) {
	  if (  $( ".wrap_mainmenu_gift" ).is( ":hidden" ) ) {
            $('.wrap_mainmenu_gift').effect('slide', { direction: 'right', mode: 'show' }, 1000);
          $('body').addClass('mm_opened3');
		  $(".content").mCustomScrollbar({
					theme:"minimal"
				});
	  } else {
          $('.wrap_mainmenu_gift').effect('slide', { direction: 'right', mode: 'hide' }, 1000);
          $('body').removeClass('mm_opened3');
	  }
	  event.stopPropagation();
	});
	
	 $( '.btn_close_mm2' ).click(function (event) {
        $('.wrap_mainmenu_gift').effect('slide', { direction: 'right', mode: 'hide' }, 1000);
        $('body').removeClass('mm_opened3');
        event.stopPropagation();
	});
	
}); 
</script>


<script>     
   
    if (Modernizr.mq('(max-width: 991px)')) {
        $('.wrap_mainmenu2 .wrap_itembasket').css('height', $(window).height() - ($('.wrap_mainmenu2 .top_cart2').outerHeight() + $('.wrap_mainmenu2 .basket_empty').outerHeight() + $('.wrap_mainmenu2 .cart_bannertop').outerHeight() + $('.wrap_mainmenu2 .bottom_cart2').outerHeight() + 100));
        
    }else{
        $('.wrap_mainmenu2 .wrap_itembasket').css('height', $(window).height() - ($('.wrap_mainmenu2 .top_cart2').outerHeight() + $('.wrap_mainmenu2 .basket_empty').outerHeight() + $('.wrap_mainmenu2 .cart_bannertop').outerHeight() + $('.wrap_mainmenu2 .bottom_cart2').outerHeight() + 50));
    }
    $('.wrap_mainmenu2').removeClass('loading');
</script>

<script>     
   
    if (Modernizr.mq('(max-width: 991px)')) {
        $('.wrap_mainmenu_gift .wrap_itemselect').css('height', $(window).height() - ($('.wrap_mainmenu_gift .top_cart2').outerHeight() + $('.wrap_mainmenu_gift .bottom_cart2').outerHeight() + 110));
        
    }else{
        $('.wrap_mainmenu_gift .wrap_itemselect').css('height', $(window).height() - ($('.wrap_mainmenu_gift .top_cart2').outerHeight() + $('.wrap_mainmenu_gift .bottom_cart2').outerHeight() + 50));
    }
    $('.wrap_mainmenu_gift').removeClass('loading');
</script>



<script src="scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>