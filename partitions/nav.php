<?="\n\n"?>
<header>
    <div class='container'>
      <div class='background'></div>
      <nav>
        <div>
          <div class='logo'>
              <a href="/"><img src="images/logo.svg" alt="Logo"></a>
          </div>
          <ul>
            <li><a href="javascript:void;">თამაშები</a></li>
            <li><a href="javascript:void;">ხელსაწყოები</a></li>
            <li><a href="javascript:void;">ლექსიკონი</a></li>
            <li><a href="javascript:void;">ბმულები</a></li>
            <li><a href="javascript:void;">საიტის რუკა</a></li>
          </ul>
      </div>
        <a href="profile.php">
            <img class='profile'src='images/profile.svg'>
        </a>
      </nav>


      <?php 
      $url = parse_url($_SERVER['REQUEST_URI']);
     
      
      if (strlen($url["path"]) < 3){
          print("<div class='site_name'>მათემატიკის საოცარი სამყარო</div>\n");
      }?>
    </div>
  </header>
  <?="\n\n"?>