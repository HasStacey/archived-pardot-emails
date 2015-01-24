<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>
    <table class="body">
      <tr>
        <td class="center" align="center" valign="top">
          <center>

          <?php 
            include('modules/header-tune.php'); 
            //include('modules/header-ho.php');
          ?>

          <!-- CONTENT WRAPPER // -->
          <table class="container email-wrapper">
            <!-- NON MOVABLE CONTENT HEADER // -->
            <tr>
              <td>

                <?php 

                  include('modules/hero-image.php'); 
                  include('modules/featured-content.php');

                ?>

              </td>
            </tr>
            <tr>
            <!-- // NON MOVABLE CONTENT HEADER -->


            <!-- MOVABLE CONTENT // -->
            <tr>
              <td>

                <?php

                  include('modules/x-full-content.php');
                  include('modules/x-lesser-content.php');
                  include('modules/x-spotlight-training.php');
                  include('modules/x-micro-post-single.php');
                  include('modules/x-micro-post-double.php');
                  include('modules/x-cta-grey-bg.php');
                  include('modules/x-cta-white-bg.php');
                  include('modules/x-repeatable-link-list.php');
                  include('modules/x-repeatable-content-list.php');

                ?>

              </td>
            </tr>
            <!-- // MOVABLE CONTENT -->

            <?php 
              include('modules/pre-footer-events-spotlight.php'); 
              include('modules/footer.php');
            ?>

          </table>
          <!-- // CONTENT WRAPPER -->
          </center>
        </td>
      </tr>
    </table>
  </body>
</html>