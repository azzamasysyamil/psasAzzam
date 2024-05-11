<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Mata Pelajaran</div>
                <div class="col-4">
                    <a href="?m=subjects&s=view" class="btn btn-large btn-primary float-end"><b><</b></a>
                </div>
            </div>
<?php
include_once('config.php');
$id=$_GET['id'];
$sql = "SELECT * FROM subjects WHERE id='$id'";
$result = mysqli_query($con, $sql);
$r=mysqli_fetch_assoc($result);
?>
            <div class="card-body">
               <form action="?m=subjects&s=update" method="POST">
                    <div class="mb-3">
                        <input type="text" name="subject" value="<?= $r['subject'] ?>" class="form-control" placeholder="Mata Pelajaran" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="int" name="hour" value="<?= $r['hour'] ?>" class="form-control" placeholder="Jam" required>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="update" class="btn btn-primary">
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>