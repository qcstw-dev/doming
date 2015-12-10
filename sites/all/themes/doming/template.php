<?php
/**
 * Include common functions used through out theme.
 */
include_once dirname(__FILE__) . '/includes/common.inc';

function doming_links__system_main_menu($variables) {
    $output = '';
    if ($variables['links']) { ?>
        <nav class="navbar navbar-default">
            <ul class="nav navbar-nav"><?php
                foreach ($variables['links'] as $link) { ?>
                    <li <?= ($link['below'] ? 'class="dropdown"' : '') ?>>
                        <a <?= ($link['below'] ? 'role="button" aria-haspopup="true" aria-expanded="false"' : '') ?> href="<?= url($link['link']['link_path']) ?>" >
                            <?= $link['link']['link_title'] ?>
                        </a><?php
                        if ($link['below']) { ?>
                            <ul class="dropdown-menu"><?php
                                foreach ($link['below'] as $below) { 
                                    if (isset($below['link'])) { ?>
                                        <li>
                                            <a href="<?= $below['link']['link_path'] ?>"><?= $below['link']['link_title'] ?></a>
                                        </li><?php
                                    }
                                } ?>
                            </ul><?php
                        } ?>
                    </li><?php
                } ?>
            </ul>
        </nav><?php
    }
    return $output;
}