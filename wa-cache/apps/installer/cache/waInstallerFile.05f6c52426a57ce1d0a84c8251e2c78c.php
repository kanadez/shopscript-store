a:3:{s:4:"time";i:1540904281;s:3:"ttl";i:600;s:5:"value";a:5:{s:9:"installer";a:11:{s:4:"name";s:18:"Инсталлер";s:6:"vendor";s:8:"webasyst";s:4:"icon";s:60:"//www.webasyst.com/wa-data/public/updates/img/53/53/icon.png";s:5:"icons";a:4:{i:96;s:66:"//www.webasyst.com/wa-data/public/updates/img/53/53/icon.96x96.png";i:48;s:66:"//www.webasyst.com/wa-data/public/updates/img/53/53/icon.48x48.png";i:24;s:66:"//www.webasyst.com/wa-data/public/updates/img/53/53/icon.24x24.png";i:16;s:66:"//www.webasyst.com/wa-data/public/updates/img/53/53/icon.16x16.png";}s:10:"commercial";b:0;s:7:"version";s:9:"1.9.7.287";s:12:"download_url";a:4:{s:17:"wa-apps/installer";s:59:"http://www.webasyst.com/download/archive/wa-apps/installer/";s:9:"wa-system";s:51:"http://www.webasyst.com/download/archive/wa-system/";s:10:"wa-content";s:52:"http://www.webasyst.com/download/archive/wa-content/";s:12:"wa-installer";s:54:"http://www.webasyst.com/download/archive/wa-installer/";}s:12:"requirements";a:6:{s:3:"php";a:2:{s:6:"strict";b:1;s:7:"version";s:4:">5.2";}s:8:"php.curl";a:2:{s:11:"description";s:43:"Get updates information from update servers";s:6:"strict";b:0;}s:22:"phpini.allow_url_fopen";a:3:{s:11:"description";s:43:"Get updates information from update servers";s:6:"strict";b:0;s:5:"value";i:1;}s:12:"php.mbstring";a:2:{s:6:"strict";b:1;s:5:"value";i:1;}s:29:"phpini.mbstring.func_overload";a:3:{s:11:"description";s:20:"Smarty properly work";s:6:"strict";b:1;s:5:"value";s:2:"<2";}s:94:"rights..|wa-installer|install.php|api.php|wa-log|wa-data/protected|wa-apps|wa-content|wa-cache";a:2:{s:11:"description";s:42:"Check folder rights for install and update";s:6:"strict";b:1;}}s:9:"changelog";a:8:{i:0;a:3:{s:7:"version";s:9:"1.9.7.287";s:7:"content";s:89:"<ul>
    <li>Исправлены незначительные ошибки.</li>
</ul>";s:8:"datetime";s:19:"2018-08-14 16:51:19";}i:1;a:3:{s:7:"version";s:9:"1.9.6.286";s:7:"content";s:212:"<ul>
    <li>Исправлено распознавание адресов отправителя и получателя и темы письма при обработке email-сообщений.</li>
</ul>";s:8:"datetime";s:19:"2018-08-14 15:16:59";}i:2;a:3:{s:7:"version";s:9:"1.9.5.283";s:7:"content";s:107:"<ul>
    <li>Исправлена ошибка при установке фреймворка.</li>
</ul>";s:8:"datetime";s:19:"2018-08-08 14:41:46";}i:3;a:3:{s:7:"version";s:9:"1.9.4.281";s:7:"content";s:767:"<ul>
    <li>Информация о неудачных попытках авторизации скрыта из ленты событий. Она доступна только администратору сервера в базе данных, только если при попытке подбора пароля было указано существующее имя пользователя или email-адрес.</li>
    <li>Исправлен текст сообщения в ленте событий об удалении программного продукта.</li>
    <li>Улучшена поддержка кириллических доменов в списке выбора сайтов в редакторе дизайна.</li>
</ul>";s:8:"datetime";s:19:"2018-08-07 13:52:34";}i:4;a:3:{s:7:"version";s:9:"1.9.3.278";s:7:"content";s:130:"<ul>
    <li>Исправлена поддержка приложений без файлов локализации.</li>
</ul>";s:8:"datetime";s:19:"2018-07-30 14:35:08";}i:5;a:3:{s:7:"version";s:9:"1.9.2.277";s:7:"content";s:89:"<ul>
    <li>Исправлены незначительные ошибки.</li>
</ul>";s:8:"datetime";s:19:"2018-07-26 15:34:16";}i:6;a:3:{s:7:"version";s:9:"1.9.1.275";s:7:"content";s:310:"<ul>
    <li>Улучшение системы безопасности в бекенде.</li>
    <li>Исправлено использование шрифтов в бекенде.</li>
    <li>Исправлена сортировка виджетов в панели управления.</li>
</ul>";s:8:"datetime";s:19:"2018-07-25 19:49:01";}i:7;a:3:{s:7:"version";s:9:"1.9.0.272";s:7:"content";s:4561:"<ul>
    <li>Новый раздел «Системные настройки», в который перенесены общие настройки аккаунта из приложения «Инсталлер».</li>
    <li>Проверка конфликта URL страницы с адресами правил в структуре сайта при сохранении страницы.</li>
    <li>Прекращение запомненной авторизации во всех браузерах при смене пароля пользователя.</li>
    <li>Консольная команда <em>createTheme</em> для создания заготовки темы дизайна.</li>
    <li>Отображение ссылки на карту Google вместо изображения карты, если в системных настройках не указан ключ Google Maps API.</li>
    <li>Исправлено кеширование для локализации средствами <em>gettext</em> в классе <em>waLocaleAdapter</em>.</li>
    <li>Улучшена проверка прав доступа пользователя в редакторе дизайна.</li>
    <li>Исправлена ошибка в капче Webasyst.</li>
    <li>Исправлено системное логирование регистрации посетителя сайта, если в настройках регистрации включено подтверждение email-адреса.</li>
    <li>Исправлен визуальный дефект отображения кнопки загрузки изображений в HTML-редакторе при использовании функции замены текста.</li>
    <li>Поддержка нескольких CDN-доменов в настройках сайта.</li>
    <li>Улучшен адаптер авторизации через «Фейсбук».</li>
    <li>Улучшен интерфейс приложения «Инсталлер».</li>
    <li>Улучшена автоматическая очистка кеша после установки обновлений.</li>
    <li>Автоматический сбор анонимной информации о версиях PHP и MySQL на сервере пользователя.</li>
</ul>

<strong>Улучшения визуального текстового редактора:</strong>
<ul>
    <li>Отображение всплывающей подсказки для кнопки форматирования «Полужирный».</li>
    <li>Отображение HTML-кода, введённого в визуальном режиме редактора.</li>
    <li>Стили форматирования текста и ссылок в абзацах и списках.</li>
    <li>Отмена выравнивания текста по ширине при удалении текста клавишей «Backspace».</li>
    <li>Отмена форматирования для всего списка при попытке отменить форматирование для выбранного элемента списка.</li>
    <li>Вставка лишних тегов <em>&lt;p&gt;</em> внутри тегов <em>&lt;li&gt;</em> при копировании списков из редактора LibreOffice.</li>
    <li>Удаление изображения при удалении пустой строки после абзаца, содержащего изображение.</li>
    <li>Вставка изображения, вырезанного в буфер обмена, в элемент списка.</li>
    <li>Активация кнопок редактирования ссылки после переключения из HTML-режима в визуальный режим.</li>
    <li>Удаление изображения при вставке второго изображения справа от первого.</li>
    <li>Удаление списка при нажатии на клавишу «Enter» после выделения всего текста и снятия выделения.</li>
    <li>Улучшено использование визуального редактора в разных приложениях.</li>
    <li>Улучшена поддержка различных браузеров.</li>
</ul>";s:8:"datetime";s:19:"2018-07-24 14:19:08";}}s:9:"purchased";s:0:"";s:7:"inbuilt";b:0;}s:4:"logs";a:11:{s:4:"name";s:8:"Логи";s:6:"vendor";i:817747;s:4:"icon";s:61:"//www.webasyst.com/wa-data/public/updates/img/98/298/icon.png";s:5:"icons";a:4:{i:96;s:67:"//www.webasyst.com/wa-data/public/updates/img/98/298/icon.96x96.png";i:48;s:67:"//www.webasyst.com/wa-data/public/updates/img/98/298/icon.48x48.png";i:24;s:67:"//www.webasyst.com/wa-data/public/updates/img/98/298/icon.24x24.png";i:16;s:67:"//www.webasyst.com/wa-data/public/updates/img/98/298/icon.16x16.png";}s:10:"commercial";b:0;s:7:"version";s:5:"1.1.1";s:12:"download_url";s:54:"http://www.webasyst.com/download/archive/wa-apps/logs/";s:12:"requirements";a:0:{}s:9:"changelog";a:2:{i:0;a:3:{s:7:"version";s:5:"1.1.1";s:7:"content";s:468:"<ul>
    <li>Мелкие улучшения интерфейса.</li>
    <li>Исправлен показ списка лог-файлов при использовании некоторых версий PHP.</li>
    <li>Исправлены ошибки действий с лог-файлами и директориями после переименования.</li>
    <li>Исправлены незначительные ошибки PHP.</li>
</ul>";s:8:"datetime";s:19:"2018-10-06 19:07:20";}i:1;a:3:{s:7:"version";s:5:"1.1.0";s:7:"content";s:995:"<ul>
	<li>Переработаны все функции и интерфейс приложения.</li>
	<li>Улучшена система безопасности.</li>
	<li>Новые возможности:
        <ul>
			<li>Публикация ссылок для просмотра файлов и конфигурации PHP.</li>
			<li>Защита паролем для опубликованных ссылок.</li>
			<li>Переименование файлов и директорий.</li>
			<li>Удаление директорий.</li>
			<li>Просмотр записей о действиях пользователей «войти не удалось» из системного лога Webasyst.</li>
			<li>Выбор типов ошибок в настройках логирования ошибок PHP.</li>
			<li>Скрытие полных путей к файлам и&nbsp;IP-адресов в логах.</li>
		</ul>
    </li>
</ul>";s:8:"datetime";s:19:"2018-09-15 09:53:44";}}s:9:"purchased";s:0:"";s:7:"inbuilt";b:0;}s:4:"shop";a:11:{s:4:"name";s:13:"Shop-Script 7";s:6:"vendor";s:8:"webasyst";s:4:"icon";s:61:"//www.webasyst.com/wa-data/public/updates/img/29/129/icon.png";s:5:"icons";a:4:{i:96;s:67:"//www.webasyst.com/wa-data/public/updates/img/29/129/icon.96x96.png";i:48;s:67:"//www.webasyst.com/wa-data/public/updates/img/29/129/icon.48x48.png";i:24;s:67:"//www.webasyst.com/wa-data/public/updates/img/29/129/icon.24x24.png";i:16;s:67:"//www.webasyst.com/wa-data/public/updates/img/29/129/icon.16x16.png";}s:10:"commercial";b:1;s:7:"version";s:9:"7.5.1.287";s:12:"download_url";s:54:"http://www.webasyst.com/download/archive/wa-apps/shop/";s:12:"requirements";a:1:{s:13:"app.installer";a:2:{s:7:"version";s:11:">=1.9.7.287";s:6:"strict";b:1;}}s:9:"changelog";a:2:{i:0;a:3:{s:7:"version";s:9:"7.5.1.287";s:7:"content";s:459:"<ul>
    <li>Улучшение интерфейса первоначальной настройки магазина.</li>
	<li>Исправлена ошибка функции «Написать клиенту» для версий PHP 7.1 и выше.</li>
</ul>

<strong>Тема дизайна «Дефолт»:</strong>
<ul>
    <li>Незначительное улучшение интерфейса страницы корзины.</li>
</ul>";s:8:"datetime";s:19:"2018-08-01 17:57:46";}i:1;a:3:{s:7:"version";s:9:"7.5.0.285";s:7:"content";s:3835:"<p><strong>Улучшен раздел первоначальной настройки магазина.</strong></p>

<strong>Исправления:</strong>
<ul>
    <li>Исправлена ошибка формирования нулевой стоимости доставки при оформлении заказа.</li>
    <li>Исправлена ошибка SQL-запроса при настройке рекомендаций с характеристикой типа «Да/нет переключатель (boolean)».</li>
    <li>Исправлена шпаргалка для массива переменных <i>shipping_params_desired_delivery</i> в параметрах заказа.</li>
    <li>Вставка кода из шпаргалки в разделе «Настройки → Уведомления» для новых уведомлений.</li>
    <li>Тип поля в базе данных для хранения HTML-кода страницы изменен с TEXT на MEDIUMTEXT.</li>
    <li>Исправлена ошибка обновления содержимого тега &lt;h2&gt; в визуальном редакторе текста подстраницы товара.</li>
</ul>

<strong>Улучшения в редактировании и создании заказа в бекенде:</strong>
<ul>
    <li>Устранено удаление десятичной части дробной стоимости товара при редактировании заказа.</li>
    <li>Устранено восстановление стоимости доставки до значения по умолчанию.</li>
    <li>Исправлено и улучшено отображение названия выбранного варианта способа доставки и комментария к нему.</li>
    <li>Возможность сохранять заказ с отсутствующими на складе товарами.</li>
    <li>Подсказки для товаров, у которых изменились названия, при редактировании заказа.</li>
    <li>Учет скидок на товары, сформированных плагинами, при расчете налога для заказа.</li>
    <li>Исправлено отображение желаемого времени доставки, если покупатель не выбрал желаемую дату доставки.</li>
	<li>Исправлена ошибка при выборе значения одного из нескольких обязательных пользовательских полей типа radio в адресе покупателя при создании заказа.</li>
    <li>При сохранении изменений в адресе доставки или адресе плательщика изменения сохраняются в виде нового адреса контакта покупателя.</li>
    <li>Исправлено сохранение редактируемого заказа после изменения выбора артикула заказанного товара.</li>
    <li>Исправлено отображение вариантов доставки, доступных для адреса покупателя, при создании заказа в бекенде.</li>
</ul>

<strong>Тема дизайна «Дефолт»:</strong>
<ul>
    <li>Исправлено обновление информации о составе корзины при добавлении в корзину рекомендуемых товаров на странице корзины.</li>
</ul>";s:8:"datetime";s:19:"2018-07-31 12:03:32";}}s:9:"purchased";s:0:"";s:7:"inbuilt";b:0;}s:4:"site";a:11:{s:4:"name";s:8:"Сайт";s:6:"vendor";s:8:"webasyst";s:4:"icon";s:61:"//www.webasyst.com/wa-data/public/updates/img/32/132/icon.png";s:5:"icons";a:4:{i:96;s:67:"//www.webasyst.com/wa-data/public/updates/img/32/132/icon.96x96.png";i:48;s:67:"//www.webasyst.com/wa-data/public/updates/img/32/132/icon.48x48.png";i:24;s:67:"//www.webasyst.com/wa-data/public/updates/img/32/132/icon.24x24.png";i:16;s:67:"//www.webasyst.com/wa-data/public/updates/img/32/132/icon.16x16.png";}s:10:"commercial";b:0;s:7:"version";s:9:"2.4.4.124";s:12:"download_url";s:54:"http://www.webasyst.com/download/archive/wa-apps/site/";s:12:"requirements";a:1:{s:13:"app.installer";a:2:{s:7:"version";s:7:">=1.9.0";s:6:"strict";b:1;}}s:9:"changelog";a:4:{i:0;a:3:{s:7:"version";s:9:"2.4.4.124";s:7:"content";s:138:"<strong>Тема дизайна «Дефолт»:</strong>
<ul>
    <li>Улучшено верхнее меню сайта.</li>
</ul>";s:8:"datetime";s:19:"2018-08-15 15:21:32";}i:1;a:3:{s:7:"version";s:9:"2.4.2.120";s:7:"content";s:272:"<ul>
    <li>Улучшен интерфейс проверки правил в настройках структуры сайта.</li>
    <li>Устранена доступность настройки структуры для сайта-зеркала.</li>
</ul>";s:8:"datetime";s:19:"2018-08-07 13:52:53";}i:2;a:3:{s:7:"version";s:9:"2.4.1.115";s:7:"content";s:96:"<ul>
    <li>Исправлены мелкие дефекты интерфейса.</li>
</ul>";s:8:"datetime";s:19:"2018-07-25 19:50:09";}i:3;a:3:{s:7:"version";s:9:"2.4.0.112";s:7:"content";s:2256:"<ul>
    <li>Новый раздел «Системные настройки», в который перенесены настройки из приложения «Инсталлер».</li>
    <li>Улучшено меню выбора сайта.</li>
    <li>Возможность публикации текстовых файлов по URL в корне сайта — для интеграции со сторонними сервисами.</li>
    <li>Временное отключение правил перенаправления в структуре сайта.</li>
    <li>Сохранение комментария для правил перенаправления.</li>
    <li>Уведомления об ошибках в настройках структуры сайта.</li>
    <li>Улучшена проверка права пользователя в разделе «Дизайн».</li>
    <li>Размер поля для хранения HTML-кода страниц в базе данных увеличен с TEXT до MEDIUMTEXT для поддержки страниц с большим количеством текста.</li>
    <li>Обновлена ссылка на документацию по настройке авторизации через соцсети.</li>
    <li>Исправлена подсказка о недоступности включения перенаправления на HTTPS.</li>
    <li>Исправлена ошибка 403 при загрузке больших файлов в файл-менеджере.</li>
</ul>

<strong>Тема Default:</strong>
<ul>
    <li>Улучшено отображение элементов &lt;figure&gt;, добавляемых визуальным текстовым редактором при вставке изображений.</li>
    <li>Поддержка новой версии API Graph Facebook.</li>
    <li>Добавление подписчиков через форму подписки.</li>
    <li>Исправлено сохранение настроек темы дизайна через боковую панель администратора  на витрине.</li>
</ul>";s:8:"datetime";s:19:"2018-07-24 14:19:36";}}s:9:"purchased";s:0:"";s:7:"inbuilt";b:0;}s:4:"team";a:11:{s:4:"name";s:14:"Команда";s:6:"vendor";s:8:"webasyst";s:4:"icon";s:62:"//www.webasyst.com/wa-data/public/updates/img/88/2588/icon.png";s:5:"icons";a:4:{i:96;s:68:"//www.webasyst.com/wa-data/public/updates/img/88/2588/icon.96x96.png";i:48;s:68:"//www.webasyst.com/wa-data/public/updates/img/88/2588/icon.48x48.png";i:24;s:68:"//www.webasyst.com/wa-data/public/updates/img/88/2588/icon.24x24.png";i:16;s:68:"//www.webasyst.com/wa-data/public/updates/img/88/2588/icon.16x16.png";}s:10:"commercial";b:0;s:7:"version";s:9:"1.0.8.100";s:12:"download_url";s:54:"http://www.webasyst.com/download/archive/wa-apps/team/";s:12:"requirements";a:1:{s:13:"app.installer";a:2:{s:7:"version";s:11:">=1.9.7.287";s:6:"strict";b:1;}}s:9:"changelog";a:2:{i:0;a:3:{s:7:"version";s:9:"1.0.8.100";s:7:"content";s:63:"Исправлены незначительные ошибки.";s:8:"datetime";s:19:"2018-08-09 16:17:05";}i:1;a:3:{s:7:"version";s:8:"1.0.7.96";s:7:"content";s:227:"<ul> 
    <li>Добавлены инструменты управления токенами API.</li> 
    <li>Настройка онлайн-карт перенесена в приложение «Сайт».</li> 
</ul>";s:8:"datetime";s:19:"2018-07-24 14:19:50";}}s:9:"purchased";s:0:"";s:7:"inbuilt";b:0;}}}