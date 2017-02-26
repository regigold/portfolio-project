<!DOCTYPE html>
<html lang="en">
<?php include_once 'include/head.php'; // include head ?>

    <body id="javascript-jquery-page" class="project-page">
        <header> <img class="header-img" src="images/javascript-jquery/javascript-jquery-header.png" alt="mobile screen shots of the Tevis Bateman's javascript and jquery tutorial site">
            <div class="wrapper">
                <?php include_once 'include/nav.php'; // include nav ?>
                    <div class="title-text">
                        <h1>JavaScript & jQuery Tutorial Site</h1>
                        <h2>Three Helpful Javascript & jQuery Tutorials</h2> </div>
            </div>
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
                                <li>Photoshop</li>
                                <li>HTML/CSS</li>
                                <li>jQuery</li>
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
                        <button id="sticky">Visit Live Site</button>
                    </div>
                </section>
                <!-- end project-intro container -->
                <section class="color-palette container">
                    <div class="description">
                        <h3>Colour Palette</h3>
                        <p>As an exercise in responsive design I redesigned the landing page for the New York Post. My inspiration came from newspaper layouts of the 1940’s, where content was crammed into an unending series of columns. My goal for this project was to create a fully responsive, multi-column layout that was readable across all devices.</p>
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
                <section class="responsive container">
                    <div class="description">
                        <h3>Responsive Web Design</h3>
                        <p>As an exercise in responsive design I redesigned the landing page for the New York Post. My inspiration came from newspaper layouts of the 1940’s, where content was crammed into an unending series of columns. My goal for this project was to create a fully responsive, multi-column layout that was readable across all devices.</p>
                    </div>
                    <div class="gallery">
                        <div><img src="images/javascript-jquery/javascript-jquery-mobile-01.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                        <div><img src="images/javascript-jquery/javascript-jquery-mobile-02.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                        <div><img src="images/javascript-jquery/javascript-jquery-mobile-03.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                    </div>
                </section>
                <!-- end responsive container -->
            </div>
        </main>
        <!-- end main -->
        <?php include_once 'include/footer.php'; // include footer ?>
            <!-- scripts -->
            <script src="scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
            <script src="scripts/sticky-nav.js" type="text/javascript"></script>
    </body>

</html>