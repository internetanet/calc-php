<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Калькулятор</title>
 </head>
 <body>
     <h2>Калькулятор на PHP</h2>

  <form method="post">
      <input type="number" name="firstnum">
      <select name="calcoption">
            <option selected disabled>Выберите операцию</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
      </select>
   <input type="number" name="secondnum">
   <input type="submit" name="submit" value="Показать результат">
  </form>
 </body>
</html>

<?php
    if (isset($_POST['submit'])) { //получаем даные из формы, если нажата кнопка
        $firstnum = $_POST['firstnum']; //первое число
        $secondnum = $_POST['secondnum']; //второе число
        $calcoption = $_POST['calcoption']; //вид операции

        if(!$calcoption || (!$firstnum && $firstnum != '0') || (!$secondnum && $secondnum != '0')) {
            $error = 'Заполните все поля!';
        }
        else{
          switch($calcoption){ // определяем вид операции
            case '+':
              $result = $firstnum + $secondnum; //выполняем сложение
            break;
            case '-':
              $result = $firstnum - $secondnum; //выполняем вычитание
            break;
            case '*':
              $result = $firstnum * $secondnum; //выполняем умножение
            break;
            case '/':
              $result = $firstnum / $secondnum; //выполняем деление
            break;    
          }
        }
        if(isset($error)){ //если есть ошибки, то выводим
          echo $error;
        }
        else{
          echo 'Результат: '.$result; //если ошибок нет - результат
        }
  }
?>
