<?php
// Class Description: to convert from decimal to binary
// Author: Rana Albedaiwi
// Date : 6/19/2024

 class DecBinConversion
{
    //Returning the converting from given decimal to a binary number
    public function decimalToBinary($dec)
    {
        $bin="";
        // while loop until decimal number reachs 0
        while($dec>0)
        {   
            //finding the remainder of decimal number by 2 (a binary number contains 0 and 1)
            $remain=$dec%2;
            //holding least significant bit of the remainder to the binary number
            $bin=$remain.$bin;
            //deviding the decimal number by 2 
            $dec=(int)($dec/2);
        }
        return $bin;
    }


}


?>