<form action="<?php echo site_url('barang/save') ?>" method="post">
    <div class="mb-3">
        <label>Barcode <code>*</code></label>
        <input class="form-control" name="barcode" type="text" placeholder="Barcode" required>
    </div>

    <div class="mb-3">
        <label>Nama Barang <code>*</code></label>
        <input class="form-control" name="name" type="text" placeholder="Nama Barang" required>
    </div>

    <div class="mb-3">
        <label>Harga Beli <code>*</code></label>
        <input class="form-control" name="harga_beli" type="text" placeholder="Harga Beli" required>
    </div>

    <div class="mb-3">
        <label>Harga Jual <code>*</code></label>
        <input class="form-control" name="harga_jual" type="text" placeholder="Harga Jual" required>
    </div>

    <div class="mb-3">
        <label>Stok <code>*</code></label>
        <input class="form-control" name="stok" type="text" placeholder="Stok" disabled>
    </div>

    <div class="mb-3">
        <label>Kategori <code>*</code></label>
        <select name="kategori" class="form-control" required>
            <option value="">- Pilih -</option>
            <?php foreach ($kategori as $ktg) : ?>
                <option value="<?= $ktg['id']; ?>"><?= $ktg['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Satuan <code>*</code></label>
        <select name="satuan" class="form-control" required>
            <option value="">- Pilih -</option>
            <?php foreach ($satuan as $stn) : ?>
                <option value="<?= $stn['id']; ?>"><?= $stn['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Supplier <code>*</code></label>
        <select name="supplier" class="form-control" required>
            <option value="">- Pilih -</option>
            <?php foreach ($supplier as $spl) : ?>
                <option value="<?= $spl['id']; ?>"><?= $spl['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
</form>

<!-- Form untuk update -->
<form action="<?php echo site_url('barang/update') ?>" method="post">
    <input type="hidden" name="id" value="<?= $barang['id']; ?>">

    <div class="mb-3">
        <label>Barcode <code>*</code></label>
        <input class="form-control" name="barcode" value="<?= $barang['barcode']; ?>" type="text" placeholder="Barcode" required>
    </div>

    <div class="mb-3">
        <label>Nama Barang <code>*</code></label>
        <input class="form-control" name="name" value="<?= $barang['name']; ?>" type="text" placeholder="Nama Barang" required>
    </div>

    <div class="mb-3">
        <label>Harga Beli <code>*</code></label>
        <input class="form-control" name="harga_beli" value="<?= $barang['harga_beli']; ?>" type="text" placeholder="Harga Beli" required>
    </div>

    <div class="mb-3">
        <label>Harga Jual <code>*</code></label>
        <input class="form-control" name="harga_jual" value="<?= $barang['harga_jual']; ?>" type="text" placeholder="Harga Jual" required>
    </div>

    <div class="mb-3">
        <label>Stok <code>*</code></label>
        <input class="form-control" name="stok" value="<?= $barang['stok']; ?>" type="text" placeholder="Stok" disabled>
    </div>

    <div class="mb-3">
        <label>Kategori <code>*</code></label>
        <select name="kategori" class="form-control" required>
            <option value="">- Pilih -</option>
            <?php foreach ($kategori as $ktg) : ?>
                <option value="<?= $ktg['id']; ?>" <?= ($barang['kategori_id'] == $ktg['id']) ? 'selected' : ''; ?>><?= $ktg['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Satuan <code>*</code></label>
        <select name="satuan" class="form-control" required>
            <option value="">- Pilih -</option>
            <?php foreach ($satuan as $stn) : ?>
                <option value="<?= $stn['id']; ?>" <?= ($barang['satuan_id'] == $stn['id']) ? 'selected' : ''; ?>><?= $stn['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Supplier <code>*</code></label>
        <select name="supplier" class="form-control" required>
            <option value="">- Pilih -</option>
            <?php foreach ($supplier as $spl) : ?>
                <option value="<?= $spl['id']; ?>" <?= ($barang['supplier_id'] == $spl['id']) ? 'selected' : ''; ?>><?= $spl['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button class="btn btn-warning" type="submit"><i class="fas fa-plus"></i> Update</button>
</form>