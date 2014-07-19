@extends('layout.bootstrap3.index')
@section('content')
<div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <i class="glyphicon glyphicon-list-alt"></i> 
        <h1>Tabel Edit</h1>
    </div>
    <div class="panel-body">
        <form class="" method="POST"  action="<?php echo URL::to('/pembelian/editproses'); ?>">
            <input type="hidden" name="id" value="<?php echo $pembelian->id ?>">
            <div class="form-group">
                <label>Nama Pembeli</label>
                <input type="text" name="namapembeli"  
                       class="form-control" value="<?php echo $pembelian->nama_pembeli ?>">
            </div>
            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="no_hp"  
                       class="form-control" value="<?php echo $pembelian->no_hp ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat"  
                       class="form-control" value="<?php echo $pembelian->alamat ?>">
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