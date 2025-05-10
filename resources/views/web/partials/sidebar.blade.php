<div id="layout-wrapper">
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <!-- <div class="navbar-brand-box">
                    <a href="{{ url('/') }}" class="logo logo-dark ">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="20">
                        </span>
                    </a>

                    <a href="{{ url('/') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="20">
                        </span>
                    </a>
                </div> -->

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->

            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="uil-search"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



                {{-- <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="uil-minus-path"></i>
                    </button>
                </div> --}}

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="uil-english-to-chinese" style="font-size: 24px;"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        {{-- <a class="dropdown-item" href="#"><i
                                class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                                class="align-middle">View Profile</span></a> --}}

                        <a href="/change-lang/en" class="dropdown-item " @if(Session::get('locale') == 'en') style="background-color: #5b73e8 !important; color: white;" @endif > {{ __('labels.english') }} </a>
                        <a href="/change-lang/ar" class="dropdown-item" @if(Session::get('locale') == 'ar') style="background-color: #5b73e8 !important; color: white;" @endif> {{ __('labels.arabic') }}</a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="/assets/images/logo-sm.png"
                            alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{ Auth::user()->name }} </span>
                        <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        {{-- <a class="dropdown-item" href="#"><i
                                class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                                class="align-middle">View Profile</span></a> --}}
                        @if(Auth::user()->hasRole('Administrator'))
                        <a class="dropdown-item" href="/change-password"> <span
                            class="align-middle"> {{ __('sidebar.change_password') }}</span></a>
                        @endif
                        <a class="dropdown-item" href="/logout"><i
                                class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span
                                class="align-middle"> {{ __('sidebar.sign_out') }}</span></a>
                    </div>
                </div>




            </div>
        </div>
    </header>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <!-- LOGO -->
        <div class="d-flex">
            <div class="navbar-brand-box ">
                <a href="{{ url('/') }}" class="logo logo-dark logo__custom">
                    <span class="logo-sm">
                        <img src="/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/images/logo-dark.png" alt="" height="30">
                    </span>
                </a>

                <a href="{{ url('/') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div data-simplebar class="sidebar-menu-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    @can('view-role')
                    <li class="menu-title">{{ __('sidebar.menu') }}</li>

                    <li>
                        <a href="{{ url('/') }}">
                            <i class="uil-home-alt"></i>
                            <span>{{ __('sidebar.dashboard') }}</span>
                        </a>
                    </li>
                    @endcan



                    <li class="menu-title">{{ __('sidebar.pages') }}</li>
                    @canany(['view-port','create-port'])
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-home"></i>
                            <span>{{ __('sidebar.ports') }}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @can('create-port')
                            <li><a href="{{ url('create-port') }}">{{ __('sidebar.create_port') }}</a></li>
                            @endcan
                            @can('view-port')
                            <li><a href="{{ url('ports') }}">{{ __('sidebar.list_ports') }}</a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcanany
                    @canany(['view-user','create-user'])
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-user-circle"></i>
                            <span>{{ __('sidebar.staffs') }}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @can('create-user')
                            <li><a href="{{ url('create-staff') }}">{{ __('sidebar.create_staff') }}</a></li>
                            @endcan
                            @can('view-user')
                            <li><a href="{{ url('staff') }}">{{ __('sidebar.list_staffs') }}</a></li>
                            @endcan

                        </ul>
                    </li>
                    @endcanany
                    @canany(['view-client','create-client'])
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-users-alt"></i>
                            <span>{{ __('sidebar.clients') }}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @can('create-client')
                            <li><a href="{{ url('create-client') }}">{{ __('sidebar.create_client') }}</a></li>
                            @endcan
                            @can('view-client')
                            <li><a href="{{ url('clients') }}">{{ __('sidebar.list_clients') }}<i class="fa fa-circle-o-notch" aria-hidden="true"></i></a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcanany
                    @canany(['view-expense','create-expense'])
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-object-ungroup"></i>
                            <span>{{ __('sidebar.expenses') }}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @can('create-expense')
                            <li><a href="{{ url('create-expense') }}">{{ __('sidebar.create_expense') }}</a></li>
                            @endcan
                            @can('view-expense')
                            <li><a href="{{ url('expenses') }}">{{ __('sidebar.list_expenses') }}<i class="fa fa-circle-o-notch" aria-hidden="true"></i></a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcanany
                    @canany(['view-expense','create-expense'])
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-object-ungroup"></i>
                            <span>{{ __('sidebar.credit_receipt') }}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @can('create-expense')
                            <li><a href="{{ url('create-credit-receipt') }}">{{ __('sidebar.create_credit_receipt') }}</a></li>
                            @endcan
                            @can('view-expense')
                            <li><a href="{{ url('credit-receipts') }}">{{ __('sidebar.list_credit_receipt') }}<i class="fa fa-circle-o-notch" aria-hidden="true"></i></a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcanany
                    @canany(['view-role','create-role'])
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil uil-line-spacing"></i>
                            <span>{{ __('sidebar.particulars') }}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ url('create-invoice-particular') }}">{{ __('sidebar.create_particular') }}</a></li>
                            <li><a href="{{ url('particulars') }}">{{ __('sidebar.list_particulars') }}</a></li>
                        </ul>
                    </li>
                    @endcanany
                    @canany(['view-invoice','create-invoice'])
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-arrows-resize-h"></i>
                            <span>{{ __('sidebar.invoices') }}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @can('create-invoice')
                            @if(Auth::user()->hasRole('Administrator') || Auth::user()->hasRole('Operator'))
                            <li><a href="{{ url('create-operator-invoice') }}">{{ __('sidebar.create_border_invoice') }}</a></li>
                            @endif
                            @if(Auth::user()->hasRole('Administrator') || Auth::user()->hasRole('Accountant'))
                            <li><a href="{{ url('create-invoice') }}">{{ __('sidebar.create_invoice') }}</a></li>
                            @endif
                            @endcan
                            @can('view-invoice')
                            <li><a href="{{ url('invoice') }}">{{ __('sidebar.list_invoices') }}<i class="fa fa-circle-o-notch" aria-hidden="true"></i></a></li>
                            @endcan
                            <!-- New menu with sub-menu -->

                        </ul>
                    </li>
                    @endcanany
                    @canany(['view-report'])
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-newspaper"></i>
                            <span>{{ __('sidebar.reports') }}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ url('report/invoices') }}">{{ __('sidebar.invoice_reports') }}</a></li>
                            <li><a href="{{ url('report/expenses') }}">{{ __('sidebar.expense_reports') }}<i class="fa fa-circle-o-notch" aria-hidden="true"></i></a></li>
                            {{-- <li><a href="{{ url('reports') }}">Credit Report<i class="fa fa-circle-o-notch" aria-hidden="true"></i></a></li> --}}
                            <li><a href="{{ url('report/credit') }}">{{ __('sidebar.credit_reports') }}<i class="fa fa-circle-o-notch" aria-hidden="true"></i></a></li>

                        </ul>
                    </li>
                    @endcanany
                    @canany(['view-invoice'])
                    @if(Auth::user()->hasRole('Operator'))
                    <li>
                        <a href="{{ url('settings') }}" class="waves-effect">
                            <i class="uil-setting"></i>
                            <span>{{ __('sidebar.settings') }}</span>
                        </a>
                    </li>
                    @endif
                    @endcanany

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>

</div>
