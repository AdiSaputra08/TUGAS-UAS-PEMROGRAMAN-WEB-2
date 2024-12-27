<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">DATA GURU SMK NURUL FALAH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./">BERANDA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/jabatan">JABATAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pegawai">BIODATA</a>
        </li>
        <?php if(session()->get('login')): ?>
          <li class="nav-item">
          <a class="nav-link" href="/logout">LOGOUT</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>