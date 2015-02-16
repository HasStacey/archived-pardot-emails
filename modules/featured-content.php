
                      <!-- NON MOVABLE FEATURED CONTENT // -->
                      <table class="container">
                        <tr>
                          <td>

                            <!-- ROW 1 // -->
                            <table class="row">
                              <tr>
                                
                                <!-- HEADING // -->
                                <td class="wrapper offset-by-one last no-padding-bottom">

                                  <table class="ten columns">
                                    <tr>
                                      <td>

                                        <h2 class="subheading" pardot-region>
                                          <?php

                                            // If this is the newsletter template
                                            if($isNewsletter) {

                                              // HASOFFERS ------------ /

                                              // And if this requires the HasOffers header
                                              if($isHasOffers) {
                                                // And if this is the Academy template
                                                if($isAcademy) {
                                                  // Echo the HasOffers Academy Subheading
                                                  echo "HasOffers Academy";
                                                // If this isn't the academy template
                                                } else {
                                                  // Echo the HasOffers Monthly Newsletter subheading
                                                  echo "HasOffers February Newsletter"; 
                                                }

                                              // NOT HASOFFERS -------- /

                                              // If this does not require the HasOffers header
                                              } else {
                                                // If this is the marketing recap template
                                                if($isRecap) {
                                                  // Echo marketing subheading
                                                  echo "Must Read Blog Posts";

                                                // If this is the privacy newsletter
                                                } elseif($isPrivacy) {
                                                  // Echo the privacy subheading
                                                  echo "TUNE Privacy &amp; Policy February Newsletter";

                                                // And if it is the academy template
                                                } elseif($isAcademy) {
                                                  // Echo TUNE academy subheading
                                                  echo "TUNE Academy"; 

                                                // And if it is the update template
                                                } elseif($isUpdate) {
                                                  // Echo TUNE academy subheading
                                                  echo "Product Updates";

                                                // If this isn't the academy template
                                                } else {
                                                  // Echo TUNE newsletter subheading
                                                  echo "TUNE February Newsletter"; 
                                                }                   
                                              }
                                            } 
                                          ?>
                                        </h2>
                                        <?php
                                          if(!$isRecap) {
                                            ob_start();
                                            ?>
                                              <h1 class="text-theme" pardot-region>Title Content Module; not removable, movable or repeatable. 2 line limit plz.</h1>
                                            <?php
                                            ob_end_flush();
                                          }

                                          if(!$isPrivacy && !$isRecap) {
                                            ob_start();
                                            ?>
                                              <p pardot-region pardot-removable><img src="http://placehold.it/480x225" style="margin: 25px 0;"></p>
                                            <?php
                                            ob_end_flush();
                                          }

                                          if(!$isRecap) {
                                            ob_start();
                                            ?>
                                              <p style="margin-top: 1em; clear: both;" pardot-repeatable><span pardot-region>Remove the image and the paragraph to use as a title only. If you keep the paragraph and the link, be sure to use ellipses...</span> <span pardot-removable><a href="" pardot-region>Read the Full Article</a><img src="http://storage.pardot.com/23402/56802/2015_email_icon_link.png" style="display: inline; float: none; padding-left: 3px;"></span></p>
                                            <?php
                                            ob_end_flush();
                                          }
                                        ?>
                                      </td>
                                      <td class="expander"></td>
                                    </tr>
                                  </table>

                                </td>
                                <!-- // HEADING -->

                              </tr>
                            </table>
                            <!-- // ROW 1 -->

                          </td>
                        </tr>
                      </table>
                      <!-- // NON MOVABLE FEATURED CONTENT -->