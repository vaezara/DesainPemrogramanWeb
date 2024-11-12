<div class="container-fluid">
    <div class="row">
        <?php include "template/menu.php"; ?>

        <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM jabatan WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);
        ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Edit Jabatan</h1>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="edit_jabatan.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" value="<?php echo $row['jabatan']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control" name="keterangan"><?php echo $row['keterangan']; ?></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
                                <a href="index.php?page=jabatan" class="btn btn-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>