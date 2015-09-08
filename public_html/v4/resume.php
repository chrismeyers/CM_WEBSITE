<!DOCTYPE html>
<html>
    <head>
        <title>Chris Meyers: Resume</title>
        <link rel="shortcut icon" href="images/icons/icon.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Author" content="Chris Meyers" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

        <link rel="stylesheet" href="css/csselements_resume.css" />
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
        <h1>Christopher C. Meyers</h1>
        
        <h2>Education</h2>
        <table class="wrapper">
            <tr>
                <td class="left">&bull; <b>Rowan University, Glassboro, NJ</b></td>
                <td class="right"><b>May 2015</b></td>
            </tr>
            <tr>
                <td class="first">&#9702; Bachelor of Science, Computer Science</td>
                <td></td>
            </tr>
        </table>

        <h2>Work Experience</h2>
        <table class="wrapper">
            <tr>
                <td class="left">&bull; <b>Mission Solutions Engineering, Moorestown, NJ</b></td>
                <td class="right"><b>May 2015  – Present</b></td>
            </tr>
            <tr>
                <td class="left first">&#9702;Software Engineer, Display</td>
                <td></td>
            </tr>
            <tr>
                <td class="left second">&#9642; Designed, developed and tested solutions
                    for the real-time Aegis Ballistic Missile Defense (BMD) program.</td>
                <td></td>
            </tr>
        </table>
        
        <br />
        
        <table class="wrapper">
            <tr>
                <td class="left">&bull; <b>Mission Solutions Engineering, Moorestown, NJ</b></td>
                <td class="right"><b>March 2015  – May 2015</b></td>
            </tr>
            <tr>
                <td class="left first">&#9702;Software Engineer Intern, Display</td>
                <td></td>
            </tr>
            <tr>
                <td class="left second">&#9642; Assisted a team working on the Aegis
                    Ballistic Missile Defense (BMD) program.</td>
                <td></td>
            </tr>
        </table>
        
        <br />
        
        <table class="wrapper">
            <tr>
                <td class="left">&bull; <b>Rowan University, History Department</b></td>
                <td class="right"><b>November 2013 – May 2015</b></td>
            </tr>
            <tr>
                <td class="left first">&#9702; Web Developer</td>
                <td></td>
            </tr>
            <tr>
                <td class="left second">&#9642; Updated and maintained the History
                    Department’s website.</td>
                <td></td>
            </tr>
        </table>
        
        <br />
        
        <table class="wrapper">
            <tr>
                <td class="left">&bull; <b>Rowan University, Network & System Services</b></td>
                <td class="right"><b>July 2014 – September 2014</b></td>
            </tr>
            <tr>
                <td class="left first">&#9702; Network Assistant</td>
                <td></td>
            </tr>
            <tr>
                <td class="left second">&#9642; Installed and maintained network
                    infrastructure across Rowan’s main campus.</td>
                <td></td>
            </tr>
        </table>
        
        <h2>Technical Experience</h2>
        <table class="wrapper">
            <tr>
                <td class="left">&bull; Experience developing various software using
                    languages such as Java, C# and C++.</td>
            </tr>
            
            <tr>
                <td class="left">&bull; Experience developing websites and web applications using
                    technologies such as HTML5, CSS3, PHP, Javascript, JSON and MySQL.</td>
            </tr>
            
            <tr>
                <td class="left">&bull; Member of a software engineering team that
                    produced a piece of software for the Genomic Solutions Now Company
                    during the Spring 2014 semester at Rowan University.</td>
            </tr>
            
            <tr>
                <td class="left">&bull; Leader of a software development team that
                    further developed an Excel add-in to perform Principal Component
                    Analysis (PCA) visualization during the Fall 2014 semester at
                    Rowan University in collaboration with Bristol-Myers Squibb.</td>
            </tr>
            
            <tr>
                <td class="left">&bull; Experience with ClearCase, Git and Subversion
                    revision control.</td>
            </tr>
            
            <tr>
                <td class="left">&bull; Experience debugging software with visual
                    debuggers (Netbeans, Eclipse and Visual Studio) and the command
                    line based GNU debugger (GDB).</td>
            </tr>
            
            <tr>
                <td class="left">&bull; Highly proficient with Microsoft Office.</td>
            </tr>
            
            <tr>
                <td class="left">&bull; Highly proficient with Microsoft Windows and Mac OSX.</td>
            </tr>
            
            <tr>
                <td class="left">&bull; Proficient with command line interfaces (Unix, Linux and Solaris).</td>
            </tr>
            
            <tr>
                <td class="left">&bull; Experience installing, maintaining and 
                    relocating data center hardware.</td>
            </tr>
            
            <tr>
                <td class="left">&bull; Very familiar with computer hardware.  
                    Built multiple computers from individual components.</td>
            </tr>
            
            <tr>
                <td class="left">&bull; 4 years of Computer Aided Drafting experience
                    using technologies such as Autodesk AutoCAD, Rhinoceros 4 and Autodesk
                    Inventor.</td>
            </tr>
            
        </table>
        
        <div class="footer">
            <?php
                $filename = 'resume.php';
                if (file_exists($filename)) {
                    echo "&lt;&lt; <i>$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename)) . "</i>&gt;&gt;";
                }
            ?>
        </div>
    </body>
</html>
