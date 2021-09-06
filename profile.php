<?php include __DIR__ . '/includes/head.php' ?>


<div id="profile">

    <section class="uk-section">
        <div class="uk-container uk-margin-top uk-flex uk-flex-bottom uk-flex-wrap">
            <img src="images/Profile_Picture.png" alt="Profile Picture">
            <div class="uk-margin-left">
                <p class="uk-text-meta uk-margin-top">დარეგისტრირებული: 2021/07/03</p>
                <p class="uk-text-lead uk-margin-remove">დავით</p>
                <p class="uk-text-lead uk-margin-remove">ჭინჭარაშვილი</p>
            </div>

        </div>
    </section>

    <section>
        <div class="uk-container">
            <div class="uk-child-width-expand@s uk-flex uk-flex-top" uk-grid>
                <div id="bio">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore illo ipsa nostrum optio repellendus
                    voluptatem voluptates. A commodi doloremque neque quaerat quos. A, ab amet atque commodi, dolore
                    esse nam nesciunt obcaecati pariatur, quas sit tenetur veritatis vero. Aspernatur blanditiis fugiat
                    harum hic impedit in inventore maiores, mollitia, necessitatibus perspiciatis rem ullam? Adipisci
                    animi, assumenda eaque error, inventore maiores nemo neque rem rerum tempore vero, voluptatum?
                    Minima mollitia quaerat tempora vero? At distinctio doloremque iste laborum nulla quidem, reiciendis
                    rerum! Delectus fuga fugiat fugit, harum illum, impedit libero magni.</p>
                </div>
                <div class="uk-width-1-4@m uk-width-1-3@s">
                    <img src="images/Triangle.png" alt="Study Chart">
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section">
        <div class="uk-container">
            <h2 class="uk-text-center">ბოლო სესია</h2>
            <div class="uk-child-width-expand@s uk-text-center" uk-grid>
                <div>
                    <a href="<?=$base_url."/structure.php"?>"><img src="images/structure_history.png" alt="Image link to structure"></a>
                    <p><a href="#">კომბინატორიკა</a></p>
                    <p><a href="#">ჯგუფთა თეორია</a></p>
                    <p><a href="#">ალგებრა</a></p>
                </div>
                <div>
                    <a href="<?=$base_url."/space.php"?>"><img src="images/space_history.png" alt="Image link to space"></a>
                    <p><a href="#">ტრიგონომეტრია</a></p>
                    <p><a href="#">ტოპოლოგია</a></p>
                </div>
                <div>
                    <a href="<?=$base_url."/change.php"?>"><img src="images/change_history.png" alt="Image link to change"></a>
                    <p><a href="#">ქაოსის თეორია</a></p>
                    <p><a href="#">კალკულუსი</a></p>
                    <p><a href="#">ვეტორული კალკულუსი</a></p>
                </div>
            </div>

        </div>
    </section>


</div>


<?php include __DIR__ . '/includes/footer.php' ?>
