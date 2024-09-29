<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="laravel ecommerce website developed by Yaqub Ajgori">
    <meta name="author" content="Yaqub Ajgori">
    <meta name="keywords"content="laravel, ecommerce, laravel ecommerce, laravel ecommerce website">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <link href="{{ asset('admin_assets/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="{{ route('admin.dashboard') }}">
                    <span class="align-middle">Admin Panel</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Main
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Category
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.add-category') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.add-category') }}">
                            <i class="align-middle" data-feather="plus-square"></i> <span
                                class="align-middle">Create</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.categories') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.categories') }}">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage</span>
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Sub Category
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.add-sub-category') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.add-sub-category') }}">
                            <i class="align-middle" data-feather="plus-square"></i> <span
                                class="align-middle">Create</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.sub-categories') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.sub-categories') }}">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage</span>
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Attributes
                    </li>
                    <li class="sidebar-item {{ request()->routeIs('admin.add-product-attribute') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.add-product-attribute') }}">
                            <i class="align-middle" data-feather="plus-square"></i> <span
                                class="align-middle">Create</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ request()->routeIs('admin.product-attributes') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.product-attributes') }}">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage</span>
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Discount
                    </li>
                    <li class="sidebar-item {{ request()->routeIs('admin.add-product-discount') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.add-product-discount') }}">
                            <i class="align-middle" data-feather="plus-square"></i> <span
                                class="align-middle">Create</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ request()->routeIs('admin.product-discounts') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.product-discounts') }}">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage</span>
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Product
                    </li>
                    <li class="sidebar-item {{ request()->routeIs('admin.add-product') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.add-product') }}">
                            <i class="align-middle" data-feather="plus-square"></i> <span
                                class="align-middle">Create</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ request()->routeIs('admin.products') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.products') }}">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage</span>
                        </a>
                    </li>
                    <li class="sidebar-header">
                        History
                    </li>
                    <li class="sidebar-item {{ request()->routeIs('admin.cart.history') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.cart.history') }}">
                            <i class="align-middle" data-feather="shopping-cart"></i> <span
                                class="align-middle">Cart</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ request()->routeIs('admin.order.history') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.order.history') }}">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Order</span>
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Setting
                    </li>
                    <li class="sidebar-item {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.settings') }}">
                            <i class="align-middle" data-feather="settings"></i> <span
                                class="align-middle">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the
                                                    update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.
                                                </div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-square"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="{{ asset('admin_assets/img/avatars/avatar-5.jpg') }}"
                                                    class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Vanessa Tucker</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis
                                                    arcu tortor.</div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-2.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="William Harris">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">William Harris</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod
                                                    vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-4.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Christina Mason</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
                                                </div>
                                                <div class="text-muted small mt-1">4h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-3.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Sharon Lessman</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
                                                    posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <img src="{{ asset('admin_assets/img/avatars/avatar.jpg') }}"
                                    class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span
                                    class="text-dark">Charles Hall</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Logout</button>
                                    </form>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">

                    @yield('content')

                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/"
                                    target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted"
                                    href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
                                        Template</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('admin_assets/js/app.js') }}"></script>

</body>

</html>
