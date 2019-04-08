<?php
/**
* The file for displaying the sidebars.
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div class="coolwp-sidebar-one-wrapper coolwp-sidebar-widget-areas clearfix" id="coolwp-sidebar-one-wrapper" itemscope="itemscope" itemtype="http://schema.org/WPSideBar" role="complementary">
<div class="theiaStickySidebar">
<div class="coolwp-sidebar-one-wrapper-inside clearfix">

<?php dynamic_sidebar( 'coolwp-sidebar-one' ); ?>

</div>
</div>
</div><!-- /#coolwp-sidebar-one-wrapper-->

<div class="coolwp-sidebar-two-wrapper coolwp-sidebar-widget-areas clearfix" id="coolwp-sidebar-two-wrapper" itemscope="itemscope" itemtype="http://schema.org/WPSideBar" role="complementary">
<div class="theiaStickySidebar">
<div class="coolwp-sidebar-two-wrapper-inside clearfix">

<?php dynamic_sidebar( 'coolwp-sidebar-two' ); ?>

</div>
</div>
</div><!-- /#coolwp-sidebar-two-wrapper-->