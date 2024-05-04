<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      // クラス定義
      class Product{
        // プロパティ定義
        public $name;

        // メソッド定義
        public function set_name(string $name){
          $this->name = $name;
        }
        public function show_name(){
          echo $this->name . "<br>";
        }
      }
      // インスタンス化
      $coffee = new Product();

      // メソッドにアクセスして実行
      $coffee->set_name("コーヒー");
      $coffee->show_name();

      // インスタンス化
      $shampoo = new Product();

      // プロパティにアクセスし、値を代入する
      $shampoo->name = "シャンプー";

      // プロパティにアクセスし、値を出力する
      echo $shampoo->name;
      ?>
    </p>
    <p>
      <?php
      // クラス定義
      class User{
        // プロパティ定義
        private $name;
        private $age;
        private $gender;

        // コンストラクタ定義
        public function __construct(string $name, int $age, string $gender){
          $this->name = $name;
          $this->age = $age;
          $this->gender = $gender;
        }
      }

      // インスタンス化
      $user = new User("太郎", 36, "Male");
      print_r($user);
      ?>
    </p>
  </body>
</html>