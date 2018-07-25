<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mvc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="site_LayoutGrid1">
    <div id="LayoutGrid1">
        <div class="row">
            <div class="col-1">
                <div id="site_Text3">
                    <span id="site_uid0">Детская развивающая студия &quot;Грамотеи&quot;</span>
                </div>
            </div>
            <div class="col-2">
                <div id="site_Text4">
                    <span id="site_uid1">ул.Большая Покровская, д.35, оф.207, Павловский Посад, Россия</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_LayoutGrid2">
    <div id="LayoutGrid2">
        <div class="row">
            <div class="col-1">
                <div id="site_Image1">
                    <a href="https://vk.com/club86337697"><img src="<?= get_template_directory_uri() . '/assets/images' ?>/logo3.jpg" id="Image1" alt=""></a>
                </div>
            </div>
            <div class="col-2">
                <div id="site_Text2">
                    <span id="site_uid2">Учение-без мучения!!!</span>
                </div>
                <div id="site_Image2">
                    <img src="<?= get_template_directory_uri() . '/assets/images' ?>/6657b9a240d3d1f.jpg" id="Image2" alt="">
                </div>
            </div>
            <div class="col-3">
                <div id="site_Text5">
                    <span id="site_uid3">тел. 8 926 325 41 26</span>
                </div>
                <div id="site_Shape1">
                    <a href="" onclick="$('#modalka').modal('show');return false;"><img class="hover" src="<?= get_template_directory_uri() . '/assets/images' ?>/img0001_hover.png" alt="" id="site_uid4"><span><img src="<?= get_template_directory_uri() . '/assets/images' ?>/img0001.png" id="Shape1" alt=""></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_LayoutGrid3">
    <div id="LayoutGrid3">
        <div class="row">
            <div class="col-1">
                <div id="site_ResponsiveMenu1">
                    <label class="toggle" for="ResponsiveMenu1-submenu" id="ResponsiveMenu1-title">МЕНЮ<span id="ResponsiveMenu1-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                    <input type="checkbox" id="ResponsiveMenu1-submenu">
<!--                    <ul class="ResponsiveMenu1" id="ResponsiveMenu1">-->
                        <?php
                        mvc_primary_menu();
                        ?>
<!--                        <li><a href="#">&#1054;&nbsp;&#1053;&#1040;&#1057;</a></li>-->
<!--                        <li><a href="#">&#1056;&#1040;&#1057;&#1055;&#1048;&#1057;&#1040;&#1053;&#1048;&#1045;</a></li>-->
<!--                        <li><a href="#">&#1053;&#1040;&#1064;&#1048;&nbsp;&#1059;&#1057;&#1051;&#1059;&#1043;&#1048;</a></li>-->
<!--                        <li><a href="#">&#1054;&#1058;&#1047;&#1067;&#1042;&#1067;</a></li>-->
<!--                        <li><a href="#">&#1057;&#1058;&#1040;&#1058;&#1068;&#1048;</a></li>-->
<!--                        <li><a href="#">&#1053;&#1040;&#1064;&#1048;&nbsp;&#1055;&#1045;&#1044;&#1040;&#1043;&#1054;&#1043;&#1048;</a></li>-->
<!--                        <li><a href="#">&#1060;&#1054;&#1058;&#1054;&#1043;&#1040;&#1051;&#1045;&#1056;&#1045;&#1071;</a></li>-->
<!--                    </ul>-->
                </div>
            </div>
        </div>
    </div>
</div>
