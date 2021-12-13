<?php
$a=1; $b = false;
if ($a) { echo '$a='."$a - истина<br>"; }
 else { echo '$a='."$a - ложь<br>"; }
if ($b) { echo '$b='."$b - истина<br>"; }
 else { echo '$b='."$b - ложь<br><p>"; }

$a=0; $b = 0;
if ($a) { echo '$a='."$a - истина<br>"; }
 else { echo '$a='."$a - ложь<br>"; }
if ($b) { echo '$b='."$b - истина<br>"; }
 else { echo '$b='."$b - ложь<br><p>"; }

$a=10; $b = true;
if ($a) { echo '$a='."$a - истина<br>"; }
 else { echo '$a='."$a - ложь<br><p>"; }
if ($b) { echo '$b='."$b - истина<br><p>"; }
 else { echo '$b='."$b - ложь<<br>"; }

$a=false; $b = false;
if ($a) { echo '$a='."$a - истина<br>"; }
 else { echo '$a='."$a - ложь<br>"; }
if ($b) { echo '$b='."<p>$b - истина<br>"; }
 else { echo '$b='."$b - ложь<br><p>"; }

$a=-1; $b = '';
if ($a) { echo '$a='."$a - истина<br>"; }
 else { echo '$a='."$a - ложь<br>"; }
if ($b) { echo '$b='."$b - истина<br>"; }
 else { echo '$b='."$b - ложь<br><p>"; }
?>