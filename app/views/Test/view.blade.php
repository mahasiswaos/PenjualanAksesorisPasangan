@extends('layout.bootstrap3.index')
@section('content')
<table class="table table-bordered">
    <thead >
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal_Lahir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($test as $val){?>
        <tr>
            <td><?php echo $val->id ?></td>
            <td><?php echo $val->nama ?></td>
            <td><?php echo $val->tanggal_lahir ?></td>
            <td>       
                <a class="btn btn-info glyphicon glyphicon-pencil"
                   href="<?php echo URL::to('/test/edit').'/'.$val->id; ?>"> Edit</a>
                
                <a class="btn btn-danger glyphicon glyphicon-trash"
                   href="<?php echo URL::to('/test/delete').'/'.$val->id; ?>"> Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
@stop