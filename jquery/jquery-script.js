$(document).ready(function (){ // выполняется после загрузки страници | $(function(){   });

var getText = $("#sp5 + p").text();
    //alert(getText);
//---
    $("#sp5").text("Changed text");
    sp4 = $("#sp4");
    sp4.hide(1000).show(2000);
//---
    $('.thisDiv img').width("100px");
    $('.thisDiv p:odd').html('<img src="img/kartinka_zastavka.jpg" alt="ops">');
    $('.thisDiv img:last').width("200px");
//--- scroll
    var $window = $(window),
        $navigation = $("#box");

    $window.scroll(function() {
        if (!$navigation.hasClass("fixed") && ($window.scrollTop() > $navigation.offset().top)) {
            $navigation.addClass("fixed").data("top", $navigation.offset().top);
        }
        else if ($navigation.hasClass("fixed") && ($window.scrollTop() < $navigation.data("top"))) {
            $navigation.removeClass("fixed");
        }
    });
}); //Конец ready

/*

$("#sp5 + p"); ; // следущий рядом стоящий стоящие
$("#sp5 > p"); ; // дочерние элемменты (1 вложенность);
$(".firstDiv p"); ; // все p внутри класса

$("img[width = 200]"); //Выбор по атрибуту
$('a [href^=http]'); //атрибут начинается с http
$('img [src$=.jpg]'); //выбор по атрибуту окончания строки
$('img [src*=moto]'); //выбор по атрибуту содержит moto
$('#table tr:even'); //выбор четных элементов (начинается с 0-го) | odd
$('img:not (#op img)'); //Взять все картинки кроме (#op img)
$('div:has(fieldset)'); // Взять все дивы у которых есть тег fieldset
$('p:contains(мотоцикл)'); // p в которых есть текст мотоцикл
$('div:hidden'); //Выбираем скрытые блоки
$('div:visibility'); //Выбраем видимые блоки

*/
