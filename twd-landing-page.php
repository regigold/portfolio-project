<!DOCTYPE html>
<html lang="en">
<head>
    <title>Work | TWD Landing Page</title>
    <?php include_once 'include/head.php'; // include head ?>
</head>

    <body id="twd-landing-page" class="project-page">
       
       <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
       
        <header>
            <div class="wrapper">
                <?php include_once 'include/nav.php'; // include nav ?>
                    <div class="title-text">
                        <h1>TWD Landing Page</h1>
                        <h2>Introduction to jQuery</h2> </div> <img class="header-img" src="images/twd-landing-page/landing-page-header.png" alt="desktop screen shots of the Tevis Bateman's TWD landing page"> </div>
        </header>
        <!-- end header -->
        <main id="content">
            <div class="wrapper">
                <section class="intro container">
                    <p>The TWD landing page was designed to house all projects completed during the Technical Web Design program at BCIT. The page was designed as completed framework that could be updated to show case projects as we progressed through the program. Inspired by accordion menus and file folders, I decided to base my design on a simple hide-and-show interaction. Creating the functionality was my first experience using jQuery.</p>
                    <div class="project-tools-skills">
                        <div class="tools">
                            <h3>Tools</h3>
                            <ul>
                                <li>Illustrator</li>
                                <li>HTML/CSS</li>
                                <li>jQuery</li>
                            </ul>
                        </div>
                        <div class="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>Web Design</li>
                                <li>UI / UX</li>
                            </ul>
                        </div>
                    </div>
                    <div id="sticky-anchor">
                        <a href="http://tbateman.htpwebdesign.ca/" id="sticky" class="out-link" target="_blank" >Visit Live Site</a>
                    </div>    
                </section>
                <!-- end project-intro container -->
                <section class="inspiration container">
                    <div class="description">
                        <h3>Starting Point</h3>
                        <p>I was interested in the idea of the accordion menu after seeing it in use online. The click-and-show action felt like an elegant and simple way to display all my projects on a single page. As I began designing, I realized that the interaction reminded me of leafing through a big filing cabinet full of folders. Building on this idea, I tried to loosely represent this experience with text, color and organization in order to make the experience as tactile and engaging as possible.</p>
                    </div>
                     <img src="images/twd-landing-page/folders.png" alt="a series of multicoloured file folders overlapping diagonally">
                </section>
                <!-- end inspiration container -->
                <section class="color-palette container">
                    <div class="description">
                        <h3>Colour Palette</h3>
                        <p>A specific palette was used to reference the colour coded file folders and printer paper found in many offices. I worked with a range of pastel colour that I felt complimented each other nicely when laid out together. The folders are coloured to emphasize hierarchy; solid colours as parents, and tinted variations as children</p>
                    </div>
                    <div class="swatches">
                        <div class="swatch swatch-01">
                            <p>Salmon</p>
                            <div class="swatch-codes">
                                <p>HEX #F5AE70</p>
                                <p>RGB 245, 174, 112</p>
                            </div>
                        </div>
                        <div class="swatch swatch-02">
                            <p>Torquoise</p>
                            <div class="swatch-codes">
                                <p>HEX #1FADA6</p>
                                <p>RGB 31, 173, 166</p>
                            </div>
                        </div>
                        <div class="swatch swatch-03">
                            <p>Pink</p>
                            <div class="swatch-codes">
                                <p>HEX #FFB6C1</p>
                                <p>RGB 255, 182, 193</p>
                            </div>
                        </div>
                        <div class="swatch swatch-04">
                            <p>Green</p>
                            <div class="swatch-codes">
                                <p>HEX #90EE90</p>
                                <p>RGB 144, 238, 144</p>
                            </div>
                        </div>
                        <div class="swatch swatch-05">
                            <p>Yellow</p>
                            <div class="swatch-codes">
                                <p>HEX #FFFF80</p>
                                <p>RGB 255, 255, 128</p>
                            </div>
                        </div>
                        <div class="swatch swatch-06">
                            <p>Red</p>
                            <div class="swatch-codes">
                                <p>HEX #FF6347</p>
                                <p>RGB 255, 99, 71</p>
                            </div>
                        </div>
                        <div class="swatch swatch-07">
                            <p>Blue</p>
                            <div class="swatch-codes">
                                <p>HEX #4682B4</p>
                                <p>RGB 70, 130, 180</p>
                            </div>
                        </div>
                    </div>
                    <!-- end swatches -->
                </section>
                <!-- end color-palette container -->
                <section class="accordion container">
                    <div class="description">
                        <h3>Accordion Navigation</h3>
                        <p>The accordion menu was created using jquery to toggle the open and close states of the menu. Opening each parent reveals the projects with in. When a project is clicked, the folder opens to reveal a slide-show of screen grabs showcasing the projects, with a button to view the live site through.</p>
                    </div>
                    <img src="images/twd-landing-page/landing-page-full-page.png" alt="a screen capture of Tevis Bateman's TWD website with the accordion interface open">
                </section>
                <!-- end accordian container -->
                
                <nav class=project-nav>
                    <a class="previous" href="new-york-post-redesign.php?key=0">Previous</a>
                    <a class="next" href="javascript-jquery.php?key=2">Next</a>
                </nav>
                
            </div>
        </main>
        <!-- end main -->
        <?php include_once 'include/footer.php'; // include footer ?>
            <!-- scripts -->
            <script src="scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
            <script src="scripts/sticky-nav.min.js" type="text/javascript"></script>
            <script src="scripts/hide-mobile-menus.min.js" type="text/javascript"></script>
    </body>

</html>