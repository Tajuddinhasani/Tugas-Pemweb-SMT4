<?= $this->extend('layout/templet'); ?>

<?= $this->section('content'); ?>
<div class= container>
    <div class="row">
        <div class="col">
          <h1 class="mt-2">Daftar Komik</h1>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sampul</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($buku as $k) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
      <td><?= $k['judul']; ?></td>
      <td>
        <a href="/books/<?= $k['slug'];?>" class="btn btn-success">Detail</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>