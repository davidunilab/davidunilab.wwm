<header id="main-header" class="uk-light uk-position-absolute uk-position-left-top uk-width-1-1">
    <div class="uk-container">
        <div class="uk-flex uk-flex-middle uk-flex-between">
            <div class="uk-flex uk-flex-middle uk-flex-left">

                <a href="<?=$base_url."/"?>" class="uk-display-block uk-margin-right" id="logo">
                    <img src="images/logo.svg" title="Wonder World of Mathematics" class="uk-display-block" alt="logo" />
                </a>

                <div class="uk-visible@m">
                    <nav id="nav" uk-navbar>
                        <ul class="uk-navbar-nav">
                            <?php include dirname(__DIR__) . '/includes/menuLinks.php'  ?>
                        </ul>
                    </nav>
                </div>

                <div class="uk-hidden@m">
                    <a href="#" uk-toggle="target: #offcanvas-overlay" uk-icon="icon: menu; ratio: 1;"></a>
                </div>

            </div>

            <div class="uk-flex-right uk-flex-middle uk-flex" id="profile-button">
                <a href="<?=$base_url."/profile.php"?>"><img width="35" src="images/profile.svg" alt="profile"></a>
            </div>
        </div>
    </div>
</header>