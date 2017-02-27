<!DOCTYPE html>
<html lang="en">
<?php include_once 'include/head.php'; // include head ?>

    <body id="twd-landing-page" class="project-page">
        <header>
            <div class="wrapper">
                <?php include_once 'include/nav.php'; // include nav ?>
                    <div class="title-text">
                        <h1>TWD Landing Page</h1>
                        <h2>Introduction to jQuery</h2> </div> <img class="header-img" src="images/twd-landing-page/landing-page-header.png" alt="desktop screen shots of the Tevis Bateman's TWD landing page"> </div>
        </header>
        <!-- end header -->
        <main>
            <div class="wrapper">
                <section class="intro container">
                    <p>As an exercise in responsive design I redesigned the landing page for the New York Post. My inspiration came from newspaper layouts of the 1940’s, where content was crammed into an unending series of columns. My goal for this project was to create a fully responsive, multi-column layout that was readable across all devices.</p>
                    <div class="project-tools-skills">
                        <div class="tools">
                            <h3>Tools</h3>
                            <ul>
                                <li>Illustrator</li>
                                <li>HTML/CSS</li>
                                <li>jQuery</li>
                                <li>SASS</li>
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
                    <div id="sticky-anchor"></div>
                        <a href="#" id="sticky" class="out-link" >Visit Live Site</a>
                </section>
                <!-- end project-intro container -->
                <section class="inspiration container">
                    <div class="description">
                        <h3>Starting Point</h3>
                        <p>As an exercise in responsive design I redesigned the landing page for the New York Post. My inspiration came from newspaper layouts of the 1940’s, where content was crammed into an unending series of columns. My goal for this project was to create a fully responsive, multi-column layout that was readable across all devices.</p>
                    </div>
                     <img src="images/twd-landing-page/folders.png" alt="a series of multicoloured file folders overlapping diagonally">
                </section>
                <!-- end inspiration container -->
                <section class="color-palette container">
                    <div class="description">
                        <h3>Colour Palette</h3>
                        <p>As an exercise in responsive design I redesigned the landing page for the New York Post. My inspiration came from newspaper layouts of the 1940’s, where content was crammed into an unending series of columns. My goal for this project was to create a fully responsive, multi-column layout that was readable across all devices.</p>
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
                <section class="accordian container">
                    <div class="description">
                        <h3>Accordian Menu</h3>
                        <p>As an exercise in responsive design I redesigned the landing page for the New York Post. My inspiration came from newspaper layouts of the 1940’s, where content was crammed into an unending series of columns. My goal for this project was to create a fully responsive, multi-column layout that was readable across all devices.</p>
                    </div>
                    <div class="gallery"> </div>
                </section>
                <!-- end accordian container -->
            </div>
        </main>
        <!-- end main -->
        <?php include_once 'include/footer.php'; // include footer ?>
            <!-- scripts -->
            <script src="scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
            <script src="scripts/sticky-nav.js" type="text/javascript"></script>
            <script src="scripts/hide-mobile-menus.js" type="text/javascript"></script>
    </body>

</html>