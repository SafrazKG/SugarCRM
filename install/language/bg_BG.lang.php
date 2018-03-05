<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'LBL_BASIC_SEARCH'					=> 'Основно търсене',
	'LBL_ADVANCED_SEARCH'				=> 'Разширено търсене',
	'LBL_BASIC_TYPE'					=> 'Базов тип',
	'LBL_ADVANCED_TYPE'					=> 'Разширен тип',
	'LBL_SYSOPTS_1'						=> 'Изберете от следните опции за системна конфигурация.',
    'LBL_SYSOPTS_2'                     => 'Какъв е типът на базата данни, която ще използва инсталираният SugarCRM?',
	'LBL_SYSOPTS_CONFIG'				=> 'Системна конфигурация',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Изберете тип на базата данни',
    'LBL_SYSOPTS_DB_TITLE'              => 'Използвана база данни',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Моля отстранете следните грешки преди да продължите:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Моля задайте права за писане в следната директория:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Въведените име на базата данни, потребителско име и/или паролата са невалидни. Не може да бъде направена връзка с базата данни. Моля, въведете валиден хост, потребителско име и парола.',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Въведените име на базата данни, потребителско име и/или паролата са невалидни. Не може да бъде направена връзка с базата данни. Моля, въведете валиден хост, потребителско име и парола.',
    'ERR_DB_IBM_DB2_VERSION'			=> 'Използваната версия на DB2 (%s) не се поддържа от Sugar. Трябва да инсталирате версия на базата данни съвместима с инсталацията на SugarCRM. Моля консултирайте се за поддържаните версии на DB2 в "Release notes".',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Ако, изберете клиента Oracle, той трябва да бъде инсталиран и конфигуриран.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Въведените име на базата данни, потребителско име и/или паролата са невалидни. Не може да бъде направена връзка с базата данни. Моля, въведете валиден хост, потребителско име и парола.',
	'ERR_DB_OCI8_CONNECT'				=> 'Въведените име на базата данни, потребителско име и/или паролата са невалидни. Не може да бъде направена връзка с базата данни. Моля, въведете валиден хост, потребителско име и парола.',
	'ERR_DB_OCI8_VERSION'				=> 'Версията на Oracle не се поддържа от Sugar. Трябва да инсталирате версия, която е съвместима с Sugar. Моля, консултирайте се с матрицата за Съвместимост.',
    'LBL_DBCONFIG_ORACLE'               => 'Моля въведете име на базата данни. То ще бъде използвано като "table space" по подразбиране за вашия потребител ((SID от tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Възможност за запитване',
	'LBL_Q1_DESC'						=> 'Възможности по тип',
	'LBL_Q2_DESC'						=> 'Възможности чрез профил',
	'LBL_R1'							=> 'Възможности по етап на преговори за последните 6 месеца',
	'LBL_R1_DESC'						=> 'Възможности през следващите 6 месеца, разбити по месец и тип',
	'LBL_OPP'							=> 'Възможност за определен тип данни',
	'LBL_OPP1_DESC'						=> 'Тук можете да промените външния вид на заявката.',
	'LBL_OPP2_DESC'						=> 'Тази заявка ще бъде подредена под първата заявка',
    'ERR_DB_VERSION_FAILURE'			=> 'Версията на базата данни не може да бъде проверена.',


	'ERR_OC_PASSWORD'					=> 'Изисква се парола.',
	'ERR_OC_SERVER_URL'					=> 'Адрес на Sugar сървъра е задължителен.',
	'ERR_OC_USERNAME'					=> 'Потребителско име е задължително.',
	'LBL_INSTALL_OC'					=> 'Инсталирай Offline клиент',
    'LBL_OC_ADMIN'                      => 'Моля свържете с администратора за разрешаване на проблема.',
    'LBL_OC_SUCCESS'                    => 'Инсталацията на "Offline" клиента завърши. Моля натиснете с мишката долния бутоин, за да бъдете прехвърлени в програмата.',
	'LBL_OC_INSTALL_ADMIN_NAME'			=> 'Администратор',
	'LBL_OC_INSTAL_DIRECTIONS'			=> 'Моля въведете информацията по-долу, за да бъде коректно инсталиран и синхронизиран вашият "offline" клиент.',
	'LBL_OC_INSTALL_SERVER_URL'			=> 'Линк за достъп до сървъра на Sugar',
	'LBL_OC_INSTALL_PASS'				=> 'Парола за потребителя на сървъра',
	'LBL_OC_INSTALL_TITLE'				=> 'Инсталация на Offline клиент',
	'LBL_OC_INSTALL_USERNAME_DETAILS'	=> 'Потребителско име, което ще се използва за връзка със сървъра на Sugar..',
	'LBL_OC_INSTALL_USERNAME'			=> 'Потребителско име',
	'LBL_PERFORM_OC_INSTALL'			=> 'Инициализация на процеса на инсталация на Offline клиент',
    'LBL_OC_INSTALL_DIRECTIONS'         => 'Моля въведете информацията по-долу, за да бъде коректно инсталиран и синхронизиран вашият "offline" клиент.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Трябва да въведете име на SugarCRM администратора.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Трябва да въведете парола на SugarCRM администратора.',

    'ERR_CHECKSYS'                      => 'Открити са грешки по време на тесвта за съвместимост.  За да функционира коректно инсталацията на SugarCRM моля предприемете стъпки за разрешаване на идентифицираните казуси, след което натиснете бутона за нова проверка или стартирайте инсталацията отново.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Параметърът Allow Call Time Pass Reference е със стойност On (трябва да бъде променен на Off във файла php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'Не е намерено: автоматизираните задачи на Sugar ще работят с ограничена функционалност. Услугата за архивиране на електронната поща няма да работи.',
    'ERR_CHECKSYS_IMAP'					=> 'Липсващи библиотеки: За функциониране на входяща поща и маркетингови кампании са необходими библиотеките IMAP. Тези функции няма да бъдат достъпни в системата.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Опцията "Magic Quotes GPC" не може да има стойност "On" когато се използва "MS SQL Server".',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Внимание: ',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Set this to',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M или повече във файла php.ini)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Минимална поддържана версия 4.1.2 - Инсталирана версия:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Грешка при достъп до променливите на текушата сесия. Инсталацията не може да продължи.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Не е валидна директория',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Предупреждение: Липса на права за писане',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Инсталираната версия на PHP не се поддържа от SugarCRM.  Трябва да инсталирате версия съвместима с текущата версия на SugarCRM.  За повече информация относно поддържаните версии на PHP можете да разгледате "Compatibility Matrix in the Release Notes". Инсталираната версия на PHP е:',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Your version of IIS is not supported by Sugar.  You will need to install a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported IIS Versions. Your version is',
	'ERR_CHECKSYS_FASTCGI'              => 'We detect that you are not using a FastCGI handler mapping for PHP. You will need to install/configure a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported Versions. Please see <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> for details',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'За по-добра производителност при използване на IIS/FastCGI sapi, моля задайте стойност 0 на параметъра fastcgi.logging във файла php.ini.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Инсталираната версия на PHP не се поддържа: ( версия',
    'LBL_DB_UNAVAILABLE'                => 'Базата данни е недостъпна.',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Поддръжката на базата данни не беше намерена. Проверете дали имате необходимите драйвери за един от следните видове поддържани бази данни: MySQL, MS SQLServer, Oracle или DB2. Може да е необходимо да премахнете коментара към разширението във файла php.ini или да компилирате повторно с правилния двоичен файл в зависимост от вашата версия на PHP. Моля, направете справка с вашето PHP ръководство за повече информация относно това как да разрешите Поддръжката на базата данни.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Функции предоставяни от библиотеките XML Parser Libraries и необходими за функционирането на SugarCRM не са открити. Вероятно трябва да премахнете коментара пред реда за съответното разширение във файла  php.ini или да компилирате отново PHP. Можете да се обърнете към ръководството на използваната PHP версия за повече информация.',
    'LBL_CHECKSYS_CSPRNG' => 'Генератор на случайни номера',
    'ERR_CHECKSYS_MBSTRING'             => 'Функции предоставяни от разширението mbstring и необходими за функционирането на SugarCRM не са открити.  <br/><br/>Разширението mbstring обикновено не е разрешено по подразбиране в PHP инсталациите и трябва да бъде активирано чрез опцията --enable-mbstring в процеса на компилиране на приложението. Моля обърнете се към ръководството на използваната PHP версия за повече информация как да разрешите разширението mbstring.',
    'ERR_CHECKSYS_MCRYPT'               => "Mcrypt module isn't loaded. Please refer to your PHP Manual for more information on how to load mcrypt module.",
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'Няма зададена стойност на параметъра session.save_path в конфигурационния файл на php.ini или зададената папка не съществува. Трябва да зададете стойност на параметъра save_path setting или да се уверите, че зададената папка съществува.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'Променливата session.save_path в конфигурационния файл php.ini сочи към папка, за която няма права за писане.  Моля предприемете необходимите стъпки, за да коригирате правата на достъп.  <br>В зависимост от използваната операционна система вие трябва да промените правата на достъп (chmod 766) или да премахнете опцията, даваща права единствено за четене.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Конфигурационният файл config.php съществува, но не са налични права за неговото редактиране. Моля предприемете необходимите стъпки, за да коригирате правата на достъп. В зависимост от използваната операционна система вие трябва да промените правата на достъп (chmod 766) или да премахнете опцията, даваща права единствено за четене.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Конфигурационният файл config_override.php съществува, но не са налични права за неговото редактиране. Моля предприемете необходимите стъпки, за да коригирате правата на достъп. В зависимост от използваната операционна система вие трябва да промените правата на достъп (chmod 766) или да премахнете опцията, даваща права единствено за четене.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Папката със специфични настройки за инсталацията съществува, но за нея яма права за писане.  В зависимост от използваната операционна система вие трябва да промените правата на достъп (chmod 766) или да премахнете опцията, даваща права единствено за четене. Моля предприемете нужните стъпки, за да може файлът да бъде модифциран от инсталационния скрипт.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "The files or directories listed below are not writeable or are missing and cannot be created.  Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 766), or to right click on the parent directory and uncheck the &#39;read only&#39; option and apply it to all subfolders.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Safe Mode e активен (може би желаете да го изключите в файла php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Не е открит: SugarCRM работи значително по-бързо при наличие на zlib компресия.',
    'ERR_CHECKSYS_ZIP'					=> 'Не е инсталирана ZIP поддръжка: ZIP модулът трябва да бъде инсталиран, за да може SugarCRM да обработва компресирани файлове.',
    'ERR_CHECKSYS_BCMATH'				=> 'Не е открита поддръжка на BCMATH: SugarCRM се нуждае от BCMATH за извършване на математически операции.',
    'ERR_CHECKSYS_HTACCESS'             => 'Неуспешен опит за презапис на файла .htaccess. Това вероятно означава, че не е включена опцията "AllowOverride" за директорията на Sugar.',
    'ERR_CHECKSYS_CSPRNG' => 'CSPRNG изключение',
	'ERR_DB_ADMIN'						=> 'Въведените потребителко име и/или парола на администратор на базата данни са невалидни. Не може да бъде направена връзка с базата данни.  Моля въведете ваидно потребителско име и парола.  (Възникнала грешка:',
    'ERR_DB_ADMIN_MSSQL'                => 'Въведените потребителко име и/или парола на администратор на базата данни са невалидни. Не може да бъде направена връзка с базата данни.  Моля въведете ваидно потребителско име и парола.',
	'ERR_DB_EXISTS_NOT'					=> 'Посочената база данни не съществува.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Посочената база данни съдържа конфигурационни данни за инсталация на SugarCRM. За да изпълните инсталационния скрипт с тази база, моля стартирайте процеса отначало като маркирате опцията: "Текущите таблици на Sugar да бъдат изтрити и създадени отново?" За да актуализирате версията на съществуваща инсталация, можете да използвате опцията Актуализиране в секция Администриране. Моля запознайте с документацията за актуализация на следния адрес <a href="http://www.sugarforge.org/content/downloads/" target="_new">here</a>.',
	'ERR_DB_EXISTS'						=> 'Съществува база данни с въведеното име -- не може да бъде създадена нова със същото име.',
    'ERR_DB_EXISTS_PROCEED'             => 'База данни с въведеното име вече съществува.  Имате възможност<br>1. да натиснете бутона предишна сръпка и да въведете различно име за използваната от системата база данни <br>2.  да продължите инсталацията като натиснете бутона следваща стъпка, като в този случай всички таблици в съшествуващата база ще бъдат изтрити.  <strong>Данните от тези таблици ще бъдат загубени.</strong>',
	'ERR_DB_HOSTNAME'					=> 'Трябва да бъде посочено име на машината.',
	'ERR_DB_INVALID'					=> 'Маркиран е невалиден тип на базата данни.',
	'ERR_DB_LOGIN_FAILURE'				=> 'Въведените име на базата данни, потребителско име и/или паролата са невалидни. Не може да бъде направена връзка с базата данни. Моля, въведете валиден хост, потребителско име и парола.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Въведените име на базата данни, потребителско име и/или паролата са невалидни. Не може да бъде направена връзка с базата данни. Моля, въведете валиден хост, потребителско име и парола.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Въведените име на базата данни, потребителско име и/или паролата са невалидни. Не може да бъде направена връзка с базата данни. Моля, въведете валиден хост, потребителско име и парола.',
	'ERR_DB_MYSQL_VERSION'				=> 'Версията (%s) на MySQL сървъра за данни не се поддържа от Sugar.  Трябва да инсталирате версия съвместима с приложението.  Проверете документацията на SugarCRM за поддържаните MySQL версии.',
	'ERR_DB_NAME'						=> 'Трябва да бъде посочено име на базата данни.',
	'ERR_DB_NAME2'						=> "Името на базата данни не може да съдържа символите &#39;&#39;, &#39;/&#39;, или &#39;.&#39;",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Името на базата данни не може да съдържа символите &#39;&#39;, &#39;/&#39;, или &#39;.&#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Името на базата данни не може да започва с число, '#', или '@' и не може да съдържа интервал, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', or '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Името на базата данни може да съдържа единствено букви, цифри и символите '#', '_', '-', ':', '.', '/' or '$'",
	'ERR_DB_PASSWORD'					=> 'Въведените пароли за администратора на базата данни на SugarCRM не съвпадат.  Моля въведете отново паролите в кореспондиращите полета.',
	'ERR_DB_PRIV_USER'					=> 'Въведете потребителско име на администратора на базата данни.  Името ще бъде използвано за установяване на първоначална връзка с базата.',
	'ERR_DB_USER_EXISTS'				=> 'Въведеното име на потребител използван от SugarCRM вече съществува в системата -- не може да бъде създаден нов потребител със същото име. Моля въведете ново потребителско име.',
	'ERR_DB_USER'						=> 'Въведете потребителско име на администратора на базата данни.',
	'ERR_DBCONF_VALIDATION'				=> 'Моля отстранете следните грешки преди да продължите:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Въведените пароли за потребителя използван от SugarCRM не съвпадат. Моля въведете отново еднакви пароли в съответните полета.',
	'ERR_ERROR_GENERAL'					=> 'Възникнаха следните грешки:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Файлът не може да бъде изтрит:',
	'ERR_LANG_MISSING_FILE'				=> 'Файлът не може да бъде намерен:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'No language pack file found at include/language inside:',
	'ERR_LANG_UPLOAD_1'					=> 'Възникна проблем при зареждане на файла.  Моля опитайте отново.',
	'ERR_LANG_UPLOAD_2'					=> 'Езиковите пакети трябва да архиви с разширение ZIP.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP скриптът бе може да премести временните файлове в директорията за актуализация.',
	'ERR_LICENSE_MISSING'				=> 'Пропуснати задължителни полета',
	'ERR_LICENSE_NOT_FOUND'				=> 'Лицензният файл не е открит!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Въведена директория за логовете на системата не е валидна.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Въведенета директория за логовете няма права за писане.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Трябва да въведете директория за логовете ако искате инсталираният SugarCRM да не използва стандартната такава.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Грешка при директоното изпълнение на скрипта.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Символът &#39;кавичка&#39; не може да се използва за',
	'ERR_PASSWORD_MISMATCH'				=> 'Въведените пароли за SugarCRM администратора не съвпадат.  Моля въведете отново еднакви пароли в съответните полета.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Грешка при опит за редактиране на  <span class=stop>config.php</span>.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Можете да продължите инсталацията като създадете ръчно файла config.php и копирате в него конфигурацията показана по-долу. Вие обаче <strong>трябва </strong>да създадете файла config.php преди да продължите със следващата стъпка.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Създадохте ли файла config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Предупреждение: Файлът config.php не може да бъде модифициран.  Моля уверете се, че файлът съществува.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Cannot write to the',
	'ERR_PERFORM_HTACCESS_2'			=> 'file.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Ако желаете да не разрешите журнала със събития да бъде отварян през уеб браузър, създайте файл .htaccess в директорията на журнала и добевете в него реда:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>Не е налична Интернет връзка.</b> Когато имате достъп до глобалната мрежа Интернет, моля посетете<a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a>, за да се регистрирате в SugarCRM. Информация за вашите планове да използвате SugarCRM ни позволяват да предоставяме приложения, които отговарят на бизнес потребностите ви.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Въведената директоирия за сесии не е валидна.',
	'ERR_SESSION_DIRECTORY'				=> 'Въведената директория за сесии няма права за писане.',
	'ERR_SESSION_PATH'					=> 'Трябва да въведете директория за сесиите ако искате инсталираният SugarCRM да не използва стандартната такава.',
	'ERR_SI_NO_CONFIG'					=> 'Файлът  config_si.php не е поставен в основната директория променливата $sugar_config_si не е дефинирана в config.php',
	'ERR_SITE_GUID'						=> 'Трябва да въведете идентификатор на приложението ако искате инсталираният SugarCRM да не използва автоматично генерираният такъв.',
    'ERROR_SPRITE_SUPPORT'              => "Библиотеката GD не може да бъде открита, поради което функционалността CSS Sprite няма да бъде достъпна.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Предупреждение: Настройките на PHP интерпретатора трябва да бъдат променени така, че да позволяват качване на файлове с размер поне 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Размер на файловете, качвани в системата',
	'ERR_URL_BLANK'						=> 'Въведете базов URL адрес за инсталацията на Sugar.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Не е открит инсталационен запис за',
	'ERROR_FLAVOR_INCOMPATIBLE'			=> 'Зарежданият файл е несъвместим с текущото издание (Open Source, Professional, or Enterprise) на Sugar Suite:',
	'ERROR_LICENSE_EXPIRED'				=> "Грешка: Лицензът Ви е изтекъл",
	'ERROR_LICENSE_EXPIRED2'			=> " ден(дни). Моля, отидете на <a href='index.php?action=LicenseSettings&module=Administration'>\"License Management\"</a> в секция Администриране и въведете нов лицензионен ключ. При неактивиране на ключа в рамките на 30 дни от момента на изтичане на лиценза, достъпът до приложението ще Ви бъде отказан.",
	'ERROR_MANIFEST_TYPE'				=> 'Файлът manifest.php трябва да специфицира тип на пакет.',
	'ERROR_PACKAGE_TYPE'				=> 'Файлът Manifest описва неизвестен тип пакет',
	'ERROR_VALIDATION_EXPIRED'			=> "Грешка: Ключът за валидиране на лиценза е невалиден",
	'ERROR_VALIDATION_EXPIRED2'			=> " ден(дни). Моля, отидете на <a href='index.php?action=LicenseSettings&module=Administration'>\"License Management\"</a> в секция Администриране и въведете нов лицензионен ключ. При неактивиране на ключа в рамките на 30 дни от момента на изтичане на лиценза, достъпът до приложението ще Ви бъде отказан.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Зарежданият файл е несъвместим с текущата версия на Sugar Suite:',

	'LBL_BACK'							=> 'Върни',
    'LBL_CANCEL'                        => 'Отмени',
    'LBL_ACCEPT'                        => 'Приеми',
	'LBL_CHECKSYS_1'					=> 'За да функционира инсталацията на SugarCRM коректно, моля уверете се че всички изброени по-долу системни проверски са преминали успешно (маркирани в зелен цвят). Ако има идентифицирани проблеми при някои от проверките (маркирани в червен цвят), предприемете действия за тяхното отстраняване.<BR><BR> За допълнителна информация и насоки можете да посетите <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Права за писане в поддиректориите на директория Cache',
    'LBL_DROP_DB_CONFIRM'               => 'Вече съществува база данни с въведенето име.<br>Опциите са:<br>1.  Натиснете бутона Отмени и въведете ново име на база данни, или <br>2.  Натиснете бутона Приеми и продължете с процеса на инсталация.  Всички съществуващи таблици в базата данни ще бъдат изтрити. <strong>Таблиците и съществуващите данни ще бъдат загубени.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP параметърът Allow Call Time Pass Reference е Off',
    'LBL_CHECKSYS_COMPONENT'			=> 'Компонент',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Незадължителни компоненти',
	'LBL_CHECKSYS_CONFIG'				=> 'Права за писане в конфигурационния файл на SugarCRM (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Права за редактиране на конфогирационния файл на SugarCRM (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'Модул cURL',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Настройки на PHP параметъра Session Save Path',
	'LBL_CHECKSYS_CUSTOM'				=> 'Права за писане в директория Custom',
	'LBL_CHECKSYS_DATA'					=> 'Права за писане в поддиректориите на директория Data',
	'LBL_CHECKSYS_IMAP'					=> 'Модул IMAP',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'Модул MB Strings',
    'LBL_CHECKSYS_MCRYPT'               => 'MCrypt Module',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (без ограничение)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'ОК (неограничено)',
	'LBL_CHECKSYS_MEM'					=> 'Лимит на паметта за PHP >=',
	'LBL_CHECKSYS_MODULE'				=> 'Права за писане в поддиректорите и файловете на Modules',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'Версия на MySQL',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Не е налично',
	'LBL_CHECKSYS_OK'					=> 'ОК',
	'LBL_CHECKSYS_PHP_INI'				=> 'Конфигурационният файл на php (php.ini) се намира в:',
	'LBL_CHECKSYS_PHP_OK'				=> 'ОК (версия',
	'LBL_CHECKSYS_PHPVER'				=> 'Версия на PHP',
    'LBL_CHECKSYS_IISVER'               => 'Версия на IIS',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Нова проверка',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'Режимът Safe Mode на PHP е изключен',
	'LBL_CHECKSYS_SESSION'				=> 'Параметърът Session Save Path сочи към директория с права за писане (',
	'LBL_CHECKSYS_STATUS'				=> 'Статус',
	'LBL_CHECKSYS_TITLE'				=> 'Потвърждение на резултатите от проверката на системата',
	'LBL_CHECKSYS_VER'					=> 'Инсталирана: ( версия',
	'LBL_CHECKSYS_XML'					=> 'XML анализ',
	'LBL_CHECKSYS_ZLIB'					=> 'Модул ZLIB Compression',
	'LBL_CHECKSYS_ZIP'					=> 'Модул ZIP',
    'LBL_CHECKSYS_BCMATH'				=> 'Математически модул с произволна точност',
    'LBL_CHECKSYS_HTACCESS'				=> 'Настройка на опцията "AllowOverride" за файла .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Моля коригирайте следните файлове и директории преди да продължите:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Моля коригирайте следните директории на Модули и файловете в тях преди да продължите:',
    'LBL_CHECKSYS_UPLOAD'               => 'Директория за качване на файлове',
    'LBL_CLOSE'							=> 'Затвори',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'да бъде създаден',
	'LBL_CONFIRM_DB_TYPE'				=> 'Използвана база данни',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Моля потвърдете настройките.  Ако желаете да промени някои от стойностите, можете да натиснете бутона "Предишна стъпка".  За да стартирате инсталацията натиснете "Следваща стъпка".',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Информация за лицензите',
	'LBL_CONFIRM_NOT'					=> 'няма',
	'LBL_CONFIRM_TITLE'					=> 'Потвърждаване на настройките',
	'LBL_CONFIRM_WILL'					=> 'ще',
	'LBL_DBCONF_CREATE_DB'				=> 'Създай база данни',
	'LBL_DBCONF_CREATE_USER'			=> 'Добавяне на нов потребител [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Предупреждение: Всички съществуващи данни на SugarCRM ще бъдат изтрити<br>ако това поле е маркирано.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Текущите таблици на Sugar да бъдат изтрити и създадени отново?',
    'LBL_DBCONF_DB_DROP'                => 'Изтриване на съществуващите таблици',
    'LBL_DBCONF_DB_NAME'				=> 'Име на базата данни',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Парола на потребителя използван от SugarCRM',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Въведете отново паролата на потребителя използван от SugarCRM',
	'LBL_DBCONF_DB_USER'				=> 'Потребител използван от SugarCRM',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Потребител използван от SugarCRM',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Потребителско име на администратора',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Парола на администратора',
	'LBL_DBCONF_DEMO_DATA'				=> 'Записване на примерни данни в базата?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Използване на примерни данни',
	'LBL_DBCONF_HOST_NAME'				=> 'Име на машината',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Инсталация',
	'LBL_DBCONF_HOST_PORT'				=> 'Порт',
    'LBL_DBCONF_SSL_ENABLED'            => 'Разрешаване на SSL връзка',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Моля въведете данни за достъп до базата данни. Ако не сте сигурни каква информация да въведете препоръчваме да използвате стойностите по подразбиране.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Да съдържат ли примерните данни multi-byte текст?',
    'LBL_DBCONFIG_MSG2'                 => 'Име на машината (DNS име или IP адрес), където се намира базата данни:',
    'LBL_DBCONFIG_MSG3'                 => 'Име на базата данни, която ще използва инсталираният в момента SugarCRM:',
    'LBL_DBCONFIG_B_MSG1'               => 'За конфигурирането на базата данни на SugarCRM са необходими потребителско име и парола на администратор, който може да създава таблици и потребители, както и на потребител с права за създаване на записи в базата данни.',
    'LBL_DBCONFIG_SECURITY'             => 'От съображение за сигурност можете да посочите отделен потребител, който да бъде използван от SugarCRM за връзка с базата данни.  Потребителят трябва да има права да чете и записва в базата данни, която ще бъде създадена за инсталирания SugarCRM.  Потребителят може да бъде вече посоченият администратор или трябва да въведете информация за нов или вече съществуващ друг потребител.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Направи го вместо мен',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Вече съществуващ потребител',
    'LBL_DBCONFIG_CREATE_DD'            => 'Създаване на нов потребител',
    'LBL_DBCONFIG_SAME_DD'              => 'Посоченият администратор',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Търсене по цели фрази',
    'LBL_FTS_INSTALLED'                 => 'е инсталиран',
    'LBL_FTS_INSTALLED_ERR1'            => 'Опцията за търсене по цели фрази не е инсталирана.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Можете да направите инсталацията, но няма да можете да използвате функционалността за пълнотекстово търсене. Моля запознайте се с ръководството за инсталация на сървъра за бази данни, за да разберете как да направите това или се свържете с Администратор.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Парола на потребителя с административни права',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Въведеният по-горе потребител е с административни права?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Потребителят с административни права трябва да може да създава бази данни, да създава/изтрива таблици и да създаваи потребители в сървъра за бази данни. Потребителят с административни права ще бъде използван единствено в процеса на инсталация за изпълнение на изброените задачи.  Можете да използвате въведения по-горе потребител, през който ще разботи системата в последствие, в случай че той разполага с необходимите права.',
	'LBL_DBCONF_PRIV_USER'				=> 'Потребител с административни права',
	'LBL_DBCONF_TITLE'					=> 'Конфигурация на базата данни',
    'LBL_DBCONF_TITLE_NAME'             => 'Въведете име на базата данни',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Въведете информация за потребителите на базата данни',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'След като промяната във файла config.php е направена, за да започнете нова инсталация можете да натиснете бутона "Начало".  <i>След приключване на процеса е препоръчително да промените стойността на променливата &#39;installer_locked&#39; на &#39;true&#39;.</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'Инсталиращата програма на SugarCRM е била изпълнена вече веднъж.  От съображение за сигурност е забранено повторното й изпълнение.  Ако сте сигурни, че искате да стартирате процеса на инсталация отново, можете да редактирате файла config.php като промените стойността на променливата (или я добавите ако не съществува) &#39;installer_locked&#39; на &#39;false&#39;.  Редът трябва да изглжда по следния начин:',
	'LBL_DISABLED_HELP_1'				=> 'За помощ свързана с инсталацията на приложението, моля посетете SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'форуми за поддръжка',
	'LBL_DISABLED_TITLE_2'				=> 'Инсталацията на SugarCRM е забранена',
	'LBL_DISABLED_TITLE'				=> 'Инсталацията на SugarCRM е забранена',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Знаков набор най-често използван в регионалните ви настройки',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Настройки на Изходяща поща',
    'LBL_EMAIL_CHARSET_CONF'            => 'Character Set for Outbound Email',
	'LBL_HELP'							=> 'Помощ',
    'LBL_INSTALL'                       => 'Инсталиране',
    'LBL_INSTALL_TYPE_TITLE'            => 'Опции за инсталация',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Изберете тип инсталация',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Стандартна инсталация</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => '<b>Детайлна инсталация</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'Ключът активира функционалността на приложението, като не е необходим за процеса на инсталация. Можете да не го въведете в момента, но задължително трябва да направите това след като инсталацията е приключила.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Изисква предоставяне на минимум информация в процеса на инсталация. Препоръчва се за потребители, които нямат голям опит със системата.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Позволява настройка на допълнителни опции по време на инсталацията. Голяма част от тези опции могат да бъдат конфигурирани през менютата за администриране и след като приложението е инсталирано. Препоръчва се за напреднали потребители.',
	'LBL_LANG_1'						=> 'За да използвате SugarCRM на език различен от стандатния (US-English), можете да изтеглите и инсталирате езиков пакет сега. Имате възможност да инсталирате езикови пакети също и от административния панел на SugarCRM.  Ако искате да пропуснете тази стъпка, натиснете бутона "Следваща стъпка".',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Инсталиране',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Изтрий',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Деинсталиране',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Зареди',
	'LBL_LANG_NO_PACKS'					=> 'няма',
	'LBL_LANG_PACK_INSTALLED'			=> 'Следните езикови пакети са инсталирани:',
	'LBL_LANG_PACK_READY'				=> 'Следните езикови пакети могат да бъдат инсталирани:',
	'LBL_LANG_SUCCESS'					=> 'Езиковият пакет беше успешно зареден в системата.',
	'LBL_LANG_TITLE'			   		=> 'Системен език',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'SugarCRM се инсталира в момента.  Инсталацията може да отнеме няколко минути.',
	'LBL_LANG_UPLOAD'					=> 'Зареждане на езиков пакет',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Лицензно споразумение',
    'LBL_LICENSE_CHECKING'              => 'Проверка на системата за съвместимост.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Системна проверка',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Проверка на идентификационните данни на базата данни, FTS.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Системата премина проверката за съвместимост.',
    'LBL_LICENSE_REDIRECT'              => 'Пренасочване след',
	'LBL_LICENSE_DIRECTIONS'			=> 'Ако разполагате с лицензна информация, моля въведете я в полетата по-долу.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Въведете активиращ ключ',
	'LBL_LICENSE_EXPIRY'				=> 'Валидно до',
	'LBL_LICENSE_I_ACCEPT'				=> 'Приеми',
	'LBL_LICENSE_NUM_USERS'				=> 'Брой потребители',
	'LBL_LICENSE_OC_DIRECTIONS'			=> 'Моля въведете броят на закупените "offline" клиенти.',
	'LBL_LICENSE_OC_NUM'				=> 'Брой на лицензите за Offline клиенти',
	'LBL_LICENSE_OC'					=> 'Лицензи за "Offline" клиенти',
	'LBL_LICENSE_PRINTABLE'				=> 'Формат за печат',
    'LBL_PRINT_SUMM'                    => 'Разпечатай резюме',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM лиценз',
	'LBL_LICENSE_TITLE'					=> 'Информация за лицензите',
	'LBL_LICENSE_USERS'					=> 'Лицензирани потребители',

	'LBL_LOCALE_CURRENCY'				=> 'Настройки на валути',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Валута',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Валутен символ',
	'LBL_LOCALE_CURR_ISO'				=> 'Код на валутата (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Разделител за хилядите',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Десетичен знак',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Пример',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Бропй значещи цифри',
	'LBL_LOCALE_DATEF'					=> 'Формат на датата по подразбиране',
	'LBL_LOCALE_DESC'					=> 'Въведените регионални настройки ще бъдат използвани като системни за инсталирания SugarCRM.',
	'LBL_LOCALE_EXPORT'					=> 'Знаков набор при Импортиране/Експортиране<br> <i>(Електронна поща, .csv, vCard, PDF, данни)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Разделител за експорт (.csv)',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Настройки за Импорт/Експорт',
	'LBL_LOCALE_LANG'					=> 'Език по подразбиране',
	'LBL_LOCALE_NAMEF'					=> 'Формат на името по подразбиране',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = обръщение<br />f = име<br />l = фамилия',
	'LBL_LOCALE_NAME_FIRST'				=> 'Иван',
	'LBL_LOCALE_NAME_LAST'				=> 'Иванов',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Д-р.',
	'LBL_LOCALE_TIMEF'					=> 'Формат на часа по подразбиране',
	'LBL_LOCALE_TITLE'					=> 'Регионални настройки',
    'LBL_CUSTOMIZE_LOCALE'              => 'Редакция на регионални настройки',
	'LBL_LOCALE_UI'						=> 'Потребителски интерфейс',

	'LBL_ML_ACTION'						=> 'Действие',
	'LBL_ML_DESCRIPTION'				=> 'Описание',
	'LBL_ML_INSTALLED'					=> 'Инсталирано на',
	'LBL_ML_NAME'						=> 'Име',
	'LBL_ML_PUBLISHED'					=> 'Публикувано на',
	'LBL_ML_TYPE'						=> 'Тип',
	'LBL_ML_UNINSTALLABLE'				=> 'Не подлежи на деинсталация',
	'LBL_ML_VERSION'					=> 'Версия',
	'LBL_MSSQL'							=> 'SQL сървър',
	'LBL_MSSQL_SQLSRV'				    => 'SQL сървър (Microsoft SQL Server Driver for PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (разширение mysqli)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Следваща',
	'LBL_NO'							=> 'Не',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Задаване на парола на администратова на системата',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'audit table /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Създаване на конфигурационен файл на SugarCRM',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Създаване на базата данни</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>на</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Създаване на потребителско име и парола за достъп до базата данни...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Създаване на стандартни данни в SugarCRM',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Създаване на потребителско име и парола за достъп до базата данни от локалната машина...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Създаване на таблици за връзка между модулите в SugarCRM',
	'LBL_PERFORM_CREATING'				=> 'creating /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Създаване на стандартни справки',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Създаване на стандартни автоматизирани задачи',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Създаване на стандартни настройки',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Създаване на стандартни потребители',
	'LBL_PERFORM_DEMO_DATA'				=> 'Записване на примерни данни в базата (може да е необходимо малко време за изпълнение на операцията)',
	'LBL_PERFORM_DONE'					=> 'изпълнено<br>',
	'LBL_PERFORM_DROPPING'				=> 'dropping /',
	'LBL_PERFORM_FINISH'				=> 'Край',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Актуализиране на лицензната информация',
	'LBL_PERFORM_OUTRO_1'				=> 'Конфигурацията на SugarCRM',
	'LBL_PERFORM_OUTRO_2'				=> 'приключи!',
	'LBL_PERFORM_OUTRO_3'				=> 'Време за изпълнение:',
	'LBL_PERFORM_OUTRO_4'				=> 'секунди.',
	'LBL_PERFORM_OUTRO_5'				=> 'Размер на използваната памет:',
	'LBL_PERFORM_OUTRO_6'				=> 'байта.',
	'LBL_PERFORM_OUTRO_7'				=> 'Системата е инсталирана и конфигурирана за работа.',
	'LBL_PERFORM_REL_META'				=> 'relationship meta ...',
	'LBL_PERFORM_SUCCESS'				=> 'Успех!',
	'LBL_PERFORM_TABLES'				=> 'Създаване на таблици за отделните модули в SugarCRM и информация за връзките между тях',
	'LBL_PERFORM_TITLE'					=> 'Инсталация',
	'LBL_PRINT'							=> 'Печат',
	'LBL_REG_CONF_1'					=> 'Моля попълнете кратката форма по-долу, за да получавате от SugarCRM известия свързани с продукта, новини за обучения, специални оферти и покани за участие в организирани събития.  Ние не продаваме, не отдаваме под наем, не споделяме и по никакъв дриг начин не разпространяваме събраната информация.',
	'LBL_REG_CONF_2'					=> 'Вашето име и адрес за електронна поща са единствените задължителни полета за регистрация. Всички останали полета можете да попълните единствено по ваше желание, като имайте в предвид, че те са много полезни за нас. Ние не продаваме, не отдаваме под наем, не споделяме и по никакъв дриг начин не разпространяваме информацията събрана в процеса на регистрация.',
	'LBL_REG_CONF_3'					=> 'Благодаря за регистрацията. Натиснете бутона Край, за да влезете в системата. За да се идентифицирате използвайте потребителското име "admin" и въведената парола в стъпка 2.',
	'LBL_REG_TITLE'						=> 'Регистрация',
    'LBL_REG_NO_THANKS'                 => 'Не благодаря',
    'LBL_REG_SKIP_THIS_STEP'            => 'Пропусни стъпката',
	'LBL_REQUIRED'						=> '* Задължително поле',

    'LBL_SITECFG_ADMIN_Name'            => 'Потребителско име на SugarCRM администратора',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Въведете отново паролата на SugarCRM администратора',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Предупреждение: Администраторската парола от предишни инсталации ще бъде презаписана.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Парола на SugarCRM администратора',
	'LBL_SITECFG_APP_ID'				=> 'Идентификатор на приложението',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Ако опцията е маркирана, трябва да въведете идентификатор, който да замени автоматично генерираният такъв. Идентификаторът гарантира, че сесийте от една инсталация на SugarCRM не се използват от други инсталации на приложението.  Ако разполагате с клъстер от инсталации на SugarCR, те всички трябва да използват общ идентификатор.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Използване на уникален идентификатор на приложението',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Ако опцията е маркирана, трябва да въведете директория, в която да бъдат съхранявани логовете на SugarCRM. Независимо от мястото на съхранение на логовете, достъпът до тях през уеб браузър е ограничен чрез директира за пренасочване в .htaccess.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Използване на нестандартна директория за логове на системата',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Ако опцията е маркирана, трябва да въведете защитена директория, в която да се съхранява информацията за отворените с SugarCRM сесии. Опцията може да се използва, за да се защитят данните за сесийте ако съществуват рискове на публични или споделени сървъри.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Използване на нестандартна директория за сесиите към SugarCRM',
	'LBL_SITECFG_DIRECTIONS'			=> 'Моля въведете информация за конфигурацията на сайта. Ако не сте сигурни за определени полета ви препоръчваме да използвате стойностите по подразбиране.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Моля отстранете следните грешки преди да продължите:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Директория',
	'LBL_SITECFG_SESSION_PATH'			=> 'Директория<br>(с права за запис)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Избор на опции за сигурност',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Ако опцията е маркирана, системата периодично ще проверява за наличие на нови версии на приложението.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Автоматична проверка за нови версии?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Актуализация на SugarCRM',
	'LBL_SITECFG_TITLE'					=> 'Конфигурация на уеб сайта на SugarCRM',
    'LBL_SITECFG_TITLE2'                => 'Параметри за достъп и работа с SugarCRM',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Сигурност',
	'LBL_SITECFG_URL'					=> 'Адрес на сайта на SugarCRM',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Да се използват ли стойностите по подразбиране?',
	'LBL_SITECFG_ANONSTATS'             => 'Да се изпраща ли анонимна статиската за използване на системата?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Ако е маркирана опцията, Sugar ще изпраща <b>анонимна</b> статистика за вашата инсталация в SugarCRM Inc. при проверка за налични нови версии на продукта. Информацията ще ни помогне да разберем как се използва продукта и ще ни даде възможност да го подобряваме в бъдеще.',
    'LBL_SITECFG_URL_MSG'               => 'Въведете адресът (URL) на уеб сайта, на който SugarCRM ще може да бъде достъпван след приключване на инсталацията. Адресът на сайта ще се използва и за база при генериране на отделните страници в SugarCRM. Адресът трябва да съдържа DNS име на машината или IP адрес.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Въведете име на инсталираната система.  Името ще се визуализира в заглавното меню на уеб браузъра при работа на потребителите със системата.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'След приключване на процеса на инсталация, трябва да използвате потребителското име на SugarCRM администратора(admin), за да получите достъп до системата.  Въведете парола за SugarCRM администратора. Паролата може да бъде променяна след първоначалното влизане в системата.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Select collation (sorting) settings for your system. This settings will create the tables with the specific language you use. In case your language doesn&#39;t require special settings please use default value.',
    'LBL_SPRITE_SUPPORT'                => 'Поддръжка на Sprite',
	'LBL_SYSTEM_CREDS'                  => 'Потребителски имена и пароли',
    'LBL_SYSTEM_ENV'                    => 'Системни настройки',
	'LBL_START'							=> 'Начало',
    'LBL_SHOW_PASS'                     => 'Показване на паролите',
    'LBL_HIDE_PASS'                     => 'Скриване на паролите',
    'LBL_HIDDEN'                        => '<i>(скрит)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Изберете език за инсталацията</b>',
	'LBL_STEP'							=> 'Стъпка',
	'LBL_TITLE_WELCOME'					=> 'Добре дошли в SugarCRM',
	'LBL_WELCOME_1'						=> 'Инсталационният скрипт създава таблиците в базата данни на SugarCRM и извършва необходимата конфигурация на системата. Процесът трябва да отнеме около десет минути.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Готови ли сте да започнете инсталацията на SugarCRM?',
    'REQUIRED_SYS_COMP' => 'Необходими системни компоненти',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Преди да започнете, се уверете че са инсталирани следните системни компоненти, поддържани от                      
