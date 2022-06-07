@extends('layoutd.main')
@section('dashboard-container')

<body>
<h2 class="container text-white">PRODUCT</h2>
<div class="row mt-3">
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
                <th>name</th>
                <th>price</th>
                <th>COGS</th>
                <th>iventory</th>
                <th>order</th>
                <th>paid</th>
                <th>paidratio</th>
                <th>qtysold</th>
                <th>netrevenue</th>
            </tr>
        </thead>
        <?php $no = 1; ?>
        
        @foreach ($rows as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->price }}</td>
                <td>{{ $row->COGS }}</td>
                <td>{{ $row->iventory }}</td>
                <td>{{ $row->order }}</td>
                <td>{{ $row->paid }}</td>
                <td>{{ $row->paidratio }}</td>
                <td>{{ $row->qtysold }}</td>
                <td>{{ $row->netrevenue }}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>

@endsection