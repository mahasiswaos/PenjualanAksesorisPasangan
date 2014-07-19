@extends('layout.bootstrap3.index')
@section('content')
@if (Session::has('message'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif

<div class="col-sm-12">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tabel Pembelian</div>
        <table class="table table-bordered">

            <thead >
                <tr>
                    <th>Id</th>
                    <th>Nama Pembeli</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th>Kode Aksesoris Pria</th>
                    <th>Nama Aksesoris Pria</th>
                    <th>Harga Aksesoris Pria</th>
                    <th>Kode Aksesoris Wanita</th>
                    <th>Nama Aksesoris Wanita</th>
                    <th>Harga Aksesoris Wanita</th>
                    <th>Total Harga </th>                             
                    <th>Aksi </th>                             


                </tr>
            </thead>
            <tbody >
                <?php foreach ($pembelian as $data) { ?>
                    <tr>
                        <td><?php echo $data->id ?></td>
                        <td><?php echo $data['nama_pembeli']; ?></td>
                        <td><?php echo $data['no_hp']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data->accpria->kode_barang ?></td>
                        <td><?php echo $data->accpria->nama_barang ?></td>
                        <td><?php echo $data->accpria->harga ?></td>
                        <td><?php echo $data->accwanita->kode_barang ?></td>
                        <td><?php echo $data->accwanita->nama_barang ?></td>
                        <td><?php echo $data->accwanita->harga ?></td>
                        <td><?php
                            $hrgpria = $data->accpria->harga;
                            $hrgwanita = $data->accwanita->harga;

                            echo $hrgpria + $hrgwanita;
                            ?></td>
                        <td>
                            <a class="btn btn-info"
                               href="<?php echo URL::to('pembelian/edit').'/'.$data->id ?>">
                                <i class="glyphicon glyphicon-edit"></i>
                                Ubah
                            </a>
                            <a class="btn btn-danger"
                                href="<?php echo URL::to('pembelian/delete') . '/' . $data->id; ?>" >
                                <i class="glyphicon glyphicon-trash"></i>
                            Hapus
                        </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>
    <a href="/pembelian/add/" class="btn btn-info">
        <i class="glyphicon glyphicon-save"></i> Tambah Data Pembelian</a>
</div>

@stop