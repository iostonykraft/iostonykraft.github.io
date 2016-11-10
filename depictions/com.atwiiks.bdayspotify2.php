<?php
include("com.atwiiks.bdayspotify2.php");
    //$isUDIDProtected=TRUE; //you don’t have to define this if you want it to be false, you can just omit it.
    $compatibleVersions=array("9.3.5","9.3.4","9.3.3","9.3.2","9.3.1","9.3","9.2","9.1","9.0.2","9.0.1","9.0","8.4.1","8.4","8.3","8.2","8.1.3","8.1.2","8.1.1","8.1","8.0.2","8.0.1","8.0"); //if you don't define this array, nothing shows up for the user 
    $name="BDaySpotify 2"; //title of the package

    $description=array(“This tweak gives the user all Spotify premium features except offline downloads.“, “No options to configure.”);
    //each value in the array is a new paragraph
    //You may do links within the description, but must escape all speech marks within the link tag and you need target="_blank" for it to work in Cydia
    // ...array("This is my description. <a href=\"http://www.google.com\" target=\"_blank\">Here's a link to Google.com</a>! Here is more description"); 

    //$changelog=array("1.4:"," - Now has a built-in adblocker. Every time you open the app, the adblocker will automatically update."
       // "- Re-wrote the code from the ground up, which makes it sideloadable and you can finally select Extreme Audio in the app."
       // "- Removed preference pane as it is now redundant.");
    //works the same as description

    $devText="Donate";
    $devLink="paypal.me/tonykraft";

    $devText="Twitter";
    $devLink="https://twitter.com/tonykraft1";
?>