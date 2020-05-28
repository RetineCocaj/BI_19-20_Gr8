<!DOCTYPE html>
<html lang="en">
<html lang="en" manifest="manifest.appcache">

<head>
    <meta charset="utf-8">

    <title>Projekti ne WWW </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="StilizimiG.css" />
    <script src="Timer2.js"></script>
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
				  
                  <li> <a href="signup.php">User Login</a></li>

                        <li> <a href="#">Link text</a></li>

                    </ul>



        </div>
        <p id="date">Date: 
            <span id="datetime"></span><br>
            <span id="time"></span>
            <?php
                $time = (int)date("h");
                $str = "Good evening visitors!!!";
                if($time >=5 && $time < 12){
                    $str = str_replace("evening", "morning", $str);            
                }
                else if($time >=12 && $time < 18){
                    $str = str_replace("evening", "afternoon", $str);
                }
                echo '<script>document.getElementById("time").innerHTML="'.$str.'";</script>';
            ?>
        </p>
        <div class="permbajtja">
            <span>It's as easy as 1-2-3.</span>
        </div>


        <div class="container">
            <div class="gallery"><img src="images/bookonline.png" style="width:100px" id="book_img">
                <h3>BOOK ONLINE</h3>
                <div class="desc">Tell us what type of cleaning <br>you need, when and where.</div>
            </div>

            <div class="gallery"><img src="images/weclean.png" style="width:100px" id="weclean">
                <h3>WE CLEAN</h3>
                <div class="desc">Let a professional handle <br> the scrubbing and shining.</div>
            </div>


            <div class="gallery"><img src="images/werelax.png" style="width:100px" id="werelax">
                <h3>YOU RELAX</h3>
                <div class="desc"> Relax with a spotless house <br>and go enjoy your life!</div>
            </div>
        </div>


        <div id="svg_stars">

            <svg height="110" width="250" class="svg_stars">
		  <polygon points="50,5 20,99 95,39 5,39,80,99"
		  style="fill:skyblue;stroke:lightblue;stroke-width:5;fill-rule:nonzero;" />
		</svg>
            <svg height="110" width="250" class="svg_stars">
		  <polygon points="50,5 20,99 95,39 5,39,80,99"
		  style="fill:skyblue;stroke:lightblue;stroke-width:5;fill-rule:nonzero;" />
		</svg>
            <svg height="110" width="250" class="svg_stars">
		  <polygon points="50,5 20,99 95,39 5,39,80,99"
		  style="fill:skyblue;stroke:lightblue;stroke-width:5;fill-rule:nonzero;" />
		</svg>
            <svg height="110" width="250" class="svg_stars">
		  <polygon points="50,5 20,99 95,39 5,39,80,99"
		  style="fill:skyblue;stroke:lightblue;stroke-width:5;fill-rule:nonzero;" />
		</svg>
            <svg height="110" width="250" class="svg_stars">
		  <polygon points="50,5 20,99 95,39 5,39,80,99"
		  style="fill:skyblue;stroke:lightblue;stroke-width:5;fill-rule:nonzero;" />
		</svg>
            <h2 id="ranked">We are ranked with 5 stars by every costumer.</h2>

        </div>

        <div class="included">
            <h4>What's included in my home<i class="down"></i> <br>cleaning? </h4>
            <!--Click the button to do a global search for "in" in a string.-->
            <button id="tryit" onclick="myFunction()"><em>Try it</em></button>
            <p id="demo"></p>
        </div>
        <script>
            function myFunction() {
                var str = "What's included in my home cleaning??";
                var patt1 = /in/g;
                var result = str.match(patt1);
                document.getElementById("demo").innerHTML = result;
            }
        </script>

        <div class="container1">
            <h3>The Most Reliable Name in Home and Office Cleaning</h3>
            <!--Click the button to do a case-insensitive search for "most" in a string.-->
            <button id="fun" onclick="myFunction1()"><em>Try it</em></button>
            <p id="demo1"></p>

            <script>
                function myFunction1() {
                    var str1 = "The Most Reliable Name in Home and Office Cleaning";
                    var patt1 = /most/i;
                    var result1 = str1.match(patt1);
                    document.getElementById("demo1").innerHTML = result1;
                }
            </script>

            <div id="office">
                <section id="services">
                    <article class="figs3">
                        <figure><img src="images/professional.jpg" width="32" height="32" alt="" id="professional"></figure>
                        <strong>Professional Cleaning </strong>
                        <p>Cleaning.com™ has been connecting people to Professional cleaning technicians since 2014. We are the leader in higher-quality house and office cleaning for homes, apartments, & offices.</p>

                    </article>
                    <article class="figs3">
                        <figure><img src="images/reliable.jpg" width="32" height="32" alt="" id="reliable"></figure>
                        <strong>Reliable</strong>
                        <p>With our proprietary Cleaning.com™ Quality Process and feedback mechanism, you'll be assured that only the highest-performing pros will be at your place ready for work. So g'ahead - relax and enjoy your day.</p>

                    </article>
                </section>
            </div>
        </div>
        <div class="container2">
            <div id="office1">
                <section id="services">
                    <article class="figs3">
                        <figure><img src="images/flexible.png" width="32" height="32" alt=""></figure>
                        <strong>Flexible</strong>
                        <p>Whether you want a weekly home cleaning or daily porter service, Cleaning.com™ can help relieve the stresses of everyday life. But, did you know we can assist you with any type of cleaning service you'll need?</p>

                    </article>
                    <article class="figs3">
                        <figure><img src="images/safe.png" width="32" height="32" alt=""></figure>
                        <strong>Safe</strong>
                        <p>Our screened professionals go through a rigorous five-stage interview process where they are reference & background checked and verified in good standing by government agencies, all for your peace of mind.</p>

                    </article>
                </section>
            </div>
        </div>

        <div class="container3">
            <div id="office2">
                <section id="services">
                    <article class="figs3">
                        <figure><img src="images/360.jpg" width="32" height="32" alt=""></figure>
                        <strong>360° communication</strong>
                        <p>Text, chat, call or email - we'll just one contact away. We pride ourselves on open, honest and transparent communication and strive to make you & your loved ones thrilled with each cleaning.</p>

                    </article>
                    <article class="figs3">
                        <figure><img src="images/convinent.png" width="32" height="32" alt=""></figure>
                        <strong>Convenient</strong>
                        <p>Your life is busy, and you want to be able to control your schedule even when life is unpredictable. Our simple and convenient online booking and calendar system allows you to login and re-schedule any time.</p>

                    </article>
                </section>
            </div>
        </div>

        <div class="wrp2">
            <h2>Why Cleaning.com™ is the trusted platform for your <br>cleaning needs</h2>
            <ol>
                <li> Vetted professionals with experience only</li>
                <li> Backed by our Cleaning.com™ Guarantee</li>
                <li>Easy hassle-free online scheduling</li>
                <li>Affordable, fair and honest upfront pricing</li>
                <li>Fast, friendly support (chat, email, or phone)</li>
            </ol>
            <div id="listfam">
                <img src="images/family.jpg" id="fam" style="width:30%">
            </div>
        </div>


        <div class="wrp3">
            <h1>See what our customers are saying</h1>
            <h4>Or learn more about us ></h4>
            <img src="images/nicole.jpg" id="nicole" style="width:13%">
            <h2>Nicole C.</h2>
            <p>Old Town</p>
            <span>As a zoo supervisor, my job is demanding and leaves me little time for housework. With Cleaning.com, now I can have my weekends back!</span>
        </div>

        <div class="wrp4">
            <img src="images/happiness.png" id="happiness">
            <h1>Your happiness is our priority.<br>
                <small>We work hard to make sure our cleaners are top tier and that our <br>customers are happy. If you are not completely satisfied, we’ll <br>come re-clean your home, no questions asked.</small></h1>
        </div>

        <div class="wrp5">
            <h1>Frequently Asked Questions</h1>
            <ul>
                <li> What is included in a Cleaning.com™ Home Service?</li>
                <li> Do cleaners bring their own supplies? Can I specify what supplies to use? What products do the cleaners use?</li>
                <li>What can I expect in a standard cleaning?</li>
                <li>Is Cleaning.com™ safe to use?</li>
            </ul>

            <div id="timerBackground">
                <p>Change the background with in a limit time</p>
                <span id="countdown" class="timer"></span>

                <div id="timerButtons">
                    <input type="button" value="Start" onclick="countdown(this)" id="start">
                    <input type="button" value="Stop" onclick="cdpause()">
                    <input type="button" value="Reset" onclick="cdreset(seconds = 300)">
                </div>
            </div>

            <img id="img" src="images/house.jpg" style="width:100%">
        </div>

        <div class="wrapper row3">
            <div id="footer" class="clear">

                <section class="block">
                    <h2>Contact Details</h2>
                    <nav>
                        <ul>
                            <li>Company: Corporate Clean</li>
                            <li>Street name&amp; Number</li>
                            <li>Town: Shqip&#xEB;ri</li>
                            <li>Postcode/Zip</li>
                            <li><br> </li>
                            <li>Tel:xxxxxx</li>
                            <li>Fax:xxxxxx</li>
                            <li>Email:<a href=mailto:>contact@mydomail.com</a> </li>
                            <br>
                            <li><strong>Office Hours</strong></li>
                            <li>Monday- Friday :08:00-17:30</li>
                            <li>Saturday: 08-13:00</li>
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
                            <li><img src="images/rss.jpg" width="25px"><a href="https://rss.com/" target="_blank">RSS Feed</a></li>
                        </ul>
                    </nav>
                </section>


                <section class="block" id="block3">
                    <h2>From The Blog</h2>
                    <nav>
                        <ul>
                                                       <?php
class Blog {
  public $name;

  function __construct($name) {
    $this->name = $name; 
  }
  function get_name() {
    return $this->name;
  }
}

$post = new Blog("<strong>&nbsp;&nbsp;&nbsp;&nbsp;Blog Post Title</strong>");
echo $post->get_name();

$posted = array("Posted", "by Admin", "on 03.01.2020"); 
echo "</br> &nbsp;&nbsp;&nbsp;&nbsp;" . $posted[0] . ", " . $posted[1] . "  " . $posted[2] . ".";
?>
 
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
        <script type="text/javascript">
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
            /*date*/
            var dt = new Date();
            document.getElementById("datetime").innerHTML = (("0" + (dt.getMonth() + 1)).slice(-2)) + "/" + (("0" + dt.getDate()).slice(-2)) + "/" + (dt.getFullYear());
        </script>
</body>

</html>
