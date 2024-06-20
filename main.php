<?php
// Class Description: to present the converting from decimal to binary
// Author: Rana Albedaiwi
// Date : 6/19/2024


require_once 'DecBinConversion.php'; 

// Create an instance of the DecBinConversion class
$binNum= new DecBinConversion();

// Convert and print the binary value
$decNum=145;
echo "Binary representation of $decNum is: " . $binNum->decimalToBinary($decNum);


?>
