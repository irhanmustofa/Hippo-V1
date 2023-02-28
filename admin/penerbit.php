<?php include "header.php"; ?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Penerbit</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Simple Datatable
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover" id="table1">
                        <thead>
                            <tr>
                                <th>Nama Pendana</th>
                                <th>Tujuan Pendanaan</th>
                                <th>Jumlah Pendanaan</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dale</td>
                                <td>Henri Herdiyanto</td>
                                <td>Rp. 2.000.000</td>
                                <td class="text-center">
                                    <span class="badge bg-success">Accepted</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-warning">Riview</span>
                                    <span class="badge bg-danger">Delete</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Nathaniel</td>
                                <td>Muhammad Irfan Rasnansyah</td>
                                <td>Rp. 2.000.000</td>
                                <td class="text-center">
                                    <span class="badge bg-danger">Rejected </span>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-warning">Riview</span>
                                    <span class="badge bg-danger">Delete</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Emmanuel</td>
                                <td>Irhan Mustafa</td>
                                <td>Rp. 2.000.000</td>
                                <td class="text-center">
                                    <span class="badge bg-success">Accepted</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-warning">Riview</span>
                                    <span class="badge bg-danger">Delete</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
    <?php include "footer.php"; ?>