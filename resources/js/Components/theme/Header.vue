<template>
  <header>
    <div class="topbar d-flex align-items-center">
      <nav class="navbar navbar-expand">
        <div class="mobile-toggle-menu"><i class="bx bx-menu"></i></div>
        <div class="search-bar flex-grow-1">
          <div class="position-relative search-bar-box">
            <input
              type="text"
              class="form-control search-control"
              placeholder="Type to search..."
            />
            <span
              class="position-absolute top-50 search-show translate-middle-y"
              ><i class="bx bx-search"></i
            ></span>
            <span
              class="position-absolute top-50 search-close translate-middle-y"
              ><i class="bx bx-x"></i
            ></span>
          </div>
        </div>
        <div class="top-menu ms-auto">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item mobile-search-icon">
              <a class="nav-link" href="#"> <i class="bx bx-search"></i> </a>
            </li>
            <li class="nav-item dropdown dropdown-large">
              <a
                class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bx bx-category"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <div class="p-3 row row-cols-3 g-3">
                  <div class="text-center col">
                    <div class="mx-auto text-white app-box bg-gradient-cosmic">
                      <i class="bx bx-group"></i>
                    </div>
                    <div class="app-title">Teams</div>
                  </div>
                  <div class="text-center col">
                    <div class="mx-auto text-white app-box bg-gradient-burning">
                      <i class="bx bx-atom"></i>
                    </div>
                    <div class="app-title">Projects</div>
                  </div>
                  <div class="text-center col">
                    <div class="mx-auto text-white app-box bg-gradient-lush">
                      <i class="bx bx-shield"></i>
                    </div>
                    <div class="app-title">Tasks</div>
                  </div>
                  <div class="text-center col">
                    <div class="mx-auto app-box bg-gradient-kyoto text-dark">
                      <i class="bx bx-notification"></i>
                    </div>
                    <div class="app-title">Feeds</div>
                  </div>
                  <div class="text-center col">
                    <div class="mx-auto app-box bg-gradient-blues text-dark">
                      <i class="bx bx-file"></i>
                    </div>
                    <div class="app-title">Files</div>
                  </div>
                  <div class="text-center col">
                    <div class="mx-auto text-white app-box bg-gradient-moonlit">
                      <i class="bx bx-filter-alt"></i>
                    </div>
                    <div class="app-title">Alerts</div>
                  </div>
                </div>
              </div>
            </li>
            
          </ul>
        </div>
        <div class="user-box dropdown">
          <a
            class=" d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <img
            :src="$page.props.user.profile_photo_url"
              class="user-img"
              alt="user avatar"
            />
            <div class="user-info ps-3">
              <p class="mb-0 user-name">Pauline Seitz</p>
              <p class="mb-0 designattion">Web Designer</p>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="javascript:;"
                ><i class="bx bx-user"></i><span>Profile</span></a
              >
            </li>
            <li>
              <a class="dropdown-item" href="javascript:;"
                ><i class="bx bx-cog"></i><span>Settings</span></a
              >
            </li>
            <li>
              <a class="dropdown-item" href="javascript:;"
                ><i class="bx bx-home-circle"></i><span>Dashboard</span></a
              >
            </li>
            <li>
              <a class="dropdown-item" href="javascript:;"
                ><i class="bx bx-dollar-circle"></i><span>Earnings</span></a
              >
            </li>
            <li>
              <a class="dropdown-item" href="javascript:;"
                ><i class="bx bx-download"></i><span>Downloads</span></a
              >
            </li>
            <li>
              <div class="mb-0 dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:;"
                ><i class="bx bx-log-out-circle"></i><span>Logout</span></a
              >
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
</template>

<script>
export default {};
</script>
