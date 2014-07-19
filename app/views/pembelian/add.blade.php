@extends('layout.bootstrap3.index')
@section('content')

<div class="col-sm-7">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Tambah pembeli</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/pembelian/addproses"); ?>" method="post">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Kode Barang Pria</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="id_pria">
                            <option value="" disabled="" selected=""> Pilih Kode Barang  !</option>
                            <?php foreach ($isi as $value) { ?>
                                <option value="<?php echo $value->id ?>"><?php echo $value->kode_barang ?></option>
                            <?php } ?>

                        </select>
                        <p style="color: red"> {{ $errors->first('id') }} </p>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Kode Barang Wanita</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="id_wanita">
                            <option value="" disabled="" selected=""> Pilih Kode Barang !</option>
                            <?php foreach ($tambah as $value) { ?>
                                <option value="<?php echo $value->id ?>"><?php echo $value->kode_barang ?></option>
                            <?php } ?>
                        </select>
                        <p style="color: red"> {{ $errors->first('id') }} </p>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nama Pembeli</label>
                    <div class="col-sm-6">
                        <input type="text" name="nama_pembeli" class="form-control" placeholder="Nama">
                        <p style="color: red"> {{ $errors->first('nama Pembeli') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">No Hp</label>
                    <div class="col-sm-6">
                        <input type="text" name="no_hp" class="form-control" placeholder="No HP">
                        <p style="color: red"> {{ $errors->first('no hp') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Alamat</label>
                    <div class="col-sm-6">
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                        <p style="color: red"> {{ $errors->first('Alamat') }} </p>
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