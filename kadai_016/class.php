<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
     class Food {
      private $name;
      private $price;
      public function __construct(string $name,int $price){
        $this->name=$name;
        $this->price=$price;
      }
     }
     $food = new Food("potatp",250);
     print_r($food);
    ?>
  </p>

  <p>
    <?php
     class Animal{
      private $name;
      private $heigh;
      private $weight;

      public function __construct(string $name,int $heigh,int $weight){
        $this->name=$name;
        $this->heigh=$heigh;
        $this->weight=$weight;
      }
     }
     $animal = new Animal("dog",60,5000);
     print_r($animal);
    ?>
  </p>



</body>
</html>