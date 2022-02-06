<div class="container">
    <h1>SELAMAT DATANG</h1>
    <h3>Hallo nama saya <?=$data['nama'] ?></h3>
    <?php foreach($data['batik'] as $batik): ?>
    <ul>
        <li><?= $batik['nama'];?></li>
        <li><?= $batik['asal_prov'];?></li>
        <li><?= $batik['asal_kota'];?></li>
    </ul>
    <?php endforeach; ?>
</div>