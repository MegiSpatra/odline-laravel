@extends('layoutd.main')
@section('dashboard-container')

<h2 class="container text-white"> ORDERS</h2>
<!-- Large button groups (default and split) -->
<div class="btn-group mt-3">
    <button class="btn btn-outline-warning btn-lg dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
      Select product
    </button>
    <ul class="dropdown-menu">
      <li class="container">Hp Android</li>
    </ul>
  </div>
  <div class="btn-group mt-3">
    <button class="btn btn-outline-warning btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      All Ceheckout Pages
    </button>
    <ul class="dropdown-menu">
      <li class="container">All Ceheckout Pages</li>
    </ul>
  </div>

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

    <div class="btn-group mt-3">
      <a href="inputorder"><button type="button" class="btn btn-outline-warning btn-lg">input order</button></a>
    </div>
  <div class="btn-group mt-3">
    <button class="btn btn-outline-warning btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Exsport
    </button>
    <ul class="dropdown-menu ">
      <div class="container">
      <li>Exsport As CSV</li>
      <li>Exsport Order Id</li>
      <li>Facbook Customer File</li>
      <li>Facbook Customer File with LTV</li>
      <li>Facbook Offline Conversion</li>
    </div>
    </ul>
  </div>
  <div class="btn-group mt-3">
    <button class="btn btn-outline-warning btn-lg " type="button"  data-bs-toggle="dropdown" aria-expanded="false">
      Barcode
    </button>
  </div>
  <div class="btn-group mt-3">
    <button class="btn btn-outline-warning btn-lg " type="button"  data-bs-toggle="dropdown" aria-expanded="false">
      Upload Receipt Number
    </button>
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
    <a href="addmember"><button type="button" class="btn btn-outline-warning btn-sm">Reseller Orders</button></a>
    <a href="addmember"><button type="button" class="btn btn-outline-warning btn-sm">View More Stats</button></a>

</div>

  <div>
    <div class="btn-group mt-3">
      <button class="btn btn-outline-warning btn-sm " type="button"  data-bs-toggle="dropdown" aria-expanded="false">
        Shipping Label
      </button>
    </div>
    <div class="btn-group mt-3">
      <button class="btn btn-outline-warning btn-sm " type="button"  data-bs-toggle="dropdown" aria-expanded="false">
        Add Reminder
      </button>
    </div>
    <div class="btn-group mt-3">
      <button class="btn btn-outline-warning btn-sm dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
        Mark As
      </button>
      <ul class="dropdown-menu">
        <li class="container"></li>
      </ul>
    </div>
    <div class="btn-group mt-3">
      <button class="btn btn-outline-warning btn-sm dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
        Actions
      </button>
      <ul class="dropdown-menu">
        <li class="container"></li>
      </ul>
    </div>
    <div class="btn-group mt-3">
      <button class="btn btn-outline-warning btn-sm " type="button"  data-bs-toggle="dropdown" aria-expanded="false">
        Shipment
      </button>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
      <a href="addmember"><button type="button" class="btn btn-outline-warning btn-sm">Customize Columns</button></a>
      <a href="addmember"><button type="button" class="btn btn-outline-warning btn-sm">Filter</button></a>
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
                <th>city</th>
                <th>status</th>
                <th>paymentstatus</th>
                <th>date</th>
                <th>grossrevenue</th>
                <th>follow_up</th>
                <th>actions</th>
            </tr>
        </thead>
        <?php $no = 1; ?>
        
        @foreach ($cols as $col)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $col->name }}</td>
                <td>{{ $col->city }}</td>
                <td>{{ $col->status }}</td>
                <td>{{ $col->paymentstatus }}</td>
                <td>{{ $col->date }}</td>
                <td>{{ $col->grossrevenue }}</td>
                <td>{{ $col->follow_up }}</td>
                <td>{{ $col->actions }}</td>
            </tr>
        @endforeach
    </table>
</div>
  
@endsection