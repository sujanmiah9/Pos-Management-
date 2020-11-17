<ul class="sidebar navbar-nav">
    <li class="nav-item active">
    <a class="nav-link" href="{{url('/')}}">
        <i class="fa fa-fw fa-home"></i>
        <span>Home</span>
        </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('retail.Dashboard')}}">
        <i class="fa fa-fw fa-line-chart"></i>
        <span>Retail Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-fw fa-folder"></i>
        <span>
            Reports
            <i class="float-right fa fa-angle-down"></i>
        </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="{{route('sales.report')}}"> <i class="fa fa-fw fa-bar-chart"></i> Sales Reports</a>
        <a class="dropdown-item" href="{{route('inventory.report')}}"> <i class="fa fa-fw fa-tags"></i> Inventory Reports</a>
        <a class="dropdown-item" href="{{route('payment.report')}}"> <i class="fa fa-fw fa-money"></i> Payment Reports</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-fw fa-folder"></i>
        <span>
            Sales
            <i class="float-right fa fa-angle-down"></i>
        </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="{{route('check.sale')}}"> <i class="fa fa-fw fa-table"></i> Check Sales</a>
        <a class="dropdown-item" href="" data-toggle="modal" data-target="#addSaleModal"> <i class="fa fa-fw fa-plus"></i> Record New Sale</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-fw fa-folder"></i>
        <span>
        Inventory
            <i class="float-right fa fa-angle-down"></i>
        </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductModal"> <i class="fa fa-plus"></i> Add New Product</a>
        <a class="dropdown-item" href="{{route('view.product')}}"> <i class="fa fa-tags"></i> All Products</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-fw fa-folder"></i>
        <span>
        Product Types
            <i class="float-right fa fa-angle-down"></i>
        </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductTypeModal"> <i class="fa fa-plus"></i> Add New Type</a>
        <a class="dropdown-item" href="{{route('view.producttype')}}"> <i class="fa fa-tags"></i> All Product Types</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-fw fa-folder"></i>
        <span>
        Dealers
            <i class="float-right fa fa-angle-down"></i>
        </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductVendorModal"> <i class="fa fa-user"></i> Add New Vendor</a>
        <a class="dropdown-item" href="{{route('view.vendor')}}"> <i class="fa fa-fw fa-users"></i> All Vendors</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-fw fa-folder"></i>
        <span>
        Brands
            <i class="float-right fa fa-angle-down"></i>
        </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductBrandModal"> <i class="fa fa-industry"></i> Add New Brand</a>
        <a class="dropdown-item" href="{{route('view.brand')}}"> <i class="fa fa-fw fa-industry"></i> All Brands</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('history')}}">
        <i class="fa fa-fw fa-calendar"></i>
        <span>History</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('backup.record')}}">
        <i class="fa fa-fw fa-external-link"></i>
        <span>Export Record</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('general.setting')}}">
        <i class="fa fa-fw fa-cogs"></i>
        <span>General Settings</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('help')}}">
        <i class="fa fa-fw fa-life-ring"></i>
        <span>Help</span></a>
    </li>
    </ul>