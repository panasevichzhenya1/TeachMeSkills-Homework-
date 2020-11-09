<?php
$data = [
    [
        'id' => 1,
        'title' => 'include',
        'content' => '(PHP 4, PHP 5, PHP 7)

Выражение include включает и выполняет указанный файл.

Документация ниже также относится к выражению require.

Файлы включаются исходя из пути указанного файла, или, если путь не указан, используется путь, указанный в директиве include_path. Если файл не найден в include_path, include попытается проверить директорию, в которой находится текущий включающий скрипт и текущую рабочую директорию перед тем, как выдать ошибку. Конструкция include выдаст E_WARNING, если не сможет найти файл; поведение отлично от require, который выдаст E_ERROR.

Обратите внимание, что и include и require выдают дополнительную ошибку уровня E_WARNING, если к файлу невозможно получить доступ, перед тем, как выдать последнюю ошибку уровня E_WARNING или E_ERROR соответственно.

Если путь указан — абсолютный (начинающийся с буквы диска или с \ в Windows или с / в Unix/Linux системах) или относительно текущей директории (начинающийся с . или ..) — include_path будет проигнорирован вообще. Например, если имя файла начинается с ../, парсер будет искать в родительской директории запрошенный файл.

Для дополнительной информации о том, как PHP обрабатывает включаемые файлы и включаемые пути, смотрите документацию для директивы include_path.

Когда файл включается, его код наследует ту же область видимости переменых, что и строка, на которой произошло включение. Все переменные, доступные на этой строке во включающем файле, будут также доступны во включаемом файле. Однако все функции и классы, объявленные во включаемом файле, имеют глобальную область видимости.'    ],
    [
        'id' => 2,
        'title' => 'include_once',
        'content' => '(PHP 4, PHP 5, PHP 7)

Выражение include_once включает и выполняет указанный файл во время выполнения скрипта. Его поведение идентично выражению include, с той лишь разницей, что если код из файла уже один раз был включен, он не будет включен и выполнен повторно и вернёт TRUE. Как видно из имени, он включит файл только один раз.

include_once может использоваться в тех случаях, когда один и тот же файл может быть включен и выполнен более одного раза во время выполнения скрипта, в данном случае это поможет избежать проблем с переопределением функций, переменных и т.д.

Смотрите документацию по include для получения информации о том, как эта функция работает.
В больших PHP сценариях инструкции include применяются довольно часто. Поэтому становится довольно сложно контролировать, как бы случайно не включить один и тот же файл несколько раз, что чаще всего приводит к ошибке, которую сложно обнаружить.

В PHP предусмотрено решение данной проблемы. Используя конструкцию однократного включения include_once можно быть уверенным, что один файл не будет включен дважды. Работает конструкция однократного включения include_once так же, как и include. Разница в ее работе лишь в том, что перед включением файла интерпретатор проверяет, включен ли указанный файл ранее или нет. Если да, то файл не будет включен вновь.

! Конструкция однократного включения include_once позволяет включать удаленные файлы, если такая возможность включена в конфигурационном файле PHP.

Включения удаленных файлов

PHP позволяет работать с объектами URL, как с обычными файлами. Упаковщики, доступные по умолчанию, служат для работы с удаленными файлами с использованием протокола ftp или http.

Если "URL fopen-оболочки" включены в PHP (как в конфигурации по умолчанию), вы можете специфицировать файл, подключаемый с использованием URL (через HTTP), вместо локального пути. Если целевой сервер интерпретирует целевой файл как PHP-код, переменные могут передаваться в подключаемый файл с использованием URL-строки запроса, как в HTTP GET. Строго говоря, это не то же самое, что подключение файла и наследование им области видимости переменных родительского файла; ведь скрипт работает на удалённом сервере, а результат затем подключается в локальный скрипт.'
    ],
    [
        'id' => 3,
        'title' => 'require',
        'content' => 'PHP 4, PHP 5, PHP 7)

require аналогично include, за исключением того, что при ошибке он также выдаст фатальную ошибку уровня E_COMPILE_ERROR. Другими словами, он остановит выполнение скрипта, тогда как include только выдал бы предупреждение E_WARNING, которое позволило бы скрипту продолжить выполнение.

Смотрите документацию по include, чтобы узнать как он работает.Конструкция require позволяет включать файлы в PHP сценарий до выполнения сценария PHP. Общий синтаксис require такой:

require имя_файла;

При запуске (именно при запуске, а не при исполнении!) программы интерпретатор просто заменит инструкцию на содержимое файла имя_файла. Причем сделает он это непосредственно перед запуском программы (в отличие от include, который рассматривается ниже). Это бывает довольно удобно для включения в вывод сценария различных шаблонных страниц HTML-кодом.
Конструкция require позволяет собирать сценарии PHP из нескольких отдельных файлов, которые могут быть как html-страницами, так и php-скриптами.

Конструкция require поддерживает включения удаленных файлов (начиная с версии PHP 4.3.0).
Конструкция require позволяет включать удаленные файлы, если такая возможность включена в конфигурационном файле PHP.

Включения удаленных файлов

PHP позволяет работать с объектами URL, как с обычными файлами. Упаковщики, доступные по умолчанию, служат для работы с удаленными файлами с использованием протокола ftp или http.

Если "URL fopen-оболочки" включены в PHP (как в конфигурации по умолчанию), вы можете специфицировать файл, подключаемый с использованием URL (через HTTP), вместо локального пути. Если целевой сервер интерпретирует целевой файл как PHP-код, переменные могут передаваться в подключаемый файл с использованием URL-строки запроса, как в HTTP GET. Строго говоря, это не то же самое, что подключение файла и наследование им области видимости переменных родительского файла; ведь скрипт работает на удалённом сервере, а результат затем подключается в локальный скрипт.

Для того, чтобы удаленное включение файлов было доступно, необходимо в конфигурационном файле (php.ini) установить allow_url_fopen=1.'
    ],
    [
        'id' => 4,
        'title' => 'require_once',
        'content' => 'В больших PHP сценариях инструкции require применяются довольно часто. Поэтому становится довольно сложно контролировать, как бы случайно не включить один и тот же файл несколько раз, что чаще всего приводит к ошибке, которую сложно обнаружить.

В PHP предусмотрено решение данной проблемы. Используя конструкцию однократного включения require_once можно быть уверенным, что один файл не будет включен дважды. Работает конструкция однократного включения require_once так же, как и require. Разница в ее работе лишь в том, что перед включением файла интерпретатор проверяет, включен ли указанный файл ранее или нет. Если да, то файл не будет включен вновь.

! Конструкция однократного включения require_once позволяет включать удаленные файлы, если такая возможность включена в конфигурационном файле PHP.

Включения удаленных файлов

PHP позволяет работать с объектами URL, как с обычными файлами. Упаковщики, доступные по умолчанию, служат для работы с удаленными файлами с использованием протокола ftp или http.

Если "URL fopen-оболочки" включены в PHP (как в конфигурации по умолчанию), вы можете специфицировать файл, подключаемый с использованием URL (через HTTP), вместо локального пути. Если целевой сервер интерпретирует целевой файл как PHP-код, переменные могут передаваться в подключаемый файл с использованием URL-строки запроса, как в HTTP GET. Строго говоря, это не то же самое, что подключение файла и наследование им области видимости переменных родительского файла; ведь скрипт работает на удалённом сервере, а результат затем подключается в локальный скрипт.'
    ]
];
