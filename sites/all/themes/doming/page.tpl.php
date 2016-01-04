<div id="main-content" class="container">
    <div id="header" class="row hidden-print">
        <div id="banner" class="col-xs-12">
            <?php if ($logo): ?>
                <div id="logo" class="col-xs-12 col-sm-2 text-center">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                </div>
            <?php endif; ?>
            <div id="title" class="hidden-xs col-sm-10">
                <?php if ($site_name) { ?>
                <h1 class="col-xs-12 margin-top-10 main-title"><?php print $site_name ?><br /><span class="font-dfkai">台灣妍品滴膠貼紙工廠</span></h1><?php
                } ?>
                <?php if ($site_slogan) { ?>
                    <div class="col-xs-12">
                        <i><?php print $site_slogan ?><br /><span class="font-dfkai font-size-24">中國唯一設立歐洲滴膠設備</span></i>
                    </div><?php
                } ?>
            </div>
        </div>
        <div id="menu" class="col-xs-12 padding-xs-0">
            <?php if ($main_menu): ?>
                <?php 
                  print theme('links__system_main_menu', array(
                  'links' => menu_tree_all_data('main-menu'),
                  'attributes' => array(
                    'id' => 'main-menu-links',
                    'class' => array('nav', 'nav-tabs'),
                  ),
                  'heading' => array(
                    'text' => t('Main menu'),
                    'level' => 'h2',
                    'class' => array('element-invisible'),
                  ),
                ));
                ?>
            <?php endif; ?>
        </div>
    </div>
    <div id="content" class="col-xs-12 padding-0">
        <?php if ($breadcrumb): ?>
          <ol class="breadcrumb hidden-print"><?php print $breadcrumb; ?></ol>
        <?php endif; ?>
          <div class="col-xs-12 padding-0"><?php
//                  var_dump($page['content']['system_main']['nodes'][2]['#node']->metatags);
            print render($page['content']);?>
          </div>
    </div>
    <?php if ($page['footer']): ?>
        <div id="footer" class="col-xs-12">
            <?php print render($page['footer']); ?>
        </div>
    <?php endif; ?>
    <div class="margin-bottom-20">
        <div class="footer-logo min-width-15-percent">
            <img src="https://www.qcsasia.com/wp-content/uploads/2014/11/caefi.png">
        </div>

        <div class="footer-logo min-width-15-percent">
            <img src="https://www.qcsasia.com/wp-content/uploads/2014/11/eppa.png">
        </div>

        <div class="footer-logo min-width-10-percent">
            <img src="https://www.qcsasia.com/wp-content/uploads/2013/11/promota300.jpg">
        </div>

        <div class="footer-logo min-width-15-percent">
            <img src="https://www.qcsasia.com/wp-content/uploads/2014/05/sedex_trans.jpg">
        </div>
        <div class="footer-logo min-width-20-percent">
            <img src="https://www.qcsasia.com/wp-content/uploads/2014/05/PPAI-logo-QCS.jpg">
        </div>

        <div class="footer-logo min-width-15-percent">
            <img src="https://www.qcsasia.com/wp-content/uploads/2014/11/ippag.png">
        </div>
    </div>
</div>
<script>
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).show();
        $(this).addClass('focus');
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).hide();
        $(this).removeClass('focus');
    });
</script>