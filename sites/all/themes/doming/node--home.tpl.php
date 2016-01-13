<div id="homepage" class="node-home <?php print $classes; ?> clearfix"<?php print $attributes; ?>> 
    <div class="col-xs-12 padding-0">
        <div class="col-md-6 visible-md visible-lg">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel" data-slide-to="1"></li>
                  <li data-target="#carousel" data-slide-to="2"></li>
                  <li data-target="#carousel" data-slide-to="3"></li>
                  <li data-target="#carousel" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="<?php print file_create_url($field_home_slide_1[0]['uri']); ?>" alt="<?php print $field_home_slide_1[0]['alt']; ?>" title="<?php print $field_home_slide_1[0]['title']; ?>">
                  </div>
                  <div class="item">
                    <img src="<?php print file_create_url($field_home_slide_2[0]['uri']); ?>" alt="<?php print $field_home_slide_2[0]['alt']; ?>" title="<?php print $field_home_slide_2[0]['title']; ?>">
                  </div>
                  <div class="item">
                    <img src="<?php print file_create_url($field_home_slide_3[0]['uri']); ?>" alt="<?php print $field_home_slide_3[0]['alt']; ?>" title="<?php print $field_home_slide_3[0]['title']; ?>">
                  </div>
                  <div class="item">
                    <img src="<?php print file_create_url($field_home_slide_4[0]['uri']); ?>" alt="<?php print $field_home_slide_4[0]['alt']; ?>" title="<?php print $field_home_slide_4[0]['title']; ?>">
                  </div>
                  <div class="item">
                    <img src="<?php print file_create_url($field_home_slide_5[0]['uri']); ?>" alt="<?php print $field_home_slide_5[0]['alt']; ?>" title="<?php print $field_home_slide_5[0]['title']; ?>">
                  </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-6 padding-0 text-center">
            <?php print $field_youtube_video[0]['value']; ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-xs-12 padding-0 blocks">
        <hr class="separation" />
        <a href="<?php print url("node/".$field_home_block_1_link[0]['url']) ?>" title="<?php print $field_home_block_1_link[0]['title'] ?>">
            <div class="block block-left col-xs-12 col-md-6 border">
                <div class="col-xs-12>"><h2><?php print $field_home_block_1_title[0]['value']; ?></h2></div>
                <div  class="col-xs-12 col-sm-7 margin-top-10-xs padding-0">
                    <div class="text-block"> 
                        <?php print $field_home_block_1_text[0]['value']; ?>
                    </div>
                    <p class="pull-right"><span class="glyphicon glyphicon-plus-sign"></span> <span class="link-read-more"><?php print $field_home_label_link_blocks[0]['value'] ?></span></p>
                </div>
                <div class="col-xs-12 col-sm-5 text-center thumbnail border-none">
                    <img class="margin-bottom-10" src="<?php print file_create_url($field_home_block_1_image[0]['uri']); ?>" alt="<?php print $field_home_block_1_image[0]['alt']; ?>" title="<?php print $field_home_block_1_image[0]['title']; ?>" />
                </div>
            </div>
        </a>
        <a href="<?php print url("node/".$field_home_block_2_link[0]['url']) ?>" title="<?php print $field_home_block_2_link[0]['title'] ?>">
            <div class="block block-right col-xs-12 col-md-6 border">
                <div class="col-xs-12>"><h2><?php print $field_home_block_2_title[0]['value']; ?></h2></div>
                <div class="col-xs-12 col-sm-5 text-center thumbnail border-none">
                    <img class="margin-bottom-10" src="<?php print file_create_url($field_home_block_2_image[0]['uri']); ?>" alt="<?php print $field_home_block_2_image[0]['alt']; ?>" title="<?php print $field_home_block_2_image[0]['title']; ?>"/>
                </div>
                <div  class="col-xs-12 col-sm-7">
                    <div class="text-block">
                        <?php print $field_home_block_2_text[0]['value']; ?>
                    </div>
                    <p class="pull-right"><span class="glyphicon glyphicon-plus-sign"></span> <span class="link-read-more"><?php print $field_home_label_link_blocks[0]['value'] ?></span></p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xs-12 padding-0 blocks">
        <a href="<?php print url("node/".$field_home_block_3_link[0]['url']) ?>" title="<?php print $field_home_block_3_link[0]['title'] ?>">
            <div class="block block-left col-xs-12 col-md-6 border">
                <div class="col-xs-12>"><h2><?php print $field_home_block_3_title[0]['value']; ?></h2></div>
                <div  class="col-xs-12 col-sm-7 margin-top-10-xs padding-0">
                    <div class="text-block">
                        <?php print $field_home_block_3_text[0]['value']; ?>
                    </div>
                    <p class="pull-right"><span class="glyphicon glyphicon-plus-sign"></span> <span class="link-read-more"><?php print $field_home_label_link_blocks[0]['value'] ?></span></p>
                </div>
                <div class="col-xs-12 col-sm-5 text-center thumbnail border-none">
                    <img class="margin-bottom-10" src="<?php print file_create_url($field_home_block_3_image[0]['uri']); ?>" alt="<?php print $field_home_block_3_image[0]['alt']; ?>" title="<?php print $field_home_block_3_image[0]['title']; ?>" />
                </div>
            </div>
        </a>
        <a href="<?php print url("node/".$field_home_block_4_link[0]['url']) ?>" title="<?php print $field_home_block_4_link[0]['title'] ?>">
            <div class="block block-right col-xs-12 col-md-6 border">
                <div class="col-xs-12>"><h2><?php print $field_home_block_4_title[0]['value']; ?></h2></div>
                <div class="col-xs-12 col-sm-5 text-center thumbnail border-none">
                    <img class="margin-bottom-10" src="<?php print file_create_url($field_home_block_4_image[0]['uri']); ?>" alt="<?php print $field_home_block_4_image[0]['alt']; ?>" title="<?php print $field_home_block_4_image[0]['title']; ?>"/>
                </div>
                <div  class="col-xs-12 col-sm-7">
                    <div class="text-block">
                        <?php print $field_home_block_4_text[0]['value']; ?>
                    </div>
                    <p class="pull-right"><span class="glyphicon glyphicon-plus-sign"></span> <span class="link-read-more"><?php print $field_home_label_link_blocks[0]['value'] ?></span></p>
                </div>
            </div>
        </a>
    </div><?php
    $response_xml_data = file_get_contents("https://www.qcsasia.com/rss-posts/");
    $posts = simplexml_load_string($response_xml_data) or die("Error: Cannot create object");
    if ($posts) { ?>
        <div class="col-xs-12 padding-0">
            <h3><?php print $field_home_tile_qcs_asia_posts[0]['value'] ?></h3>
        </div>
        <div class="col-xs-12 padding-0 blocks qcs-news-block"><?php
            $i = 0;
            foreach ($posts as $post) { ?>
                <a href="<?= $post->url ?>" title="<?= $post->title ?>" >
                    <div class="col-sm-3">
                        <div class="col-xs-12 thumbnail">
                            <img src="<?= $post->thumbnail_url ?>" alt="<?= $post->title ?>" title="<?= $post->title ?>" />
                        </div>
                        <div class="subtitle-pic"><?= $post->title ?></div>
                    </div>
                </a><?php
                $i++;
                if ($i == 4) { break; }
            } ?>
        </div><?php
    } ?>
</div>
<script>
    $('.carousel').carousel();
</script>