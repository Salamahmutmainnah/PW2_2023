<?php
    include_once 'header.php'
?>  

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
					/**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/

                    if(isset($_GET['submit'])) {
                        $nama_lengkap = $_GET['nama_lengkap'];
                        $matkul = $_GET['matkul'];
                        $nuts = $_GET['nuts'];
                        $nuas = $_GET['nuas'];
                        $ntugas = $_GET['ntugas'];

                        require_once 'libfungsi.php';

                        $nuts = $_GET['nuts'];
                        $nuas = $_GET['nuas'];
                        $ntugas = $_GET['ntugas'];
                        $rrt = rerata($nuts, $nuas, $ntugas);

                        $grd = grade($rrt);

                        $title = kelulusan($hasil);

                        echo '<tr>';

                        echo '<td>';
                        echo 3;
                        echo '</td>';

                        echo '<td>';
                        echo $nama_lengkap;
                        echo '</td>';

                        echo '<td>';
                        echo $matkul;
                        echo '</td>';

                        echo '<td>';
                        echo $nuts;
                        echo '</td>';

                        echo '<td>';
                        echo $nuas;
                        echo '</td>';

                        echo '<td>';
                        echo $ntugas;
                        echo '</td>';

                        echo '<td>';
                        echo $rrt;
                        echo '</td>';

                        echo '<td>';
                        echo $grd[0];
                        echo '</td>';

                        echo '<td>';
                        echo $grd[1];
                        echo '</td>';                        

                        echo '<td>';
                        echo $title;
                        echo '</td>';

                        echo '</tr>';
                    }
          ?>
      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php'
?>