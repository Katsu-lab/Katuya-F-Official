
    <header id="hamburger">
        <div class="menu"><img src="img/logo.png" alt="K-Lab logo"></div>
        <div class="drawer">
          <input type="checkbox" id="drawer-check" class="drawer-hidden" >
          <label for="drawer-check" class="menu drawer-open"><span></span></label>

          <nav class="drawer-content">
            <ul class="drawer-list">
              <li class="drawer-item">
                <a href="eng_index.php">HOME</a>
              </li>
              <li class="drawer-item">
                <a href="eng_index.php">PROFILE</a>
              </li>
              <li class="drawer-item">
                <a href="eng_skill.php">SKILL</a>
              </li>
              <li class="drawer-item">
                <a href="eng_portfolio.php">PORTFOLIO</a>
              </li>
              <li class="drawer-item">
                <a href="eng_index.php/#contact">CONTACT</a>
              </li>
              <li class="drawer-item">
                <a href="<?= $url ?>.php">JP</a> / <a href="eng_<?= $url ?>.php">EN</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>

    <section id="nav">
        <nav>
            <ul>
                <li><img src="img/logo.png" alt="K-Lab logo"></li>
                <li><a href="eng_index.php">HOME</a></li>
                <li><a href="eng_profile.php">PROFILE</a></li>
                <li><a href="eng_skill.php">SKILL</a></li>
                <li><a href="eng_portfolio.php">PORTFOLIO</a></li>
                <li><a href="eng_index.php#contact">CONTACT</a></li>
                <li><a href="<?= $url ?>.php">JP</a> / <a href="eng_<?= $url ?>.php">EN</a></li>
            </ul>
        </nav>
    </section>

