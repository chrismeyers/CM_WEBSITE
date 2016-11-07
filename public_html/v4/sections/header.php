<div id="bannerBar">
            <div class="banner-img">
                <a href="index.php" id="banner">
                    <img src="images/banner/v4/no-border/titlepic-v4-NObrackets.png" 
                         alt="Chris Meyers. Developer, Tech Enthusiast." 
                         class="banner-img"
                         title="Home">
                </a>
            </div>
            
            <div class="banner-img-small">
                <a href="index.php" id="banner-small">
                    <img src="images/logos/v2/meyers-logo-white.png" 
                         onmouseover="this.src='images/logos/v2/meyers-logo-green.png'"
                         onmouseout="this.src='images/logos/v2/meyers-logo-white.png'"
                         alt="Chris Meyers. Developer, Tech enthusiast."
                         class="banner-img"
                         title="Home">
                </a>
            </div>
            
            <!-- FULL MENU -->
            <div class="banner-nav">
                <a href="#contact">
                    <div class="sectionTitle-contact" onclick="showSection('contact-me')">
                        <div class="sectionTitle-txt">
                            <span class="headerLink">Contact</span>
                        </div>
                    </div>
                </a>
                
                <a href="#projects">
                    <div class="sectionTitle-projects" onclick="showSection('my-projects')">
                        <div class="sectionTitle-txt">
                            <span class="headerLink">Projects</span>
                        </div>
                    </div>
                </a>
                
                <a href="#builds">
                    <div class="sectionTitle-builds" onclick="showSection('my-builds')">
                        <div class="sectionTitle-txt">
                            <span class="headerLink">Builds</span>
                        </div>
                    </div>
                </a>
                
                <a href="#resume">
                    <div class="sectionTitle-resume" onclick="showSection('my-resume')">
                        <div class="sectionTitle-txt">
                            <span class="headerLink">Résumé</span>
                        </div>
                    </div>
                </a>
                
                <a href="#about">
                    <div class="sectionTitle-about" onclick="showSection('about-me')">
                        <div class="sectionTitle-txt">
                            <span class="headerLink">About</span>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- HAMBURGER MENU-->
            <div id="banner-icon">
                <div id="sectionTitle-menu">
                    <ul id="menu-dropdown">
                        <li>
                            <div id="menu-click">
                                <img id="menu-toggle" src="images/icons/menuIcon.png" title="Menu" alt="Menu">
                            </div>
                            <ul id="menu-items">
                                <a href="#about" class="headerLink">
                                    <li class="sectionTitle-small-txt" onclick="showSection('about-me')">About</li>
                                </a>
                                
                                <a href="#resume" class="headerLink">
                                    <li class="sectionTitle-small-txt" onclick="showSection('my-resume')">Résumé</li>
                                </a>
                                
                                <a href="#builds" class="headerLink">
                                    <li class="sectionTitle-small-txt" onclick="showSection('my-builds')">Builds</li>
                                </a>

                                <a href="#projects" class="headerLink">
                                    <li class="sectionTitle-small-txt" onclick="showSection('my-projects')">Projects</li>
                                </a>

                                <a href="#contact" class="headerLink">
                                    <li class="sectionTitle-small-txt-last" onclick="showSection('contact-me')">Contact</li>
                                </a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>    
        </div>
