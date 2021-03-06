<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title><?php
  if ($_SERVER["HTTP_HOST"] != 'localhost') { ?>
      <!-- Google Analytics -->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-5861473-6', 'auto');
        ga('send', 'pageview');
      </script>
      <!-- End Google Analytics --><?php
  } ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <meta property="og:image" content="http://doming-stickers.com/sites/default/files/home/doming.jpg" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="fFhbgxm3P5s57G39zbyFiJlqgNokvMBqMF8-q7NLrmU" />
  <meta name="msvalidate.01" content="8756BB9222C8487BADF4ECD837762676" />
  <link rel="sitemap" href="/sitemap.xml" />
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?> <?= (!user_is_logged_in() && $_SERVER['HTTP_HOST'] != 'localhost' ? 'oncontextmenu="return false"' : '') ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
