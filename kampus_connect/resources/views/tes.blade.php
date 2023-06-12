<?php
foreach ($perusahaan as $perus) {
   echo "Nama Perusahaan: " . $perus->nama . "<br>";
   echo "Logo Perusahaan: <img src='" . asset('storage/' . $perus->logo) . "' alt='Logo Perusahaan'><br>";

   echo "Pekerjaan:<br>";
   foreach ($perus->pekerjaan as $pekerjaan) {
      echo "Posisi: " . $pekerjaan->posisi . "<br>";
      echo "Deskripsi: " . $pekerjaan->deskripsi . "<br>";
      echo "Status: " . $pekerjaan->status . "<br>";
      echo "<br>";
   }
   echo "<hr>";
}
