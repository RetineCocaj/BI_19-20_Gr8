<!DOCTYPE html>
<html lang="en">
<html lang="en" manifest="manifest.appcache">

<head>
    <meta charset="utf-8">

    <title>Projekti ne WWW </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="StilizimiHP.css" />
    <style>
        .nav ul {
            display: inline-block;
            list-style: none;
            text-align: left;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>

    <div class="Margin">
        <div id="mydiv">CorporateClean</div>
        <header>
            <span> Free PSD Website Template &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		Call Us: xxxxx xxxxxxxxxx  &emsp;&emsp;&emsp;&emsp; Email Us: contact@mydomain.com</span>
        </header>

        <div class="nav">
            <ul>

                <li> <a href="HomePage.php">Homepage</a></li>

                <li> <a href="StyleDemo.php">Our Company</a></li>

                <li> <a href="FullWidth.php">Book Now</a></li>

                <li> <a href="Gallery.php">Gallery</a></li>

                <li> <a href="#">About Us</a>
                    <ul>
                        <li><a href="AboutUs.php">&emsp;Service</li>
						<li><a href="#">Safety</li>
						<li><a href="#">Area</li>
						</ul> 
				  </li>  
				  
                  <li> <a href="#">Link text</a></li>

                        <li> <a href="#">Link text</a></li>

                    </ul>



        </div>
        <div class="bodypart">
            <div class="firstpart">

                <span class="text">
            “Quality is never an accident; it is always the result of high intention, sincere effort, intelligent direction and skillfull execution; it represents the wise choice of many alternatives„ 
			</span>
                <span class="text1">	-William A Foster</span>


                <!--slider-->

                <div id="slider">
                    <div id="box">
                        <img src="images/a.jpg">
                    </div>

                    <button class="prew" onclick="prewImage()"> < </button>
                    <button class="next" onclick="nextImage()"> > </button>
                </div>

                <script type="text/javascript">
                    var slider_content = document.getElementById('box');

                    // contain images in an array
                    var image = ['a', 'b', 'c', 'd'];

                    var i = image.length;


                    // function for next slide 

                    function nextImage() {
                        if (i < image.length) {
                            i = i + 1;
                        } else {
                            i = 1;
                        }
                        slider_content.innerHTML = "<img src="
                        images / +image[i - 1] + ".jpg>";
                    }


                    // function for prew slide

                    function prewImage() {

                        if (i < image.length + 1 && i > 1) {
                            i = i - 1;
                        } else {
                            i = image.length;
                        }
                        slider_content.innerHTML = "<img src="
                        images / +image[i - 1] + ".jpg>";

                    }
                    //Pjesa e fotove me shkrim read more-->
                    function toggleText(btn, id) {
                        var e = document.getElementById(id);
                        if (e.style.display == 'block') {
                            e.style.display = 'none';
                            btn.innerHTML = "Read more &raquo;";
                        } else {
                            e.style.display = 'block';
                            btn.innerHTML = "Read less &raquo;";
                        }
                    }

                    function toggleText1(btn, id) {
                        var e = document.getElementById(id);
                        if (e.style.display == 'block') {
                            e.style.display = 'none';
                            btn.innerHTML = "Read more &raquo;";
                        } else {
                            e.style.display = 'block';
                            btn.innerHTML = "Read less &raquo;";
                        }
                    }

                    function toggleText2(btn, id) {
                        var e = document.getElementById(id);
                        if (e.style.display == 'block') {
                            e.style.display = 'none';
                            btn.innerHTML = "Read more &raquo;";
                        } else {
                            e.style.display = 'block';
                            btn.innerHTML = "Read less &raquo;";
                        }
                    }
                    //Pjesa posht fig. madhe-->
                    function toggleText3(btn, id) {
                        var e = document.getElementById(id);
                        if (e.style.display == 'block') {
                            e.style.display = 'none';
                            btn.innerHTML = "Read more &raquo;";
                        } else {
                            e.style.display = 'block';
                            btn.innerHTML = "Read less &raquo;";
                        }
                    }

                    function toggleText4(btn, id) {
                        var e = document.getElementById(id);
                        if (e.style.display == 'block') {
                            e.style.display = 'none';
                            btn.innerHTML = "Read more &raquo;";
                        } else {
                            e.style.display = 'block';
                            btn.innerHTML = "Read less &raquo;";
                        }
                    }

                    function toggleText5(btn, id) {
                        var e = document.getElementById(id);
                        if (e.style.display == 'block') {
                            e.style.display = 'none';
                            btn.innerHTML = "Read more &raquo;";
                        } else {
                            e.style.display = 'block';
                            btn.innerHTML = "Read less &raquo;";
                        }
                    }
                    //pjesa e footer-->
                    function toggleText6(btn, id) {
                        var e = document.getElementById(id);
                        if (e.style.display == 'block') {
                            e.style.display = 'none';
                            btn.innerHTML = "Read more &raquo;";
                        } else {
                            e.style.display = 'block';
                            btn.innerHTML = "Read less &raquo;";
                        }
                    }

                    function toggleText7(btn, id) {
                        var e = document.getElementById(id);
                        if (e.style.display == 'block') {
                            e.style.display = 'none';
                            btn.innerHTML = "Read more &raquo;";
                        } else {
                            e.style.display = 'block';
                            btn.innerHTML = "Read less &raquo;";
                        }
                    }
                </script>

            </div>
        </div>

        <!--pjesa posht figures madhe-->
        <div id="container">
            <div id="thirdpart">
                <section id="services">
                    <article class="figs3">
                        <figure><img src="images/p2.png" width="32" height="32" alt=""></figure>
                        <strong>Awning Cleaning</strong>
                        <p>First impressions matter. That’s why Corporate Cleaning Services can perform awning pressure washing as well as implement a maintenance program and waterproofing program </p>
                        <p id="moree" style="display: none;"> to protect your awnings from the elements. </p>
                        <a href="#" onclick="toggleText3(this, 'moree'); return false;">Read More &raquo;</a>
                    </article>
                    <article class="figs3">
                        <figure><img src="images/p2.png" width="32" height="32" alt=""></figure>
                        <strong>High Dusting</strong>
                        <p>There are areas that are simply hard to reach. Corporate Cleaning Services is able to offer an access solutionto cleaning those areas. We offer high-dusting service that ensures the utmost care for your surrounding items</p>
                        <p id="moree1" style="display: none;"> to ensure the integrity of areas.</p>
                        <a href="#" onclick="toggleText4(this, 'moree1'); return false;">Read More &raquo;</a>
                    </article>
                    <article class="figs3">
                        <figure><img src="images/p2.png" width="32" height="32" alt=""></figure>
                        <strong>Holiday Decoration</strong>
                        <p>To better serve our client needs, you can call us for the installation and removal of your holiday decorations…</p>
                        <p id="moree2" style="display: none;">We have one of the largest and most dependable expert installation teams available with the same great service that Corporate Cleaning Services has come to be known for.</p>
                        <a href="#" onclick="toggleText5(this, 'moree2'); return false;">Read More &raquo;</a>
                    </article>

                </section>
            </div>
        </div>

        <section id="Img">
            <article class="Figurat">
                <h3 class="Indonecteus">House Keeping</h3>
                <hr>

                <figure>
                    <a href="1.jpg"><img src="images/1.jpg" width="205" height="175" alt=""></a>
                </figure>
                <figure>
                    <a href="2.jpg"><img src="images/2.jpg" width="205" height="175" alt=""></a>
                </figure>
                <figure>
                    <a href="3.jpg"><img src="images/3.jpg" width="205" height="175" alt=""></a>
                </figure>
                <figure>
                    <a href="4.jpg"><img src="images/4.jpg" width="205" height="175" alt=""></a>
                </figure>


        </section>
        </article>
        <!-- fotot me shkrim-->

        <section id="shkrimi">
            <article class="FigShkrim">
                <h3 class="About">AboutOurCompany</h3>
                <hr>

                <figure><img src="images/Zucker.jpg" width="300" height="160" alt="">
                    <figcaption><br>
                        <b>Name: &nbsp;</b>Neal Zucker<br><b>Position: &nbsp;</b> President/ CEO

                        <p>Neal Zucker is President and CEO <br> of Corporate Cleaning Services, Chicago’s <br>largest employer of union window washers.<br> Mr. Zucker started Corporate Cleaning <br>Services in 1994, and he manages all <br> aspects of the
                            business on a daily basis,</p>

                        <p id="more1" style="display: none;">from sales through operations. <br>In addition to his corporate work,<br> Mr. Zucker has held director, trustee <br>and advisory roles on many of Chicago’s <br>civic and not-for-profit organizations <br>for the past 25 years. Mr.
                            Zucker was a <br>founder of the Junior Board of<br> the Young Leadership Division of <br>the Juvenile Diabetes Foundation</p>
                        <a href="#" onclick="toggleText1(this, 'more1'); return false;">Read More &raquo;</a>

                    </figcaption>
                </figure>


                <figure><img src="images/Vanessa.png" width="305" height="160" alt="">
                    <figcaption><br>
                        <b>Name: &nbsp;</b>Vanessa Herrera <br><b>Position: &nbsp;</b> Client Relations Manager

                        <p>Vanessa joined the Corporate Cleaning <br> Services team in January 2015. With over <br> eight years of office management and <br> customer service experience, Vanessa is your <br> first point of contact <br>at Corporate Cleaning
                            Services.
                        </p>
                        <p id="more" style="display: none;">While her main focus is building client relatio-<br>nships, Vanessa wears many hats. Some of her <br>responsibilities include; scheduling, fielding<br> and responding to client concerns, purchasing <br>and managing inventory,<br>                            human resources (maintaining personnel <br>files, new hire orientation), and carrying <br>administrative duties such as filing and <br>screening phone calls.</p>
                        <a href="#" onclick="toggleText(this, 'more'); return false;">Read More &raquo;</a>

                    </figcaption>
                </figure>

                <figure><img src="images/Jeff.jpg" width="300" height="160" alt="">
                    <figcaption><br>
                        <b>Name: &nbsp;</b>Jeff Spino <br><b>Position: &nbsp;</b> Safety Director

                        <p>Jeff is Corporate Cleaning Services’s<br> full-time Safety Director. He <br>brings 30 years of experience in different<br> areas of expertise, including <br> window washing, high-access rigging,<br> aerial lifts and fall protection.
                        </p>
                        <p id="more2" style="display: none;">Jeff’s extensive knowledge makes him <br>the key team member to work progressively <br>on safety issues that may arise.<br> Jeff’s responsibilities – which include <br>conducting and providing feedback on <br>safety inspections,
                            conducting roof plans<br> and providing consultative feedback<br> to our buildings and crews as necessary <br>– bring safety to the forefront of every job. </p>
                        <a href="#" onclick="toggleText2(this, 'more2'); return false;">Read More &raquo;</a>

                    </figcaption>
                </figure>
            </article>
        </section>

        <!--pjesa fundit-->

        <div class="wrapper row3">
            <div id="footer" class="clear">
                <section class="block">
                    <h2>Contact Details</h2>
                    <nav>
                        <ul>
						<?php
						function ContactDetails($Cname)
						{
						echo "$Cname<br>";
						}
						ContactDetails("Company: Corporate Clean");
						// case-sensitive constant name
						define("A", "Address: xxxxxxxx");
						echo A;

						echo "</br>";
						ContactDetails("Street name&amp; Number");
						ContactDetails("Town: Shqip&#xEB;ri");
						echo str_replace("Town", "Postcode/Zip:", "Town");

						echo "</br>";
						ContactDetails("</br>Tel:xxxxxx");
						ContactDetails("Fax:xxxxxx");
						ContactDetails("Email:<a href=mailto:>contact@mydomail.com</a>");
						echo "</br>";
						ContactDetails("<strong>Office Hours</strong>");
						ContactDetails("Monday- Friday :08:00-17:30");
						ContactDetails("Saturday: 08-13:00");
						//echo str_word_count("Saturday: 08-13:00  ");
						//echo strrev("Address  ");

						?>
					</ul>
                    </nav>

                </section>


                <section class="block" id="block2">
                    <nav>
                        <h2>Stay Social</h2>
                        <ul>
                            <li><img src="images/linkedin.jpg" width="25px"><a href="https://www.linkedin.com/" target="_blank">Get linked up in Linkeldn</a></li>
                            <li><img src="images/twitter.png" width="25px"><a href="https://twitter.com/" target="_blank">Keep up with our Tweets</a></li>
                            <li><img src="images/pinterest.png" width="25px"><a href="https://www.pinterest.com/" target="_blank">Photos on Pinterest</a></li>
                            <li><img src="images/rss.jpg" width="25px"><a href="https://rss.com/"><abbr title="Really Simple Syndication">RSS Feed</abbr></a></li>
                        </ul>
                    </nav>
                </section>

                <section class="block" id="block3">
                    <h2>From The Blog</h2>
                    <nav>
                        <ul>
                            <li><strong>Blog Post Title</strong></li>
                            <li>Posted by Admin on 03.01.2020</li>
                            <li>
                                <p>Cleanliness must be observed in a learning envionment. Clean environment</p>
                                <p id="more0" style="display: none;">can motivate students.</p>
                            </li>
                            <li><a href="#" onclick="toggleText6(this, 'more0'); return false;">Read More &raquo;</a></li>
                            <li></li>
                            <li><strong>Blog Post Title</strong></li>
                            <li>Posted by Admin on 02.01.2020</li>
                            <li>
                                <p>A commercial office cleaning company will also ensure the public area</p>
                                <p id="more01" style="display: none;">is appealing and empty waste bins. </p>
                            </li>
                            <li><a href="#" onclick="toggleText7(this, 'more01'); return false;">Read More &raquo;</a></li>
                        </ul>
                    </nav>
                </section>

                <section class="block" id="block4">
                    <h2>Contact Us</h2>
                    <nav>

                        <form method="post">
                            <p><input id="nameinput" name="name" type="text" placeholder="Name"></p>
                            <p><input id="email" name="email" type="text" placeholder="Email"></p>
                            <p><textarea placeholder="Message" name="message" rows="3"></textarea></p>
                            <p><input id="submit" type="submit" name="submit"></p>
                        </form>
                        <?php
                            if(isset($_POST['submit'])){
                                $name = $_POST["name"];
                                $email = $_POST["email"];
                                $msg = $_POST["message"];
                                $myfile = "contactMessages.txt";
                                
                                $txt = $name.' tried to contact the company, with email '.$email.', and message "'.$msg.'", at '.date("H:i:s d/m/Y.");
                                $line = '=======================================================================================================================';
                                file_put_contents($myfile, $txt. "\r\n".$line."\r\n", FILE_APPEND);

                                echo '<script type="text/javascript">'; 
                                echo 'alert("Message has been successfully sent");'; 
                                echo '</script>';  
                            }
                        ?>
                    </nav>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
