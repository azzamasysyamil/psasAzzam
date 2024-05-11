<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Guru</div>
                <div class="col-4">
                    <a href="?m=teachers&s=add" class="btn btn-large btn-primary float-end"><b>+</b></a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Foto</th>
                            <th>Nomor Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once('config.php');
                            $sql = "SELECT teachers.id, nip, name, pob, dob, photo, phone FROM `teachers` JOIN subjects ON subjects.id=teachers.subject_id ;";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                $no = 1;
                                while ($r = mysqli_fetch_assoc($result)) {
                                    $photo = isset($r['photo']) ? $r['photo'] : 'non.jpg';
                                    echo '<tr>
                                            <td>'.$no.'</td>
                                            <td>'.$r['nip'].'</td>
                                            <td>'.$r['name'].'</td>
                                            <td>'.$r['pob'].'</td>
                                            <td>'. date('d M Y', strtotime($r['dob'])).'</td>
                                            <td><img width="100px" style="object-fit:cover; aspect-ratio: 1/1;" src="teachers/photo/'. $photo     .'"> </td>
                                            <td>'.$r['phone'].'</td>
                                            <td>
                                                <a href="?m=teachers&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="?m=teachers&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin guru akan dihapus?\')">Hapus</a>
                                            </td>
                                    </tr>';
                                    $no++;
                                } 
                            } else {
                                echo "<tr><td colspan='9' align='center'>Data Kosong</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>