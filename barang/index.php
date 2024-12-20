<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo site_url('barang') ?>">Barang</a></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('barang/add')?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('successs')); ?>
            <div class="alert alert-succes" role="alert">
                <?php echo $this->session->flashdata('succes'); ?>
            </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tabelkelas" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Barkode</th>
                                <th>Name</th>
                                <th>Satuan</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($barang as $barang){
                            echo "<tr>
                            <td>$no</td>
                            <td>$barang->barkode</td>
                            <td>$barang->name</td>
                            <td>$barang->satuan</td>
                            <td>$barang->kategori</td>
                            <td>$barang->stok</td>
                            <td>$barang->harga_beli</td>
                            <td>$barang->harga_jual</td>
                            <td>
                            <div>
                                <a href=".base_url('barang/getedit/' . $barang->id)." class='btn btn-sm btn-info'><i class='fas fa-edit'></i>EDIT</a>
                                <a href='".base_url('barang/delete/'.$barang->id)."' class='btn btn-sm btn-danger' 
                                            onclick='return confirm(\"Ingin menghapus data user ini?\");'>
                                                <i class='fas fa-trash'></i> Hapus </a>
                            </div>
                            </td>
                            </tr>"
                        $no++;
                        }?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</main>