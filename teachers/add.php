<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Guru</div>
                <div class="col-4">
                    <a href="?m=siswa&s=view" class="btn btn-large btn-primary float-end"><b><</b></a>
                </div>
            </div>

            <div class="card-body">
               <form action="?m=teachers&s=save" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" name="nip" class="form-control" placeholder="Nomor Induk Guru" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama Guru" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pob" class="form-control" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="mb-3">
                        <input type="date" name="dob" class="form-control" placeholder="Tanggal Lahir" required>
                    </div>
                    <div class="mb-3">
                        <select name="subject_id" class="form-control">
                            <option value="">Pilih Subject</option>
                            <?php
                                include_once("config.php");
                                $sql = "SELECT * FROM subjects";
                                $result = mysqli_query($con, $sql);
                                while ($r = mysqli_fetch_assoc($result)) {
                                    echo "<option value='". $r['id'] ."'>". $r['subject'] ."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Masukan Foto</label>
                        <input type="file" name="photo" class="form-control" accept="image/">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>