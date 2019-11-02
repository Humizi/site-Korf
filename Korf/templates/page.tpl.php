<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div class="container">
  <header class="block block-page-header">
    <section class="ph-content block block-content">
      <div class="row no-gutters">
        <div class="col-12 col-xl-3">
        <?php if (!drupal_is_front_page()): ?>
          <a href="http://korf.loc/">
            <h2 class="c-title">Корфовская</h2>
          </a>
        <?php else: ?>
          <div>
            <h2 class="c-title">Корфовская</h2>
          </div>
        <?php endif; ?>
        </div>
          
        <div class="col-9 col-xl-5 offset-xl-1">
          <article class="c-call block block-call">
            <div class="call-half">
              <p class="call-title">Единая справочная</p>
              <p class="call-number">
                <?=variable_get('site_phone', ''); ?>
              </p>
            </div>
            <a class="call-link" href="#"><span class="call-btn--wrap">Обратный звонок</span></a>
          </article>
        </div>
          
        <div class="col-3 col-xl-2 offset-xl-1">
          <?=render_block('mr_sb', 'cart'); ?>
        </div>
      </div>
    </section>

    <nav class="ph-navigation block block-navigation">
       <div class="row no-gutters">
          <div class="col-xl-2">
            <a class="btn-link-width-165 n-catalog" href="http://korf.loc/product">Каталог</a>
          </div>

          <div class="col-xl-8 offset-xl-2">
            <?
              $menu = menu_tree('main-menu');
              print render($menu);
            ?>
          </div>
        </div>
    </nav>
  </header>

    <?=$messages; ?>

    <? if ($breadcrumb): ?>
      <?=$breadcrumb; ?>
    <? endif; ?>
    
    <?=render($page['content']); ?>

  <footer class="block block-page-footer">
    <nav class="ph-navigation block block-navigation">
      <div class="row no-gutters">
        <div class="col-xl-2">
          <a class="btn-link-width-165 n-catalog" href="http://korf.loc/product">Каталог</a>
        </div>

        <div class="col-xl-8 offset-xl-2">
          <?
            $menu = menu_tree('main-menu');
            print render($menu);
          ?>
        </div>
      </div>
    </nav>

    <section class="ph-content block block-content">
      <div class="row no-gutters">
        <div class="col-12 col-xl-3">
          <a href="http://korf.loc/">
            <h2 class="c-title">Корфовская</h2>
          </a>
        </div>
        
        <div class="col-9 col-xl-5 offset-xl-1">
          <article class="c-call block block-call">
            <div class="call-half">
              <p class="call-title">Единая справочная</p>
              <p class="call-number">
                <?=variable_get('site_phone', ''); ?>
              </p>
            </div>
            <a class="call-link" href="#"><span class="call-btn--wrap">Обратный звонок</span></a>
          </article>
        </div>
        
        <div class="col-3 col-xl-2 offset-xl-1">
          <?=render_block('mr_sb', 'cart'); ?>
        </div>
      </div>
    </section>
  </footer>
</div>