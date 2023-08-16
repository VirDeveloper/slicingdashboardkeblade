
<nav
class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
data-aos="fade-down"
>
<div class="container-fluid">
    <button
    id="menu-toggle"
    class="btn btn-secondary d-md-none mr-auto mr-2"
    >
    &laquo; Menu
    </button>
    <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarResponsive"
    >
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <!-- desktop burger -->
    <ul class="navbar-nav d-none d-lg-flex ml-auto">
        <li class="nav-item dropdown">
        <a
            href="#"
            class="nav-link"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
        >
            <img
            src="/images/pp.png"
            alt=""
            class="rounded-circle mr-2 profile-picture"
            />MomoDev</a
        >
        <div class="dropdown-menu">
            <a href="/dashboard.html" class="dropdown-item"
            >Dashboard</a
            >
            <a href="/dash-account.html" class="dropdown-item"
            >Settings</a
            >
            <div class="dropdown-divider"></div>
            <a href="/" class="dropdown-item">Logout</a>
        </div>
        </li>
        <li class="nav-item">
        <a href="@" class="nav-link d-inline-block mt-2"
            ><img src="/images/cartisi.svg" alt="" />
            <div class="card-badge">5</div></a
        >
        </li>
    </ul>
    <!-- mobile burger -->
    <ul class="navbar-nav d-block d-lg-none">
        <li class="nav-item">
        <a href="#" class="nav-link"> hi MomoDev</a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link d-inline-block">Keranjang</a>
        </li>
        <div class="dropdown-divider"></div>
        <a href="/" class="dropdown-item">Logout</a>
    </ul>
    </div>
</div>
</nav>