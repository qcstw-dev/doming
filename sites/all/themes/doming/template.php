<?php
function doming_links__system_main_menu($variables) {
    if ($variables['links']) { ?>
        <nav class="navbar navbar-default">
            <div class="container-fluid padding-sm-0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand visible-xs">Menu</span>
                </div>
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false">
                    <ul class="nav navbar-nav"><?php
                        foreach ($variables['links'] as $link) { ?>
                        <li class="<?= ($link['below'] ? 'dropdown' : '') ?><?= (($_SERVER["REQUEST_URI"] === url($link['link']['link_path']) && $link['link']['href'] != '<front>') ? ' active': '') ?>">
                                <a <?= ($link['below'] ? 'role="button" aria-haspopup="true" aria-expanded="false"' : '') ?> href="<?= url($link['link']['link_path']) ?>" >
                                    <?= $link['link']['link_title'] ?>
                                </a><?php
                                if ($link['below']) { ?>
                                    <ul class="dropdown-menu hidden-xs"><?php
                                        foreach ($link['below'] as $below) { 
                                            if (isset($below['link'])) { ?>
                                                <li>
                                                    <a href="<?= url($below['link']['link_path']) ?>"><?= $below['link']['link_title'] ?></a>
                                                </li><?php
                                            }
                                        } ?>
                                    </ul><?php
                                } ?>
                            </li><?php
                        } ?>
                    </ul>
                </div>
            </div>
        </nav><?php
    }
}
function doming_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    $title = drupal_get_title();
    if (!empty($title)) {
      $breadcrumb[]=$title;
    }
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output = implode(' » ', $breadcrumb);
    return $output;
  }
}

function doming_preprocess_node(&$variables) {
    $node = $variables['node'];
    if ($node->type == 'layout_maker') {
    //Add the JavaScript file.
    drupal_add_js(path_to_theme().'/js/jquery-ui.min.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/layout_maker/component.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/layout_maker/custom.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/fileupload/load-image.all.min.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/fileupload/canvas-to-blob.min.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/fileupload/jquery.iframe-transport.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/fileupload/jquery.ui.widget.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/fileupload/jquery.fileupload.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/fileupload/jquery.fileupload-process.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/fileupload/jquery.fileupload-image.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/fileupload/jquery.fileupload-validate.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/fileupload/custom.js', ['scope' => 'footer']);

    //Add the CSS file.
    drupal_add_css(path_to_theme().'/css/layout_maker/component.css');
    drupal_add_css(path_to_theme().'/css/layout_maker/demo.css');
    drupal_add_css(path_to_theme().'/css/layout_maker/doming.css');
    drupal_add_css(path_to_theme().'/css/layout_maker/normalize.css');
    drupal_add_css(path_to_theme().'/css/jquery-ui.min.css');
    drupal_add_css(path_to_theme().'/css/jquery.fileupload.css');
    }
  
    drupal_add_js(path_to_theme().'/js/custom.js', ['scope' => 'footer']);
}