<html>
    <head>
        <link href="<?php echo URL::to('css/bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?php echo URL::to('css/bootstrap-theme.css');?>" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <table border="1" class="table table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Alamat</th>
                        <th>Telpon</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($pel as $dt) {
                        ?>
                        <tr>
                            <td><?php echo $dt['id'] ?></td>
                            <td><?php echo $dt['nama'] ?></td>
                            <td><?php echo $dt['gender'] ?></td>
                            <td><?php echo $dt['alamat'] ?></td>
                            <td><?php echo $dt['telepon'] ?></td>
                            <td><?php echo $dt['email'] ?></td>
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

