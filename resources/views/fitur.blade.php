@extends('layouts.main')

@section('container')
<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./image/a.jpg" class="d-block w-100 img-fluid" alt="aaa">
          </div>
          <div class="carousel-item">
            <img src="./image/b.png" class="d-block w-100 img-fluid" alt="bbbb">
          </div>
          <div class="carousel-item">
            <img src="./image/c.jpg" class="d-block w-100 img-fluid" alt="cc">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div class="container mt-3 text-white">
      <div class="row justify-content-between">
          <div class="col-md-5 d-flex flex-column justify-content-center">
          <h3>Step Awal Pada Fitur</h3>
          <img src="./image/a.jpg" width="400 ;border-radius: 10px;" alt="pp">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
               Neque officia nostrum veniam consequatur magni quo. <br>
               Similique est nostrum aliquam numquam.</p>
      </div>
    </div>
    <div class="text-end">
    <h3 contextmenu="">Step Kedua Pada Fitur</h3>
    <img src="./image/a.jpg" width="400 ;border-radius: 10px;" alt="pp">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
         Neque officia nostrum veniam consequatur magni quo. <br>
         Similique est nostrum aliquam numquam. </p>
</div>
<div class="row justify-content-between">
    <div class="col-md-5 d-flex flex-column justify-content-center">
    <h3>Step Ketiga Pada Fitur</h3>
    <img src="./image/a.jpg" width="400 ;border-radius: 10px;" alt="pp">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
         Neque officia nostrum veniam consequatur magni quo. <br>
         Similique est nostrum aliquam numquam.</p>
</div>
</div>
<div class="text-end">
<h3>Step Keempat Pada Fitur</h3>
<img src="./image/a.jpg" width="400 ;border-radius: 10px;" alt="pp">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
     Neque officia nostrum veniam consequatur magni quo. <br>
     Similique est nostrum aliquam numquam.<p>
</div>
<div class="row justify-content-between">
<div class="col-md-5 d-flex flex-column justify-content-center">
<h3>Step Ketiga Pada Fitur</h3>
<img src="./image/a.jpg" width="400 ;border-radius: 10px;" alt="pp">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
     Neque officia nostrum veniam consequatur magni quo. <br>
     Similique est nostrum aliquam numquam.</p>
</div>
</div>
  </div>
</body>

<body>
  <main class="form-begron">
    <form>
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>
</form>
</main>
</body>
@endsection