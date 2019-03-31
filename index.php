<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap-337.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" type="text/css">
    <link rel="stylesheet" href="css/icon.css" type="text/css">
    <link rel="stylesheet" href="css/btn_group.css" type="text/css">
    <title> MobilePrix </title>
    <link rel="icon" href="ticon.png">

</head>

<body>

    <header>
        <nav class="navbar navbar-default n_mar">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"> <i class="fas fa-mobile"></i> MobilePrix </a> </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Cart<i class="fas fa-shopping-cart c_site"></i> </a></li>
                    <li><a href="reg.php">Sign Up<i class="fas fa-user-plus sup_site"></i> </a></li>
                    <li><a href="login.html"> Sign In<i class="fas fa-sign-in-alt lin_site"></i> </a></li>
                </ul>
            </div>

        </nav>

        <!-- four buttons in a group -->

        <div class="btn-group" style="width:100%">

            <center>
                <a href="#xia"> <button style="width:25%">Xiaomi</button></a>
                <a href="#sam"> <button style="width:25%">Samsung</button> </a>
                <a href="#one"> <button style="width:25%">OnePlus</button> </a>
                <a href="#goo"> <button style="width:25%">Google</button> </a> </center>

        </div>

    </header>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="slideshow\1.jpg" style="width:100%; height:400px;">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="slideshow\lol1.jpg" style="width:100%; height:400px;">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="slideshow\lol2.jpg" style="width:100%; height:400px;">
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }

        </script>
        <div class="container">
            <div class="row">
                <div class="col-md-4" id="xia">
                    <div class="thumbnail">
                        <img src="thumbnail/Xiaomi_Pocophone_F1.jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4>Xiaomi Pocophone F1</h4>
                            <p><b>Product Features:</b> <br>
                                Display: 6.18 Inch <br>
                                Camera: Back: 12MP, Front: 20MP <br></p>
                            <h4>
                                <p class="price"> ₹ 19,000 </p>
                            </h4>
                            <p><a href="#" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="thumbnail/Xiaomi_Mi_Mix_3.jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4>Xiaomi Mi Mix 3</h4>
                            <p><b>Product Features:</b> <br>
                                Display: 16.15 MU (6.39 Inch(es) <br>
                                Camera: Back: 12MP, Front: 24MP <br>
                            </p>
                            <h4>
                                <p class="price"> ₹ 34,890 </p>
                            </h4>
                            <p>
                                <a href="details.php" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="details.php" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="thumbnail/Xiaomi_Redmi_Note_6.jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4>Xiaomi Redmi Note 6 Pro</h4>
                            <p><b>Product Features:</b> <br>
                                Display: 15.9 MU (6.18 Inch(es) <br>
                                Camera: Back: 12MP, Front: 20MP <br>
                            </p>
                            <h4>
                                <p class="price"> ₹ 12,900 </p>
                            </h4>
                            <p><a href="#" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- 2nd row -->

        <div class="container" id="sam">
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="thumbnail/Samsung_Galaxy_A6.jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4>Samsung Galaxy A6</h4>
                            <p><b>Product Features:</b> <br>
                                Display: 14.2 MU (5.6 Inch(es)) <br>
                                Camera: Back: 16MP, Front: 16MP <br>
                            </p>
                            <h4>
                                <p class="price"> ₹ 16,000 </p>
                            </h4>
                            <p><a href="#" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="thumbnail/Samsung_Galaxy_A7.jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4>Samsung Galaxy A7 </h4>
                            <p><b>Product Features:</b> <br>
                                Display: 16.15 MU (6.39 Inch(es) <br>
                                Camera: Back: 12MP, Front: 24MP <br>
                            </p>
                            <h4>
                                <p class="price"> ₹ 15,600 </p>
                            </h4>
                            <p><a href="#" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="thumbnail/Samsung_Galaxy_S8.jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4> Samsung Galaxy S8 </h4>
                            <p><b>Product Features:</b> <br>
                                Display: 14.7 MU (5.8 Inch(es)) <br>
                                Camera: Back: 12MP, Front: 8MP <br>
                            </p>
                            <h4>
                                <p class="price">₹ 37,290</p>
                            </h4>
                            <p><a href="#" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- 3nd row -->

        <div class="container" id="one">
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="thumbnail/OnePlus_6.jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4> OnePlus 6T</h4>
                            <p><b>Product Features:</b> <br>
                                Display: 16.3 MU (6.41 Inch(es)) <br>
                                Camera: Back: 16MP, Front: 16MP <br>
                            </p>
                            <h4>
                                <p class="price">₹ 38,000 </p>
                            </h4>
                            <p><a href="#" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="thumbnail/OnePlus_6T.jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4>OnePlus 6 </h4>
                            <p><b>Product Features:</b> <br>
                                Display: 15.95 MU (6.28 Inch(es)) <br>
                                Camera: Back: 16MP, Front: 16MP <br>
                            </p>
                            <h4>
                                <p class="price"> ₹ 35,090 </p>
                            </h4>
                            <p><a href="#" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="thumbnail/OnePlus_6T%20(2).jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4> OnePlus 5T </h4>
                            <p><b>Product Features:</b> <br>
                                Display:15 MU (6.1 Inch(es)) <br>
                                Camera: Back: 16MP, Front: 12MP <br>
                            </p>
                            <h4>
                                <p class="price"> ₹ 33,000 </p>
                            </h4>
                            <p><a href="#" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- 4nd row -->

        <div class="container" id="goo">
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="thumbnail/Google_Pixel_2.jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4> Google Pixel 2</h4>
                            <p><b>Product Features:</b> <br>
                                Display: 12.7 MU (5 Inch(es)) <br>
                                Camera: Back: 12.2MP, Front: 8MP <br>
                            </p>
                            <h4>
                                <p class="price"> ₹ 47,499 </p>
                            </h4>
                            <p><a href="#" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="thumbnail/Google_Pixel_2_XL.jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4>Google Pixel 2 XL</h4>
                            <p><b>Product Features:</b> <br>
                                Display: 15.2 MU (6 Inch(es)) <br>
                                Camera: Back: 12.2MP, Front: 8MP <br>
                            </p>
                            <h4>
                                <p class="price"> ₹ 45,499 </p>
                            </h4>
                            <p><a href="#" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="thumbnail/Google_Pixel_3.jpg" width="136" height="244" alt="Phone">
                        <div class="caption">
                            <h4> Google Pixel 3 </h4>
                            <p><b>Product Features:</b> <br>
                                Display: 14 MU (5.5 Inch(es)) <br>
                                Camera: Back: 12.2MP, Front: 8MP <br>
                            </p>
                            <h4>
                                <p class="price"> ₹ 59,999 </p>
                            </h4>
                            <p><a href="#" class="btn btn-primary" role="button">Add to cart</a> &emsp;
                                <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    
    <?php 
    
        include("includes/footer.php")
    
    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>

</html>
