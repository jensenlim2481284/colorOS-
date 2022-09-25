<section id='topNav'>
    <div class='topnav-section'>
        <div class='top-title-section'>
            <span class="topnav-title">
                @if(isNavActive(['index']))
                    My Apps
                @elseif(isNavActive(['documentation']))
                    Development Docs
                @elseif(isNavActive(['explore']))
                    Explore Open API
                @endif
            </span>
        </div>
        <div class='topnav-button'>
            <div class='top-notification-section'>
                <button class='btn btn-link' id="topProfileIcon">
                    <img id="check-profile-bar" src='/img/icon/profile.png' />
                </button>
                <div class='topnav-profile'>
                    <div class='profile-item'>
                        <a href='/profile' >
                            <i class='ti ti-user'></i>
                            My Account
                        </a>
                        <a href='/setting'>
                            <i class='ti ti-settings'></i>
                            Setting
                        </a>
                        <a href='/logout'>
                            <i class='ti ti-control-skip-backward'></i>
                            Logout
                        </a>
                    </div>
                </div>
                <div class='profile-overlay'></div>
            </div>
        </div>
    </div>
</section>