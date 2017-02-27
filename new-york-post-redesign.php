<!DOCTYPE html>
<html lang="en">
<?php include_once 'include/head.php'; // include head ?>

    <body id="new-york-post-redesign" class="project-page">
        <header>
            <div class="wrapper">
                <?php include_once 'include/nav.php'; // include nav ?>
                    <div class="title-text">
                        <h1>New York Post Landing Page</h1>
                        <h2>Responsive Web Design</h2> </div> <img class="header-img" src="images/new-york-post/new-york-post-header.png" alt="mobile and desktop screen shots of the redesigned New York Post website"> </div>
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
                                <li>Responsive</li>
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
                    </div> <img src="images/new-york-post/responsive-layout.jpg" alt="The front page of the New York Times, June 6th, 1944"> </section>
                <!-- end inspiration container -->
                <section class="typography container">
                    <div class="description">
                        <h3>Typography</h3>
                        <p>As an exercise in responsive design I redesigned the landing page for the New York Post. My inspiration came from newspaper layouts of the 1940’s, where content was crammed into an unending series of columns. My goal for this project was to create a fully responsive, multi-column layout that was readable across all devices.</p>
                    </div> <img src="images/new-york-post/responsive-typography.svg" alt="a list of typefaces used in the New York Post Redisgn. Fonts include: Heuristica, Franklin Gothic and Roboto"> </section>
                <!-- end typography container -->
                <section class="color-palette container">
                    <div class="description">
                        <h3>Colour Palette</h3>
                        <p>As an exercise in responsive design I redesigned the landing page for the New York Post. My inspiration came from newspaper layouts of the 1940’s, where content was crammed into an unending series of columns. My goal for this project was to create a fully responsive, multi-column layout that was readable across all devices.</p>
                    </div>
                    <div class="swatches">
                        <div class="swatch swatch-01">
                            <p>Yellow</p>
                            <div class="swatch-codes">
                                <p>HEX #E1B451</p>
                                <p>RGB 255, 180, 10</p>
                            </div>
                        </div>
                        <div class="swatch swatch-02">
                            <p>Off Yellow</p>
                            <div class="swatch-codes">
                                <p>HEX #C09945</p>
                                <p>RGB 192, 153, 75</p>
                            </div>
                        </div>
                        <div class="swatch swatch-03">
                            <p>Black</p>
                            <div class="swatch-codes">
                                <p>HEX #231F20</p>
                                <p>RGB 35, 31, 32</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end color-palette container -->
                <section class="responsive container">
                    <div class="description">
                        <h3>Responsive Web Design</h3>
                        <p>As an exercise in responsive design I redesigned the landing page for the New York Post. My inspiration came from newspaper layouts of the 1940’s, where content was crammed into an unending series of columns. My goal for this project was to create a fully responsive, multi-column layout that was readable across all devices.</p>
                    </div>
                    <div class="gallery">
                        <div><img src="images/new-york-post/new-york-post-mobile-01.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                        <div><img src="images/new-york-post/new-york-post-mobile-02.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                        <div><img src="images/new-york-post/new-york-post-mobile-03.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                    </div>
                </section>
                <!-- end responsive container -->
                <section class="menu container">
                    <div class="description">
                        <h3>Bottom Oriented Menu Bar</h3>
                        <p>As an exercise in responsive design I redesigned the landing page for the New York Post. My inspiration came from newspaper layouts of the 1940’s, where content was crammed into an unending series of columns. My goal for this project was to create a fully responsive, multi-column layout that was readable across all devices.</p>
                    </div>
                    <div class="gallery">
                        <div><img src="images/new-york-post/responsive-mobile-menu-01.png" alt="mobile sreen capture showing the bottom oriented navigation with the menu closed"></div>
                        <div><img src="images/new-york-post/responsive-mobile-menu-02.png" alt="mobile sreen capture showing the bottom oriented navigation with the 'sections' open"></div>
                        <div><img src="images/new-york-post/responsive-mobile-menu-03.png" alt="mobile sreen capture showing the bottom oriented navigation with the 'search' bar open"></div>
                    </div>
                </section>
                <!-- end menu container -->
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