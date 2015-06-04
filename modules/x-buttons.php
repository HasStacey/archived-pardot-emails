                <!-- CALL TO ACTION ON WHITE BACKGROUND WITH TEXT // -->
                <table class="spotlight bg-white container" pardot-repeatable>
                  <tr>
                    <td>

                      <!-- TWO BUTTONS // -->
                      <table class="row" pardot-removable>
                        <tr>

                          <!-- BUTTON 1 // -->
                          <td class="wrapper offset-by-one no-padding-top">

                            <table class="five columns">
                              <tr>
                                <td class="center">

                  <table class="button">
                    <tr>
                      <td>
                        <center><a href="#" pardot-region>11/17 7:00am - Register</a></center>
                      </td>
                    </tr>
                  </table>

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

                  <table class="button">
                    <tr>
                      <td>
                        <center><a href="#" pardot-region>11/17 7:00am - Register</a></center>
                      </td>
                    </tr>
                  </table>

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

                                  <center>
                                  <?php
                                    if($isUpdate) {
                                      ob_start();
                                      ?>

                                        <table class="button">
                                          <tr>
                                            <td>
                                              <center><a href="http://support.mobileapptracking.com/" pardot-region>Visit Support Site</a></center>
                                            </td>
                                          </tr>
                                        </table>

                                      <?php
                                      ob_end_flush();
                                    } else {
                                      ob_start();
                                      ?>

                                        <table class="button">
                                          <tr>
                                            <td>
                                              <center><a href="#" pardot-region>This is a button.</a></center>
                                            </td>
                                          </tr>
                                        </table>

                                      <?php
                                      ob_end_flush();
                                    }
                                    ?>
                                </center>

                                </td>
                                <td class="expander"></td>
                              </tr>
                            </table>

                          </td>
                        </tr>
                      </table>
                      <!-- // SINGLE BUTTON -->

                    </td>
                  </tr>
                </table>
                <!-- // CALL TO ACTION ON WHITE BACKGROUND WITH TEXT -->