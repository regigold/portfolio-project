<!DOCTYPE html>
<html lang="en">
<head>
    <title>Work | Jon Benjamin Photography</title>
    <?php include_once 'include/head.php'; // include head ?>
</head>

    <body id="jonbenjamin" class="project-page">
       
       <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
       
        <header>
            <div class="wrapper">
                <?php include_once 'include/nav.php'; // include nav ?>
                <div class="title-text">
                    <h1>Jon Benjamin Photography</h1>
                    <h2>Client Project</h2> 
                </div> 
                <img class="header-img" src="images/jonbenjamin/jonbenjamin-header.png" alt="mobile and desktop screen shots of the the redesigned site, Jon Benjamin Photography"> 
            </div>
        </header>
        <!-- end header -->
        
        <main id="content">
            <div class="wrapper">
                <section class="intro container">
                    <p>Jon Benjamin is a talented freelance photographer based out of Vancouver BC. Jon’s business is built on his own hard work, and his ability to showcase his unique brand of photography to potential clients. Dealing with a dated WordPress site, Jon was looking for a way to update his existing portfolio to better showcase his work. Myself and Abbey Reisle connected with Jon through the Technical Web Design program at BCIT to redesign his portfolio site. The project was completed over five weeks, and was submitted as the final project for the Technical Web Design program.</p>
                    <div class="project-tools-skills">
                        <div class="tools">
                            <h3>Tools</h3>
                            <ul>
                                <li>Illustrator</li>
                                <li>WordPress</li>
                                <li>HTML/CSS</li>
                                <li>jQuery</li>
                                <li>PHP</li>
                                <li>SASS</li>
                                <li>Git</li>
                            </ul>
                        </div>
                        <div class="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>Web Design</li>
                                <li>Responsive</li>
                                <li>UI/UX</li>
                                <li>User Testing</li>
                            </ul>
                        </div>
                    </div>
                    <div id="sticky-anchor">
                        <a href="https://jonbenjamin.ca/" id="sticky" class="out-link" target="_blank">Visit Live Site</a>
                    </div>
                </section>
                <!-- end project-intro container -->
                <section class="inspiration container">
                    <div class="description">
                        <h3>Starting Point</h3>
                        <p>We began the redesign process by sitting down with Jon to define his needs. Luckily, the client had some very clear ideas of how he wanted the site to look and function. Coming out of the first meeting Jon made it very clear that he wanted a clean and simple site that provided a ‘photo-first’ emphasis, while also providing quick information about the services he offered.</p>
                    </div>    
                    <div class="gallery">
                        <div>
                            <img
                            sizes="(max-width: 2400px) 100vw, 2400px"
                            srcset="
                            images/jonbenjamin/starting-point/jonbenjamin-starting-point-01,w600px.jpg 600w,
                            images/jonbenjamin/starting-point/jonbenjamin-starting-point-01,w1200px.jpg 1200w"
                            src="images/jonbenjamin/starting-point/jonbenjamin-starting-point-01,w_1660.jpg"
                            alt="Photo of the Joshua Tree Desert. Photo taken by Jon Benjamin">
                        </div>
                        <div>
                            <img
                            sizes="(max-width: 2400px) 100vw, 2400px"
                            srcset="
                            images/jonbenjamin/starting-point/jonbenjamin-starting-point-02,w600px.jpg 600w,
                            images/jonbenjamin/starting-point/jonbenjamin-starting-point-02,w1200px.jpg 1200w"
                            src="images/jonbenjamin/starting-point/jonbenjamin-starting-point-02,w1200px.jpg"
                            alt="Photo of a man giving a toast at an outdoor wedding. Photo taken by Jon Benjamin">
                        </div>
                        <div>
                            <img
                            sizes="(max-width: 1600px) 100vw, 1600px"
                            srcset="
                            images/jonbenjamin/starting-point/jonbenjamin-starting-point-03,w600px.jpg 600w,
                            images/jonbenjamin/starting-point/jonbenjamin-starting-point-03,w1200px.jpg 1200w"
                            src="images/jonbenjamin/starting-point/jonbenjamin-starting-point-03,w1200px.jpg"
                            alt="Aerial night photo of the intersetion of Robson street and Burrard street, downtown Vancouver. Photo taken by Jon Benjamin">
                        </div>
                        <div>
                            <img
                            sizes="(max-width: 1600px) 100vw, 1600px"
                            srcset="
                            images/jonbenjamin/starting-point/jonbenjamin-starting-point-04,w600px.jpg 600w,
                            images/jonbenjamin/starting-point/jonbenjamin-starting-point-04,w1200px.jpg 1200w"
                            src="images/jonbenjamin/starting-point/jonbenjamin-starting-point-04,w1200px.jpg"
                            alt="Aerial photo of a highway interchange beside a river on a sunny day. Photo taken by Jon Benjamin">
                        </div>
                    </div>
                </section>    
                <!-- end inspiration container -->
                <section class="content-strategy container">
                    <div class="description">
                        <h3>Content Strategy</h3>
                        <p>After our first meeting Jon was able to quickly identify all the content he wanted to appear on his new site. Our first step was to examine and organize the content to ensure that the site navigation would be intuitive for all users.</p>
                        <p>One challenge that arose during this process, involved serving both the artistic and business sides of the site. We new that Jon’s work should be the primary focus, but as a business we also needed to find an intuitive way to direct potential clients towards the Contact + Quote page. To address this issue we decided to organize the content based on his services. This way users could easily see the type of work they were interested in. We also created a strong series of cross-links between the Services, Portfolio, and Featured Projects pages to help guide the user toward the Quote page.</p>
                    </div>
                    <div class="gallery">
                        <div>
                            <img src="images/jonbenjamin/content-strategy/content-map.png" alt="Information architecture map of the Jon Benjamin website">
                        </div>
                    </div>
                </section>
                <!-- end content-strategy container -->
                <section class="layout container">
                    <div class="description">
                        <h3>Layout</h3>
                        <p>Early on Jon expressed interest in the idea of using a sidebar navigation. Running with this idea, we found that the sidebar provided a unique navigation system which helped keep the site clean and organized.</p>
                        <p>A filtering submenu was also added to the Portfolio and Services page to provide quick and intuitive navigation for users looking to explore the various work and abilities Jon would be featuring on the site.</p>
                        <p>Below are some early wireframes concepts that were pitched to the client. Several iterations later we arrived at a final layout that was approved by the client and closely resembled the current version of the live site.</p>
                    </div>
                    <div class="gallery">
                        <div>
                            <img src="images/jonbenjamin/layout/jonbenjamin-wireframe-01.png" alt="A wireframe of the home page for the Jon Benjmain Photography website">
                        </div>
                        <div>
                            <img src="images/jonbenjamin/layout/jonbenjamin-wireframe-02.png" alt="A wireframe of the portfolio page for the Jon Benjmain Photography website">
                        </div>
                    </div>
                </section>
                <!-- end layout container -->
                <section class="wordpress container">
                    <div class="description">
                        <h3>WordPress</h3>
                        <p>When it came time to begin developing, we moved to WordPress to create a custom theme which would be handed over to the client when it was time for the site to go live. We began the development process by coding all the site functions first before styling the content.</p>
                        <p>One integral feature that was added involved creating a custom taxonomy for Jon’s featured services. Additionally, a custom function was added to the media library so that images could easily be added to the corresponding service which then displayed them in the correct gallery on the portfolio page.</p>
                        <p>Once the functionality was established we began styling the site using SASS. Working from mockups we designed an accessible, responsive site which was built mobile up.</p>
                    </div>
                    <div class="gallery">
                        <div>
                            <img src="images/jonbenjamin/wordpress/jonbenjamin-desktop.png" alt="Desktop screenshot of the Jon Benjamin Photography website">
                        </div>
                        <div>
                            <img src="images/jonbenjamin/wordpress/jonbenjamin-mobile-01.png" alt="Mobile view screenshot of the Jon Benjamin Photography website">
                        </div>
                        <div>
                            <img src="images/jonbenjamin/wordpress/jonbenjamin-mobile-02.png" alt="Mobile view screenshot of the Jon Benjamin Photography website">
                        </div>
                        <div>
                            <img src="images/jonbenjamin/wordpress/jonbenjamin-mobile-03.png" alt="Mobile view screenshot of the Jon Benjamin Photography website">
                        </div>
                    </div>
                </section>
                <!-- end wordpress container -->
                <section class="site-testing container">
                    <div class="description">
                        <h3>Site Testing</h3>
                        <p>Once the site was developed it was tested to ensure that it performed as intended. The site was tested on a group of four random BCIT students who were asked to complete two surveys, and a series of usability tasks to help identify any potential problem areas on the site. The testing was moderated by myself, and observed by Abbey Reisle.</p>
                        <p>The results of the testing confirmed that site was primarily user-friendly. For example, the decision to use a red accent colour on all buttons and links across the site seemed to make it easy for our testers to get around. The testing also revealed that minor revisions needed to be made to the mobile site which involved providing additional visual cues to some buttons located on the Services and Contact + Quote page.</p>
                        <p>Most of the problem areas we discovered involved minor changes, which were completed before the site went live. For more information on site testing please view the pdf below.</p>
                    </div>
                    <div class="gallery">
                        <div>
                            <img src="images/jonbenjamin/site-testing/jon-benjamin-site-testing-report.png" alt="Cover page of the Jon Benjamin site testing booklet">
                        </div>
                    </div>
                    <a class="out-link" target="_blank" href="pdf/jon-benjamin-site-testing-report.pdf">View PDF</a>
                </section>
                <!-- end site-testing container -->
                
                <nav class=project-nav>
                    <a class="previous no-project" href="#">Previous</a> 
                    <a class="next" href="new-york-post-redesign.php">Next</a>
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