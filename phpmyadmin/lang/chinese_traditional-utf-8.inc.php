<?php/* $Id: chinese_traditional-utf-8.inc.php,v 2.2 2004/09/21 11:00:38 rabus Exp $ *//** * Last translation by: Siu Sun <siusun@best-view.net> * Follow by the original translation of Taiyen Hung ����ҡ���<yen789@pchome.com.tw> */$charset = 'utf-8';$allow_recoding = TRUE;$text_dir = 'ltr';$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';$right_font_family = 'helvetica, sans-serif';$number_thousands_separator = ',';$number_decimal_separator = '.';// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');// See http://www.php.net/manual/en/function.strftime.php to define the// variable below$datefmt = '%B %d, %Y, %I:%M %p';$timespanfmt = '%s ���, %s ������, %s �ú��� %s ���';$strAPrimaryKey = '��Ȏٵ��Ӎ��������á %s';$strAbortedClients = '������';$strAbsolutePathToDocSqlDir = '��я����� docSQL ����Գ�����ӎʪ�����ٌ����������ُ�����';$strAccessDenied = '��⍵�������';$strAccessDeniedExplanation = 'phpMyAdmin �����ώ������á MySQL �����ٌ��, ��������ٌ����⍵����������. �����ž�� config.inc.php �������Ĵ��Ⱦ�Č�ٍ��, ��Ȍ����ٍ����Ɍ�������ɍ������������ҽ�������ý��ȍ������ƺ�������ť��Ɗ����� MySQL �����ٌ���ҽ���������';$strAction = '�����';$strAddAutoIncrement = "������ AUTO_INCREMENT ������";$strAddConstraints = '��ʌ����ƌæ';$strAddDeleteColumn = '������/������ ����㽾³';$strAddDeleteRow = '������/������ ���������';$strAddDropDatabase = '��ʌ�� \'�û��ۏҽ������\' ������';$strAddIntoComments = '��ʌ����ȏ��������';$strAddNewField = '�����ʾ���³���';$strAddPrivilegesOnDb = '����ȴ��яҽ�����ǌ�ʌ����Ɏ��';$strAddPrivilegesOnTbl = '����ȴ��яҽ��������ʌ����Ɏ��';$strAddSearchConditions = '�����ʾ���������Ȧ ("where" ��ƌ�������Ȏ��)';$strAddToIndex = '������ &nbsp;%s&nbsp; ���������³';$strAddUser = '����������䬏��';$strAddUserMessage = '�����Ӿ�������������Ѿ������䬏��.';$strAddedColumnComment = '����ȴ��Ѿ³��ٌ�ʌ����ȏ��������';$strAddedColumnRelation = '����ȴ��Ѿ³��ٌ�ʌ��������';$strAdministration = '��ȍ������ƺ';$strAffectedRows = '������������: ';$strAfter = '��� %s ��ь��';$strAfterInsertBack = '�����';$strAfterInsertNewInsert = '����������к����Գ';$strAll = '������';$strAllTableSameWidth = '�ȴ�����Ԍ��ώ���ۼ�ť��ŏҽ������?';$strAlterOrderBy = '��վ���³��ٌ����վ�⌼�����Գ';$strAnIndex = '��������Ӎ��������á %s';$strAnalyzeTable = '�ú��Əҽ������';$strAnd = '�ý';$strAny = '��Ȋ��';$strAnyHost = '��Ȋ����Ⱦ��';$strAnyUser = '��Ȋ������䬏��';$strArabic = '�����Ŋ�����';$strArmenian = '��ڌ���ѱ���';$strAscending = '������';$strAtBeginningOfTable = '����ҽ��������ю��';$strAtEndOfTable = '����ҽ������������';$strAttr = '��¾��';$strAutodetect = '������������';$strAutomaticLayout = '������ʹ���';$strBack = '�����Ɋ���ʪ';$strBaltic = '�Ң�����������';$strBeginCut = '��ь�� �Ż���';$strBeginRaw = '��ь�� ��Č�яҽ���';$strBinary = '��Ԏ�ӌæ���';$strBinaryDoNotEdit = '��Ԏ�ӌæ��� - ��ُ���ᬏ��';$strBookmarkAllUsers = '�ť��ō䬏�������������۾�����';$strBookmarkDeleted = '�����ی�Ӎ��û���.';$strBookmarkLabel = '�����ی�ٍ��';$strBookmarkOptions = '�����ێ���ʷ';$strBookmarkQuery = 'SQL �����������';$strBookmarkThis = '������ SQL ��������ʌ��������';$strBookmarkView = '�Ĵ���';$strBrowse = '����ϸ';$strBrowseForeignValues = '����ϸ���������';$strBulgarian = '�����ʌé������';$strBzError = 'phpMyAdmin �������������ʾ�������� php ��þ��� Bz2 ������������. ������Ϫ������ phpMyAdmin ��Ќ����䏬Ќ�� <code>$cfg[\'BZipDump\']</code> ���<code>FALSE</code>. �ϭ�����Ҋ���� Bz2 �������ď��,��Ѿ����� php �á��������þ��. ��Ҿ����ь����� php �����یʱ�ʱ %s .';$strBzip = '"bzipped"';$strCSVOptions = 'CSV ����ʷ';$strCannotLogin = '��������Ȍ�� MySQL �����ٌ��';$strCantLoad = '������������ %s ������,<br />��Ѿ���Ĵ PHP ��Ќ��';$strCantLoadRecodeIconv = '������������ iconv �����پ���ᬍ����ь���������������ᬍ����ž��, ��я�Ќ�� php �����Č����������������������� phpMyAdmin ����䬾������ᬍ����ž����ď��.';$strCantRenameIdxToPrimary = '�������������������ٍ�� PRIMARY!';$strCantUseRecodeIconv = '�����ᬍ�����������������,����������� iconv, libiconv ��� recode_string ��ď��. ��Ѿ���Ĵ������ php ��Ќ��.';$strCardinality = '����ô';$strCarriage = '������: \\r';$strCaseInsensitive = '�ۤ�����Ǌ�ٍ�����';$strCaseSensitive = '�ۤ�����Ǎ�����';$strCentralEuropean = '��о�Ə�����';$strChange = '������';$strChangeCopyMode = '�ȼ��Ѿ������䬏����Ɋ���䬍����Ԋ�Ѿ�Ɏ��, ��� ...';$strChangeCopyModeCopy = '... ��������Ɋ���䬏��.';$strChangeCopyModeDeleteAndReload = ' ... �û��ۏ�Ɋ���䬏����Ɏ�پ����������Ɏ�Əҽ������.';$strChangeCopyModeJustDelete = ' ... �û��ۏ�Ɋ���䬏��.';$strChangeCopyModeRevoke = ' ... �Ȣ��۾ť��ŏ�Ɋ���䬏����ž�Ê�Ѿ�Ɏ�Ɗ�όû���.';$strChangeCopyUser = '�����Ս�Ȍ���ҽ��� / �۽�������䬏��';$strChangeDisplay = '����㽎���ۼ��Ѿ³���';$strChangePassword = '�����Ռ�����';$strCharset = '�������ʹ��� (Charset)';$strCharsetOfFile = '��������������:';$strCharsets = '���������';$strCharsetsAndCollations = '�����������ɾ�����';$strCheckAll = '������';$strCheckOverhead = '����Ĵ��ٌ������Գ (overheaded)'; // nor sure yet.$strCheckPrivs = '�Ĵ�����Ɏ��';$strCheckPrivsLong = '�Ĵ����ҽ������ &quot;%s&quot; ��Ѿ�Ɏ��.';$strCheckTable = '����Ĵ�ҽ������';$strChoosePage = '��ю���㽎���Ϫ�ᬏ������ʪ���';$strColComFeat = '����ۼ�³��ُ�ȏ��';$strCollation = '������';$strColumnNames = '�³��ٌ�ٍ��';$strColumnPrivileges = '�Խ����³��پ�Ɏ��';$strCommand = '�Խ���';$strComments = '��ȏ��';$strCompleteInserts = '����䬌�Ծ�������Խ���';$strCompression = '�����';$strConfigFileError = 'phpMyAdmin ��������������������Ќ�����! ��������������ʍ�� php �Ų�á��������ɍ�������۾�� php �������Ų�á����Ï�Ծ��.<br />��ь����ύ���ڴ��Ŋ�ъ�Ѿ�Ս�������Ǝ�ь�Ċ�ϾĴ��� php ��������ۊ�����. ��������������ێ����������Ə�𾹶��������ľ���ú�ô.<br />�ϭ�����Ŋ�ю����ƌ�Ԍ������������ʪ, ��Ҋȣ�������Ŋ�Ȋ������.';$strConfigureTableCoord = '��я�Ќ������ʹ %s ��������ƾ��';$strConnections = '������';$strConstraintsForDumped = '����ȸ�ҽ��������ƌæ';$strConstraintsForTable = '�ҽ��������ƌæ';$strCookiesRequired = 'Cookies �����Ì�Č���ُ����Ȍ��.';$strCopyTable = '�۽����ҽ�������á��� (�ʹ������ �ҽ�����ǌ�ٍ��<b>.</b>�ҽ��������ٍ��):';$strCopyTableOK = '��Ӎ�㌡��ҽ������ %s �۽������ %s.';$strCopyTableSameNames = '�������۽����á�����ԏҽ������!';$strCouldNotKill = 'phpMyAdmin ��������о��Խ��� %s. ����������Խ��ی�Ӎ�㍵ƾ��.';$strCreate = '�ȼ���';$strCreateIndex = '������ &nbsp;%s&nbsp; ���������³';$strCreateIndexTopic = '������������������';$strCreateNewDatabase = '�ȼ��Ѿ���ҽ������';$strCreateNewTable = '�ȼ��Ѿ���ҽ����������ҽ������ %s';$strCreatePage = '�ȼ��Ѿ������ʪ';$strCreatePdfFeat = '�ȼ��� PDF';$strCreationDates = '�ȼ���/������/����Ĵ ������';$strCriteria = '������';$strCroatian = '��э�����������';$strCyrillic = '�����ԍò���';$strCzech = '��ጷѾ��';$strDBComment = '�ҽ�����Ǐ�ȏ��������: ';$strDBGContext = '��¾�� (Context)';$strDBGContextID = '��¾�� (Context) ID';$strDBGHits = '������';$strDBGLine = '���';$strDBGMaxTimeMs = '����ۤ������, ms';$strDBGMinTimeMs = '������������, ms';$strDBGModule = '������';$strDBGTimePerHitMs = '������/���, ms';$strDBGTotalTimeMs = '���������, ms';$strDanish = '��Վ�����';$strData = '�ҽ���';$strDataDict = '������������';$strDataOnly = '�����ŏҽ���';$strDatabase = '�ҽ������';$strDatabaseExportOptions = '�ҽ�����Ǐ���������ʷ';$strDatabaseHasBeenDropped = '�ҽ������ %s ��ӏ�ǌû���';$strDatabaseNoTable = '����ҽ�����Ǿ���ŏҽ������!';$strDatabases = '�ҽ������';$strDatabasesDropped = '%s ��яҽ�����ǌ�Ӿ�ƌ�Čû���.';$strDatabasesStats = '�ҽ�����Ǎ�����';$strDatabasesStatsDisable = '����Т�����þ�����';$strDatabasesStatsEnable = '��Č�������þ�����';$strDatabasesStatsHeavyTraffic = '���: ��Č���ҽ�����Ǎ����þ���������������䢍�Čۤ����� Web �����ٌ����� MySQL ��ю����������.';$strDbPrivileges = '�Խ����ҽ�����Ǿ�Ɏ��';$strDbSpecific = '�Խ����ҽ������';$strDefault = '��Ə�Ќ��';$strDefaultValueHelp = '��Ə�Ќ��: ��ь����������ӎ�Ə�Ќ��, ��������ʊ�Ɋ�Ȋ����پ��������������';$strDelOld = '��ʪ����������á�ҽ��������ӊ�ٌ�����. �����Ծ���û��ێ��������������?';$strDelayedInserts = '����䬌Ȧ��ӌ��������';$strDelete = '�û���';$strDeleteAndFlush = '�û��ۊ���䬏����Ɏ�پ����������Ɏ��.';$strDeleteAndFlushDescr = '�����������Ѿ����������������,�����پ����������Ɏ�Ǝ��������������.';$strDeleted = '����Գ��ӏ�ǌû���';$strDeletedRows = '��ӌû��۾³���:';$strDeleting = '�û��� %s';$strDescending = '������';$strDescription = '������';$strDictionary = '������';$strDisabled = '�����Č��';$strDisplayFeat = '��ď������ۼ';$strDisplayOrder = '����ۼ������';$strDisplayPDF = '����ۼ PDF �ϭ�Ϫ';$strDoAQuery = '�ȴ�����ѾĴ��� (��䬌����� : "%")';$strDoYouReally = '����������Ϫ ';$strDocu = '�����ھ���Ȧ';$strDrop = '�û���';$strDropSelectedDatabases = '�û��ی�ӎ���㽊�яҽ������';$strDropUsersDb = '�û��ۏý����䬏�������Ԍ�ٍ����яҽ������.';$strDumpSaved = '����ȸ��ӌ�ӌá����� %s.';$strDumpXRows = '����ȸ %s ���, �� %s ��Ԏ�ь��.';$strDumpingData = '�������ȴ��яҽ�����Ǎ�����������';$strDynamic = '����';$strEdit = '�ᬏ��';$strEditPDFPages = '�ᬏ�� PDF �ʪ���';$strEditPrivileges = '�ᬏ����Ɏ��';$strEffective = '��ώ��';$strEmpty = '������';$strEmptyResultSet = 'MySQL ��Ҍ������Ĵ�����ƾ�������� (��Č�ʌ���������������žŲ�á��ό�þ���Ȧ�������Գ)';$strEnabled = '��Č��';$strEnd = '�����Ԋ���ʪ';$strEndCut = '��ƾ�� �Ż���';$strEndRaw = '��ƾ�� ��Č�яҽ���';$strEnglish = '�ѱ���';$strEnglishPrivileges = '�Ҭ���: MySQL ��Ɏ�ƌ�ٍ������ȴ�ѱ�������ۼ';$strError = '������';$strEstonian = '���������������';$strExcelEdition = 'Excel ��þ��';$strExcelOptions = 'Excel ����ʷ';$strExecuteBookmarked = '����Ծ����۾Ĵ���';$strExplain = '������ SQL';$strExport = '������';$strExtendedInserts = '����Ȧ������������';$strExtra = '������';$strFailedAttempts = '�����ό۱���';$strField = '�³���';$strFieldHasBeenDropped = '�ҽ������ %s ��ӏ�ǌû���';$strFields = '�³���';$strFieldsEmpty = ' �³��ٍ��������������! ';$strFieldsEnclosedBy = '��Ծ³��ً�ي���䬌��������';$strFieldsEscapedBy = '���ESCAPE��ي���䬌��������';$strFieldsTerminatedBy = '��Ծ³��ٌú��䋥ي���䬌��������';$strFileAlreadyExists = '����� %s ��ӌ�����,��Ѿ����վ���Ì�ٍ���������㽋�ԏϺ��ǌ᱌���������Ë�َ���ʷ.';$strFileCouldNotBeRead = '�����Í�����������';$strFileNameTemplate = '����Ì�ٍ��������';$strFileNameTemplateHelp = '����� __DB__ �������ҽ�����ǌ�ٍ��, __TABLE__ ����ҽ��������ٍ��. %s��Ȋ�� strftime%s ��������������㌶Ɏ����ʎ���ʷ�����������ʌ��. ������������������������.';$strFileNameTemplateRemember = '��������������ٍ��';$strFixed = '������';$strFlushPrivilegesNote = '���: phpMyAdmin ����ڴ�� MySQL ��Ɏ�Əҽ����������������䬏����Ɏ��. �ϭ�������䬏�������Ծ����Տҽ������, �ҽ�����������Ռ���������ý��ώ������䬏������Ҫ��ō�. ����������Ҫ���, �����Ō���չ��Ԍ�� %s��پ����Ō��%s ��Ɏ�Əҽ������.';$strFlushTable = '����Ǿ������ҽ������ ("FLUSH")';$strFormEmpty = '����ʹ��������Ǌ������ҽ���!';$strFormat = '�ʹ���';$strFullText = '����ۼ��Ծ������';$strFunction = '������';$strGenBy = '�ȼ���';$strGenTime = '�ȼ��Ѿ�����';$strGeneralRelationFeat = '������������ď��';$strGerman = '��ᏻ�';$strGlobal = '����';$strGlobalPrivileges = '�����Ɏ��';$strGlobalValue = '���䌥�';$strGo = '�����';$strGrantOption = '��þ��';$strGreek = '��ԏ�����';$strGzip = '"gzipped"';$strHasBeenAltered = '��Ӎ�������';$strHasBeenCreated = '��Ӎ��ȼ���';$strHaveToShow = '�������Ϫ����㽾����Ύ���ۼ�����Ծ³���';$strHebrew = '��Ԋ��������';$strHome = '��ȍ���Գ';$strHomepageOfficial = 'phpMyAdmin �����Ս�Ӎ��';$strHost = '��Ⱦ��';$strHostEmpty = '��я�������Ⱦ�Č�ٍ��!';$strHungarian = '��Í���é���';$strId = 'ID'; // use eng$strIdxFulltext = '������������';$strIfYouWish = '�ϭ�������Ϫ�Խ����ҽ�������������³��ٕ�ԏ�я������䬎����Ď���э���³��ٌ�ٍ��';$strIgnore = '�����';$strIgnoringFile = '����𴾻��� %s';$strImportDocSQL = '������ docSQL �����';$strImportFiles = '�����������';$strImportFinished = '��������Ծ��';$strInUse = '����䬊��';$strIndex = '������';$strIndexHasBeenDropped = '������ %s ��ӏ�ǌû���';$strIndexName = '��������ٍ��&nbsp;:';$strIndexType = '������������&nbsp;:';$strIndexes = '������';$strInnodbStat = 'InnoDB �ѥ���';$strInsecureMySQL = '��Ќ����䌷���Ŏ����Ќ�� (root��Ȍ����ɾ���Ō�����) �ý��Ə�Ѝ�� MySQL ��Ɏ�ƾæ��������ԋ�� MySQL �����ٌ����������Ə�Ѝ����Ќ����я�ԍ����������Ì�վ�㏢ǌ�������Ծ����ž����վ�Ŏ����Ќ����Ȏ�ӾТ��Ō�����������';$strInsert = '������';$strInsertAsNewRow = '��ӌ������������Գ';$strInsertNewRow = '����������к����Գ';$strInsertTextfiles = '������������ҽ����������ҽ������';$strInsertedRowId = '�������ҽ������ id:';$strInsertedRows = '������������:';$strInstructions = '�Խ���';$strInternalNotNecessary = '* �𦌷������������� InnoDB ��ӌ������������������Ϫ���.';$strInternalRelations = '������������';$strJapanese = '������';$strJumpToDB = '��Ҍá�ҽ������ &quot;%s&quot;.';$strJustDelete = '��������Ɏ�Əҽ�����ǌû��ۊ���䬏��.';$strJustDeleteDescr = ' &quot;�û���&quot; �������䬏����ٍ�������ʍ�Ȍ���ҽ�����Ǎ����Ҏ�پ����Ō���ҽ�����Ǎ���Т.';$strKeepPass = '��ъ�ُϪ�����Ռ�����';$strKeyname = '�ٵ���';$strKill = 'Kill'; //should expressed in English$strKorean = '�����';$strLaTeX = 'LaTeX';  // use eng$strLaTeXOptions = 'LaTeX ����ʷ';$strLandscape = '��ǌ��';$strLatexCaption = '�ҽ������������';$strLatexContent = '�ҽ������ __TABLE__ ������';$strLatexContinued = '(������)';$strLatexContinuedCaption = '�����ԏҽ������������';$strLatexIncludeCaption = '�Է��ҽ������������';$strLatexLabel = '�������ٵ���';$strLatexStructure = '�ҽ������ __TABLE__ ��ƾ��';$strLengthSet = '��ጼ�/������*';$strLimitNumRows = '�к����Գ/����ʪ';$strLineFeed = '������: \\n';$strLinesTerminatedBy = '��Ԋ�ъ����ԋ�ي���䬌��������';$strLinkNotFound = '�Ų��ٌá������';$strLinksTo = '�����ƌá';$strLithuanian = '��ю��������';$strLoadExplanation = '�����Ҿ���������䱍�ȍ�������𾻢�Ĵ, �ϭ���������, ����������䱾�����.';$strLoadMethod = 'LOAD ������';$strLocalhost = '����';$strLocationTextfile = '����������Í����ٍ��';$strLogPassword = '������:';$strLogServer = '�����ٌ��';$strLogUsername = '��Ȍ����ٍ��:';$strLogin = '��Ȍ��';$strLoginInformation = '��Ȍ���ҽ���';$strLogout = '��Ȍ����ȍ��';$strMIME_MIMEtype = 'MIME ������';$strMIME_available_mime = '�������� MIME ������';$strMIME_available_transform = '�������䬏�ž����Ռ��';$strMIME_description = '������';$strMIME_nodescription = '�����я�ž����Ռ������ŏ�����.<br />��ь�Ί������Ĵ��� %s ����������䬎��.';$strMIME_transformation = '����ϸ�����ž����Ռ��';$strMIME_transformation_note = '��Ŏ���������䬊�я�ž����Ռ������ʷ��� MINE �����я�ž������ʷ, ��ѾĴ��� %s��ž����Ռ��������%s';$strMIME_transformation_options = '��ž����Ռ������ʷ';$strMIME_transformation_options_note = '��э䬊ȴ��э���ʹ�����������ž������ʷ���: \'a\',\'b\',\'c\'...<br />�ϭ�������Ϫ��������پ����� ("\") ������������ ("\'") ��ь�ٌ�ʊ�Ɍ�پ����� (��ьϭ \'\\\\xyz\' or \'a\\\'b\').';$strMIME_without = 'MIME �����ъȴ���������ۼ�������Ōú��䏸ž����ď��';$strModifications = '�����Ռ�ӌ�ӌ��';$strModify = '������';$strModifyIndexTopic = '�����Ս�����';$strMoreStatusVars = '�������ѥ�Ҫ�ҽ���';$strMoveTable = '��Ȍ���ҽ�������á���(�ʹ������ �ҽ�����ǌ�ٍ��<b>.</b>�ҽ��������ٍ��)';$strMoveTableOK = '�ҽ������ %s ��Ӎ�㍤Ȍ���á %s.';$strMoveTableSameNames = '��������Ȍ���á�����ԏҽ������!';$strMultilingual = '���������';$strMustSelectFile = '�����Ŏ���㽎���Ϫ��������������.';$strMySQLCharset = 'MySQL �������ᬍ��';$strMySQLReloaded = 'MySQL ��پ����Ō����Ծ��';$strMySQLSaid = 'MySQL ��Ҍ����� ';$strMySQLServerProcess = 'MySQL ��þ�� %pma_s1% ��� %pma_s2% ����ԕ�ԍ�Ȍ�������� %pma_s3%';$strMySQLShowProcess = '����ۼ��ь�� (Process)';$strMySQLShowStatus = '����ۼ MySQL ����ԍѥ���';$strMySQLShowVars = '����ۼ MySQL ��ȍ����ɾ��';$strName = '��ٍ��';$strNext = '��ъ�����';$strNo = ' ��� ';$strNoDatabases = '����ŏҽ������';$strNoDatabasesSelected = '����ŏҽ�����ǎ����.';$strNoDescription = '����ŏ�����';$strNoDropDatabases = '"DROP DATABASE" �Խ��ی�Ӎ�㌪���.';$strNoExplain = '�𴎪ڏ����� SQL';$strNoFrames = 'phpMyAdmin �����������Ê���䬌��������<b>�ʪ���</b>�������ϸ���.';$strNoIndex = '����Ō�ӌ��������������!';$strNoIndexPartsDefined = '����ȸ�������ҽ���������������!';$strNoModification = '����ŏ�ɾ��';$strNoOptions = '�������ʹ�����ύ������ʷ';$strNoPassword = '��ٍ䬌�����';$strNoPermission = 'Web �����ٌ������ž�Ɏ�ƌ�ӌ������� %s.';$strNoPhp = '��Ȏ�� PHP ��ь�����';$strNoPrivileges = '����ž�Ɏ��';$strNoQuery = '����� SQL ������!';$strNoRights = '�������������ŏ�Ҍ�ʍ����Ɏ��!';$strNoSpace = '�������ُ�Ҍ�ӌ������� %s.';$strNoTablesFound = '�ҽ�����Ǌ�о���ŏҽ������';$strNoUsersFound = '�Ų��ٌá����䬏��';$strNoValidateSQL = '�𴎪ھ���Ĵ SQL';$strNone = '��َ����';$strNotNumber = '�����پ�������Ѿ�����!';$strNotOK = '������������';$strNotSet = '<b>%s</b> �ҽ�������Ų��ٌá������������ %s ��Ќ��';$strNotValidNumber = '��پ����ž�Í��������!';$strNull = 'Null'; //should expressed in English$strNumSearchResultsInTable = '%s �ʷ�ҽ�����ό�� - ����ҽ������ <i>%s</i>';$strNumSearchResultsTotal = '<b>������:</b> <i>%s</i> �ʷ�ҽ�����ό��';$strNumTables = '��яҽ������';$strOK = '������';$strOftenQuotation = '�������䬍����������ĕ�ԋ�Ԏ�������Ë�ُ���ۼ������ char ��� varchar �³��پ����ǌԷ���ኲ�';$strOperations = '����ƺ';$strOptimizeTable = '�����Ҍ���ҽ������';$strOptionalControls = '�������Ϫ����ʷ��ԍ䬊�������Ǎ�վ�Ɍ�����';$strOptionally = '���������';$strOr = '���';$strOverhead = '������';$strOverwriteExisting = '�Ϻ��ǌ�ӌ����������';$strPHP40203 = '����У����� PHP ��þ�� 4.2.3, �����þ�¾�Ŋ����ю����������������������َ�����(mbstring). ��ь����� PHP ��Џ�ӌʱ��ɍᬏ�� 19404. phpMyAdmin ��ϊ�ٌȼ�С����䬎����э�þ��� PHP .';$strPHPVersion = 'PHP ��þ��';$strPageNumber = '�ʪ���:';$strPaperSize = '�������ۤ���';$strPartialText = '����ۼ����ȸ������';$strPassword = '������';$strPasswordChanged = '%s �����������Ӿ�ƌ�ľ�����.';$strPasswordEmpty = '��я�����������!';$strPasswordNotSame = '���Ծ�������������������ٌ��!';$strPdfDbSchema = '"%s" �ҽ�����Ǿϭ�Ϫ - ��� %s �ʪ';$strPdfInvalidTblName = '�ҽ������ "%s" ��ٌ�����!';$strPdfNoTables = '����ŏҽ������';$strPerHour = '���������';$strPerMinute = '����ú���';$strPerSecond = '������';$strPhoneBook = '��ȏ�����';$strPhp = '�ȼ��� PHP ��ь�����';$strPmaDocumentation = 'phpMyAdmin �����ھ���Ȧ';$strPmaUriError = ' �����Ï�Ќ�� <tt>$cfg[\'PmaAbsoluteUri\']</tt> �����Ќ����䌷�!';$strPortrait = '������';$strPos1 = '�����ʪ';$strPrevious = '��ي���ʪ';$strPrimary = '��Ȏٵ';$strPrimaryKeyHasBeenDropped = '��Ȏٵ��ӏ�ǌû���';$strPrimaryKeyName = '��Ȏٵ�����ٍ�������Í����� PRIMARY!';$strPrimaryKeyWarning = '("PRIMARY" <b>������</b>�����Ȏٵ�����ٍ���ȴ��ɾ��<b>������</b>��������Ȏٵ!)';$strPrint = '����١';$strPrintView = '����١������';$strPrintViewFull = '����١������ (����ۼ��Ծ������)';$strPrivDescAllPrivileges = '�Է��¾ť��ž�Ɏ�Ǝ�ۊ����þ�� (GRNANT).';$strPrivDescAlter = '��Տ�������Ս����ŏҽ�����������ƾ��.';$strPrivDescCreateDb = '��Տ���ȼ��Ѿ���ҽ�����ǌ�ɏҽ������.';$strPrivDescCreateTbl = '��Տ���ȼ��Ѿ���ҽ������.';$strPrivDescCreateTmpTable = '��Տ���ȼ��Ѿ�Ǿ������ҽ������.';$strPrivDescDelete = '��Տ���û��ۏ���Գ.';$strPrivDescDropDb = '��Տ���û��ۏҽ�����ǌ�ɏҽ������.';$strPrivDescDropTbl = '��Տ���û��ۏҽ������.';$strPrivDescExecute = '��Տ�� ����Ԏ�ƌ�Ì�ӌ����э�ь��. ������ MySQL ��þ������.';$strPrivDescFile = '��Տ����������ɏ������������á�����.';$strPrivDescGrant = '��Տ������������䬏����ɾ�Ɏ�Ə�ԍ�������پ����������Ɏ�Əҽ������.';$strPrivDescIndex = '��Տ���ȼ��ь�Ɍû��ۍ�����.';$strPrivDescInsert = '��Տ����������Ɍ���ȣ������.';$strPrivDescLockTables = '��Տ�������ɍ�������������яҽ������.';$strPrivDescMaxConnections = '��ƌæ�������������䬏����ь�ľ�����������������.';$strPrivDescMaxQuestions = '��ƌæ�������������䬏���Ĵ������������.';$strPrivDescMaxUpdates = '��ƌæ�������������䬏�������Տҽ��������ɾ����������ѾԽ��ۍ��������.';$strPrivDescProcess3 = '��Տ����оТ����������䬏����э�ь��.';$strPrivDescProcess4 = '��Տ����������ȍ������Ծ�������Ծ��ѾĴ���.';$strPrivDescReferences = '������ MySQL ��þ������.';$strPrivDescReload = '��Տ����پ�������������ٌ����Ќ����Ɍ���Ծ����������ٌ����ǌ��������.';$strPrivDescReplClient = '��Տ���䬾æ�Ĵ��� slaves / masters ���������.';$strPrivDescReplSlave = '����Ϫ�۽������ slaves.';$strPrivDescSelect = '��Տ��������������.';$strPrivDescShowDb = '����������𫌥яҽ�����Ǿ�����.';$strPrivDescShutdown = '��Տ������Т�����ٌ��.';$strPrivDescSuper = '��Տ��������, �����������ڊ������ۤ��������ƌæ; �䬾����������ȍ������ƺ�ϭ��Ќ�������Ɏ�ƾ����оТ����������䬏���Խ���.';$strPrivDescUpdate = '��Տ��������������.';$strPrivDescUsage = '����ž�Ɏ��.';$strPrivileges = '��Ɏ��';$strPrivilegesReloaded = '��Ɏ�ƌ�Ӿ�ƌ�Ď�پ��������.';$strProcesslist = '��ȍ������Ծ�����';$strProperties = '��¾��';$strPutColNames = '����³��ٌ�ٍ���䲌��������';$strQBE = '��������ѾĴ��� (QBE)';$strQBEDel = '��Ȏ��';$strQBEIns = '������';$strQueryFrame = '�Ĵ���������';$strQueryOnDb = '����ҽ������ <b>%s</b> ����� SQL ������:';$strQuerySQLHistory = 'SQL ��፬�';$strQueryStatistics = '<b>�Ĵ���������</b>: �𦍵���Ì�Č�����, ������ %s ��ѾĴ�����Ҏ���á��ۊ����ٌ��.';$strQueryTime = '�Ĵ��������� %01.4f ���';$strQueryType = '�Ĵ�����Ռ��';$strQueryWindowLock = '��ُϪ�������������Ϻ��ьá�������������SQL������';$strReType = '�����ٌ�����';$strReceived = '�ڴ��';$strRecords = '����Գ';$strReferentialIntegrity = '����Ĵ�Խ�ۼ��Ծ𫾥�:';$strRelationNotWorking = '�������ҽ��������������ʌ�ď����������Č��, %s��Ѿ�ž��%s �Ĵ������Ԍ�Č��.';$strRelationView = '������������';$strRelationalSchema = '�������ϭ�Ϫ';$strRelations = '������';$strReloadFailed = '��پ����Ō��MySQL�۱���';$strReloadMySQL = '��پ����Ō�� MySQL';$strReloadingThePrivileges = '��پ����������Ɏ��';$strRemoveSelectedUsers = '��Ȏ�ی�ӎ���㽊���䬏��';$strRenameTable = '����ҽ��������Ռ�ٍ��';$strRenameTableOK = '��Ӎ�㌡��ҽ������ %s ��Ռ�پ�� %s';$strRepairTable = '�������ҽ������';$strReplace = '����ȣ';$strReplaceNULLBy = '��� NULL ����ȣ���';$strReplaceTable = '�ȴ����Ì���ȣ�ҽ�������ҽ���';$strReset = '��ٍ��';$strResourceLimits = '�ҽ��Ǝ�ƌæ';$strRevoke = '��Ȏ��';$strRevokeAndDelete = '�Ȣ��ۊ���䬏���ť��ž�ž�Ê�Ѿ�Ɏ�Ɗ�όû���.';$strRevokeAndDeleteDescr = '����䬏����ٍ����� USAGE ��Ɏ�ƍ����Ҿ�Ɏ�Əҽ������������������.';$strRevokeMessage = '�����Ӎ�Ȏ�ێ����ي���䬏�������Ɏ��: %s';$strRowLength = '�ҽ��������ጼ�';$strRowSize = '�ҽ�������ۤ���';$strRows = '�ҽ������������';$strRowsFrom = '�к����Գ��Ԏ�ь�ь�����:';$strRowsModeFlippedHorizontal = '������ (��я�ž�����)';$strRowsModeHorizontal = '������';$strRowsModeOptions = '����ۼ��� %s ��Ռ�� ��� ������ %s ��Ԏ���ۼ�³���';$strRowsModeVertical = '������';$strRowsStatistic = '�ҽ�����������þ�����';$strRunQuery = '����ԏ�����';$strRunSQLQuery = '����ҽ������ %s ����Ԋȴ��ѾԽ���';$strRunning = '��� %s �����';$strRussian = '������';$strSQL = 'SQL'; // should express in english$strSQLExportType = '��������Ռ��';$strSQLOptions = 'SQL ����ʷ';$strSQLParserBugMessage = '����������������Ų�á��� SQL �ú��ƍ�ь�������������ь�������ە�ԏ�э������Ĵ��Ѿ�����������Ծ���Ĵ�����ь����ľ���У�����ɾ���Ŏ�������Ԍ����������������������Č�ʌ����������������ɏ�ž���þ����������Č����������Պ���䬊����Ԏ�ӌæ�������������ȴ�����ό�� MySQL �θ��ی����ю������ԏ�ӏ���������ϭ MySQL �����ٌ�������������ۊ�������Ԏ����������ǌɩ�����ȾŲ������Ծť�������ϭ�����ٍ�����������������ԕ�Ծ������ú��ƍ�ь�������������ە�Ԋ������θ��ی������������У�������ԕ�ԏ�ь����ӌ�������������ۍ�� SQL ������ɸ�����Ԋ�ό���ȴ��э��"�Ż���"����ȸ�����Ծ�Ɗ�یá��Џ�ǌ٥:';$strSQLParserUserError = '��������������� SQL �����������������ە�Ԍϭ MySQL �����ٌ�������������ۊ�������Ԏ����������ǌɩ�����ȾŲ������Ծť������';$strSQLQuery = 'SQL ������';$strSQLResult = 'SQL �Ĵ�����ƾ��';$strSQPBugInvalidIdentifer = '�����Í������ô��� (Invalid Identifer)';$strSQPBugUnclosedQuote = '�����ԍ�ƍ�������� (Unclosed quote)';$strSQPBugUnknownPunctuation = '��ٍĴ��ڍ����������Ϗ�� (Unknown Punctuation String)';$strSave = '��ӌ��';$strSaveOnServer = '��ӌ���á�����ٌ����� %s ����Գ';$strScaleFactorSmall = '��䊲ь�پ���ۻ���, ����������������䲌������ʪ���';$strSearch = '������';$strSearchFormTitle = '�������ҽ������';$strSearchInTables = '����ȴ��яҽ������:';$strSearchNeedle = '��ѾŲ��Ѿ�������������� (��䬌�����: "%"):';$strSearchOption1 = '��Ȋ��������������';$strSearchOption2 = '�ť��ž�����';$strSearchOption3 = '��Ծ𫏩����';$strSearchOption4 = '�ȴ�϶�Ž����ۼ��� (regular expression) ������';$strSearchResultsFor = '������ "<i>%s</i>" �����ƾ�� %s:';$strSearchType = '��ѾŲ:';$strSecretRequired = '��Ќ������Í���������Ϫ������ (passphrase) (blowfish_secret).';$strSelectADb = '��ю���㽏ҽ������';$strSelectAll = '������';$strSelectFields = '����㽾³��� (��Ҍ�Ί�����)';$strSelectNumRows = '�Ĵ������';$strSelectTables = '����㽏ҽ������';$strSend = '��я�Ō�ӌ��';$strSent = '������';$strServer = '�����ٌ��';$strServerChoice = '����㽊����ٌ��';$strServerStatus = '��я�ԏҽ���';$strServerStatusUptime = '��� MySQL �����ٌ����ӌ�Č����� %s. �����ٌ����� %s ��Č��.';$strServerTabProcesslist = '����ƺ';$strServerTabVariables = '�ҽ���';$strServerTrafficNotes = '<b>�����ٌ��������</b>: �������������ۼ������ MySQL �����ٌ�������Č���ȴ��������Ӎ�������������Ë��';$strServerVars = '�����ٌ���ҽ��Ɍ�ɏ�Ќ��';$strServerVersion = '�����ٌ����þ��';$strSessionValue = '��ь��������';$strSetEnumVal = '�ϭ�³��پʹ������ "enum" ��� "set", ��ъ���䬊ȴ��э���ʹ���������: \'a\',\'b\',\'c\'...<br />�ϭ�����������Ɏ���Ϫ��������پ����� (\) ������������ (\') , ��ь�ٌ�ʊ�Ɍ�پ����� (��ьϭ \'\\\\xyz\' or \'a\\\'b\').';$strShow = '����ۼ';$strShowAll = '����ۼ������';$strShowColor = '����ۼ������';$strShowDatadictAs = '�������������ʹ���';$strShowFullQueries = '����ۼ��Ծ�Ĵ���';$strShowGrid = '����ۼ����ʹ';$strShowPHPInfo = '����ۼ PHP �ҽ���';$strShowTableDimension = '����ۼ����ʹ�ۤ���';$strShowTables = '����ۼ�ҽ������';$strShowThisQuery = '��پ������ۼ SQL ������ ';$strShowingRecords = '����ۼ����Գ';$strSimplifiedChinese = '�������о��';$strSingly = '(��������⌼��������������Գ)';$strSize = '�ۤ���';$strSort = '��⌼�';$strSortByKey = '����ٵ��پ�⌼�';$strSpaceUsage = '��ӊ���䬍�����';$strSplitWordsWithSpace = '�������������ȴ����ʹ (" ") �ú���.';$strStatCheckTime = '�����Ծ���Ĵ';$strStatCreateTime = '�ȼ���';$strStatUpdateTime = '�����Ծ�����';$strStatement = '������';$strStatus = '�ѥ���';$strStrucCSV = 'CSV �ҽ���';$strStrucData = '��ƾ�яý�ҽ���';$strStrucDrop = '��ʌ�� \'�û��ۏҽ������\' ������';$strStrucExcelCSV = 'MS Excel ��� CSV �ʹ���';$strStrucOnly = '�����ō�ƾ��';$strStructPropose = '�ú��Əҽ��������ƾ��';$strStructure = '��ƾ��';$strSubmit = '������';$strSuccess = '������SQL��������ӎʺ�é�����';$strSum = '������';$strSwedish = '���������';$strSwitchToTable = '��Ҍá��ӏ۽�����яҽ������';$strTable = '�ҽ������';$strTableComments = '�ҽ��������ȏ��������';$strTableEmpty = '��я������ҽ��������ٍ��!';$strTableHasBeenDropped = '�ҽ������ %s ��ӏ�ǌû���';$strTableHasBeenEmptied = '�ҽ������ %s ��ӏ�Ǿ�����';$strTableHasBeenFlushed = '�ҽ������ %s ��ӏ�ǌ���Ǿ�����';$strTableMaintenance = '�ҽ��������Џ��';$strTableOfContents = '����Գ';$strTableOptions = '�ҽ����������ʷ';$strTableStructure = '�ҽ�������ʹ������';$strTableType = '�ҽ������������';$strTables = '%s �ҽ������';$strTblPrivileges = '�Խ����ҽ��������Ɏ��';$strTextAreaLength = ' �䱾����ጼώ�ƌæ<br /> ��۾³��ي�ُ���ᬏ�� ';$strThai = '�ҡ���';$strTheContent = '����Ì����Ռ�Ӎ��������ҽ������';$strTheContents = '����Ì����Ռ���������ȣ����������ҽ��������Ќ���ō����Ԋ�Ȏٵ����������ٵ�������Գ';$strTheTerminator = '�ú���³��ٍ��������';$strThisHost = '�Խ�����Ⱦ��';$strThisNotDirectory = '�����ϊ�پ�������э���Գ';$strThreadSuccessfullyKilled = '�Խ��� %s ��Ӿ�ƌ�Ċ�оТ.';$strTime = '������';$strToggleScratchboard = '��ž��������';$strTotal = '������';$strTotalUC = '������';$strTraditionalChinese = '�ժ����о��';$strTraffic = '������';$strTransformation_image_jpeg__inline = '����ۼ�����Ō��������; ����ʷ; ����,������[�ȴ�����ʍ��������] (��������ľ�ž�䊲�)';$strTransformation_image_jpeg__link = '����ۼ��������������� (����ڴ��я��).';$strTransformation_image_png__inline = '������ image/jpeg: ����ȼ';$strTransformation_text_plain__dateformat = '����� TIME, TIMESTAMP ��� DATETIME ��ϊȴ��������٥���������ۼ. ������ю���ʷ�������У (�ȴ���������������) �����������ۼ��Ѿ����� (��Ə��: 0). ���Ԍ�ю���ʷ��������ľʹ��� [��ľ�� PHPs strftime() ���������].';$strTransformation_text_plain__external = '�����ƾ�� LINUX : ����Ԍ�������ь����Ɍ�������Պȴ������������������������. ��������ь����Ѿ�����������. ��Ə�о���𫎸ɍ��, ��Պ������ۼ HTML ���. �䱾�������ōƺ��, �������Ϫ�����ԍᬏ�� libraries/transformations/text_plain__external.inc.php ��Ɍ�ʌ������Ϫ����䬌ᴌ�ኸ���������. ������ю���ʷ�����Ō����Ό�э�ь������Ϫ�����, ���Ԍ�ю���ʷ�����������ь�����������, ���Ō�ю���ʷ, �ϭ��Ќ����� 1 ����������� htmlspecialchars() ��ž�������� (��Ə��: 1). ������ю���ʷ, �ϭ��Ќ����� 1 ��������ʌ�� NOWRAP ��������Ս������ʹ���, ��ۏ�������Ѿť��Ō����Վ����پ����پ����⊸� (��Ə��: 1)';$strTransformation_text_plain__formatted = '��������ľ�����Պ�Ѿʹ���. ��َ�ӏ�Ԋ�Ȋ�� Escaping ����ƺ.';$strTransformation_text_plain__imagelink = '����ۼ��������Ɏ�����, �����������վ������Ì�ٍ��; ������ю���ʷ�����ӌ����پ�� (��� "http://domain.com/" ), ���Ԍ�ю���ʷ������ύ��������,���Ō�ю���ʷ��������ύ��������.';$strTransformation_text_plain__link = '����ۼ������, �����������վ������Ì�ٍ��; ������ю���ʷ�����ӌ����پ�� (��� "http://domain.com/" ), ���Ԏ���ʷ��������ƍ��������.';$strTransformation_text_plain__substr = '�������ۼ����ȸ���������. ������ю���ʷ��������ӎ�ь�я����������ٍ�� (offset)  (��Ə��: 0). ���Ԍ�ю���ʷ��������Ό�ь����ӏ�����. ��������������������Ѿť��Ō�����. ���Ō�ю���ʷ����𦎰��ȸ�����ӌ�������Ԏ���ۼ�ȥ��������Ӿ����ƌ�� (��Ə��: ...) .';$strTransformation_text_plain__unformatted = '�ȴ HTML �������ۼ HTML ��ώ��. ��پ������ۼ��Ȋ�� HTML �ʹ���.';$strTruncateQueries = '�û��ی�ӎ���ۼ�Ĵ���';$strTurkish = '��ď�Ҍ�����';$strType = '��Ѿ��';$strUkrainian = '�����я�о��';$strUncheckAll = '������������';$strUnicode = '��������� (Unicode)';$strUnique = '������';$strUnknown = '��ُ��';$strUnselectAll = '������������';$strUpdComTab = '��ь����я����ھ���Ȧ�Ĵ����ϭ�������� Column_comments �ҽ������';$strUpdatePrivMessage = '�����Ӎ���������� %s �����Ɏ��.';$strUpdateProfileMessage = '�ҽ����ᱍ�������.';$strUpdateQuery = '������������';$strUpgrade = '�����ŏ�Ӿ������á %s %s �����ь��.';$strUsage = '�����';$strUseBackquotes = '����ҽ��������ɾ³��ي���䬌�����';$strUseHostTable = '����䬊�Ⱦ�ďҽ������';$strUseTables = '����䬏ҽ������';$strUseTextField = '������������';$strUseThisValue = '����䬾�ی��';$strUser = '����䬏��';$strUserAlreadyExists = '����䬏�� %s �᱌�����!';$strUserEmpty = '��я���������䬏����ٍ��!';$strUserName = '����䬏����ٍ��';$strUserNotFound = '����㽍������䬏�������Ɏ�Əҽ����������Ų��ٌá.';$strUserOverview = '����䬏������ϸ';$strUsersDeleted = '����㽍������䬏����Ӿ�ƌ�Čû���.';$strUsersHavingAccessToDb = '��������� &quot;%s&quot; ��ъ���䬏��';$strValidateSQL = '����Ĵ SQL';$strValidatorError = 'SQL �ú��ƍ�ь����������Č��ԏ�Ѿ���Ĵ�����ό�ӌ�� %s����Ȧ%s ������ PHP ����Ì�ŏ�����';$strValue = '���';$strVar = '�ҽ���';$strViewDump = '�������ҽ�������������ȸ�ϭ�Ϫ (dump schema)';$strViewDumpDB = '�������ҽ�����Ǎ������ȸ�ϭ�Ϫ (dump schema)';$strViewDumpDatabases = '����ۼ�ҽ�����Ǿϭ�Ϫ (schema)';$strWebServerUploadDirectory = 'Web �����ٌ����ɏ�ō���Գ';$strWebServerUploadDirectoryError = '��Ќ����ъ�ɏ�ō���Գ�����ە�Ծ����������';$strWelcome = '�����ڊ���� %s';$strWestEuropean = '�����Ə�����';$strWildcard = '��䬌�����';$strWindowNotFound = '��������������������������. ��������ʌ�ӎ����ž�ۏ����������ʍ������ϸ��������Ō����Ќ�������Č������������ᬏ�����������';$strWithChecked = '����㽍���ҽ���������';$strWritingCommentNotPossible = '��������ӌ����ȏ��������';$strWritingRelationNotPossible = '��������ӌ��������';$strWrongUser = '�����ۍ������䬏����ٍ�������������Ծ�⍵�������';$strXML = 'XML'; //USE ENG$strYes = ' ��� ';$strZeroRemovesTheLimit = '���: ��Ќ������������ʷ��� 0 (���) ��������ێ�ƌæ.';$strZip = '"zipped"';$strGeorgian = 'Georgian';  //to translate$strCzechSlovak = 'Czech-Slovak';  //to translate$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate$strMaximumSize = 'Maximum size: %s%s';  //to translate$strConnectionError = 'Cannot connect: invalid settings.';  //to translate$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate$strIgnoreInserts = 'Use ignore inserts';  //to translate$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate$strAfterInsertSame = 'Go back to this page';  //to translate$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate$strDatabaseEmpty = 'The database name is empty!';  //to translate$strDBRename = 'Rename database to';  //to translate$strOperator = 'Operator';  //to translate$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate$strCalendar = 'Calendar';  //to translate$strRefresh = 'Refresh';  //to translate$strDefragment = 'Defragment table';  //to translate$strNoRowsSelected = 'No rows selected';  //to translate$strSpanish = 'Spanish';  //to translate$strStrucNativeExcel = 'Native MS Excel data';  //to translate$strDisableForeignChecks = 'Disable foreign key checks';  //to translate$strServerNotResponding = 'The server is not responding';  //to translate$strTheme = 'Theme / Style';  //to translate$strTakeIt = 'take it';  //to translate$strHexForBinary = 'Use hexadecimal for binary fields';  //to translate$strIcelandic = 'Icelandic';  //to translate$strLatvian = 'Latvian';  //to translate$strPolish = 'Polish';  //to translate$strRomanian = 'Romanian';  //to translate$strSlovenian = 'Slovenian';  //to translate$strTraditionalSpanish = 'Traditional Spanish';  //to translate$strSlovak = 'Slovak';  //to translate$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate$strPersian = 'Persian';  //to translate?>