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
            <div class="section-header">About</div>

            <div class="content-text">
                Hey there! My name is <b>Chris Meyers</b> and this page is dedicated to letting you know who I am and 
                the technology skills that I possess.  I currently attend 
                <a class="fancytxt" href="http://www.rowan.edu/" target="_blank">Rowan University</a>
                in Glassboro, NJ where I am studying Computer Science.  Some of my interests include: Software Development, Web 
                Development and Computer Networking.  Over the past few years, I have picked up experience with the following 
                programming languages:
                
                <ul>
                    <li class="li-filled">Java, HTML5, CSS3, PHP, Javascript, C#, MySQL, Visual Basic, C, C++, Perl, MIPS assembly, 
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
                A full PDF version with contact information can be requested <a href="index.php?message=010&name=&email=&comment=I would like a copy of your resume.#contact-me" class="fancytxt">here</a>.
                </p>
                
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
                                <li><u>SSD:</u> Kingston V300 120GB</li>
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
        <div id="projects" class="content">
            <div class="section-header">Projects</div>

            <div class="content-text">
                <!-- cm -->
                <div class="proj">
                    <h2 class="first-header">chrismeyers.info, this webpage
                        <a href="https://github.com/chrismeyers/CM_WEBSITE/tree/master/public_html/v4" target="_blank" class="no-decoration">
                            <img src="images/social/github.png" 
                                onmouseover="this.src = 'images/social/github_hover.png'" 
                                onmouseout="this.src = 'images/social/github.png'" 
                                class="proj-link"
                                alt="Link to Code" 
                                title='View code'>
                        </a>
                    </h2>
                    
                    <h3>Personal Project, Fall 2013</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" rel="gallery1" href="images/project_screenshots/cm.png" title="Full size version of my personal website.">
                                <img src="images/project_screenshots/cm.png" 
                                     class="projImages-full-img-square"
                                     alt="Full size version of my personal website." 
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration"
                                   rel="gallery1" 
                                   href="images/project_screenshots/cm_mid.png"
                                   title="Mid size version of my personal website.">
                                    <img src="images/project_screenshots/cm_mid.png" 
                                         class="projImages-small-img-square"
                                         alt="Mid size version of my personal website." 
                                         title="Click to enlarge">

                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery1"
                                   href="images/project_screenshots/cm_mobile.png"
                                   title="Mobile version of my personal website.">
                                    <img src="images/project_screenshots/cm_mobile.png" 
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
                


                <!-- Genomic -->
                <br /> <hr>
                <div class="proj">
                    <h2>Genomic Solutions Now! Software
                        <a href="https://github.com/jayact/Genomic_SWE" target="_blank" class="no-decoration">
                            <img src="images/social/github.png" 
                                onmouseover="this.src = 'images/social/github_hover.png'" 
                                onmouseout="this.src = 'images/social/github.png'" 
                                class="proj-link"
                                alt="Link to Code" 
                                title='View code'>
                        </a>
                    </h2>
                    <h3>Software Engineering I, Rowan University, Spring 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" href="images/project_screenshots/genomic.png" title="Genomic Solutions Now! Software">
                                <img src="images/project_screenshots/genomic.png" 
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

                <!-- Pinelands -->
                <br /> <hr>
                <div class="proj">
                    <h2>Pinelands Tour Maker
                        <a href="http://elvis.rowan.edu/~meyers42/web/final/" target="_blank" class="no-decoration">
                            <img src="images/icons/link.png" 
                                onmouseover="this.src = 'images/icons/link_hover.png'" 
                                onmouseout="this.src = 'images/icons/link.png'" 
                                class="proj-link"
                                alt="Link to Pinelands Tour Maker" 
                                title='View site'>
                        </a>
                        <a href="https://github.com/chrismeyers/WEB_PROG/tree/master/public_html/pinelands" target="_blank" class="no-decoration">
                            <img src="images/social/github.png" 
                                onmouseover="this.src = 'images/social/github_hover.png'" 
                                onmouseout="this.src = 'images/social/github.png'" 
                                class="proj-link"
                                alt="Link to Code" 
                                title='View code'>
                        </a>
                    </h2>
                    <h3>Web Programming, Rowan University, Spring 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" rel="gallery2" href="images/project_screenshots/pinelands_landing.png" title="Landing page">
                                <img src="images/project_screenshots/pinelands_landing.png"
                                     class="projImages-full-img-square"
                                     alt="Pinelands landing page" 
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration"
                                   rel="gallery2" 
                                   href="images/project_screenshots/pinelands_tour.png"
                                   title="Tour page">
                                    <img src="images/project_screenshots/pinelands_tour.png" 
                                         class="projImages-small-img-square"
                                         alt="Pinelands tour page" 
                                         title="Click to enlarge">

                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery2"
                                   href="images/project_screenshots/pinelands_contact.png"
                                   title="Contact page">
                                    <img src="images/project_screenshots/pinelands_contact.png" 
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

                <!-- TTT -->
                <br /> <hr>
                <div class="proj">
                    <h2>Tic Tac Toe Android App
                        <a href="https://github.com/chrismeyers/Android-TicTacToe" target="_blank" class="no-decoration">
                            <img src="images/social/github.png" 
                                onmouseover="this.src = 'images/social/github_hover.png'" 
                                onmouseout="this.src = 'images/social/github.png'" 
                                class="proj-link"
                                alt="Link to Code" 
                                title='View code'>
                        </a>
                    </h2>
                    <h4>Intro to Android Programming, Rowan University, Summer 2014</h4>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" rel="gallery3" href="images/project_screenshots/ttt_port.png" title="Tic Tac Toe Portrait">
                                <img src="images/project_screenshots/ttt_port.png" 
                                     class="projImages-full-img-port"
                                     alt="Tic tac toe Portrait" 
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration" 
                                   rel="gallery3" 
                                   href="images/project_screenshots/ttt_land.png"
                                   title="Tic Tac Toe Landscape">
                                    <img src="images/project_screenshots/ttt_land.png" 
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

                <!-- LoL player data -->    
                <br /> <hr>
                <div class="proj">
                    <h2>League of Legends Player Data Parser
                        <a href="http://chrismeyers.info/projects/LoL_player_data/web" target="_blank" class="no-decoration">
                            <img src="images/icons/link.png" 
                                onmouseover="this.src = 'images/icons/link_hover.png'" 
                                onmouseout="this.src = 'images/icons/link.png'" 
                                class="proj-link"
                                alt="Link to LoL player data" 
                                title='View site'>
                        </a>
                        <a href="https://github.com/chrismeyers/LoL_player_data" target="_blank" class="no-decoration">
                            <img src="images/social/github.png" 
                                onmouseover="this.src = 'images/social/github_hover.png'" 
                                onmouseout="this.src = 'images/social/github.png'" 
                                class="proj-link"
                                alt="Link to Code" 
                                title='View code'>
                        </a>
                    </h2>
                    <h3>Personal Project, Summer 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" rel="gallery4" href="images/project_screenshots/loldata_landing.png" title="LoL player data landing">
                                <img src="images/project_screenshots/loldata_landing.png" 
                                     class="projImages-full-img-square"
                                     alt="LoL_player_data" 
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration"
                                   rel="gallery4"
                                   href="images/project_screenshots/loldata.png"
                                   title="LoL player data results">
                                    <img src="images/project_screenshots/loldata.png" 
                                         class="projImages-small-img-square"
                                         alt="LoL_player_data" 
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
                                    utilizes the Riot Games API to query and parse player data for a specified player.</dd>
                                    
                                <dt><b>My Role:</b></dt>
                                    <dd>Solo Project.</dd>
                                    
                                <dt><b>Status:</b></dt>
                                    <dd>Being maintained.</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- PCA -->
                <br /> <hr>
                <div class="proj">
                    <h2>PCA Visualization
                        <a href="https://github.com/chrismeyers/SeniorProj_BMS_PCA" target="_blank" class="no-decoration">
                            <img src="images/social/github.png" 
                                onmouseover="this.src = 'images/social/github_hover.png'" 
                                onmouseout="this.src = 'images/social/github.png'" 
                                class="proj-link"
                                alt="Link to Code" 
                                title='View code'>
                        </a>
                    </h2>
                    <h3>Senior Project, Rowan University, Fall 2014</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" rel="gallery5" href="images/project_screenshots/scoresPlot.png" 
                               title="A scores plot generated from calculated principal components.">
                                <img src="images/project_screenshots/scoresPlot.png"
                                     class="projImages-full-img-square"
                                     alt="A scores plot generated from calculated principal components."
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration"
                                   rel="gallery5" 
                                   href="images/project_screenshots/scoresData.png"
                                   title="The calculated principal component data.">
                                    <img src="images/project_screenshots/scoresData.png" 
                                         class="projImages-small-img-square"
                                         alt="The calculated principal component data." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery5"
                                   href="images/project_screenshots/addinBar.PNG"
                                   title="The Excel add-in bar. Scores and loadings plot were added in this project.">
                                    <img src="images/project_screenshots/addinBar.PNG" 
                                         class="projImages-small-img-land"
                                         alt="The Excel add-in bar. Scores and loadings plot were added in this project." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery5"
                                   href="images/project_screenshots/scoresInput-full.png"
                                   title="Input form that is dynamically populated based on the number of principal components.">
                                    <img src="images/project_screenshots/scoresInput-full.png" 
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
                
                <!-- cardiomyocyte -->
                <br /> <hr>
                <div class="proj">
                    <h2>Cardiomyocyte Data Analysis Automation
                        <a href="https://github.com/chrismeyers/BMS_Meyers_ExcelAutomation" target="_blank" class="no-decoration">
                            <img src="images/social/github.png" 
                                onmouseover="this.src = 'images/social/github_hover.png'" 
                                onmouseout="this.src = 'images/social/github.png'" 
                                class="proj-link"
                                alt="Link to Code" 
                                title='View code'>
                        </a>
                    </h2>
                    <h3>Personal Project, Winter 2015</h3>
                    <div class="projWrapper">
                        <div class="projImages">
                            <a class="fancybox no-decoration" rel="gallery6" href="images/project_screenshots/bms_rawData.png" 
                               title="The raw data taken from the lab to be processed.">
                                <img src="images/project_screenshots/bms_rawData.png"
                                     class="projImages-full-img-square"
                                     alt="The raw data taken from the lab to be processed."
                                     title="Click to enlarge">
                            </a>
                            <div class="projImages-small">
                                <a class="fancybox no-decoration"
                                   rel="gallery6" 
                                   href="images/project_screenshots/bms_formatForm.png"
                                   title="Input form used to select the worksheet to be processed.">
                                    <img src="images/project_screenshots/bms_formatForm.png" 
                                         class="projImages-small-img-square"
                                         alt="Input form used to select the worksheet to be processed." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery6" 
                                   href="images/project_screenshots/bms_formattedData.png"
                                   title="The entire formatted data set.">
                                    <img src="images/project_screenshots/bms_formattedData.png" 
                                         class="projImages-small-img-square"
                                         alt="The entire formatted data set." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery6" 
                                   href="images/project_screenshots/bms_finalData.png"
                                   title="A further refined formatted data set used for plotting.">
                                    <img src="images/project_screenshots/bms_finalData.png" 
                                         class="projImages-small-img-square"
                                         alt="A further refined formatted data set used for plotting." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery6" 
                                   href="images/project_screenshots/bms_graphForm.png"
                                   title="Input form used to select the variables to be plotted.">
                                    <img src="images/project_screenshots/bms_graphForm.png" 
                                         class="projImages-small-img-square"
                                         alt="Input form used to select the variables to be plotted." 
                                         title="Click to enlarge">
                                </a>
                                <a class="fancybox no-decoration"
                                   rel="gallery6" 
                                   href="images/project_screenshots/bms_plot.png"
                                   title="The final plot.">
                                    <img src="images/project_screenshots/bms_plot.png" 
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

            </div>
        </div>

