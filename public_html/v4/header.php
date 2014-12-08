<?php 
    echo "<div id='bannerBar'>
            <div class='banner-img'>
                <a href='index.php' id='banner'>
                    <img src='images/titlepic-v4.png' 
                         onmouseover=\"this.src = 'images/titlepic_hover-v4.png'\"
                         onmouseout=\"this.src = 'images/titlepic-v4.png'\"
                         alt='Chris Meyers. Developer, Tech enthusiast.' 
                         title='Home'>
                </a>
            </div>
            
            <div class='banner-img-small'>
                <a href='index.php' id='banner-small'>
                    <img src='images/cmlogocolor_nobackground_WHITE.png' 
                         onmouseover=\"this.src = 'images/cmlogocolor_nobackground_GREEN.png'\"
                         onmouseout=\"this.src = 'images/cmlogocolor_nobackground_WHITE.png'\"
                         alt='Chris Meyers. Developer, Tech enthusiast.'
                         title='Home'>
                </a>
            </div>
            
            <!-- FULL MENU -->
            <div class='banner-nav'>
                <a href='#contact-me'>
                    <div class='sectionTitle-contact' onclick=showSection('contact')>
                        <div class='sectionTitle-txt'>
                            <span class='headerLink'>Contact</span>
                        </div>
                    </div>
                </a>
                
                <a href='#my-projects'>
                    <div class='sectionTitle-projects' onclick=showSection('projects')>
                        <div class='sectionTitle-txt'>
                            <span class='headerLink'>Projects</span>
                        </div>
                    </div>
                </a>
                
                <a href='#my-builds'>
                    <div class='sectionTitle-builds' onclick=showSection('builds')>
                        <div class='sectionTitle-txt'>
                            <span class='headerLink'>Builds</span>
                        </div>
                    </div>
                </a>
                
                <a href='#about-me'>
                    <div class='sectionTitle-about' onclick=showSection('about')>
                        <div class='sectionTitle-txt'>
                            <span class='headerLink'>About</span>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- MEDIUM MENU-->
            <div id='banner-icon'>
                <div id='sectionTitle-menu'>
                    <ul id='menu-dropdown'>
                        <li>
                            <div id='menu-click'>
                                <img id='menu-toggle' src='images/menuIcon.png'>
                            </div>
                            <ul id='menu-items'>
                                <a href='#about-me' class='headerLink'>
                                    <li class='sectionTitle-txt' onclick=showSection('about')>About</li>
                                </a>
                                
                                <a href='#my-builds' class='headerLink'>
                                    <li onclick=showSection('builds')>Builds</li>
                                </a>
                                
                                <a href='#my-projects' class='headerLink'>
                                    <li onclick=showSection('projects')>Projects</li>
                                </a>
                                
                                <a href='#contact-me' class='headerLink'>
                                    <li onclick=showSection('contact')>Contact</li>
                                </a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- SMALL/MOBILE MENU -->
            <div id='banner-icon-small'>
                <div id='sectionTitle-menu-small'>
                    <ul id='menu-dropdown-small'>
                        <li>
                            <div id='menu-click-small'>
                                <img id='menu-toggle-small' src='images/menuIcon.png'>
                            </div>
                            <ul id='menu-items-small'>
                                <a href='#about-me' class='headerLink'>
                                    <li onclick=showSection('about')>About</li>
                                </a>

                                <a href='#my-builds' class='headerLink'>
                                    <li onclick=showSection('builds')>Builds</li>
                                </a>

                                <a href='#my-projects' class='headerLink'>
                                    <li onclick=showSection('projects')>Projects</li>
                                </a>

                                <a href='#contact-me' class='headerLink'>
                                    <li onclick=showSection('contact')>Contact</li>
                                </a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>"

?>