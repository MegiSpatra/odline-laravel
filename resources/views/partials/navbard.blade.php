<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/utama">BIKA | {{ $title }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="row">
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "orderonline.dashboard") ? 'active' : ''}} " aria-current="page" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "orderonline.product") ? 'active' : ''}} " href="/product">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "orderonline.orders") ? 'active' : ''}} " href="/orders">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "orderonline.logistic") ? 'active' : ''}} " href="/logistic">Logistic</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link {{ ($active === "chanel") ? 'active' : ''}}  dropdown-toggle" href="/chanel" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Channels
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Funnels</a></li>
            <li><a class="dropdown-item" href="#">Storefont</a></li>
            <li><a class="dropdown-item" href="#">Resellers</a></li>
            <li><a class="dropdown-item" href="#">Tokopedia</a></li>
            <li><a class="dropdown-item" href="#">Shopee</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link {{ ($active === "others") ? 'active' : ''}}  dropdown-toggle" href="/others" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            others
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="./contact">Contact</a></li>
            <li><a class="dropdown-item" href="#">Coupon</a></li>
            <li><a class="dropdown-item" href="#">Expenses</a></li>
            <li><a class="dropdown-item" href="#">Inventory</a></li>
            <li><a class="dropdown-item" href="#">Oacademy</a></li>
              <li><a class="dropdown-item" href="#">Payments</a></li>
              <li><a class="dropdown-item" href="#">Reports</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/team-members">Team Members</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "orderonline.addproduk") ? 'active' : ''}} " href="/produk"><button type="button" class="btn btn-warning btn-sm">Add Product</button></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link {{ ($active === "chanel") ? 'active' : ''}}  dropdown-toggle" href="/chanel" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Credits</a></li>
            <li><a class="dropdown-item" href="#">Billing</a></li>
            <li><a class="dropdown-item" href="#">Apps</a></li>
            <li><a class="dropdown-item" href="/fitur">Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>