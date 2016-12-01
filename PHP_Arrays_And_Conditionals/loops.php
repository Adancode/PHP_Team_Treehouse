<?php
//$currentYear = date('Y');
//$year = $currentYear - 100;

//while ($year <= $currentYear) {
//     echo $year . "<br />\n";
//     $year++;
//}

//do {
//  echo $year . "<br />\n";
//} while ($year++ <= $currentYear);

$learn = array('Conditionals','Arrays','Loops');
$learn[] = 'Build something awesome!';
array_push($learn,'Functions','Forms','Objects');
array_unshift($learn,'HTML','CSS');
asort($learn);

// while (list($key, $val) = each($learn)) {
//   echo "$key => $val\n";
// }


$count = 0;
while ((list($key, $val) = each($learn)) && $count++ < 2) {
 echo "$key => $val\n";
}
 ?>
