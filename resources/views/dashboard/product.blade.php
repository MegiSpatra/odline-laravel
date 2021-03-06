@extends('layoutd.main')
@section('dashboard-container')

<body>
<h2 class="container text-white">PRODUCT</h2>
<div class="row mt-3">
    <div class="card border-success mb-3" style="max-width: 18rem; left: 1rem;">
      <div class="card-body text-success">
        <h5 class="card-title">gatau</h5>
        <p class="card-text"></p>
      </div>
      <div class="card-footer bg-transparent border-success"></div>
    </div>
    <div class="card border-success mb-3" style="max-width: 18rem; left: 3rem;">
      <div class="card-body text-success">
        <h5 class="card-title">gatau</h5>
        <p class="card-text"></p>
      </div>
      <div class="card-footer bg-transparent border-success"></div>
    </div>
    <div class="card border-success mb-3" style="max-width: 18rem; left: 6rem;">
      <div class="card-body text-success">
        <h5 class="card-title">gatau</h5>
        <p class="card-text"></p>
      </div>
      <div class="card-footer bg-transparent border-success"></div>
    </div>
   
  </div>
  <div>
    <div class="btn-group mt-3">
      <a href="addproduct"><button type="button" class="btn btn-outline-warning btn-sm">Add product</button></a>
    </div>
    <div class="btn-group mt-3">
      <button class="btn btn-outline-warning btn-sm " type="button"  data-bs-toggle="dropdown" aria-expanded="false">
        Delete
      </button>
    </div>
    <div class="btn-group mt-3">
      <button class="btn btn-outline-warning btn-sm dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
        actions
      </button>
      <ul class="dropdown-menu">
        <li class="container"></li>
      </ul>
    </div>
    <div class="btn-group mt-3">
      <button class="btn btn-outline-warning btn-sm dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
        Export
      </button>
      <ul class="dropdown-menu">
        <li class="container"></li>
      </ul>
    </div>
    <div class="btn-group mt-3">
      <button class="btn btn-outline-warning btn-sm " type="button"  data-bs-toggle="dropdown" aria-expanded="false">
        Import
      </button>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
      <a href="#"><button type="button" class="btn btn-outline-warning btn-sm">Filter</button></a>
      <input type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning btn-sm" type="submit">Search</button>
  
  </div>
  </div>


  <div class="card-body p-0 table-responsive">
    <table class="table table-bordered table-striped table-dark table-hover mb-0">
        <thead>
            <tr>
                <th>no</th>
                <th>gambar</th>
                <th>name</th>
                <th>price</th>
                <th>COGS</th>
                <th>inventory</th>
                <th>order</th>
                <th>paidratio</th>
                <th>qtysold</th>
                <th>netrevenue</th>
            </tr>
        </thead>
        <?php $no = 1; ?>
        
        @foreach ($rows as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->gambar }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->price }}</td>
                <td>{{ $row->COGS }}</td>
                <td>{{ $row->inventory }}</td>
                <td>{{ $row->order }}</td>
                <td>{{ $row->paidratio }}</td>
                <td>{{ $row->qtysold }}</td>
                <td>{{ $row->netrevenue }}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>

@endsection