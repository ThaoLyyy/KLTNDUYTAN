<div class="header">
  <div class="header-left">
      <div class="menu-icon dw dw-menu"></div>
  </div>
  <div class="header-right">
      <div class="user-info-dropdown">
          <div class="dropdown">
              <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
          <span class="user-icon">
                          <img src="{{ asset('admin/vendors/images/avatar-user.png') }}" alt="">
          </span>
                  <span class="user-name">{{ auth()->user()->name }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                  <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="dw dw-logout"></i> Đăng xuất</a>
              </div>
          </div>
      </div>
  </div>
</div>
