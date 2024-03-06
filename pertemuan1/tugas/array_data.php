<?php
 $fruits = [
    [
        "id" => 1,
        "Nama" => "Durian",
        "Warna" => "Hijau",
        "Stok" => "150 Buah",  
        "Harga" => "Rp.75000/Buah",
        "Deskripsi" => "Daging buahnya lembut dan manis,juga memiliki aroma yang lezat"

    ],
    [
        "id" => 2,
        "Nama" => "Mangga",
        "Warna" => "Hijau Kekuningan",
        "Stok" => "120 Buah",  
        "Harga" => "Rp.28000/Kg",
        "Deskripsi" => "Rasa asam dan manis yang bercampur dalam buah ini membuat buah ini sangat cocok untuk dijadikan sebagai asinan dan rujak"
    ],
    [
        "id" => 3,
        "Nama" => "Manggis",
        "Warna" => "Ungu",
        "Stok" => "220 Buah", 
        "Harga" => "Rp.17000/Kg",
        "Deskripsi" => "Selain daging buahnya, Kulit manggis juga memiliki khasiat yang bagus untuk kesehatan"
    ],
    [
        "id" => 4,
        "Nama" => "Apel",
        "Warna" => "Merah dan Hijau",
        "Stok" => "200 Buah",  
        "Harga" => "Rp.20000/Kg",
        "Deskripsi" => "Apel mengandung berbagai nutrisi penting seperti serat, vitamin C, vitamin A, dan kalium, yang sangat bermanfaat untuk kesehatan"

    ],
    [
        "id" => 5,
        "Nama" => "Buah Naga",
        "Warna" => "Merah muda",
        "Stok" => "180 Buah",  
        "Harga" => "Rp.35000/Kg",
        "Deskripsi" => "Buah ini dikenal dengan rasa manis, membuatnya sangat cocok dijadikan jus atau bisa juga dimakan langsung"

    ]
 ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($fruits as $fruit) {
            ?>
            <tr>
                <td><?= $fruit["id"] ?></td>
                <td><?= $fruit["Nama"]?></td>
                <td><?= $fruit["Warna"]?></td>
                <td><?= $fruit["Stok"]?></td>
                <td><?= $fruit["Harga"]?></td>
                <td><?= $fruit["Deskripsi"]?></td>
            </tr>
          <?php
        }
            ?>

      </tbody>
    </table>
  </div>
</body>
</html>
