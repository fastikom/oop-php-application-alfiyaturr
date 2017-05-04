<html>

<head>
<title>.:Perhitungan Sederhana:.</title>
</head>

<body bgcolor="#666666">
<table width=662 height=182 align=center border=1 bgcolor=white>
  
  
  <tr align=center>
    <td height="23" colspan=5><strong>Perhitungan Menggunakan PHP OOP </strong></td>
	
  </tr>
 
  
  <tr height=60 align=center bgcolor="#CCCCCC">
    <td valign= top colspan=5 align=center>
    <p>&nbsp;</p>
    <?php
/*
* Perhitungan Sederhana Dengan PHP OOP
*/
class Matematika
{
  private $x;
  private $y;
//fungsi penjumlahan
  public function Tambah($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x + $this->y;
    return $hasil;
  }
//fungsi perkalian
  public function Kali($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x * $this->y;
    return $hasil;
  }
//fungsi pengurangan
  public function Kurang($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x - $this->y;
    return $hasil;
  }
//fungsi pembagian
  public function Bagi($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x / $this->y;
    return $hasil;
  }
//fungsi untuk menampilkan form perhitungan
  public function TampilkanForm()
  {
    echo '<form method="POST">';
    echo '<input type="text" name="x"> &nbsp;';
    echo '<select name="operasi">
      <option value="tambah">+</option>
      <option value="kali">x</option>
      <option value="kurang">-</option>
      <option value="bagi">/</option>
    </select> &nbsp;';
    echo '<input type="text" name="y"> &nbsp;';
    echo '<label>=</label> &nbsp;';
    echo '<input type="submit" value="Hitung">';
    echo '</form>';
  }
}

$data = new Matematika();
$data->TampilkanForm();

//proses perhitungan 
if ($_POST) {
  $x = $_POST['x'];
  $y = $_POST['y'];
  if ($_POST['operasi'] == "tambah") {
    echo "Hasil ".$x." + ".$y." = ".$data->Tambah($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "kali") {
    echo "Hasil ".$x." x ".$y." = ".$data->Kali($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "kurang") {
    echo "Hasil ".$x." - ".$y." = ".$data->Kurang($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "bagi") {
    echo "Hasil ".$x." / ".$y." = ".$data->Bagi($x, $y)."<br /><br />";
  }
}
?>
    </td>
  </tr>  
</table>
</body>

</html>