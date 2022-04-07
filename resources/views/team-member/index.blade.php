@extends('layoutd.main')
@section('dashboard-container')
<body>
    <div class="container text-white mt-5">
        <div class="col-md-15 d-flex flex-column justify-content-center">
        <h2>TEAM MEMBERS </h2>
        <h4>You Can Add Team Members </h4>
    </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">  
           <a href="addmember"><button type="button" class="btn btn-outline-warning btn-lg"> Member Rotators</button></a>
           <a href="addmember"><button type="button" class="btn btn-outline-warning btn-lg">View Team Performance</button></a>
           <a href="addmember"><button type="button" class="btn btn-outline-warning btn-lg">Add New Member</button></a>
          </div>
        </div>
   

            <form class="d-flex mt-5">
                <input  type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
       
    
    
   
      
    
    <main class="form-table">
        <form>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">.</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Role</th>
            <th scope="col">Creat At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2"></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </form>
</main>
</body>
@endsection