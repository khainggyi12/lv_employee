<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
  
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          @can('isAdmin')

          <li><a href="{{route('branch.index')}}" class="nav-link px-2 text-white">Branches</a></li>
          <li><a href="{{route('employee.index')}}" class="nav-link px-2 text-white">Employee</a></li>

          @elsecan('isManager')
          <li><a href="{{route('branch.index')}}" class="nav-link px-2 text-white">Branches</a></li>
          <li><a href="{{route('employee.index')}}" class="nav-link px-2 text-white">Employee</a></li>

          @elsecan('isBranchManager')
          <li><a href="{{route('employee.index')}}" class="nav-link px-2 text-white">Employee</a></li>
          @endcan
        </ul>
  
       

        @auth
          <p class="m-2">{{auth()->user()->name}}</p>
          <a href="{{route('logout')}}" class="btn bnt-outline btn-light me-2">Logout</a>
        @endauth

        @guest
          <a href="{{route('login.show')}}" class="btn btn-light btn-outline me-2">Login</a>
          <a href="{{route('register.show')}}" class="btn btn-light btn-outline me-2">Sing up</a>

        @endguest
  
        {{-- @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{route('logout.perform')}}" class="btn btn-outline-light me-2">Logout</a>
          </div>
        @endauth
  
        @guest
          <div class="text-end">
            <a href="{{route('login.show')}}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{route('register.perform')}}" class="btn btn-outline-light me-2">Sign-up</a>
          </div>    
        @endguest --}}
            
      </div>
    </div>
</header>
  
  
  