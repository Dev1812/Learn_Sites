<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Controller_Reg extends Controller {
  
  public $i18n = null;
  public $view = null;
  public $model = null;

  public function __construct() {
    if(User::isAuth()) {
    //  header('Location: /');
    }
    $this->i18n = new i18n;
    $this->view = new View;
    $this->model = new Model_Reg;
  }

  /**
   * @date 24/07/2018
   *
   */
  public function action_index() {
    $data = array();
    $i18n = $this->i18n->get(array('home_page_title', 'main_description', 'main_keywords'));

    $param = array(
      'css' => 'reg.css',
      'js' => 'reg.js',
      'page_title' => $i18n['home_page_title'],
      'page_description' => $i18n['main_description'],
      'page_keywords' => $i18n['main_keywords']
    );
    if(isset($_POST['user_form_submit']) && !empty($_POST['user_form_submit'])) {
      $data['reg_info'] = $this->model->reg($_POST['user_first_name'], $_POST['user_email'], $_POST['user_password']);
    }
    $this->view->generate('reg_view.php', 'template_view.php', $param, $data, $i18n);
  }
}