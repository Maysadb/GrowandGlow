
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <title>COOKING JOURNAL</title>
    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--jquery ui stylesheet-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- site favicon -->
    <link rel="icon" href="images/favicon.png" />

    <!--selectric stylesheet-->
    <link rel="stylesheet" href="css/selectric.css"/>
    <!--font awesome stylesheet-->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!--swipe box stylesheet-->
    <link rel="stylesheet" href="css/swipebox.css"/>
    <!-- mean menu stylesheet-->
    <link rel="stylesheet" href="css/meanmenu.css"/>
    <!--slick slider stylesheet-->
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>
    <!--bootstrap stylesheets-->
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <!--animate stylesheet-->
    <link rel="stylesheet" href="css/animate.css"/>
    <!--main stylesheet-->
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>
<!--pre-loader-->
<div class="preloader">
    <div class="loadr">
        <svg  viewbox="0 0 74.6 81">
            <path d="M67.8,12.9C51.7,5.2,26.2,0.2,26.2,0.2c-10.9-1.8-9.3,11.4-9,20.2c0,0.7,0.1,1.4,0.1,2c7.8,1.5,19.7,4,29.2,7.4c11.4,4.1,9.6,8.3,9.2,16c-0.2,4.9-0.4,14,1.1,21.3c7.7,1.4,13.8,1.9,13.1-0.3c-6.3-7.2-0.1-29.6,1.8-34.2C73.3,28.7,79.3,18.4,67.8,12.9z">      </path>
            <path d="M58.9,79.5c-6.5-5.6-6.2-23.6-5.8-31.3c0.4-7.7,2.1-11.9-9.2-16c-15.3-5.5-37.3-8.8-37.3-8.8c-9.1-1.1-6.6,8.4-5.5,15.1c1.7,10,5.4,22,7.9,27.8c2.8,6.5,8.9,7.3,8.9,7.3S65.4,85.1,58.9,79.5z"></path>
        </svg>
    </div>
</div>
<!--pre-loader ends-->

<!--header-->

<header>
    <div class="header header-main header-var2 fadeIn">
       <div class="container">
                <div class="row">
                    <div class="col-md-5">

                        <div class="left-nav">
                            <nav class="nav-collapse">
                                <ul class="main-menu left">
                                   
                                    
                                    
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-md-2">
                         <div class="logo-wrapper">
                        <a href="index.html"><img width="125"  height="125" src="images/logo.png" alt="logo"/></a>
                    </div>
                    </div>
                    <div class="col-md-5">
                        <div class="right-nav">
                            <div class="wrapper-links">
                                <ul class="header-social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                        <span class="sign-in-buttons">
                        <a class="login" href="login.php">Login</a>
                        <a class="register" href="register.html">Register</a>
                    </span>
                            </div>
                          
                            <nav class="nav-collapse">
                                <ul class="main-menu right">
                                     <li><a href="index.html">Home</a>
                                        
                                    </li>
                                    <li><a href="">Submit recipe</a>
                                        <ul>
                                            <li><a href="login.php">Have account ?</a></li>
                                           <li><a href="register.html">Registration</a></li>
                                        </ul>
                                    </li>
                                 <li>
                                        <a href="#">Recipe Detail</a>
                                        <ul>
                                            <li><a href="recipe-detail_pizza.html">pizaa recipe  </a></li>
                                            <li><a href="recipe-detail_banana.html">Humburger recipe</a></li>
                                      <li><a href="recipe-detail_juice.html">Jouice recipe  </a></li>
                                            <li><a href="recipe-detail_Wraps.html">chicken recipe  </a></li>
                                          <li><a href="recipe-detail_soap.html">soap recipe  </a></li>
                                      </ul>
                                    </li>
                                    <li><a href="about.html">contact</a></li>
                                
                               
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
   
</header>
<!--header ends-->


