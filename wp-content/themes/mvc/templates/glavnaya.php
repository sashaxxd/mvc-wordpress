<?php
/*
Template Name: Шаблон для главной
Template Post Type: post, page, product
*/

?>
<?php

get_header();
// Регистрация jQuery
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );

?>

    <div id="site_LayoutGrid29">
    <div id="LayoutGrid29">
        <div class="row">
            <div class="col-1">
                <div id="site_Text21">
                    <span id="site_uid5"><?= the_title();  ?></span>
                </div>
                <div id="site_LayoutGrid30">
                    <div id="LayoutGrid30">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_LayoutGrid5">
    <div id="LayoutGrid5">
        <div class="row">
            <div class="col-1">
                <div id="site_Text7">
                    <span id="site_uid6">
                        <?php while( have_posts() ) : the_post();
                            $more = 1; // отображаем полностью всё содержимое поста
//                            the_title(); // эта функция выводит заголовок
                            the_content(); // выводим контент
                        endwhile; ?>
                    </span>
                </div>
            </div>
            <div class="col-2">
                <ul id="SlideShow1">
                    <li><img class="image" src="<?= get_template_directory_uri() . '/assets/images' ?>/27YZH4ADwBE.jpg" alt="" title=""></li>
                    <li><img class="image" src="<?= get_template_directory_uri() . '/assets/images' ?>/cPXaSfcUXPk.jpg" id="site_uid7" alt="" title=""></li>
                    <li><img class="image" src="<?= get_template_directory_uri() . '/assets/images' ?>/s7yGgeyDtxc.jpg" id="site_uid8" alt="" title=""></li>
                    <div id="SlideShow1_back"><a id="site_uid9"><img alt="Back" id="site_uid10" src="<?= get_template_directory_uri() . '/assets/images' ?>/left_b.jpg"></a></div>
                    <div id="SlideShow1_next"><a id="site_uid11"><img alt="Next" id="site_uid12" src="<?= get_template_directory_uri() . '/assets/images' ?>/right_b.png"></a></div>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="site_LayoutGrid4">
    <div id="LayoutGrid4">
        <div class="row">
            <div class="col-1">
                <div id="site_Text8">
                    <span id="site_uid13">НАШИ УСЛУГИ</span>
                </div>
                <div id="site_LayoutGrid13">
                    <div id="LayoutGrid13">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_LayoutGrid6">
    <div id="LayoutGrid6">
        <div class="row">
            <div class="col-1">
                <div id="site_LayoutGrid7">
                    <div id="LayoutGrid7">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text9">
                                    <span id="site_uid14">Нейрокоррекция</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid12">
                    <div id="LayoutGrid12">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Image5">
                                    <a href="https://vk.com/club86337697"><img src="<?= get_template_directory_uri() . '/assets/images' ?>/Re3XP2njIlA.jpg" id="Image5" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid14">
                    <div id="LayoutGrid14">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div id="site_LayoutGrid9">
                    <div id="LayoutGrid9">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text10">
                                    <span id="site_uid15">Группы комплексного развития детей </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid10">
                    <div id="LayoutGrid10">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Image3">
                                    <a href="https://vk.com/club86337697"><img src="<?= get_template_directory_uri() . '/assets/images' ?>/okJBjNi5a4M.jpg" id="Image3" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid15">
                    <div id="LayoutGrid15">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div id="site_LayoutGrid11">
                    <div id="LayoutGrid11">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text11">
                                    <span id="site_uid16">Творческая группа</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid8">
                    <div id="LayoutGrid8">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Image4">
                                    <a href="https://vk.com/club86337697"><img src="<?= get_template_directory_uri() . '/assets/images' ?>/zjWB6qWdFWg.jpg" id="Image4" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid16">
                    <div id="LayoutGrid16">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_LayoutGrid17">
    <div id="LayoutGrid17">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
                <div id="site_LayoutGrid18">
                    <div id="LayoutGrid18">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text12">
                                    <span id="site_uid17">Логопед</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid23">
                    <div id="LayoutGrid23">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Image6">
                                    <a href="https://vk.com/club86337697"><img src="<?= get_template_directory_uri() . '/assets/images' ?>/SpeechTherapy2-1.jpg" id="Image6" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid25">
                    <div id="LayoutGrid25">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div id="site_LayoutGrid20">
                    <div id="LayoutGrid20">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text14">
                                    <span id="site_uid18">Нейродиагностика</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid21">
                    <div id="LayoutGrid21">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Image7">
                                    <a href="https://vk.com/club86337697"><img src="<?= get_template_directory_uri() . '/assets/images' ?>/bVWsq28vggM.jpg" id="Image7" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid24">
                    <div id="LayoutGrid24">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>
</div>
<div id="site_LayoutGrid19">
    <div id="LayoutGrid19">
        <div class="row">
            <div class="col-1">
                <div id="site_Text13">
                    <span id="site_uid19">КОНТАКТЫ</span>
                </div>
                <div id="site_LayoutGrid22">
                    <div id="LayoutGrid22">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_LayoutGrid26">
    <div id="LayoutGrid26">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
                <div id="site_Image8">
                    <a href="https://vk.com/club86337697"><img src="<?= get_template_directory_uri() . '/assets/images' ?>/768px-VK.com-logo.svg.png" id="Image8" alt=""></a>
                </div>
            </div>
            <div class="col-3">
                <div id="site_Text16">
                    <span id="site_uid20">Телефон: <br>8 926 325 41 26</span>
                </div>
            </div>
            <div class="col-4">
                <div id="site_Text17">
                    <span id="site_uid21">Почта: danna.pp@yandex.ru</span>
                </div>
            </div>
            <div class="col-5">
                <div id="site_Text18">
                    <span id="site_uid22">Адрес: ул.Большая Покровская, д.35, оф.207, Павловский Посад, Россия</span>
                </div>
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
</div>
<div id="site_LayoutGrid27">
    <div id="LayoutGrid27">
        <div class="row">
            <div class="col-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.2157308581495!2d38.65148321618978!3d55.77212498055854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ae08d008515d7%3A0xb040e295503ac113!2z0YPQuy4g0JHQvtC70YzRiNCw0Y8g0J_QvtC60YDQvtCy0YHQutCw0Y8sIDM1LCDQn9Cw0LLQu9C-0LLRgdC60LjQuSDQn9C-0YHQsNC0LCDQnNC-0YHQutC-0LLRgdC60LDRjyDQvtCx0LsuLCDQoNC-0YHRgdC40Y8sIDE0MjUwMg!5e0!3m2!1sru!2sby!4v1531388278270" width="100%" height="600" frameborder="0" id="site_uid23" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

<?php
get_sidebar();
get_footer();