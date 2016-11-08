<?php

//$today = 'Friday';

date_default_timezone_set('America/Dallas');

$today = date('l');

switch ($today) {
     case 'Monday':
          echo 'Wash on Monday';
          break;
     case 'Tuesday':
          echo 'Wash on Tuesday';
          break;
     case 'Wednesday':
          echo 'Wash on Wednesday';
          break;
     case 'Thursday':
          echo 'Wash on Thursday';
          break;
     case 'Friday':
          echo 'Wash on Friday';
          break;
     case 'Saturday':
          echo 'Wash on Saturday';
          break;
     case 'Sunday':
          echo 'Wash on Sunday';
          break;
}
 ?>
