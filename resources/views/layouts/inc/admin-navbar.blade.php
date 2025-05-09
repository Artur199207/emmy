  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                  <span class="text-primary">
                      <img src="{{ asset('assets/images/logo.jpg') }}" alt="" class="imageLogo">
                  </span>
              </span>

          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
          </a>
      </div>

      <div class="menu-divider mt-0"></div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">


          <!-- Layouts -->
          <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div class="text-truncate" data-i18n="Layouts">Layouts</div>
              </a>

              <ul class="menu-sub">
                  <li class="menu-item">
                      <a href="{{ route('banners.create') }}" class="menu-link">
                          <div class="text-truncate" data-i18n="Blank">Ավելացնել Banner</div>
                      </a>
                  </li>
                  <li class="menu-item">
                      <a href="{{ route('banners.index') }}" class="menu-link">
                          <div class="text-truncate" data-i18n="Blank">Դիտել Banner-ները</div>
                      </a>
                  </li>

              </ul>
          </li>


      </ul>
  </aside>
