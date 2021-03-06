<?php
/**
  Counties in the Republic of Kenya,Governors and their Political Parties.
*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/**
 You should not modify anything above this line
*/

// @TODO : Your code starts here


function multiexplode ($delimiters,$string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$my_array = explode(",",$county_data, 47);
$data = array();

foreach ( $my_array as $k => $v )
{
  $data[] = multiexplode(array("."," – "," - "),$v);

}
$arr = $data;
//$resultDirect = array_filter($arr);
$arr = array_map('array_filter', $arr);
$resultDirect = array_map('array_values', $arr);
echo "<pre>";
//print_r($resultDirect);
?>
<?php require 'countytable.php';?>

<!DOCTYPE html>
<html>
<head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>


   <style  type="text/css">
   table {
       border-collapse: collapse;
       border: 1px solid black;

   }
   table td,th {
       border: 1px solid black;

   }
   td {
       text-align: center;
   }

   </style>


   <body>
   <div class="container">
       <!-- Page Content goes here -->
       <div class="row">

           <div class="col s12">
               <img class="pure-img" src="kenya.jpg" style="width: 750px">
               <!--<div class="container">-->
               <div class="divider"></div>
               <div class="section">

                   <h2>County List</h2>

                   <table class="class="striped"" style="width:70%; padding-top:10%">
                   <th> Number</th>
                   <th>County Name</th>
                   <th>Governor</th>
                   <th>Party</th>
                   <th>Party Logo</th>
                   <th>Website</th>


                   <?php


                   $image="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falert_photo%2F02050a88-734d-40ed-99bf-6e1aaffda636.jpg?alt=media&token=fdc425d4-7bec-444c-af22-c422fd8fee0c";
                   $odm="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Forange.jpg?alt=media&token=158949f3-3f22-4110-a569-d728bfff0657";
                   $kanu="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fkanu.gif?alt=media&token=acb58b2a-8452-498c-b44e-ae17c91ed6ef";
                   $jubilee="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fjubilee.png?alt=media&token=65440557-b5ef-405e-b880-22e7bf26d42b";
                   $narc="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fnarc.jpeg?alt=media&token=efca49af-0efd-44af-9fe3-6b3d4bad0827";
                   $independent="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Findependent.png?alt=media&token=b03ad152-ddfa-49bc-84a6-ffa633c3a301";
                   $wdm="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fmuungano.png?alt=media&token=3302a8fd-b7f5-4e98-9d3a-7fc6d6caba76";
                   $ccm="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fccm.jpg?alt=media&token=b82dbd2b-0e47-4639-a15f-102b3c2c937c";
                   $ford="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fford.jpg?alt=media&token=344b2fd5-2488-4661-8746-ad4558712c9f";
                   foreach ($resultDirect as list($a, $b, $c, $d, $e)) {
                       echo "<tr>";
                       echo "<td >$a</td>";//get index
                       echo "<td>$b</td>";
                       echo "<td>$c</td>";
                       echo "<td><a>$d</a></td>";

                       if($d=='ODM'){
                           echo "<td><img style='width: 50px' alt='image not found' src='{$odm}'></td>";
                       }elseif ($d=='Jubilee'){
                           echo "<td><img style='width: 50px' alt='image not found' src='{$jubilee}'></td>";
                       }
                       elseif ($d=='KANU'){
                           echo "<td><img style='width: 50px' alt='image not found' src='{$kanu}'></td>";
                       }
                       elseif ($d=='CCM'){
                           echo "<td><img style='width: 50px' alt='image not found' src='{$ccm}'></td>";
                       }
                       elseif ($d=='FORD Kenya'){
                           echo "<td><img style='width: 50px' alt='image not found' src='{$ford}'></td>";
                       }

                       elseif ($d=='Independent'){
                           echo "<td><img style='width: 50px' alt='image not found' src='{$independent}'></td>";
                       }

                       elseif ($d=='WDM K'){
                           echo "<td><img style='width: 50px' alt='image not found' src='{$wdm}'></td>";
                       }

                       elseif ($d=='CCM'){
                           echo "<td><img style='width: 50px' alt='image not found' src='{$ccm}'></td>";
                       }
                       else{
                           echo "<td><img style='width: 50px' alt='image not found' src='{$image}'></td>";
                       }


                       echo "<td>$e</td>";




                       echo "</tr>";
                   }
                   ?>


                   </table>
               </div>


               <?php
               //To display the total count of governors per Party
               $party= array();
               foreach ($resultDirect as $a){
                   $party[] = $a[3];
               }

               $party = array_count_values($party);
               echo "<b>The following distribution shows the total number of governors in each party</b>";
               print_r($party);




               //extra effortThis code shows the governors in each party from the distribution.
               echo "<b>The following governors belong to the Jubilee party.</b>".'</br>';
               for ($row = 0; $row < 47; $row++) {
                   if($resultDirect [$row][3]=="Jubilee") {

                       echo $resultDirect[$row][2].'</br>';

                   }
               }
               echo "<b>The following governors belong to the ODM party.</b>".'</br>';
               for ($row = 0; $row < 47; $row++) {
                   if($resultDirect [$row][3]=="ODM") {
                       echo $resultDirect[$row][2].'</br>';
                   }}
               echo "<b> following governors belong to the WDM K party.</b>".'</br>';
               for ($row = 0; $row < 47; $row++) {
                   if($resultDirect [$row][3]=="WDM K") {

                       echo $resultDirect[$row][2].'</br>';
                   }
               }
               echo "<b>The following governors belong to the Independent party.</b>".'</br>';
               for ($row = 0; $row < 47; $row++) {
                   if($resultDirect [$row][3]=="Independent") {
                       echo $resultDirect[$row][2].'</br>';
                   }
               }
               echo "<b>The following governors belong to the NARC Kenya party.</b>".'</br>';
               for ($row = 0; $row < 47; $row++) {
                   if($resultDirect [$row][3]=="Narc Kenya") {
                       echo $resultDirect[$row][2].'</br>';
                   }
               }
               echo "<b>The following governors belong to the CCM party.</b>".'</br>';
               for ($row = 0; $row < 47; $row++) {
                   if($resultDirect [$row][3]=="CCM") {
                       echo $resultDirect[$row][2].'</br>';
                   }
               }

               echo "<b>The following governors belong to the KANU party.</b>".'</br>';
               for ($row = 0; $row < 47; $row++) {
                   if($resultDirect [$row][3]=="KANU") {

                       echo $resultDirect[$row][2].'</br>';
                   }
               }
               echo "<b>The following governors belong to the FORD party.</b>".'</br>';
               for ($row = 0; $row < 47; $row++) {
                   if($resultDirect [$row][3]=="FORD") {
                       echo $resultDirect[$row][2].'</br>';
                   }
               }

               ?>


           </div>


       </div>


   </div>

</body>
<!--JavaScript at end of body for optimized loading-->
<!--<script type="text/javascript" src="js/materialize.min.js"></script>-->
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</html>





