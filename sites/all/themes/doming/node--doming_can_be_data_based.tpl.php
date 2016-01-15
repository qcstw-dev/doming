<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-xs-12 text-center padding-0">
        <h2><?= $title ?></h2>
    </div>
    <div class="col-xs-12 text-justify"><?php
        print $field_databased_text[0]['value'] ?>
    </div>
    <div class="col-xs-12  padding-0"><?php
            $list_captioned_pictures_ids = [];
            foreach ($field_captioned_picture as $item_id) {
                $list_captioned_pictures_ids[] = $item_id['value']; 
            }
            $captioned_pictures = entity_load('field_collection_item', $list_captioned_pictures_ids);
            foreach ($captioned_pictures as $captioned_picture) { ?>
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail margin-auto">
                        <img src="<?php print file_create_url($captioned_picture->field_image['und'][0]['uri']) ?>" alt="<?php print $captioned_picture->field_image['und'][0]['alt'] ?>" title="<?php print $captioned_picture->field_image['und'][0]['title'] ?>">
                    </div>
                    <p class="subtitle-pic margin-top-10"><?php print $captioned_picture->field_caption['und'][0]['value'] ?></p>
                </div><?php                
            } ?>
    </div>
</div>
