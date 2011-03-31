<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
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
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
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
 * - $page['highlight']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<div id="main-wrapper">
	<div class="container_12">
		<header class="grid_12">
			<div id="left-fold-bg"></div>
			<div id="left-extend-bg"></div>
			<div id="tadagift-logo"></div>
			<nav>
				<div id="header-gift-container" class="header-selected"><a href="#">Gifts</a></div>
				<div id="header-people-container"><a href="#">People</a></div>
			</nav>
			
			<div id="header-right-control">
				<div id="header-welcome">Welcome Felix!</div>
				<div id="header-account-bal-container"><div id="header-account-bal">$50</div></div>
				<a href="#" class="black button">Account</a>
				<a href="#" class="black button">Logout</a>
			</div>
			
			<div id="right-extend-bg"></div>
			<div id="right-fold-bg"></div>
		</header>
		<div class="clear"></div>
		<div id="gift-list-main-container" class="main-container">
			<nav class="grid_2 category">
				<h4 class="container-header">Select Category</h4>
				<ul class="category-list">
<!--
					<li class="back">
						<div id="category-list-left-fold"></div>
						<span>&lt; All</span>
						<div id="category-list-right-fold"></div>
					</li>
-->
					<li>Home</li>
					<li class='selected'>Computer and Office</li>
					<li>Garden</li>
					<li>Groceries</li>
				</ul>
			</nav>
			<div class="grid_8 main">
				<h4 class="container-header">Select Gift for ...</h4>
				<div class="selected-item" id="gift">
					<div class="image-container"><img src="http://placekitten.com/64/128" alt="" class="" /></div>
					<p class="item-name">John Doe <span>(johndoe)</span></p>
					<div id="deselect-item-button" class="button red">X Deselect this person</div>
				</div>
				<div id="gift-list-container">
					<ul id="gift-list">
						<li class="gift-item-container">
							<div class="image-container"><img src="http://placekitten.com/200/300" alt="" class="" /></div>
							<div class="gift-item-main">
								<h4 class="gift-name">Really really cute cat</h4>
								<p class="gift-price">$10.00</p>
								<div class="star-rating-container">
									<div class="star-rating"></div>
									<div class="star-rating"></div>
									<div class="star-rating"></div>
									<div class="star-rating"></div>
								</div>
								<div class="button yellow send-gift">Send gift</div>
								<div class="button yellow wishlist-gift">Add to wishlist</div>
								<div class="button yellow sendlist-gift">Add to sendlist</div>
							</div>
							<div class="gift-item-people-detail">
								<p class="people-want">
									<span class="people">John Doe</span>, 
									<span class="people">John Doe</span> and 
									<span class="people">John Doe</span>
									are interested in this item.
								</p>
								<p class="people-category">
									<span class="people">John Doe</span>, 
									<span class="people">John Doe</span> and 
									<span class="people">John Doe</span>
									are interested in 
									<span class="category">Kitten</span> and 
									<span class="category">Animal</span>.
								</p>
							</div>
						</li>
						<li class="gift-item-container">
							<div class="image-container"><img src="http://placekitten.com/200/300" alt="" class="" /></div>
							<div class="gift-item-main">
								<h4 class="gift-name">Really really cute cat</h4>
								<p class="gift-price">$10.00</p>
								<div class="star-rating-container">
									<div class="star-rating"></div>
									<div class="star-rating"></div>
									<div class="star-rating"></div>
									<div class="star-rating"></div>
								</div>
								<a href="#" class="button yellow send-gift">Send gift</a>
								<a href="#" class="button yellow wishlist-gift">Add to wishlist</a>
								<a href="#" class="button yellow sendlist-gift">Add to sendlist</a>
							</div>
							<div class="gift-item-people-detail">
								<p class="people-want">
									<span class="people">John Doe</span>, 
									<span class="people">John Doe</span> and 
									<span class="people">John Doe</span>
									are interested in this item.
								</p>
								<p class="people-category">
									<span class="people">John Doe</span>, 
									<span class="people">John Doe</span> and 
									<span class="people">John Doe</span>
									are interested in 
									<span class="category">Kitten</span> and 
									<span class="category">Animal</span>.
								</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="grid_2 filter">
				<h4 class="container-header">Filter Gifts</h4>
			</div>
			<div class="clear"></div>
		</div><!-- end main-container -->
		<div class="clear"></div>
	</div><!-- end container-12 -->
</div><!-- end wrapper -->