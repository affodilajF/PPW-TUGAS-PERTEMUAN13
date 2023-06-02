<!-- Nomor ! -->

<?php 
echo "Nomor 1 <br>";

$nickName = 'ara'; 
$lengthName = strlen($nickName);
$date = date('d') - 2;

if ($lengthName == $date) {
    echo 'Berhasil';
} else if ($lengthName < $date) {
      echo 'Sedikit Lagi';
} else {
      echo 'Coba Lagi'; 
}

?>

<!-- Nomor 2 -->
<?php 
echo "<br> <br> <br> ";
// <!-- multi array name, nim  -->
$persons = [
  [
    'name' => "Araya",
    'NIM' => 505662
  ],
  [
    'name' => "Banana",
    'NIM' => 505662
  ],
  [
    'name' => "Cerena",
    'NIM' => 505661
  ],
  [
    'name' => "Diandara",
    'NIM' => 505661
  ],
  [
    'name' => "Emanueal",
    'NIM' => 505661
  ],
];
?>


<?php 
echo "Nomor 2 <br>";
?>
<style>
  table {
    border-collapse: collapse;
    border: 1px solid black;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
  }
</style>

<table>
  <tr>
    <th>Front End</th>
    <th>Backend</th>
  </tr>
  <tr>
    <td>
      <?php
      // Print NIM GANJIL
      for ($i = 0; $i < count($persons); $i++) {
        if ($persons[$i]['NIM'] % 2 != 0) {
          echo $persons[$i]['name'] . "<br>";
        }
      }
      ?>

    </td>
    <td>
      <?php
      // Print NIM GENAP 
      for ($i = 0; $i < count($persons); $i++) {
        if ($persons[$i]['NIM'] % 2 == 0) {
          echo $persons[$i]['name'] . "<br>";
        }
      }
      ?>
    </td>
  </tr>
</table>


<!-- Nomor 2 -->
<?php 
echo "<br> <br> <br> "
?>
<?php
echo "Nomor 3 <br>";
    
    $nama = ["F", "a", "d", "i", "l"];
    $kota = ['Lampung', 'Riau', 'Jambi', 'Bengkulu', 
    'Makassar', 'Kendari', 'Gorontalo', 'Samarinda', 'Papua', 
    'Nusa Tenggara Barat'
    ];

    $kota_hasil = "";

    for ($i = 0; $i < count($nama); $i++) {
        for ($j = 0; $j < count($kota); $j++) {
            $lower_kota = strtolower($kota[$j]);
            $lower_char = strtolower($nama[$i]);
            if (strpos($lower_kota, $lower_char) === 0) {
                $kota_hasil = $kota[$j];
                break;
            }
        }
        if (strlen($kota_hasil) > 0) {
            break;
        }
    }
    if ($kota_hasil == "") {
        $kota_hasil = "Jawa Timur";
    }
    echo  "Akan ditempatkan di " . $kota_hasil;
?>






