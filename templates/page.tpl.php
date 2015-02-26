<div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>

<section class="cornell-identity">
  <div class="container">
    <div class="row">
      <div class="cornell-brand">
        <div class="cu-logo">
          <img src="/etc/sites/all/themes/etc3/images/cul-logo-gray.gif">
          <a id="insignia-link" href="http://www.cornell.edu/">Cornell Insignia</a>
          <div class="unit-signature-links">
            <a id="cornell-link" href="http://www.cornell.edu/">Cornell University</a>
            <a id="unit-link" href="http://www.library.cornell.edu/">Cornell University Library</a>
          </div>
        </div>
      </div>
    </div> <!-- /row -->
  </div> <!-- /container -->
</section>

<header>
  <div class="container">
    <div class="site-title">
      <div class="secondary-brand">
        <a href="http://goldsen.library.cornell.edu">Rose Goldsen Archive of New Media Art</a>
      </div>
      <h1><a href="<?php print $front_page; ?>">ETC / Experimental Television Center</a></h1>
    </div>
    <div class="navigation">
      <div class="navbar">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars"></i> Menu
        </button>
        <div class="collapse navbar-collapse">
          <div class="nav navbar-nav">
            <?php print render($page['navigation']); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="main-content" id="maincontent">
  <div class="container">
    <?php print render($breadcrumb); ?>
    <?php print render($page['highlighted']); ?>
    <?php print $messages; ?>
    <?php print render($tabs); ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar  = render($page['sidebar']);
    ?>

    <?php // if there is a sidebar, then create two column layout ?>
    <?php if ($sidebar): ?>
      <div class="row">
        <div class="main-text">
          <?php if ($title): ?>
            <h2><?php print $title; ?></h2>
          <?php endif; ?>
          <?php print render($page['content']); ?>
        </div><!--/main-text-->

        <div class="sidebar">
          <?php print render($page['sidebar']); ?>
        </div><!--/sidebar-->

      </div>

    <?php // if no sidebar, then create one column layout ?>
    <?php else: ?>
      <?php if ($title): ?>
        <h2><?php print $title; ?></h2>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    <?php endif; ?>

  </div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <?php print render($page['footer-primary']); ?>
      </div>
      <div class="col-sm-4 text-right">
        <?php print render($page['footer-secondary']); ?>
      </div>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>