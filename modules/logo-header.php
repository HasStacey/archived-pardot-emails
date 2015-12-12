<table class="container logo-container">
  <tr>
    <td>

      <table class="row">
        <tr>
          <td class="wrapper last">

            <table class="twelve columns">
              <tr>
                <td class="center">

                  <?php
                    switch($template) {
                      case 'app-store':
                      case 'events':
                      case 'privacy':
                      case 'recap':
                      case 'updates':
                        $branding = 'TUNE'; // Prevents HO header on non-HO templates
                      break;
                    }

                    if($branding == 'TUNE') {
                      echo '<a href="http://www.tune.com"><img src="http://storage.pardot.com/23402/59960/2015_email_tune_logo.png" width="97" height="24" alt="TUNE" style="max-width: 150px !important;" class="center"></a>';
                    } else {
                      echo '<a href="http://www.hasoffers.com"><img src="http://storage.pardot.com/23402/59958/2015_email_ho_by_tune_logo.png" width="97" height="38" alt="HasOffers by TUNE" style="max-width: 150px !important;" class="center"></a>';
                    }

                  ?>

                </td>
                <td class="expander"></td>
              </tr>
            </table>

          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>