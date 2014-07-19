@extends('layout.bootstrap3.index')
@section('content')
<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Tambah Barang Wanita</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/aksesoris/addProses"); ?>" method="post">
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Kode Barang</label>
                    <div class="col-sm-4">
                        <input type="text" name="kodebarang" class="form-control " placeholder="Kode Barang">
                        <p style="color: red"> {{ $errors->first('kodebarang') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Nama Barang</label>
                    <div class="col-sm-4">
                        <input type="text" name="namabarang" class="form-control " placeholder="Nama Barang">
                        <p style="color: red"> {{ $errors->first('namabarang') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Barang</label>
                    <div class="col-sm-5">
                        <input type="time" name="jenisbarang" class="form-control" placeholder="Jenis Barang">
                        <p style="color: red"> {{ $errors->first('jenisbarang') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Harga</label>
                    <div class="col-sm-5">
                        <input type="time" name="harga" class="form-control" placeholder="Harga">
                        <p style="color: red"> {{ $errors->first('harga') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop