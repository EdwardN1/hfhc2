<?php
/**
 * Created by PhpStorm.
 * User: Edward Nickerson
 * Date: 25/06/2019
 * Time: 10:46
 */
require_once dirname(__FILE__).'/Mobile-Detect/Mobile_Detect.php';
//global $detect;
global $isDesktop;
global $Mobile;
global $isTablet;
global $isiOS;
global $isAndroid;
global $deviceType;
$detect = new Mobile_Detect;

$isDesktop = true;
$deviceType = 'desktop';
$isMobile = $detect->isMobile();
$isTablet = $detect->isTablet();

if ($isMobile || $isTablet) {
    $isDesktop = false;
    $deviceType = 'mobile';
}

if (($isTablet)) {
    $isMobile = false;
    $deviceType = 'tablet';
}

// Check for a specific platform with the help of the magic methods:
$isiOS = $detect->isiOS();
$isAndroid = $detect->isAndroidOS();
