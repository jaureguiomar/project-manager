<div class="d-flex align-items-center">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="d-block d-lg-none ml-2">
      <div class="dropdown">
         <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img alt="Image" src="assets/img/avatar-male-4.jpg" class="avatar" />
         </a>
         <div class="dropdown-menu dropdown-menu-right">
            <a href="{{ route('user:index') }}" class="dropdown-item">Profile</a>
            <a href="{{ route('settings:index') }}" class="dropdown-item">Account Settings</a>
            <a href="#" class="dropdown-item">Log Out</a>
         </div>
      </div>
   </div>
</div>