<!-- CONTACT SECTION -->
        <div id="contact" class="content">
            <div class="section-header">Contact</div>

            <div class="content-text">
                <div id='errors'></div>
                <form action="email_form.php" method="post" target="_top">
                    <p class="message"><b>Questions? Comments? Concerns? Send me a message!</b></p>

                    <?php
                    if (!empty($_GET['message'])) {
                        $message = $_GET['message'];

                        if ($message == "000") {
                            echo '<p class="errors">' . "Name required. Please try again." . '</p>';
                        } 
                        elseif ($message == "001") {
                            echo '<p class="errors">' . "Email Address format is incorrect. Please try again." . '</p>';
                        }
                        elseif ($message == "010"){
                            echo '<p class="errors">' . "To request a full version of my resume, please enter your name, email and any additional information." . '</p>';
                        }
                        elseif ($message == "011"){
                            echo '<p class="errors">' . "Email Addresses don't match. Please try again." . '</p>';
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
                                <textarea class="textarea-mod" name="usercomments" placeholder="Message"><?php
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
            
            //Click menu
            $(function() {
                $(document).each(function() {
                    $(this).click(function(event) {
                        var currentID = event.target.id;

                        if(currentID === "menu-click" || currentID === "menu-toggle"){
                            //toggles menu on button click
                            $('#menu-click').siblings('#menu-items').slideToggle("fast");
                        }
                        else{
                            //closes menu when clicked anywhere other than button
                            $("#menu-click").siblings('#menu-items').slideUp("fast");
                        }
                    });
                });
                
                $(document).keyup(function(event) {
                    var currentKey = event.keyCode;
                    
                    //closes menu when esc is pressed
                    if(currentKey === 27){
                        $("#menu-click").siblings('#menu-items').slideUp("fast");
                    }
                });
            });
            
            //Hover menu
            function showMenuHover(){
                document.getElementById('menu-items').style.display = 'block';
            }
            function hideMenuHover(){
                document.getElementById('menu-items').style.display = 'none';
            }
            
        </script>
            
    </body>
</html>
