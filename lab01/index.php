<?php

echo "hello world with echo";
print "hello world with print";

$days = 288;
$message = "все возвращаются на работу";

echo "всего  {$days} дней и {$message}";
echo "всего ".$days." дней и".$message;

/*
Контрольные вопросы
Какие способы установки PHP существуют?
    Официальный установочный пакет (Windows) – скачивание и установка с php.net.
    Использование XAMPP, WAMP, MAMP, LAMP – готовые сборки для локальной разработки, включающие Apache, MySQL и PHP.
    Установка через пакетные менеджеры
Как проверить, что PHP установлен и работает?
    в косноли можно ввести сторку php -v
Чем отличается оператор echo от print? 
    echo
    Может выводить сразу несколько аргументов: echo "Hello", " ", "World";
    Работает быстрее, так как не возвращает значение.
    print
    Возвращает 1, что позволяет использовать его в выражениях:

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "hello world with echo"?></h1>
    <h1><?php print "hello world with print"?></h1>
    <h1><?php echo "всего  {$days} дней и {$message}"?></h1>
    <h1><?php echo "всего ".$days." дней и".$message?></h1>
    

</body>
</html>

