<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
<?php require('inc_header.php'); ?>
</head>
<body>
<div class="container-fluid" data-aos="fade">
    <?php require('inc_menu.php'); ?>
    <section class="row bg_hlnews" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <figure class="col-12 col-lg-6 news_img_inside">
                    <div id="slider" class="flexslider">
                      <ul class="slides">
                        <li>
                          <img src="images/news01.jpg" />
                        </li>
                        <li>
                          <img src="images/news03.jpg" />
                        </li>
                      </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                      <ul class="slides">
                        <li>
                          <img src="images/news01.jpg" />
                        </li>
                        <li>
                          <img src="images/news03.jpg" />
                        </li>
                      </ul>
                    </div>
                </figure>
                <figcaption class="col-12 col-lg-6 news_detail_inside">
                    <h1>Honda Clarity Series Earns Coalition for Clean Air 2018 California Air Quality Award</h1>
                    <div class="newsdate_detail">04 October 2018</div>
                    <div class="share_news_detail"><span>Share</span><a href="#"><img src="images/facebook.svg"></a><a href="#"><img src="images/twitter.svg"></a></div>
                    <p>• Electric concept car wins global award for outstanding automotive design<br>
• International judging panel comprised of 12 journalists from renowned publications<br>
• Honda R&D team recognised for making a significant contribution to the evolution of car design 
with Urban EV Concept<br>
• Urban EV Concept will be first production model in Honda’s ‘Electric Vision’ strategy<br>
• Order books for new electric car based on the Urban EV Concept will open in early 2019</p>
                </figcaption>
            </div>
        </div>
    </section>
    <section class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 news_detail_news">
                    <p>An international panel of automobile experts has named the Honda Urban EV Concept as ‘The Best Concept Car’ in the renowned 2018 Car Design Award honours, presented today as part of the Turin Motor Show.</p>

                    <p>Organised by Auto & Design magazine, the Car Design Award finalists and winners are selected and judged by a jury comprised of 12 automotive journalists from the world’s most prestigious publications.</p>

                   <p> The Honda Urban EV Concept was named as a finalist in April this year, and was subsequently chosen as the overall concept car winner against nine other vehicle designs. Global recognition in the Car Design Award follows the Urban EV Concept’s success in being named as Automobile magazine’s 2018 Concept of the Year in January.</p>

                   <p> Honda revealed the Urban EV Concept at the 2017 Frankfurt Motor Show. The milestone design sets the direction for Honda’s first battery electric for Europe, which will be introduced during late 2019,with a simple and sophisticated appearance that contrasts with the advanced technology that powers the car.</p>

                    <p>Its low and wide proportions present a sporty stance, while the contemporary styling incorporates slim A-pillars and a wide windscreen that appears to sweep around the entire front end of the cabin. Entry and exit from the vehicle is via rear-hinged coach doors. At the front of the Urban EV Concept, interactive multilingual messages can be displayed between the headlights, including greetings, advice for other drivers on the road, or charging status updates.

                    <p>The interior is equally inviting, with natural materials and an open-plan cabin that features front and rear bench seating. Natural grey fabric and wood finish accents create the relaxed ambience of a lounge area, while a high-tech ‘floating’ dashboard incorporates a wrap-around screen that runs behind the console and extends into the doors.

                    <p>“The Honda Urban EV Concept is a wonderfully judged piece of design which brings a much-needed sense of personality to the EV space,” concludes the joint statement from the Car Design Award jury. “Its clever blending of both retro and futuristic aesthetics gives it an undeniable desirability that few can compete with.”</p>

                    <p>Honda’s Urban EV Concept will be the first pure electric car to go into series production under the brand’s ‘Electric Vision’ strategy in Europe. This strategy includes the development of a dedicated electric vehicle platform, featuring fully-electric Honda powertrain technology.</p>

                    <p>“Our Urban EV Concept is the true representation of ‘We make it simple’ design idea, which aims to make cars closer to people’s hearts,” said Makoto Iwaki, Honda R&D Executive Creative Director. “I express the utmost gratitude on behalf of our entire Honda design team to the jury who valued our unique proposal, which we feel contrasts with the recent car designs. The production car based on this concept model is currently underway, which will be easy to access, fun to drive, and make everyday life more fulfilled and joyful.”</p>

                    <p>In 2018, the Car Design Award celebrates its third year in a renewed format. It was originally run between 1984 and 1997, and – fittingly – Honda was the very first winner with its design for the third-generation Civic.</p>

                    <p>Order books for the production model of the Honda Urban EV Concept will open in early 2019, and the first European deliveries are set to commence towards the end of that year.</p>
                </div>
            </div>
        </div>
    </section>
    <?php require('inc_footer.php'); ?>
</div>

    
<script>
$(window).on("load",function(){
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 130,
    itemMargin: 10,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});   
</script>    

    
</body>
</html>