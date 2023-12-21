<?php

require_once "Classes/DataModel/LayoutDataModel.php";
require_once "Classes/GlobalsUtility.php";

use Classes\GlobalsUtility;

$globalsUtility = new GlobalsUtility();
$layoutDataModel = $globalsUtility -> GetLayoutDataModel();

$layoutDataModel -> SetPageName("проще только на пальцах");

$layoutDataModel-> AddBodySegment(<<<BODY
<!--  ̷С̷п̷и̷з̷ж̷ за основу взято https://webtort.ru/создаем-простой-калькулятор-на-php-испо/-->
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<link rel="stylesheet" href="Css/CalcStyle.css" type="text/css" />
</head>
<body>
	<h1>Великий и не могучий калькулятор</h1>
	<form action='' method='post' class="calculate-form">
		<input type="text" name="number1" class="numbers" placeholder="число пиши ты сюда">
		
		<select class="operations" name="operation">
			<option value='plus'>Первый класс (+)</option>
			<option value='minus'>Третий класс (-)</option>
			<option value="multiply">Восьмой класс (*)</option>
			<option value="divide">Высшка (/)</option>
		</select>
		
		<input type="text" name="number2" class="numbers" placeholder="тоже число тут пиши">
		<br>
		<input class="submit_form" type="submit" name="submit" value="Нажми если тебе интересен ответ"> 
	</form>
</body>
</html>
BODY
);


if(isset($_POST['submit'])){
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$operation = $_POST['operation'];

	// Валидация
	if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
		$error_result = 'увы нужны оба поля тут не место одиночкам, а пустые оба так вообще лажа';

	}
    else {

		if(!is_numeric($number1) || !is_numeric($number2)){
			$error_result = "При всем моем уважении мы еще не умеем делать это с буквами, да и симвалими тоже";
		}
		else
        switch($operation){
			case 'plus':
			    $result = $number1 + $number2;
			    break;
			case 'minus':
			    $result = $number1 - $number2;
			    break;
			case 'multiply':
			    $result = $number1 * $number2;
			    break;
			case 'divide':
			    if( $number2 == '0')
			    	$error_result = "К моему сожалению, но вы делате дичь.АЛО на ноль нельзя делить";
			    else
			       $result = $number1 / $number2;
			    break;
		}

	}
    if(isset($error_result)){
        $layoutDataModel-> AddBodySegment(<<<BODY
    	<div class='error-text'><br>Ошибка: $error_result</div>
    BODY);}
    else {
        $layoutDataModel-> AddBodySegment(<<<BODY
	    <div class='answer-text'><br>Ответ: $result</div>
	BODY
        );
    }
}
$layoutDataModel-> AddBodySegment('<a href="index.php"><button style="margin-top: 30%;">главная страница</button></a>');
$layoutDataModel->AddBodySegment("<a>за оформление этой страниции мне плотили, правда за прошлую тоже, но там еще был интузиазм</a>");
require_once "Layout/layout.inc";