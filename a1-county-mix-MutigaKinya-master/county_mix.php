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
17. Makueni – Kivutha Kibwana – WDM K.,
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
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
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

 ?>
<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color:#FBE6DD;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

h2{
  text-align: center;
  font-family:"Comic Sans MS", cursive, sans-serif;
}
  </style>
 </head>
<body>

<h2>Counties in the Republic of Kenya,Governors and their Political Parties.</h2>

    <table>
      <tbody>
  <tr>
  	<th>#</th>
    <th>Name</th>
    <th>Governor</th>
    <th>Website</th>
  </tr>
  <tr>
  	<td>1</td>
    <td>Mombasa</td>
    <td>Hassan Ali Joho <img src="odm.png" width="50" height="50"></td>
    <td> <a href="https://mombasa.go.ke">https://mombasa.go.ke</a></td>
  </tr>
  <tr>
  	<td>2</td>
    <td>Kwale</td>
    <td>Salim Mvurya <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://kwale.go.ke">https://kwale.go.ke</a></td>
  </tr>
  <tr>
  	<td>3</td>
    <td>Kilifi</td>
    <td>Amason Jeffah Kingi <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://kilifi.go.ke">https://kilifi.go.ke</a></td>
  </tr>
  <tr>
  	<td>4</td>	
    <td>Tana River</td>
    <td>Dhadho Godhana <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://tanariver.go.ke">https://tanariver.go.ke</a></td>
  </tr>
  <tr>
  	<td>5</td>	
    <td>Lamu</td>
    <td>Fahim Yasin Twaha <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://lamu.go.ke">https://lamu.go.ke</a></td>
  </tr>
  <tr>
  	<td>6</td>	
    <td>Taita-Taveta</td>
    <td>Granton Samboja <img src="wdmk.jpg" width="40" height="40"></td>
    <td><a href="https://taitataveta.go.ke">https://taitataveta.go.ke</a></td>
  </tr>
  <tr>
  	<td>7</td>
    <td>Garissa</td>
    <td>Ali Bunow Korane <img src="jubilee.png" width="=40" height="40"></td>
    <td><a href="https://garissa.go.ke">https://garissa.go.ke</a></td>
  </tr>
  <tr>
  	<td>8</td>
    <td>Wajir</td>
    <td>Mohamed Abdi Mohamud <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://wajir.go.ke">https://wajir.go.ke</a></td>
  </tr>
  <tr>
  	<td>9</td>
    <td>Mandera</td>
    <td>Ali Ibrahim Roba <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://mandera.go.ke">https://mandera.go.ke</a></td>
  </tr>
  <tr>
  	<td>10</td>
    <td>Marsabit</td>
    <td>Mohamud Mohamed Ali <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://marsabit.go.ke">https://marsabit.go.ke</a></td>
  </tr>
  <tr>
  	<td>11</td>	
    <td>Isiolo</td>
    <td>Mohamed Abdi Kuti <img src="independent.png" width="90" height="40"></td>
    <td><a href="https://isiolo.go.ke">https://isiolo.go.ke</a></td>
  </tr>
  <tr>
  	<td>12</td>	
    <td>Meru</td>
    <td>Kiraitu Murungi <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://meru.go.ke">https://meru.go.ke</a></td>
  </tr>
  <tr>
  	<td>13</td>	
    <td>Tharaka Nithi</td>
    <td>Onesmus Muthomi Njuki <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://tharakanithi.go.ke">https://tharakanithi.go.ke</a></td>
  </tr>
  <tr>
  	<td>14</td>	
    <td>Embu</td>
    <td> Martin Nyaga Wambora <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://embu.go.ke">https://embu.go.ke</a></td>
  </tr>
  <tr>
  	<td>15</td>
    <td>Kitui</td>
    <td>Charitu Ngilu <img src="narc.jpeg" width="60" height="60"></td>
    <td><a href="https://kitui.go.ke">https://kitui.go.ke</a></td>
  </tr>
  <tr>
  	<td>16</td>
    <td>Machakos</td>
    <td>Alfred Mutua <img src="ccm.jpg" width="60" height="60"></td>
    <td><a href="https://machakos.go.ke">https://machakos.go.ke</a></td>
  </tr>
  <tr>
  	<td>17</td>
    <td>Makueni</td>
    <td>Kivutha Kibwana <img src="wdmk.jpg" width="40" height="40"></td>
    <td><a href="https://makueni.go.ke">https://makueni.go.ke</a></td>
  </tr>
  <tr>
  	<td>18</td>	
    <td>Nyandarua</td>
    <td>Francis Kimemia <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://nyandarua.go.ke">https://nyandarua.go.ke</a></td>
  </tr>
  <tr>
  	<td>19</td>	
    <td>Nyeri</td>
    <td>Mutahi Kahiga <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://nyeri.go.ke">https://nyeri.go.ke</a></td>
  </tr>
  <tr>
  	<td>20</td>	
    <td>Kirinyaga</td>
    <td>Ann Waiguru <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://kirinyaga.go.ke">https:/kirinyaga.go.ke</a></td>
  <tr>
  	<td>21</td>
    <td>Murang’a</td>
    <td>Mwangi wa iria <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://murang’a.go.ke">https://murang’a.go.ke</a></td>
  </tr>
  <tr>
  	<td>22</td>
    <td>Kiambu</td>
    <td>Ferdinand Waititu Babayao <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://kiambu.go.ke">https://kiambu.go.ke</a></td>
  </tr>
  <tr>
  	<td>23</td>
    <td>Turkana</td>
    <td>Josphat Nanok <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://turkana.go.ke">https://turkana.go.ke</a></td>
  </tr>
  <tr>
  	<td>24</td>	
    <td>West Pokot</td>
    <td>John Krop Lonyang’apuo <img src="kanu.png" width="60" height="60"></td>
    <td><a href="https://westpokot.go.ke">https://westpokot.go.ke</a></td>
  </tr>
  <tr>
  	<td>25</td>	
    <td>Samburu</td>
    <td>Moses Kasainie Lenolkulal <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://samburu.go.ke">https://samburu.go.ke</a></td>
  </tr>
  <tr>
  	<td>26</td>	
    <td>Trans-Nzoia</td>
    <td> Patrick Khaemba <img src="ford.png" width="60" height="60"></td>
    <td><a href="https://transnzoia.go.ke">https://transnzoia.go.ke</a></td>
  </tr>
  <tr>
  	<td>27</td>	
    <td>Uasin gishu</td>
    <td>Jackson Mandago <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://uasingishu.go.ke">https://uasingishu.go.ke</a></td>
  </tr>
  <tr>
  	<td>28</td>
    <td>Elgeyo Marakwet</td>
    <td>Alex Tanui Tolgas <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://elgeyomarakwet.go.ke">https://elgeyomarakwet.go.ke</a></td>
  </tr>
  <tr>
  	<td>29</td>
    <td>Nandi</td>
    <td>Stephen Sang <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://nandi.go.ke">https://nandi.go.ke</a></td>
  </tr>
  <tr>
  	<td>30</td>
    <td>Baringo</td>
    <td>Stanley K Kipris <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://baringo.go.ke">https://baringo.go.ke</a></td>
  </tr>
  <tr>
  	<td>31</td>	
    <td>Laikipia</td>
    <td>Ndiritu Muriithi <img src="independent.png" width="90" height="60"></td>
    <td><a href="https://laikipia.go.ke">https://laikipia.go.ke</a></td>
  </tr>
  <tr>
  	<td>32</td>	
    <td>Nakuru</td>
    <td>Lee Kinyanjui <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://nakuru.go.ke">https://nakuru.go.ke</a></td>
  </tr>
  <tr>
  	<td>33</td>	
    <td>Narok</td>
    <td>Samuel Kuntai Ole Tunai <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://narok.go.ke">https://narok.go.ke</a></td>
  </tr>
  <tr>
  	<td>34</td>	
    <td>Kajiado</td>
    <td>Joseph Ole Lenku <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://kajiado.go.ke">https://kajiado.go.ke</a></td>
  </tr>
  <tr>
  	<td>35</td>
    <td>Kericho</td>
    <td>Prof.Paul Chepkwony Kiprono <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://kericho.go.ke">https://kericho.go.ke</a></td>
  </tr>
  <tr>
  	<td>36</td>
    <td>Bomet</td>
    <td>Hillary Barchok <img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://bomet.go.ke">https://bomet.go.ke</a></td>
  </tr>
  <tr>
  	<td>37</td>
    <td>Kakamega</td>
    <td>Wyclife Oparanya <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://kakamega.go.ke">https://kakamega.go.ke</a></td>
  </tr>
  <tr>
  	<td>38</td>	
    <td>Vihiga</td>
    <td>Wilber Ottichilo <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://vihiga.go.ke">https://vihiga.go.ke</a></td>
  </tr>
  <tr>
  	<td>39</td>	
    <td>Bungoma</td>
    <td>Wyclife Wafula Wangamiti <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://bungoma.go.ke">https://bungoma.go.ke</a></td>
  </tr>
  <tr>
  	<td>40</td>	
    <td>Busia</td>
    <td>Sospeter Ojaamong <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://busia.go.ke">https://busia.go.ke</a></td>
  </tr>
  <tr>
  	<td>41</td>	
    <td>Siaya</td>
    <td>Cornel Rasanga <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://siaya.go.ke">https://siaya.go.ke</a></td>
  </tr>
  <tr>
  	<td>42</td>	
    <td>Kisumu</td>
    <td>Peter Anyang Nyong’o <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://kisumu.go.ke">https://kisumu.go.ke</a></td>
  </tr>
  <tr>
  	<td>43</td>	
    <td>Homabay</td>
    <td>Cyprian Awiti <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://homabay.go.ke">https://homabay.go.ke</a></td>
  </tr>
  <tr>
  	<td>44</td>	
    <td>Migori</td>
    <td>Zachary Okoth Obado <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://migori.go.ke">https://migori.go.ke</a></td>
  </tr>
  <tr>
  	<td>45</td>
    <td>Kisii</td>
    <td>James Ongware <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://kisii.go.ke">https://kisii.go.ke</a></td>
  </tr>
  <tr>
  	<td>46</td>
    <td>Nyamira</td>
    <td>John Nyangarama Obiena <img src="odm.png" width="50" height="50"></td>
    <td><a href="https://nyamira.go.ke">https://nyamira.go.ke</a></td>
  </tr>
  <tr>
  	<td>47</td>
    <td>Nairobi</td>
    <td>Mike Sonko Mbuvi Kioko<img src="jubilee.png" width="40" height="40"></td>
    <td><a href="https://nairobi.go.ke">https://nairobi.go.ke</a></td>
  </tr>
      </tbody>
 
     <tfoot>
      <style>

      th {
  text-align: center;
}
      td {
  text-align: center;
}
      </style>
