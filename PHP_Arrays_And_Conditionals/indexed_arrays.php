<?php
     $learn = array('Conditionals', 'Arrays', 'Loops');
     $learn[] = 'Build something awesome!';
     array_push($learn, 'Functions', 'Forms', 'Objects');  // Adds items to the end, will add the next index number in order
     array_unshift($learn, "First Item");  //  Add items to the beginning, will update the entire index (to make the addition index 0
     var_dump($learn);
     $first_element_shifted_out = array_shift($learn);  // removes and returns the first enchant_dict_store_replacement
     $last_element_popped_out = array_pop($learn); // removes and returns the last element
     echo $first_element_shifted_out;
     echo $last_element_popped_out;
     unset($learn[1], $learn[2]);  // removes the specified values and keys, but the remaining keys keep the same number, instead of being assigned new numbers.
     //var_dump($learn);
     //var_dump($learn); //explode($learn, "\n");
     //echo implode( "\n", $learn);
     // array_pop removes the last element of an array
     $learn = array_values($learn);  // creates new array with sequentioal array keys (useful when we used unset and want the array to have consecutive keys again)
?>

<!-- Another option is using array_values() after unset():

$array = array(0, 1, 2, 3);

unset($array[2]);
$array = array_values($array);
var_dump($array);
array(3) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  int(3)
}  -->
