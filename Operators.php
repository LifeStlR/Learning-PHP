<?php
         $a = 1;
         $b = 0;
         
         if( $a && $b ) {
            echo "TEST1 : Both are true<br/>";
         }else{
            echo "TEST1 : Either is false<br/>";
         }
         
         if( $a and $b ) {
            echo "TEST2 : Both are true<br/>";
         }else{
            echo "TEST2 : Either is false<br/>";
         }
         
         if( $a || $b ) {
            echo "TEST3 : Either is true<br/>";
         }else{
            echo "TEST3 : Both are false<br/>";
         }
         
         if( $a or $b ) {
            echo "TEST4 : Either is true<br/>";
         }else {
            echo "TEST4 : Both are false<br/>";
         }
         
         $a = 0;
         $b = 1;
         
         if( $a ) {
            echo "TEST5 : true <br/>";
         }else {
            echo "TEST5 : false<br/>";
         }
         
         if( $b ) {
            echo "TEST6 : true <br/>";
         }else {
            echo "TEST6 : false<br/>";
         }
         
         if( !$a ) {
            echo "TEST7 : true <br/>";
         }else {
            echo "TEST7 : false<br/>";
         }
         
         if( !$b ) {
            echo "TEST8 : true <br/>";
         }else {
            echo "TEST8 : false<br/>";
         }
      ?>