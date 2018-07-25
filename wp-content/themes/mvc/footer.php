<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mvc
 */

?>

<div id="site_LayoutGrid28">
    <div id="LayoutGrid28">
        <div class="row">
            <div class="col-1">
                <div id="site_Text19">
                    <span id="site_uid24">2018&nbsp; © Детская развивающая студия &quot;Грамотеи&quot;<br>Все права защищены</span>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
<form name="modalka" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="modalka" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <input type="text" id="Editbox1" name="name" value="" spellcheck="false" placeholder="&#1048;&#1084;&#1103;*">
                <div id="site_Text20">
                    <span id="site_uid25">Запишитесь на занятие прямо сейчас!</span></div>
                <input type="text" id="Editbox2" name="email" value="" spellcheck="false" placeholder="Email*">
                <input type="text" id="Editbox3" name="phone" value="" spellcheck="false" placeholder="&#1058;&#1077;&#1083;&#1077;&#1092;&#1086;&#1085;">
                <select name="kurs" size="1" id="Combobox1">
                    <option selected="">Курс</option>
                    <option value="neirokor">Нейрокоррекция</option>
                    <option value="group">Группы комплексного развития детей</option>
                    <option value="tvorcheskaya">Творческая группа</option>
                    <option value="logoped">Логопед</option>
                    <option value="neirodiagnostika">Нейродиагностика</option>
                </select>
                <textarea name="message" id="TextArea1" rows="3" cols="25" spellcheck="false" placeholder="&#1057;&#1086;&#1086;&#1073;&#1097;&#1077;&#1085;&#1080;&#1077;"></textarea>
                <input type="submit" id="Button1" name="" value="ОТПРАВИТЬ">
            </div>
        </div>
    </div>
</form>
<div id="Layer1">
    <div id="site_up_st">
        <img src="images/ups.png" id="up_st" alt=""></div>
</div>

<?php wp_footer(); ?>

</body>
</html>
