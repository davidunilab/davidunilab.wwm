
<?php include_once ("partitions/header.php");?>
<div id="profile">
 <?php include_once ("partitions/nav.php");?>
        <section>
            <div class="container">
                <div class="profile_info">
                    <img src="images/Profile_Picture.png" alt="Profile Picture">
                    <div>
                        <p class="registred">რეგისტრაციის თარიღი: 2021/07/03</p>
                        <p class="fullname">დავით ჭინჭარაშვილი</p>
                    </div>
                </div>
            </div>

        </section>

        <section>
            <div class="bio">
                <div class="bio-text">
                    <h1 class="text-center">მოკლედ ჩემს შესახებ</h1>
                    <p>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in est neque. Arcu sit habitasse quis mattis gravida molestie. Lectus tortor, fringilla lorem tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in est neque. Arcu sit habitasse quis mattis gravida molestie. Lectus tortor, fringilla lorem tortor.
                    </p>
                </div>
                <div class="triangle">
                    <img src="images/Triangle.png" alt="State Triangle">
                </div>
            </div>
        </section>
        <div id="last-session-wrapper">
        <section>
            <h1 class="text-center" id="session-history-title">ბოლო სესია</h1>
            
            <div class="last-session">
                <div>
                    <a href="/structure.php"><img src="images/structure_history.png" alt="structure history image"></a>
                    <p><a href="javascript:void()"> კომბინატორიკა</a></p>
                    <p><a href="javascript:void()"> ჯგუფთა თეორია</a></p>
                    <p><a href="javascript:void()"> ალგებრა</a></p>
                </div>
                <div>
                    <a href="/space.php"><img src="images/space_history.png" alt="space history image"></a>
                    <p><a href="javascript:void()"> ტრიგონომეტრია</a></p>
                    <p><a href="javascript:void()"> ტოპოლოგია</a></p>
                </div>
                <div>
                    <a href="/change.php"><img src="images/change_history.png" alt="change history image"></a>
                    <p><a href="javascript:void()"> ქაოსის თეორია</a></p>
                    <p><a href="javascript:void()"> კალკულუსი</a></p>
                    <p><a href="javascript:void()"> ვექტორთა კალკულუსი</a></p>
                    <p><a href="javascript:void()"> მათემატიკური ანალიზი</a></p>
                </div>
            </div>
        </section>
        </div>
</div>
</body>
</html>