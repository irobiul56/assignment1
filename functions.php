<?php

/**
 * Result Function
 */

function result($bangla, $english, $math){

    $mark = ($bangla + $english + $math )/3;

    if($mark <= 32){
        return "Apni Fail koresen & GPA: F Peasen";
    }elseif($mark >=33 && $mark <=39){
        return "Apni konomoto pass koresen & GPA: D Peasen";
    }elseif($mark >=40 && $mark <=49){
        return "Apni Pass koresen & GPA: C Peasen";
    }elseif($mark >=50 && $mark <=59){
        return "Apni Valo koresen & GPA: B Peasen";
    }elseif($mark >= 60 && $mark <=69){
        return "Apni Sundor koresen & GPA: B+ Peasen";
    }elseif($mark >= 70 && $mark <=79){
        return "Apni Sundor koresen & GPA: A Peasen";
    }elseif($mark >= 80 && $mark <=100){
        return "Apni Sundor koresen & GPA: A+ Peasen";
    }
}


/**
 * Area Function
 */

 function getarea($type = 't', $number1, $number2 = null){

    $area = '';
    $area_type = '';

    switch ($type) {
        case 'r':
            $area = $number1 * $number2;
            $area_type = 'Rectangle';
            break;

            case 's':
                $area = $number1 * $number1;
                $area_type = 'Square';
                break;

            case 't':
                $area = 0.5 * ($number1 * $number2);
                $area_type = 'Tringle';
                break;
            
            case 'c':
                $area = 3.1416 * ($number1*$number1);
                $area_type = 'Circle';
                break;
        
        default:
        $area = 'Undifiend';
        $area_type = 'Undifiend';
        break;

    }
    return "Area of this {$area_type} is {$area}";

 }


//Years Calculation

 function yearsCal($year){

    return $yearscalculator = date('Y') - $year;

 }


/**
  * Dinamic Headline
  */

  function dinamichead($title, $type='h1', $align = 'center', $ff = 'impact', $color = '000', $upperlower='uppercase', $margin='20'){

    return "<{$type} style='text-align:{$align}; font-family:{$ff}; color:{$color}; text-transform:{$upperlower}; margin-top:{$margin}'>{$title}</{$type}>";

  }

/**
   * BMI Formula
   */

   function bmiformula($weight, $height){

    $bmi = $weight/($height*$height);

    if($bmi<18.5){
        return "Your weight is = {$weight} KG <br> and height is = {$height} Meter <br> Your BMI is {$bmi} and You are Underweight";
    }elseif ($bmi>=18.5 && $bmi<=24.9) {
        return "Your weight is = {$weight} KG <br> and height is = {$height} Meter <br> Your BMI is {$bmi} and You are Normal Weight";
    }elseif ($bmi>=25.0 && $bmi<=29.9) {
        return "Your weight is = {$weight} KG <br> and height is = {$height} Meter <br> Your BMI is {$bmi} and You are Overweight";
    }elseif ($bmi>=30.0 && $bmi<=34.9) {
        return "Your weight is = {$weight} KG <br> and height is = {$height} Meter <br> Your BMI is {$bmi} and You are Obesity Class I";
    }elseif ($bmi>=35.0 && $bmi<=39.9) {
        return "Your weight is = {$weight} KG <br> and height is = {$height} Meter <br> Your BMI is {$bmi} and You are Obesity Class II";
    }elseif ($bmi>40) {
        return "Your weight is = {$weight} KG <br> and height is = {$height} Meter <br> Your BMI is {$bmi} and You are Obesity Class III";
    }

   }


/**
 * Currency converter
 */

   function currencycon($amount, $type = 'Dollar'){

    $rate = '';

    switch($type){
        case"Dollar":
            $rate = 86.02;
            break;
        case "Euro":
            $rate = 96.35;
            break;
        case "Pound":
            $rate = 115.32;
            break;
        case "Riyal":
            $rate = 22.93;
            break;
        case "Omani Riyal":
            $rate = 223.41;
            break;
        case" Aruban Florin":
            $rate = 47.78;
            break;
        case "Bahraini Dinar":
            $rate = 228.20;
            break;
        case "Bermudan Dollar":
            $rate = 86.02;
            break;
        case "Bolivian Boliviano":
            $rate = 12.50;
            break;
        case "Brunei Dollar":
            $rate = 63.34;
            break;
    
    }
    $bdt = $amount * $rate;
    return "<h1 style='text-align:center; margin-top:100px;'>{$amount} {$type} = {$bdt} BDT </h1>";

    }
    
// Lowercas and Uppercase function

   function borohat($title, $upperlower='uppercase', $alignment = 'center'){

    return "<h1 style='text-transform:{$upperlower}; text-align:{$alignment}'>{$title}</h1>";

  }


?>


