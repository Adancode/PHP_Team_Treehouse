<?php
$currentYear = date('Y');
//$year = $currentYear - 100;

//$currentYear = date('Y');
//$year = $currentYear - 100;

/*for ($year = date('Y') -99; $year <= date('Y'); $year++) {
      echo $year . "<br />\n";
}*/

//while ($year <= $currentYear) {
//     echo $year . "<br />\n";
//     $year++;
//}

//do {
//  echo $year . "<br />\n";
//} while ($year++ <= $currentYear);
//
//$learn = array('Conditionals','Arrays','Loops');
$learn[] = 'Build something awesome!';
array_push($learn,'Functions','Forms','Objects');
array_unshift($learn,'HTML','CSS');
asort($learn);
sort($learn);

for ($i = 0; $i < count($learn); $i++) {
  echo $learn[$i] . "\n";
}

$count = 0;

if(isset($i) == $facts[$i]) {
    echo $facts[$i + 1];
  };

//
//while (list($key, $val) = each($learn)) {
//  echo "$key => $val\n";
//}



//while (list($key, $val) = each($learn) && $count++ < 2) {
//  echo "$key => $val\n";
//}
?>
