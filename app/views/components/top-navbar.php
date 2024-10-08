<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="">
      <img src="logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      <span>User Authentication</span>
    </a>

    <!-- Navbar Toggler (for mobile view) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav nav nav-underline">
        <li class="nav-item">
          <a class="nav-link <?= $data['current_page'] == 'Login' ? 'active' : '' ?>" href="login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $data['current_page'] == 'Contact' ? 'active' : '' ?>" aria-current="page" href="contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>