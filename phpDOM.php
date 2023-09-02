<?php 
   $html = ' 
      <head> 
         <title>Top Anime</title>
      </head> 
   
      <body> 
         <h2>Anime Details</h2> 
      
         <table border = "0"> 
               <tr> 
                  <td>Fullmetal Alchemist: Brotherhood</td> 
                  <td>Apr 2009 - Jul 2010</td> 
                  <td>3036823</td> 
               </tr> 
         
               <tr> 
                  <td>Bleach: Sennen Kessen-hen</td> 
                  <td>Oct 2022 - ?</td> 
                  <td>309875</td> 
               </tr> 
         
               <tr> 
                  <td>Kaguya-sama wa Kokurasetai</td> 
                  <td>Apr 2022 - Jun 2022</td> 
                  <td>702406</td> 
               </tr> 
         
               <tr> 
                  <td>Steins;Gate</td> 
                  <td>Apr 2011 - Sep 2011</td> 
                  <td>2337851</td> 
               </tr> 
         
               <tr> 
                  <td>Gintama</td> 
                  <td>Apr 2015 - Mar 2016</td> 
                  <td>567018</td> 
               </tr> 
         
               <tr> 
                  <td>Hunter x Hunter</td> 
                  <td>Oct 2011 - Sep 2014</td> 
                  <td>2519028</td> 
               </tr> 
         
               <tr> 
                  <td>Shingeki no Kyoujin</td> 
                  <td>Apr 2019 - Jul 2019</td> 
                  <td>1971631</td> 
               </tr> 
         </table> 
      </body> 
   </html> 
   '; 
   $dom = new domDocument; 
   
   $dom->loadHTML($html);
   
   $tables = $dom->getElementsByTagName('table'); 
   
   $rows = $tables->item(0)->getElementsByTagName('tr'); 
   
   foreach ($rows as $row) {
      $cols = $row->getElementsByTagName('td'); 
      
      echo 'Title: '.$cols->item(0)->nodeValue.'<br />'; 
      echo 'ReleaseDate: '.$cols->item(1)->nodeValue.'<br />'; 
      echo 'Members: '.$cols->item(2)->nodeValue; 
      echo '<hr />'; 
   }
?> 