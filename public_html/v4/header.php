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
            
            <div class='banner-nav'>
                <div class='sectionTitle-contact' onclick='showContact()'><div class='sectionTitle-txt'>Contact</div></div>
                <div class='sectionTitle-projects' onclick='showProjects()'><div class='sectionTitle-txt'>Projects</div></div>
                <div class='sectionTitle-builds' onclick='showBuilds()'><div class='sectionTitle-txt'>Builds</div></div>
                <div class='sectionTitle-about' onclick='showAbout()'><div class='sectionTitle-txt'>About</div></div>
            </div>
            
            <div id='banner-icon'>
                <div id='sectionTitle-menu'>
                    <ul id='menu-dropdown' onmouseover='showMenuHover()' onmouseout='hideMenuHover()'>
                        <li>
                            <img id='menu-toggle' src='images/menuIcon.png'>
                            <ul id='menu-items'>
                                <li onclick='showAbout()'>About</li>
                                <li onclick='showBuilds()'>Builds</li>
                                <li onclick='showProjects()'>Projects</li>
                                <li onclick='showContact()'>Contact</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div id='banner-icon-small'>
                <div id='sectionTitle-menu-small'>
                    <ul id='menu-dropdown-small'>
                        <li>
                            <img id='menu-toggle-small' src='images/menuIcon-small.png'>
                            <ul id='menu-items-small'>
                                <li onclick='showAbout()'>About</li>
                                <li onclick='showBuilds()'>Builds</li>
                                <li onclick='showProjects()'>Projects</li>
                                <li onclick='showContact()'>Contact</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>"

?>