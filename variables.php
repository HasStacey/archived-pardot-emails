<?php

// ---------------- WARNING ---------------- //
//                                           //
//   DO NOT CHANGE THE VALUES IN THIS FILE   //
//                                           //
// ----------------------------------------- //


// DEFAULT TEMPLATE VARIABLES & EXPLANATIONS  ----------------------------------------------//

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


// OVERRIDES BASED UPON THEME SELECTION  ----------------------------------------------//

// HASOFFERS THEMES ---------------------------- //
// IF THIS IS THE HO DRIP CAMPAIGN
if($template == 'ho-drip') {
  $isHasOffers = true;
  $isDrip = true;
  $color = 'purple';
}

// IF THIS IS THE HO SINGLE CTA/NOTIFICATION
if($template == 'ho-notification') {
  $isHasOffers = true;
  $color = 'ltblue';
}

// IF THIS IS THE HO ACADEMY
if($template == 'ho-academy') {
  $isHasOffers = true;
  $isNewsletter = true;
  $isAcademy = true;
  $color = 'green';
}

// IF THIS IS THE HO NEWSLETTER
if($template == 'ho-newsletter') {
  $isHasOffers = true;
  $isNewsletter = true;
  $color = 'blue';
}

// IF THIS IS THE PRODUCT UPDATES
if($template == 'ho-updates') {
  $isHasOffers = true;
  $isNewsletter = true;
    $isUpdate = true;
  $color = 'dkblue';
}

// IF THIS IS THE LOST ACCOUNTS TEMPLATE
if($template == 'ho-lost-accounts') {
  $isHasOffers = true;
  $isNewsletter = true;
  $isLostAccount = true;
  $color = 'orange';
}

// TUNE THEMES ---------------------------- //
// IF THIS IS THE TUNE DRIP CAMPAIGN
if($template == 'tune-drip') {
  $isDrip = true;
  $color = 'purple';
}

// IF THIS IS THE TUNE SINGLE CTA/NOTIFICATION
if($template == 'tune-notification') {
  $color = 'ltblue';
}

// IF THIS IS THE TUNE ACADEMY
if($template == 'tune-academy') {
  $isNewsletter = true;
  $isAcademy = true;
  $color = 'green';
}

// IF THIS IS THE TUNE NEWSLETTER
if($template == 'tune-newsletter') {
  $isNewsletter = true;
  $color = 'blue';
}

// IF THIS IS THE BLOG/MARKETING RECAP
if($template == 'recap') {
  $isNewsletter = true;
  $isRecap = true;
  $color = 'orange';
}

// IF THIS IS THE PRODUCT UPDATES
if($template == 'tune-updates') {
  $isNewsletter = true;
    $isUpdate = true;
  $color = 'dkblue';
}

// IF THIS IS THE PRIVACY NEWSLETTER
if($template == 'privacy') {
  $isNewsletter = true;
    $isPrivacy = true;
  $color = 'orange';
}

// IF THIS IS THE LOST ACCOUNTS TEMPLATE
if($template == 'tune-lost-accounts') {
  $isNewsletter = true;
  $isLostAccount = true;
  $color = 'orange';
}





