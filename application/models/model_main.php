<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Model_Main extends Model {

  const MAX_ROWS = 20;

  const MIN_FIRSTNAME = 3;
  const MAX_FIRSTNAME = 74;

  const MIN_LASTNAME = 3;
  const MAX_LASTNAME = 74;

  const MIN_EMAIL = 4;
  const MAX_EMAIL = 74;

  const MIN_PASSWORD = 4;
  const MAX_PASSWORD = 54;

  public $database = null;

  public function __construct() {
    $this->database = DataBase::connect();
    $this->i18n = new i18n;
    $this->crypto = new Crypto;
  }

  /**
   * @date 30 July 2018
   * @time 13:38
   * 
   */

public function getItems() {

  $is_email_exist = $this->database->prepare("SELECT `id`, `title`, `text`, `timestamp_created`, `owner_id` FROM `wall_item` ORDER BY `id` DESC");

      $is_email_exist->execute();
      while($row = $is_email_exist->fetch(PDO::FETCH_ASSOC)) {
        $arr[] = $row;
      }


 return $arr;

}

  
}
?>
