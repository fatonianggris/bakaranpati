<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <head>
        <?php
        $this->load->view('template_landing_page/general/script_header');
        ?>
    </head>

    <body class="home">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div class="top-bar">
                <?php
                $this->load->view('template_landing_page/general/topbar');
                ?>
            </div><!-- /.top-bar -->

            <header id="masthead" class="site-header header-v2">
                <?php
                $this->load->view('template_landing_page/general/header');
                ?>
            </header><!-- #masthead -->

            <nav class="navbar navbar-primary navbar-full">
                <?php
                $this->load->view('template_landing_page/general/navbar');
                ?>
            </nav>

            <div id="content" class="site-content" tabindex="-1">
                <div class="container">
                    <?php
                    echo $contents;
                    ?>
                </div><!-- .container -->
            </div><!-- #content -->

            <section class="brands-carousel">
                <?php
                $this->load->view('template_landing_page/general/brand');
                ?>
            </section>

            <footer id="colophon" class="site-footer">
<!--                <div class="footer-widgets">
                    <?php
                    //$this->load->view('template_landing_page/general/footer_widget');
                    ?>
                </div>-->

                <div class="footer-newsletter">
                    <?php
                    $this->load->view('template_landing_page/general/footer_newsletter');
                    ?>
                </div>

                <div class="footer-bottom-widgets">
                    <?php
                    $this->load->view('template_landing_page/general/footer_bottom_widgets');
                    ?>
                </div>

                <div class="copyright-bar">
                    <?php
                    $this->load->view('template_landing_page/general/footer_copyright');
                    ?>
                </div><!-- /.copyright-bar -->
            </footer><!-- #colophon -->

        </div><!-- #page -->

        <!-- script -->
        <?php
        $this->load->view('template_landing_page/general/script_footer');
        ?>
    </body>
</html>
