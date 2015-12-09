<?php

/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-xs-12 margin-top-20">
        <div class="col-xs-12 line-height-md-30 line-height-lg-40 text-justify padding-0">
            <img class="col-xs-12 col-sm-5 col-md-4 thumbnail pull-left margin-right-sm-20 margin-bottom-sm-10 margin-top-sm-20" src="<?php print url("/sites/default/files/about-us/about-us-photo.jpg") ?>" alt="" title="" />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                elit. Donec non felis risus. Suspendisse sit amet lectus facilisis,
                aliquam erat fermentum, dictum nisi. Ut euismod leo nulla, ut 
                convallis leo dapibus cursus. Proin consectetur magna 
                ac volutpat congue. Lorem ipsum dolor sit amet, consectetur adipiscing 
                elit. Donec non felis risus. Suspendisse sit amet lectus facilisis,
                aliquam erat fermentum, dictum nisi. Ut euismod leo nulla, ut 
                convallis leo dapibus cursus. Proin consectetur magna 
                ac volutpat congue.  Ut euismod leo nulla, ut convallis leo 
                dapibus cursus. Proin consectetur magna ac volutpat congue.
                Proin consectetur magna ac volutpat congue.  Ut euismod leo 
                nulla, ut convallis leo dapibus cursus. Proin consectetur magna 
                ac volutpat congue. Ut euismod leo nulla, ut convallis leo 
                dapibus cursus. Proin consectetur magna ac volutpat congue.
                Proin consectetur magna ac volutpat congue.  Ut euismod leo 
                nulla, ut convallis leo dapibus cursus. Proin consectetur magna 
                ac volutpat congue. Proin consectetur magna ac volutpat congue.
                Proin consectetur magna ac volutpat congue.  Ut euismod leo 
                nulla, ut convallis leo dapibus cursus. Proin consectetur magna 
                ac volutpat congue.Lorem ipsum dolor sit amet, consectetur adipiscing 
                elit. Donec non felis risus. Suspendisse sit amet lectus facilisis,
                aliquam erat fermentum, dictum nisi. Ut euismod leo nulla, ut 
                convallis leo dapibus cursus. Proin consectetur magna 
                ac volutpat congue. Lorem ipsum dolor sit amet, consectetur adipiscing 
                elit. Donec non felis risus. Suspendisse sit amet lectus facilisis,
                aliquam erat fermentum, dictum nisi. Ut euismod leo nulla, ut 
                convallis leo dapibus cursus. Proin consectetur magna 
                ac volutpat congue.  Ut euismod leo nulla, ut convallis leo 
                dapibus cursus.</p>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-12 col-md-6">
            <h3>China Factory:</h3>
            <p>
                QCS Gift Factory 高要市廣星禮品有限公司<br />
                D2 DISTRICT, JINDU, GAOYAO CITY, GUANGDONG, CHINA<br />
                中國廣東省肇慶高要市金渡鎮D2小區 ZIP: 526108<br />
                <br />
                TEL :(86.758) 8512115 FAX : (86.758) 8512145
            </p>
            <div class="col-xs-12 margin-top-20 padding-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7230.54675302562!2d121.549209!3d25.024795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aa312edd7919%3A0x77aac31886f14be4!2sLane+228%2C+Section+3%2C+Heping+E+Rd%2C+Da%E2%80%99an+District%2C+Taipei+City%2C+Ta%C3%AFwan+106!5e0!3m2!1sfr!2stw!4v1448511609490" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <h3>Taiwan head office :</h3>
            <p>
                QCS ASIA CO. ,LTD 台灣妍品有限公司<br />
                5F-8, 63 HEPING E. RD , SEC3 TAIPEI TAIWAN<br />
                台北市和平東路3段63號5樓之8 (嘉樂大樓)<br />
                <br />
                TEL : (886-2) 27385787 FAX : (886-2)27385816
            </p>
            <div class="col-xs-12 margin-top-20 padding-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.455377450762!2d112.52200431537644!3d23.043760921317396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDAyJzM3LjUiTiAxMTLCsDMxJzI3LjEiRQ!5e0!3m2!1sfr!2stw!4v1448518944612" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
