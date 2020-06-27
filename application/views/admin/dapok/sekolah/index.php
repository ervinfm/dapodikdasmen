    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Pokok Sekolah </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove"> </button>
            </div>
        </div>
        <div class="card-body">
            <div class="col-lg-12">
                <a href="" class="btn btn-success btn-sm m-2 float-right"> Tambah </a>
                <div class="table-responsive ">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2" width="20%">Wilayah</th>
                                <th colspan="2">SD</th>
                                <th colspan="2">SMP</th>
                                <th colspan="2">SMA</th>
                                <th colspan="2">SMK</th>
                                <th colspan="2">SLB</th>
                                <th rowspan="2" width="5%">Del</th>
                            </tr>
                            <tr>
                                <th>N</th>
                                <th>S</th>
                                <th>N</th>
                                <th>S</th>
                                <th>N</th>
                                <th>S</th>
                                <th>N</th>
                                <th>S</th>
                                <th>N</th>
                                <th>S</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($row->result() as $key => $data) { ?>
                                        <tr>
                                            <td><?=$data->nama_provinsi?></td>
                                            <td><input type="text" name="" class="form-control"></td>
                                            <td><input type="text" name="" class="form-control"></td>
                                            <td><input type="text" name="" class="form-control"></td>
                                            <td><input type="text" name="" class="form-control"></td>
                                            <td><input type="text" name="" class="form-control"></td>
                                            <td><input type="text" name="" class="form-control"></td>
                                            <td><input type="text" name="" class="form-control"></td>
                                            <td><input type="text" name="" class="form-control"></td>
                                            <td><input type="text" name="" class="form-control"></td>
                                            <td><input type="text" name="" class="form-control"></td>
                                            <td>
                                                <a href="" style="color: black;"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    