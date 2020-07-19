<a class="navbar-brand" href="./index.php"><img src="./assets/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
          <?php
            foreach($navItems as $item)
            {
             echo "<li class='nav-item active'><a class='nav-link' href=\"$item[slug]\">$item[title]</a></li>";
            }
          ?>
          <li class="nav-item">
                <a href="mailto:tamjidahmed958@gmail.com">
                    <button class="btn btn-outline-success my-2 my-sm-0">Contact</button>
                    </a>
            </li>
          </ul>
        </div>