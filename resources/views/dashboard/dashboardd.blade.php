
@extends('layoutd.main')

@section('dashboard-container')
<h1>Hi, Megi Saputra</h1>
<main class="form-home">
  <form class="mt-5">
    <div class="container text-white">
        <div class="row justify-content-between">
        <div class="col-md-3 d-flex flex-column justify-content-center">
          <h2>Tingkatkan</h2> 
          <h2>Penjualan &</h2>
          <h2>Efektifitas Bisnis</h2>
          <div class="d-grid gap-2 d-md-block">
            <a href="/daftar">  <button class="btn btn-secondary mt-4" type="button">Daftar Sekarang</button></a>
          </div>
        </div>
        <div class="col-md-8">
          <img src="./image/a.jpg"class="img-fluid" alt="Agung Prasetyo"width="1000">
        </div>
      </div>
    </div>
  </form>
</main>

<div  class="text-center mt-5 text-white">
  <h2>Aplikasi ini adakahberbasis Web yang memudahkan Anda Untuk melakukan transaksi jual beli dengan praktis</h2>
  <h1 class="mt-5">Proses Penjualan Dengan Satu Akun</h1>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>


@endsection

