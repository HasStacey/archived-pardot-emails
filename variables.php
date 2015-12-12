<?php

// ---------------- WARNING ---------------- //
//                                           //
//   DO NOT CHANGE THE VALUES IN THIS FILE   //
//                                           //
// ----------------------------------------- //

// THEMES ---------------------------------------------------------------------------- //

switch($template) {

  // Default / Newsletter
  default:
  case 'newsletter':
    $color = 'blue';

    if($branding == 'TUNE') {
      $heroImage = 'http://storage.pardot.com/23402/56790/2015_email_bg_we_heart_mobile.jpg';
    } else {
      $heroImage = 'http://storage.pardot.com/23402/56794/2015_email_bg_we_heart_performance.jpg';
    }
  break;

  // Academy
  case 'academy':
    $color = 'green';

    if($branding == 'TUNE') {
      $heroImage = 'http://storage.pardot.com/23402/57248/2015_email_bg_academy_tune.jpg';
    } else {
      $heroImage = 'http://storage.pardot.com/23402/65620/2015_email_bg_hasoffers_training.png';
    }
  break;

  // Drip
  case 'drip':
    $color = 'purple';
    $heroImage = 'http://storage.pardot.com/23402/56784/2015_email_bg_phone.png';
  break;

  // Notification / Single CTA
  case 'notification':
    $color = 'ltblue';
    $heroImage = 'http://storage.pardot.com/23402/56784/2015_email_bg_phone.png';
  break;

  // Updates
  case 'updates':
    $color = 'dkblue';
    $heroImage = 'http://storage.pardot.com/23402/58004/2015_email_bg_notepad.jpg';
  break;

  // Events, Lost Accounts, Privacy and Recap
  case 'events':
  case 'lost-accounts':
  case 'privacy':
  case 'recap':
  {
    $color = 'orange';

      switch($template){
        case 'events':
          $heroImage = 'http://storage.pardot.com/23402/75032/2015_email_bg_postback_promenade.jpg';
        break;

        case 'lost-accounts':
          $heroImage = 'http://storage.pardot.com/23402/58010/2015_email_bg_reports_tablet_mobile.jpg';
        break;

        case 'privacy':
          $heroImage = 'http://storage.pardot.com/23402/56786/2015_email_bg_privacy_newsletter.png';
        break;

        case 'recap':
          $heroImage = 'http://storage.pardot.com/23402/56792/2015_email_bg_this_week_in_marketing.jpg';
        break;
      }

    break;
  }
}