приложението:<br>
<ul>
<li> База данни/Система за управление на база данни (Например: MySQL, SQL Server, Oracle)</li>
<li> Уеб сървър (Apache, IIS)</li>
<li>Еластично търсене</li>
</ul>
В информацията, която се предоставя с текущото издание на приложението, ще намерите матрица за съвместимост, където можете да проверите за поддържани от SugarCRM системни компоненти.<br>',
    'REQUIRED_SYS_CHK' => 'Първоначална проверка на системата',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Когато започнете процеса на инсталация ще бъде извършена системна проверка на уеб сървъра, където се намират файловете на SugarCRM. Целта е да се провери,                      че системата е конфигурирана правилно и са налични всички необходими компоненти                      
за успешното завършване на инсталацията. <br><br>                      Системната проверка включва:<br>
<ul>                      
<li><b>Версия на PHP</b> &#8211; трябва да е съвместима<br />                      с приложението</li>
<li><b>Променливи за управление на сесиите</b> &#8211; сесиите за връзка с SugarCRM трябва да работят правилно</li>                                            <li> <b>MB Strings</b> &#8211; модулът трябва да се инсталиран и разрешен във файла php.ini</li>

<li> <b>Поддръжка на база данни</b> &#8211; трябва да е налична за MySQL, SQL
Server или Oracle</li>

