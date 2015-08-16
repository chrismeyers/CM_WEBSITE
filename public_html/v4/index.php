<!DOCTYPE html>
<html>
    <head>
        <title>Chris Meyers: Homepage</title>
        <link rel="shortcut icon" href="images/icons/icon.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Author" content="Chris Meyers" />
        <meta name="google-site-verification" content="hhNNTAa4qOt8sxeukKOI1u9o1w07nP3oHaT-07KvbO0" />
        <meta name="msvalidate.01" content="CF7D97B951B14774BF7EEE3D0BF09DB8" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

        <link rel="stylesheet" href="css/csselements.css" />
        <link rel="stylesheet" href="css/csselements_medium.css" />
        <link rel="stylesheet" href="css/csselements_small.css" />
        <link rel="stylesheet" href="css/csselements_print.css" />
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
        <div id="about-me" class="content">
            <div class="section-header">About</div>

            <div class="content-text">
                Hey there! My name is <b>Chris Meyers</b> and this page is dedicated to letting you know who I am and 
                the technology skills that I possess.  I studied Computer Science at 
                <a class="fancytxt" href="http://www.rowan.edu/" target="_blank">Rowan University</a>
                in Glassboro, NJ and earned a Bachelor of Science in Computer Science. 
                Currently, I am employed as a Software Engineer at 
                <a class="fancytxt" href="http://asrcfederal.com/mse" target="_blank">Mission Solutions Engineering</a>.
                Some of my professional interests include: Software Development, Web Development and Computer Networking.
                Over the past few years, I have picked up experience with the following programming languages and technologies:
                
                <ul>
                    <li class="li-filled">Java, C#, PHP, HTML, CSS, Javascript, MySQL, C++, C, Visual Basic, Perl, MIPS assembly, 
                                                      Scheme (LISP dialect), Ada, Lua.</li>
                </ul>
                
                <p>      
                Aside from programming, I have interests in Computer Aided Drafting (CAD) and 3D Modeling.  I have 4+ years of
                experience in the following programs:
                </p>

                <ul>
                    <li class="li-filled">AutoDesk AutoCAD, AutoDesk Inventor, Rhinoceros.</li>
                </ul>

                <p>
                During my senior year of High School, I competed in the NJ Technology Student Association annual 
                competition.  I placed 3rd in the 'Computer-Aided Design (CAD), 3D, Engineering' category
                (<a class="fancytxt" href="http://njtsa.pages.tcnj.edu/files/2011/04/2011-HS-Event-Results-PPT1.pdf#page=7" target="_blank">Event Results</a>).
                </p>

                <p>
                For security reasons, an abbreviated HTML version of my resume can be viewed <a class="fancytxt" href="resume.php">here</a>. 
                A full PDF version with contact information can be requested <a href="index.php?message=reqres&name=&email=&comment=I would like a copy of your resume.#contact" class="fancytxt">here</a>.
                </p>
                
                <div class="instructions">
                    To view the other sections of this website, use the menu in the top right corner or the links below:
                    <ul>
                        <li><a href='#builds' class="fancytxt" onclick="showSection('my-builds')">Builds</a></li>
                        <li><a href='#projects' class="fancytxt" onclick="showSection('my-projects')">Projects</a></li>
                        <li><a href='#contact' class="fancytxt" onclick="showSection('contact-me')">Contact</a></li>
                    </ul>
                </div>

            </div>
        </div>

