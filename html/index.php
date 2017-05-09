<Html>
<head>
<title> Biodata </title>


</head>

<body>
<h1 >Masukan Biodata </h1>
<form name="formku" method="POST" action="#">

<table width="670" border="0">
  </tr>
  <tr>
    <td width="163" size font="56">Nama</td>
    <td width="326"> :
    <input name="Nama" type="text" id="Nama"></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td> : <select name="Tgl" id="Tgl" >
    <option value="..">..</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>

      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    <select name="Bln" id="Bln">
    <option value="..">..</option>
     <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
    <select name="Thn" id="Thn">
    <option value="..">..</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    </select></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>: <input type="radio" name="JK" value="Laki-Laki"> Laki-Laki  <input type="radio" name="JK"value="Perempuan" id="text"> Perempuan</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="Alamat" cols="50" rows="5" id="Alamat"></textarea></td>
  </tr>
   <td></td>
     <td>
       
      <input name="Kirim" type="submit" id="Kirim" value="Kirim" >
      <input type="reset" name="Ulang" id="button" value="Ulang"></td>
</table>
 <?php


$Nama=$_POST ["Nama"];
$Tgl=$_POST ["Tgl"];
$Bln=$_POST ["Bln"];
$Thn=$_POST ["Thn"];
$JK=$_POST ["JK"];
$Alamat=$_POST ["Alamat"];
$Kirim=$_POST ["Kirim"];
if (!empty($Kirim))

    echo "<h1>Output:</h1>";
    echo "</br>";
    echo "</br>";
    echo "<table width='100%' border='0'>";
    echo "<tr bgcolor=#CCCCCC>";
    echo "<td width='300'>"."Nama : $Nama<td>";
    echo "<tr bgcolor=white>";
    echo "<td width='300'>"."Tanggal Lahir : $Tgl $Bln $Thn <td>";
    echo "<tr bgcolor=#CCCCCC>";
    echo "<td width='300'>"."Jenis Kelamin : $JK<td>";
    echo "<tr bgcolor=white>";
    echo "<td width='300'>"."Alamat : $Alamat<td>";

    ?>
</form>
</body>
</html>