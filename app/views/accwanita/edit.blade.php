@extends('layout.bootstrap3.index')
@section('content')
<div class="panel panel-info">

    <div class="panel-heading">
        <i class="glyphicon glyphicon-list-alt"></i> 
        <h1>Tabel Edit</h1>
    </div>
    <div class="panel-body">
        <form class="" method="POST" action="<?php echo URL::to('/aksesoris/edit/proses'); ?>">
            <input type="hidden" name="id" value="<?php echo $aksesoris_wanita->id ?>">
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="kodebrg"  
                       class="form-control" value="<?php echo $aksesoris_wanita->kode_barang ?>">
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="namabrg"  
                       class="form-control" value="<?php echo $aksesoris_wanita->nama_barang ?>">
            </div>
            <div class="form-group">
                <label>Jenis Barang</label>
                <input type="text" name="jenisbrg"  
                       class="form-control" value="<?php echo $aksesoris_wanita->jenis_barang ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga"  
                       class="form-control" value="<?php echo $aksesoris_wanita->harga ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </div>
        </form>
        
    </div>
</div>
@stop