<!-- BUILDS SECTION -->
        <div id="my-builds" class="content">
            <div class="section-header">Builds</div>

            <div class="content-text">
                <!-- MATT'S BUILD -->
                <div class="build">
                    <h3 class="first-header">March 2012 - Built for my brother, Matt.</h3>
                    <div class="build-info">
                        <div class="build-pic">
                            <a href="images/builds/mattBuild.jpg" class="fancybox" title="Matt's Computer">
                                <img src="images/builds/mattBuild.jpg" 
                                     class="build-pic-img-land"
                                     alt="Matt's computer" 
                                     title="Click to enlarge">
                            </a>
                        </div>

                        <div class="build-specs">
                            <b>Specifications</b>
                            <ul>
                                <li><u>Processor:</u> AMD 6-core FX-6100 &#64; 3.3GHz</li>
                                <li><u>Mobo:</u> Gigabyte 990FXA-UD3</li>
                                <li><u>Memory:</u> 8GB G.SKILL Ripjaws Series 1600MHz</li>
                                <li><u>HDD:</u> WD5000AAKX 500GB &#64; 7200rpm</li>
                                <li><u>Video Card:</u> XFX Radeon 6870 1GB</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br />
                <hr />

                <!-- MY BUILD -->
                <div class="build">
                    <h3>February 2013 - Built for myself.</h3>
                    <div class="build-info">
                        <div class="build-pic">
                            <a href="images/builds/myBuild.jpg" class="fancybox" title="My Computer">
                                <img src="images/builds/myBuild.jpg" 
                                     class="build-pic-img-port"
                                     alt="My computer" 
                                     title="Click to enlarge">
                            </a>
                        </div> 

                        <div class="build-specs">
                            <b>Specifications</b>
                            <ul>
                                <li><u>Processor:</u> Intel Core i7 3770k &#64; 4.2GHz</li>
                                <li><u>Mobo:</u> Asus P8Z77-V LK</li>
                                <li><u>Memory:</u> 16GB Corsair Vengeance 1600MHz</li> 
                                <li><u>HDD:</u> WD6400AAKS 640GB &#64; 7200rpm, ST31000524AS 1TB &#64; 7200rpm</li>
                                <li><u>SSD:</u> Samsung 850 Pro 256GB</li>
                                <li><u>Video Card:</u> EVGA GeForce GTX 670 FTW 2GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <br />
                <hr />

                <!-- MARK'S BUILD -->
                <div class="build">
                    <h3>September 2013 - Built for my Neighbor.</h3>
                    <div class="build-info">
                        <div class="build-pic">
                            <a href="images/builds/markBuild.jpg" class="fancybox" title="Neighbor's Computer">
                                <img src="images/builds/markBuild.jpg" 
                                     class="build-pic-img-port"
                                     alt="Mark's computer" 
                                     title="Click to enlarge">
                            </a>
                        </div>

                        <div class="build-specs">
                            <b>Specifications</b>
                            <ul>
                                <li><u>Processor:</u> Intel Core i7 4770k &#64; 3.5GHz</li>
                                <li><u>Mobo:</u> MSI H87-G43</li>
                                <li><u>Memory:</u> 16GB G.SKILL Ripjaws X Series 1600MHz</li>
                                <li><u>HDD:</u> ST1000DM003 1TB &#64; 7200rpm</li>
                                <li><u>SSD:</u> Kingston HyperX 3K 120GB</li>
                                <li><u>Video Card:</u> EVGA GeForce GTX 770 SuperClocked 2GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
                