<th colspan="4">The number of Governor in each political party</th>
     
<tr>
  <td colspan="4">
   <?php
$ODM = [1,3,4,23,37,38,39,40,41,42,43,44,45,46];
echo "Governors from ODM are "; 
echo count ($ODM);
echo "<br>";
    ?>
  </td>
  
</tr>

<tr>
  <td colspan="4">
    <?php
$jubilee = [2,5,7,8,9,10,12,13,14,18,19,20,21,22,25,27,28,29,30,32,33,34,35,36,47];
echo "Governors from Jubilee are "; 
echo count ($jubilee);
echo "<br>";
    ?>
  </td>

</tr> 

<tr>
  <td colspan="4">
    <?php
$independent = [11,31];
echo "Governors that are Independent are "; 
echo count ($independent);
echo "<br>";
    ?>
  </td>

</tr>

<tr>
  <td colspan="4">
    <?php
$WDMK = [6,17];
echo "Governors from WDMK are "; 
echo count ($WDMK);
echo "<br>";
    ?>
  </td>

<tr>    

<tr>
  <td colspan="4">
    <?php
$Narckenya =[15];
echo "Governors from Narckenya are "; 
echo count ($Narckenya);
echo "<br>";
    ?>
  </td>
  
</tr>

<tr>
  <td colspan="4">
    <?php
$CCM =[16];
echo "Governors from CCM are"; 
echo count ($CCM);
echo "<br>";
    ?>
  </td>
  
</tr>

<tr>
  <td colspan="4">
    <?php
$KANU =[24];
echo "Governors from KANU are"; 
echo count ($KANU);
echo "<br>";
    ?>
  </td>
  
</tr>    

<tr>
  <td colspan="4">
    <?php
$FORDkenya =[26];
echo "Governors from FORDkenya are"; 
echo count ($FORDkenya);
echo "<br>";


#I did my best


    ?>

  </td>
  
</tr>    
      </tfoot>
    </table>

  </body>

</html>





