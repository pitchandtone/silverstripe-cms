<?php

/**
 * Bulgarian (Bulgaria) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('bg_BG', $lang) && is_array($lang['bg_BG'])) {
	$lang['bg_BG'] = array_merge($lang['en_US'], $lang['bg_BG']);
} else {
	$lang['bg_BG'] = $lang['en_US'];
}

$lang['bg_BG']['AssetAdmin']['CHOOSEFILE'] = 'Избери файл';
$lang['bg_BG']['AssetAdmin']['DELETEDX'] = 'Изтрити %s файлове. %s';
$lang['bg_BG']['AssetAdmin']['FILESREADY'] = 'Файлове готови за качване:';
$lang['bg_BG']['AssetAdmin']['FOLDERDELETED'] = 'Изтрита папка.';
$lang['bg_BG']['AssetAdmin']['FOLDERSDELETED'] = 'Изтрити папки.';
$lang['bg_BG']['AssetAdmin']['MENUTITLE'] = 'Файлове & Изображения';
$lang['bg_BG']['AssetAdmin']['MOVEDX'] = 'Преместени %s файлове';
$lang['bg_BG']['AssetAdmin']['NEWFOLDER'] = 'Нова папка';
$lang['bg_BG']['AssetAdmin']['NOTEMP'] = 'Няма временна директория за качване. Моля нагласете upload_tmp_dir в php.ini';
$lang['bg_BG']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Нямаше нищо за качване';
$lang['bg_BG']['AssetAdmin']['NOWBROKEN'] = 'Показаните страници съдържат невалидни връзки:';
$lang['bg_BG']['AssetAdmin']['NOWBROKEN2'] = 'Собствениците на страниците бяха информирани по мейл и скоро ще оправят проблемите.';
$lang['bg_BG']['AssetAdmin']['SAVEDFILE'] = 'Съхранен файл %s';
$lang['bg_BG']['AssetAdmin']['SAVEFOLDERNAME'] = 'Съхрани името на папката';
$lang['bg_BG']['AssetAdmin']['THUMBSDELETED'] = 'Всички неизползвани миниатури бяха изтрити';
$lang['bg_BG']['AssetAdmin']['UPLOAD'] = 'Качете файловете показани по-долу';
$lang['bg_BG']['AssetAdmin']['UPLOADEDX'] = 'Качени %s файлове';
$lang['bg_BG']['AssetAdmin_left.ss']['CREATE'] = 'Създай';
$lang['bg_BG']['AssetAdmin_left.ss']['DELETE'] = 'Изтрий';
$lang['bg_BG']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Изтрий избраните папки';
$lang['bg_BG']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Позволи drag &amp; drop подреждане';
$lang['bg_BG']['AssetAdmin_left.ss']['FOLDERS'] = 'Папки';
$lang['bg_BG']['AssetAdmin_left.ss']['GO'] = 'Давай';
$lang['bg_BG']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Избери папки за триете и натисни бутона по-долу';
$lang['bg_BG']['AssetAdmin_left.ss']['TOREORG'] = 'За да организирате вашите папките, разместете ги по желание';
$lang['bg_BG']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Моля изберете страница от ляво.';
$lang['bg_BG']['AssetAdmin_right.ss']['WELCOME'] = 'Добре дошли в';
$lang['bg_BG']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Нямате права да качвате файлове в тази папка.';
$lang['bg_BG']['AssetTableField']['CAPTION'] = 'Надпис';
$lang['bg_BG']['AssetTableField']['CREATED'] = 'Първо качен';
$lang['bg_BG']['AssetTableField']['DIM'] = 'Размери';
$lang['bg_BG']['AssetTableField']['DIMLIMT'] = 'Ограничи размерите в Изкачащото Прозорче';
$lang['bg_BG']['AssetTableField']['FILENAME'] = 'Име на файла';
$lang['bg_BG']['AssetTableField']['GALLERYOPTIONS'] = 'Опций на галерията';
$lang['bg_BG']['AssetTableField']['IMAGE'] = 'Изображение';
$lang['bg_BG']['AssetTableField']['ISFLASH'] = 'Е флаш документ';
$lang['bg_BG']['AssetTableField']['LASTEDIT'] = 'Последно променен';
$lang['bg_BG']['AssetTableField']['MAIN'] = 'Главно';
$lang['bg_BG']['AssetTableField']['NOLINKS'] = 'Този файл не е свързан с никоя страница.';
$lang['bg_BG']['AssetTableField']['OWNER'] = 'Собственик';
$lang['bg_BG']['AssetTableField']['PAGESLINKING'] = 'Показаните страници водят до този файл:';
$lang['bg_BG']['AssetTableField']['POPUPHEIGHT'] = 'Височина на Изкачащ прозорец';
$lang['bg_BG']['AssetTableField']['POPUPWIDTH'] = 'Ширина на Изкачащ прозорец';
$lang['bg_BG']['AssetTableField']['SIZE'] = 'Размер';
$lang['bg_BG']['AssetTableField.ss']['DELFILE'] = 'Изтрий този файл';
$lang['bg_BG']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Завлечи файла към папката в ляво за да преместите файла';
$lang['bg_BG']['AssetTableField.ss']['EDIT'] = 'Промени актив';
$lang['bg_BG']['AssetTableField.ss']['SHOW'] = 'Покажи актив';
$lang['bg_BG']['AssetTableField']['SWFFILEOPTIONS'] = 'SWF Файл опций ';
$lang['bg_BG']['AssetTableField']['TITLE'] = 'Заглавие';
$lang['bg_BG']['AssetTableField']['TYPE'] = 'Вид';
$lang['bg_BG']['AssetTableField']['URL'] = 'URL';
$lang['bg_BG']['CMSMain']['ACCESS'] = 'Влез при %s в CMS';
$lang['bg_BG']['CMSMain']['CANCEL'] = 'Отмени';
$lang['bg_BG']['CMSMain']['CHOOSEREPORT'] = '(Изберете доклад)';
$lang['bg_BG']['CMSMain']['COMPARINGV'] = 'Вие сравнявате версии #%d и #%d';
$lang['bg_BG']['CMSMain']['COPYPUBTOSTAGE'] = 'Наистина ли искате да копирате публикуваното съдържание на етапния сайт? ';
$lang['bg_BG']['CMSMain']['DELETE'] = 'Изтрий от черновия сайт';
$lang['bg_BG']['CMSMain']['DESCREMOVED'] = 'и %s низходящи';
$lang['bg_BG']['CMSMain']['EMAIL'] = 'e-mail';
$lang['bg_BG']['CMSMain']['GO'] = 'Давай';
$lang['bg_BG']['CMSMain']['MENUTITLE'] = 'Съдържание на сайта';
$lang['bg_BG']['CMSMain']['METADESCOPT'] = 'Описание';
$lang['bg_BG']['CMSMain']['METAKEYWORDSOPT'] = 'Ключови Думи';
$lang['bg_BG']['CMSMain']['NEW'] = 'Нов';
$lang['bg_BG']['CMSMain']['NOCONTENT'] = 'няма съдържание';
$lang['bg_BG']['CMSMain']['NOTHINGASSIGNED'] = 'Нямате нищо назначено за вас.';
$lang['bg_BG']['CMSMain']['NOWAITINGON'] = 'Не чакате никого.';
$lang['bg_BG']['CMSMain']['NOWBROKEN'] = 'Следните страници съдържат невалидни препратки:';
$lang['bg_BG']['CMSMain']['NOWBROKEN2'] = 'Техните собственици бяха уведомени по е-mail и ще оправят тези страници.';
$lang['bg_BG']['CMSMain']['OK'] = 'Добре';
$lang['bg_BG']['CMSMain']['PAGEDEL'] = '%d страница изтрита';
$lang['bg_BG']['CMSMain']['PAGENOTEXISTS'] = 'Тази страница не съществува';
$lang['bg_BG']['CMSMain']['PAGEPUB'] = '%d публикувана страница';
$lang['bg_BG']['CMSMain']['PAGESDEL'] = '%d страници изтрити';
$lang['bg_BG']['CMSMain']['PAGESPUB'] = '%d публикувани страници';
$lang['bg_BG']['CMSMain']['PAGETYPEOPT'] = 'Вид Страница';
$lang['bg_BG']['CMSMain']['PRINT'] = 'Отпечатай';
$lang['bg_BG']['CMSMain']['PUBALLCONFIRM'] = 'Моля, публикувайте всяка страница от сайта, копирайки съдържанието на "живо"';
$lang['bg_BG']['CMSMain']['PUBALLFUN'] = '"Публикувай всички" функция';
$lang['bg_BG']['CMSMain']['PUBALLFUN2'] = 'Натискането на този бутон е равносилно на това да отидете и натиснете "публикувай" на всяка страница. Предназначено е за масови промени в съдържанието, например когато даден сайт се изгражда за пръв път.';
$lang['bg_BG']['CMSMain']['PUBPAGES'] = 'Направено: Публикувани %d страници';
$lang['bg_BG']['CMSMain']['REMOVED'] = 'Изтрит \'%s\'%s от публичния сайт';
$lang['bg_BG']['CMSMain']['REMOVEDFD'] = 'Премахнато от черновата на сайта';
$lang['bg_BG']['CMSMain']['REMOVEDPAGE'] = 'Премахнато \'%s\' от публикувания сайт';
$lang['bg_BG']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = 'Премахното \'%s\' от черновият сайт';
$lang['bg_BG']['CMSMain']['REPORT'] = 'Доклад';
$lang['bg_BG']['CMSMain']['RESTORED'] = 'Възстановен \'%s\' успешно';
$lang['bg_BG']['CMSMain']['ROLLBACK'] = 'Върни обратно към тази версия';
$lang['bg_BG']['CMSMain']['ROLLEDBACKPUB'] = 'Върнато обратно на публикуваната версия. Новата версия е #%d';
$lang['bg_BG']['CMSMain']['ROLLEDBACKVERSION'] = 'Върнато обратно на версия #%d. Новата версия е #%d';
$lang['bg_BG']['CMSMain']['SAVE'] = 'Съхрани';
$lang['bg_BG']['CMSMain']['SENTTO'] = 'Изпрати на %s %s за удобрение.';
$lang['bg_BG']['CMSMain']['STATUSOPT'] = 'Състояние';
$lang['bg_BG']['CMSMain']['TOTALPAGES'] = 'Общо страници:';
$lang['bg_BG']['CMSMain']['VERSIONSNOPAGE'] = 'Не може да се намери страница #%d';
$lang['bg_BG']['CMSMain']['VIEWING'] = 'Преглеждате версия #%d, създадена %s';
$lang['bg_BG']['CMSMain']['VISITRESTORE'] = 'посети restorepage/(ID)';
$lang['bg_BG']['CMSMain']['WAITINGON'] = 'Чакате други хора да работят по тези <b>%d</b> страници.';
$lang['bg_BG']['CMSMain']['WORKTODO'] = 'Имате несвършена работа по тези <b>%d</b> страници.';
$lang['bg_BG']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'Неможеше да се открие името на бутона';
$lang['bg_BG']['CMSMain_dialog.ss']['NOLINKED'] = 'Не се намира прозореца.linkedObject за да изпратите бутона натиснете клик на главния прозорец. ';
$lang['bg_BG']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Прибавено към проектния сайт и още непубликувано';
$lang['bg_BG']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Добавете критерии...';
$lang['bg_BG']['CMSMain_left.ss']['BATCHACTIONS'] = 'Многобройни действия';
$lang['bg_BG']['CMSMain_left.ss']['CHANGED'] = 'променено';
$lang['bg_BG']['CMSMain_left.ss']['CLOSEBOX'] = 'Кликнете за да затворите кутията';
$lang['bg_BG']['CMSMain_left.ss']['COMPAREMODE'] = 'Функция за сравняване ( изберете 2)';
$lang['bg_BG']['CMSMain_left.ss']['CREATE'] = 'Създай';
$lang['bg_BG']['CMSMain_left.ss']['DEL'] = 'изтрит';
$lang['bg_BG']['CMSMain_left.ss']['DELETECONFIRM'] = 'Изтрий избраните страници';
$lang['bg_BG']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Изтрито от проектния сайт, но все още видимо в публичния сайт';
$lang['bg_BG']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Променено в проектния сайт и все още непубликувано';
$lang['bg_BG']['CMSMain_left.ss']['EDITEDSINCE'] = 'Променено от дата';
$lang['bg_BG']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Позволи "drag & drop" реорганизация';
$lang['bg_BG']['CMSMain_left.ss']['GO'] = 'Давай';
$lang['bg_BG']['CMSMain_left.ss']['KEY'] = 'Ключ:';
$lang['bg_BG']['CMSMain_left.ss']['NEW'] = 'нов';
$lang['bg_BG']['CMSMain_left.ss']['OPENBOX'] = 'Кликнете за да отворите тази кутия';
$lang['bg_BG']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Лог на версиите на страницата';
$lang['bg_BG']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Публикувай избраните страници';
$lang['bg_BG']['CMSMain_left.ss']['SEARCH'] = 'Търси';
$lang['bg_BG']['CMSMain_left.ss']['SEARCHTITLE'] = 'Търси чрез URL, Заглавие, Заглавие на меню и Съдържание';
$lang['bg_BG']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Изберете страниците които искате да промените и после изберете действие:';
$lang['bg_BG']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Покажи само променени страници';
$lang['bg_BG']['CMSMain_left.ss']['SHOWUNPUB'] = 'Покажи непубликуваните версии';
$lang['bg_BG']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Съдържание и структура';
$lang['bg_BG']['CMSMain_left.ss']['SITEREPORTS'] = 'Доклади на сайта';
$lang['bg_BG']['CMSMain_right.ss']['ANYMESSAGE'] = 'Имате ли някакво съобщение за вашия издател?';
$lang['bg_BG']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Моля, изберете страница от ляво.';
$lang['bg_BG']['CMSMain_right.ss']['LOADING'] = 'зареждане...';
$lang['bg_BG']['CMSMain_right.ss']['MESSAGE'] = 'Съобщение';
$lang['bg_BG']['CMSMain_right.ss']['SENDTO'] = 'Изпрати на';
$lang['bg_BG']['CMSMain_right.ss']['STATUS'] = 'Състояние';
$lang['bg_BG']['CMSMain_right.ss']['SUBMIT'] = 'Прати за одобрение';
$lang['bg_BG']['CMSMain_right.ss']['WELCOMETO'] = 'Добре дошли в';
$lang['bg_BG']['CMSMain_versions.ss']['AUTHOR'] = 'Автор';
$lang['bg_BG']['CMSMain_versions.ss']['NOTPUB'] = 'Непубликуван';
$lang['bg_BG']['CMSMain_versions.ss']['PUBR'] = 'Публикувал';
$lang['bg_BG']['CMSMain_versions.ss']['UNKNOWN'] = 'Непознат';
$lang['bg_BG']['CMSMain_versions.ss']['WHEN'] = 'Кога';
$lang['bg_BG']['CommentAdmin']['ACCEPT'] = 'Приеми';
$lang['bg_BG']['CommentAdmin']['APPROVED'] = 'Приети %s коментара.';
$lang['bg_BG']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Удобрени коментари';
$lang['bg_BG']['CommentAdmin']['AUTHOR'] = 'Автор';
$lang['bg_BG']['CommentAdmin']['COMMENT'] = 'Коментар';
$lang['bg_BG']['CommentAdmin']['COMMENTS'] = 'Коментари';
$lang['bg_BG']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Коментари чакащи удобряване';
$lang['bg_BG']['CommentAdmin']['DATEPOSTED'] = 'Дата на публикация';
$lang['bg_BG']['CommentAdmin']['DELETE'] = 'Изтрий';
$lang['bg_BG']['CommentAdmin']['DELETEALL'] = 'Изтрий всички';
$lang['bg_BG']['CommentAdmin']['DELETED'] = 'Изтрити %s коментари.';
$lang['bg_BG']['CommentAdmin']['MARKASNOTSPAM'] = 'Маркирай че не е спам';
$lang['bg_BG']['CommentAdmin']['MARKEDNOTSPAM'] = 'Маркирани %s коментара че не са спам.';
$lang['bg_BG']['CommentAdmin']['MARKEDSPAM'] = 'Маркирани %s коментара като спам.';
$lang['bg_BG']['CommentAdmin']['MENUTITLE'] = 'Коментари';
$lang['bg_BG']['CommentAdmin']['NAME'] = 'Име';
$lang['bg_BG']['CommentAdmin']['PAGE'] = 'Страница';
$lang['bg_BG']['CommentAdmin']['SPAM'] = 'Спам';
$lang['bg_BG']['CommentAdmin']['SPAMMARKED'] = 'Маркирай като спам';
$lang['bg_BG']['CommentAdmin_left.ss']['COMMENTS'] = 'Коментари';
$lang['bg_BG']['CommentAdmin_right.ss']['WELCOME1'] = 'Добре дошли в';
$lang['bg_BG']['CommentAdmin_right.ss']['WELCOME2'] = 'управление на коментари. Моля изберете папка в колонката от ляво.';
$lang['bg_BG']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Удобрено';
$lang['bg_BG']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'Чакащи удобряване';
$lang['bg_BG']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Коментари';
$lang['bg_BG']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Спам';
$lang['bg_BG']['CommentList.ss']['CREATEDW'] = 'Коментарите са създанени при активиране на някои от следните работни операции - Публикувай, Отхвърли, Прати';
$lang['bg_BG']['CommentList.ss']['NOCOM'] = 'Няма коментари на тази страница.';
$lang['bg_BG']['CommentTableField']['FILTER'] = 'Филтър';
$lang['bg_BG']['CommentTableField']['SEARCH'] = 'Търси';
$lang['bg_BG']['CommentTableField.ss']['APPROVE'] = 'удобри';
$lang['bg_BG']['CommentTableField.ss']['APPROVECOMMENT'] = 'Удобри този коментар';
$lang['bg_BG']['CommentTableField.ss']['DELETE'] = 'изтрий';
$lang['bg_BG']['CommentTableField.ss']['DELETEROW'] = 'Изтрий този ред';
$lang['bg_BG']['CommentTableField.ss']['EDIT'] = 'промени';
$lang['bg_BG']['CommentTableField.ss']['HAM'] = 'ham';
$lang['bg_BG']['CommentTableField.ss']['MARKASSPAM'] = 'Маркирай този коментар като спам.';
$lang['bg_BG']['CommentTableField.ss']['MARKNOSPAM'] = 'Маркирай този коментар че не спам.';
$lang['bg_BG']['CommentTableField.ss']['NOITEMSFOUND'] = 'Няма намерени елементи';
$lang['bg_BG']['CommentTableField.ss']['SPAM'] = 'спам';
$lang['bg_BG']['ComplexTableField']['CLOSEPOPUP'] = 'Затвори прозорец';
$lang['bg_BG']['ComplexTableField']['SUCCESSADD'] = 'Добавено %s %s %s';
$lang['bg_BG']['ImageEditor.ss']['ACTIONS'] = 'действия';
$lang['bg_BG']['ImageEditor.ss']['APPLY'] = 'приложи';
$lang['bg_BG']['ImageEditor.ss']['CANCEL'] = 'отмени';
$lang['bg_BG']['ImageEditor.ss']['CROP'] = 'изрежи';
$lang['bg_BG']['ImageEditor.ss']['CURRENTACTION'] = 'текущи&nbsp;действия';
$lang['bg_BG']['ImageEditor.ss']['EDITFUNCTIONS'] = 'промени&nbsp;функций';
$lang['bg_BG']['ImageEditor.ss']['EXIT'] = 'изход';
$lang['bg_BG']['ImageEditor.ss']['HEIGHT'] = 'дължина';
$lang['bg_BG']['ImageEditor.ss']['REDO'] = 'направи отново';
$lang['bg_BG']['ImageEditor.ss']['ROT'] = 'завърти';
$lang['bg_BG']['ImageEditor.ss']['SAVE'] = 'Запази снимката';
$lang['bg_BG']['ImageEditor.ss']['UNDO'] = 'върни обратно';
$lang['bg_BG']['ImageEditor.ss']['UNTITLED'] = 'Неозаглавен документ';
$lang['bg_BG']['ImageEditor.ss']['WIDTH'] = 'ширина';
$lang['bg_BG']['LeftAndMain']['CHANGEDURL'] = 'Променен URL на \'%s\'';
$lang['bg_BG']['LeftAndMain']['HELP'] = 'Помощ';
$lang['bg_BG']['LeftAndMain']['PAGETYPE'] = 'Вид страница:';
$lang['bg_BG']['LeftAndMain']['PERMAGAIN'] = 'Вие излязохте от CMS. Ако искате да влезнете отново, моля въведете потребителско име и парола.';
$lang['bg_BG']['LeftAndMain']['PERMALREADY'] = 'Съжелявам, но нямате достъп до тази част от CMS. Ако искате да влезете с друго потребителско име, моля направете го по-долу';
$lang['bg_BG']['LeftAndMain']['PERMDEFAULT'] = 'Въведете мейл адреса и паролата си за да влезните в CMS.';
$lang['bg_BG']['LeftAndMain']['PLEASESAVE'] = 'Моля, съхранете страницата: Тази страница не може да се актуализира защото още не е запазена.';
$lang['bg_BG']['LeftAndMain']['REQUESTERROR'] = 'Грешка в заявка';
$lang['bg_BG']['LeftAndMain']['SAVED'] = 'съхранено';
$lang['bg_BG']['LeftAndMain']['SAVEDUP'] = 'Съхранено';
$lang['bg_BG']['LeftAndMain']['SITECONTENTLEFT'] = 'Съдържание на сайта';
$lang['bg_BG']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Това е';
$lang['bg_BG']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'версията която използвате в момента, технически е CVS клон';
$lang['bg_BG']['LeftAndMain.ss']['ARCHS'] = 'Архивиран сайт';
$lang['bg_BG']['LeftAndMain.ss']['DRAFTS'] = 'Чернова на Сайта';
$lang['bg_BG']['LeftAndMain.ss']['EDIT'] = 'Промени';
$lang['bg_BG']['LeftAndMain.ss']['EDITINCMS'] = 'Промени тази страница в CMS';
$lang['bg_BG']['LeftAndMain.ss']['EDITPROFILE'] = 'Профил';
$lang['bg_BG']['LeftAndMain.ss']['LOADING'] = 'Зареждане...';
$lang['bg_BG']['LeftAndMain.ss']['LOGGEDINAS'] = 'Влязохте като';
$lang['bg_BG']['LeftAndMain.ss']['LOGOUT'] = 'излез';
$lang['bg_BG']['LeftAndMain.ss']['PUBLIS'] = 'Публикуван сайт';
$lang['bg_BG']['LeftAndMain.ss']['REQUIREJS'] = 'CMS Системата изисква да включите JavaScript.';
$lang['bg_BG']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe Уебсайт';
$lang['bg_BG']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Виж тази страница в Черновият Сайт';
$lang['bg_BG']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Виж тази страница в Публикувания Сайт';
$lang['bg_BG']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Изглед на страница:';
$lang['bg_BG']['LeftAndMain']['STATUSTO'] = 'Състояние променено на \' %s \'';
$lang['bg_BG']['LeftAndMain']['TREESITECONTENT'] = 'Съдържание на сайта';
$lang['bg_BG']['MemberList.ss']['FILTER'] = 'Филтрирай';
$lang['bg_BG']['MemberList_PageControls.ss']['DISPLAYING'] = 'Показани';
$lang['bg_BG']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'потребители';
$lang['bg_BG']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'потребители';
$lang['bg_BG']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'потребители';
$lang['bg_BG']['MemberList_PageControls.ss']['OF'] = 'от';
$lang['bg_BG']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'потребители';
$lang['bg_BG']['MemberList_PageControls.ss']['TO'] = 'за';
$lang['bg_BG']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Виж първото';
$lang['bg_BG']['MemberList_PageControls.ss']['VIEWLAST'] = 'Виж последното';
$lang['bg_BG']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Виж следващото';
$lang['bg_BG']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Виж предното';
$lang['bg_BG']['MemberList_Table.ss']['EMAIL'] = 'Е-mail адрес';
$lang['bg_BG']['MemberList_Table.ss']['FN'] = 'Име';
$lang['bg_BG']['MemberList_Table.ss']['PASSWD'] = 'Парола';
$lang['bg_BG']['MemberList_Table.ss']['SN'] = 'Фамилия';
$lang['bg_BG']['MemberTableField']['ADD'] = 'Добави';
$lang['bg_BG']['MemberTableField']['ADDEDTOGROUP'] = 'Добавен член към група';
$lang['bg_BG']['MemberTableField']['ADDINGFIELD'] = 'Добавянето провалено';
$lang['bg_BG']['MemberTableField']['ANYGROUP'] = 'Всякаква група';
$lang['bg_BG']['MemberTableField']['ASC'] = 'Възходящ';
$lang['bg_BG']['MemberTableField']['DESC'] = 'Низходящ';
$lang['bg_BG']['MemberTableField']['EMAIL'] = 'мейл';
$lang['bg_BG']['MemberTableField']['FILTER'] = 'Филтър';
$lang['bg_BG']['MemberTableField']['FILTERBYGROUP'] = 'Филтрирай по група';
$lang['bg_BG']['MemberTableField']['FIRSTNAME'] = 'Име';
$lang['bg_BG']['MemberTableField']['ORDERBY'] = 'Подреди по';
$lang['bg_BG']['MemberTableField']['SEARCH'] = 'Търсене';
$lang['bg_BG']['MemberTableField.ss']['ADDNEW'] = 'Добави нов';
$lang['bg_BG']['MemberTableField.ss']['DELETEMEMBER'] = 'Изтрий този потребител';
$lang['bg_BG']['MemberTableField.ss']['EDITMEMBER'] = 'Промени този потребител';
$lang['bg_BG']['MemberTableField.ss']['SHOWMEMBER'] = 'Покажи този потребител';
$lang['bg_BG']['MemberTableField']['SURNAME'] = 'Фамилия';
$lang['bg_BG']['ModelAdmin']['ADDBUTTON'] = 'Добави';
$lang['bg_BG']['ModelAdmin']['CLEAR_SEARCH'] = 'Изчисти търсенето';
$lang['bg_BG']['ModelAdmin']['DELETE'] = 'Изтрий';
$lang['bg_BG']['ModelAdmin']['GOBACK'] = 'Назад';
$lang['bg_BG']['ModelAdmin']['IMPORT'] = 'Внеси от CSV';
$lang['bg_BG']['ModelAdmin']['SAVE'] = 'Съхрани';
$lang['bg_BG']['ModelAdmin']['SEARCHRESULTS'] = 'Резултати от търсенето';
$lang['bg_BG']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'Внеси';
$lang['bg_BG']['PageComment']['COMMENTBY'] = 'Коментар от \'%s\' относно %s';
$lang['bg_BG']['PageCommentInterface']['POST'] = 'Публикувай';
$lang['bg_BG']['PageCommentInterface']['SPAMQUESTION'] = 'Въпрос за спам защита: %s';
$lang['bg_BG']['PageCommentInterface.ss']['COMMENTS'] = 'Коментари';
$lang['bg_BG']['PageCommentInterface.ss']['NEXT'] = 'следващо';
$lang['bg_BG']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Никой не е коментирал на тази страница все още.';
$lang['bg_BG']['PageCommentInterface.ss']['POSTCOM'] = 'Добавете вашият коментар';
$lang['bg_BG']['PageCommentInterface.ss']['PREV'] = 'предишно';
$lang['bg_BG']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'RSS емисия за коментарите на тази страница';
$lang['bg_BG']['PageCommentInterface']['YOURCOMMENT'] = 'Коментари';
$lang['bg_BG']['PageCommentInterface']['YOURNAME'] = 'Вашето име';
$lang['bg_BG']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Въпрос за спам защита: %s';
$lang['bg_BG']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Вашият коментар е изпратен и сега чака да бъде удобрен.';
$lang['bg_BG']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Съобщението което публикувахте беше:';
$lang['bg_BG']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Намерен спам!!';
$lang['bg_BG']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'удобри този коментар';
$lang['bg_BG']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'този коментар не е спам';
$lang['bg_BG']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'този коментар е спам';
$lang['bg_BG']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Публикувано от';
$lang['bg_BG']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'премахни този коментар';
$lang['bg_BG']['ReportAdmin_left.ss']['REPORTS'] = 'Доклади';
$lang['bg_BG']['ReportAdmin_right.ss']['WELCOME1'] = 'Добре дошли в';
$lang['bg_BG']['ReportAdmin_right.ss']['WELCOME2'] = 'секция за доклади. Моля изберете специфичен доклад от ляво.';
$lang['bg_BG']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Доклади';
$lang['bg_BG']['SecurityAdmin']['ADDMEMBER'] = 'Добави член';
$lang['bg_BG']['SecurityAdmin']['EDITPERMISSIONS'] = 'Промени разрешенията и IP адресите за всяка група';
$lang['bg_BG']['SecurityAdmin']['MENUTITLE'] = 'Сигурност';
$lang['bg_BG']['SecurityAdmin']['NEWGROUP'] = 'Нова група';
$lang['bg_BG']['SecurityAdmin']['SAVE'] = 'Съхрани';
$lang['bg_BG']['SecurityAdmin']['SGROUPS'] = 'Групи за сигурност';
$lang['bg_BG']['SecurityAdmin_left.ss']['CREATE'] = 'Създай';
$lang['bg_BG']['SecurityAdmin_left.ss']['DEL'] = 'Изтрий';
$lang['bg_BG']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Изтрий избраните групи';
$lang['bg_BG']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Позволи drag &amp; drop подреждане';
$lang['bg_BG']['SecurityAdmin_left.ss']['GO'] = 'Давай';
$lang['bg_BG']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Групи за сигурност';
$lang['bg_BG']['SecurityAdmin_left.ss']['SELECT'] = 'Изберете страниците които искате да изтриете и после натиснете бутона по-долу';
$lang['bg_BG']['SecurityAdmin_left.ss']['TOREORG'] = 'За да реорганизирате вашият сайт провлачете страниците където желаете';
$lang['bg_BG']['SecurityAdmin_right.ss']['WELCOME1'] = 'Добре дошли в';
$lang['bg_BG']['SecurityAdmin_right.ss']['WELCOME2'] = 'секция за управление на сигурността. Моля изберете група от ляво.';
$lang['bg_BG']['SideReport']['EMPTYPAGES'] = 'Празни страници';
$lang['bg_BG']['SideReport']['LAST2WEEKS'] = 'Страници променени през последните 2 седмици';
$lang['bg_BG']['SideReport']['REPEMPTY'] = 'Доклада %s е празен.';
$lang['bg_BG']['SideReport']['TODO'] = 'За Довършване';
$lang['bg_BG']['StaticExporter']['BASEURL'] = 'Основен URL';
$lang['bg_BG']['StaticExporter']['EXPORTTO'] = 'Експортирай в тази папка';
$lang['bg_BG']['StaticExporter']['FOLDEREXPORT'] = 'Папка към която да се експортира';
$lang['bg_BG']['StaticExporter']['NAME'] = 'Статичен експортър';
$lang['bg_BG']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Не са намерени никакви изображения';
$lang['bg_BG']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Избери папка по-горе)';
$lang['bg_BG']['ViewArchivedEmail.ss']['CANACCESS'] = 'Можете да влезнете в архивирания сайт чрез тази препратка:';
$lang['bg_BG']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Вие поискахте да видите съдържанието на нашия сайт на';
$lang['bg_BG']['WaitingOn.ss']['ATO'] = 'назначено на';
$lang['bg_BG']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Налични Widgets';
$lang['bg_BG']['WidgetAreaEditor.ss']['INUSE'] = 'Използвани в момента Widgets';
$lang['bg_BG']['WidgetAreaEditor.ss']['NOAVAIL'] = 'В момента няма никакви widgets.';
$lang['bg_BG']['WidgetAreaEditor.ss']['TOADD'] = 'За да добавите widgets, плъзнете ги от лявата страна тук.';
$lang['bg_BG']['WidgetEditor.ss']['DELETE'] = 'Изтрий';

?>