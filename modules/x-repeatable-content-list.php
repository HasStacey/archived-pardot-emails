                <!-- REPEATABLE CONTENT LIST // -->
                <table class="container" pardot-repeatable>
                  <tr>
                    <td>

                      <?php
                        if($template != 'recap') {
                          ob_start();
                          ?>
                            <!-- MODULE HEADING // -->
                            <table class="row">
                              <tr>
                                <td class="wrapper offset-by-one last <?php if($template == 'privacy'){ echo ' no-padding-bottom'; } ?>">

                                  <table class="ten columns">
                                    <tr>
                                      <td>

                                        <h2 class="subheading" pardot-region>
                                          <?php 
                                            if($template == 'privacy') {
                                              echo "In The News";
                                            } else {
                                              echo "Repeatable Content Lists";
                                            }
                                          ?>
                                        </h2>
                                        <?php
                                          if($template != 'privacy') {
                                            ob_start();
                                            ?>
                                              <p pardot-removable>This webinar will review the key concepts, technology and terms of the mobile attribution space, as well as reviewing common attribution methodologies.</p>
                                            <?php
                                            ob_end_flush();
                                          }
                                        ?>

                                      </td>
                                    </tr>
                                  </table>

                                </td>
                              </tr>
                            </table>
                            <!-- // MODULE HEADING -->
                          <?php
                          ob_end_flush();
                        }
                      ?>

                      <!-- LIST ITEM AND BUTTONS // -->
                      <table pardot-repeatable>
                        <tr>
                          <td>

                            <!-- LIST ITEM // -->
                            <table class="row">
                              <tr>
                                <td class="wrapper offset-by-one last no-padding-top">

                                  <table class="ten columns">
                                    <tr>
                                      <td>

                                        <!-- ICON AND TITLE // -->
                                        <p style="font-size: 14px; margin-bottom: 0; margin-top: 0;"><img src="http://storage.pardot.com/23402/56802/2015_email_icon_link.png" style="margin-top: 6px; margin-right: 5px;"><a href="#" pardot-region>Mobile Attribution Essentials lorem ipsum dolor sit amet lorem ipsum dolor sit amet</a></p>
                                        <!-- // ICON AND TITLE -->

                                        <!-- DESCRIPTION // -->
                                        <p pardot-region>This webinar will review the key concepts, technology and terms of the mobile attribution space, as well as reviewing common attribution methodologies.</p>
                                        <!-- // DESCRIPTION -->

                                      </td>
                                    </tr>
                                  </table>

                                </td>
                              </tr>
                            </table>
                            <!-- // LIST ITEM -->

                            <?php
                              if($template != 'privacy') {
                                ob_start();
                                ?>
                                  <!-- TWO BUTTONS // -->
                                  <table class="row" pardot-removable>
                                    <tr>

                                      <!-- BUTTON 1 // -->
                                      <td class="wrapper offset-by-one no-padding-top">

                                        <table class="five columns">
                                          <tr>
                                            <td class="center">

                                              <div>
                                                <table cellspacing="0" cellpadding="0" class="button"> 
                                                  <tr> 
                                                    <td align="center" width="230" height="40">
                                                      <a href="#" pardot-region>
                                                        11/17 7:00am - Register
                                                      </a>
                                                    </td> 
                                                  </tr> 
                                                </table> 
                                              </div>

                                            </td>
                                            <td class="expander"></td>
                                          </tr>
                                        </table>

                                      </td>
                                      <!-- // BUTTON 1 -->

                                      <!-- BUTTON 2 // -->
                                      <td class="wrapper last no-padding-top">

                                        <table class="five columns">
                                          <tr>
                                            <td class="center">

                                              <div>
                                                <table cellspacing="0" cellpadding="0" class="button"> 
                                                  <tr> 
                                                    <td align="center" width="230" height="40">
                                                      <a href="#" pardot-region>
                                                        11/17 7:00am - Register
                                                      </a>
                                                    </td> 
                                                  </tr> 
                                                </table> 
                                              </div>

                                            </td>
                                            <td class="expander"></td>
                                          </tr>
                                        </table>

                                      </td>
                                      <!-- // BUTTON 2 -->

                                    </tr>
                                  </table>
                                  <!-- // TWO BUTTONS -->

                                  <!-- SINGLE BUTTON // -->
                                  <table class="row" pardot-removable>
                                    <tr>
                                      <td class="wrapper offset-by-three last no-padding-top">

                                        <table class="six columns">
                                          <tr>
                                            <td class="center">

                                              <div>
                                                <table cellspacing="0" cellpadding="0" class="button"> 
                                                  <tr> 
                                                    <td align="center" width="280" height="40">
                                                      <a href="#" pardot-region>
                                                        11/17 7:00am - Register
                                                      </a>
                                                    </td> 
                                                  </tr> 
                                                </table> 
                                              </div>

                                            </td>
                                            <td class="expander"></td>
                                          </tr>
                                        </table>

                                      </td>
                                    </tr>
                                  </table>
                                  <!-- // SINGLE BUTTON -->
                                <?php
                                ob_end_flush();
                              }
                            ?>

                          </td>
                        </tr>
                      </table>
                      <!-- // LIST ITEM AND BUTTONS -->

                    </td>
                  </tr>
                </table>
                <!-- // REPEATABLE CONTENT LIST -->