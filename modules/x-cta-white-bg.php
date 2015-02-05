                <!-- CALL TO ACTION ON WHITE BACKGROUND WITH TEXT // -->
                <table class="spotlight bg-white container" pardot-repeatable>
                  <tr>
                    <td>

                      <!-- HEADER // -->
                      <table class="row">
                        <tr>
                          <td class="wrapper offset-by-one last <?php if($isPrivacy || $isUpdate){ echo ' no-padding-top'; } ?>">

                            <table class="ten columns">
                              <tr>
                                <td>

                                  <h2 class="center" pardot-region>Have a Topic to Share?</h2>

                                </td>
                                <td class="expander"></td>
                              </tr>
                            </table>

                          </td>
                        </tr>
                      </table>
                      <!-- // HEADER -->

                      <!-- TEXT // -->
                      <table class="row">
                        <tr>
                          <td class="wrapper offset-by-one no-padding-top">

                            <table class="ten columns last">
                              <tr>
                                <td>

                                  <p style="text-align: center;" class="center" pardot-region>Looking to find answers to or further discuss privacy and policy issues? Send us an email with your topic suggestions and we can feature them in an upcoming newsletter.</p>

                                </td>
                                <td class="expander"></td>
                              </tr>
                            </table>

                          </td>
                        </tr>
                      </table>
                      <!-- // TEXT -->

                      <?php
                        if(!$isPrivacy && !$isUpdate) {
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

                                        <center>
                                          <a href="" class="button" style="display: block;" pardot-region>This is a button</a>
                                      </center>

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

                                        <center>
                                          <a href="" class="button" style="display: block;" pardot-region>This is a button</a>
                                      </center>

                                      </td>
                                      <td class="expander"></td>
                                    </tr>
                                  </table>

                                </td>
                                <!-- // BUTTON 2 -->

                              </tr>
                            </table>
                            <!-- // TWO BUTTONS -->
                          <?php
                          ob_end_flush();
                        }
                      ?>

                      <!-- SINGLE BUTTON // -->
                      <table class="row" pardot-removable>
                        <tr>
                          <td class="wrapper offset-by-three last no-padding-top">

                            <table class="six columns">
                              <tr>
                                <td class="center">

                                  <center>
                                    <a href="" class="button" style="display: block;" pardot-region>This is a button</a>
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