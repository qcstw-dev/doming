<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>><?php
    $list_item_ids = [];
    foreach ($field_blocks as $item_id) {
        $list_item_ids[] = $item_id['value']; 
    }
    $blocks = entity_load('field_collection_item', $list_item_ids);
    $i = 0;
    foreach ($blocks as $block) { ?>
        <div class="col-xs-12 padding-0 text-center">
            <h2><?php print $block->field_block_title['und'][0]['value'] ?></h2>
        </div>
        <div class="col-xs-12 padding-0">
            <div class="col-sm-4 col-md-3">
                <div class="thumbnail margin-auto">
                    <img src="<?php print file_create_url($block->field_block_image['und'][0]['uri']); ?>" alt="<?php print $block->field_block_image['und'][0]['alt']; ?>" title="<?php print $block->field_block_image['und'][0]['title']; ?>" />
                </div>
            </div>
            <div class="col-sm-8 col-md-9 margin-top-xs-10 text-justify">
                <p><?php print $block->field_block_text['und'][0]['value'] ?></p>
            </div>
        </div><?php            
    } ?>
</div>
