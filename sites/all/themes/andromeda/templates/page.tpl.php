<?php
/**
 * @file
 * Theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see andromeda_preprocess_page()
 */
?>
<div id="header">
  <div class="section">
    <div id="site-logo-and-name">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>


        <div id="name-and-slogan">

              <div id="site-name">
                <strong>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">social<span>nerd</span>review</a>
                </strong>
              </div>

          <?php if ($site_slogan): ?>
            <div id="site-slogan">
              <?php print $site_slogan; ?>
            </div>
          <?php endif; ?>

        </div> <!-- /#name-and-slogan -->
    </div> <!-- /#site-logo-and-name -->

    <?php if ($page['header']) : ?>
      <?php print drupal_render($page['header']); ?>
    <?php else : ?>
      <div id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#main-menu -->
    <?php endif; ?>


  </div> <!-- /.section -->
</div> <!-- /#header -->

<div id="page-wrapper" class="clearfix"><div id="page">
  <?php if($page['slideshow']) : ?>
    <div id="slideshow">
      <?php print drupal_render($page['slideshow']);; ?>
    </div>
  <?php endif; ?>

  <?php if($page['highlight']) : ?>
    <div id="highlight">
      <?php print drupal_render($page['highlight']); ?>
    </div>
  <?php endif; ?>
  <div id="main">
    <a id="main-content"></a>
    <?php print $messages; ?>
    <div id="content">
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
      <?php endif; ?>

      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div> <!-- /#content -->

    <?php if($page['sidebar']) : ?>
      <div id="sidebar">
        <?php print drupal_render($page['sidebar']); ?>
      </div>
    <?php endif; ?>
  </div> <!-- /#main -->
</div></div> <!-- /#page, /#page-wrapper -->
<?php if($page['footer']) : ?>
  <div id="footer">
    <div class="section">
      <?php print drupal_render($page['footer']); ?>
    </div>
  </div>
<?php endif; ?>