<style>
	footer{
	    border-top: 3px solid #ec1b2e;
	}
    .bg_subscribe{
        background-color: #ec1b2e;
    }
    .wrap_form_sub{
        
    }
    .wrap_form_sub{
        text-align: center;
        padding-top: 18px;
        padding-bottom: 18px;
    }
    .text_sub{
        display: inline-block;
        font-size: 1.3rem;
        color: #FFF;
        font-weight: 500;
        vertical-align: middle;
    }
    .text_sub i{
        font-size: 2rem;
        vertical-align: middle;
        display: inline-block;
        margin-right: 10px;
    }
    .wrap_form_sub input{
        width: 410px;
        display: inline-block;
        height: 48px;
        padding: 5px 20px;
        font-size: 1.1rem;
        border-radius: 5px;
        border: 0;
        margin-left: 25px;
        margin-right: 10px;
        font-weight: 500;
        vertical-align: middle;
    }
    .wrap_form_sub button{
        display: inline-block;
        width: 156px;
        background-color: #333333;
        text-align: center;
        height: 48px;
        line-height: 1;
        border: 0;
        border-radius: 5px;
        font-size: 1.25rem;
        color: #FFF;
        text-transform: uppercase;
        font-weight: 500;
        vertical-align: middle;
        transition: 1s all ease;
    }
    .wrap_form_sub button:hover{
        background-color: #444;
    }
    .list_footermenu{
        padding-top: 25px;
        padding-bottom: 25px;
    }
    .list_footermenu > a{
        color: #333333;
        text-transform: uppercase;
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 10px;
        display: inline-block;
    }
    .list_footermenu div{
        padding-left: 5px;
    }
    .list_footermenu div > a{
        color: #333333;
        font-size: 1rem;
        font-weight: 500;
        display: inline-block;
        margin-bottom: 5px;
    }
    .copyright{
        text-align: center;
        color: #333333;
        font-size: 0.9rem;
        padding: 16px 15px 13px 15px;
        border-top: 2px solid #dedede;
    }
@media (max-width: 1199px){
    .text_sub{
        font-size: 1.1rem;
    }
    .text_sub i{
        font-size: 1.6rem;
        margin-right: 5px;
    }
    .wrap_form_sub input {
        width: 370px;
        height: 40px;
    }
    .wrap_form_sub button{
        height: 40px;
        font-size: 1.1rem;
    }
}
@media (max-width: 991px){
    .text_sub{
        display: block;
        margin-bottom: 10px;
    }
    .wrap_form_sub {
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .wrap_form_sub input{
        margin-left: 0;
    }
}
@media (max-width: 767px){
    .text_sub {
        font-size: 1rem;
    }
    .wrap_form_sub input{
        width: 100%;
        margin-bottom: 10px;
    }
    .wrap_form_sub button{
        font-size: 1rem;
    }
    .list_footermenu{
        padding-bottom: 0;
        padding-top: 15px;
    }
    .list_footermenu > a{
        font-size: 1rem;
    }
    .list_footermenu div{
        padding-left: 10px;
    }
    .copyright{
        margin-top: 15px;
    }
}
</style>
<footer class="row">
  <!--   <div class="col-12 bg_subscribe" >
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 wrap_form_sub">
                        <div class="text_sub"><i class="far fa-envelope"></i> Subscribe to our mailing list to stay up to date</div>
                        <input type="Email" id='email' placeholder="Your Email Address...">
                        <button id="btnEmailSave">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3 list_footermenu">
                <a href="{{ URL('/environment') }}">@lang('message.env')</a>
                <div><a href="{{ URL('/environment-direction') }}">@lang('message.Direction')</a></div>
                <div><a href="{{ URL('/environment-statementandvision') }}">@lang('message.StatementAndVision')</a></div>
                <div><a href="{{ URL('/environment-tripple-zero') }}">@lang('message.TripleZeroApproach')</a></div>
                <div><a href="{{ URL('/environment-slogan') }}">@lang('message.Slogan')</a></div>
                <div><a href="{{ URL('/environment-impact') }}">@lang('message.EnviImpact')</a></div>
                <div><a href="{{ URL('/environment-business-activities') }}">@lang('message.BusinessActivities')</a></div>
            </div>
            <div class="col-6 col-md-3 list_footermenu">
                <a href="{{ URL('/safety') }}">@lang('message.safety')</a>
                <div><a href="{{ URL('/safety-slogan') }}">@lang('message.Slogan')</a>
                </div><div><a href="{{ URL('/safety-basic-approach') }}">@lang('message.BasicApproach')</a>
                </div><div><a href="{{ URL('/safety-direction') }}">@lang('message.Direction')</a>
                </div><div><a href="{{ URL('/safety-ncap/#aseanncap') }}">ASEAN NCAP</a>
                </div><div><a href="{{ URL('/safety-ncap/#ancap') }}">ANCAP</a></div>
            </div>
            <div class="col-6 col-md-3 list_footermenu">
                <a href="{{ URL('/csr') }}">CSR</a>
                <div><a href="{{ URL('/csr-social-activities') }}">@lang('message.HondaSocialActivities')</a></div>
                <div><a href="{{ URL('/csr-basic-approach') }}">@lang('message.BasicApproach')</a></div>
                <div><a href="{{ URL('/csr-basic-principles') }}">@lang('message.Basicprinciplesanddirections')</a></div>
            </div>
            <div class="col-6 col-md-3 list_footermenu">
                <a href="{{ URL('/newtwork') }}">@lang('message.Network')</a>
                <div></div>
                <a href="{{ URL('/news') }}">@lang('message.NewsUpdate')</a>
                <div></div>
                <a href="{{ URL('/message-from-president') }}">@lang('message.MessagefromPresident')</a>
                <div></div>
                <a href="{{ URL('/honda-sustainability') }}">@lang('message.HondaSustainability')</a>
            </div>
        </div>
    </div>
    <div class="col-12 copyright">
        @lang('message.Copyright')
    </div>
</footer>

<script>
AOS.init({
    offset: 0,
    duration: 1000,
    once: true
});




</script>



<script type="text/javascript">
  $(document).ready(function() {
      $("#email").blur(function(event) {  
      var email = $("#email").val();
          if(IsEmail(email)==false){
             alert("Invalid Email !!!");
             $("#email").val('');
             return false;
          }
      });
  });

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }



        $(document).ready(function() {

                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });


                    $("#btnEmailSave").click(function(event) {  
                      var email = $("#email").val();
                      if(email==""){
                         $("#email").focus();
                         return false;
                      }else{
                        $.ajax({

                           type:'POST',
                           url: " {{ url('saveEmailSubscribe') }} ", 
                           data:{ _token: '{{csrf_token()}}',email:email },
                            success:function(data){
                                 console.log(data); 
                                 alert("The information has been sent. Thank you.");
                                 location.reload();
                              },
                            error: function(jqXHR, textStatus, errorThrown) { 
                                console.log(JSON.stringify(jqXHR));
                                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                            }
                        });

                      }
                  });
        });

</script>
