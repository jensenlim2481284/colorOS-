<nav id="sidebar" >
    <div id='main-menu'>
        <div class='logo-section'>
            <img src='/img/logo/logo.png' />
        </div>
        <ul class="list-unstyled components mb-5">
            <li class="{{isNavActive(['index'])?'active':''}}">
                <a href='/'>
                    <i class="menu-icon ti-infinite">
                        <div>
                            <span> My Apps</span>
                        </div>
                    </i>
                </a>
            </li>

            <li class="{{isNavActive(['explore.*'])?'active':''}}">
                <a href='/explore'>
                    <i class="menu-icon ti-layout-grid3">
                        <div>
                            <span>Explore</span>
                        </div>
                    </i>
                </a>
            </li>

            <li class="{{isNavActive(['documentation.*'])?'active':''}}">
                <a href='/documentation'>
                    <i class="menu-icon ti-book">
                        <div>
                            <span> Documentation </span>
                        </div>
                    </i>
                </a>
            </li>

            <li class="">
                <a href='#'>
                    <i class="menu-icon ti-face-smile">
                        <div>
                            <span> Account</span>
                        </div>
                    </i>
                </a>
            </li>


            <li class="">
                <a href='#'>
                    <i class="menu-icon ti-settings">
                        <div>
                            <span> Setting </span>
                        </div>
                    </i>
                </a>
            </li>

        </ul>
        <div id="sideBottomNav">
            <a href='#'>
                <i class='ti ti-control-skip-backward'></i>
            </a>
        </div>
    </div>
</nav>