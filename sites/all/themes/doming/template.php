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
                <div class="navbar-collapse collapse padding-sm-0" id="bs-example-navbar-collapse-1" aria-expanded="false">
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

function doming_preprocess_node(&$variables) {
    $node = $variables['node'];
    if ($node->type == 'layout_maker') {
    //Add the JavaScript file.
    drupal_add_js(path_to_theme().'/js/jquery-ui.min.js', ['scope' => 'footer']);
    drupal_add_js(path_to_theme().'/js/layout_maker/component.js', ['scope' => 'footer', 'weight' => 1000]);

    //Add the CSS file.
    drupal_add_css(path_to_theme().'/css/layout_maker/component.css');
    drupal_add_css(path_to_theme().'/css/layout_maker/demo.css');
    drupal_add_css(path_to_theme().'/css/layout_maker/doming.css');
    drupal_add_css(path_to_theme().'/css/layout_maker/normalize.css');
    drupal_add_css(path_to_theme().'/css/jquery-ui.min.css');
    }
  
    drupal_add_js(path_to_theme().'/js/custom.js', ['scope' => 'footer']);
}