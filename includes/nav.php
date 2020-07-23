<a class="navbar-brand desktop_logo" href="index.php"><img src="./assets/images/white_logo.png"></a>
<a class="navbar-brand mobile_logo" href="index.php"><img src="./assets/images/black_logo.png"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
          <?php
            foreach($navItems as $item)
            {
             echo "<li class='nav-item'><a class='nav-link' href=\"$item[slug]\">$item[title]</a></li>";
            }
          ?>
          <li class="nav-item">
                <a href="mailto:tamjidahmed958@gmail.com">
                    <button class="btn btn-contact">Contact</button>
                </a>
            </li>
          </ul>
        </div>