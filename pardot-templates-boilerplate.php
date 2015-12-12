<?php 

// 1: APPLY CORRECT BRANDING
// The HO branding only applies to the following templates:
  // Academy
  // Drip
  // Lost Accounts
  // Newsletter
  // Notification
// -------------------------------------------------------------------------------------
  $branding = 'TUNE';
  // $branding = 'HasOffers';


// 2: APPLY THE CORRECT TEMPLATE
// -------------------------------------------------------------------------------------
  $template = 'academy';        // SCSS theme should be set to $c-green
  // $template = 'app-store';      // Includes Apple required app store buttons
  // $template = 'drip';           // SCSS theme should be set to $c-purple
  // $template = 'events';         // SCSS theme should be set to $c-orange
  // $template = 'lost-accounts';  // SCSS theme should be set to $c-orange
  // $template = 'newsletter';     // SCSS theme should be set to $c-blue
  // $template = 'notification';   // SCSS theme should be set to $c-ltblue
  // $template = 'privacy';        // SCSS theme should be set to $c-orange
  // $template = 'recap';          // SCSS theme should be set to $c-orange
  // $template = 'updates';        // SCSS theme should be set to $c-dkblue


  // 3: APPLY PRODUCTION STYLESHEET?
  // If you're working on localhost, set this to 'false'
  // See header.php
  // -------------------------------------------------------------------------------------
  $applyProductionStylesheet = true;
  // $applyProductionStylesheet = false;


  // 4: OPTIONAL: HIGHLIGHT THE PARDOT REGIONS?
  // Will highlight all elements with the pardot-region (orange), pardot-removable (red), 
  // or pardot-repeatable (lime green) attributes
  // See header.php
  // -------------------------------------------------------------------------------------
  $highlightPardotRegionAttr = false;
  // $highlightPardotRegionAttr = true;

  include('variables.php');
  include('header.php');

?>

  <!-- PARDOT MOVABLE CONTENT // -->
  <tr>
    <td>

    <?php
      switch($template) {
        default:
        case 'academy':
        case 'app-store':
        case 'events':
        case 'lost-accounts':
        case 'newsletter':
          include('modules/x-lesser-content.php');
          include('modules/x-spotlight-training.php');
          include('modules/x-micro-post-single.php');
          include('modules/x-micro-post-double.php');
          include('modules/x-cta-grey-bg.php');
          include('modules/x-cta-white-bg.php');
          include('modules/x-repeatable-link-list.php');
          include('modules/x-two-images.php');
          include('modules/pre-footer-events-spotlight.php');
        break;

        case 'app-store':
        break;

        case 'drip':
        case 'notification':
          include('modules/x-cta-grey-bg.php');
          include('modules/drip-general-content.php');
          include('modules/x-two-images.php');
        break;

        case 'privacy':
          include('modules/x-repeatable-content-list.php');
          include('modules/x-cta-white-bg.php');
        break;

        case 'recap':
          include('modules/x-repeatable-content-list.php');
          include('modules/x-cta-grey-bg.php');
          include('modules/x-cta-white-bg.php');
          include('modules/pre-footer-events-spotlight.php');
        break;

        case 'updates':
          include('modules/x-repeatable-link-list.php');
          include('modules/x-cta-white-bg.php');
        break;
      }
    ?>

    </td>
  </tr>
  <!-- // PARDOT MOVABLE CONTENT -->

  <?php 
    include('modules/footer.php');
  ?>