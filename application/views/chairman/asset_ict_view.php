<style>
  .default-dashboard2 .last-orders-table thead tr
    {
      border-bottom:1px solid #f5f5f5
    }
  .default-dashboard2 .last-orders-table thead tr:first-child th
    {
      padding-left:0!important
    }
  .default-dashboard2 .last-orders-table thead tr:last-child th
    {
    padding-right:0!important
    }
  .default-dashboard2 .last-orders-table thead tr th
    {color:#848789;padding:0 5px 11px}
    .default-dashboard2 .last-orders-table thead tr th:first-child{padding-left:0}
    .default-dashboard2 .last-orders-table thead tr th:first-child:after{display:none}
    .default-dashboard2 .last-orders-table tbody tr:last-child td{border-bottom:none!important;padding-right:0!important}
    .default-dashboard2 .last-orders-table tbody tr:hover td h4{color:var(--theme-default)}
    .default-dashboard2 .last-orders-table tbody tr:last-child{border-bottom:none}
    .default-dashboard2 .last-orders-table tbody tr:last-child td{padding-bottom:0}
    .default-dashboard2 .last-orders-table tbody tr td{padding:18px 5px}
    .default-dashboard2 .last-orders-table tbody tr td:first-child{padding-left:0!important}
    .default-dashboard2 .last-orders-table tbody tr td:last-child{padding-right:0!important}
    .default-dashboard2 .last-orders-table tbody tr td .user-data{align-items:center;display:flex;gap:9px}
    .default-dashboard2 .last-orders-table tbody tr td .user-data img{border-radius:100%;height:42px;width:42px}
    .default-dashboard2 .last-orders-table tbody tr td .user-data span{color:#848789}
    .default-dashboard2 .last-orders-table tbody tr td a h4{font-size:14px;font-weight:600}
    .default-dashboard2 .last-orders-table tbody tr td .drop-menu{background-color:#f5f5f5;border-radius:0;color:#1f2f3e;line-height:.7;padding:3px 5px}
    .default-dashboard2 .last-orders-table tbody tr td:nth-child(2){color:#848789}
</style>

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-xl-4 col-sm-7 box-col-3">
        <h3>ICT - Asset</h3>
      </div>
      <div class="col-5 d-none d-xl-block">
      </div>
      <div class="col-xl-3 col-sm-5 box-col-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">ICT</li>
          <li class="breadcrumb-item active">Asset</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid default-dashboard2">
  <div class="row">              
    <!-- Complex headers (rowspan and colspan) Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header pb-0 card-no-border">
          <div class="header-top">
            <h4>Daftar Aset ICT</h4>
            <div class="dropdown icon-dropdown setting-menu">
              <button class="btn dropdown-toggle" id="userdropdown60" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg>
                  <use href="../assets/svg/icon-sprite.svg#setting"> </use>
                </svg>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown60"><a class="dropdown-item" href="#">Weekly </a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive"> 
            <table class="last-orders-table table" id="last-orders">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th style="width:10%">Kategori</th>
                  <th>Pengguna</th>
                  <th>Test</th> <!-- Kolom yg Hilang -->
                  <th>Spesifikasi</th>
                  <th>Dokumen </th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($row as $dataAsset) 
                  
                {?>
                  <tr> 
                    <td><?= $no++ ?></td>
                    <td>
                      <div class="user-data">
                        
                        <div> <a href="javascript:void(0)"> 
                            <h4><?= $dataAsset['kode_aset']?> <span><?php if($dataAsset['status_aset'] == "Aktif"){
                              echo "<span class='badge rounded-pill badge-success text-white'>Aktif</span>";
                            }else{
                              echo"<span class='badge rounded-pill badge-danger text-white'>Non-Aktif</span>";
                            } ?></span></h4></a><span><?= $dataAsset['nama_barang'] . ' - ' . $dataAsset['sn']?></span>
                            <span>
                            

                            </span>
                        </div>
                      </div>
                    </td>
                    <td><a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="<?= $dataAsset['nama_kategori']?>"><?= $dataAsset['kode_kategori']?></a></td>
                    <td>
                      <div> 
                        <h5><?= $dataAsset['nama_user']?></h5>
                        <span><?= $dataAsset['nama_lokasi']?></span>
                      </div>  
                    </td>
                    <td></td>
                    <td class="text-muted"><?= $dataAsset['spesifikasi'] ?></td>
                    <!--test untuk download serah terima -->
                    <td>
                      <a href="javascript:void(0)" class="download-form"
                        data-nama="<?= $dataAsset['nama_user'] ?>"
                        data-jabatan=""
                        data-unit="<?= $dataAsset['nama_lokasi'] ?>"
                        data-nip="23082102"
                        data-jenis="<?= $dataAsset['nama_barang'] ?>"
                        data-id="<?= $dataAsset['kode_aset'] ?>"
                        data-spesifikasi="<?= $dataAsset['spesifikasi'] ?>"
                        data-serial="<?= $dataAsset['sn'] ?>">
                        <i data-feather="download-cloud"></i>
                      </a>
                    </td>                 
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Complex headers (rowspan and colspan) Ends-->
  </div>
</div>
<!-- Container-fluid Ends-->
<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.download-form').forEach(function (el) {
    el.addEventListener('click', function () {
      const d = el.dataset;
      const today = new Date().toLocaleDateString('id-ID');

      const win = window.open('', '_blank');
      win.document.write(`
        <html>
        <head>
          <title>Formulir Serah Terima Aset</title>
          <style>
            body {
              font-family: Arial, sans-serif;
              margin: 50px;
              font-size: 14px;
              color: #000;
            }
            .header {
              text-align: center;
              margin-bottom: 10px;
            }
            .header h2 {
              margin: 0;
            }
            .header .subtitle {
              margin-top: 4px;
              font-size: 13px;
            }
            hr {
              border: 1px solid #444;
              margin-top: 10px;
              margin-bottom: 20px;
            }
            table.asset-detail {
              width: 100%;
              border-collapse: collapse;
              margin-bottom: 20px;
              font-size: 14px;
            }
            table.asset-detail td {
              padding: 6px 10px;
            }
            .label {
              width: 30%;
              font-weight: bold;
              vertical-align: top;
            }
            .section-title {
              font-weight: bold;
              margin: 15px 0 5px;
            }
            ul {
              padding-left: 20px;
              margin-top: 5px;
            }
            .signatures {
              width: 100%;
              text-align: center;
              margin-top: 60px;
            }
            .signatures td {
              vertical-align: bottom;
              height: 100px;
            }
            .signatures .ttd-title {
              font-weight: bold;
              margin-bottom: 30px;
            }
            .signature-line {
              border-top: 1px solid #000;
              width: 180px;
              margin: 0 auto 5px;
            }
            .signature-block {
              margin-top: 60px;
              text-align: center;
            }
            .footer {
              font-size: 10px;
              text-align: center;
              margin-top: 60px;
            }
          </style>
        </head>
        <body>
          <div class="header">
            <h2>Formulir Serah Terima Aset</h2>
            <div class="subtitle">Tanggal: ${today} | Nomor Formulir: ${d.id}</div>
          </div>
          <hr>

          <table class="asset-detail">
            <tr><td class="label">Kode Aset</td><td>: ${d.id}</td></tr>
            <tr><td class="label">Nama Barang</td><td>: ${d.jenis}</td></tr>
            <tr><td class="label">Serial Number / Mac Address</td><td>: ${d.serial}</td></tr>
            <tr><td class="label">Kategori Barang</td><td>: Smartphone</td></tr>
            <tr><td class="label">Spesifikasi</td><td>: ${d.spesifikasi}</td></tr>
            <tr><td class="label">Lokasi Penempatan Barang</td><td>: ${d.unit}</td></tr>
          </table>

          <div class="section-title">Instruksi Penyerahan:</div>
          <ul>
            <li>Penyerahan Asset ICT harus berdasarkan Asset Request pada ICT Helpdesk, atau instruksi dari department HRD untuk kebutuhan karyawan baru atau serah-terima jabatan</li>
          </ul>

          <div class="section-title">Instruksi Pengembalian:</div>
          <ul>
            <li>Penerima bertanggung jawab atas kehilangan Asset ICT selama masa bekerja.</li>
            <li>Jika terjadi kehilangan, penerima wajib mengganti Asset ICT tersebut sesuai dengan spesifikasi data pada formulir serah terima.</li>
          </ul>

          <table class="signatures">
            <tr>
              <td>
                <div class="ttd-title">Penerima</div>
                <div class="signature-line"></div>
                ${d.nama}<br>${d.jabatan}
              </td>
              <td>
                <div class="ttd-title">Dibuat Oleh</div>
                <div class="signature-line"></div>
                Alvin Debiyan Melstin<br>IT Staff Technician
              </td>
            </tr>
          </table>

          <div class="signature-block">
            <div class="ttd-title">Mengetahui</div>
            <div class="signature-line"></div>
            Tofan Wahyu Bakti<br>IT Support Manager
          </div>

        
        </body>
       
        </html>
      `);
      win.document.close();
    });
  });
});
</script>
