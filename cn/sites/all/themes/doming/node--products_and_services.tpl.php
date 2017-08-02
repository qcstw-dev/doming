<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>> 
    <h2><?php print $field_main_title_1[0]['value'] ?></h2>
    <div class="col-xs-12"><?php
        $list_item_ids = [];
        foreach ($field_blocks as $item_id) {
            $list_item_ids[] = $item_id['value']; 
        }
        $blocks = entity_load('field_collection_item', $list_item_ids);
        $i = 1;
        foreach (array_slice($blocks, 0, 3) as $block) { ?>
            <a id="a-block" href="<?php print url($block->field_block_link['und'][0]['url']) ?>" title="<?php print $block->field_block_link['und'][0]['title'] ?>">
                <div class="col-xs-12 col-md-3 thumbnail border">
                    <img src="<?php print file_create_url($block->field_block_image['und'][0]['uri']); ?>" alt="<?php print $block->field_block_image['und'][0]['alt']; ?>" title="<?php print $block->field_block_image['und'][0]['title']; ?>" />
                    <h3 id="block-title" class="col-lg-12 text-center"><?php print $block->field_block_title['und'][0]['value'] ?></h3>
                    <div class="col-lg-12 text-justify"><?php print $block->field_block_text['und'][0]['value'] ?></div>
                </div>
            </a><?php
            if ($i % 3 != 0) { ?>
                <div class="col-md-1 visible-md visible-lg"></div><?php
            }
            $i++;
        } ?>
    </div>
    <div class="clearfix"></div>
    <h2 class="margin-top-0"><?php print $field_main_title_2[0]['value'] ?></h2>
    <a id="a-block" href="<?php print url($field_block_4_5_6_link[0]['url']) ?>" title="<?php print $field_block_4_5_6_link[0]['title'] ?>">
        <div class="col-xs-12"><?php
            $i = 1;
            foreach (array_slice($blocks, 3, 3) as $block) { ?>
                <div class="col-xs-12 col-md-3 thumbnail border">
                    <img class="" src="<?php print file_create_url($block->field_block_image['und'][0]['uri']); ?>" alt="<?php print $block->field_block_image['und'][0]['alt']; ?>" title="<?php print $block->field_block_image['und'][0]['title']; ?>" />
                    <h3 id="block-title" class="col-lg-12 text-center"><?php print $block->field_block_title['und'][0]['value'] ?></h3>
                    <div class="col-lg-12 text-justify"><?php print $block->field_block_text['und'][0]['value'] ?></div>
                </div><?php
                if ($i % 3 != 0) { ?>
                    <div class="col-md-1 arrow-right visible-md visible-lg"><span class="glyphicon glyphicon-arrow-right"></span></div><?php
                }
                $i++;
            } ?>
        </div>
    </a>
</div>
