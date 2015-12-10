<?php
/**
 * Include common functions used through out theme.
 */
include_once dirname(__FILE__) . '/includes/common.inc';

function doming_links__system_main_menu($variables) {
    $output = '';
    if ($variables['links']) { ?>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
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
                            <li <?= ($link['below'] ? 'class="dropdown"' : '') ?>>
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
    return $output;
}