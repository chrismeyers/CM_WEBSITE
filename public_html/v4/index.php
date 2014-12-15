<!DOCTYPE html>
<html>
    <head>
        <title>Chris Meyers: Homepage</title>
        <link rel="shortcut icon" href="images/icons/icon.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Author" content="Chris Meyers" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

        <link rel="stylesheet" href="csselements.css" />
        <link rel="stylesheet" href="csselements_medium.css" />
        <link rel="stylesheet" href="csselements_small.css" />
        <link rel="stylesheet" href="csselements_print.css" />
        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />

        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
    </head>

    <body>
<!-- HEADER -->
        <?php include 'header.php'; ?>

<!-- ABOUT SECTION -->
        <div id="about" class="content">
            <img src="images/sub_banners/v4/aboutbanner.png"
                 id="showMoreInfo1"
                 class="section" 
                 title='About' 
                 alt="About">

            <br />
            <div class="content-text">
                Hey there! My name is <b><i>Chris Meyers</i></b> and this page is dedicated to letting you know who I am and 
                the technology skills that I possess.  I currently attend 
                <a class="fancytxt" href="http://www.rowan.edu/" target="_blank">Rowan University</a>
                in Glassboro, NJ where I am studying Computer Science.  I have strong interests in Computer Networking and 
                Web Development.  Over the past few years, I have picked up experience with the following programming languages:

                <p></p>
                <ul>
                    <li style="list-style-type:disc;">Java, HTML, CSS, PHP, Javascript, C#, Visual Basic, C, C++, MIPS assembly, 
                                                      Scheme(LISP dialect), Ada, Lua, Perl, MySQL.</li>
                </ul>

                <p></p>       
                Aside from programming, I have interests in Computer Aided Drafting(CAD) and 3D Modeling.  I have 4+ years of
                experience in the following programs:

                <p></p>
                <ul>
                    <li style="list-style-type:disc;">AutoDesk AutoCAD, AutoDesk Inventor, Rhinoceros.</li>
                </ul>

                <p></p>
                During my senior year of High School, I competed in the NJ Technology Student Association annual 
                competition.  I placed 3rd in the 'Computer-Aided Design (CAD), 3D, Engineering' category
                (<a class="fancytxt" href="http://njtsa.pages.tcnj.edu/files/2011/04/2011-HS-Event-Results-PPT1.pdf#page=7" target="_blank">Event Results</a>).


                <p></p>
                A copy of my Résumé is available for download 
                <a class="fancytxt" href='downloads/Resume_ChrisMeyers.pdf' download="Resume_ChrisMeyers">here</a>.   

                <p></p>
                <div class="instructions">
                    To view the other sections of this website, use the menu in the top right corner or the links below:
                    <ul>
                        <li><a href='#my-builds' class="fancytxt" onclick="showSection('builds')">Builds</a></li>
                        <li><a href='#my-projects' class="fancytxt" onclick="showSection('projects')">Projects</a></li>
                        <li><a href='#contact-me' class="fancytxt" onclick="showSection('contact')">Contact</a></li>
                    </ul>
                </div>

            </div>
        </div>