<!-- PROJECTS SECTION -->
        <div id="my-projects" class="content">
            <div class="section-header">Projects</div>

            <div class="content-text">
                <!-- cm (cm)-->
                <div class="proj">
                    <h2 class="first-header">chrismeyers.info, this webpage
                        <div class="proj-link-block">
                            <span class="proj-bullets">&bull;</span>
                            <a href="https://github.com/chrismeyers/CM_WEBSITE/tree/master/public_html/v4" target="_blank" class="no-decoration">
                                <img src="images/social/github.png" 
                                    onmouseover="this.src = 'images/social/github_hover.png'; showProjectString('code', 'cm');" 
                                    onmouseout="this.src = 'images/social/github.png'; hideProjectString('code', 'cm')" 
                                    class="proj-link"
                                    alt="Link to Code" 
                                    title='View code'>

                                <span class="fancytxt" id="slide-code-cm">Code</span>
                            </a>
                        </div>
                    </h2>
                    
                    <h3>Personal Project, Fall 2013</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" 
                               rel="gallery1" 
                               href="images/project_screenshots/cm/cm.png" 
                               title="Full size version of my personal website.">
                                <img src="images/project_screenshots/cm/cm.png" 
                                     class="projImages-full-img-square"
                                     alt="Full size version of my personal website." 
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration"
                                   rel="gallery1" 
                                   href="images/project_screenshots/cm/cm_mid.png"
                                   title="Mid size version of my personal website.">
                                    <img src="images/project_screenshots/cm/cm_mid.png" 
                                         class="projImages-small-img-square"
                                         alt="Mid size version of my personal website." 
                                         title="Click to enlarge">

                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery1"
                                   href="images/project_screenshots/cm/cm_mobile.png"
                                   title="Mobile version of my personal website.">
                                    <img src="images/project_screenshots/cm/cm_mobile.png" 
                                         class="projImages-small-img-port"
                                         alt="Mobile version of my personal website." 
                                         title="Click to enlarge">
                                </a>
                            </div>
                        </div>
                        </div>

                        <div class="projDesc">
                            <dl>
                                <dt><b>Language(s):</b></dt>
                                    <dd>PHP, Javascript, HTML5, CSS3</dd>
                                    
                                <dt><b>Description:</b></dt>
                                    <dd>My first web project.  A digital representation of myself.</dd>
                                    
                                <dt><b>My Role:</b></dt>
                                    <dd>Solo project.</dd>
                                    
                                <dt><b>Status:</b></dt>
                                    <dd>Being maintained.</dd>
                            </dl>
                        </div>
                    </div>
                


                <!-- Genomic (genomic) -->
                <br /> <hr>
                <div class="proj">
                    <h2>Genomic Solutions Now! Software
                        <div class="proj-link-block">
                            <span class="proj-bullets">&bull;</span>
                            <a href="https://github.com/jayact/Genomic_SWE" target="_blank" class="no-decoration">
                                <img src="images/social/github.png" 
                                    onmouseover="this.src = 'images/social/github_hover.png'; showProjectString('code', 'genomic');" 
                                    onmouseout="this.src = 'images/social/github.png'; hideProjectString('code', 'genomic');" 
                                    class="proj-link"
                                    alt="Link to Code" 
                                    title='View code'>

                                <span class="fancytxt" id="slide-code-genomic">Code</span>
                            </a>
                        </div>
                    </h2>
                    <h3>Software Engineering I, Rowan University, Spring 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" href="images/project_screenshots/genomic/genomic.png" title="Genomic Solutions Now! Software">
                                <img src="images/project_screenshots/genomic/genomic.png" 
                                     class="projImages-full-img-land"
                                     alt="Genomic Solutions Now! Software" 
                                     title="Click to enlarge">
                            </a>
                        </div>

                        <div class="projDesc">
                            <dl>
                                <dt><b>Language(s):</b></dt>
                                    <dd>Java</dd>
                                    
                                <dt><b>Description:</b></dt>
                                    <dd>An application built for
                                    <a href="http://www.genomicsolutionsnow.com/" class="fancytxt" target="_blank">Genomic Solutions Now</a>
                                    that simplifies the patient reports generated by a lab.</dd>
                                    
                                <dt><b>My Role:</b></dt>
                                    <dd>Responsible for parsing the input reports.  I also handled 
                                        outputting the simplified reports to an Excel spreadsheet.</dd>
                                    
                                <dt><b>Status:</b></dt>
                                    <dd>Complete.</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- Pinelands (pine) -->
                <br /> <hr>
                <div class="proj">
                    <h2>Pinelands Tour Maker
                        <div class="proj-link-block">
                            <span class="proj-bullets">&bull;</span>
                            <a href="http://elvis.rowan.edu/~meyers42/web/final/" target="_blank" class="no-decoration">
                                <img src="images/icons/link.png" 
                                    onmouseover="this.src = 'images/icons/link_hover.png'; showProjectString('website', 'pine');" 
                                    onmouseout="this.src = 'images/icons/link.png'; hideProjectString('website', 'pine');" 
                                    class="proj-link"
                                    alt="Link to Pinelands Tour Maker" 
                                    title='View site'>
                                
                                <span class="fancytxt" id="slide-website-pine">Website</span>
                            </a>
                            <span class="proj-bullets">&bull;</span>
                            <a href="https://github.com/chrismeyers/WEB_PROG/tree/master/public_html/pinelands" target="_blank" class="no-decoration">
                                <img src="images/social/github.png" 
                                    onmouseover="this.src = 'images/social/github_hover.png'; showProjectString('code', 'pine');" 
                                    onmouseout="this.src = 'images/social/github.png'; hideProjectString('code', 'pine');" 
                                    class="proj-link"
                                    alt="Link to Code" 
                                    title='View code'>
                                
                                <span class="fancytxt" id="slide-code-pine">Code</span>
                            </a>
                        </div>
                    </h2>
                    <h3>Web Programming, Rowan University, Spring 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" 
                               rel="gallery2" 
                               href="images/project_screenshots/pinelands/pinelands_landing.png" 
                               title="Landing page">
                                <img src="images/project_screenshots/pinelands/pinelands_landing.png"
                                     class="projImages-full-img-square"
                                     alt="Pinelands landing page" 
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration"
                                   rel="gallery2" 
                                   href="images/project_screenshots/pinelands/pinelands_tour.png"
                                   title="Tour page">
                                    <img src="images/project_screenshots/pinelands/pinelands_tour.png" 
                                         class="projImages-small-img-square"
                                         alt="Pinelands tour page" 
                                         title="Click to enlarge">

                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery2"
                                   href="images/project_screenshots/pinelands/pinelands_contact.png"
                                   title="Contact page">
                                    <img src="images/project_screenshots/pinelands/pinelands_contact.png" 
                                         class="projImages-small-img-square"
                                         alt="Pinelands contact page" 
                                         title="Click to enlarge">
                                </a>
                            </div>
                        </div>

                        <div class="projDesc">
                            <dl>
                                <dt><b>Language(s):</b></dt>
                                    <dd>PHP, Javascript, MySQL, HTML5, CSS3</dd>

                                <dt><b>Description:</b></dt>
                                    <dd>An application that makes tours depending on selected points of interest.</dd>

                                <dt><b>My Role:</b></dt>
                                    <dd>Solo project.</dd>

                                <dt><b>Status:</b></dt>
                                    <dd>Complete.</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- Android TicTacToe (ttt) -->
                <br /> <hr>
                <div class="proj">
                    <h2>Tic Tac Toe Android App
                        <div class="proj-link-block">
                            <span class="proj-bullets">&bull;</span>
                            <a href="https://github.com/chrismeyers/Android-TicTacToe" target="_blank" class="no-decoration">
                                <img src="images/social/github.png" 
                                    onmouseover="this.src = 'images/social/github_hover.png'; showProjectString('code', 'ttt');" 
                                    onmouseout="this.src = 'images/social/github.png'; hideProjectString('code', 'ttt');" 
                                    class="proj-link"
                                    alt="Link to Code" 
                                    title='View code'>

                                <span class="fancytxt" id="slide-code-ttt">Code</span>
                            </a>
                        </div>
                    </h2>
                    <h4>Intro to Android Programming, Rowan University, Summer 2014</h4>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" 
                               rel="gallery3" 
                               href="images/project_screenshots/ttt/ttt_port.png" 
                               title="Tic Tac Toe Portrait">
                                <img src="images/project_screenshots/ttt/ttt_port.png" 
                                     class="projImages-full-img-port"
                                     alt="Tic tac toe Portrait" 
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration" 
                                   rel="gallery3" 
                                   href="images/project_screenshots/ttt/ttt_land.png"
                                   title="Tic Tac Toe Landscape">
                                    <img src="images/project_screenshots/ttt/ttt_land.png" 
                                         class="projImages-small-img-land"
                                         alt="Tic tac toe Landscape" 
                                         title="Click to enlarge">
                                </a>
                            </div>
                        </div>

                        <div class="projDesc">
                            <dl>
                                <dt><b>Language(s):</b></dt>
                                    <dd>Java, XML</dd>
                                    
                                <dt><b>Description:</b></dt>
                                    <dd>An android version of tic tac toe.</dd>
                                    
                                <dt><b>My Role:</b></dt>
                                    <dd>Solo Project.</dd>
                                    
                                <dt><b>Status:</b></dt>
                                    <dd>Complete.</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- LoL player data (lol_player) -->    
                <br /> <hr>
                <div class="proj">
                    <h2>League of Legends Player Data Parser
                        <div class="proj-link-block">
                            <span class="proj-bullets">&bull;</span>
                            <a href="http://chrismeyers.info/projects/LoL_player_data/web" target="_blank" class="no-decoration">
                                <img src="images/icons/link.png" 
                                    onmouseover="this.src = 'images/icons/link_hover.png'; showProjectString('website', 'lol_player');" 
                                    onmouseout="this.src = 'images/icons/link.png'; hideProjectString('website', 'lol_player');" 
                                    class="proj-link"
                                    alt="Link to LoL player data" 
                                    title='View site'>

                                <span class="fancytxt" id="slide-website-lol_player">Website</span>
                            </a>
                            <span class="proj-bullets">&bull;</span>
                            <a href="https://github.com/chrismeyers/LoL_player_data" target="_blank" class="no-decoration">
                                <img src="images/social/github.png" 
                                    onmouseover="this.src = 'images/social/github_hover.png'; showProjectString('code', 'lol_player');" 
                                    onmouseout="this.src = 'images/social/github.png'; hideProjectString('code', 'lol_player');" 
                                    class="proj-link"
                                    alt="Link to Code" 
                                    title='View code'>
                                
                                <span class="fancytxt" id="slide-code-lol_player">Code</span>
                            </a>
                        </div>
                    </h2>
                    <h3>Personal Project, Summer 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration"
                               rel="gallery4"
                               href="images/project_screenshots/lol_playerdata/loldata_landing.png"
                               title="LoL player data landing page.">
                                <img src="images/project_screenshots/lol_playerdata/loldata_landing.png" 
                                     class="projImages-full-img-square"
                                     alt="LoL player data landing page." 
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration"
                                   rel="gallery4"
                                   href="images/project_screenshots/lol_playerdata/loldata.png"
                                   title="LoL player data results.">
                                    <img src="images/project_screenshots/lol_playerdata/loldata.png" 
                                         class="projImages-small-img-square"
                                         alt="LoL player data results." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery4"
                                   href="images/project_screenshots/lol_playerdata/loldata_small.png"
                                   title="LoL player data results optimized for mobile.">
                                    <img src="images/project_screenshots/lol_playerdata/loldata_small.png" 
                                         class="projImages-small-img-port"
                                         alt="LoL player data results optimized for mobile." 
                                         title="Click to enlarge">
                                </a>
                            </div>
                        </div>
                        <div class="projDesc">
                            <dl>
                                <dt><b>Language(s):</b></dt>
                                    <dd>PHP, HTML5, CSS3</dd>
                                    
                                <dt><b>Description:</b></dt>
                                    <dd>An application based on the video game <i>League of Legends</i> that
                                    utilizes the Riot Games API to query and parse player data for a specified player.
                                    <p></p>
                                    If you don't have a <i>League of Legends</i> account and would like to use the 
                                    website, you can use my account name 
                                    (<a href="http://chrismeyers.info/projects/LoL_player_data/web/main.php?name=Spicy+Criticals&region=na" class="fancytxt" target="_blank">Spicy Criticals</a>)
                                    to test functionality.
                                    </dd>
                                    
                                <dt><b>My Role:</b></dt>
                                    <dd>Solo Project.</dd>
                                    
                                <dt><b>Status:</b></dt>
                                    <dd>Being maintained.</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- PCA (pca) -->
                <br /> <hr>
                <div class="proj">
                    <h2>PCA Visualization
                        <div class="proj-link-block">
                            <span class="proj-bullets">&bull;</span>
                            <a href="https://github.com/chrismeyers/SeniorProj_BMS_PCA" target="_blank" class="no-decoration">
                                <img src="images/social/github.png" 
                                    onmouseover="this.src = 'images/social/github_hover.png'; showProjectString('code', 'pca');" 
                                    onmouseout="this.src = 'images/social/github.png'; hideProjectString('code', 'pca');" 
                                    class="proj-link"
                                    alt="Link to Code" 
                                    title='View code'>

                                <span class="fancytxt" id="slide-code-pca">Code</span>
                            </a>
                        </div>
                    </h2>
                    <h3>Senior Project, Rowan University, Fall 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" rel="gallery5" href="images/project_screenshots/pca/scoresPlot.png" 
                               title="A scores plot generated from calculated principal components.">
                                <img src="images/project_screenshots/pca/scoresPlot.png"
                                     class="projImages-full-img-square"
                                     alt="A scores plot generated from calculated principal components."
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration"
                                   rel="gallery5" 
                                   href="images/project_screenshots/pca/scoresData.png"
                                   title="The calculated principal component data.">
                                    <img src="images/project_screenshots/pca/scoresData.png" 
                                         class="projImages-small-img-square"
                                         alt="The calculated principal component data." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery5"
                                   href="images/project_screenshots/pca/addinBar.PNG"
                                   title="The Excel add-in bar. Scores and loadings plot were added in this project.">
                                    <img src="images/project_screenshots/pca/addinBar.PNG" 
                                         class="projImages-small-img-land"
                                         alt="The Excel add-in bar. Scores and loadings plot were added in this project." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery5"
                                   href="images/project_screenshots/pca/scoresInput-full.png"
                                   title="Input form that is dynamically populated based on the number of principal components.">
                                    <img src="images/project_screenshots/pca/scoresInput-full.png" 
                                         class="projImages-small-img-port"
                                         alt="Input form that is dynamically populated based on the number of principal components." 
                                         title="Click to enlarge">
                                </a>
                            </div>
                        </div>

                        <div class="projDesc">
                            <dl>
                                <dt><b>Language(s)</b>:</dt>
                                    <dd>C#</dd>

                                <dt><b>Description:</b></dt>
                                    <dd>Principal component analysis (PCA) is a technique used to reduce dimensionality of
                                        a multivariate data set in order to better understand potentially correlated data.
                                        The goal of this project was to take an Excel add-in developed by Bristol-Myers 
                                        Squibb and further develop it to have visualization functionality.
                                    </dd>

                                <dt><b>My Role:</b></dt>
                                    <dd>Responsible for parsing the calculated principal component worksheets and storing 
                                        them in data structures used for plotting.</dd>

                                <dt><b>Status:</b></dt>
                                    <dd>Complete.</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                
                <!-- cardiomyocyte (bms) -->
                <br /> <hr>
                <div class="proj">
                    <h2>Cardiomyocyte Data Analysis Automation
                        <div class="proj-link-block">
                            <span class="proj-bullets">&bull;</span>
                            <a href="https://github.com/chrismeyers/BMS_Meyers_ExcelAutomation" target="_blank" class="no-decoration">
                                <img src="images/social/github.png" 
                                    onmouseover="this.src = 'images/social/github_hover.png'; showProjectString('code', 'bms');" 
                                    onmouseout="this.src = 'images/social/github.png'; hideProjectString('code', 'bms');" 
                                    class="proj-link"
                                    alt="Link to Code" 
                                    title='View code'>

                                <span class="fancytxt" id="slide-code-bms">Code</span>
                            </a>
                        </div>
                    </h2>
                    <h3>Personal Project, Winter 2015</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" rel="gallery6" href="images/project_screenshots/bms/bms_rawData.png" 
                               title="The raw data taken from the lab to be processed.">
                                <img src="images/project_screenshots/bms/bms_rawData.png"
                                     class="projImages-full-img-square"
                                     alt="The raw data taken from the lab to be processed."
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration"
                                   rel="gallery6" 
                                   href="images/project_screenshots/bms/bms_formatForm.png"
                                   title="Input form used to select the worksheet to be processed.">
                                    <img src="images/project_screenshots/bms/bms_formatForm.png" 
                                         class="projImages-small-img-square"
                                         alt="Input form used to select the worksheet to be processed." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery6" 
                                   href="images/project_screenshots/bms/bms_formattedData.png"
                                   title="The entire formatted data set.">
                                    <img src="images/project_screenshots/bms/bms_formattedData.png" 
                                         class="projImages-small-img-square"
                                         alt="The entire formatted data set." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery6" 
                                   href="images/project_screenshots/bms/bms_finalData.png"
                                   title="A further refined formatted data set used for plotting.">
                                    <img src="images/project_screenshots/bms/bms_finalData.png" 
                                         class="projImages-small-img-square"
                                         alt="A further refined formatted data set used for plotting." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery6" 
                                   href="images/project_screenshots/bms/bms_graphForm.png"
                                   title="Input form used to select the variables to be plotted.">
                                    <img src="images/project_screenshots/bms/bms_graphForm.png" 
                                         class="projImages-small-img-square"
                                         alt="Input form used to select the variables to be plotted." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery6" 
                                   href="images/project_screenshots/bms/bms_plot.png"
                                   title="The final plot.">
                                    <img src="images/project_screenshots/bms/bms_plot.png" 
                                         class="projImages-small-img-square"
                                         alt="The final plot." 
                                         title="Click to enlarge">
                                </a>
                            </div>
                        </div>

                        <div class="projDesc">
                            <dl>
                                <dt><b>Language(s)</b>:</dt>
                                    <dd>C#</dd>

                                <dt><b>Description:</b></dt>
                                    <dd>An Excel add-in that was developed to automate data analysis for Dan Meyers, scientist
                                        at Bristol-Myers Squibb pharmaceutical company.
                                        The add-in takes in a raw data set, formats the data, performs statistical
                                        calculations and plots specified variables to a column graph.
                                        Data is extracted from an <a href="http://www.ionoptix.com/" class="fancytxt" target="_blank">IonOptix</a>
                                        contraction/calcium monitoring system and is an important add-in for data analysis.
                                    </dd>

                                <dt><b>My Role:</b></dt>
                                    <dd>Solo Project.</dd>

                                <dt><b>Status:</b></dt>
                                    <dd>Complete.</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- LoL server status checker (lol_status) -->
                <br /> <hr>
                <div class="proj">
                    <h2>League of Legends Server Status Checker
                        <div class="proj-link-block">
                            <span class="proj-bullets">&bull;</span>
                            <a href="https://github.com/chrismeyers/rito-pls" target="_blank" class="no-decoration">
                                <img src="images/social/github.png" 
                                    onmouseover="this.src = 'images/social/github_hover.png'; showProjectString('code', 'lol_status');" 
                                    onmouseout="this.src = 'images/social/github.png'; hideProjectString('code', 'lol_status');" 
                                    class="proj-link"
                                    alt="Link to Code" 
                                    title='View code'>

                                <span class="fancytxt" id="slide-code-lol_status">Code</span>
                            </a>
                        </div>
                    </h2>
                    <h3>Personal Project, June 2015</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" rel="gallery7" href="images/project_screenshots/lol_status/gui.png" 
                               title="The Java GUI that displays the current status of services in a specified region.">
                                <img src="images/project_screenshots/lol_status/gui.png"
                                     class="projImages-full-img-square"
                                     alt="The Java GUI that displays the current status of services in a specified region."
                                     title="Click to enlarge">
                            </a>
                             <div class="projImages-small">
                                <a class="fancybox no-decoration"
                                   rel="gallery7" 
                                   href="images/project_screenshots/lol_status/polling.png"
                                   title="Input form that allows users to specify how often the GUI updates.">
                                    <img src="images/project_screenshots/lol_status/polling.png" 
                                         class="projImages-small-img-square"
                                         alt="Input form that allows users to specify how often the GUI updates." 
                                         title="Click to enlarge">
                                </a>
                                 
                                 <a class="fancybox no-decoration"
                                   rel="gallery7" 
                                   href="images/project_screenshots/lol_status/tray.png"
                                   title="Notification area functionality.">
                                    <img src="images/project_screenshots/lol_status/tray.png" 
                                         class="projImages-small-img-square"
                                         alt="Notification area functionality." 
                                         title="Click to enlarge">
                                </a>
                             </div>
                        </div>

                        <div class="projDesc">
                            <dl>
                                <dt><b>Language(s)</b>:</dt>
                                    <dd>Java</dd>

                                <dt><b>Description:</b></dt>
                                    <dd>A Java application that reports current <i>League of Legends</i> service statuses for a specified region.
                                        The application queries the <i>League of Legends</i> API periodically and presents the current status of
                                        several services (Boards/Forums, Game, Store and Website).
                                        <p></p>
                                        The purpose of this project was to get more practice with Java GUI building and multithreaded programming.
                                        The polling operation takes place on a new thread that allows for the program to function normally while
                                        maintaining periodic server checks.
                                    </dd>

                                <dt><b>My Role:</b></dt>
                                    <dd>Solo Project.</dd>

                                <dt><b>Status:</b></dt>
                                    <dd>Complete.</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </div>

