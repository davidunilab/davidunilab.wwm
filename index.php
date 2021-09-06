<?php include  __DIR__ . '/includes/head.php' ?>


<div id="home-page">
    <div class="main-banner uk-width-1-1 uk-object-cover">
        <img src="images/main_background.png" alt="main banner">
        <div class="text-content uk-text-center uk-visible@m">
            <p>მათემატიკის</p>
            <p>საოცარი</p>
            <p>სამყარო</p>
        </div>
    </div>

    <section class="uk-section">
        <div class="uk-container">

            <div class="uk-child-width-1-3@s uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card">
                        <div class="uk-card-media-top">
                            <img src="images/structure_portal.png" alt="structure portal">
                        </div>

                        <div class="uk-card-body uk-text-center">
                            <a href="<?=$base_url?>/structure.php" class="uk-heading-xsmall heading-font ">სტრუქტურა</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card">
                        <div class="uk-card-media-top">
                            <img src="images/space_portal.png" alt="space portal">
                        </div>

                        <div class="uk-card-body uk-text-center">
                            <a href="<?=$base_url?>/space.php" class="uk-heading-xsmall heading-font">სივრცე</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card">
                        <div class="uk-card-media-top">
                            <img src="images/change_portal.png" alt="change portals">
                        </div>

                        <div class="uk-card-body uk-text-center">
                            <a href="<?=$base_url?>/change.php" class="uk-heading-xsmall heading-font">ცვლილება</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
    <img class="rocket uk-visible@m" src="images/rocket-ship.svg" alt="Ship Image">
<?php include  __DIR__ . '/includes/footer.php' ?>