<li> <b>Config.php</b> &#8211; файлът трябва да съществува и да може 
да бъде редактиран</li>
<li>Следните директории на SugarCRM трабва да имат права за писане:<ul><li>
<b>/custom</li>
<li>/cache</li>
<li>/modules</li>
</li>upload</b></li></ul></2></ul>
При констатиране на проблем по време на проверката, инсталацията няма да може да продължи. Ще бъде генерирано съобщение за грешка, което обяснява причините
                                 за проблема.
След като направите необходимите промени в системата, можете да изпълните системната проверка отново
и при положителен резултат да продължите с инсталацията.<br>',
    'REQUIRED_INSTALLTYPE' => 'Стандартна или Детайлна инсталация',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "След приключване на системната проверка, можете да изберете Стандартна или Детайлна инсталация.<br><br>
Независимо от избора на <b>Стандартна</b> или <b>Детайлна</b> инсталация е необходимо да разполагате с информация за:<br>                      <ul>
<li> <b>Тип на базата данни,</b> която ще се използва за съхранение на данните на SugarCRM 
<ul><li>Съвместимите бази данни 
са: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li>
<li> <b>Име на сървъра (DNS име или IP адрес),</b> на който се намира базата данни.
<ul><li>Името може да бъде <i>localhost</i> ако базата данни се намира на същия сървър, където са и файловете на SugarCRM.<br><br></li></ul></li>
<li><b>Име на базата данни,</b> която ще се използва за съхранение на данните на SugarCRM</li>
<ul>
<li> Можете да използвате налична база данни. В този случай, съществуващите
таблици в базата 
ще бъдат изтрити и на тяхно място ще бъдат записани таблиците на SugarCRM.</li>
<li> Ако не разполагате с налична база данни, нова база с въведеното име 
ще бъде създадена по време на инсталацията.<br><br></li>                        </ul>
<li><b>Потребителско име и парола на администратор на базата данни</b> <ul><li>Администраторът на базата данни трябва да може да създава нови таблици и потребители, както и да има права за писане в базата данни.
</li><li>За да получите необходимата
информация може да се наложи да се свържете със системен администратор, в случай че базата данни 
не се намира на локален компютър и/или нямате администраторски права.<br><br></ul></li></li>
<li> <b>Потребител използван от SugarCRM</b>
</li>                        
<ul>
<li> Потребителят може да бъде администратора на базата данни или 
друг вече дефиниран потребител в системата. </li>
<li> Ако желаете да създадете нов потребител, който да бъде използван от SugarCRM, можете                          
да въведете потребителско име и парола по време на инсталацията. Въведените параметри ще се използват                          
от инсталатора на SugarCRM за създаване на такъв потребител. </li></ul>
<li><b>Адрес на сървъра и порт за Elasticsearch</b>
</li>
<ul>
<li>Адресът на сървъра за Elasticsearch е адреса на сървъра, с който работи търсачката. Това е местният адрес на сървъра ако търсачката работи на същия сървър като Sugar.</li>
<li>Портът за Elasticsearch е номера на порта за Sugar за свързване с търсачката. Това е 9200, което е основният номер за elasticsearch.</li></ul>
</ul><p>


