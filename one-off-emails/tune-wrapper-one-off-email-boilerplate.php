<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <style>
    <?php
      include('css/one-off-email-styles.css');
    ?>
    </style>
  
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

            <!-- EMAIL CONTENT GOES HERE // -->
            <!-- DOCUMENTATION: http://zurb.com/ink/docs.php -->










            <!-- // EMAIL CONTENT GOES HERE -->

            <!-- FOOTER // -->
            <?php include('modules/footer.php'); ?>
            <!-- // FOOTER -->

          </table>
          <!-- // CONTENT WRAPPER -->
          </center>
        </td>
      </tr>
    </table>
  </body>
</html>