<!-- BUILDS SECTION -->
        <div id="builds" class="content">
            <img src="images/sub_banners/v4/buildsbanner.png" 
                 id="showMoreInfo2"
                 class="section" 
                 title='Builds'
                 alt="Builds">

            <br />
            <div class="content-text">

                <!-- MATT'S BUILD -->
                <span class="whichComp"><b>March 2012 - Built for my brother, Matt.</b></span>
                <table class="computers">
                    <tr>
                        <td class="force-col-specs-widepic">
                            <a href="images/builds/mattBuild.jpg" class="fancybox" title="Matt's Computer">
                                <img src="images/builds/mattBuild.jpg" 
                                     style="height:150px; width: 230px;"
                                     alt="matts_comp" 
                                     title="Click to enlarge">
                            </a>
                        </td>

                        <td class="force-col-specs">
                            <ul class="specs1-ul" >
                                <li class="specs1-li">
                                    <b>Specifications</b>
                                    <br />
                                    <div class="specs-txt">
                                        <u>Processor:</u> AMD 6-core FX-6100 &#64; 3.3GHz 
                                        <br />
                                        <u>Mobo:</u> Gigabyte 990FXA-UD3
                                        <br />
                                        <u>Memory:</u> 8GB G.SKILL Ripjaws Series 1600MHz
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
                            <a href="images/builds/myBuild.jpg" class="fancybox" title="My Computer">
                                <img src="images/builds/myBuild.jpg" 
                                     style="height:250px; width:200px;"
                                     alt="my_comp" 
                                     title="Click to enlarge">
                            </a>
                        </td> 

                        <td class="force-col-specs">
                            <ul class="specs2-ul">
                                <li class="specs2-li">
                                    <b>Specifications</b>
                                    <br />
                                    <div class="specs-txt">
                                        <u>Processor:</u> Intel Core i7 3770k &#64; 4.2GHz
                                        <br />
                                        <u>Mobo:</u> Asus P8Z77-V LK 
                                        <br />
                                        <u>Memory:</u> 16GB Corsair Vengeance 1600MHz  
                                        <br />
                                        <u>HDD:</u> WD6400AAKS 640GB &#64; 7200rpm,<br /> ST31000524AS 1TB &#64; 7200rpm
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
                            <a href="images/builds/markBuild.jpg" class="fancybox" title="Neighbor's Computer">
                                <img src="images/builds/markBuild.jpg" 
                                     height="150" 
                                     width="115"
                                     style="height:250px; width:200px;"
                                     alt="marks_comp" 
                                     title="Click to enlarge">
                            </a>
                        </td>

                        <td class="force-col-specs">
                            <ul class="specs3-ul">
                                <li class="specs3-li">
                                    <b>Specifications</b>
                                    <br />
                                    <div class="specs-txt">
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
                                        <u>Video Card:</u> EVGA GeForce GTX 770<br /> SuperClocked 2GB
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

