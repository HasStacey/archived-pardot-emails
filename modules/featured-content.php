
                      <!-- NON MOVABLE FEATURED CONTENT // -->
                      <table class="container" pardot-repeatable>
                        <tr>
                          <td>

                            <!-- ROW 1 // -->
                            <table class="row">
                              <tr>
                                
                                <!-- HEADING // -->
                                <td class="wrapper offset-by-one last <?php if($isRecap){ echo "no-padding-bottom"; } ?>">

                                  <table class="ten columns">
                                    <tr>
                                      <td>

                                        <h2 class="subheading" pardot-region pardot-removable>
                                          <?php

                                            if($isNewsletter && !$isAcademy && !$isLostAccount && !$isUpdate && !$isRecap) {
                                              if($isHasOffers) {
                                                echo "HasOffers ";
                                              } else {
                                                echo "TUNE ";
                                              }

                                              echo "April Newsletter";
                                            } // $isNewsletter

                                            elseif($isAcademy) {
                                              if($isHasOffers) {
                                                echo "HasOffers ";
                                              } else {
                                                echo "TUNE ";
                                              }

                                              echo "Academy";
                                            } 

                                            elseif($isUpdate) {
                                              if($isHasOffers) {
                                                echo "HasOffers ";
                                              } else {
                                                echo "TUNE ";
                                              }

                                              echo "Product Updates";
                                            }

                                            elseif($isRecap) {
                                              echo "Must Read Blog Posts";
                                            }

                                            elseif($isPrivacy) {
                                              echo "TUNE Privacy &amp; Policy April Newsletter";
                                            }

                                            else {
                                              echo "Subheading"; 
                                            }
                                          ?>
                                        </h2>
                                        <?php
                                          if(!$isRecap) {
                                            ob_start();
                                            ?>
                                              <h1 class="text-theme" pardot-region pardot-removable>Title Content Module; not removable, movable or repeatable. 2 line limit plz.</h1>
                                            <?php
                                            ob_end_flush();
                                          }

                                          if(!$isPrivacy && !$isRecap) {
                                            ob_start();
                                            ?>
                                            <table pardot-removable>
                                              <tr>
                                                <td>
                                                  <p pardot-region class="featured-image"><img src="http://placehold.it/480x225" style="display: inline;"></p>
                                                </td>
                                              </tr>
                                            </table>
                                            <?php
                                            ob_end_flush();
                                          }

                                          if(!$isRecap) {
                                            ob_start();
                                            ?>
                                              <p style="margin-top: 1em; clear: both;" pardot-repeatable><span pardot-region>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri un testo segnaposto utilizzato...</span> <span pardot-removable><a href="" pardot-region>Read the Full Article</a><img src="http://storage.pardot.com/23402/56802/2015_email_icon_link.png" style="display: inline; float: none; padding-left: 3px;"></span></p>
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