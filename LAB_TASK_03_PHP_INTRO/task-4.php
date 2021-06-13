<?php
      $a1=10;
      $a2=11;
      $a3=13;
      if($a1>$a2 && $a1>$a3){
        echo $a1;
      }
      else{
        if($a2>$a1 && $a2>$a3){
          echo $a2;
        }
        else
          echo $a3;
      }
?>