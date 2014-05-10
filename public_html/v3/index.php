<!DOCTYPE html>
<html>
    <head>
        <title>Chris Meyers: Homepage</title>
        <link rel="shortcut icon" href="images/icon.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Author" content="Chris Meyers" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

        <link rel="stylesheet" href="csselements.css">
        <link rel="stylesheet" href="csselements_767-.css">
        <link rel="stylesheet" href="defunkt-facebox-cbe32e1/src/facebox.css">
        <link rel="stylesheet" href="defunkt-facebox-cbe32e1/src/facebox_767-.css">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
        <script src="defunkt-facebox-cbe32e1/src/facebox.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('a[rel*=facebox]').facebox({
                    loadingImage: 'defunkt-facebox-cbe32e1/src/loading.gif',
                    closeImage: 'defunkt-facebox-cbe32e1/src/closelabel.png'
                })
            })
        </script>

        <script>
            $(function() {
                $('#showMoreInfo1').each(function() {
                    $(this).click(function() {
                        $('#showMoreInfo2').siblings('div.SECmoreinfo-div').hide("slow");
                        $('#showMoreInfo3').siblings('div.THIRDmoreinfo-div').hide("slow");
                        $(this).siblings('div.FIRSTmoreinfo-div').slideToggle("slow");
                    });
                });

                $('#showMoreInfo2').each(function() {
                    $(this).click(function() {
                        $('#showMoreInfo1').siblings('div.FIRSTmoreinfo-div').hide("slow");
                        $('#showMoreInfo3').siblings('div.THIRDmoreinfo-div').hide("slow");
                        $(this).siblings('div.SECmoreinfo-div').slideToggle("slow");
                    });
                });

                $('#showMoreInfo3').each(function() {
                    $(this).click(function() {
                        $('#showMoreInfo1').siblings('div.FIRSTmoreinfo-div').hide("slow");
                        $('#showMoreInfo2').siblings('div.SECmoreinfo-div').hide("slow");
                        $(this).siblings('div.THIRDmoreinfo-div').slideToggle("slow");
                    });
                });
            });
        </script>

        <script>
            $(function() {
                $('#showSpecs1').each(function() {
                    $(this).click(function() {
                        $(this).siblings('div.specs1-div').slideToggle("slow");
                    });
                });
                $('#showSpecs2').each(function() {
                    $(this).click(function() {
                        $(this).siblings('div.specs2-div').slideToggle("slow");
                    });
                });
                $('#showSpecs3').each(function() {
                    $(this).click(function() {
                        $(this).siblings('div.specs3-div').slideToggle("slow");
                    });
                });
            });
        </script>
    </head>

    <body>
        
        <p id="banner">
            <a href="index.php">
                <img src="images/titlepic.png" 
                     onmouseover="this.src = 'images/titlepic_hover.png'" 
                     onmouseout="this.src = 'images/titlepic.png'" 
                     alt="Banner" 
                     title='Home'>
            </a>
        </p>

        <div id="main">


            <ul class="tabs-ul" >
                <!-- ABOUT SECTION-->
                <li class="FIRSTmoreinfo-li">
                    <img src="images/sub_banners/aboutbanner.png"
                         id="showMoreInfo1"
                         class="section" 
                         title='About' 
                         alt="About">

                    <br />
                    <div class="FIRSTmoreinfo-div">
                        Hey there! My name is <b><i>Chris Meyers</i></b> and this page is dedicated to letting you know who I am and 
                        the technology skills that I possess.  I currently attend 
                        <a class="fancytxt" href="http://www.rowan.edu/" target="_blank">Rowan University</a>
                        in Glassboro, NJ where I am studying Computer Science.  I have strong interests in Information Technology and 
                        Web Development.  Over the past few years, I have picked up experience with the following programming languages:
                        
                        <p></p>
                        <ul>
                            <li style="list-style-type:disc;">Java, Visual Basic .NET, C, C++, MIPS assembly, Scheme, HTML, CSS, Javascript,
                                                              PHP, Ada, Lua</li>
                        </ul>

                        <p></p>       
                        Aside from programming, I have interests in Computer Aided Drafting(CAD) and 3D Modeling.  I have 4+ years of
                        experience in the following programs:

                        <p></p>
                        <ul>
                            <li style="list-style-type:disc;">AutoDesk AutoCAD, AutoDesk Inventor, Rhinoceros</li>
                        </ul>

                        <p></p>
                        During my senior year of High School, I competed in the NJ Technology Student Association annual 
                        competition.  I placed 3rd in the 'Computer-Aided Design (CAD), 3D, Engineering' category
                        (<a class="fancytxt" href="http://njtsa.pages.tcnj.edu/files/2011/04/2011-HS-Event-Results-PPT1.pdf#page=7" target="_blank">Event Results</a>).


                        <p></p>
                        A copy of my Résumé is available for download 
                        <a class="fancytxt" href='downloads/Resume_ChrisMeyers.pdf' download="ChrisMeyersResume">here</a>.   

                        <p></p>

                    </div>
                </li>



                <!-- BUILDS SECTION-->
                <li class="SECmoreinfo-li">
                    <img src="images/sub_banners/buildsbanner.png" 
                         id="showMoreInfo2"
                         class="section" 
                         title='Builds'
                         alt="Builds">

                    <br />
                    <div class="SECmoreinfo-div">
                        
                        <!-- MATT'S BUILD -->
                        <span class="whichComp"><b>March 2012 - Built for my brother, Matt.</b></span>
                        <table class="computers">
                            <tr>
                                <td class="force-col-specs-widepic">
                                    <a href="images/mattBuild.jpg" rel="facebox">
                                        <img src="images/mattBuild.jpg" 
                                             style="height:100px; width: 150px;"
                                             alt="matts_comp" 
                                             title="Click to enlarge">
                                    </a>
                                </td>

                                <td class="force-col-specs">
                                    <ul class="specs1-ul" >
                                        <li class="specs1-li">
                                            <a class="fancytxt" id="showSpecs1">Specifications</a>
                                            <br />
                                            <div class="specs1-div">
                                                <u>Processor:</u> AMD 6-core FX-6100 &#64; 3.3GHz 
                                                <br />
                                                <u>Mobo:</u> Gigabyte 990FXA-UD3
                                                <br />
                                                <u>Memory:</u> 8 GB G.SKILL Ripjaws Series 1600MHz
                                                <br />
                                                <u>HDD:</u> WD5000AAKX 500GB &#64; 7200rpm  
                                                <br />
                                                <u>Video Card:</u> XFX Radeon 6870 1GB
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                        <p></p>
                        <hr />

                        <!-- MY BUILD -->
                        <span class="whichComp"><b>February 2013 - Built for myself.</b></span>
                        <table class="computers">
                            <tr>
                                <td class="force-col-specs">
                                    <a href="images/myBuild.jpg" rel="facebox">
                                        <img src="images/myBuild.jpg" 
                                             style="height:150px; width:115px;"
                                             alt="my_comp" 
                                             title="Click to enlarge">
                                    </a>
                                </td> 

                                <td class="force-col-specs">
                                    <ul class="specs2-ul">
                                        <li class="specs2-li">
                                            <a class="fancytxt" id="showSpecs2">Specifications</a>
                                            <br />
                                            <div class="specs2-div">
                                                <u>Processor:</u> Intel Core i7 3770k &#64; 4.2GHz
                                                <br />
                                                <u>Mobo:</u> Asus P8Z77-V LK 
                                                <br />
                                                <u>Memory:</u> 8 GB G.SKILL Ripjaws Series 1600MHz  
                                                <br />
                                                <u>HDD:</u> WD6400AAKS 640GB &#64; 7200rpm, ST31000524AS 1TB &#64; 7200rpm
                                                <br />
                                                <u>SSD:</u> Kingston V300 120GB
                                                <br />
                                                <u>Video Card:</u> EVGA GeForce GTX 670 FTW 2GB
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                        <p></p>
                        <hr />

                        <!-- MARK'S BUILD -->
                        <span class="whichComp"><b>September 2013 - Built for my Neighbor.</b></span>
                        <table class="computers">
                            <tr>
                                <td class="force-col-specs">
                                    <a href="images/markBuild.jpg" rel="facebox">
                                        <img src="images/markBuild.jpg" 
                                             height="150" 
                                             width="115"
                                             style="height:150px; width:115px;"
                                             alt="marks_comp" 
                                             title="Click to enlarge">
                                    </a>
                                </td>

                                <td class="force-col-specs">
                                    <ul class="specs3-ul">
                                        <li class="specs3-li">
                                            <a class="fancytxt" id="showSpecs3">Specifications</a>
                                            <br />
                                            <div class="specs3-div">
                                                <u>Processor:</u> Intel Core i7 4770k &#64; 3.5GHz
                                                <br />
                                                <u>Mobo:</u> MSI H87-G43
                                                <br />
                                                <u>Memory:</u> 16GB G.SKILL Ripjaws X Series 1600MHz 
                                                <br />
                                                <u>HDD:</u> ST1000DM003 1TB &#64; 7200rpm
                                                <br />
                                                <u>SSD:</u> Kingston HyperX 3K 120GB
                                                <br />
                                                <u>Video Card:</u> EVGA GeForce GTX 770 SuperClocked 2GB
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>



                <!-- CONTACT SECTION -->

                <li class="THIRDmoreinfo-li">
                    <img src="images/sub_banners/contactbanner.png"
                         id="showMoreInfo3"
                         class="section"  
                         title='Contact'
                         alt="Contact">

                    <br />
                    <div class="THIRDmoreinfo-div">
                        <div id='errors'></div>
                        <form action="email_form.php" method="post" target="_top">
                            <p class="message"><b>Questions? Comments? Concerns? Send me a message!</b></p>
                            
                            <?php
                            if (!empty($_GET['m'])) {
                                $message = $_GET['m'];
                                echo "<script>$('#showMoreInfo3').each(function() {
                                                $(this).after(function() {
                                                    $('#showMoreInfo1').siblings('div.FIRSTmoreinfo-div').hide('fast');
                                                    $('#showMoreInfo2').siblings('div.SECmoreinfo-div').hide('fast');
                                                    $(this).siblings('div.THIRDmoreinfo-div').show('fast');
                                                });
                                            }); </script>";

                                if ($message == "000") {
                                    echo '<p class="errors">' . "First Name required. Please try again." . '</p>';
                                } elseif ($message == "001") {
                                    echo '<p class="errors">' . "Email Address format is incorrect. Please try again." . '</p>';
                                }
                            }
                            ?><p></p>
                            
                            <table class="inputs">
                                <tr>
                                    <td class="force-col-right">
                                        <input class="inputbox-mod" type="text" placeholder="Name" name="name"<?php
                                        if (!empty($_GET['n'])) {
                                            $name = $_GET['n'];
                                            echo 'value="' . $name . '">';
                                        } else {
                                            echo '>';
                                        }
                                        ?></td>

                                    <td class="force-col-left">
                                        <input class="inputbox-mod" type="email" placeholder="Primary Email" name="fromemail"<?php
                                        if (!empty($_GET['e'])) {
                                            $fromemail = $_GET['e'];
                                            echo 'value="' . $fromemail . '">';
                                        } else {
                                            echo '>';
                                        }
                                        ?></td>
                                </tr>
                            </table>

                            <p></p>
                            <table class="comments">
                                <tr>
                                    <td>
                                        <textarea class="textarea-mod" name="usercomments" placeholder="Message"><?php
                                            if (!empty($_GET['c'])) {
                                                $usercomments = $_GET['c'];
                                                echo $usercomments . '</textarea>';
                                            } else {
                                                echo '</textarea>';
                                            }
                                            ?></td>
                                </tr>

                            </table>

                            <p></p>
                            <table class="inputs">
                                <tr>
                                    <td>
                                        <button class="submit-button" type="submit">Send</button>
                                    </td>
                                </tr>                                        
                            </table>
                        </form>    
                    </div>
                </li>

            </ul>

        </div>

        <div id="footer">
            <a href="https://www.facebook.com/meyers42" target="_blank"><img src="images/fb.ico" alt="Facebook" title="Facebook"></a>
            &bull;
            <a href="http://www.linkedin.com/pub/chris-meyers/61/7a9/b09" target="_blank"><img src="images/li.ico" alt="LinkedIn" title="LinkedIn"></a>
            &bull;
            <a href="https://github.com/christopher-meyers" target="_blank"><img src="images/github.png" alt="GitHub" title="GitHub"></a>
            &bull;
            <a href='downloads/Resume_ChrisMeyers.pdf' download="Resume_ChrisMeyers" class="fancytxt">
                Download Résumé
            </a>
            <p>Designed and Developed by Chris Meyers, 2013-2014</p>
        </div>

    </body>
</html>