При избор на <b>Детайлна</b> инсталация допълнително трябва да знаете:<br>
<ul>                      
<li> <b>Адрес на сайта на SugarCRM,</b> на който SugarCRM ще бъде достъпван след приключване на инсталацията.
Адресът трябва да съдържа DNS име на уеб сървъра или IP адрес.<br><br></li>
<li> [Optional] <b>Път към директория за сесиите към SugarCRM</b> ако искате да използвате нестандартна
сесийна директория за инсталирания SugarCRM, с цел да защитите информацията за отделните сесии                                  
на споделени сървъри.<br><br></li>
<li> [Optional] <b>Път към директория за логове на системата</b> ако желаете да използвате нестандартна директория за съхранение на логовете на SugarCRM.<br><br></li>                                 
<li> [Optional] <b>Идентификатор на приложението</b> ако искате да замените автоматично генерирания
идентификатор и така да осигурите, че сесиите към инсталирания SugarCRM няма да бъдат използвани от други инсталации на приложението.<br><br></li>
<li><b>Знаков набор</b> приложим за използваните регионални настройки.<br><br></li></ul>
По-подробна информация можете да намерите в ръководството за инсталация на продукта.                                ",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Моля запознайте със следната важна информация, преди да продължите с процеса на инсталация.  Информацията ще Ви помогне да прецените дали имате готовност да инсталирате приложението.',


	'LBL_WELCOME_2'						=> 'За документацията за инсталиране моля посетете <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>. <BR><BR>За да се свържете с инженер по поддръжката на SugarCRM за помощ при инсталирането, моля, влезте в <a target="_blank" href="http://support.sugarcrm.com">Портала за поддръжка на SugarCRM</a> и повдигнете казус.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Изберете език за инсталацията</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Електронен помощник',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Добре дошли в SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'Електронен помощник на SugarCRM',
	'LBL_WIZARD_TITLE'					=> 'Sugar Setup Wizard:',
	'LBL_YES'							=> 'Да',
    'LBL_YES_MULTI'                     => 'Да - използване на Multibyte текст',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Изпълнение на задачи в автоматизираните процеси',
	'LBL_OOTB_REPORTS'		=> 'Изпълняване на задачите за автоматично генериране на справки',
	'LBL_OOTB_IE'			=> 'Проверка на пощенски кутии за входяща поща',
	'LBL_OOTB_BOUNCE'		=> 'Обработка на върнати електронни писма от кампании',
    'LBL_OOTB_CAMPAIGN'		=> 'Изпращане на електронни писма от кампании',
	'LBL_OOTB_PRUNE'		=> 'Изчистване на базата на 1-о число всеки месец',
    'LBL_OOTB_TRACKER'		=> 'Изчистване на таблицата с потребителска активност на 1-во число всеки месец',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Активирай известията за напомняне за получаване на имейли',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Актуализирай таблицата tracker_sessions',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Изчистване на опашките от заявки',


    'LBL_FTS_TABLE_TITLE'     => 'Въведете настроките за пълнотекстово търсене',
    'LBL_FTS_HOST'     => 'Адрес на сървъра',
    'LBL_FTS_PORT'     => 'Порт',
    'LBL_FTS_TYPE'     => 'Тип на системата',
    'LBL_FTS_HELP'      => 'За да разрешите пълнотекстово търсене, изберете тип системата и въведете адрес и порт на машината, където се намира избраната система. SugarCRM има вградена поддръжка за "elasticsearch".',
    'LBL_FTS_REQUIRED'    => 'Инсталация на програмата "Elastic Search" е задължителна.',
    'LBL_FTS_CONN_ERROR'    => 'Не може да бъде осъществена връзка със сървъра за пълнотекстово търсене. Моля проверете въведените настройки.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Няма налична версия на сървър за пълнотекстово търсене, моля, проверете вашите настройки.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Открита е неподдържана версия на Elastic search. Моля, използвайте версии: %s',

    'LBL_PATCHES_TITLE'     => 'Инсталирай последните актуализации',
    'LBL_MODULE_TITLE'      => 'Изтегляне и инсталация на езикови пакети',
    'LBL_PATCH_1'           => 'Ако желаете да пропуснете тази стъпка, натиснете бутона Следваща стъпка.',
    'LBL_PATCH_TITLE'       => 'Системна актуализация',
    'LBL_PATCH_READY'       => 'Следните актуализации могат да бъдат инсталирани:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM relies upon PHP sessions to store important information while connected to this web server. Your PHP installation does not have the Session information correctly configured.
