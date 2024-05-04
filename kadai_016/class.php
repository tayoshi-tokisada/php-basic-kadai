<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      // Foodクラス定義
      class Food{
        // プロパティ定義
        private $name;
        private $price;

        // メソッド定義
        public function show_price(){
          echo $this->price . "<br>";
        }

        // コンストラクタ定義
        public function __construct(string $name, int $price){
          $this->name = $name;
          $this->price = $price;
        }
      }

      // Animalクラス定義
      class Animal{
        // プロパティ定義
        private $name;
        private $height;
        private $weight;

        // メソッド定義
        public function show_height(){
          echo $this->height . "<br>";
        }

        // コンストラクタ定義
        public function __construct(string $name, string $height, string $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }

      // インスタンス化
      $apple = new Food("りんご", 200);
      $human = new Animal("人間", "170cm", "70kg");

      // 出力
      print_r($apple);
      echo "<br>";
      print_r($human);
      echo "<br>";

      // メソッド呼び出し
      $apple->show_price();
      $human->show_height();
      ?>
    </p>
  </body>
</html>