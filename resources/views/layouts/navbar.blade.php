<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
<a class="navbar-brand mr-1" href="{{url('/')}}">Pos System</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fa fa-bars"></i>
    </button>
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
        <button class="btn btn-primary" type="button">
            <i class="fa fa-search"></i>
        </button>
        </div>
    </div>
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-plus fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
        <a class="dropdown-item" href="{{route('create.sale')}}"> <i class="fa fa-money"></i> New Sale</a>
        <a class="dropdown-item" href="{{route('create.product')}}"> <i class="fa fa-tag"></i> New Product</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{route('create.productType')}}""> <i class="fa fa-tags"></i> New Product Type</a>
        <a class="dropdown-item" href="{{route('create.vendor')}}"> <i class="fa fa-user"></i> New Product Vendor</a>
        <a class="dropdown-item" href="{{route('create.brand')}}"> <i class="fa fa-industry"></i> New Product Brand</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="" data-toggle="modal" data-target="#addExpenseAccountModal"> <i class="fa fa-dollar"></i> New Expense Account</a>
        </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-flash fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
        <a class="dropdown-item" href="{{route('view.product')}}"> <i class="fa fa-tag"></i> All Products</a>
        <a class="dropdown-item" href="{{route('view.producttype')}}"> <i class="fa fa-tags"></i> Product Types</a>
        <a class="dropdown-item" href="{{route('view.vendor')}}"> <i class="fa fa-user"></i> Product Vendors</a>
        <a class="dropdown-item" href="{{route('view.brand')}}"> <i class="fa fa-industry"></i> Product Brands</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{route('revenue')}}"> <i class="fa fa-money"></i> Revenue</a>
        <a class="dropdown-item" href="{{route('improvement')}}"> <i class="fa fa-rocket"></i> Improvements</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{route('accounts')}}"> <i class="fa fa-dollar"></i> Accounts</a>
        </div>
    </li>
    <li class="nav-item dropdown no-arrow ml-3">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="badge badge-warning">9+</span>
        <i class="fa fa-fw fa-bell"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
        <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> You've few blocked products</a>
        <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
        <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
        <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="notifications.html">See more notifications</a>
        </div>
    </li>
    <li class="nav-item dropdown no-arrow ml-3">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <div class="dropdown-header">Rao Ahmed</div>
        <a class="dropdown-item" href="{{route('profile')}}"> <i class="fa fa-user"></i> Profile</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{route('change.pass')}}"> <i class="fa fa-cog"></i> Change password</a>
        <a class="dropdown-item" href="history.html"> <i class="fa fa-line-chart"></i> Activity Log</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fa fa-power-off"></i> Logout</a>
        </div>
    </li>
    </ul>
</nav>