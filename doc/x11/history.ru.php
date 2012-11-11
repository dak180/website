<?
$title = "Использование X11 - История";
$cvs_author = 'Author: gecko2';
$cvs_date = 'Date: 2012/11/11 15:20:18';
$metatags = '<link rel="contents" href="index.php?phpLang=ru" title="Использование X11 Contents"><link rel="next" href="inst-xfree86.php?phpLang=ru" title="Получение и инсталляция XFree86"><link rel="prev" href="intro.php?phpLang=ru" title="Введение">';


include_once "header.ru.inc";
?>
<h1>Использование X11 - 2. История создания продукта</h1>
        
        
        
            <p>[Извините за эпический стиль, не смог устоять...]</p>
        
        <h2><a name="early">2.1 Отрочество</a></h2>
            
            <p> Вначале не было ничего. Darwin только появилась на свет, Mac
                OS X находилась на стадии разработки, а X11 еще не была создана.
            </p>
            <p> Затем появился Джон Кармак и перенес XFree86 в Mac OS X Server,
                которая была единственной на тот момент операционной системой в семействе Darwin.
                Впоследствии Дейв Зарзыки адаптировал этот перенос для XFree86 4.0 и
                Darwin 1.0 . Патчи нашли свое место в хранилище CVS
                Darwin и оставались там в ожидании грядущих событий.</p>
        
        <h2><a name="xonx-forms">2.2 Формы XonX</a></h2>
            
            <p> В один прекрасный день появился Торри Т. Лайонс и патчам Darwin
                было наконец уделено внимание, которого они так ждали. Наконец-то он
                перенес их в их новый дом - официальное хранилище CVS XFree86.
                Это было время, когда Mac OS X Public Beta и Darwin 1.2.
                XFree86 4.0.2 прекрасно работали в Darwin, но Mac OS X требовала, чтобы
                пользователи завершали работу в Aqua и переходили к консоли для выполнения действий.
                Торри собрал вокруг себя <a href="http://mrcla.com/XonX/">команду XonX
                </a> и отправился в путешествие, чтобы доставить XFree86
                в Mac OS X.</p>
            <p> Примерно в то же время Tenon начала построение Xtools с использованием
                XFree86 4.0 в качестве основы.</p>
        
        <h2><a name="root-or-not">2.3 Быть иль не быть корневым?</a></h2>
            
            <p> Вскоре команда XonX добилась реализации XFree86 в полноэкранном режиме
                параллельно Quartz и предоставляла пробные версии авантюрным
                пользователям. Пробные версии назывались XFree86-Aqua или
                сокращенно XAqua. Поскольку Торри возглавлял работу, изменения отражались
                непосредственно в хранилище CVS XFree86, что привело к
                выпуску версии 4.1.0.</p>
            <p> Сначала сопряжение с Quartz осуществлялось через
                небольшое приложение Xmaster.app (написанное в Carbon и затем
                переписанное в Cocoa). Впоследствии этот код был встроен в сам сервер X
                и породил приложение XDarwin.app. В этот же период была добавлена
                поддержка общей библиотеки (и Tenon была убеждена в использовании
                этого комплекта патчей вместо собственных патчей для обеспечения бинарной
                совместимости). Был достигнут явный прогресс в бескорневом режиме
                (с использованием Carbon API), но увы - было слишком поздно для его включения в
                XFree86 4.1.0. Бескорневой патч оказался на свободе и продолжил свое
                плавание по сети. После XFree86 4.1.0, выпущенной с полноэкранным режимом,
                работа надо бескорневым режимом продолжилась, теперь уже
                с использованием Cocoa API. Экспериментальный бескорневой режим был внесен в хранилище
                CVS XFree86.</p>
            <p>Тем временем Apple выпустила Mac OS X 10.0 и Darwin 1.3,
                а несколько недель спустя Tenon выпустила Xtools 1.0.</p>
            <p>Был продолжена работа по интеграции бескорневого режима  в
                XFree86, и таким образом ко времени выпуска XFree86 4.2.0 в январе
                2002 г. версия Darwin/Mac OS X была полностью интегрирована в
                основную дистрибуцию XFree86.</p>
        
    <p align="right"><? echo FINK_NEXT ; ?>:
<a href="inst-xfree86.php?phpLang=ru">3. Получение и инсталляция XFree86</a></p>
<? include_once "../../footer.inc"; ?>


