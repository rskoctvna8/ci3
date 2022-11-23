
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>


    <div class="row">
        <div class="col-lg-6">
        <!-- pesan error -->
        <?= form_error(
            'menu',
            '<div class="alert alert-success" role="alert">
            </div>'
        ); ?>
        <?= $this->session->flashdata('message'); ?>
        <!-- akhir pesan error -->

        <!-- tombol tambah -->
        <a href="" class="btn btn-primary mb-3" class="btn btn-primary"
        data-toggle="modal" data-target="#logoutModal">Add Menu</a>
        <!-- tabel -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($menu as $m) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $m['menu']; ?></td>
                        <td>
                        <a href="<?= base_url('menu/menuedit/') ?><?= $m['id'] ?>" class="badge badge-success" data-toggle="modal" data-target="#editMenu<?= $m['id'] ?>">edit</a>
                        <button onclick="hapusMenu('<?= base_url('menu/hapusmenu/') . $m['id'] ?>')" class="badge badge-danger btn-sm">delete</button>
                    </td>

                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
            </tbody>
        </table>
        <!-- akhir tabel -->

        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End kof Main Content -->
    <!-- modal -->
    <div class="modal fade" id="logoutModal" tebindex="-1"
    aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Add new Menu</h5>
                    <button type="button" class="btn-close"
                    date-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('menu'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                        <input type="text" class="form-control" id="menu"
                        name="menu" placeholder="Menu Name">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal edit -->

<?php foreach($menu as $m) : ?>

<div class="modal fade" id="exampleModalmenuedit<?= $m['id']; ?>" tebindex="-1" 
    aria-labelledby="exampleModalsubedit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Edit Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close">
                    </button>
                </div>
                <form action="<?= base_url('menu/editmenu/'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                        <input type="text" value="<?= $m['menu'] ?>" class="form-control" 
                        name="menu" id="menu" placeholder="menu">
                    </div>    
                </div>
                <div class="form-group">
                    <input type="hidden" readonly value="<?= $m['id']; ?>" class="form-control" 
                    name="id" id="id">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn--secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="menuedit" class="btn btn-primary">Update</button>                  
                    </div>
                </div>
            </div>
               
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>

