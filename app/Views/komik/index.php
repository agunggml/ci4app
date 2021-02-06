<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1><?= $title; ?></h1>
            <a href="/komik/create" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#create">Tambah Komik</a>
            <table class=" table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <?php foreach ($komik as $k) : ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><a href="/komik/<?= $k['slug']; ?>"><img src="/assets/img/<?= $k['sampul']; ?>" alt="" class="sampul"></a></td>
                            <td><a href="/komik/<?= $k['slug']; ?>" class="text-decoration-none text-dark fw-bold"><?= $k['judul']; ?></a></td>
                            <td>
                                <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="create">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Komik</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/komik/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Komik</label>
                        <input type="text" class="form-control" name="judul" id="judul" autocomplete="off" autofocus required>
                        <div class="invalid-feedback">
                            Mohon Masukan Judul Komik
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="col-md-6">
                            <label for="Penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" name="penulis" id="Penulis" required>
                            <div class="invalid-feedback">
                                Mohon Masukan Penulis
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="Penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="Penerbit" required>
                            <div class="invalid-feedback">
                                Mohon Masukan Penerbit
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>