<!-- PROJECTS SECTION -->
        <div id="projects" class="content">
            <img src="images/sub_banners/v4/projectsbanner.png"
                 id="showMoreInfo3"
                 class="section"  
                 title='Projects'
                 alt="Projects">

            <br />
            <div class="content-text">
                <!-- cm -->
                <div class="proj">
                    <h2>chrismeyers.info, this webpage</h2>
                    <h3>Personal Project, Fall 2013</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox" rel="single1" href="images/project_screenshots/cm.png" title="Personal Website">
                                <img src="images/project_screenshots/cm.png" 
                                     style="height:200px; width: 200px;"
                                     alt="My personal website" 
                                     title="Click to enlarge">
                            </a>
                        </div>

                        <div class="projDesc">
                            <b>Language(s):</b> 
                                <dd>PHP, Javascript, HTML5, CSS3</dd>
                            <br />
                            <b>Description:</b> 
                                <dd>My first web project.  A digital representation of myself.</dd>
                            <br />
                            <b>My Role:</b>
                                <dd>Solo project.</dd>
                            <br />
                            <b>Status:</b> 
                                <dd>Being maintained.</dd>
                            </div>
                    </div>
                </div>


                <!-- Genomic -->
                <br /> <hr>
                <div class="proj">
                    <h2>Genomic Solutions Now! Software</h2>
                    <h3>Software Engineering I, Rowan University, Spring 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox" rel="single2" href="images/project_screenshots/genomic.png" title="Genomic Solutions Now! Software">
                                <img src="images/project_screenshots/genomic.png" 
                                     style="height:125px; width: 200px;"
                                     alt="Genomic Solutions Now! Software" 
                                     title="Click to enlarge">
                            </a>
                        </div>

                        <div class="projDesc">
                            <b>Language(s):</b> 
                                <dd>Java</dd>
                            <br />
                            <b>Description:</b> 
                                <dd>An application built for
                                <a href="http://www.genomicsolutionsnow.com/" class="fancytxt" target="_blank">Genomic Solutions Now</a>
                                that simplifies the patient reports generated by a lab.</dd>
                            <br />
                            <b>My Role:</b>
                                <dd>Responsible for parsing the input reports.  I also handled 
                                    outputting the simplified reports to an Excel spreadsheet.</dd>
                            <br />
                            <b>Status:</b> 
                                <dd>Complete.</dd>
                            </div>
                    </div>
                </div>

                <!-- Pinelands -->
                <br /> <hr>
                <div class="proj">
                    <h2>Pinelands Tour Maker
                        <a href="http://elvis.rowan.edu/~meyers42/web/final/" target="_blank">
                            <img src="images/icons/link.png" 
                                onmouseover="this.src = 'images/icons/link_hover.png'" 
                                onmouseout="this.src = 'images/icons/link.png'" 
                                style="width: 16px; height: 16px;"
                                alt="Link to Pinelands Tour Maker" 
                                title='View site'>
                        </a>
                    </h2>
                    <h3>Web Programming, Rowan University, Spring 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox" rel="gallery1" href="images/project_screenshots/pinelands_landing.png" title="Landing page">
                                <img src="images/project_screenshots/pinelands_landing.png"
                                     style="height:200px; width: 200px;"
                                     alt="Pinelands landing page" 
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox"
                                   rel="gallery1" 
                                   href="images/project_screenshots/pinelands_tour.png"
                                   title="Tour page"
                                   style="text-decoration: none;">
                                    <img src="images/project_screenshots/pinelands_tour.png" 
                                         style="height:20px; width: 20px;"
                                         alt="Pinelands tour page" 
                                         title="Click to enlarge">

                                </a>
                                <a class="fancybox"
                                   rel="gallery1"
                                   href="images/project_screenshots/pinelands_contact.png"
                                   title="Contact page"
                                   style="text-decoration: none;">
                                    <img src="images/project_screenshots/pinelands_contact.png" 
                                         style="height:20px; width: 20px;"
                                         alt="Pinelands contact page" 
                                         title="Click to enlarge">
                                </a>
                            </div>
                        </div>

                        <div class="projDesc">
                            <b>Language(s)</b>: 
                                <dd>PHP, Javascript, MySQL, HTML5, CSS3</dd>
                            <br />
                            <b>Description:</b> 
                                <dd>An application that makes tours depending on selected points of interest.</dd>
                            <br />
                            <b>My Role:</b> 
                                <dd>Solo project.</dd>
                            <br />
                            <b>Status:</b>
                                <dd>Complete.</dd>
                        </div>
                    </div>
                </div>

                <!-- TTT -->
                <br /> <hr>
                <div class="proj">
                    <h2>Tic Tac Toe Android App</h2>
                    <h4>Intro to Android Programming, Rowan University, Summer 2014</h4>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox" rel="gallery2" href="images/project_screenshots/ttt_port.png" title="Tic Tac Toe Portrait">
                                <img src="images/project_screenshots/ttt_port.png" 
                                     style="height:200px; width: 125px;"
                                     alt="Tic tac toe Portrait" 
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox" 
                                   rel="gallery2" 
                                   href="images/project_screenshots/ttt_land.png"
                                   title="Tic Tac Toe Landscape"
                                   style="text-decoration: none;">
                                    <img src="images/project_screenshots/ttt_land.png" 
                                         style="height:20px; width: 40px;"
                                         alt="Tic tac toe Landscape" 
                                         title="Click to enlarge">
                                </a>
                            </div>
                        </div>

                        <div class="projDesc">
                            <b>Language(s):</b> 
                                <dd>Java, XML</dd>
                            <br />
                            <b>Description:</b>
                                <dd>An android version of tic tac toe.</dd>
                            <br />
                            <b>My Role:</b>
                                <dd>Solo Project.</dd>
                            <br />
                            <b>Status:</b> 
                                <dd>Complete.</dd>
                        </div>
                    </div>
                </div>

                <!-- LoL player data -->    
                <br /> <hr>
                <div class="proj">
                    <h2>League of Legends Player Data Parser
                        <a href="http://chrismeyers.info/projects/LoL_player_data/web" target="_blank">
                            <img src="images/icons/link.png" 
                                onmouseover="this.src = 'images/icons/link_hover.png'" 
                                onmouseout="this.src = 'images/icons/link.png'" 
                                style="width: 16px; height: 16px;"
                                alt="Link to LoL player data" 
                                title='View site'>
                        </a>
                    </h2>
                    <h3>Personal Project, Summer 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox" rel="gallery3" href="images/project_screenshots/loldata_landing.png" title="LoL player data landing">
                                <img src="images/project_screenshots/loldata_landing.png" 
                                     style="height:200px; width: 200px;"
                                     alt="LoL_player_data" 
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox"
                                   rel="gallery3"
                                   href="images/project_screenshots/loldata.png"
                                   title="LoL player data results"
                                   style="text-decoration: none;">
                                    <img src="images/project_screenshots/loldata.png" 
                                         style="height:20px; width: 20px;"
                                         alt="LoL_player_data" 
                                         title="Click to enlarge">
                                </a>
                            </div>
                        </div>
                        <div class="projDesc" >
                            <b>Language(s):</b>
                                <dd>PHP, HTML5, CSS3</dd>
                            <br />
                            <b>Description:</b> 
                                <dd>An application based on the video game <i>League of Legends</i> that
                                utilizes the Riot Games API to query and parse player data for a specified player.</dd>
                            <br />
                            <b>My Role:</b>
                                <dd>Solo Project.</dd>
                            <br />
                            <b>Status:</b>
                                <dd>Being maintained.</dd>
                        </div>
                    </div>
                </div>

                <!-- PCA -->
                <br /> <hr>
                <div class="proj">
                    <h2>PCA Visualization</h2>
                    <h3>Senior Project, Rowan University, Fall 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox" rel="gallery4" href="images/project_screenshots/scoresPlot.png" 
                               title="A scores plot generated from calculated principal components.">
                                <img src="images/project_screenshots/scoresPlot.png"
                                     style="height:200px; width: 200px;"
                                     alt="A scores plot generated from calculated principal components."
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox"
                                   rel="gallery4" 
                                   href="images/project_screenshots/scoresData.png"
                                   title="The calculated principal component data."
                                   style="text-decoration: none;">
                                    <img src="images/project_screenshots/scoresData.png" 
                                         style="height:20px; width: 20px;"
                                         alt="The calculated principal component data." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox"
                                   rel="gallery4"
                                   href="images/project_screenshots/addinBar.PNG"
                                   title="The Excel add-in bar. Scores and loadings plot were added in this project."
                                   style="text-decoration: none;">
                                    <img src="images/project_screenshots/addinBar.PNG" 
                                         style="height:20px; width: 20px;"
                                         alt="The Excel add-in bar. Scores and loadings plot were added in this project." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox"
                                   rel="gallery4"
                                   href="images/project_screenshots/scoresInput-full.png"
                                   title="Input form that is dynamically populated based on the number of principal components."
                                   style="text-decoration: none;">
                                    <img src="images/project_screenshots/scoresInput-full.png" 
                                         style="height:20px; width: 20px;"
                                         alt="Input form that is dynamically populated based on the number of principal components." 
                                         title="Click to enlarge">
                                </a>
                            </div>
                        </div>

                        <div class="projDesc">
                            <b>Language(s)</b>: 
                                <dd>C#</dd>
                            <br />
                            <b>Description:</b> 
                                <dd>Principal component analysis (PCA) is a technique used to reduce dimensionality of
                                    a multivariate data set in order to better understand potentially correlated data.
                                    The goal of this project was to take an Excel add-in developed by Bristol-Myers 
                                    Squibb and further develop it to have visualization functionality.
                                </dd>
                            <br />
                            <b>My Role:</b> 
                                <dd>Responsible for parsing the calculated principal component worksheets and storing 
                                    them in data structures used for plotting.</dd>
                            <br />
                            <b>Status:</b>
                                <dd>Complete.</dd>
                        </div>
                    </div>
                </div>

            </div>
        </div>

