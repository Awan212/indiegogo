<!-- Navbar -->
<nav id="navbar">
    <div class="row">

        <!-- Left side of navbar -->
        <div class="col-6">
            <div class="">

                <!-- Indiegogo logo -->
                <div id="logo-container" class="left-nav-elements">

                    <a href="{{ route('home') }}">
                        <svg id="logo">
                            <path
                                d="M.143 1.1h6.045v22.083H.143V1.1zm21.496 10.222h.09V1.1h5.769v22.083h-5.555l-6.93-11.472-.091-.002v11.474H9.184V1.1h6.35l6.105 10.222zm20.902.834c0-5.543-1.556-5.691-4.122-5.691h-1.861v11.62h2.107c2.259 0 3.876-.355 3.876-5.93zM30.515 1.1h7.509c7.204 0 10.652 1.908 10.652 11.027 0 9.297-3.388 11.056-10.561 11.056h-7.6V1.1zm20.326 0h6.044v22.083H50.84V1.1zm55.979 17.135c3.297 0 3.755-2.236 3.755-5.87 0-3.606-.458-5.841-3.755-5.841-3.327 0-3.785 2.235-3.785 5.84 0 3.635.458 5.871 3.785 5.871zm0-17.403c8.424 0 9.89 5.393 9.89 11.324 0 5.9-1.495 11.295-9.89 11.295-8.424 0-9.92-5.394-9.92-11.295 0-5.931 1.496-11.324 9.92-11.324zm42.366 17.403c3.294 0 3.754-2.236 3.754-5.87 0-3.606-.46-5.841-3.754-5.841-3.327 0-3.786 2.235-3.786 5.84 0 3.635.459 5.871 3.786 5.871zm0-17.403c8.424 0 9.889 5.393 9.889 11.324 0 5.9-1.495 11.295-9.889 11.295-8.425 0-9.922-5.394-9.922-11.295 0-5.931 1.497-11.324 9.922-11.324zM85.31 14.66l.667-4.8h8.757v13.322h-5.558c-.973.18-2.102.268-3.416.268-7.417 0-9.249-4.62-9.249-11.295 0-7.658 2.504-11.324 10.317-11.324 2.808 0 5.311.714 7.022 1.788l-3.236 4.918c-1.038-.568-2.29-1.014-4.06-1.014-2.382 0-3.969.626-3.969 5.811 0 4.977.948 6.228 3.726 6.228 2.977 0 2.899-1.076 2.899-3.516v-.386h-3.9zm42.365 0l.667-4.8h8.757v13.322h-5.558c-.973.18-2.102.268-3.416.268-7.418 0-9.249-4.62-9.249-11.295 0-7.658 2.504-11.324 10.317-11.324 2.808 0 5.31.714 7.021 1.788l-3.235 4.918c-1.038-.568-2.291-1.014-4.06-1.014-2.382 0-3.969.626-3.969 5.811 0 4.977.947 6.228 3.726 6.228 2.976 0 2.898-1.076 2.898-3.516v-.386h-3.899zM74.92 6.494h-9.096v2.892h6.704l-.73 5.243h-5.974v3.31h9.096v5.244H59.902V1.1H74.92v5.394z">
                            </path>
                        </svg>
                    </a>
                </div>

                <ul id="nav-menu-container">
                    <li class="nav-menu-item">
                        Explore
                        <svg viewBox="0 0 12 8" id="v-down_caret" style="height: 7px;">
                            <path
                                d="M2.706.706A.997.997 0 001.289.71l-.578.578a1.01 1.01 0 000 1.423l4.577 4.576a1.01 1.01 0 001.424 0l4.576-4.576a1 1 0 00.001-1.423L10.711.71A1 1 0 009.294.706L6 4 2.706.706z">
                            </path>
                        </svg>
                    </li>
                    <li class="nav-menu-item">
                        <a href="#">
                            What We Do
                        </a>
                    </li>
                    <li class="nav-menu-item">
                        <svg viewBox="0 0 16 16" style="height: 16px;width: 16px" id="v-search">
                            <path
                                d="M1.718 6.323c0-2.534 2.035-4.59 4.546-4.59s4.546 2.056 4.546 4.59c0 2.535-2.035 4.59-4.546 4.59-2.51 0-4.546-2.055-4.546-4.59m13.98 7.478l-4.123-4.127c.604-.972.954-2.12.954-3.351C12.528 2.83 9.723 0 6.264 0 2.804 0 0 2.83 0 6.323c0 3.492 2.804 6.323 6.263 6.323a6.2 6.2 0 003.449-1.044l4.09 4.096a1.031 1.031 0 001.46 0l.434-.437a1.033 1.033 0 000-1.46">
                            </path>
                        </svg>
                    </li>
                </ul>

            </div>
        </div>

        <!-- Right side of navbar -->
        <div class="col-6">
            <ul id="nav-menu-container">
                @guest
                <li class="nav-menu-item" style="float: right;margin-right:5px">
                    <a href="{{ Route('register') }}">
                        Sign Up
                    </a>
                </li>
                <li class="nav-menu-item login-divider" style="float: right;margin-right:5px">
                    <a href="{{ Route('login') }}">
                        Log In
                    </a>
                </li>
                @else
                <li class="nav-menu-item  dropdown" style="float: right;margin-right:5px">
                    <span class="">
                        <img src="{{ Auth::guard('web')->user()->avatar }}"
                        width="30px"
                        height="30px"
                        class="login-divider"
                        style="border-radius:100%; overflow:hidden;">
                        {{ Auth::guard('web')->user()->first_name }}
                    </span>
                    <div class="dropdown-content ">
                        <a href="#">My Compaigns</a>
                        <a href="#">My Contributions</a>
                        <a href="#">Profile</a>
                        <a href="{{ Route('setting') }}">Setting</a>
                        <a href="{{ url('logout') }}">Logout</a>
                    </div>
                </li>
                @endguest

                <li class="nav-menu-item" style="float: right;margin-right: 25px;">
                    <a href="#">
                        Start A Campaign
                    </a>
                </li>
                <li class="nav-menu-item" style="float: right;margin-right:5px">
                    <a href="#">
                        For Entrepreneurs
                    </a>
                </li>
            </ul>
        </div>

    </div>


</nav>
