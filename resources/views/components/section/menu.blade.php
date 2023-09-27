<!-- Menu -->
<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
        <ul class="menu-inner">
            <!-- Dashboards -->
            <li class="menu-item @if(Route::is('dashboard-sales') || Route::is('dashboard-purchase') || Route::is('dashboard-inventory')) active @endif">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Dashboards">Dashboards</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Route::is('dashboard-sales') ? 'active' : '' }}">
                        <a href="{{ route('dashboard-sales') }}" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                            <div data-i18n="Sales Overview">Sales Overview</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::is('dashboard-purchase') ? 'active' : '' }}">
                        <a href="{{ route('dashboard-purchase') }}" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                            <div data-i18n="Purchase Overview">Purchase Overview</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::is('dashboard-inventory') ? 'active' : '' }}">
                        <a href="{{ route('dashboard-inventory') }}" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-atom-2"></i>
                            <div data-i18n="Inventory Overview">Inventory Overview</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Products -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-package"></i>
                    <div data-i18n="Layouts">Products</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="layouts-without-menu.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-packages"></i>
                            <div data-i18n="All Products">All Products</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="../vertical-menu-template/" class="menu-link" target="_blank">
                            <i class="menu-icon tf-icons ti ti-file-plus"></i>
                            <div data-i18n="Add Product">Add Product</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-fluid.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-category"></i>
                            <div data-i18n="Categories">Categories</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-container.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-album"></i>
                            <div data-i18n="Container">Units</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-blank.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-arrows-maximize"></i>
                            <div data-i18n="Blank">Variants</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-blank.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-shield-check"></i>
                            <div data-i18n="Blank">Warranties</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Sales -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-report-money"></i>
                    <div data-i18n="Apps">Sales</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-email.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-description"></i>
                            <div data-i18n="All Sales">All Sales</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-chat.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-plus"></i>
                            <div data-i18n="Create Sales">Create Sales</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-calendar.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-notes"></i>
                            <div data-i18n="All Draft">All Draft</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-kanban.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-square-plus"></i>
                            <div data-i18n="Create Draft">Create Draft</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-kanban.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-invoice"></i>
                            <div data-i18n="All Quotations">All Quotations</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-kanban.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-plus"></i>
                            <div data-i18n="Create Quotation">Create Quotation</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-kanban.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-truck-delivery"></i>
                            <div data-i18n="Shipments">Shipments</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Purchase -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-file-spreadsheet"></i>

                    <div data-i18n="Pages">Purchase</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-description"></i>
                            <div data-i18n="All Purchases">All Purchases</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-plus"></i>
                            <div data-i18n="Create Purchase">Create Purchase</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-symlink"></i>
                            <div data-i18n="All Purchase Returns">All Purchase Returns</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-shredder"></i>
                            <div data-i18n="All Purchase Returns">Create Purchase Returns</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Warehouse -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-building-warehouse"></i>
                    <div data-i18n="Warehouse">Warehouse</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-receipt"></i>
                            <div data-i18n="Goods Receipt">Goods Receipt</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-package"></i>
                            <div data-i18n="Sales Order Preparation">Sales Order Preparation</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-description"></i>
                            <div data-i18n="All Assets">All Assets</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-plus"></i>
                            <div data-i18n="Create Asset">Create Asset</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-arrows-transfer-down"></i>
                            <div data-i18n="Asset Transfer">Asset Transfer</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Contacts -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-address-book"></i>
                    <div data-i18n="Contacts">Contacts</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="form-validation.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-users-group"></i>
                            <div data-i18n="Suppliers">Suppliers</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="form-validation.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-user-star"></i>
                            <div data-i18n="Customers">Customers</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Approvals -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-browser-check"></i>
                    <div data-i18n="Approvals">Approvals</div>
                </a>
                <ul class="menu-sub">
                    <!-- Tables -->
                    <li class="menu-item">
                        <a href="tables-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-check"></i>
                            <div data-i18n="All Approvals">All Approvals</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Order Validator -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-checkup-list"></i>
                    <div data-i18n="Order Validator">Order Validator</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="maps-leaflet.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-description"></i>
                            <div data-i18n="All Sales Orders">All Sales Orders</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="maps-leaflet.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-barcode"></i>
                            <div data-i18n="Scan QR Code">Scan QR Code</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Settings -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-settings"></i>
                    <div data-i18n="Settings">Settings</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="maps-leaflet.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-home-cog"></i>
                            <div data-i18n="Business Settings">Business Settings</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="maps-leaflet.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-map-2"></i>
                            <div data-i18n="Business Location">Business Location</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="maps-leaflet.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-receipt-tax"></i>
                            <div data-i18n="Tax Rates">Tax Rates</div>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</aside>
<!-- / Menu -->