<!-- CONTACT SECTION -->
        <div id="contact" class="content">
            <img src="images/sub_banners/v4/contactbanner.png"
                 id="showMoreInfo4"
                 class="section"  
                 title='Contact'
                 alt="Contact">

            <br />
            <div class="content-text">
                <div id='errors'></div>
                <form action="email_form.php" method="post" target="_top">
                    <p class="message"><b>Questions? Comments? Concerns? Send me a message!</b></p>

                    <?php
                    if (!empty($_GET['m'])) {
                        $message = $_GET['m'];

                        if ($message == "000") {
                            echo '<p class="errors">' . "Name required. Please try again." . '</p>';
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
        </div>

 <!-- FOOTER -->
        <?php include 'footer.php'; ?>


        <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect	: 'none',
                    closeEffect	: 'none'
                });
            });
        </script>

        <script type="text/javascript">
            var about = document.getElementById('about');
            var builds = document.getElementById('builds');
            var projects = document.getElementById('projects');
            var contact = document.getElementById('contact');
            var specificPage = window.location.hash;
            var menu = false;

            // Handles browser back and forward.
            window.onhashchange = function(){
                showSection(translateHash(window.location.hash.substr(1)));
            };

            // Reads hash from url and changes page, defaults to about.
            if(specificPage === null || specificPage === ''){
                showSection('about');
            }
            else{
                showSection(translateHash(specificPage.substr(1)));
            }

            // Displays new section.
            function showSection(section){
                var toShow = document.getElementById(section);
                hideAll();
                toShow.style.display = 'block';
                topOfPage();
            }
            
            function hideAll(){
                about.style.display = 'none';
                builds.style.display = 'none';
                projects.style.display = 'none';
                contact.style.display = 'none';
            }
            
            function topOfPage(){
                window.scrollTo(0, 0);
            }
            
            function translateHash(value){
                switch(value){
                    case("about-me"):
                        return "about";
                    case("my-builds"):
                        return "builds";
                    case("my-projects"):
                        return "projects";
                    case("contact-me"):
                        return "contact";
                    default:
                        return "about";
                }
            }
            
            //Click menu for medium
            $(function() {
                $('#menu-click').each(function() { //click button
                    $(this).click(function() {
                        console.log("here");
                        $(this).siblings('#menu-items').slideToggle("fast");
                    });
                });
            });
            $(function() {
                $('#menu-items').each(function() { //click section
                    $(this).click(function() {
                        //close after a selection was made
                        $('#menu-click').siblings('#menu-items').slideToggle("fast");
                    });
                });
            });

            //Click menu for small/mobile
            $(function() {
                $('#menu-click-small').each(function() { //click button
                    $(this).click(function() {
                        $(this).siblings('#menu-items-small').slideToggle("fast");
                    });
                });
            });
            $(function() {
                $('#menu-items-small').each(function() { //click section
                    $(this).click(function() {
                        //close menu after a selection was made
                        $('#menu-click-small').siblings('#menu-items-small').slideToggle("fast");
                    });
                });
            });

            //Hover over menu
            function showMenuHover(){
                document.getElementById('menu-items').style.display = 'block';
            }
            function hideMenuHover(){
                document.getElementById('menu-items').style.display = 'none';
            }
            
        </script>
            
    </body>
</html>
