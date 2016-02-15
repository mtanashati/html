<?php
/* $Id: estonian-utf-8.inc.php,v 2.8.2.2 2004/06/07 10:09:54 rabus Exp $ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Püh', 'Esm', 'Tei', 'Kol', 'Nel', 'Ree', 'Lau');
$month = array('Jan', 'Veb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Det');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y kell %H:%M:%S';
$timespanfmt = '%s päeva, %s tundi, %s minutit ja %s sekundit';

$strAPrimaryKey = 'Primaarne võti lisati %s';
$strAbortedClients = 'Katkestatud';
$strAbsolutePathToDocSqlDir = 'Palun sisestage absoluutne tee webiserveris docSQL kataloogini';
$strAccessDenied = 'Ligipääs keelatud';
$strAccessDeniedExplanation = 'phpMyAdmin proovis ühenduda MySQL serveriga ja server lükkas ühenduse tagasi. Te peaksite kontrollima serverit, kasutajanime ja parooli config.inc.php failis ning kontrollima, et need vastaks infole mis te saite oma MySQL serveri administraatori käest.';
$strAction = 'Tegevus';
$strAddAutoIncrement = 'Lisa AUTO_INCREMENT väärtus';
$strAddConstraints = 'Lisa piirangud';
$strAddDeleteColumn = 'Lisa/Kustuta välja veerud';
$strAddDeleteRow = 'Lisa/Kustuta kriteeriumirida';
$strAddDropDatabase = 'Lisa DROP DATABASE';
$strAddIntoComments = 'Lisa kommentaaridesse';
$strAddNewField = 'Lisa uus väli';
$strAddPriv = 'Lisa uus privileeg';
$strAddPrivMessage = 'Te lisasite uue privileegi.';
$strAddPrivilegesOnDb = 'Lisa privileegid antud andmebaasile';
$strAddPrivilegesOnTbl = 'Lisa privileegid antud tabelile';
$strAddSearchConditions = 'Lisa otsinguparameetrid ("WHERE" lause sisu):';
$strAddToIndex = 'Lisa indeksisse &nbsp;%s&nbsp;rida/read';
$strAddUser = 'Lisa uus kasutaja';
$strAddUserMessage = 'Te lisasite uue kasutaja.';
$strAddedColumnComment = 'Kommentaar lisatud väljale';
$strAddedColumnRelation = 'Sõltuvus lisatud väljale';
$strAdministration = 'Administreerimine';
$strAffectedRows = 'Mõjutatud read:';
$strAfter = 'Peale %s';
$strAfterInsertBack = 'Mine eelmisele lehele tagasi';
$strAfterInsertNewInsert = 'Lisa järgmine uus rida';
$strAll = 'Kõik';
$strAllTableSameWidth = 'kuva kõik tabelid sama laiusega?';
$strAlterOrderBy = 'Muuda tabeli sorteeringut';
$strAnIndex = 'Indeks lisati %s';
$strAnalyzeTable = 'Analüüsi tabelit';
$strAnd = 'ja';
$strAny = 'kõik';
$strAnyColumn = 'Kõik väljad';
$strAnyDatabase = 'Kõik andmebaasid';
$strAnyHost = 'Kõik masinad';
$strAnyTable = 'Kõik tabelid';
$strAnyUser = 'Kõik kasutajad';
$strArabic = 'Araabia';
$strArmenian = 'Armeenia';
$strAscending = 'Kasvav';
$strAtBeginningOfTable = 'Tabeli algusesse';
$strAtEndOfTable = 'Tabeli lõppu';
$strAttr = 'Parameetrid';
$strAutodetect = 'Automaatne tuvastus';
$strAutomaticLayout = 'Automaatne väljund';

$strBack = 'Tagasi';
$strBaltic = 'Balti';
$strBeginCut = 'ALUSTA LÕIGET';
$strBeginRaw = 'ALUSTA PUHAST';
$strBinary = 'Binaarne';
$strBinaryDoNotEdit = 'Binaarne - ärge muutke';
$strBookmarkAllUsers = 'Anna kõikidele kasutajatele juurdepääs sellele järjehodjale';
$strBookmarkDeleted = 'Järjehodja kustutati.';
$strBookmarkLabel = 'Nimetus';
$strBookmarkOptions = 'Järjehoidja seaded';
$strBookmarkQuery = 'Järjehodjaga SQL päring';
$strBookmarkThis = 'Lisa see SQL päring järjehoidjasse';
$strBookmarkView = 'Vaata ainult';
$strBrowse = 'Vaata';
$strBrowseForeignValues = 'Vaata väliseid väärtuseid';
$strBulgarian = 'Bulgaaria';
$strBzError = 'phpMyAdmin ei suutnud pakkida seda andmebaasiväljundit kuna Bz2 moodul on vigane selles PHP versioonis. Me soovitame tungivalt oma phpMyAdmini konfiguratsioonifailis panna lipu <code>$cfg[\'BZipDump\']</code> väärtuseks <code>FALSE</code>. Kui te soovite kasutada Bz2 pakkimist peaksite te oma PHP versiooni uuendama viimasele versioonile. Lugege PHP vea %s raportit täpsemaks infoks.';
$strBzip = '"bzipitud"';

$strCSVOptions = 'CSV seaded';
$strCannotLogin = 'Eei suuda MySQL serverisse logida';
$strCantLoad = 'ei suutnud lugeda moodulit %s,<br />palun kontrollige PHP konfiguratsiooni';
$strCantLoadMySQL = 'ei suutnud lugeda MySQL laiendit,<br />palun kontrollige PHP konfiguratsiooni.';
$strCantLoadRecodeIconv = 'Ei suuda lugeda iconv või recode moodulit mida on vaja tähetabeli konvertimiseks, konfigureerige PHP-d nii, et see sisaldaks antud mooduleid või keelake tähetabeli konvertimine phpMyAdminis.';
$strCantRenameIdxToPrimary = 'Ei suuda muuta indeksit PRIMAARSEKS!';
$strCantUseRecodeIconv = 'Ei suuda kasutada iconv-d või libiconvi või recode_string funktsiooni kuigi moodul on installitud Kontrollige oma PHP konfiguratsiooni.';
$strCardinality = 'Kasulikkus';
$strCarriage = 'Reavahetus: \\r';
$strCaseInsensitive = 'tõstutundetu';
$strCaseSensitive = 'tõstutundlik';
$strCentralEuropean = 'Kesk-Euroopa';
$strChange = 'Muuda';
$strChangeCopyMode = 'Loo uus kasutaja samade privileegidega ja ...';
$strChangeCopyModeCopy = '... hoia vana alles.';
$strChangeCopyModeDeleteAndReload = ' ... kustuta vana kasutajate tabelist ja taaslae privileegid pärast seda.';
$strChangeCopyModeJustDelete = ' ... kustuta vana kasutajate tabelist.';
$strChangeCopyModeRevoke = ' ... kanna kõik aktiivsed privileegid üle vanast ja kustuta see pärast.';
$strChangeCopyUser = 'Vaheta logimisinformatsiooni / Kopeeri kasutaja';
$strChangeDisplay = 'Vali väli mida kuvada';
$strChangePassword = 'Muuda parooli';
$strCharset = 'Täheseade';
$strCharsetOfFile = 'Faili tähekodeering:';
$strCharsets = 'Tähetabelid';
$strCharsetsAndCollations = 'Tähetabelid ja määrangud';
$strCheckAll = 'Märgista kõik';
$strCheckDbPriv = 'Vaata andmebaasi privileege';
$strCheckOverhead = 'Kontrolli ülekulusid';
$strCheckPrivs = 'Kontrollige privileege';
$strCheckPrivsLong = 'Kontrolli privileege andmebaasile &quot;%s&quot;.';
$strCheckTable = 'Kontrolli tabelit';
$strChoosePage = 'Palun valige leht muutmiseks';
$strColComFeat = 'Näitan veeru kommentaare';
$strCollation = 'Määrang';
$strColumn = 'Väli';
$strColumnNames = 'Väljade nimed';
$strColumnPrivileges = 'Väli-spetsiifilised privileegid';
$strCommand = 'Käsk';
$strComments = 'Kommentaarid';
$strCompleteInserts = 'Täispikk INSERT';
$strCompression = 'Pakkimine';
$strConfigFileError = 'phpMyAdmin ei suutnud lugeda Teie konfiguratsioonifaili!<br />See võib juhtuda kui PHP leiab vea selles või PHP ei leia antud faili üles.<br />Palun kutsuge konfiguratsioonifail välja otseselt kasutades linki allpool ja lugege PHP veateadet(eid) mis teile öeldakse. Enamustel juhtudel on kuskilt puudu ülakoma või semikoolon.<br />Kui Teile kuvatakse tühi leht on kõik korras.';
$strConfigureTableCoord = 'Palun seadke koordinaadid tabelile %s';
$strConfirm = 'Kas Te tõesti tahate seda teha?';
$strConnectionError = 'Ei saa ühendust: vigased seaded.';
$strConnections = 'Ühendused';
$strConstraintsForDumped = 'Piirangud salvestatud tabelitele';
$strConstraintsForTable = 'Piirangud tabelile';
$strCookiesRequired = 'Küpsised(cookies) peavad alates sellest momendist lubatud olema.';
$strCopyTable = 'Kopeeri tabel (andmebaas<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s on kopeeritud andmebaasi %s.';
$strCopyTableSameNames = 'Ei saa tabelit iseendasse kopeerida!';
$strCouldNotKill = 'phpMyAdmin ei suutnud katkestada protsessi %s. Tõenäoliselt on see juba suletud.';
$strCreate = 'Loo';
$strCreateIndex = 'Loo indeks &nbsp;%s&nbsp;väljadest';
$strCreateIndexTopic = 'Loo uus indeks';
$strCreateNewDatabase = 'Loo uus andmebaas';
$strCreateNewTable = 'Loo uus tabel andmebaasi %s';
$strCreatePage = 'Loo uus leht';
$strCreatePdfFeat = 'PDF-ide tegemine';
$strCreationDates = 'Loo/muuda/kontrolli kuupäevi';
$strCriteria = 'Kriteerium';
$strCroatian = 'Horvaatia';
$strCyrillic = 'Kirillitsa';
$strCzech = 'Tsehhi';
$strCzechSlovak = 'Tsehhi-Slovaki';

$strDBComment = 'Andmebaasi kommentaar: ';
$strDBGContext = 'Sisu';
$strDBGContextID = 'Sisu ID';
$strDBGHits = 'Vajutusi';
$strDBGLine = 'Rida';
$strDBGMaxTimeMs = 'Max aeg, ms';
$strDBGMinTimeMs = 'Min aeg, ms';
$strDBGModule = 'Moodul';
$strDBGTimePerHitMs = 'Aeg/vajutus, ms';
$strDBGTotalTimeMs = 'Koguaeg, ms';
$strDanish = 'Taani';
$strData = 'Andmed';
$strDataDict = 'Andmesõnastik';
$strDataOnly = 'Ainult andmed';
$strDatabase = 'Andmebaas ';
$strDatabaseExportOptions = 'Andmebaasi eksportimise seaded';
$strDatabaseHasBeenDropped = 'Andmebaas %s kustutatud.';
$strDatabaseNoTable = 'See andmebaas ei sisalda tabelit!';
$strDatabaseWildcard = 'Andmebaas (lühendid lubatud):';
$strDatabases = 'andmebaasid';
$strDatabasesDropped = 'andmebaasid %s kustutati õnnestunult.';
$strDatabasesStats = 'Andmebaaside statistika';
$strDatabasesStatsDisable = 'Keelake statistika';
$strDatabasesStatsEnable = 'Lubage statistika';
$strDatabasesStatsHeavyTraffic = 'Märkus: Lubades siin andmebaasi statistika võite tekitada väga koormava liikuse webiserveri ja MySQL-i vahel.';
$strDbPrivileges = 'Andmebaas-spetsiifilised privileegid';
$strDbSpecific = 'andmebaasipõhine';
$strDefault = 'Vaikimisi';
$strDefaultValueHelp = 'Vaikimisi väärtuse jaoks sisestage lihtsalt üksik väärtus, ilma kaldkriipsudega varjestamata ning jutumärkideta, kasutades järgmist kirjakuju: a';
$strDelOld = 'Antud lehel on viiteid tabelitele mida enam ei ole. Kas te soovite kustutada need viited?';
$strDelayedInserts = 'Kasuta ajastatud lisamisi';
$strDelete = 'Kustuta';
$strDeleteAndFlush = 'Kustutage kasutajad ja taaslaadige privileegid pärast seda.';
$strDeleteAndFlushDescr = 'See on parim tee, kuid privileegide taaslaadimine võib võtta aega.';
$strDeleteFailed = 'Kustutamine ebaõnnestus!';
$strDeleteUserMessage = 'Te kustutasite kasutaja %s.';
$strDeleted = 'Rida kustutatud';
$strDeletedRows = 'Kustuta read:';
$strDeleting = 'Kustutan %s';
$strDescending = 'Kahanev';
$strDescription = 'Kirjeldus';
$strDictionary = 'sõnaraamat';
$strDisabled = 'Keelatud';
$strDisplay = 'Näita';
$strDisplayFeat = 'Kuva võimalused';
$strDisplayOrder = 'Näitamise järjekord:';
$strDisplayPDF = 'Näita PDF skeemi';
$strDoAQuery = 'Tee "päring näite järgi" (lühend: "%")';
$strDoYouReally = 'Kas te tõesti tahate ';
$strDocu = 'Dokumentatsioon';
$strDrop = 'Kustuta';
$strDropDB = 'Kustuta andmebaas ';
$strDropDatabaseStrongWarning = 'Tähelepanu! Te HÄVITATE kogu andmebaasi!';
$strDropSelectedDatabases = 'Kustutage valitud andmebaasid';
$strDropTable = 'Kustuta tabel';
$strDropUsersDb = 'Kustuta andmebaasid millel on samad nimed nagu kasutajatel.';
$strDumpComments = 'Lisa veeru kommentaarid siseste SQL-kommentaaridena.';
$strDumpSaved = 'Väljavõte salvestati faili %s.';
$strDumpXRows = 'Päri %s rida alustades reast %s.';
$strDumpingData = 'Tabeli andmete salvestamine';
$strDynamic = 'dünaamiline';

$strEdit = 'Muuda';
$strEditPDFPages = 'Muuda PDF lehti';
$strEditPrivileges = 'Muuda privileege';
$strEffective = 'Efektiivne';
$strEmpty = 'Tühjenda';
$strEmptyResultSet = 'MySQL tagastas tühja tulemuse (s.t. null rida).';
$strEnabled = 'Lubatud';
$strEnd = 'Lõpp';
$strEndCut = 'LÕPETA LÕIGE';
$strEndRaw = 'LÕPETA PUHAS';
$strEnglish = 'Inglise';
$strEnglishPrivileges = ' Märkus: MySQL privileegide nimed on ingliskeelsed ';
$strError = 'Viga';
$strEstonian = 'Eesti';
$strExcelEdition = 'Exceli versioon';
$strExcelOptions = 'Excel\'i seaded';
$strExecuteBookmarked = 'Käivita salvestatud päring';
$strExplain = 'Seleta SQL-i';
$strExport = 'Ekspordi';
$strExportToXML = 'Ekspordi XML formaati';
$strExtendedInserts = 'Laiendatud lisamised';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Ebaõnnestunud üritused';
$strField = 'Väli';
$strFieldHasBeenDropped = 'Väli %s kustutatud';
$strFields = 'Väljade arv';
$strFieldsEmpty = ' Väljade loetelu on tühi! ';
$strFieldsEnclosedBy = 'Väljad ümbritsetud';
$strFieldsEscapedBy = 'Väljad varjatud';
$strFieldsTerminatedBy = 'Väljad eraldatud';
$strFileAlreadyExists = 'Fail %s on juba serveris olemas, muutke faili nime või kontrollige ülekirjutamise seadeid.';
$strFileCouldNotBeRead = 'Faili ei suudetud lugeda';
$strFileNameTemplate = 'Faili nime template';
$strFileNameTemplateHelp = 'Kasutage __DB__ andmebaasi nime jaoks, __TABLE__ tabeli nime jaoks ja %sükskõik milliseid strftime%s seadeid aja määramiseks, moodul lisatakse automaatselt. Ülejäänud teksti ei muudeta.';
$strFileNameTemplateRemember = 'jäta template meelde';
$strFixed = 'parandatud';
$strFlushPrivilegesNote = 'Märkus: phpMyAdmin võtab kasutajate privileegid otse MySQL privileges tabelist. Tabeli sisu võib erineda sellest, mida server hetkel kasutab, seda juhul kui olete käsitsi muudatusi teinud. Sellisel juhul peaksite te privileegid %staaslaadima%s enne jätkamist.';
$strFlushTable = 'Ühtlusta tabelid ("FLUSH")';
$strFormEmpty = 'Puuduv väärtus vormis !';
$strFormat = 'Formaat';
$strFullText = 'Täistekstid';
$strFunction = 'Funktsioon';

$strGenBy = 'Genereerija ';
$strGenTime = 'Tegemisaeg';
$strGeneralRelationFeat = 'Peamised seoste võimalused';
$strGeorgian = 'Gruusia';
$strGerman = 'Saksa';
$strGlobal = 'globaalne';
$strGlobalPrivileges = 'Globaalsed privileegid';
$strGlobalValue = 'Üldine väärtus';
$strGo = 'Mine';
$strGrantOption = 'Õigused';
$strGrants = 'Õigused';
$strGreek = 'Kreeka';
$strGzip = '"gzipitud"';

$strHasBeenAltered = 'on muudetud.';
$strHasBeenCreated = 'on loodud.';
$strHaveToShow = 'Te peate valima vähemalt ühe veeru kuvamiseks';
$strHebrew = 'Heebrea';
$strHome = 'Esileht';
$strHomepageOfficial = 'Ametlik phpMyAdmini koduleht';
$strHomepageSourceforge = 'Sourceforge phpMyAdmini allalaadimisleht';
$strHost = 'Masin';
$strHostEmpty = 'Masin on tühi!';
$strHungarian = 'Ungari';

$strId = 'ID';
$strIdxFulltext = 'Täistekst';
$strIfYouWish = 'Kui soovite lugeda ainult mõningaid tabeli välju, sisestage komaga eraldatud väljade loetelu.';
$strIgnore = 'Ignoreeri';
$strIgnoringFile = 'Jätan vahele faili %s';
$strImportDocSQL = 'docSQL failide importimine';
$strImportFiles = 'Importige failid';
$strImportFinished = 'Import lõpetatud';
$strInUse = 'kasutusel';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s kustutatud';
$strIndexName = 'Indeksi nimi&nbsp;:';
$strIndexType = 'Indeksi tüüp&nbsp;:';
$strIndexes = 'Indeksid';
$strInnodbStat = 'InnoDB staatus';
$strInsecureMySQL = 'Teie konfiguratsioonifail sisaldab seadeid (root kasutaja ilma paroolita) mis vastab MySQL-i vaikimisi priviligeeritud kasutajale. Kui Teie MySQL-i server jookseb sellise seadega on ta avatud rünnakutele, soovitav on see turvaauk kiiresti parandada.';
$strInsert = 'Lisa';
$strInsertAsNewRow = 'Lisa uue reana';
$strInsertNewRow = 'Lisa uus rida';
$strInsertTextfiles = 'Lisa andmed tekstifailist tabelisse';
$strInsertedRowId = 'Lisatud rea id:';
$strInsertedRows = 'Lisatud read:';
$strInstructions = 'sisestust';
$strInternalNotNecessary = '* Sisene seos ei ole vajalik kui ta eksisteerib ka InnoDB-s.';
$strInternalRelations = 'Sisesed seosed';
$strInvalidName = '"%s" on reserveeritud sõna, te ei saa seda kasutada andmebaasi/tabeli/välja nimena.';

$strJapanese = 'Jaapani';
$strJumpToDB = 'Hüppa andmebaasile &quot;%s&quot;.';
$strJustDelete = 'Lihtsalt kustutage kasutajad privilege tabelist.';
$strJustDeleteDescr = '&quot;Kustutatud&quot; kasutajad võivad ikka veel ligi pääseda serverile, kuni privileegid pole uuesti sisse loetud.';

$strKeepPass = 'Ärge muutke parooli';
$strKeyname = 'Võtme nimi';
$strKill = 'Tapa';
$strKorean = 'Korea';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX\'i seaded';
$strLandscape = 'Laipilt';
$strLatexCaption = 'Tabeli seletus';
$strLatexContent = 'Tabeli __TABLE__ sisu';
$strLatexContinued = '(jätkub)';
$strLatexContinuedCaption = 'Jätkuva tabeli seletus';
$strLatexIncludeCaption = 'Lisa tabeli seletus';
$strLatexLabel = 'Nimetuse võti';
$strLatexStructure = 'Tabeli __TABLE__ struktuur';
$strLength = 'Pikkus';
$strLengthSet = 'Pikkus/Väärtused*';
$strLimitNumRows = 'Ridade arv lehel';
$strLineFeed = 'Realõpp: \\n';
$strLines = 'Read';
$strLinesTerminatedBy = 'Read lõpetatud';
$strLinkNotFound = 'Linki ei leitud';
$strLinksTo = 'Lingib ';
$strLithuanian = 'Leedu';
$strLoadExplanation = 'Vaikimisi on aktiivne parim meetod aga te võite seda muuta, kui see ei tööta.';
$strLoadMethod = 'LOAD meetod';
$strLocalhost = 'Lokaalne';
$strLocationTextfile = 'tekstifaili asukoht';
$strLogPassword = 'Parool:';
$strLogServer = 'Server';
$strLogUsername = 'Kasutajanimi:';
$strLogin = 'Sisselogimine';
$strLoginInformation = 'Logimise informatsioon';
$strLogout = 'Logi välja';

$strMIME_MIMEtype = 'MIME-tüüp';
$strMIME_available_mime = 'Olemasolevad MIME-tüübid';
$strMIME_available_transform = 'Available transformations';
$strMIME_description = 'Kirjeldus';
$strMIME_file = 'Failinimi';
$strMIME_nodescription = 'Selle transformatsiooni jaoks ei ole kirjeldust.<br />Palun küsige autorilt, mida %s teeb.';
$strMIME_transformation = 'Browseri transformatsioon';
$strMIME_transformation_note = 'Transformatsiooni võimaluste ja tema MIME-tüübi transformatsiooni nimekirjaks vajutage %stransformatsiooni kirjeldusele%s';
$strMIME_transformation_options = 'Transformeerimise seaded';
$strMIME_transformation_options_note = 'Palun sisestage transformatsiooniks vajalikud väärtused, kasutades järgmist formaati: \'a\',\'b\',\'c\'...<br />Kui teil on vaja edastada kaldkriips ("\") või ülakoma ("\'") nende väärtuste seas, varjestage see tagurpidi kaldkriipsuga (näiteks \'\\\\xyz\' või \'a\\\'b\').';
$strMIME_without = 'MIME-tüübid kursiivis ei oma eraldi transofrmatsiooni funktsiooni';
$strMaximumSize = 'Maksimaalne suurus: %s%s';
$strMissingBracket = 'Puuduv ülakoma';
$strModifications = 'Muutused salvestatud';
$strModify = 'Muuda';
$strModifyIndexTopic = 'Muuda indeksit';
$strMoreStatusVars = 'Rohkem staatuseväärtusi';
$strMoveTable = 'Vii tabel üle (andmebaas<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s viidu üle andmebaasi %s.';
$strMoveTableSameNames = 'Ei saa tabelit iseendasse liigutada!';
$strMultilingual = 'mitmekeelne';
$strMustSelectFile = 'Palun valige fail mida soovite lisada.';
$strMySQLCharset = 'MySQLi tähetabel';
$strMySQLReloaded = 'MySQL uuesti laetud.';
$strMySQLSaid = 'MySQL ütles: ';
$strMySQLServerProcess = 'MySQL %pma_s1% jookseb %pma_s2%\'is - %pma_s3%';
$strMySQLShowProcess = 'Näita protsesse';
$strMySQLShowStatus = 'Näita MySQL-i jooksvat informatsiooni';
$strMySQLShowVars = 'Näita MySQL süsteemseid muutujaid';

$strName = 'Nimi';
$strNext = 'Järgmine';
$strNo = 'Ei';
$strNoDatabases = 'Pole andmebaase';
$strNoDatabasesSelected = 'Ühtegi andmebaasi ei ole valitud.';
$strNoDescription = 'pole kirjeldust';
$strNoDropDatabases = '"DROP DATABASE" käsud keelatud.';
$strNoExplain = 'Jäta SQL-i seletamine vahele';
$strNoFrames = 'phpMyAdmin on sõbralikum <b>frame toetava</b> browseriga.';
$strNoIndex = 'Indeksit pole defineeritud!';
$strNoIndexPartsDefined = 'Indeksi osad pole defineeritud!';
$strNoModification = 'Ei muudetud';
$strNoOptions = 'Sellel formaadil pole seadeid';
$strNoPassword = 'Ilma paroolita';
$strNoPermission = 'Webiserver ei oma õigusi , et salvestada fail %s.';
$strNoPhp = 'ilma PHP koodita';
$strNoPrivileges = 'Ei oma ühtegi privileegi';
$strNoQuery = 'Ühtegi SQL päringut!';
$strNoRights = 'Teil pole piisavalt õigusi, et hetkel siin olla!';
$strNoSpace = 'Liiga vähe kettaruumi, et salvestada fail %s.';
$strNoTablesFound = 'Andmebaasist ei leitud tabeleid.';
$strNoUsersFound = 'Ei leitud ühtegi kasutajat.';
$strNoUsersSelected = 'Ei valitud ühtegi kasutajat.';
$strNoValidateSQL = 'Jäta SQL-i kontroll vahele';
$strNone = 'Pole';
$strNotNumber = 'See pole number!';
$strNotOK = 'Ei ole korras';
$strNotSet = '<b>%s</b> tabelit ei leitud või ei eksisteeri %s';
$strNotValidNumber = ' pole korrektne reanumber!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s vaste(t) tabelis <i>%s</i>';
$strNumSearchResultsTotal = '<b>Kokku:</b> <i>%s</i> vaste(t)';
$strNumTables = 'Tabelid';

$strOK = 'Korras';
$strOftenQuotation = 'Kasuta jutumärke koguaeg. VALIKULISELT tähendab, et ainult char ja varchar tüüpi väljad ümbritsetakse määratud märkidega.';
$strOperations = 'Tegevused';
$strOptimizeTable = 'Optimiseeri tabelit';
$strOptionalControls = 'Mittekohustuslik. Kontrollib kuidas kirjutada või lugeda erimärke.';
$strOptionally = 'VALIKULISELT';
$strOptions = 'Valikud';
$strOr = 'või';
$strOverhead = 'Ülejääv';
$strOverwriteExisting = 'Kirjuta olemasolev(ad) fail(id) üle';

$strPHP40203 = 'Te kasutate PHP 4.2.3, milles on tõsine viga mitmebaidiste tekstidega (mbstring). Vaadake PHP vearaportit 19404. Seda PHP versiooni ei soovitata kasutada phpMyAdminiga.';
$strPHPVersion = 'PHP versioon';
$strPageNumber = 'Lehenumber:';
$strPaperSize = 'Paberi suurus';
$strPartialText = 'Lühendatud tekstid';
$strPassword = 'Parool';
$strPasswordChanged = 'Kasutaja %s parool vahetati õnnestunult.';
$strPasswordEmpty = 'Parool on tühi!';
$strPasswordNotSame = 'Paroolid ei ühti!';
$strPdfDbSchema = 'Andmebaasi "%s" skeem - lehekülg %s';
$strPdfInvalidPageNum = 'Defineerimata PDF lehe number!';
$strPdfInvalidTblName = '"%s" tabel ei eksisteeri!';
$strPdfNoTables = 'Pole tabeleid';
$strPerHour = 'tunni kohta';
$strPerMinute = 'minutis';
$strPerSecond = 'sekundis';
$strPhoneBook = 'telefoniraamat';
$strPhp = 'Loo PHP kood';
$strPmaDocumentation = 'phpMyAdmini dokumentatsioon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> konstant peab teie konfiguratsioonifailis määratud olema!';
$strPortrait = 'Portreepilt';
$strPos1 = 'Algus';
$strPrevious = 'Eelmine';
$strPrimary = 'Primaarne';
$strPrimaryKey = 'Primaarne võti';
$strPrimaryKeyHasBeenDropped = 'Primaarne võti kustutatud';
$strPrimaryKeyName = 'Primaarse võtme nimi peab olema... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>peab</b> olema ja <b>ainult</b> olema primaarse võtme nimi!)';
$strPrint = 'Prindi';
$strPrintView = 'Trükivaade';
$strPrintViewFull = 'Trükivaade (täispikkade tekstidega)';
$strPrivDescAllPrivileges = 'Sisaldab kõiki privileege peale GRANT.';
$strPrivDescAlter = 'Lubab muuta olemasolevate tabelite struktuure.';
$strPrivDescCreateDb = 'Lubab luua uusi andmebaase ja tabeleid.';
$strPrivDescCreateTbl = 'Lubab luua uusi tabeleid.';
$strPrivDescCreateTmpTable = 'Lubab luua ajutisi tabeleid.';
$strPrivDescDelete = 'Lubab kustutada infot.';
$strPrivDescDropDb = 'Lubab kustuada andmebaase ja tabeleid.';
$strPrivDescDropTbl = 'Lubab kustutada tabeleid..';
$strPrivDescExecute = 'Lubab käivitada salvestatud protseduure; Ei oma mingit effekti antud MySQL versioonis.';
$strPrivDescFile = 'Lubab andmete eksportimist faili ja andmete importimist failidest.';
$strPrivDescGrant = 'Lubab lisada kasutajaid ja privileege ilma privileges tabelit taaskäivitamata.';
$strPrivDescIndex = 'Lubab luua ja kustutada indekseid.';
$strPrivDescInsert = 'Lubab lisada ja muuta infot.';
$strPrivDescLockTables = 'Lubab lukustada tabeleid aktiivse päringu tarbeks.';
$strPrivDescMaxConnections = 'Limiteerib ühenduste arvu tunnis kasutaja jaoks.';
$strPrivDescMaxQuestions = 'Limiteerib päringute arvu tunnis kasutaja jaoks.';
$strPrivDescMaxUpdates = 'Limiteerib käskude, mis muudavad suvalist tabelit või andmebaasi, arvu tunnis kasutaja jaoks';
$strPrivDescProcess3 = 'Lubab tappa kasutajate protsesse.';
$strPrivDescProcess4 = 'Lubab vaadata täielikult päringuid protsessitabelis.';
$strPrivDescReferences = 'Ei oma antud MySQL versioonis mingit effekti.';
$strPrivDescReload = 'Lubab taaslaadida serveri seadmeid ja puhastada serveri cachet.';
$strPrivDescReplClient = 'Lubab kasutajal küsida kus on slaved/masterid.';
$strPrivDescReplSlave = 'Vajalik slavede paljundamiseks.';
$strPrivDescSelect = 'Lubab lugeda infot.';
$strPrivDescShowDb = 'Annab ligipääsu kogu andmebaasilistingule.';
$strPrivDescShutdown = 'Lubab serverit maha lasta.';
$strPrivDescSuper = 'Lubab ühenduda, isegi kui maksimaalne ühenduste arv on saavutatud; Vajalik enamike administratiivsete operatsioonide jaoks, nagu globaalsete muutujate seadmine või teiste kasutajate ühenduste tapmine.';
$strPrivDescUpdate = 'Lubab muuta infot.';
$strPrivDescUsage = 'Mitte ühtegi privileegi.';
$strPrivileges = 'Privileegid';
$strPrivilegesReloaded = 'Privileegid taaslaeti edukalt.';
$strProcesslist = 'Protsessinimekiri';
$strProperties = 'Seaded';
$strPutColNames = 'Pange väljade nimed esimesse ritta';

$strQBE = 'Päring näite järgi';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'Päringuaken';
$strQueryFrameDebug = 'Silumisinformatsioon';
$strQueryFrameDebugBox = 'Aktiivsed muutujad päringuvormile:\nAB: %s\nTabel: %s\nServer: %s\n\nOlemasolevad muutjad päringuvormile:\nAB: %s\nTabel: %s\nServer: %s\n\nAvaja asukoht: %s\nFreimi asukoht: %s.';
$strQueryOnDb = 'SQL-päring andmebaasist <b>%s</b>:';
$strQuerySQLHistory = 'SQL-ajalugu';
$strQueryStatistics = '<b>Päringu statistika</b>: Alates stardist, %s päringut on saadetud serverile.';
$strQueryTime = 'Päring kestis %01.4f sek';
$strQueryType = 'Päringu tüüp';
$strQueryWindowLock = 'Antud päringut mitte muuta väljaspool akent.';

$strReType = 'Sisesta uuesti';
$strReceived = 'Saadud';
$strRecords = 'Kirjeid';
$strReferentialIntegrity = 'Kontrolli pärinevust:';
$strRelationNotWorking = 'Lisavõimalused töötamiseks lingitud tabelitega on deaktiveeritud. Et lugeda miks see nii on, vajutage %ssiia%s.';
$strRelationView = 'Pärinevuse vaade';
$strRelationalSchema = 'Seoseskeem';
$strRelations = 'Suhted';
$strReloadFailed = 'MySQL taaslaadimine ebaõnnestus.';
$strReloadMySQL = 'Taaslae MySQL';
$strReloadingThePrivileges = 'Taaslaen privileege';
$strRememberReload = 'Ärge unustage serverit taaslaadida.';
$strRemoveSelectedUsers = 'Eemalda valitud kasutajad';
$strRenameTable = 'Nimeta tabel ümber';
$strRenameTableOK = 'Tabel %s on ümber nimetatud %s';
$strRepairTable = 'Paranda tabelit';
$strReplace = 'Asenda';
$strReplaceNULLBy = 'Asenda NULL ';
$strReplaceTable = 'Asenda tabeli andmed failiga';
$strReset = 'Tühista';
$strResourceLimits = 'Ressursilimiidid';
$strRevoke = 'Võta tagasi';
$strRevokeAndDelete = 'Eemalda kõik aktiivsed privileegid kasutajatelt ning kustuta nad pärast seda.';
$strRevokeAndDeleteDescr = 'Kasutajatel on ikka veel USAGE privileeg, kuni privileegid pole taaslaetud.';
$strRevokeGrant = 'Võta nõudmine tagasi';
$strRevokeGrantMessage = 'Te võtsite privileegi andmise %s -le tagasi';
$strRevokeMessage = 'Te võtsite tagasi privileegid %s-lt';
$strRevokePriv = 'Võtke privileegid';
$strRowLength = 'Rea pikkus';
$strRowSize = ' rea suurus ';
$strRows = 'Ridu';
$strRowsFrom = 'read alates';
$strRowsModeFlippedHorizontal = 'horisontaalne (pööratud päis)';
$strRowsModeHorizontal = 'horisontaalselt';
$strRowsModeOptions = 'näita %s and korda pealkirju iga %s järel';
$strRowsModeVertical = 'vertikaalselt';
$strRowsStatistic = 'Rea statistika';
$strRunQuery = 'Lae päring';
$strRunSQLQuery = 'Päri SQL päring(uid) andmebaasist %s';
$strRunning = 'jookseb masinas %s';
$strRussian = 'Vene';

$strSQL = 'SQL';
$strSQLExportType = 'Ekspordi tüüp';
$strSQLOptions = 'SQL seaded';
$strSQLParserBugMessage = 'On võimalus, et te leidsite vea SQL parseris. Palun kontrollige oma päringut täpsemalt ja kontrollige, et jutumärgid/ülakomad oleks korrektselt lõpetatud. Veel on võimalik, et te loete sisse faili kus on binaarne info väljaspool varjestatud tekstiala. Samuti võiksite te proovida oma päringut MySQLi käsureal. MySQLi viga väljastatakse päringu all, kui seal tõesti on mõni viga, siis see võib aidata teil leida vea algpõhjuseid. Kui teil on peale seda ikka veel probleeme või kui mu parser keeldub töötamast ning MySQL käsurida töötab, siis palun vähendage oma päringuid üksiku päringuni, mis põhjustab probleeme ja sisestage vea raport koos viga põhjustanud päringuga LÕIGET sektsioonis allpool:';
$strSQLParserUserError = 'Tundub, et teie SQL päringus on viga. MySQLi serveri error peaks ilmuma allpool, kui seal on midagi, siis peaks see teil aitama leia vea põhjust.';
$strSQLQuery = 'SQL-päring';
$strSQLResult = 'SQL tulemus';
$strSQPBugInvalidIdentifer = 'Vigane identifikaator';
$strSQPBugUnclosedQuote = 'Sulgemata jutumärk/ülakoma';
$strSQPBugUnknownPunctuation = 'Tundmatu suunav tekst';
$strSave = 'Salvesta';
$strSaveOnServer = 'Salvestage serverisse kataloogi %s';
$strScaleFactorSmall = 'Skalaarfaktor on liiga väike, et skeem mahuks ühele lehele.';
$strSearch = 'Otsi';
$strSearchFormTitle = 'Otsi andmebaasist';
$strSearchInTables = 'Otsi tabeli(te)st:';
$strSearchNeedle = 'Sõna(d) või väärtus(ed) otsinguks (lühend: "%"):';
$strSearchOption1 = 'vähemalt üks sõnadest';
$strSearchOption2 = 'kõik sõnadest';
$strSearchOption3 = 'täpne fraas';
$strSearchOption4 = 'regulaaravaldisena';
$strSearchResultsFor = 'Otsingu tulemused "<i>%s</i>" %s:';
$strSearchType = 'Leia:';
$strSecretRequired = 'Konfiguratsioonifail nõuab nüüd salajast võtmesõna (blowfish_secret).';
$strSelect = 'Vali';
$strSelectADb = 'Valige andmebaas';
$strSelectAll = 'Märgista kõik';
$strSelectFields = 'Vali väljad (vähemalt üks):';
$strSelectNumRows = 'päringus';
$strSelectTables = 'Vali tabelid';
$strSend = 'Salvesta failina';
$strSent = 'Saadetud';
$strServer = 'Server %s';
$strServerChoice = 'Serveri valik';
$strServerStatus = 'Jooksev informatsioon';
$strServerStatusUptime = 'See MySQL server on käinud %s. Käivitusaeg %s.';
$strServerTabProcesslist = 'Protsessid';
$strServerTabVariables = 'Muutujad';
$strServerTrafficNotes = '<b>Serveri liiklus</b>: Need tabelid näitavad võrguliikluse statistikat selle MySQL serveri jaoks alates tema käivitamisest.';
$strServerVars = 'Serveri muutujad ja seaded.';
$strServerVersion = 'Serveri versioon';
$strSessionValue = 'Sessiooni väärtus';
$strSetEnumVal = 'Kui välja tüüp on "enum" või "set", palun sisestage väärtused kasutades järgmist paigutust: \'a\',\'b\',\'c\'...<br />Kui te peate lisama kaldkriipsu ("\") või ülakoma ("\'") sinna paigutusse, varjestage see tagurpidi kaldkriipsuga (näiteks \'\\\\xyz\' või \'a\\\'b\').';
$strShow = 'Näita';
$strShowAll = 'Näita kõiki';
$strShowColor = 'Näita värvi';
$strShowCols = 'Näita välju';
$strShowDatadictAs = 'Andmesõnastiku formaat';
$strShowFullQueries = 'Näita täispikkasid päringuid';
$strShowGrid = 'Näita võrgustiku';
$strShowPHPInfo = 'Näita PHP informatsiooni';
$strShowTableDimension = 'Näita tabelite dimensiooni';
$strShowTables = 'Näita tabeleid';
$strShowThisQuery = ' Näita päringut siin uuesti ';
$strShowingRecords = 'Näita ridu';
$strSimplifiedChinese = 'Lihtsustatud Hiina';
$strSingly = '(üksikult)';
$strSize = 'Suurus';
$strSort = 'Sorteeri';
$strSortByKey = 'Sorteeri võtme järgi';
$strSpaceUsage = 'Ruumivõtt';
$strSplitWordsWithSpace = 'Sõnad on eraldatud tühikuga (" ").';
$strStatCheckTime = 'Viimane vaatamine';
$strStatCreateTime = 'Loodud';
$strStatUpdateTime = 'Viimane muudatus';
$strStatement = 'Parameerid';
$strStatus = 'Staatus';
$strStrucCSV = 'CSV andmed';
$strStrucData = 'Struktuur ja andmed';
$strStrucDrop = 'Lisa \'drop table\'';
$strStrucExcelCSV = 'CSV Ms Exceli jaoks';
$strStrucOnly = 'Ainult struktuur';
$strStructPropose = 'Soovita tabeli struktuuri';
$strStructure = 'Struktuur';
$strSubmit = 'Vali';
$strSuccess = 'Teie SQL päring täideti edukalt';
$strSum = 'Summa';
$strSwedish = 'Rootsi';
$strSwitchToTable = 'Mine üle kopeeritud tabelile';

$strTable = 'Tabel';
$strTableComments = 'Tabeli kommentaarid';
$strTableEmpty = 'Tabeli nimi on tühi!';
$strTableHasBeenDropped = 'Tabel %s kustutatud';
$strTableHasBeenEmptied = 'Tabel %s tühjendatud';
$strTableHasBeenFlushed = 'Tabel %s ühtlustatud';
$strTableMaintenance = 'Tabeli hooldus';
$strTableOfContents = 'Sisukord';
$strTableOptions = 'Tabeli seaded';
$strTableStructure = 'Struktuur tabelile';
$strTableType = 'Tabeli tüüp';
$strTables = '%s tabel(it)';
$strTblPrivileges = 'Tabel-spetsiifilised privileegid';
$strTextAreaLength = ' Oma suuruse tõttu<br /> võib see väli olla mittemuudetav ';
$strThai = 'Tai';
$strTheContent = 'Teie faili sisu on lisatud.';
$strTheContents = 'Faili sisu asendab valitud tabeli sisu ridades kus on identsed primaarsed või unikaalsed võtmed.';
$strTheTerminator = 'Väljade eraldaja.';
$strThisHost = 'Antud host';
$strThisNotDirectory = 'See ei olnud kataloog';
$strThreadSuccessfullyKilled = 'Protsess %s katkestati edukalt.';
$strTime = 'Aeg';
$strToggleScratchboard = 'vaheta märkmetahvlit';
$strTotal = 'kokku';
$strTotalUC = 'Kokku';
$strTraditionalChinese = 'Traditsionaalne Hiina';
$strTraffic = 'Liiklus';
$strTransformation_application_octetstream__download = 'Näita linki millega laadida alla välja binaarne info. Esimene seade on binaarse faili nimi. Teine seade on võimalik väljanimi tabelis mis sisaldab failinime. Kui te määrate teise seade siis peab esimene seade olema tühi tekst';
$strTransformation_image_jpeg__inline = 'Kuvab lingitud väikepildi; seaded: laius,kõrgus pikslites (hoiab alles originaalpildi laiuse-kõrguse suhte)';
$strTransformation_image_jpeg__link = 'Kuvab lingi sellele pildile (otsene binaarne allalaadimine, jne.).';
$strTransformation_image_png__inline = 'Vaata image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Võtab TIME, TIMESTAMP või DATETIME tüüpi välja ja teisendab selle Teie lokaalse ajaseade järgi. Esimene seade on lisa (tundides) , mis lisatakse ajale (vaikimisi: 0). Teine seade on teistsugune ajamäärang vastavalt PHP  strftime() funktsioonile.';
$strTransformation_text_plain__external = 'AINULT LINUXILE: Käivitab välise aplikatsiooni ja annab talle standard sisendisse ette välja sisu. Tagastab aplikatsiooni standard väljundi. Vaikimisi on selleks Tidy, et kuvada ilusti formaaditud HTML koodi. Turvariskide maandamiseks peate te käsitsi muutma faili libraries/transformations/text_plain__external.inc.php ja lisama sinna programmid mida te lasete käivitada. Esimene seade on siis kasutatava programmi number, teine seade on programmi parameetrid. Kui kolmas seade on 1 siis töödeldakse väljund funktsiooniga htmlspecialchars() (vaikimisi 1). Kui neljas seade on  1 pannakse NOWRAP sisu lahtrile nii, et kogu väljund kuvatakse ilma formaati muutmata(vaikimisi 1)';
$strTransformation_text_plain__formatted = 'Hoiab alles originaalset välja formaati. Ei varjestata.';
$strTransformation_text_plain__imagelink = 'Kuvab pildi ja lingi, väli sisaldab failinime; esimene seade on eelnev tekst nagu "http://domain.com/", teine seade on laius pikslites, kolmas on kõrgus.';
$strTransformation_text_plain__link = 'Kuvab lingi, väli sisaldab failinime; esimene seade on eelnev tekst näiteks "http://domain.com/", teine seade on nimi lingile.';
$strTransformation_text_plain__substr = 'Näitab ainult osa tekstist. Esimene seade on määrang kust positsioonilt teie teksti kuva hakkab.(vaikimisi 0). Teine seade on kuipalju teksti tagastatakse, kui see tühjaks jätta, tagastatakse kogu allesjäänud tekst. Kolmas seade defineerib mis tekst lisatakse väljundi lõppu kui saadud tekst tagastatakse. (vaikimisi: ...) .';
$strTransformation_text_plain__unformatted = 'Näitab HTML koodi puhta tekstina. HTML formateerimist ei näidata.';
$strTruncateQueries = 'Lühenda näidatavad päringud';
$strTurkish = 'Türgi';
$strType = 'Tüüp';

$strUkrainian = 'Ukraina';
$strUncheckAll = 'Puhasta kõik';
$strUnicode = 'Unikaalne';
$strUnique = 'Unikaalne';
$strUnknown = 'tundmatu';
$strUnselectAll = 'Puhasta kõik';
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';
$strUpdatePrivMessage = 'Te uuendasite privileege %s-l.';
$strUpdateProfile = 'Uuendatav profiil:';
$strUpdateProfileMessage = 'Profiil uuendatud.';
$strUpdateQuery = 'Uuenda päringut';
$strUpgrade = 'Te peaksite uuendama %s -i versioonini %s või uuemaks.';
$strUsage = 'Kasutus';
$strUseBackquotes = 'Kasutage tagurpidi kaldkriipse tabelites või tabelinimedes';
$strUseHostTable = 'Kasuta host tabelit';
$strUseTables = 'Kasuta tabeleid';
$strUseTextField = 'Kasutage tekstivälja';
$strUseThisValue = 'Kasuta seda väärtust';
$strUser = 'Kasutaja';
$strUserAlreadyExists = 'Kasutaja %s on juba olemas!';
$strUserEmpty = 'Kasutajanimi on tühi!';
$strUserName = 'Kasutajanimi';
$strUserNotFound = 'Valitud kasutajat ei leitud privileegide tabelist.';
$strUserOverview = 'Kasutaja ülevaade';
$strUsers = 'Kasutajad';
$strUsersDeleted = 'Valitud kasutajad on õnnestunult kustutatud.';
$strUsersHavingAccessToDb = 'Kasutajad kellel on ligipääs &quot;%s&quot;';

$strValidateSQL = 'Kontrolli SQL-i';
$strValidatorError = 'SQL-i valideerijat ei suudetud avada. Palun kontrollige, et te olete installinud vastavad php moodulid nagu on kirjeldatud %sdokumentatsioonis%s.';
$strValue = 'Väärtus';
$strVar = 'Muutuja';
$strViewDump = 'Vaata tabeli väljundit (skeemi)';
$strViewDumpDB = 'Vaata andmebaasi väljundit (skeemi)';
$strViewDumpDatabases = 'Näita andmebaaside sisu (skeemi)';

$strWebServerUploadDirectory = 'webiserveri üleslaadimiskataloogi';
$strWebServerUploadDirectoryError = 'Kataloog mille Te üleslaadimiseks sättisite ei ole ligipääsetav';
$strWelcome = 'Tere tulemast %s';
$strWestEuropean = 'Lääne-Euroopa';
$strWildcard = 'metamärk';
$strWindowNotFound = 'Vajaliku sirvija akent ei suudetud uuendada. Võibolla Te olete peaakna sulgenud või Teie sirvija ei luba akendevahelist suhtlist tänu turvaseadetele.';
$strWithChecked = 'Valitud:';
$strWritingCommentNotPossible = 'Kommentaaride kirjutamine ei ole võimalik.';
$strWritingRelationNotPossible = 'Sõltuvuse kirjutamine ei ole võimalik';
$strWrongUser = 'Vale kasutajanimi/parool. Ligipääs keelatud.';

$strXML = 'XML';

$strYes = 'Jah';

$strZeroRemovesTheLimit = 'Märkus: Märkides antud seaded 0 (null) , eemaldate limiidi.';
$strZip = '"zipitud"';

$strSpanish = 'Spanish';  //to translate
?>
