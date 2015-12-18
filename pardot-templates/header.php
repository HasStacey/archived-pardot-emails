<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <?php 
    // BEGIN: APPLY PRODUCTION STYLESHEET
    if($applyProductionStylesheet) {
      echo '<style>';
      include('css/' . $color . '.css');
      echo '</style>';
    } else {
      echo '<link rel="stylesheet" type="text/css" href="css/styles.css">';
    }
    // END: APPLY PRODUCTION STYLESHEET


    // BEGIN: HIGHLIGHT PARDOT REGION ATTRIBUTES
    if($highlightPardotRegionAttr) {
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
    // END: HIGHLIGHT PARDOT REGION ATTRIBUTES
    ?>
  
  </head>
  <body>
    <table class="body">
      <tr>
        <td class="center" align="center" valign="top">
          <center>

					<?php

						// PREHEADER //
						include('modules/preheader.php');

						// HEADER INFO //
						include('modules/logo-header.php');

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