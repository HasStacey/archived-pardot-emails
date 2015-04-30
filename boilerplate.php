<?php 

// UNCOMMENT THE TEMPLATE YOU WOULD LIKE TO EXPORT
// -------------------------------------------------------------------------------------

  // $template = 'ho-drip';                // SCSS theme should be set to $c-purple
  // $template = 'ho-notification';     // SCSS theme should be set to $c-ltblue
  // $template = 'ho-academy';          // SCSS theme should be set to $c-green
  // $template = 'ho-newsletter';       // SCSS theme should be set to $c-blue
  // $template = 'ho-updates';             // SCSS theme should be set to $c-dkblue
  // $template = 'ho-lost-accounts';       // SCSS theme should be set to $c-orange

  // $template = 'tune-drip';           // SCSS theme should be set to $c-purple
  // $template = 'tune-notification';   // SCSS theme should be set to $c-ltblue
  // $template = 'tune-academy';        // SCSS theme should be set to $c-green
  $template = 'tune-newsletter';     // SCSS theme should be set to $c-blue
  // $template = 'tune-updates';             // SCSS theme should be set to $c-dkblue
  // $template = 'tune-lost-accounts';       // SCSS theme should be set to $c-orange

  // $template = 'recap';               // SCSS theme should be set to $c-orange
  // $template = 'privacy';             // SCSS theme should be set to $c-orange


  // ARE YOU TESTING THE PARDOT REGIONS?
  // -------------------------------------------------------------------------------------
  $testing = false;
  // $testing = true;

  $production = true;
  // $production = false;

  include('variables.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <?php if($production) {
      ob_start();
      ?>
        <link rel="stylesheet" type="text/css" href="css/<?php echo $color; ?>.css">

      <?php
      ob_end_flush();
    } else {
      ?>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
      <?php
    }

    if($testing) {
      ob_start();
      ?>
        <style>
          /* Testing */
          *[pardot-region] {
            outline: 1px solid orange; }

          *[pardot-removable] {
            outline: 2px solid red; }

          *[pardot-repeatable] {
            outline: 2px solid lime; }
        </style>
      <?php
      ob_end_flush();
    }
    ?>
  
  </head>
  <body>
    <table class="body">
      <tr>
        <td class="center" align="center" valign="top">
          <center>

          <?php 
            // HEADER INFO //
            if($isHasOffers) {
              include('modules/header-ho.php');
            } else {
              include('modules/header-tune.php');
            }
          ?>

          <!-- CONTENT WRAPPER // -->
          <table class="container email-wrapper">
            <!-- NON MOVABLE CONTENT HEADER // -->
            <tr>
              <td>

                <?php 

                // BRANDED HERO IMAGES
                // ------------------------------------------------------------------------------ /

                // If this is the newsletter template
                if($isNewsletter) {

                  // HASOFFERS ------------ /

                  // And if this requires the HasOffers header
                  if($isHasOffers) {
                    // And if this is the Academy template
                    if($isAcademy) {
                      // Include the HO Academy Image
                      include('modules/hero-images/branded/hero-ho-academy.php'); 

                    // And if it is the updates
                    } elseif($isUpdate) {
                      // Include the TUNE Academy hero image
                      include('modules/hero-images/generic/hero-notepad-with-pen.php'); 

                    // if it's the lost accounts template
                    } elseif($isLostAccount) {
                      // Include the generic reports header
                      include('modules/hero-images/generic/hero-reports.php');
                      
                    } else {
                      // Include the We Heart Performance image
                      include('modules/hero-images/branded/hero-heart-performance.php'); 
                    }

                  // NOT HASOFFERS -------- /

                  // If this does not require the HasOffers header
                  } else {
                    // If this is the marketing recap template
                    if($isRecap) {
                      // Include the marketing recap header
                      include('modules/hero-images/branded/hero-marketing.php'); 

                    // If this is the privacy newsletter
                    } elseif($isPrivacy) {
                      // Include the privacy image
                      include('modules/hero-images/branded/hero-privacy.php'); 

                    // And if it is the academy template
                    } elseif($isAcademy) {
                      // Include the TUNE Academy hero image
                      include('modules/hero-images/branded/hero-tune-academy.php'); 

                    // And if it is the updates
                    } elseif($isUpdate) {
                      // Include the TUNE Academy hero image
                      include('modules/hero-images/generic/hero-notepad-with-pen.php'); 

                    // if it's the lost accounts template
                    } elseif($isLostAccount) {
                      // Include the generic reports header
                      include('modules/hero-images/generic/hero-reports.php');

                    // If this isn't the academy template
                    } else {
                      // Include the We Heart Mobile image
                      include('modules/hero-images/branded/hero-heart-mobile.php');  
                    }                   
                  }

                // If this is NOT the newsletter template
                } else {
                  // Include the generic hero image
                  include('modules/hero-images/generic/hero-iphone-on-laptop.php');
                }


                // FEATURED CONTENT MODULE?
                // ------------------------------------------------------------------------------ /
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

                  if($isNewsletter) {
                    // Academy

                    // Recap
                    if($isRecap) {
                      include('modules/x-repeatable-content-list.php');
                      include('modules/x-cta-grey-bg.php');
                      include('modules/x-cta-white-bg.php');

                    // Privacy
                    } elseif($isPrivacy) {
                      include('modules/x-repeatable-content-list.php');
                      include('modules/x-cta-white-bg.php');

                    // Updates
                    } elseif($isUpdate) {
                      include('modules/x-repeatable-link-list.php');
                      include('modules/x-cta-white-bg.php');

                    // Base Newsletter
                    } else {
                      include('modules/x-lesser-content.php');
                      include('modules/x-spotlight-training.php');
                      include('modules/x-micro-post-single.php');
                      include('modules/x-micro-post-double.php');
                      include('modules/x-cta-grey-bg.php');
                      include('modules/x-cta-white-bg.php');
                      include('modules/x-repeatable-link-list.php');
                      // include('modules/x-repeatable-content-list.php');
                      include('modules/x-two-images.php');
                    }

                  // Single CTA/Notification
                  } else {
                    // include('modules/x-buttons.php');
                    include('modules/x-cta-grey-bg.php');
                    include('modules/drip-general-content.php');
                    include('modules/x-two-images.php');
                  }
                ?>

              </td>
            </tr>
            <!-- // MOVABLE CONTENT -->

            <?php 
              if($isNewsletter) {
                if(!$isPrivacy && !$isUpdate) {
                  include('modules/pre-footer-events-spotlight.php');
                } 
              }
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