<br><br>A common misconfiguration is that the 
<b>'session.save_path'</b> directive is not pointing to a valid directory. <br>
<br> Please correct your <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuration</a> in the php.ini file located here below.",
	'LBL_SESSION_ERR_TITLE'				=> 'Грешка при конфигурацията на сесиите в PHP',
	'LBL_SYSTEM_NAME'=>'Име на системата',
    'LBL_COLLATION' => 'Настройки на колация на базата данни',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Въведете системно име за инсталацията на Sugar.',
	'LBL_PATCH_UPLOAD' => 'Изберете системна актуализация от локалния компютър',
	'LBL_INCOMPATIBLE_PHP_VERSION' => 'Изисква се версия на PHP интерпретатор по вискока от 5.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimum PHP version required is 5.6.0.',
	'LBL_YOUR_PHP_VERSION' => '(Текущата инбсталирана версия е',
    'LBL_RECOMMENDED_PHP_VERSION' =>' Recommended php version is 7.1.x)',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Режимът Php обратна съвместимост е включен. Настройте zend.ze1_compatibility_mode на изключен, за да продължите по-нататък',

    'advanced_password_new_account_email' => array(
        'subject' => 'Информация за нов потребител',
        'description' => 'Шаблонът се използва за изпращане на нова потребилска парола от Системен администратор',
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name</p><p>Password : $contact_user_user_hash</p><br><p><a href="$config_site_url">$config_site_url</a></p><br><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p></td></tr><tr><td colspan=\\"2\\"></td></tr></tbody></table></div>',
        'txt_body' =>
'Here is your account username and temporary password: Username : $contact_user_user_name Password : $contact_user_user_hash $config_site_url After you log in using the above password, you may be required to reset the password to one of your own choice.',
        'name' => 'Поща за системно генерирана парола',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Нова потребителска парола',
        'description' => "This template is used to send a user a link to click to reset the user&#39;s account password.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password.</p><p>Click on the link below to reset your password:</p><p><a href="$contact_user_link_guid">$contact_user_link_guid</a></p></td></tr><tr><td colspan=\\"2\\"></td></tr></tbody></table></div>',
        'txt_body' =>
'You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. Click on the link below to reset your password: $contact_user_link_guid',
        'name' => 'Поща за забравена парола',
        ),
);

?>
