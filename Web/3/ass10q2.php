<?php
                                        
$number=$_POST['number'];
echo $number;

                                         echo "<h2> Multiplication Table  for $number</h2><br>";
                                             echo "<table border=1>";
                                                  for($i=1; $i <11; $i++)
                                                          {
                                                          $result=$number*$i;
							  echo "<tr><td> $number x $i</td><td>=</td><td>$result</td></tr>";
							//  echo "<tr><td> $result</td></tr>";

                                                          }
                                                          echo "</table>";
							 
                                                          ?>
	   
