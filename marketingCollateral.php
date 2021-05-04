<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Graphic logo design...</title>
        <link rel="stylesheet" href="smm.css">
        <style>
            .Banner{
                margin-top:150px;
                height: 600px;
                max-width: 100%;
                background-image: url('https://images.pexels.com/photos/7564244/pexels-photo-7564244.jpeg?cs=srgb&dl=pexels-rodnae-productions-7564244.jpg&fm=jpg');
                background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.2)), url('https://images.pexels.com/photos/7564244/pexels-photo-7564244.jpeg?cs=srgb&dl=pexels-rodnae-productions-7564244.jpg&fm=jpg');
                background-size: cover;
                background-repeat: no-repeat;
                /*padding: 250px 250px 270px;*/
                color: #fff;
            }
            .Banner a:hover,
            .Container1 a:hover {
                transition-property: all;
                transition-duration: 1s;
                transform: rotate(360deg);
                background-color: #23049d;
                color: #fff;
            }
            .Container1 {
                margin-top: 100px;
                margin-bottom:100px;
            }
            .Container1 img {
                width: 100%;
                height: 360px;
                margin: 30px 25px 30px;
                padding: 30px 25px 30px;
            }
            .Container2 {
                margin: 100px 0px 100px;
                width: 100%;
                max-width:100%;
                background-color: crimson;
                color: #fff;
            }
            .Container3 {
                max-width: 100%;
                width: 100%;
                margin: 100px 0px 50px;
                padding: 20px;
                background-color: #ce1f6a;
                color: #fff;
            }
            .why_us1 img {
                height: 500px;
            }
            .dropbtn {
            display: inline-block;
            border: 2px solid #dcdcdc;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            color: #dcdcdc;
          }

          .dropdown a:hover, .dropdown:hover .dropbtn {
            background-color: crimson;
            color: #fff;
          }

          .dropdown {
            display: inline-block;
          }

          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }

          .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
          }

          .dropdown-content a:hover {background-color: #f1f1f1; color:#000;}

          .dropdown:hover .dropdown-content {
            display: block;
          }
        </style>
    </head>
    <body>
        <!---------------------------------------------------------Navigation-------------------------------------------------------------->
        <?php require_once "../../partials/navbar.php" ?>
        <!--------------------------------------------------------Banner--------------------------------------------------------------->
        <div class="Banner container text-center col-lg-12">
            <div class="display-1" style="padding-top:50px;">Marketing Collateral Design...</div>
            <!--<div class="fs-3">A unique and coloured logo increases your brand recognition chances with 80%.</div>-->
            <div class="fs-6" style="margin:60px">Join us today! Get help directly from Experts...</div><br>
            <a href="#form_tofill" class="btn btn-dark" style="margin:60px 60px 0px; padding: 20px">Speak to our Experts</a>
        </div>
        <!--------------------------------------------------------About SMM--------------------------------------------------------------->
        <div class="container row Container1">
            <div class="col-lg-5 col-sm-12">
                <img src="https://images.pexels.com/photos/4506231/pexels-photo-4506231.jpeg?cs=srgb&dl=pexels-karolina-grabowska-4506231.jpg&fm=jpg/" alt="CM_imp">
            </div>
            <div class="col-lg-1 col-sm-12"></div>
            <div class="col-lg-6 col-sm-12">
                <div class="display-2">About Logo Post 1...</div>
                <div class="text-justify dl-horizontal">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                     Quaerat, eveniet provident porro consectetur quae soluta minima beatae tenetur exercitationem
                      tempore fugiat sunt earum ea, ratione quos ipsam! Ex, laboriosam recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                       Perspiciatis maiores quidem iusto in impedit nostrum voluptatem mollitia.
                       Rem, reprehenderit corporis omnis quidem incidunt, ipsam nihil voluptatem soluta, impedit quo delectus!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Unde voluptates fugit porro suscipit eaque vero, ab earum id illo! Adipisci maxime sunt quis nihil saepe.
                          Fuga ipsa dignissimos nesciunt. Molestias.
                </div>
                <div class="text-justify dl-horizontal">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                     Quaerat, eveniet provident porro consectetur quae soluta minima beatae tenetur exercitationem
                      tempore fugiat sunt earum ea, ratione quos ipsam! Ex, laboriosam recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                       Perspiciatis maiores quidem iusto in impedit nostrum voluptatem mollitia.
                </div>
                <a href="#form_tofill" class="btn btn-primary cont2_a">Talk to us!</a>
            </div>
        </div>
        <!--------------------------------------------------------WWHBGS--------------------------------------------------------------->
        <div class="container text-center Container2">
            <div class="display-4 cont2_h1">Because Tailored Messaging Matters...</div>
            <div class="fs-5 cont2_p">We are today’s Digital Agency with the vision to propel your services for tomorrow. We provide full Design Services,
              Social Media strategy to execution, Digital Media services with an SEO driven focus on Content.</div>
             <div class="cont2_small">Here is everything you need to get assured of succes in digital marketing...</div>
             <div class="row imgs">
                <a href="#" class="col-lg-2 col-sm-12 rounded-circle img1">Communication Strategy</a>
                <!--<div class="col-1 col-sm-12"></div>-->
                <a href="#" class="col-lg-2 col-sm-12 rounded-circle img2">Print Ads & OOH Design</a>
                <!--<div class="col-1 col-sm-12"></div>-->
                <a href="#" class="col-lg-2 col-sm-12 rounded-circle img3">Profiles, Brochures & Annual reports</a>
                <!--<div class="col-1 col-sm-12"></div>-->
                <a href="#" class="col-lg-2 col-sm-12 rounded-circle img4">Retail & POS Design</a>
             </div>
        </div>
        <!--------------------------------------------------------Clients--------------------------------------------------------------->
        <div class="clients container">
            <div class="display-2 text-center">Clients</div>
            <div class="row image-row">
              <img src="https://raw.githubusercontent.com/anirudh-kac/CKY-Digital-Marketing-Site/main/Main/images/lodha.webp?token=ARCWB4WBLGR2ZHJ3Z224YCLASDBRQ" alt="client" class="col-lg-3 col-sm-12">
              <img src="https://raw.githubusercontent.com/anirudh-kac/CKY-Digital-Marketing-Site/main/Main/images/lodha.webp?token=ARCWB4WBLGR2ZHJ3Z224YCLASDBRQ" alt="client" class="col-lg-3 col-sm-12">
              <img src="https://raw.githubusercontent.com/anirudh-kac/CKY-Digital-Marketing-Site/main/Main/images/lodha.webp?token=ARCWB4WBLGR2ZHJ3Z224YCLASDBRQ" alt="client" class="col-lg-3 col-sm-12">
              <img src="https://raw.githubusercontent.com/anirudh-kac/CKY-Digital-Marketing-Site/main/Main/images/lodha.webp?token=ARCWB4WBLGR2ZHJ3Z224YCLASDBRQ" alt="client" class="col-lg-3 col-sm-12">
            </div>
            <div class="row image-row">
              <img src="https://raw.githubusercontent.com/anirudh-kac/CKY-Digital-Marketing-Site/main/Main/images/lodha.webp?token=ARCWB4WBLGR2ZHJ3Z224YCLASDBRQ" alt="client" class="col-lg-3 col-sm-12">
              <img src="https://raw.githubusercontent.com/anirudh-kac/CKY-Digital-Marketing-Site/main/Main/images/lodha.webp?token=ARCWB4WBLGR2ZHJ3Z224YCLASDBRQ" alt="client" class="col-lg-3 col-sm-12">
              <img src="https://raw.githubusercontent.com/anirudh-kac/CKY-Digital-Marketing-Site/main/Main/images/lodha.webp?token=ARCWB4WBLGR2ZHJ3Z224YCLASDBRQ" alt="client" class="col-lg-3 col-sm-12">
              <img src="https://raw.githubusercontent.com/anirudh-kac/CKY-Digital-Marketing-Site/main/Main/images/lodha.webp?token=ARCWB4WBLGR2ZHJ3Z224YCLASDBRQ" alt="client" class="col-lg-3 col-sm-12">
            </div>
        </div>
        <!--------------------------------------------------------Why us--------------------------------------------------------------->
        <div class="container Container3 row">
            <div class="why_u2 col-lg-6 col-sm-12">
                <div class="display-3 text-center">Why choose Us???</div>
                <div class="fs-5 justify-text">
                  We have a team of expert social media marketer who have an experience of more than six years. Who started just like you having very less
                  resources and some even had nothing. DMS-CKY helps yopu realize what resources you have and what are your potential. We encourage you to
                  believe in yourself and make the best off yor resources. We help you in improving your planning stratergies such that everytime you make 
                  an investment your resources increase.
                </div>
                <div class="fs-5 justify-text">
                  In a business such as yours or anyone's, at a stage like this even a profit of Rs 1 is considered to be a profit. We help you plan your 
                  investment cycle and make sure you make a good turn-over. You are getting help from young enthusiasts who strive for the economic and financial betterment of the 
                  society. Join us today to experience something you would only call as 7 star service.
                </div>
            </div>
            <div class="row why_us1 w3-container w3-center w3-animate-right col-lg-6 col-sm-12">
                <img src="../../images/logo2.png" alt="CM">
            </div>
        </div>
        <!--------------------------------------------------------HCWHY--------------------------------------------------------------->
        <div id="form_tofill" class="container row how_can_we_help_you">
            <div class="col-lg-4 col-sm-12 hcwhy">
              <h3 class="display-4 hcwhy_content">How can we help you?</h3>
              <h5 class="fs-1 hcwhy_content">Get a Quote for you..</h5>
              <small class="fs-5 hcwhy_content">We ssually respond within 24 hours from your request.</small>
            </div>
            <div class="col-lg-8 col-sm-12 hcwhy">
              <form action="" class="form-group hcwhy_content">
                <div class="form_part1">
                  <input type="text" class="hcwhy_content_textField" placeholder="Name*"><br>
                  <input type="text" class="hcwhy_content_textField" placeholder="Mobile Number*"><br>
                  <label class="fs-4 hcwhy_content">Services</label><br>
                  <input class="form-check-input hcwhy_content" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label hcwhy_content" for="defaultCheck1">Consultance about Digital stratergy</label><br>
                  <input class="form-check-input hcwhy_content" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label hcwhy_content" for="defaultCheck1">Creating online leads</label><br>
                  <input class="form-check-input hcwhy_content" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label hcwhy_content" for="defaultCheck1">Create digital platforms (Websites/Apps)</label><br>
                  <input class="form-check-input hcwhy_content" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label hcwhy_content" for="defaultCheck1">Social media management and marketing</label><br>
                  <input class="form-check-input hcwhy_content" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label hcwhy_content" for="defaultCheck1">Creative Campaign and Designing</label><br>
                  <a href="#" class="btn cont2_a">Send us a Message</a>
                </div>
                <div class="form_part2 hcwhy_content">
                  <input type="text" class="hcwhy_content_textField" placeholder="Enter valid Email*"><br>
                  <input type="text" class="hcwhy_content_textField" placeholder="Name of the company*"><br>
                  <div class="input-group">
                    <div class="dropdown">
                      <a href="javascript:void(0)" class="dropbtn" style="text-decoration: none; color: #000; folnt-size: 22px">Your turnover</a>
                      <div class="dropdown-content">
                        <a href="#">50k-3.5Lakh</a>
                        <a href="#">3.5Lakh-7Lakh</a>
                        <a href="#">7Lakh-10Lakh</a>
                        <a href="#">Above 10Lakh</a>
                      </div>
                    </div>
                    <input type="text" class="form-control hcwhy_content_dropdown" aria-label="Text input with dropdown button">
                  </div>
                </div>
              </form>
            </div>
        </div>
        <!--------------------------------------------------------FAQ--------------------------------------------------------------->
        <div class="container faq text-center">
            <h1 class="display-3 text-center">FREQUENTLY ASKED QUESTION(FAQ's)</h1>
            <a href="#" class="btn text-center faq_a">Long Question Statement?</a><br>
            <a href="#" class="btn text-center faq_a">Long Question Statement?</a><br>
            <a href="#" class="btn text-center faq_a">Long Question Statement?</a><br>
        </div>
        <!--------------------------------------------------------footer--------------------------------------------------------------->
        <?php require_once "../../partials/footer.php" ?>        
    </body>
</html>