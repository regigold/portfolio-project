<!DOCTYPE html>
<html lang="en">
<?php include_once 'include/head.php'; // include head ?>

    <body id="javascript-jquery-page" class="project-page">
       
       <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
       
        <header> <img class="header-img" src="images/javascript-jquery/javascript-jquery-header.png" alt="mobile screen shots of the Tevis Bateman's javascript and jquery tutorial site">
            <div class="wrapper">
                <?php include_once 'include/nav.php'; // include nav ?>
                    <div class="title-text">
                        <h1>JavaScript & jQuery Tutorial Site</h1>
                        <h2>Three Helpful Javascript & jQuery Tutorials</h2> </div>
            </div>
        </header>
        <!-- end header -->
        <main id="content">
            <div class="wrapper">
                <section class="intro container">
                    <p>The goal of this project was to create three tutorials which incorporated JavaScript and jQuery. The  tutorials focused on some useful and unique tools I was interested in exploring at the time, such as styling google maps and creating a custom slideshow from scratch. For each tutorial I wrote a step by step guide which included embedded code snippets and working examples.</p>
                    <div class="project-tools-skills">
                        <div class="tools">
                            <h3>Tools</h3>
                            <ul>
                                <li>Illustrator</li>
                                <li>Photoshop</li>
                                <li>HTML/CSS</li>
                                <li>jQuery</li>
                                <li>Git</li>
                            </ul>
                        </div>
                        <div class="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>Web Design</li>
                                <li>UI/UX</li>
                            </ul>
                        </div>
                    </div>
                    <div id="sticky-anchor">
                        <a href="javascript-tutorial/index.html" id="sticky" class="out-link" target="_blank">Visit Live Site</a>
                    </div>    
                </section>
                <!-- end project-intro container -->
                <section class="color-palette container">
                    <div class="description">
                        <h3>Colour Palette</h3>
                        <p>The colours used for this site were chosen to reflect the loose desert theme of the tutorials, such as the slideshow and ‘click function.’</p>
                    </div>
                    <div class="swatches">
                        <div class="swatch swatch-01">
                            <p>Sand</p>
                            <div class="swatch-codes">
                                <p>HEX #DEB887</p>
                                <p>RGB 222, 184, 135</p>
                            </div>
                        </div>
                        <div class="swatch swatch-02">
                            <p>Torquoise</p>
                            <div class="swatch-codes">
                                <p>HEX #619EA1</p>
                                <p>RGB 97, 158, 161</p>
                            </div>
                        </div>
                    </div>
                    <!-- end swatches -->
                </section>
                <!-- end color-palette container -->
                <section class="typography container">
                    <div class="description">
                        <h3>Typography</h3>
                        <p>As is the case with many of my personal projects, the visual feel of the site started with the type selection. I came across Bungee on Google Fonts and was intrigued by it's playful, blocky form. It reminded me of New Mexico, and desert living. I ran with it. I paired Bungee with the readable workhorse, Open Sans.</p>
                    </div> <img src="images/javascript-jquery/javascript-jquery-typography.svg" alt="a list of typefaces used in Tevis Bateman's javascript and jquery site. Fonts include: Bungee and Open Sans"> </section>
                <!-- end typography container -->
                <section class="responsive container">
                    <div class="description">
                        <h3>Responsive Web Design</h3>
                        <p>Since beginning the Technical Web Design program at BCIT I’ve been itching to create a responsive layout. Even though the parameters of the project didn’t call for a responsive design I decided to try and implement one as best I could with the knowledge I had at the time. I started with a full width desktop layout which split the screen in half; code snippets and instructions on the right, examples on the left. On smaller screen size, the layout collapses shuffling the instructions and examples into one single column.</p>
                    </div>
                    <div class="gallery">
                        <div><img src="images/javascript-jquery/javascript-jquery-mobile-01.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                        <div><img src="images/javascript-jquery/javascript-jquery-mobile-02.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                        <div><img src="images/javascript-jquery/javascript-jquery-mobile-03.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                    </div>
                </section>
                <!-- end responsive container -->
                <section class="menu container">
                    <div class="description">
                        <h3>Horizontal Slider Menu</h3>
                        <p>This project allowed me to experiment with unique menu navigation. The tutorials on each page were devided up into three sections, and were quite lengthy at times. To solve this problem I wanted to present a quick and easy way for readers to navigate to their desired step from the main nav. My solution involved creating a main navigation that revealed a sub-menu with the steps of that tutorial listed underneath. Using id hooks, the sub-menu buttons scrolled smoothly to the selected section on click. I used jquery to toggle the 'open' and 'closed' states of the sub-menu. Check out the demo below for a sneak peak on the button.</p>
                    </div>
                    <div class="code-demo">
                        <nav class="site-nav-bar">
                            <ul>
                                <li class="slide-out"><a class="slide-btn" href="#scroll-step-01">Click Me! <i class="fa fa-chevron-left" aria-hidden="true" style="font-size: 16px; padding-left: 5px;"></i></a>
                                    <ul class="step-menu">
                                        <li><a class="scroll-step-01" href="#scroll-step-01">Step 01</a></li>
                                        <li><a class="scroll-step-02" href="#scroll-step-02">Step 02</a></li>
                                        <li><a class="scroll-step-03" href="#scroll-step-03">Step 03</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <a class="out-link" href="http://codepen.io/tevis-bateman/pen/evNpqE">View Code Pen</a>
                </section>
                <!-- end responsive container -->
                
                <nav class=project-nav>
                    <a class="previous" href="twd-landing-page.php?key=1">Previous</a>
<!--                    <a class="next">Next</a>-->
                </nav>
                
            </div>
        </main>
        <!-- end main -->
        <?php include_once 'include/footer.php'; // include footer ?>
            <!-- scripts -->
            <script src="scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
            <script src="scripts/sticky-nav.js" type="text/javascript"></script>
            <script src="scripts/hide-mobile-menus.js" type="text/javascript"></script>
            <script src="scripts/javascript-jquery-code-demo.js" type="text/javascript"></script>
    </body>

</html>