<html>
    <head>
        <link href="<?php echo URL::to('css/bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?php echo URL::to('css/bootstrap-theme.css');?>" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <table class="table table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal</th>
                        <th>Pelanggan</th>
                        <th>Operator</th>
                        <th>Barang</th>
                        <th>Harga Barang</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tests as $dt) {
                        ?>
                        <tr>
                            <td><?php echo $dt['id'] ?></td>
                            <td><?php echo $dt['tanggal'] ?></td>
                            <td><?php echo $dt['pelanggan'] ?></td>
                            <td><?php echo $dt['operator'] ?></td>
                            <td><?php echo $dt['barang'] ?></td>
                            <td><?php echo $dt['harga_barang'] ?></td>
                            <td><?php echo $dt['jumlah'] ?></td>
                            <td><?php echo $dt['total_harga'] ?></td>
                            <td>
                                <div class="btn btn-group">
                                    <button class="btn btn-primary">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>