<div class="recipes-home-body inner-page">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-9">
    <div class="recipe-set submit-recipe-set">
        <h2>Submit Recipe</h2>
        
        <div class="submit-recipe-form">
            <form action="check.php" method="post" id="contact-form">
                <label for="title">Recipe Title</label>
                <input type="text" name="title" id="title" />
                <br/>
                <label for="short-description">Short Description</label>
                <textarea class="short-text" name="short-des" id="short-description" cols="30" rows="10"></textarea>
                <label for="recipe-content">Recipe Contents</label>
                <textarea name="content" id="recipe-content" cols="30" rows="10"></textarea>
                <label for="upload-image">Upload Images</label>
                <input type="file" name="fileUpload" id="upload-image"/>
                <fieldset class="ingredient-set">
                    <label for="ingredients">Ingredients</label>
                    <ul class="list-sortable ingredients-list">
                        <li>
                            <div class="add-fields">
                                <span class="handler-list"><i class="fa fa-arrows"></i></span>
                                <input type="text" name="ingredients[]" id="ingredients"/>
                                <span class="del-list"><i class="fa fa-trash"></i></span>
                            </div>
                        </li>
                    </ul>
                                         <span class="add-button add-ing">
                                            <i class="fa fa-plus"></i>
                                        </span>
                </fieldset>

                <fieldset class="ingredient-set">
                    <label for="steps">Steps</label>
                    <ul class="list-sortable steps">
                        <li>
                            <div class="add-fields">
                                <span class="handler-list"><i class="fa fa-arrows"></i></span>
                                <textarea class="short-text" name="steps" id="steps" cols="30" rows="10">    </textarea>
                                <span class="del-list"><i class="fa fa-trash"></i></span>
                            </div>
                        </li>
                    </ul>
                                         <span class="add-button add-steps">
                                            <i class="fa fa-plus"></i>
                                        </span>
                </fieldset>

                <label class="video-based-recipe">Video Based Recipe</label>
                <br/>
                <label for="radio-yes">
                    <input class="radio-btn" id="radio-yes" type="radio" name="video-recipe" value="yes" checked /><span class="radio-text">yes</span>
                </label>
                <label for="radio-no">
                    <input class="radio-btn" id="radio-no" type="radio" name="video-recipe" value="no"  /> <span class="radio-text">no</span>
                </label>
                <br/>
                <br/>
                <label for="video-embed">Video Embed Code</label>
                <textarea class="short-text" name="embed-code" id="video-embed" cols="30" rows="10"></textarea>

                <div class="row">
                    
                    <div class="col-sm-6">
                        <label for="servings">Servings</label>
                        <input type="text" name="servings" id="servings"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <label for="prep-time">Preparation Time</label>
                        <input type="text" name="prep-time" id="prep-time"/>
                    </div>
                    <div class="col-sm-4">
                        <label for="cook-time">Cook Time</label>
                        <input type="text" name="cook-time" id="cook-time"/>
                    </div>
                    <div class="col-sm-4">
                        <label for="ready-in">Ready In</label>
                        <input type="text" name="ready-in" id="ready-in"/>
                    </div>
                </div>

                <label for="tags">Tags</label>
                <input type="text" name="tags" id="tags"/>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="recipe-type">Recipe Type</label>
                        <select name="recipe-type" id="recipe-type" class="advance-selectable">
                            <option value="t0" selected="selected">None</option>
                            <option value="t1">main meal</option>
                            <option value="t2">side dish</option>
                            <option value="t3">drink</option>
                           
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="cuisine-select">Cuisine</label>
                        <select name="cuisine" id="cuisine-select" class="advance-selectable">
                            <option value="c0" selected="selected">None</option>
                            <option value="c1">Traditional</option>
                            <option value="c2">Indian</option>
                            <option value="c3">Amarican</option>
                            
                        </select>
                    </div>
                    
                    <div class="col-sm-6">
                        <label for="skill">Skill Level</label>
                        <select name="skill" id="skill" class="advance-selectable">
                            <option value="s0" selected="selected">None</option>
                            <option value="s1">easy</option>
                            <option value="s2">Advance</option>
                        
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button onclick="fireSweetAlert()" >submit recipe</button>
                                   </div>
      
                    <script>
             function fireSweetAlert() {
                 document.getElementById("contact-form").reset();
        Swal.fire(
            'Thank you!',
            'we recived your recipe . we will call you soon',
            'we will call you soon'
        )
    }

  </script>
            </form>
        
        </div>
    </div>
</div>

</div>

</div>
</div>

<div class="footer footer-variant-one footer-fluid">
    <div class="container">
        <div class="footer-inner">
            <div class="text-center">
                 <p class="wow animated flipInX">
                     </p>

            </div>

            <div class="subs-social-options">
                <div class="row custom-row-footer">
                    <div class="col-md-6 custom-col-options">
                        <div class="left-side">
                            <div class="widget widget-footer news-letter-signup wow animated flipInY">
                                <h2>Newsletter Signup</h2>

                                <form class="subs-form" action="#" method="post">
                                    <div class="email-field">
                                        <input type="email" name="email" placeholder="Enter you email address"/>
                                        <button><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="right-side">
                            <div class="widget widget-footer social-icons">
                                <h2 class="wow animated fadeInRight">Get Social with Us</h2>
                                <ul>
                                    <li class="wow animated bounceInRight"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay100ms"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay200ms" ><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay300ms"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay400ms" ><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay500ms"><a href="#"><i class="fa fa-flickr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center wow animated flipInX">
               </div>
            <div class="corner-image wow animated fadeInRight">
                <img src="images/footer-corner-image.jpg" alt="image"/>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.meanmenu.js"></script>
<script src="js/jquery.selectric.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.swipebox.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
  <a href="logout.php">Click here</a> to Logout