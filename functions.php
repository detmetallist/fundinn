<?php
// Добавляем поддержку меню
if (function_exists('add_theme_support')) {
add_theme_support('menus');
}
// Регистрируем наши меню
register_nav_menus(array(
    'top-menu' => 'for-top-menu',
    'bottom-menu' => 'for-bottom-menu'
));

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 350, 180, true );
add_image_size( 'spec_thumb', 350, 180, true );
add_image_size( 'home1_thumb', 555, 317, true );
add_image_size( 'home2_thumb', 138, 133, true );

function get_date($date){
    $mounth = date("m");
    if ($mounth == '01'){echo ' янв ';} if ($mounth == '02'){echo ' фев ';}
    if ($mounth == ' 03'){echo ' марта ';} if ($mounth == '04'){echo ' апр ';}
    if ($mounth == '05'){echo ' мая ';} if ($mounth == '06'){echo ' июня ';}
    if ($mounth == '07'){echo ' июля ';} if ($mounth == '08'){echo ' авг ';}
    if ($mounth == '09'){echo ' сент ';} if ($mounth == '10'){echo ' окт ';}
    if ($mounth == '11'){echo ' нояб ';} if ($mounth == '12'){echo ' дек ';}
}

add_action('add_meta_boxes', 'my_extra_fields', 1);
function load_custom_wp_admin_style() {
    wp_enqueue_script( 'my_custom_script', get_template_directory_uri() . '/js/my_admin_script.js' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

function my_extra_fields() {
    global $post;
    if ( $post->ID==6 ) {
        add_meta_box( 'extra_fields', 'Параметры главной', 'extra_fields_mainpage_func', 'page', 'normal', 'high'  );
    }
}

function extra_fields_mainpage_func( $post ){
    ?>
    <style>
        .edit-post-visual-editor{
            display: none;
        }
        .admblock h2{
            font-weight: bold !important;
            font-size: 18px !important;
        }
        .admblock p{
            margin-bottom: 0;
            margin-top: 5px;
        }
        .many_items{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
        }
        .many_items .item{
            width: calc(50% - 10px);
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 5px;
            padding-right: 5px;
        }
        .tri_items, .four_items{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .tri_items .item{
            width: calc(33% - 10px);
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 5px;
            padding-right: 5px;
        }
        .four_items .item{
            width: calc(25% - 10px);
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 5px;
            padding-right: 5px;
        }
        .slides_images{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
        }
        .slides_images .item{
            width: calc(20% - 10px);
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 5px;
            padding-right: 5px;
        }
        .slides_images .item img{
            width: 100% !important;
            height: auto !important;
        }
        .slides_images .item input, .slides_images .item button{
            width: 100%;
            cursor: pointer;
            padding-left: 0;
            padding-right: 0;
        }
        .ekran5, .ekran9{
            display: none;
        }
    </style>
    <div class="admblock">
        <h2>Главный экран</h2>
        <p><b>Заголовок</b></p>
        <input  type="text" name="extra[zagolovok]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok', 1);?>" placeholder="Заголовок"/><br>
        <p><b>Подзаголовок</b></p>
        <input  type="text" name="extra[podzagolovok]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok', 1);?>" placeholder="Подзаголовок"/><br>
        <p><b>Название кнопки</b></p>
        <input type="text" name="extra[button1_name]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'button1_name', 1);?>" placeholder="Название кнопки"/><br>
        <p><b>Ссылка кнопки</b></p>
        <input  type="text" name="extra[button1_href]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'button1_href', 1);?>" placeholder="Ссылка кнопки"/><br>
        <hr>
        <h2>Экран "Платформа выгодного сотрудничества"</h2>
        <p><b>Заголовок</b></p>
        <input  type="text" name="extra[zagolovok3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok3', 1);?>" placeholder="Заголовок"/><br>
        <p><b>Текст</b></p>
        <textarea wrap="soft" rows="4" name="extra[text3]" style="width: 100%"><?php echo get_post_meta($post->ID, 'text3', 1);?></textarea>
        <p><b>Названия значков icofont смотреть <a href="https://icofont.com/icons" target="_blank">тут</a>.</b></p>
        <div class="many_items">
            <div class="item">
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok3_item1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok3_item1', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok3_item1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok3_item1', 1);?>" placeholder="Подзаголовок"/><br>
                <p><b>Название значка icofont</b></p>
                <input  type="text" name="extra[znachok3_item1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok3_item1', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok3_item2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok3_item2', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok3_item2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok3_item2', 1);?>" placeholder="Подзаголовок"/><br>
                <p><b>Название значка icofont</b></p>
                <input  type="text" name="extra[znachok3_item2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok3_item2', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok3_item3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok3_item3', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok3_item3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok3_item3', 1);?>" placeholder="Подзаголовок"/><br>
                <p><b>Название значка icofont</b></p>
                <input  type="text" name="extra[znachok3_item3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok3_item3', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok3_item4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok3_item4', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok3_item4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok3_item4', 1);?>" placeholder="Подзаголовок"/><br>
                <p><b>Название значка icofont</b></p>
                <input  type="text" name="extra[znachok3_item4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok3_item4', 1);?>" placeholder="Значок"/><br>
            </div>
        </div>
        <hr>
        <h2>Экран "От идеи к успешному бизнесу"</h2>
        <p><b>Заголовок</b></p>
        <input  type="text" name="extra[zagolovok2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok2', 1);?>" placeholder="Заголовок"/><br>
        <p><b>Подзаголовок</b></p>
        <input  type="text" name="extra[podzagolovok2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok2', 1);?>" placeholder="Подзаголовок"/><br>
        <p><b>Названия значков font-awesome смотреть <a href="https://fontawesome.ru/all-icons/" target="_blank">тут</a>.</b></p>
        <div class="many_items">
            <div class="item">
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item1', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok_item1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok_item1', 1);?>" placeholder="Подзаголовок"/><br>
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item1', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item2', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok_item2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok_item2', 1);?>" placeholder="Подзаголовок"/><br>
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item2', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item3', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok_item3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok_item3', 1);?>" placeholder="Подзаголовок"/><br>
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item3', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item4', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok_item4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok_item4', 1);?>" placeholder="Подзаголовок"/><br>
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item4', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item5]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item5', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok_item5]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok_item5', 1);?>" placeholder="Подзаголовок"/><br>
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item5]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item5', 1);?>" placeholder="Значок"/><br>
            </div>
        </div>
        <p><b>Название кнопки</b></p>
        <input type="text" name="extra[button_idea_name]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'button_idea_name', 1);?>" placeholder="Название кнопки"/><br>
        <p><b>Ссылка кнопки</b></p>
        <input  type="text" name="extra[button_idea_href]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'button_idea_href', 1);?>" placeholder="Ссылка кнопки"/><br>
        <hr>
        <h2>Экран статистики</h2>
        <p><b>Названия значков font-awesome смотреть <a href="https://fontawesome.ru/all-icons/" target="_blank">тут</a>.</b></p>
        <div class="four_items">
            <div class="item">
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item_stat1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item_stat1', 1);?>" placeholder="Значок"/><br>
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item_stat1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item_stat1', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Число</b></p>
                <input  type="text" name="extra[chislo_item_stat1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'chislo_item_stat1', 1);?>" placeholder="Число"/><br>
            </div>
            <div class="item">
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item_stat2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item_stat2', 1);?>" placeholder="Значок"/><br>
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item_stat2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item_stat2', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Число</b></p>
                <input  type="text" name="extra[chislo_item_stat2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'chislo_item_stat2', 1);?>" placeholder="Число"/><br>
            </div>
            <div class="item">
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item_stat3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item_stat3', 1);?>" placeholder="Значок"/><br>
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item_stat3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item_stat3', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Число</b></p>
                <input  type="text" name="extra[chislo_item_stat3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'chislo_item_stat3', 1);?>" placeholder="Число"/><br>
            </div>
            <div class="item">
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item_stat4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item_stat4', 1);?>" placeholder="Значок"/><br>
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item_stat4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item_stat4', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Число</b></p>
                <input  type="text" name="extra[chislo_item_stat4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'chislo_item_stat4', 1);?>" placeholder="Число"/><br>
            </div>
        </div>
        <hr>
        <h2>Экран "Все составляющие успеха"</h2>
        <p><b>Заголовок</b></p>
        <input  type="text" name="extra[zagolovok4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok4', 1);?>" placeholder="Заголовок"/><br>
        <p><b>Текст</b></p>
        <textarea wrap="soft" rows="4" name="extra[text4]" style="width: 100%"><?php echo get_post_meta($post->ID, 'text4', 1);?></textarea>
        <p><b>Названия значков font-awesome смотреть <a href="https://fontawesome.ru/all-icons/" target="_blank">тут</a>.</b></p>
        <div class="tri_items">
            <div class="item">
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item4_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item4_1', 1);?>" placeholder="Значок"/><br>
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item4_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item4_1', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok_item4_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok_item4_1', 1);?>" placeholder="Подзаголовок"/><br>
            </div>
            <div class="item">
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item4_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item4_2', 1);?>" placeholder="Значок"/><br>
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item4_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item4_2', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok_item4_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok_item4_2', 1);?>" placeholder="Подзаголовок"/><br>
            </div>
            <div class="item">
                <p><b>Название значка font-awesome</b></p>
                <input  type="text" name="extra[znachok_item4_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'znachok_item4_3', 1);?>" placeholder="Значок"/><br>
                <p><b>Заголовок</b></p>
                <input  type="text" name="extra[zagolovok_item4_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok_item4_3', 1);?>" placeholder="Заголовок"/><br>
                <p><b>Подзаголовок</b></p>
                <input  type="text" name="extra[podzagolovok_item4_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok_item4_3', 1);?>" placeholder="Подзаголовок"/><br>
            </div>
        </div>
        <!--<p><b>Ссылка на видео</b></p>
        <input  type="text" name="extra[video4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'video4', 1);?>" placeholder="Ссылка на видео"/><br> -->
        <h2>Заполните слайд</h2>
        <p><b>Текст</b></p>
        <textarea wrap="soft" rows="4" name="extra[slide_text]" style="width: 100%"><?php echo get_post_meta($post->ID, 'slide_text', 1);?></textarea>
        <p><b>Имя</b></p>
        <input  type="text" name="extra[sliade_chuvak_name]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'sliade_chuvak_name', 1);?>" placeholder="Имя"/><br>
        <p><b>Компания</b></p>
        <input  type="text" name="extra[sliade_chuvak_company]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'sliade_chuvak_company', 1);?>" placeholder="Компания"/><br>
        <input id="image-url11" type="hidden" name="extra[slide_chuvak_1]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide_chuvak_1', 1);?>"/><br>
        <input    role="11" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
        <div id="upli11">
        <?php if(get_post_meta($post->ID, 'slide_chuvak_1', true)):?>
        <?php $img=get_post_meta($post->ID, 'slide_chuvak_1', 1); $src = wp_get_attachment_image_src( $img,'full');?>
        <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
        <?php endif;?> 
        </div><!-- upli -->
        <?php if(get_post_meta($post->ID, 'slide_chuvak_1', true)):?>
        <br />
        <button  class="delete btn" role="11">Удалить</button>
        <?php endif;?>
        <hr>
        <h2>Экран "Экспертный совет"</h2>
        <p><b>Заголовок</b></p>
        <input  type="text" name="extra[zagolovok8]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok8', 1);?>" placeholder="Заголовок"/><br>
        <p><b>Текст</b></p>
        <textarea wrap="soft" rows="4" name="extra[text8]" style="width: 100%"><?php echo get_post_meta($post->ID, 'text8', 1);?></textarea>
        <p><b>Названия значков font-awesome смотреть <a href="https://fontawesome.ru/all-icons/" target="_blank">тут</a>.</b></p>
        <div class="slides_images">
            <div class="item">
                <input id="image-url12" type="hidden" name="extra[slide_expert_1]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide_expert_1', 1);?>"/><br>
                <input    role="12" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli12">
                <?php if(get_post_meta($post->ID, 'slide_expert_1', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide_expert_1', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide_expert_1', true)):?>
                <br />
                <button  class="delete btn" role="12">Удалить</button>
                <?php endif;?>
                <p><b>Имя</b></p>
                <input  type="text" name="extra[slide_expert_name1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_name1', 1);?>" placeholder="Имя"/><br>
                <p><b>Специальность</b></p>
                <input  type="text" name="extra[slide_expert_spec1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_spec1', 1);?>" placeholder="Специальность"/><br>
                <p><b>Соц ссылка 1</b></p>
                <input  type="text" name="extra[slide_expert_soc_1_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_1_1', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_1_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_1_1', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 2</b></p>
                <input  type="text" name="extra[slide_expert_soc_1_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_1_2', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_1_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_1_2', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 3</b></p>
                <input  type="text" name="extra[slide_expert_soc_1_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_1_3', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_1_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_1_3', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 4</b></p>
                <input  type="text" name="extra[slide_expert_soc_1_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_1_4', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_1_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_1_4', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <input id="image-url13" type="hidden" name="extra[slide_expert_2]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide_expert_2', 1);?>"/><br>
                <input    role="13" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli13">
                <?php if(get_post_meta($post->ID, 'slide_expert_2', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide_expert_2', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide_expert_2', true)):?>
                <br />
                <button  class="delete btn" role="13">Удалить</button>
                <?php endif;?>
                <p><b>Имя</b></p>
                <input  type="text" name="extra[slide_expert_name2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_name2', 1);?>" placeholder="Имя"/><br>
                <p><b>Специальность</b></p>
                <input  type="text" name="extra[slide_expert_spec2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_spec2', 1);?>" placeholder="Специальность"/><br>
                <p><b>Соц ссылка 1</b></p>
                <input  type="text" name="extra[slide_expert_soc_2_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_2_1', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_2_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_2_1', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 2</b></p>
                <input  type="text" name="extra[slide_expert_soc_2_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_2_2', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_2_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_2_2', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 3</b></p>
                <input  type="text" name="extra[slide_expert_soc_2_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_2_3', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_2_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_2_3', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 4</b></p>
                <input  type="text" name="extra[slide_expert_soc_2_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_2_4', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_2_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_2_4', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <input id="image-url14" type="hidden" name="extra[slide_expert_3]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide_expert_3', 1);?>"/><br>
                <input    role="14" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli14">
                <?php if(get_post_meta($post->ID, 'slide_expert_3', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide_expert_3', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide_expert_3', true)):?>
                <br />
                <button  class="delete btn" role="14">Удалить</button>
                <?php endif;?>
                <p><b>Имя</b></p>
                <input  type="text" name="extra[slide_expert_name3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_name3', 1);?>" placeholder="Имя"/><br>
                <p><b>Специальность</b></p>
                <input  type="text" name="extra[slide_expert_spec3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_spec3', 1);?>" placeholder="Специальность"/><br>
                <p><b>Соц ссылка 1</b></p>
                <input  type="text" name="extra[slide_expert_soc_3_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_3_1', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_3_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_3_1', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 2</b></p>
                <input  type="text" name="extra[slide_expert_soc_3_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_3_2', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_3_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_3_2', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 3</b></p>
                <input  type="text" name="extra[slide_expert_soc_3_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_3_3', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_3_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_3_3', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 4</b></p>
                <input  type="text" name="extra[slide_expert_soc_3_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_3_4', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_3_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_3_4', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <input id="image-url15" type="hidden" name="extra[slide_expert_4]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide_expert_4', 1);?>"/><br>
                <input    role="15" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli15">
                <?php if(get_post_meta($post->ID, 'slide_expert_4', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide_expert_4', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide_expert_4', true)):?>
                <br />
                <button  class="delete btn" role="15">Удалить</button>
                <?php endif;?>
                <p><b>Имя</b></p>
                <input  type="text" name="extra[slide_expert_name4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_name4', 1);?>" placeholder="Имя"/><br>
                <p><b>Специальность</b></p>
                <input  type="text" name="extra[slide_expert_spec4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_spec4', 1);?>" placeholder="Специальность"/><br>
                <p><b>Соц ссылка 1</b></p>
                <input  type="text" name="extra[slide_expert_soc_4_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_4_1', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_4_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_4_1', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 2</b></p>
                <input  type="text" name="extra[slide_expert_soc_4_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_4_2', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_4_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_4_2', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 3</b></p>
                <input  type="text" name="extra[slide_expert_soc_4_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_4_3', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_4_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_4_3', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 4</b></p>
                <input  type="text" name="extra[slide_expert_soc_4_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_4_4', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_4_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_4_4', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <input id="image-url16" type="hidden" name="extra[slide_expert_5]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide_expert_5', 1);?>"/><br>
                <input    role="16" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli16">
                <?php if(get_post_meta($post->ID, 'slide_expert_5', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide_expert_5', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide_expert_5', true)):?>
                <br />
                <button  class="delete btn" role="16">Удалить</button>
                <?php endif;?>
                <p><b>Имя</b></p>
                <input  type="text" name="extra[slide_expert_name5]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_name5', 1);?>" placeholder="Имя"/><br>
                <p><b>Специальность</b></p>
                <input  type="text" name="extra[slide_expert_spec5]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_spec5', 1);?>" placeholder="Специальность"/><br>
                <p><b>Соц ссылка 1</b></p>
                <input  type="text" name="extra[slide_expert_soc_5_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_5_1', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_5_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_5_1', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 2</b></p>
                <input  type="text" name="extra[slide_expert_soc_5_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_5_2', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_5_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_5_2', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 3</b></p>
                <input  type="text" name="extra[slide_expert_soc_5_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_5_3', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_5_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_5_3', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 4</b></p>
                <input  type="text" name="extra[slide_expert_soc_5_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_5_4', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_5_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_5_4', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <input id="image-url17" type="hidden" name="extra[slide_expert_6]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide_expert_6', 1);?>"/><br>
                <input    role="17" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli17">
                <?php if(get_post_meta($post->ID, 'slide_expert_6', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide_expert_6', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide_expert_6', true)):?>
                <br />
                <button  class="delete btn" role="17">Удалить</button>
                <?php endif;?>
                <p><b>Имя</b></p>
                <input  type="text" name="extra[slide_expert_name6]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_name6', 1);?>" placeholder="Имя"/><br>
                <p><b>Специальность</b></p>
                <input  type="text" name="extra[slide_expert_spec6]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_spec6', 1);?>" placeholder="Специальность"/><br>
                <p><b>Соц ссылка 1</b></p>
                <input  type="text" name="extra[slide_expert_soc_6_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_6_1', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_6_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_6_1', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 2</b></p>
                <input  type="text" name="extra[slide_expert_soc_6_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_6_2', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_6_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_6_2', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 3</b></p>
                <input  type="text" name="extra[slide_expert_soc_6_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_6_3', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_6_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_6_3', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 4</b></p>
                <input  type="text" name="extra[slide_expert_soc_6_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_6_4', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_6_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_6_4', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <input id="image-url18" type="hidden" name="extra[slide_expert_7]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide_expert_7', 1);?>"/><br>
                <input    role="18" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli18">
                <?php if(get_post_meta($post->ID, 'slide_expert_7', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide_expert_7', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide_expert_7', true)):?>
                <br />
                <button  class="delete btn" role="18">Удалить</button>
                <?php endif;?>
                <p><b>Имя</b></p>
                <input  type="text" name="extra[slide_expert_name7]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_name7', 1);?>" placeholder="Имя"/><br>
                <p><b>Специальность</b></p>
                <input  type="text" name="extra[slide_expert_spec7]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_spec7', 1);?>" placeholder="Специальность"/><br>
                <p><b>Соц ссылка 1</b></p>
                <input  type="text" name="extra[slide_expert_soc_7_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_7_1', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_7_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_7_1', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 2</b></p>
                <input  type="text" name="extra[slide_expert_soc_7_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_7_2', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_7_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_7_2', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 3</b></p>
                <input  type="text" name="extra[slide_expert_soc_7_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_7_3', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_7_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_7_3', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 4</b></p>
                <input  type="text" name="extra[slide_expert_soc_7_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_7_4', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_7_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_7_4', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <input id="image-url19" type="hidden" name="extra[slide_expert_8]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide_expert_8', 1);?>"/><br>
                <input    role="19" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli19">
                <?php if(get_post_meta($post->ID, 'slide_expert_8', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide_expert_8', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide_expert_8', true)):?>
                <br />
                <button  class="delete btn" role="19">Удалить</button>
                <?php endif;?>
                <p><b>Имя</b></p>
                <input  type="text" name="extra[slide_expert_name8]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_name8', 1);?>" placeholder="Имя"/><br>
                <p><b>Специальность</b></p>
                <input  type="text" name="extra[slide_expert_spec8]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_spec8', 1);?>" placeholder="Специальность"/><br>
                <p><b>Соц ссылка 1</b></p>
                <input  type="text" name="extra[slide_expert_soc_8_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_8_1', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_8_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_8_1', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 2</b></p>
                <input  type="text" name="extra[slide_expert_soc_8_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_8_2', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_8_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_8_2', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 3</b></p>
                <input  type="text" name="extra[slide_expert_soc_8_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_8_3', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_8_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_8_3', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 4</b></p>
                <input  type="text" name="extra[slide_expert_soc_8_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_8_4', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_8_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_8_4', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <input id="image-url20" type="hidden" name="extra[slide_expert_9]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide_expert_9', 1);?>"/><br>
                <input    role="20" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli20">
                <?php if(get_post_meta($post->ID, 'slide_expert_9', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide_expert_9', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide_expert_9', true)):?>
                <br />
                <button  class="delete btn" role="20">Удалить</button>
                <?php endif;?>
                <p><b>Имя</b></p>
                <input  type="text" name="extra[slide_expert_name9]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_name9', 1);?>" placeholder="Имя"/><br>
                <p><b>Специальность</b></p>
                <input  type="text" name="extra[slide_expert_spec9]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_spec9', 1);?>" placeholder="Специальность"/><br>
                <p><b>Соц ссылка 1</b></p>
                <input  type="text" name="extra[slide_expert_soc_9_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_9_1', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_9_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_9_1', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 2</b></p>
                <input  type="text" name="extra[slide_expert_soc_9_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_9_2', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_9_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_9_2', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 3</b></p>
                <input  type="text" name="extra[slide_expert_soc_9_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_9_3', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_9_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_9_3', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 4</b></p>
                <input  type="text" name="extra[slide_expert_soc_9_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_9_4', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_9_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_9_4', 1);?>" placeholder="Значок"/><br>
            </div>
            <div class="item">
                <input id="image-url21" type="hidden" name="extra[slide_expert_10]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide_expert_10', 1);?>"/><br>
                <input    role="21" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli21">
                <?php if(get_post_meta($post->ID, 'slide_expert_10', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide_expert_10', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide_expert_10', true)):?>
                <br />
                <button  class="delete btn" role="21">Удалить</button>
                <?php endif;?>
                <p><b>Имя</b></p>
                <input  type="text" name="extra[slide_expert_name10]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_name10', 1);?>" placeholder="Имя"/><br>
                <p><b>Специальность</b></p>
                <input  type="text" name="extra[slide_expert_spec10]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_spec10', 1);?>" placeholder="Специальность"/><br>
                <p><b>Соц ссылка 1</b></p>
                <input  type="text" name="extra[slide_expert_soc_10_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_10_1', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_10_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_10_1', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 2</b></p>
                <input  type="text" name="extra[slide_expert_soc_10_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_10_2', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_10_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_10_2', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 3</b></p>
                <input  type="text" name="extra[slide_expert_soc_10_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_10_3', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_10_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_10_3', 1);?>" placeholder="Значок"/><br>
                <p><b>Соц ссылка 4</b></p>
                <input  type="text" name="extra[slide_expert_soc_10_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_10_4', 1);?>" placeholder="Соц ссылка"/><br>
                <p><b>Значок соцссылки font-awesome</b></p>
                <input  type="text" name="extra[slide_expert_soc_img_10_4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_10_4', 1);?>" placeholder="Значок"/><br>
            </div>
        </div>
        <hr>
        <h2>Экран "Есть идея?"</h2>
        <p><b>Заголовок</b></p>
        <input  type="text" name="extra[zagolovok7]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok7', 1);?>" placeholder="Заголовок"/><br>
        <p><b>Текст</b></p>
        <textarea wrap="soft" rows="4" name="extra[text7]" style="width: 100%"><?php echo get_post_meta($post->ID, 'text7', 1);?></textarea>
        <h2>Тарифы</h2>
        <div class="tri_items">
            <div class="item">
                <p><b>Название</b></p>
                <input  type="text" name="extra[tarif1_name]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'tarif1_name', 1);?>" placeholder="Название"/><br>
                <p><b>Цена</b></p>
                <input  type="text" name="extra[tarif1_cena]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'tarif1_cena', 1);?>" placeholder="Цена"/><br>
                <p><b>Описание</b></p>
                <textarea wrap="soft" rows="4" name="extra[tarif1_opis]" style="width: 100%"><?php echo get_post_meta($post->ID, 'tarif1_opis', 1);?></textarea>
                <p><b>Название кнопки</b></p>
                <input  type="text" name="extra[knopka_name_6_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_name_6_1', 1);?>" placeholder="Название"/><br>
                <p><b>Ссылка кнопки</b></p>
                <input  type="text" name="extra[knopka_href_6_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_href_6_1', 1);?>" placeholder="Ссылка"/><br>
            </div>
            <div class="item">
                <p><b>Название</b></p>
                <input  type="text" name="extra[tarif2_name]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'tarif2_name', 1);?>" placeholder="Название"/><br>
                <p><b>Цена</b></p>
                <input  type="text" name="extra[tarif2_cena]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'tarif2_cena', 1);?>" placeholder="Цена"/><br>
                <p><b>Описание</b></p>
                <textarea wrap="soft" rows="4" name="extra[tarif2_opis]" style="width: 100%"><?php echo get_post_meta($post->ID, 'tarif2_opis', 1);?></textarea>
                <p><b>Название кнопки</b></p>
                <input  type="text" name="extra[knopka_name_6_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_name_6_2', 1);?>" placeholder="Название"/><br>
                <p><b>Ссылка кнопки</b></p>
                <input  type="text" name="extra[knopka_href_6_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_href_6_2', 1);?>" placeholder="Ссылка"/><br>
            </div>
            <div class="item">
                <p><b>Название</b></p>
                <input  type="text" name="extra[tarif3_name]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'tarif3_name', 1);?>" placeholder="Название"/><br>
                <p><b>Цена</b></p>
                <input  type="text" name="extra[tarif3_cena]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'tarif3_cena', 1);?>" placeholder="Цена"/><br>
                <p><b>Описание</b></p>
                <textarea wrap="soft" rows="4" name="extra[tarif3_opis]" style="width: 100%"><?php echo get_post_meta($post->ID, 'tarif3_opis', 1);?></textarea>
                <p><b>Название кнопки</b></p>
                <input  type="text" name="extra[knopka_name_6_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_name_6_3', 1);?>" placeholder="Название"/><br>
                <p><b>Ссылка кнопки</b></p>
                <input  type="text" name="extra[knopka_href_6_3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_href_6_3', 1);?>" placeholder="Ссылка"/><br>
            </div>
        </div>
        <hr>
        <div class="ekran5">
        <h2>Экран 6</h2>
            <p><b>Заголовок</b></p>
            <input  type="text" name="extra[zagolovok5]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok5', 1);?>" placeholder="Заголовок"/><br>
            <p><b>Подаголовок</b></p>
            <input  type="text" name="extra[podzagolovok5]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'podzagolovok5', 1);?>" placeholder="Подзаголовок"/><br>
            <p><b>Текст</b></p>
            <textarea wrap="soft" rows="4" name="extra[text5]" style="width: 100%"><?php echo get_post_meta($post->ID, 'text5', 1);?></textarea>
            <p><b>Названия значков font-awesome смотреть <a href="https://fontawesome.ru/all-icons/" target="_blank">тут</a>.</b></p>
            <div class="many_items">
                <div class="item">
                    <p><b>Название кнопки</b></p>
                    <input  type="text" name="extra[knopka_name_5_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_name_5_1', 1);?>" placeholder="Название"/><br>
                    <p><b>Ссылка кнопки</b></p>
                    <input  type="text" name="extra[knopka_href_5_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_href_5_1', 1);?>" placeholder="Ссылка"/><br>
                    <p><b>Название значка font-awesome на кнопке</b></p>
                    <input  type="text" name="extra[knopka_znachok_5_1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_znachok_5_1', 1);?>" placeholder="Значок"/><br>
                </div>
                <div class="item">
                    <p><b>Название кнопки</b></p>
                    <input  type="text" name="extra[knopka_name_5_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_name_5_2', 1);?>" placeholder="Название"/><br>
                    <p><b>Ссылка кнопки</b></p>
                    <input  type="text" name="extra[knopka_href_5_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_href_5_2', 1);?>" placeholder="Ссылка"/><br>
                    <p><b>Название значка font-awesome на кнопке</b></p>
                    <input  type="text" name="extra[knopka_znachok_5_2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'knopka_znachok_5_2', 1);?>" placeholder="Значок"/><br>
                </div>
            </div>
            <hr>
        </div>
        <h2>Экран "Инвестиции в будущее"</h2>
        <p><b>Заголовок</b></p>
        <input  type="text" name="extra[zagolovok6]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok6', 1);?>" placeholder="Заголовок"/><br>
        <p><b>Текст</b></p>
        <textarea wrap="soft" rows="4" name="extra[text6]" style="width: 100%"><?php echo get_post_meta($post->ID, 'text6', 1);?></textarea>
        <div class="slides_images">
            <div class="item">
                <input id="image-url1" type="hidden" name="extra[slide6_1]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide6_1', 1);?>"/><br>
                <input    role="1" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli1">
                <?php if(get_post_meta($post->ID, 'slide6_1', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide6_1', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide6_1', true)):?>
                <br />
                <button  class="delete btn" role="1">Удалить</button>
                <?php endif;?>
                <p><b>Текст на слайде</b></p>
                <textarea wrap="soft" rows="4" name="extra[slide6_1_text]" style="width: 100%"><?php echo get_post_meta($post->ID, 'slide6_1_text', 1);?></textarea>
            </div>
            <div class="item">
                <input id="image-url2" type="hidden" name="extra[slide6_2]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide6_2', 1);?>"/><br>
                <input    role="2" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli2">
                <?php if(get_post_meta($post->ID, 'slide6_2', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide6_2', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide6_2', true)):?>
                <br />
                <button  class="delete btn" role="2">Удалить</button>
                <?php endif;?>
                <p><b>Текст на слайде</b></p>
                <textarea wrap="soft" rows="4" name="extra[slide6_2_text]" style="width: 100%"><?php echo get_post_meta($post->ID, 'slide6_2_text', 1);?></textarea>
            </div>
            <div class="item">
                <input id="image-url3" type="hidden" name="extra[slide6_3]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide6_3', 1);?>"/><br>
                <input    role="3" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli3">
                <?php if(get_post_meta($post->ID, 'slide6_3', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide6_3', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide6_3', true)):?>
                <br />
                <button  class="delete btn" role="3">Удалить</button>
                <?php endif;?>
                <p><b>Текст на слайде</b></p>
                <textarea wrap="soft" rows="4" name="extra[slide6_3_text]" style="width: 100%"><?php echo get_post_meta($post->ID, 'slide6_3_text', 1);?></textarea>
            </div>
            <div class="item">
                <input id="image-url4" type="hidden" name="extra[slide6_4]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide6_4', 1);?>"/><br>
                <input    role="4" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli4">
                <?php if(get_post_meta($post->ID, 'slide6_4', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide6_4', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide6_4', true)):?>
                <br />
                <button  class="delete btn" role="4">Удалить</button>
                <?php endif;?>
                <p><b>Текст на слайде</b></p>
                <textarea wrap="soft" rows="4" name="extra[slide6_4_text]" style="width: 100%"><?php echo get_post_meta($post->ID, 'slide6_4_text', 1);?></textarea>
            </div>
            <div class="item">
                <input id="image-url5" type="hidden" name="extra[slide6_5]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide6_5', 1);?>"/><br>
                <input    role="5" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli5">
                <?php if(get_post_meta($post->ID, 'slide6_5', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide6_5', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide6_5', true)):?>
                <br />
                <button  class="delete btn" role="5">Удалить</button>
                <?php endif;?>
                <p><b>Текст на слайде</b></p>
                <textarea wrap="soft" rows="4" name="extra[slide6_5_text]" style="width: 100%"><?php echo get_post_meta($post->ID, 'slide6_5_text', 1);?></textarea>
            </div>
            <div class="item">
                <input id="image-url6" type="hidden" name="extra[slide6_6]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide6_6', 1);?>"/><br>
                <input    role="6" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli6">
                <?php if(get_post_meta($post->ID, 'slide6_6', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide6_6', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide6_6', true)):?>
                <br />
                <button  class="delete btn" role="6">Удалить</button>
                <?php endif;?>
                <p><b>Текст на слайде</b></p>
                <textarea wrap="soft" rows="4" name="extra[slide6_6_text]" style="width: 100%"><?php echo get_post_meta($post->ID, 'slide6_6_text', 1);?></textarea>
            </div>
            <div class="item">
                <input id="image-url7" type="hidden" name="extra[slide6_7]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide6_7', 1);?>"/><br>
                <input    role="7" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli7">
                <?php if(get_post_meta($post->ID, 'slide6_7', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide6_7', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide6_7', true)):?>
                <br />
                <button  class="delete btn" role="7">Удалить</button>
                <?php endif;?>
                <p><b>Текст на слайде</b></p>
                <textarea wrap="soft" rows="4" name="extra[slide6_7_text]" style="width: 100%"><?php echo get_post_meta($post->ID, 'slide6_7_text', 1);?></textarea>
            </div>
            <div class="item">
                <input id="image-url8" type="hidden" name="extra[slide6_8]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide6_8', 1);?>"/><br>
                <input    role="8" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli8">
                <?php if(get_post_meta($post->ID, 'slide6_8', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide6_8', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide6_8', true)):?>
                <br />
                <button  class="delete btn" role="8">Удалить</button>
                <?php endif;?>
                <p><b>Текст на слайде</b></p>
                <textarea wrap="soft" rows="4" name="extra[slide6_8_text]" style="width: 100%"><?php echo get_post_meta($post->ID, 'slide6_8_text', 1);?></textarea>
            </div>
            <div class="item">
                <input id="image-url9" type="hidden" name="extra[slide6_9]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide6_9', 1);?>"/><br>
                <input    role="9" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli9">
                <?php if(get_post_meta($post->ID, 'slide6_9', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide6_9', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide6_9', true)):?>
                <br />
                <button  class="delete btn" role="9">Удалить</button>
                <?php endif;?>
                <p><b>Текст на слайде</b></p>
                <textarea wrap="soft" rows="4" name="extra[slide6_9_text]" style="width: 100%"><?php echo get_post_meta($post->ID, 'slide6_9_text', 1);?></textarea>
            </div>
            <div class="item">
                <input id="image-url10" type="hidden" name="extra[slide6_10]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, 'slide6_10', 1);?>"/><br>
                <input    role="10" type="button" class="buttonupload btn" value="Выберите изображение слайда" />
                <div id="upli10">
                <?php if(get_post_meta($post->ID, 'slide6_10', true)):?>
                <?php $img=get_post_meta($post->ID, 'slide6_10', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                <img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
                <?php endif;?> 
                </div><!-- upli -->
                <?php if(get_post_meta($post->ID, 'slide6_10', true)):?>
                <br />
                <button  class="delete btn" role="10">Удалить</button>
                <?php endif;?>
                <p><b>Текст на слайде</b></p>
                <textarea wrap="soft" rows="4" name="extra[slide6_10_text]" style="width: 100%"><?php echo get_post_meta($post->ID, 'slide6_10_text', 1);?></textarea>
            </div>
        </div>
        <hr>

        <div class="ekran9">
            <h2>Экран 9</h2>
            <p><b>Заголовок</b></p>
            <input  type="text" name="extra[zagolovok9]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok9', 1);?>" placeholder="Заголовок"/><br>
            <p><b>Текст</b></p>
            <textarea wrap="soft" rows="4" name="extra[text9]" style="width: 100%"><?php echo get_post_meta($post->ID, 'text9', 1);?></textarea>
            <p><b>Вопрос</b></p>
            <input  type="text" name="extra[vopros1]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'vopros1', 1);?>" placeholder="Вопрос"/><br>
            <p><b>Ответ</b></p>
            <textarea wrap="soft" rows="4" name="extra[otvet1]" style="width: 100%"><?php echo get_post_meta($post->ID, 'otvet1', 1);?></textarea>
            <p><b>Вопрос</b></p>
            <input  type="text" name="extra[vopros2]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'vopros2', 1);?>" placeholder="Вопрос"/><br>
            <p><b>Ответ</b></p>
            <textarea wrap="soft" rows="4" name="extra[otvet2]" style="width: 100%"><?php echo get_post_meta($post->ID, 'otvet2', 1);?></textarea>
            <p><b>Вопрос</b></p>
            <input  type="text" name="extra[vopros3]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'vopros3', 1);?>" placeholder="Вопрос"/><br>
            <p><b>Ответ</b></p>
            <textarea wrap="soft" rows="4" name="extra[otvet3]" style="width: 100%"><?php echo get_post_meta($post->ID, 'otvet3', 1);?></textarea>
            <p><b>Вопрос</b></p>
            <input  type="text" name="extra[vopros4]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'vopros4', 1);?>" placeholder="Вопрос"/><br>
            <p><b>Ответ</b></p>
            <textarea wrap="soft" rows="4" name="extra[otvet4]" style="width: 100%"><?php echo get_post_meta($post->ID, 'otvet4', 1);?></textarea>
            <p><b>Вопрос</b></p>
            <input  type="text" name="extra[vopros5]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'vopros5', 1);?>" placeholder="Вопрос"/><br>
            <p><b>Ответ</b></p>
            <textarea wrap="soft" rows="4" name="extra[otvet5]" style="width: 100%"><?php echo get_post_meta($post->ID, 'otvet5', 1);?></textarea>
            <p><b>Вопрос</b></p>
            <input  type="text" name="extra[vopros6]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'vopros6', 1);?>" placeholder="Вопрос"/><br>
            <p><b>Ответ</b></p>
            <textarea wrap="soft" rows="4" name="extra[otvet6]" style="width: 100%"><?php echo get_post_meta($post->ID, 'otvet6', 1);?></textarea>
            <p><b>Вопрос</b></p>
            <input  type="text" name="extra[vopros7]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'vopro7', 1);?>" placeholder="Вопрос"/><br>
            <p><b>Ответ</b></p>
            <textarea wrap="soft" rows="4" name="extra[otvet7]" style="width: 100%"><?php echo get_post_meta($post->ID, 'otvet7', 1);?></textarea>
            <p><b>Вопрос</b></p>
            <input  type="text" name="extra[vopros8]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'vopros8', 1);?>" placeholder="Вопрос"/><br>
            <p><b>Ответ</b></p>
            <textarea wrap="soft" rows="4" name="extra[otvet8]" style="width: 100%"><?php echo get_post_meta($post->ID, 'otvet8', 1);?></textarea>
            <p><b>Вопрос</b></p>
            <input  type="text" name="extra[vopros9]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'vopros9', 1);?>" placeholder="Вопрос"/><br>
            <p><b>Ответ</b></p>
            <textarea wrap="soft" rows="4" name="extra[otvet9]" style="width: 100%"><?php echo get_post_meta($post->ID, 'otvet9', 1);?></textarea>
            <p><b>Вопрос</b></p>
            <input  type="text" name="extra[vopros10]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'vopros10', 1);?>" placeholder="Вопрос"/><br>
            <p><b>Ответ</b></p>
            <textarea wrap="soft" rows="4" name="extra[otvet10]" style="width: 100%"><?php echo get_post_meta($post->ID, 'otvet10', 1);?></textarea>
            <hr>
        </div>
        <h2>Экран "Будьте в курсе инноваций"</h2>
        <p><b>Заголовок</b></p>
        <input  type="text" name="extra[zagolovok10]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok10', 1);?>" placeholder="Заголовок"/><br>
        <p><b>Текст</b></p>
        <textarea wrap="soft" rows="4" name="extra[text10]" style="width: 100%"><?php echo get_post_meta($post->ID, 'text10', 1);?></textarea>
        <hr>
        <h2>Экран "Связаться с нами"</h2>
        <p><b>Заголовок</b></p>
        <input  type="text" name="extra[zagolovok11]" style="width: 100%" value="<?php echo get_post_meta($post->ID, 'zagolovok11', 1);?>" placeholder="Заголовок"/><br>
        <p><b>Текст</b></p>
        <textarea wrap="soft" rows="4" name="extra[text11]" style="width: 100%"><?php echo get_post_meta($post->ID, 'text11', 1);?></textarea>
        <h2>Футер</h2>
        <p><b>Текст копирайты</b></p>
        <input  type="text" name="extra[text_copyright]" style="width: 100%" value='<?php echo get_post_meta($post->ID, 'text_copyright', 1);?>' placeholder="Копирайты"/><br>
    </div>
    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
    <?
}

