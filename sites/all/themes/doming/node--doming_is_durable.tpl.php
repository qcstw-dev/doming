<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <h2 class="text-center"><?php print $field_durable_main_title[0]['value'] ?></h2>
    <div class="col-xs-12 margin-bottom-20 border">
        <div class="col-sm-12 col-md-4 margin-top-xs-20 thumbnail margin-top-20 text-center">
            <img src="<?php print file_create_url($field_durable_block_1_image_1[0]['uri']); ?>" alt="<?php print $field_durable_block_1_image_1[0]['alt']; ?>" title="<?php $field_durable_block_1_image_1[0]['title']; ?>" />
        </div>
        <div class="col-sm-12 col-md-8">
            <div class="col-xs-12 text-center"><h3><?php print $field_durable_block_1_title_1[0]['value'] ?></h3></div>
            <div class="col-xs-12">
                <?php print $field_durable_block_1_text[0]['value'] ?>
            </div>
        </div>
        <div class="col-xs-12 padding-0"><?php
            $list_raw_ids = [];
            foreach ($field_raw_captioned_picture as $item_id) {
                $list_raw_ids[] = $item_id['value']; 
            }
            $raws = entity_load('field_collection_item', $list_raw_ids);
            foreach (array_slice($raws, 0, 1) as $raw) { ?>
                <h4><?php print $raw->field_title_raw_captioned_pictur['und'][0]['value'] ?></h4><?php
                $list_captioned_picture_ids = [];
                foreach ($raw->field_captioned_picture['und'] as $item_id) {
                    $list_captioned_picture_ids[] = $item_id['value'];
                }
                $captioned_pictures = entity_load('field_collection_item', $list_captioned_picture_ids); 
                foreach ($captioned_pictures as $captioned_picture) { ?>
                    <div class="col-xs-5 col-sm-3">
                        <div class="thumbnail margin-bottom-10">
                            <img src="<?php print file_create_url($captioned_picture->field_image['und'][0]['uri']); ?>" alt="<?php print $captioned_picture->field_image['und'][0]['alt']; ?>" title="<?php $captioned_picture->field_image['und'][0]['title']; ?>" />
                        </div>
                        <p class="subtitle-pic text-center"><?php print $captioned_picture->field_caption['und'][0]['value']?></p>
                    </div><?php
                } 
            } ?>
        </div>
    </div>
    <div class="col-xs-12 margin-bottom-20 border">
        <div class="col-sm-12 col-md-4 margin-top-xs-20 thumbnail margin-top-20 text-center">
            <img src="<?php print file_create_url($field_durable_block_2_image_1[0]['uri']); ?>" alt="<?php print $field_durable_block_2_image_1[0]['alt']; ?>" title="<?php $field_durable_block_2_image_1[0]['title']; ?>" />
        </div>
        <div class="col-sm-12 col-md-8">
            <div class="col-xs-12 text-center"><h3><?php print $field_durable_block_2_title_1[0]['value'] ?></h3></div>
            <div class="col-xs-12">
                <?php print $field_durable_block_2_text[0]['value'] ?>
            </div>
        </div>
        <div class="col-xs-12 padding-0"><?php
            $list_raw_ids = [];
            foreach ($field_raw_captioned_picture as $item_id) {
                $list_raw_ids[] = $item_id['value']; 
            }
            $raws = entity_load('field_collection_item', $list_raw_ids);
            foreach (array_slice($raws, 0, 2) as $raw) { ?>
                <h4><?php print $raw->field_title_raw_captioned_pictur['und'][0]['value'] ?></h4><?php
                $list_captioned_picture_ids = [];
                foreach ($raw->field_captioned_picture['und'] as $item_id) {
                    $list_captioned_picture_ids[] = $item_id['value'];
                }
                $captioned_pictures = entity_load('field_collection_item', $list_captioned_picture_ids); 
                foreach ($captioned_pictures as $captioned_picture) { ?>
                    <div class="col-xs-5 col-sm-3">
                        <div class="thumbnail margin-bottom-10">
                            <img src="<?php print file_create_url($captioned_picture->field_image['und'][0]['uri']); ?>" alt="<?php print $captioned_picture->field_image['und'][0]['alt']; ?>" title="<?php $captioned_picture->field_image['und'][0]['title']; ?>" />
                        </div>
                        <p class="subtitle-pic text-center"><?php print $captioned_picture->field_caption['und'][0]['value']?></p>
                    </div><?php
                } 
            } ?>
        </div>
    </div>
</div>