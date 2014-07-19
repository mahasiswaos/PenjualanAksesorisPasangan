@extends('layout.bootstrap3.index')
@section('content')

<div class="alert alert-info alert-dismissable">
    <header class="col-lg-offset-4 col-lg-offset-4">
        <h1>Aksesoris Pria</h1>
    </header>

</div>
<div class="alert alert-info">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aksesoris_pria as $val) { ?>
                <tr>
                    <td><?php echo $val->id ?></td>
                    <td><?php echo $val->kode_barang ?></td>
                    <td><?php echo $val->nama_barang ?></td>
                    <td><?php echo $val->jenis_barang ?></td>
                    <td><?php echo $val->harga ?></td>
                    <td>
                        <a class="btn btn-info"
                           href="<?php echo URL::to('accpria/edit') . '/' . $val->id; ?>" >
                            <i class="glyphicon glyphicon-edit"></i>
                            Ubah
                        </a>
                        <a class="btn btn-danger"
                           href="<?php echo URL::to('accpria/delete') . '/' . $val->id; ?>" >
                            <i class="glyphicon glyphicon-trash"></i>
                            Hapus
                        </a>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php echo $aksesoris_pria->links(); ?>
</div>
<a class="btn btn-info"
       href="<?php echo URL::to('accpria/add') . '/' ?>" >
        <i class="glyphicon glyphicon-save"></i>
        Tambah Barang
</a>
@stop