add_action( 'save_post', 'my_extra_fields_update', 0 );

## Сохраняем данные, при сохранении поста
function my_extra_fields_update( $post_id ){
    // базовая проверка
    if (
        empty( $_POST['extra'] )
        || ! wp_verify_nonce( $_POST['extra_fields_nonce'], __FILE__ )
        || wp_is_post_autosave( $post_id )
        || wp_is_post_revision( $post_id )
    )
        return false;

    // Все ОК! Теперь, нужно сохранить/удалить данные
    //$_POST['extra'] = array_map( 'sanitize_text_field', $_POST['extra'] ); // чистим все данные от пробелов по краям
    foreach( $_POST['extra'] as $key => $value ){
        if( empty($value) ){
            delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически
    }

    return $post_id;
}

function getPostViews($postID){
 $count_key = 'post_views_count';
 $count = get_post_meta($postID, $count_key, true);
 if($count==''){
 delete_post_meta($postID, $count_key);
 add_post_meta($postID, $count_key, '0');
 return "0 просмотров";
 }
 return ' Просмотров: '.$count;
 }
 function setPostViews($postID) {
 $count_key = 'post_views_count';
 $count = get_post_meta($postID, $count_key, true);
 if($count==''){
 $count = 0;
 delete_post_meta($postID, $count_key);
 add_post_meta($postID, $count_key, '0');
 }else{
 $count++;
 update_post_meta($postID, $count_key, $count);
 }
 }

?>
