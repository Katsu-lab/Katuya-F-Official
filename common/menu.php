
    <header id="hamburger">
        <div class="menu"><img src="img/logo.png" alt="K-Lab logo"></div>
        <div class="drawer">
          <input type="checkbox" id="drawer-check" class="drawer-hidden" >
          <label for="drawer-check" class="menu drawer-open"><span></span></label>

          <nav class="drawer-content">
            <ul class="drawer-list">
              <li class="drawer-item">
                <a href="index.php?lang=<?= $lang ?>">HOME</a>
              </li>
              <li class="drawer-item">
                <a href="profile.php?lang=<?= $lang ?>">PROFILE</a>
              </li>
              <li class="drawer-item">
                <a href="skill.php?lang=<?= $lang ?>">SKILL</a>
              </li>
              <li class="drawer-item">
                <a href="portfolio.php?lang=<?= $lang ?>">PORTFOLIO</a>
              </li>
              <li class="drawer-item">
                <a href="index.php?lang=<?= $lang ?>#contact">CONTACT</a>
              </li>
              <li class="drawer-item">
                <a href="<?= $url ?>.php?lang=jp">JP</a> / <a href="<?= $url ?>.php?lang=en">EN</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>

    <section id="nav">
        <nav>
            <ul>
                <li><img src="img/logo.png" alt="K-Lab logo"></li>
                <li><a href="index.php?lang=<?= $lang ?>">HOME</a></li>
                <li><a href="profile.php?lang=<?= $lang ?>">PROFILE</a></li>
                <li><a href="skill.php?lang=<?= $lang ?>">SKILL</a></li>
                <li><a href="portfolio.php?lang=<?= $lang ?>">PORTFOLIO</a></li>
                <li><a href="index.php?lang=<?= $lang ?>#contact">CONTACT</a></li>
                <li><a href="<?= $url ?>.php?lang=jp">JP</a> / <a href="<?= $url?>.php?lang=en">EN</a></li>
            </ul>
        </nav>
    </section>

