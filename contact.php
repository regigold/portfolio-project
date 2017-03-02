<!DOCTYPE html>
<html lang="en">
<?php include_once 'include/head.php'; // include head ?>

    <body id="contact">
       
       <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
       
        <header>
            <div class="wrapper">
                <?php include_once 'include/nav.php'; // include nav ?>
        </header>
        <!-- end header -->
        <main id="content">
            <div class="wrapper">
                <section class="intro container">
                    <h3>Give me a shout!</h3>
                    <div id="contact-area">
			
                        <form method="post" action="contactengine.php">
                            <label for="Name">Name</label>
                            <input type="text" name="Name" id="Name" />

                            <label for="Email">Email</label>
                            <input type="text" name="Email" id="Email" />

                            <label for="Message">Message</label><br />
                            <textarea name="Message" rows="20" cols="20" id="Message"></textarea>

                            <input type="submit" name="submit" value="Submit" class="submit-button" />
                        </form>

                        <div style="clear: both;"></div>
                        
                </section>
                <!-- end bio-intro container -->
            </div>
        </main>
        <!-- end main -->
        <?php include_once 'include/footer.php'; // include footer ?>
            <!-- scripts -->
            <script src="scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
            <script src="scripts/hide-mobile-menus.js" type="text/javascript"></script>
    </body>

</html>