<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-xs-12"><?php
        $list_item_ids = [];
        foreach ($field_blocks as $item_id) {
            $list_item_ids[] = $item_id['value']; 
        }
        $blocks = entity_load('field_collection_item', $list_item_ids);
        $i = 0;
        foreach ($blocks as $block) { ?>
            <div class="row margin-top-20">
                <div class="col-xs-12 col-md-6 thumbnail">
                    <a href="<?php print url($block->field_block_link['und'][0]['url']) ?>" title="<?php print $block->field_block_link['und'][0]['title'] ?>">
                        <img src="<?php print file_create_url($block->field_block_image['und'][0]['uri']); ?>" alt="<?php print $block->field_block_image['und'][0]['alt'] ?>" title="<?php print $block->field_block_image['und'][0]['title'] ?>" />
                    </a>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="margin-top-0"><?php print $block->field_block_title['und'][0]['value'] ?></h2>
                        <div class="text-block"><?php
                           print $block->field_block_text['und'][0]['value'] ?>
                        </div>
                        <p class="text-right"><span class="glyphicon glyphicon-picture"></span> <a class="link-read-more" href="<?php print url($block->field_block_link['und'][0]['url']) ?>" title="<?php print $block->field_block_link['und'][0]['title'] ?>"><?php print $field_label_link_blocks[0]['value'] ?></a></p>
                </div>
            </div><?php
        } ?>
    </div>
</div>