@extends('layout.bootstrap3.index')
@section('content')
<div class="col-sm-12">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tabel Aksesoris Wanita</div>
        <table class="table table-bordered">
            <thead class >
                <tr>
                    <th>id</th>
                    <th>kode barang</th>
                    <th>Nama barang</th>
                    <th>jenis barang</th>
                    <th>harga</th>
                    <th>aksi</th>

                </tr>
            </thead>
            <tbody >
                <?php foreach ($aksesoris_wanita as $val) { ?>
                    <tr>
                        <td><?php echo $val->id ?></td>
                        <td><?php echo $val->kode_barang ?></td>
                        <td><?php echo $val->nama_barang ?></td>
                        <td><?php echo $val->jenis_barang ?></td>
                        <td><?php echo $val->harga ?></td>
                        <td>       
                            <a class="btn btn-info glyphicon glyphicon-pencil"
                               href="<?php echo URL::to('/aksesoris/edit') . '/' . $val->id; ?>"> Edit</a>

                            <a class="btn btn-danger glyphicon glyphicon-trash"
                               href="<?php echo URL::to('/aksesoris/delete') . '/' . $val->id; ?>"> Delete</a>


                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php echo $aksesoris_wanita->links(); ?>

    </div>
    <a class="btn btn-info glyphicon glyphicon-save"
       href="<?php echo URL::to('/aksesoris/add') . '/' ?>"> Tambah
    </a>


</div>

@stop