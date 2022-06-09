
@extends('layoutd.main')

@section('dashboard-container')

  
@auth
<h1>Hi, Selamat Datang, {{ auth()->user()->name }}</h1>
@endauth
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

<h1>Revenue</h1>

<div class="row">
  <div class="#barchart">
    <form>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header"></div>
      <div class="card-body">
        <div id="barchart"></div>
      </div>
    </div>
  </div>
</form>
</div>
</div>



<div class="row mt-5">
  <div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-body text-success">
      <h5 class="card-title">Success card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
  </div>
  <div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-body text-success">
      <h5 class="card-title">Success card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
  </div>
  <div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-body text-success">
      <h5 class="card-title">Success card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
  </div>  
</div>
<div class="row mt-5">
  <div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-body text-success">
      <h5 class="card-title">Success card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
  </div>
  <div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-body text-success">
      <h5 class="card-title">Success card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
  </div>
  <div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-body text-success">
      <h5 class="card-title">Success card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
  </div>  
</div>

<div class="card-body p-0 table-responsive">
  <table class="table table-bordered table-striped table-dark table-hover mb-0">
      <?php $no = 1; ?>
      
      @foreach ($rows as $row)
          <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $row->name }}</td>
              <td>
              <ul>{{ $row->price }}</ul>
              <ul>price</ul>
              </td>
              <td><ul>{{ $row->order }}</ul>
              <ul>Order</ul>
              </td>
              <td><ul>{{ $row->inventory }}</ul>
              <ul>Inventory</ul>
              </td>
              <td><ul>{{ $row->paidratio }}</ul>
              <ul>Paid Ratio</ul>
              </td>
              <td><ul>{{ $row->netrevenue }}</ul>
              <ul>Net Revenue</ul>
              </td>
          </tr>
      @endforeach
  </table>
</div>
@endsection

