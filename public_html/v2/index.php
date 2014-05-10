<!DOCTYPE html>
<html>
    <head>
        <title>Chris Meyers: Homepage</title>
        <link rel="shortcut icon" href="images/icon.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Author" content="Chris Meyers" />
        
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
        <meta name="HandheldFriendly" content="True" />
        
        <link rel="stylesheet" href="csselements.css">
        <link rel="stylesheet" href="csselements_767-.css">


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>

        <script>
            $(function() {
                $('#showMoreInfo1 FIRSTmoreinfo-li FIRSTmoreinfo-img').each(function() {
                    $(this).click(function() {
                        $('#showMoreInfo2 SECmoreinfo-li SECmoreinfo-img').siblings('SECmoreinfo-div').hide("slow");
                        $('#showMoreInfo3 THIRDmoreinfo-li THIRDmoreinfo-img').siblings('THIRDmoreinfo-div').hide("slow");
                        $(this).siblings('FIRSTmoreinfo-div').slideToggle("slow");
                    });
                });

                $('#showMoreInfo2 SECmoreinfo-li SECmoreinfo-img').each(function() {
                    $(this).click(function() {
                        $('#showMoreInfo1 FIRSTmoreinfo-li FIRSTmoreinfo-img').siblings('FIRSTmoreinfo-div').hide("slow");
                        $('#showMoreInfo3 THIRDmoreinfo-li THIRDmoreinfo-img').siblings('THIRDmoreinfo-div').hide("slow");
                        $(this).siblings('SECmoreinfo-div').slideToggle("slow");
                    });
                });

                $('#showMoreInfo3 THIRDmoreinfo-li THIRDmoreinfo-img').each(function() {
                    $(this).click(function() {
                        $('#showMoreInfo1 FIRSTmoreinfo-li FIRSTmoreinfo-img').siblings('FIRSTmoreinfo-div').hide("slow");
                        $('#showMoreInfo2 SECmoreinfo-li SECmoreinfo-img').siblings('SECmoreinfo-div').hide("slow");
                        $(this).siblings('THIRDmoreinfo-div').slideToggle("slow");
                    });
                });
            });
        </script>

        <script>
            $(function() {
                $('#showSpecs1 specs1-li specs1-a').each(function() {
                    $(this).click(function() {
                        $(this).siblings('specs1-div').slideToggle("slow");
                    });
                });
                $('#showSpecs2 specs2-li specs2-a').each(function() {
                    $(this).click(function() {
                        $(this).siblings('specs2-div').slideToggle("slow");
                    });
                });
                $('#showSpecs3 specs3-li specs3-a').each(function() {
                    $(this).click(function() {
                        $(this).siblings('specs3-div').slideToggle("slow");
                    });
                });
            });
        </script>
    </head>

    <body>


        <p id="banner">
            <a href="index.php">
                <img src="images/titlepic.png" onmouseover="this.src = 'images/titlepic_hover.png'" onmouseout="this.src = 'images/titlepic.png'" alt="Banner" title='Home'>
            </a>
        </p>



        <div id="wrap">      
            <div id="main">
                <div id="text" style="color:#FFFAFA">

                    <!-- ABOUT SECTION-->
                    <FIRSTmoreinfo-ul id="showMoreInfo1">
                        <FIRSTmoreinfo-li>
                            <FIRSTmoreinfo-img>
                                <img src="images/sub_banners/aboutbanner.png" width="780" title='About' alt="About">
                            </FIRSTmoreinfo-img>

                            <br />
                            <FIRSTmoreinfo-div>
                                Hey there! My name is <b><i>Chris Meyers</i></b> and this page is dedicated to letting you know who I am and 
                                the technology skills that I possess.  I currently attend <a class="fancytxt" href="http://www.rowan.edu/" target="_blank">Rowan University</a>
                                in Glassboro, NJ where I am studying Computer Science.  I have strong interests in Information Technology and Web Development.  Over the 
                                past few years, I have picked up experience with the following programming languages:

                                <ul>
                                    <li>Java, Visual Basic .NET, C, C++, MIPS assembly, Scheme, HTML, CSS, Javascript, PHP, Ada, Lua</li>
                                </ul>

                                <p>       
                                    Aside from programming, I have interests in Computer Aided Drafting(CAD) and 3D Modeling.  I have 
                                    4+ years of experience in the following programs:
                                </p>

                                <ul>
                                    <li>AutoDesk AutoCAD, AutoDesk Inventor, Rhinoceros</li>
                                </ul>

                                <p>
                                    During my senior year of High School, I competed in the NJ Technology Student Association annual 
                                    competition.  I placed 3rd in the 'Computer-Aided Design (CAD), 3D, Engineering' category
                                    (<a class="fancytxt" href="http://njtsa.pages.tcnj.edu/files/2011/04/2011-HS-Event-Results-PPT1.pdf#page=7" target="_blank">Event Results</a>).
                                </p>

                                <p>
                                    A copy of my Résumé is available for download 
                                    <a class="fancytxt" href='downloads/Resume_ChrisMeyers.pdf' download="ChrisMeyersResume">here</a>.   
                                </p>
                            </FIRSTmoreinfo-div>
                        </FIRSTmoreinfo-li>
                    </FIRSTmoreinfo-ul>

                    <!-- BUILDS SECTION-->
                    <SECmoreinfo-ul id="showMoreInfo2">
                        <SECmoreinfo-li>
                            <SECmoreinfo-img>
                                <img src="images/sub_banners/buildsbanner.png" width="780" title='Builds' alt="Builds">
                            </SECmoreinfo-img>

                            <br />
                            <SECmoreinfo-div>
                                <!-- MATT'S BUILD -->
                                <span class="whichComp"><b>March 2012 - Built for my brother, Matt.</b></span>
                                <table class="computers">
                                    <tr>
                                        <td class="force-col-specs-widepic">
                                            <a href="images/mattBuild.jpg" target="_blank">
                                                <img src="images/mattBuild.jpg" height="100" width="150" alt="matts_comp" title="Click to enlarge">
                                            </a>
                                        </td>

                                        <td class="force-col-specs">
                                    <specs1-ul id="showSpecs1">
                                        <specs1-li>
                                            <specs1-a><a class="fancytxt">Specifications</a></specs1-a>
                                            <br />
                                            <specs1-div>
                                                <u>Processor:</u> AMD 6-core FX-6100 &#64; 3.3GHz 
                                                <br />
                                                <u>Mobo:</u> Gigabyte 990FXA-UD3
                                                <br />
                                                <u>Memory:</u> 8 GB G.SKILL Ripjaws Series 1600MHz
                                                <br />
                                                <u>HDD:</u> WD5000AAKX 500GB &#64; 7200rpm  
                                                <br />
                                                <u>Video Card:</u> XFX Radeon 6870 1GB
                                            </specs1-div>
                                        </specs1-li>
                                    </specs1-ul>
                                    </td>
                                    </tr>
                                </table>

                                <p></p>
                                <hr>

                                <!-- MY BUILD -->
                                <span class="whichComp"><b>February 2013 - Built for myself.</b></span>
                                <table class="computers">
                                    <tr>
                                        <td class="force-col-specs">
                                            <a href="images/myBuild.jpg" target="_blank">
                                                <img src="images/myBuild.jpg" height="150" width="115" alt="my_comp" title="Click to enlarge">
                                            </a>
                                        </td> 

                                        <td class="force-col-specs">
                                    <specs2-ul id="showSpecs2">
                                        <specs2-li>
                                            <specs2-a><a class="fancytxt">Specifications</a></specs2-a>
                                            <br />
                                            <specs2-div>
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
                                            </specs2-div>
                                        </specs2-li>
                                    </specs2-ul>
                                    </td>
                                    </tr>
                                </table>

                                <p></p>
                                <hr>

                                <!-- MARK'S BUILD -->
                                <span class="whichComp"><b>September 2013 - Built for my Neighbor.</b></span>
                                <table class="computers">
                                    <tr>
                                        <td class="force-col-specs">
                                            <a href="images/markBuild.jpg" target="_blank">
                                                <img src="images/markBuild.jpg" height="150" width="115" alt="marks_comp" title="Click to enlarge">
                                            </a>
                                        </td>

                                        <td class="force-col-specs">
                                    <specs3-ul id="showSpecs3">
                                        <specs3-li>
                                            <specs3-a><a class="fancytxt">Specifications</a></specs3-a>
                                            <br />
                                            <specs3-div>
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
                                            </specs3-div>
                                        </specs3-li>
                                    </specs3-ul>
                                    </td>
                                    </tr>
                                </table>
                            </SECmoreinfo-div>
                        </SECmoreinfo-li>
                    </SECmoreinfo-ul>



                    <!-- CONTACT SECTION -->
                    <THIRDmoreinfo-ul id="showMoreInfo3">
                        <THIRDmoreinfo-li>
                            <THIRDmoreinfo-img>
                                <img src="images/sub_banners/contactbanner.png" width="780" title='Contact' alt="Contact">
                            </THIRDmoreinfo-img>

                            <br />
                            <THIRDmoreinfo-div>
                                <!--<iframe name="myIframe" class="errors"></iframe>
                                
                                <form action="email_form.php" method="post" target="myIframe"> -->
                                <div id='errors'></div>
                                <form action="email_form.php" method="post" target="_top">
                                    <!--
                                    <table class="message"> 
                                        <tr>
                                            <td> 
                                                <b>Questions?&nbsp;&nbsp;Comments?&nbsp;&nbsp;Concerns?&nbsp;&nbsp;Send me a message!</b>
                                            </td>
                                        </tr>
                                    </table>
                                    -->
                                    <p class="message"><b>Questions?&nbsp;&nbsp;Comments?&nbsp;&nbsp;Concerns?&nbsp;&nbsp;Send me a message!</b></p>

                                    <?php
                                    if(!empty($_GET['m'])){
                                        $message = $_GET['m'];
                                        echo "<script>$('#showMoreInfo3 THIRDmoreinfo-li THIRDmoreinfo-img').each(function() {
                                                $(this).after(function() {
                                                    $('#showMoreInfo1 FIRSTmoreinfo-li FIRSTmoreinfo-img').siblings('FIRSTmoreinfo-div').hide('fast');
                                                    $('#showMoreInfo2 SECmoreinfo-li SECmoreinfo-img').siblings('SECmoreinfo-div').hide('fast');
                                                    $(this).siblings('THIRDmoreinfo-div').show('fast');
                                                });
                                            }); </script>";
                                        
                                        if ($message == "000") {
                                            echo '<p class="errors">' . "First Name required. Please try again." . '</p>';
                                        } 
                                        elseif ($message == "001") {
                                            echo '<p class="errors">' . "Email Address format is incorrect. Please try again." . '</p>';
                                        }
                                    }
                                    ?>
                                    <p></p>
                                    <table class="inputs">
                                        <tr>
                                            <td class="force-col-right">
                                                <input class="inputbox-mod" type="text" placeholder="Name" name="name"<?php 
                                                if (!empty($_GET['n'])){
                                                    $name = $_GET['n'];
                                                    echo 'value="'.$name.'">';
                                                }
                                                else {echo '>';}?>
                                            </td>

                                            <td class="force-col-left">
                                                <input class="inputbox-mod" type="email" placeholder="Primary Email" name="fromemail"<?php 
                                                if (!empty($_GET['e'])){
                                                    $fromemail = $_GET['e'];
                                                    echo 'value="'.$fromemail.'">';
                                                }
                                                else {echo '>';}?>
                                            </td>
                                        </tr>
                                    </table>

                                    <p></p>
                                    <table class="comments">
                                        <tr>
                                            <td>
                                                <textarea class="textarea-mod" name="usercomments" placeholder="Message"><?php 
                                                if (!empty($_GET['c'])){
                                                    $usercomments = $_GET['c'];
                                                    echo $usercomments.'</textarea>';
                                                }
                                                else {echo '</textarea>';}?> </textarea>
                                            </td>
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
                            </THIRDmoreinfo-div>
                        </THIRDmoreinfo-li>
                    </THIRDmoreinfo-ul>
                    
                </div>
            </div>
        </div>
        
        <div id="footer">
                <div id="infoPanel" style="color:#FFFAFA">
                    <a href="https://www.facebook.com/meyers42" target="_blank"><img src="images/fb.ico" alt="Facebook" title="Facebook"></a>
                    &bull;
                    <a href="http://www.linkedin.com/pub/chris-meyers/61/7a9/b09" target="_blank"><img src="images/li.ico" alt="LinkedIn" title="LinkedIn"></a>
                    &bull;
                    <a href='downloads/Resume_ChrisMeyers.pdf' download="ChrisMeyersResume" class="fancytxt">
                        Download Résumé
                    </a>
                    <p>Designed and Developed by Chris Meyers, 2013-2014</p>
                </div>
        </div>
        
    </body>
</html>
