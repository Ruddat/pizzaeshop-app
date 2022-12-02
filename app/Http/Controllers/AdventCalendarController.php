<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use data;
use config;
use calendarWidth;
use Browser;

class AdventCalendarController extends Controller
{
    public function index()
{

// $agent = new Agent();
//    if ($agent->isTablet()) {
//     $jsonString = file_get_contents(base_path('public/app/mobile_calendar.json'));
//   } elseif ($agent->isMobile()) {
//     $jsonString = file_get_contents(base_path('public/app/calendar.json'));
//   } else {
//   $jsonString = file_get_contents(base_path('public/app/calendar.json'));
//  }

// https://github.com/hisorange/browser-detect

// Determine the user's device type is simple as this:
Browser::isMobile();
Browser::isTablet();
Browser::isDesktop();

// Every wondered if it is a bot who loading Your page?
if (Browser::isBot()) {
    echo 'No need to wonder anymore!';
}

// Check for common vendors.
// if (Browser::isFirefox() || Browser::isOpera()) {
//    echo 'No need to wonder anymore!';
    //$response .= '<script src="firefox-fix.js"></script>';
// }

// Sometimes You may want to serve different content based on the OS.
if (Browser::isDesktop()) {
   // $response .= '<a>Install our Android App!</a>';
    $jsonString = file_get_contents(base_path('public/assets/json/calendar/calendar.json'));
} elseif (Browser::isMac() && Browser::isMobile()) {
    $response .= '<a>Install our iOS App!</a>';
    $jsonString = file_get_contents(base_path('public/assets/json/calendar/calendar.json'));
}


//$agent = new Agent();
//      if ($agent->isMobile() or $agent->isTablet()) {
//      $jsonString = file_get_contents(base_path('public/assets/json/calendar/mobile_calendar.json'));
//      } else {
//      $jsonString = file_get_contents(base_path('public/assets/json/calendar/calendar.json'));
//      }

$data = json_decode($jsonString, true);

//dd($data);

//  $path = '/storage/app/calendar.json';
//  $total = $this->load_from_json();
//  $total = $this->render();
//  $jsonString = file_get_contents(base_path('public\app\calendar.json'));
//  $data = json_decode($jsonString, true);
//  $member = json_decode($jsonString);
$output = ['output'];
$calendarWidth = $data['config']['calendarWidth'];
$calendarHeight = $data['config']['calendarHeight'];
$entry = $data['entries'];

if ($this->validate_entry($entry)) {
  $this->entries[] = $entry;
  }
  function _construct($config = array()) {
    $this->set_config($config);
    }


    //<a itemprop="image" title="portfolio-single-img7" data-rel="prettyPhoto[single_pretty_photo]" href="/images/1542429021Pizza-Express-Stores.jpg">
   // <img itemprop="image" src="/images/1542429021Pizza-Express-Stores.jpg" alt="a">
   // </a>


$now = time();
$output = "";

  $output .= '<div class="advent-calendar" style="width:'.$calendarWidth.'px;height:'.$calendarHeight.'px;">';
  foreach ($entry as $entry) {
    if ($entry['doorImageLeft'] && $entry['doorImageRight']) {
      $totalwidth = $entry['doorWidth'] * 2;
    } else {
      $totalwidth = $entry['doorWidth'];
    }
    if (time() >= strtotime($entry['unlockDate'])) {
  //    $output .= '<a href="'.$entry['url'].'" class="advent-calendar-entry" style="width:'.$totalwidth.'px;top:'.$entry['positionTop'].'px;left:'.$entry['positionLeft'].'px;">';
      $output .= '<a itemprop="image" data-rel="prettyPhoto" href="'.$entry['url'].'" class="advent-calendar-entry" style="width:'.$totalwidth.'px;top:'.$entry['positionTop'].'px;left:'.$entry['positionLeft'].'px;">';

      if ($entry['backgroundImage']) {
        $output .= '<img class="advent-calendar-background" src="'.$entry['backgroundImage'].'" alt="" />';
      }
      if ($entry['doorImageLeft']) {
        $output .= '<div class="advent-calendar-door-left-wrapper"><img class="advent-calendar-door" src="'.$entry['doorImageLeft'].'" alt="" /></div>';
      }
      if ($entry['doorImageRight']) {
        $output .= '<div class="advent-calendar-door-right-wrapper"><img class="advent-calendar-door" src="'.$entry['doorImageRight'].'" alt="" /></div>';
      }
      $output .= '</a>';
    } else {
      $output .= '<div class="advent-calendar-entry" style="width:'.$totalwidth.'px;top:'.$entry['positionTop'].'px;left:'.$entry['positionLeft'].'px;">';
      if ($entry['doorImageLeft']) {
        $output .= '<div class="advent-calendar-door-left-wrapper"><img class="advent-calendar-door" src="'.$entry['doorImageLeft'].'" alt="" /></div>';
      }
      if ($entry['doorImageRight']) {
        $output .= '<div class="advent-calendar-door-right-wrapper"><img class="advent-calendar-door" src="'.$entry['doorImageRight'].'" alt="" /></div>';
      }
      $output .= '</div>';
    }
  }
  $output .= '</div>';

return view('components.frontend.pages.advent', compact('output'));

//dd($output);

}
public function set_config($config) {
$this->calendarWidth = $config['calendarWidth'] ? $config['calendarWidth'] : "500px";
$this->calendarHeight = $config['calendarHeight'] ? $config['calendarHeight'] : "840px";
}

public function validate_entry($entry) {
if
 (
  !array_key_exists('unlockDate', $entry) ||
  !array_key_exists('positionTop', $entry) ||
  !array_key_exists('positionLeft', $entry) ||
  (!array_key_exists('doorImageLeft', $entry) && !array_key_exists('doorImageRight', $entry)) ||
  !array_key_exists('url', $entry)
)
{
  return false;
}
return true;
}


}
