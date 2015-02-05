<div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>

<section class="cornell-identity">
  <div class="container">
    <div class="row">
      <div class="cornell-brand">
        <div class="cu-logo">
          <img src="/sites/all/themes/etc3/images/cul-logo-gray.gif">
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

<section class="main-content">
  <div class="container">
    <div class="row">
      <div class="home-primary">
        <?php print render($page['highlighted']); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php if(drupal_is_front_page()) {
          unset($page['content']['system_main']['default_message']);
        }?>
        <?php print render($page['home-primary']); ?>
      </div>
    </div>
    
  </div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="footer-primary">
        <?php print render($page['footer-primary']); ?>
      </div>
      <div class="footer-secondary text-right">
        <?php print render($page['footer-secondary']); ?>
      </div>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>

<script type="text/javascript">
  jQuery(document).ready(function() { 
  var randomImages = ['kubotacowley1980etc','linhardtetc','paiketcclass1972','peermeryl1etc']; 
  var rndNum = Math.floor(Math.random() * randomImages.length); 
  jQuery("header").css({ background: "url('/etc/sites/all/themes/etc3/images/background/" + randomImages[rndNum] + ".jpg') no-repeat" }); });
</script>