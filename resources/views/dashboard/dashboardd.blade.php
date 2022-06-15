
@extends('layoutd.main')

@section('dashboard-container')

@auth
<h1 class="text-white">Hi, Selamat Datang, {{ auth()->user()->name }}</h1>
@endauth
<h3 class="text-white container mt-4">Transaksi</h3>
<div class="row mt-4">
  <div class="card border-success mb-3" style="max-width: 18rem; left: 2rem;">
    <div class="card-body text-success">
      <h2 class="card-title text-center">Total Order</h2>
      <div class="card-footer bg-transparent border-success"></div>
        
        <h1 class="text-center mt-2"> {{ $cols->count() }}</h5>
        
    </div>
  </div>
  <div class="card border-success mb-3" style="max-width: 18rem; left:4rem; ">
    <div class="card-body text-success">
      <h2 class="card-title text-center">Total Transaksi</h2>
      <div class="card-footer bg-transparent border-success"></div>
        
      <h1 class="text-center mt-2"> {{ $cols->count() }}</h5>
    </div>
  </div>
  <div class="card border-success mb-3" style="max-width: 18rem; left:6rem; ">
    <div class="card-body text-success">
      <h2 class="card-title text-center">Paid Ratio</h2>
      <div class="card-footer bg-transparent border-success"></div>
      @foreach ($rows as $row)
      <h1 class="text-center mt-2"> {{$row->paidratio}}%</h5>
        @endforeach
    </div>
  </div>
</div>



    <div class="container text-white">
        <div class="row justify-content-between">
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h3>Revenue</h3>
          <div class="row">
            <div class="#barchart">
              <form>
            <div class="col-lg-30">
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

        </div>
        <div class="col-md-6 mt-5">
          <div class="card border-success mb-3" style="width: 18rem;  height: 7rem; ">
            <div class="card-body text-success">
              <h5 class="card-title text-center">Rp Discount Claimed</h5>
              <div class="card-footer bg-transparent border-success"></div>
            </div>

          </div>
        <div class="col-md-6 mt-2">
          <div class="card border-success mb-3" style="width: 18rem;  height: 7rem; ">
            <div class="card-body text-success">
              <h5 class="card-title text-center">Rp Bump Revenue</h5>
              <div class="card-footer bg-transparent border-success"></div>
            </div>

          </div>
        <div class="col-md-6 mt-2">
          <div class="card border-success mb-3" style="width: 18rem;  height: 7rem; ">
            <div class="card-body text-success">
              <h5 class="card-title text-center">Rp Gros Revenue</h5>
              <div class="card-footer bg-transparent border-success"></div>

              @foreach ($cols as $col)
              <h3 class="text-center "> Rp{{$col->grossrevenue}}</h3>
               @endforeach
            </div>
          </div>
      
      
        </div>

        <div class="col-md-6 mt-5">
          <div class="card border-success mb-3" style="width: 18rem;  height: 7rem; ">
            <div class="card-body text-success">
              <h5 class="card-title text-center">Rp Net Revenue</h5>
              <div class="card-footer bg-transparent border-success"></div>
              @foreach ($rows as $row)
             <h3 class="text-center "> Rp{{$row->netrevenue}}</h3>
              @endforeach
            </div>
          </div>
      
      
        </div>
      </div>
    </div>




<div class="card-body p-0 table-responsive mt-3">
  <h3 class="text-white container">Products</h3>
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

