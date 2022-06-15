<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">BIKA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-4">
              <li class="nav-item">
                <a class="nav-link {{ $title === 'fitur' ? 'active' : ''  }}" href="/fitur">Fitur</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === 'harga' ? 'active' : ''  }}" href="/harga">Harga</a>
              </li>          
              <li class="nav-item">
                <a class="nav-link {{ $title === 'about' ? 'active' : ''  }}" href="/about">About</a>
              </li>          
              </ul>
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                   <a class="nav-link {{ $active ==='login' ? 'active' : ''  }}" href="/login">Login</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link {{ $title ==='daftar' ? 'active' : ''  }}" href="/daftar">Daftar Sekarang</a>
                </li>
              </ul>
          </div>
    </div>
  </nav>