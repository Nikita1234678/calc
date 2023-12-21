<?php

require_once "Classes/DataModel/LayoutDataModel.php";
require_once "Classes/GlobalsUtility.php";

use Classes\GlobalsUtility;

$globalsUtility = new GlobalsUtility();
$layoutDataModel = $globalsUtility -> GetLayoutDataModel();

//<button>перейти к калькулятору(удачи...)</button>
$layoutDataModel->SetPageName("возможно, но это не точно");
$layoutDataModel->AddBodySegment( <<<HTML
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset = "UTF-8">
    <link rel="stylesheet" href="/Css/IndexPage.css">
</head>
<header>
    <table style=" width: 100%; height: 100%">
    <tr style="height: 50px;">
        <td style=" width: 10%; margin: 0; ">
            <img style="height: 100px" src="Image/Logo_calc.png" alt="logo_calc">
        </td>
        <td style=" width: 90%; margin: 0; ">
            <a class="troll_logo_name">Привет мой юный(ленивый) пользователь. Это великий(нет) калькулятор.
                В нем ты сможешь очень много чего сделать(нет).</a>
            <br>
            <a class="last_chants_save">(если тебе дейсвительно нужен калькулятор то лучше воспользуйся встроеным в твое устройство)</a>
        </td>
    </tr>
    </table>
</header>
<body> 
    <div class="text">
        <a>Выбирай, но помни что ведет к реальности</a>
    </div>
               
    <div class="container">
        <div class="center">
            <a href="pre_main.php">
                <button class="btn_first">
                    <svg width="200px" height="60px" viewBox="0 0 200 60" class="border_first">
                        <polyline points="199,1 199,59 1,59 1,1 199,1" class="bg-line_first" />
                        <polyline points="199,1 199,59 1,59 1,1 199,1" class="hl-line_first" />
                    </svg>
                    <span>Калькулятор</span>
                </button>
            </a>
            <a href="main.php">
                <button  class="btn_two">
                    <svg width="200px" height="60px" viewBox="0 0 200 60" class="border_two">
                        <polyline points="199,1 199,59 1,59 1,1 199,1" class="bg-line_two" />
                        <polyline points="199,1 199,59 1,59 1,1 199,1" class="hl-line_two" />
                    </svg>
                    <span>Калькулятор</span>
                </button>
            </a>
        </div>
    </div> 
    
    <div class="facts">
        <a>Интересные Факты:</a><a> Это единственный факт на этой странице</a>
    </div>
       
    <a style="position: absolute; left: 5px; bottom: 5px;" href="https://www.freepik.com/free-photo/dark-texture-watercolor_13410577.htm#query=texture%20background&position=6&from_view=keyword&track=ais&uuid=352be85b-0570-47c3-83c7-238dcfcdb53d">Image by Vectonauta</a>
</body>
HTML);

require_once "Layout/layout.inc";

