<style>
    
</style>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-xl-4 col-sm-7 box-col-3">
                <h3>Posting Berita</h3>
            </div>
            <div class="col-5 d-none d-xl-block">
                <!-- Page Sub Header Start-->
                <div class="left-header main-sub-header p-0">
                
                </div>
                <!-- Page Sub Header end
                -->
            </div>
            <div class="col-xl-3 col-sm-5 box-col-4"> 
                <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="index.html">
                    <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
                    </svg></a></li>
                <li class="breadcrumb-item">Berita </li>
                <li class="breadcrumb-item active">Daftar Berita</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Container-fluid starts-->
<div class="container-fluid default-dashboard">
    <div class="row project-cards">
        <div class="col-md-12 project-list">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 p-0">
                        
                    </div>
                    <div class="col-md-6 p-0">                    
                        <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="<?= site_url('Berita_Backend/berita_baru')?>"> <i data-feather="plus-square"> </i>Buat Berita Baru</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12"> 
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h4>Daftar Berita</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul </th>
                                        <th>Tanggal</th>
                                        <th>Narasumber</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>System Architect</td>
                                        <td>$320,800</td>
                                        <td>Edinburgh</td>
                                        <td><span class="badge rounded-pill badge-success">hired</span></td>
                                        <td class="action justify-content-center"> 
                                            <a class="btn btn-outline-primary m-l-5 " href="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                            <a class="btn btn-outline-primary m-l-5 " href="sample.pdf" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Hapus"><i class="icofont icofont-ui-delete"></i></a>
                                            <a class="btn btn-outline-primary m-l-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Posting"><i class="icofont icofont-paper-plane"></i></a>
                                            <a class="btn btn-outline-primary m-l-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Postpone"><i class="icofont icofont-unlink"></i></a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>