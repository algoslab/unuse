<?php 

// Function to check if an array is a Uint8Array
function isUint8Array($array) {
    // Check if the input is an array
    if (!is_array($array)) {
        return false;
    }

    // Check if each element in the array is an integer between 0 and 255
    foreach ($array as $value) {
        if (!is_numeric($value) || $value < 0 || $value > 255) {
            return $value;
        }
    }

    return true;  // All checks passed, it's a Uint8Array
}


exec('node script.js', $output, $return_var);

$pdfData = base64_decode($output[0]);
// $elementString = '';
// foreach($output as $element){
//     $elementString .= $element;
// }

// $unit8Array = [$elementString];
file_put_contents('custom.pdf', $pdfData);
print_r($pdfData) ."\n";
//$array = json_decode($output, true);

//print_r($outputArray);