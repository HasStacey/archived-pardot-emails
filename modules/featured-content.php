
                      <!-- NON MOVABLE FEATURED CONTENT // -->
                      <table class="container" pardot-repeatable>
                        <tr>
                          <td>

                            <!-- ROW 1 // -->
                            <table class="row">
                              <tr>
                                
                                <!-- HEADING // -->
                                <td class="wrapper offset-by-one last <?php if($template == 'recap'){ echo "no-padding-bottom"; } ?>">

                                  <table class="ten columns">
                                    <tr>
                                      <td>

                                        <h2 class="subheading" pardot-region pardot-removable>
                                          <?php
                                            switch($template) {
                                              default:
                                                echo 'Subheading';
                                              break;

                                              case 'newsletter':
                                                echo $branding . ' [MONTH] Newsletter';
                                              break;

                                              case 'academy':
                                                echo $branding . ' Academy';
                                              break;

                                              case 'updates':
                                                echo $branding . ' Product Updates';
                                              break;

                                              case 'recap':
                                                echo 'Must Read Blog Posts';
                                              break;

                                              case 'privacy':
                                                echo 'TUNE Privacy &amp; Policy [MONTH] Newsletter';
                                            }
                                          ?>
                                        </h2>
                                        <?php
                                          if($template != 'recap') {
                                            echo '<h1 class="text-theme" pardot-region pardot-removable>Title Content Module; not removable, movable or repeatable. 2 line limit plz.</h1>';
                                          }

                                          if($template != 'privacy' && $template != 'recap') {
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

                                          if($template != 'recap') {
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