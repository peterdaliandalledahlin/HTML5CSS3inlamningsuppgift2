<!DOCTYPE html>
<html lang="sv-SE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="inlämningsuppgift 2">
    <meta name="description" content="inlämningsuppgift 2">
    <meta name="author" content="Dalle">
    <title>Inlämningsuppgift 2</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <!----------start registreringsformulär---------->
    <div class="arrow-up"></div>
        <div class="login-form">
            <div id="sign_up_form">
                <form action="registrera.php" method="POST">
                    <fieldset>
                        <legend>Personlig information</legend>
                        <div class="form_group">
                            <input name="FirstName" type="text" placeholder="Förnamn" required>
                            <input name="LastName" type="text" placeholder="Efternamn" required>
                            <input name="Street" type="text" placeholder="Gatuadress" required>
                            <input name="ZipCode" type="text" maxlength="6" pattern="^\s*?\d{5}(?:[-\s]\d{4})?\s*?$" placeholder="Postnummer" required>
                            <input name="City" type="text" placeholder="Stad" required>
                            <input name="Phone" type="tel" placeholder="Telefonnummer" required>
                            <input name="Email" type="email" placeholder="E-post" required>
                        </div>
                        <label class="radio_container">Studerande
                            <input type="radio" name="Type" value="student">
                            <span class="checkmark"></span>
                        </label>

                        <label class="radio_container">Privatperson
                            <input type="radio" name="Type" value="private">
                            <span class="checkmark"></span>
                        </label>

                        <label class="radio_container">Företagare
                            <input type="radio" name="Type" value="business">
                            <span class="checkmark"></span>
                        </label>

                       

                                <!--<div class="radio_options">
                                    <input type="radio" name="Type" value="student">
                                    <label for="sign_up_type">Studerande</label>
                                </div>
                                <div class="radio_options">   
                                    <input type="radio" name="Type" value="private">
                                    <label for="sign_up_type">Privatperson</label>
                                </div>
                                <div class="radio_options"></div>
                                    <input type="radio" name="Type" value="business">
                                    <label for="sign_up_type">Företagare</label>
                                </div>

                                <label id="label_terms_of_use">Terms of Use</label>
                            <div id="terms_of_use">
                                <input type="checkbox" name="checkbox" id="checkbox" required>
                                <label for="checkbox">Jag godkänner villkoren</label>
                            </div>-->
                    </fieldset>
                    <label class="checkbox_container">Jag godkänner villkoren!
                            <input type="checkbox" required>
                            <span class="checkmark"></span>
                        </label>
                        <button type="submit" class="contact_button" name="sign_up_button">skicka informationen</button>
                        
                </form>
            </div>
        </div>
    </div>
    <!----------end registreringsformulär---------->
    <!----------start header---------->
    <header id="header">
        <div class="container">
            <div id="top_header">
                <div class="logo">
                    <h1><a href="index.html">logo</a></h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#about">about</a></li>
                        <li><a href="#features">features</a></li>
                        <li><a href="#screen">screen</a></li>
                        <li><a href="#">pricing</a></li>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                </nav>
                <div id="sign_up">
                    <a href="#" id="login_icon"><button class="sign_up_now_button" type="submit">sign up now</button></a>
                </div>
            </div>
            <div id="container_apps">
                <div id="apps">
                    <h1>Lorem ipsum dolor sit consec adipisicing elit!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis aliquam labore voluptates magni autem. Sed.</p>
                        <ul>
                            <li><a href="https://www.apple.com/se/ios/app-store/" target="_blank"> <img src="images/app1.png" alt="app1"></a></li>
                            <li><a href="https://play.google.com/store" target="_blank"><img src="images/app2.png" alt="app2"></a></li>
                        </ul>
                </div>
                <div id="image">
                    <img src="images/mobile_screen.png">
                </div>
            <!--</div>-->
        </div>
    </header>
    <!----------end header---------->
    <!----------start section about---------->
    <section id="about">
        <div id="about_container">
            <div id="about_video">
                <img src="images/video_bg1.jpg" class="video_image">
                <div id="outter">
                    <div id="inner">
                        <div id="button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div id="about_text">
                <h1>Lorem ipsum dolor, sit amet consectetur adipisicing.</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur molestias magni et, ad architecto sed eos maxime illum qui natus!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta, perferendis.</p>
            </div>
        </div>
    </section>
    <!----------end section about----------->
    <!----------start section features---------->
    <section id="features">
        <div id="blue_background">
            <div class="container">
                <div id="features_headline">
                    <h1>Modern features included</h1>
                        <div id="features_headline_p">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, laudantiumillo. Aliquam?</p>
                        </div>
                </div>
                    <div class="features_boxar">
                        <div id="box1">
                            <h1>01</h1>
                            <h2>High Resolution</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem exercitationem perspiciatis nam velit dolores natus nulla?</p>
                        </div>
                        <div id="box2">
                            <h1>02</h1>
                            <h2>User Friendly</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem exercitationem perspiciatis nam velit dolores natus nulla?</p>
                        </div>
                        <div id="box3">
                            <h1>03</h1>
                            <h2>Extra Booster</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem exercitationem perspiciatis nam velit dolores natus nulla?</p>
                        </div>
                        <div id="box4">
                            <h1>04</h1>
                            <h2>Easy Installation</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem exercitationem perspiciatis nam velit dolores natus nulla?</p>
                        </div>
                        <div id="box5">
                            <h1>05</h1>
                            <h2>Modern Design</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem exercitationem perspiciatis nam velit dolores natus nulla?</p>
                        </div>
                        <div id="box6">
                            <h1>06</h1>
                            <h2>Well Documented</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem exercitationem perspiciatis nam velit dolores natus nulla?</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!----------end section features---------->
    <!----------start section screen---------->
    <section id="screen">
        <div class="background_image">
            <div class="gradiant">
                <div id="screen_apps_content">
                    <h1>Mons available here</h1>
                    <h1>Get the app now</h1>
                        <div id="screen_apps_content_p">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates voluptatem quidem consequatur sapiente explicabo quae labore cupiditate!</p>
                        </div>
                    <ul>
                        <li><img src="images/app1.png"></li>
                        <li><img src="images/app2.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!----------end section screen---------->
    <!----------start section kunder---------->
    <section id="kunder">
        <!--start section kunder content-->
        <div id="section_kunder_content">
                <div id="kunder_headline">
                    <h1>Våra kunder säger</h1>
                    <div id="kunder_headline_p">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, tempore nesciunt?</p>
                    </div>
                </div>   
                <div class="box_kunder">

                        <div id="box_kund1">
                        
                            <table id="kunder_table">
                                <tr>
                                <td colspan="2" valign="top"><i class="fas fa-quote-left"></i></td>
                                <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil deleniti quo quod facere magnam non nam dignissimos dolore.</td>
                            </tr>
                            </table>
                            <hr>
                                <div class="boxnamn_stars">
                                    <div class="box_namn">
                                        <h1>Muriel Watson</h1>
                                        <h2>Web Developer</h2>
                                    </div>
                                    <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star grey-star"></span>
                                        <span class="fa fa-star grey-star"></span>
                                    </div>
                                </div>
                        </div>

                        <div id="box_kund2">
                                <table id="kunder_table">
                                        <tr>
                                        <td colspan="2" valign="top"><i class="fas fa-quote-left"></i></td>
                                        <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil deleniti quo quod facere magnam non nam dignissimos dolore.</td>
                                    </tr>
                                    </table>                                <hr>
                            <div class="boxnamn_stars">
                                <div class="box_namn">
                                    <h1>Roderick Miles</h1>
                                    <h2>Web Developer</h2>
                                </div>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star grey-star"></span>
                                    <span class="fa fa-star grey-star"></span>
                                    <span class="fa fa-star grey-star"></span>
                                </div>
                            </div>
                        </div>
                        <div id="box_kund3">
                                <table id="kunder_table">
                                        <tr>
                                        <td colspan="2" valign="top"><i class="fas fa-quote-left"></i></td>
                                        <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil deleniti quo quod facere magnam non nam dignissimos dolore. Nihil deleniti quo quod facere magnam non nam dignissimos dolore.</td>
                                    </tr>
                                    </table>                                
                                    <hr>
                            <div class="boxnamn_stars">
                                <div class="box_namn">
                                    <h1>Emma Ferguson</h1>
                                    <h2>Web Developer</h2>
                                </div>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star grey-star"></span>
                                </div>
                            </div>
                        </div>
                    <div id="box_kund4">
                        <div class="box_symbol">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="box_symbol_text">
                            <h1>7</h1>
                            <p>antal appar</p>
                        </div>
                    </div>
                    <div id="box_kund5">
                        <div class="box_symbol">
                                <i class="far fa-grin-hearts"></i>
                        </div>
                        <div class="box_symbol_text">
                            <h1>67</h1>
                            <p>antal kunder</p>
                        </div>
                    </div>
                    <div id="box_kund6">
                        <div class="box_symbol">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="box_symbol_text">
                            <h1>875</h1>
                            <p>slutförda projekt</p>
                        </div>
                    </div>
                </div>
        </div>
        <!--end section kunder content-->
        <!--start background-->   
        <div id="section_kunder_white"></div>
        <div class="background_image">
        <!--<div id="section_kunder_img">-->
            <div class="gradiant"></div>
        </div>
        <!--end background-->   
    </section>
    <!----------end section kunder---------->
    <!----------start section kontakt---------->
    <section id="contact">
        <div class="container">
            <div id="contact_headline">
                    <h1>Kom i kontakt med oss</h1>
                <div id="contact_headline_p">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sed autem vitae.</p>
                </div>
                </div>
            <div id="contact_form">
                <form id="contact_input">
                        <input type="text" name="contact_name" id="contact_name"  placeholder="Ange ditt namn" required>
                        <input type="email" name="contact_mail" id="contact_mail"  placeholder="Ange epostadress" required>
                        <input type="tel" name="contact_phone" id="contact_phone"  placeholder="Ange ditt telefonnummer" required>
                        <textarea id="contact_message" rows="5" placeholder="Skriv ditt meddelande här"></textarea>
                        <button type="submit" class="contact_button">skicka meddelande</button>
                </form>
            </div>
        </div>
    </section>
    <!----------end section kontakt---------->

    <!----------start footer---------->
    <footer id="footer">
        <div class="background_image">
            <div class="gradiant">
                    <div id="footer_box">
                        <div id="footer_boxar">
                            <div id="footer_box1">
                                <ul>
                                    <li><h1><a href="index.html">logo</a></h1></li>
                                    <li>+46(0)21 467 234</li>
                                    <li>Sigmatorget 15</li>
                                    <li>123 45 Västerås</li>
                                </ul>
                            </div>
                            <div id="footer_box2">
                                <ul>
                                    <h1>Produkter</h1>
                                    <li>&nbsp;</li>
                                    <li><a href="#">Webutveckling</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">SEO</a></li>
                                    <li><a href="#">Rådgivning</a></li>
                                </ul>
                            </div>
                            <div id="footer_box3">
                                <ul>
                                    <h1>Företaget</h1>
                                    <li>&nbsp;</li>
                                    <li><a href="#">Om oss</a></li>
                                    <li><a href="#">Karriär</a></li>
                                    <li><a href="#">Tjänster</a></li>
                                    <li><a href="#">Webutveckling</a></li>
                                </ul>
                            </div>
                            <div id="footer_box4">
                                <ul>
                                    <h1>Information</h1>
                                    <li>&nbsp;</li>
                                    <li><a href="#">GDPR</a></li>
                                    <li><a href="#">Sekretesspolicy</a></li>
                                    <li><a href="#">Kundservice</a></li>
                                    <li><a href="#">Pressinformation</a></li>
                                </ul>
                            </div>
                            <div id="footer_box5">
                                <ul>
                                    <h1>Kontakta oss</h1>
                                    <li>&nbsp;</li>
                                    <li><a href="mailto:info@fev18.com">info@fev18.com</a></li>
                                    <li><a href="#">Facebook - Twitter</a></li>
                                    <li><a href="#">Messenger - Skype</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="footer_end">
                            <div id="footer_end_left">
                                <ul>
                                    <li><a href="index.html">Hem</a></li>
                                    <li><a href="#">Kontakta Oss</a></li>
                                    <li><a href="#">GDPR & Användarvillkor</a></li>
                                </ul>
                            </div>
                            <div id="footer_end_right">
                                <ul>
                                    <li>&copy; 2018 FEV18 Alla rättigheter reserverade</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </footer>
    <!----------end footer---------->

<script type="text/javascript">
        $(document).ready(function(){
            var arrow = $(".arrow-up");
            var form = $(".login-form");
            var status = false;
            $("#login_icon").click(function(event){
                event.preventDefault();
                if(status == false){
                    arrow.fadeIn();
                    form.fadeIn();
                    status = true;
                } else {
                    arrow.fadeOut();
                    form.fadeOut();
                    status = false;
                }
            })
        })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
-->
</body>
</html>