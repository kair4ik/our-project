<?php

//double loop
for($i=0;$i<10;$i++)
{
  echo $i."A ";
    for($j=0;$j<10;$j++)
    {
        echo $j."B ";
    }
   echo "<br>";
}
echo "<br> <br>";

//triple loop
for($i=0;$i<3;$i++)
{
  echo $i."A ";
    for($j=0;$j<3;$j++)
    {
        echo $j."B ";
         for($k=0;$k<3;$k++)
         {
             echo $k."C ";
         }
    //echo "<br>";
    }
   echo "<br>";
}
