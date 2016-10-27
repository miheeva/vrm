<?php
class ControlPanel {
// Устанавливаем значения по умолчанию
var $default_settings = array(
 'phone' => '495 122-12-12',
 'email' => 'info@site.ru',
 'adress' => 'adress'
 );
 var $options;

 function ControlPanel() {
 add_action('admin_menu', array(&$this, 'add_menu'));
 if (!is_array(get_option('themadmin')))
 add_option('themadmin', $this->default_settings);
 $this->options = get_option('themadmin');
 }

 function add_menu() {
 add_theme_page('WP Theme Options', 'Редактор главной страницы', 8, "themadmin", array(&$this, 'optionsmenu'));
 }

 // Сохраняем значения формы с настройками 
 function optionsmenu() {
 if ($_POST['ss_action'] == 'save') {
 $this->options["phone"] = $_POST['cp_phone'];
 $this->options["email"] = $_POST['cp_email'];
 $this->options["adress"] = $_POST['cp_adress'];
     
     $this->options["slide-img-1"] = $_POST['cp_slide-img-1'];
     $this->options["slide-img-2"] = $_POST['cp_slide-img-2'];
     $this->options["slide-img-3"] = $_POST['cp_slide-img-3'];
     
     $this->options["slide-caption-h-1"] = $_POST['cp_slide-caption-h-1'];
     $this->options["slide-caption-h-2"] = $_POST['cp_slide-caption-h-2'];
     $this->options["slide-caption-h-3"] = $_POST['cp_slide-caption-h-3'];
     
      $this->options["slide-caption-hh-1"] = $_POST['cp_slide-caption-hh-1'];
     $this->options["slide-caption-hh-2"] = $_POST['cp_slide-caption-hh-2'];
     $this->options["slide-caption-hh-3"] = $_POST['cp_slide-caption-hh-3'];
     
     $this->options["slide-caption-p-1"] = $_POST['cp_slide-caption-p-1'];
     $this->options["slide-caption-p-2"] = $_POST['cp_slide-caption-p-2'];
     $this->options["slide-caption-p-3"] = $_POST['cp_slide-caption-p-3'];
     
      $this->options["left-first"] = $_POST['cp_left-first'];
     $this->options["left-second"] = $_POST['cp_left-second'];
     
     $this->options["one-img"] = $_POST['cp_one-img'];
     $this->options["one-text"] = $_POST['cp_one-text'];
     
     $this->options["two-img"] = $_POST['cp_two-img'];
     $this->options["two-text"] = $_POST['cp_two-text'];
     
     $this->options["three-img"] = $_POST['cp_three-img'];
     $this->options["three-text"] = $_POST['cp_three-text'];
     
 $this->options["metrika"] = $_POST['cp_metrika'];
 update_option('themadmin', $this->options);
 echo '<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204); width: 400px; margin-left: 17px; margin-top: 17px;"><p>Ваши изменения <strong>сохранены</strong>.</p></div>';
 }
 // Создаем форму для настроек
 echo '<form action="" method="post" class="themeform">';
 echo '<input type="hidden" id="ss_action" name="ss_action" value="save">';

 print '<div class="cptab"><br />
 <b>Настройки темы</b>
 <br />
 <h3>Контакты</h3>
 <p><input placeholder="Телефон" style="width:300px;" name="cp_phone" id="cp_phone" value="'.$this->options["phone"].'"><label> - телефон</label></p>

 <p><input placeholder="Адрес" style="width:300px;" name="cp_adress" id="cp_adress" value="'.$this->options["adress"].'"><label> - Адрес</label></p>
  <p><input placeholder="Email" style="width:300px;" name="cp_email" id="cp_email" value="'.$this->options["email"].'"><label> - email</label></p>
  
  <h3>Настройки слайдера</h3>
  <h4>Слайд 1</h4>
  <p><input placeholder="URL изображения" style="width:300px;" name="cp_slide-img-1" id="cp_slide-img-1" value="'.$this->options["slide-img-1"].'"><label> - Вставьте ссылку на изображение</label></p>

 <p><input placeholder="Заголовок" style="width:300px;" name="cp_slide-caption-h-1" id="cp_slide-caption-h-1" value="'.$this->options["slide-caption-h-1"].'"><label> - Введите здесь заголовок для слайдера</label></p>
 
 <p><input placeholder="подзаголовок" style="width:300px;" name="cp_slide-caption-hh-1" id="cp_slide-caption-hh-1" value="'.$this->options["slide-caption-hh-1"].'"><label> - Введите здесь подзаголовок для слайдера</label></p>
 
  <p><input placeholder="Описание" style="width:300px;" name="cp_slide-caption-p-1" id="cp_slide-caption-p-1" value="'.$this->options["slide-caption-p-1"].'"><label> - Введите здесь краткое описание на слайдер</label></p>
  
  
  <h4>Слайд 2</h4>
  
  <p><input placeholder="URL изображения" style="width:300px;" name="cp_slide-img-2" id="cp_slide-img-2" value="'.$this->options["slide-img-2"].'"><label> - Вставьте ссылку на изображение</label></p>

 <p><input placeholder="Заголовок" style="width:300px;" name="cp_slide-caption-h-2" id="cp_slide-caption-h-2" value="'.$this->options["slide-caption-h-2"].'"><label> - Введите здесь заголовок для слайдера</label></p>
 
  <p><input placeholder="подзаголовок" style="width:300px;" name="cp_slide-caption-hh-2" id="cp_slide-caption-hh-2" value="'.$this->options["slide-caption-hh-2"].'"><label> - Введите здесь подзаголовок для слайдера</label></p>
 
  <p><input placeholder="Описание" style="width:300px;" name="cp_slide-caption-p-2" id="cp_slide-caption-p-2" value="'.$this->options["slide-caption-p-2"].'"><label> - Введите здесь краткое описание на слайдер</label></p>
  
  <h4>Слайд 3</h4>
  
  <p><input placeholder="URL изображения" style="width:300px;" name="cp_slide-img-3" id="cp_slide-img-3" value="'.$this->options["slide-img-3"].'"><label> - Вставьте ссылку на изображение</label></p>

 <p><input placeholder="Заголовок" style="width:300px;" name="cp_slide-caption-h-3" id="cp_slide-caption-h-3" value="'.$this->options["slide-caption-h-3"].'"><label> - Введите здесь заголовок для слайдера</label></p>
 
  <p><input placeholder="подзаголовок" style="width:300px;" name="cp_slide-caption-hh-3" id="cp_slide-caption-hh-3" value="'.$this->options["slide-caption-hh-3"].'"><label> - Введите здесь подзаголовок для слайдера</label></p>
 
  <p><input placeholder="Описание" style="width:300px;" name="cp_slide-caption-p-3" id="cp_slide-caption-p-3" value="'.$this->options["slide-caption-p-3"].'"><label> - Введите здесь краткое описание на слайдер</label></p>

<h3>Редактор текста блока рядом с новостями</h3>
 <p><textarea placeholder="Верхний (полужирный) текст" style="width:300px;" name="cp_left-first" id="cp_left-first">'.stripslashes($this->options["left-first"]).'</textarea><label> - Верхний (полужирный) текст</label></p>
 <p><textarea placeholder="Нижний (маленький) текст" style="width:300px;" name="cp_left-second" id="cp_left-second">'.stripslashes($this->options["left-second"]).'</textarea><label> - Нижний (маленький) текст</label></p>
 
 <h3>Синяя панель</h3>
 <p><input placeholder="Телефон" style="width:300px;" name="cp_one-img" id="cp_one-img" value="'.$this->options["one-img"].'"><label> - ссылка на картинку первой иконки</label></p>
 <p><input placeholder="Адрес" style="width:300px;" name="cp_one-text" id="cp_one-text" value="'.$this->options["one-text"].'"><label> - текст первого элемента</label></p>
 
  <p><input placeholder="Email" style="width:300px;" name="cp_two-img" id="cp_two-img" value="'.$this->options["two-img"].'"><label> - ссылка на картинку второй иконки</label></p>
  <p><input placeholder="Email" style="width:300px;" name="cp_two-text" id="cp_two-text" value="'.$this->options["two-text"].'"><label> - текст второго элемента</label></p>
  
  <p><input placeholder="Email" style="width:300px;" name="cp_three-img" id="cp_three-img" value="'.$this->options["three-img"].'"><label> - ссылка на картинку третьего элемента</label></p>
  <p><input placeholder="Email" style="width:300px;" name="cp_three-text" id="cp_three-text" value="'.$this->options["three-text"].'"><label> - текст третьего элемента</label></p>

 <h3>Код вашего счетчика</h3>
 <p><textarea placeholder="Здесь можно прописать коды счетчиков или дополнительных скриптов" style="width:300px;" name="cp_metrika" id="cp_metrika">'.stripslashes($this->options["metrika"]).'</textarea><label> - здесь можно прописать коды счетчиков или дополнительных скриптов</label></p>

 </div><br />';
 echo '<input type="submit" value="Сохранить" name="cp_save" class="dochanges" />';
 echo '</form>';
 }
}
$cpanel = new ControlPanel();
$mytheme = get_option('themadmin');
?>