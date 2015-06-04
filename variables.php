<?php

// ---------------- WARNING ---------------- //
//                                           //
//   DO NOT CHANGE THE VALUES IN THIS FILE   //
//                                           //
// ----------------------------------------- //


// DEFAULT TEMPLATE VARIABLES & EXPLANATIONS  ----------------------------------------------//
// Each are set to false by default. They are overridden with the statements in the next section

  // Should this have the HasOffers header?
  $isHasOffers = false;

  // IF you need the full newsletter template:
  $isNewsletter = false;

    // IF you need the academy template
    $isAcademy = false;

    // Is this the marketing recap?
    $isRecap = false; 

    // Is this the privacy newsletter?
    $isPrivacy = false;

    // Is this the product updates template?
    $isUpdate = false;

  // Is this the drip campaign?
  $isDrip = false;

  // Is this an events email?
  $isEvents = false;


// OVERRIDES BASED UPON THEME SELECTION  ----------------------------------------------//

// HASOFFERS THEMES ---------------------------- //
// IF THIS IS THE HO DRIP CAMPAIGN
if($template == 'ho-drip') {
  $isHasOffers = true;
  $isDrip = true;
  $color = 'purple';
  $heroImage = 'http://storage.pardot.com/23402/56784/2015_email_bg_phone.png';
}

// IF THIS IS THE HO SINGLE CTA/NOTIFICATION
if($template == 'ho-notification') {
  $isHasOffers = true;
  $color = 'ltblue';
  $heroImage = 'http://storage.pardot.com/23402/56784/2015_email_bg_phone.png';
}

// IF THIS IS THE HO ACADEMY
if($template == 'ho-academy') {
  $isHasOffers = true;
  $isNewsletter = true;
  $isAcademy = true;
  $color = 'green';
  $heroImage = 'http://storage.pardot.com/23402/65620/2015_email_bg_hasoffers_training.png';
}

// IF THIS IS THE HO NEWSLETTER
if($template == 'ho-newsletter') {
  $isHasOffers = true;
  $isNewsletter = true;
  $color = 'blue';
  $heroImage = 'http://storage.pardot.com/23402/56794/2015_email_bg_we_heart_performance.jpg';
}

// IF THIS IS THE PRODUCT UPDATES
if($template == 'ho-updates') {
  $isHasOffers = true;
  $isNewsletter = true;
    $isUpdate = true;
  $color = 'dkblue';
  $heroImage = 'http://storage.pardot.com/23402/58004/2015_email_bg_notepad.jpg';
}

// IF THIS IS THE LOST ACCOUNTS TEMPLATE
if($template == 'ho-lost-accounts') {
  $isHasOffers = true;
  $isNewsletter = true;
  $isLostAccount = true;
  $color = 'orange';
  $heroImage = 'http://storage.pardot.com/23402/58010/2015_email_bg_reports_tablet_mobile.jpg';
}

// TUNE THEMES ---------------------------- //
// IF THIS IS THE TUNE DRIP CAMPAIGN
if($template == 'tune-drip') {
  $isDrip = true;
  $color = 'purple';
  $heroImage = 'http://storage.pardot.com/23402/56784/2015_email_bg_phone.png';
}

// IF THIS IS THE TUNE SINGLE CTA/NOTIFICATION
if($template == 'tune-notification') {
  $color = 'ltblue';
  $heroImage = 'http://storage.pardot.com/23402/56784/2015_email_bg_phone.png';
}

// IF THIS IS THE TUNE ACADEMY
if($template == 'tune-academy') {
  $isNewsletter = true;
  $isAcademy = true;
  $color = 'green';
  $heroImage = 'http://storage.pardot.com/23402/57248/2015_email_bg_academy_tune.jpg';
}

// IF THIS IS THE TUNE NEWSLETTER
if($template == 'tune-newsletter') {
  $isNewsletter = true;
  $color = 'blue';
  $heroImage = 'http://storage.pardot.com/23402/56790/2015_email_bg_we_heart_mobile.jpg';
}

// IF THIS IS THE BLOG/MARKETING RECAP
if($template == 'recap') {
  $isNewsletter = true;
  $isRecap = true;
  $color = 'orange';
  $heroImage = 'http://storage.pardot.com/23402/56792/2015_email_bg_this_week_in_marketing.jpg';
}

// IF THIS IS THE PRODUCT UPDATES
if($template == 'tune-updates') {
  $isNewsletter = true;
    $isUpdate = true;
  $color = 'dkblue';
  $heroImage = 'http://storage.pardot.com/23402/58004/2015_email_bg_notepad.jpg';
}

// IF THIS IS THE PRIVACY NEWSLETTER
if($template == 'privacy') {
  $isNewsletter = true;
    $isPrivacy = true;
  $color = 'orange';
  $heroImage = 'http://storage.pardot.com/23402/56786/2015_email_bg_privacy_newsletter.png';
}

// IF THIS IS THE LOST ACCOUNTS TEMPLATE
if($template == 'tune-lost-accounts') {
  $isNewsletter = true;
  $isLostAccount = true;
  $color = 'orange';
  $heroImage = 'http://storage.pardot.com/23402/58010/2015_email_bg_reports_tablet_mobile.jpg';
}

// IF THIS IS THE TUNE EVENTS TEMPLATE
if($template == 'tune-events') {
  $isNewsletter = true;
  $color = 'orange';
  $heroImage = 'http://storage.pardot.com/23402/67784/2015_email_bg_sunglasses.jpg';
}