<!-- CONTACT SECTION -->
        <div id="contact-me" class="content">
            <div class="section-header">Contact</div>

            <div class="content-text">
                <div id='errors'></div>
                <form action="email_form.php" method="post" target="_top">
                    <p class="message"><b>Questions? Comments? Concerns? Send me a message!</b></p>

                    <?php
                    if (!empty($_GET['message'])) {
                        $message = $_GET['message'];
                        
                        if(strcmp($message, "000") != 0) {
                            $err_arr = str_split($message);
                            
                            echo '<p class="errors">';
                            if ($err_arr[0] == "1") {
                                echo "- Name required. Please try again." . '<br />';
                            } 
                            if ($err_arr[1] == "1") {
                                echo "- Email Address format is incorrect. Please try again." . '<br />';
                            }
                            if ($err_arr[2] == "1") {
                                echo "- Email Addresses don't match. Please try again." . '<br />';
                            }
                            echo '</p>';
                        }
                        
                        if ($message == "reqres") {
                            echo '<p class="errors">' . "To request a full version of my resume, please enter your name, email and any additional information." . '</p>';
                        }
                        
                    }
                    ?><p></p>

                    <table class="inputs">
                        <tr>
                            <td class="name-input">
                                <input class="inputbox-mod" type="text" placeholder="Name" name="name"<?php
                                if (!empty($_GET['name'])) {
                                    $name = $_GET['name'];
                                    echo 'value="' . $name . '">';
                                } else {
                                    echo '>';
                                }
                                ?></td>
                        </tr>
                        <tr>
                            <td class="email-input">
                                <input class="inputbox-mod" type="email" placeholder="Primary Email" name="fromemail"<?php
                                if (!empty($_GET['email'])) {
                                    $fromemail = $_GET['email'];
                                    echo 'value="' . $fromemail . '">';
                                } else {
                                    echo '>';
                                }
                                ?></td>

                            <td class="email-input">
                                <input class="inputbox-mod" type="email" placeholder="Confirm Primary Email" name="confirmfromemail"<?php
                                if (!empty($_GET['confirmemail'])) {
                                    $fromemail = $_GET['confirmemail'];
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
                                <textarea class="textarea-mod" name="usercomments" placeholder="Comment" maxlength="500"><?php
                                    if (!empty($_GET['comment'])) {
                                        $usercomments = $_GET['comment'];
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
        <div class="spacer"></div>
        <?php include 'footer.php'; ?>

        <script type="text/javascript" src="js/jselements.js"></script>
            
    </body>
</html>
