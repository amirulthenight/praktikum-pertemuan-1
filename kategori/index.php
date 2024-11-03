<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo site_url('kategori') ?>">Kategori</a></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('kategori/add')?>"><i class="fas fa-plus"></i> Add New</a>
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
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($kategori as $kategori){
                            echo "<tr>
                            <td> $no</td>
                            <td>$kategori->name</td>
                            <td>
                            <div>
                                <a href=".base_url('kategori/getedit/' . $kategori->id)." class='btn btn-sm btn-info'><i class='fas fa-edit'></i>EDIT</a>
                                <a href='".base_url('kategori/delete/'.$kategori->id)."' class='btn btn-sm btn-danger' 
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