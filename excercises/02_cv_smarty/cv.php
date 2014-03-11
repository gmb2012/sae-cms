<?php
require_once('libs/Smarty.class.php');

// base data
$baseData = new stdClass();
$baseData->title        = 'Persönliche Angaben';
$baseData->content      = [];
$item                   = new stdClass();
$item->title            = "Geburtsdatum";
$item->data             = date("d.m.Y", mktime(0, 0, 0, 6, 14, 1979));
$baseData->content[]    = $item;
$item                   = new stdClass();
$item->title            = "Geburtsort";
$item->data             = "Langen / Hessen";
$baseData->content[]    = $item;
$item                   = new stdClass();
$item->title            = "Familienstand";
$item->data             = "unverheiratet";
$baseData->content[]    = $item;

// rest the data
$cv = [];

// professional experience
$item                   = new stdClass();
$item->title            = "Beruflicher Werdegang";
$item->content          = [];

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 1, 1, 2011));
$subitem->to            = null;
$subitem->title         = "HolidayCheck AG";
$subitem->description   = ["Team Manager & Senior Software-Developer", "Kerntechnologien: PHP, scala, Java, MongoDB, ElasticSearch, MySQL, Javascript, HTML / CSS"];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 2, 1, 2006));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 12, 31, 2010));
$subitem->title         = "dmc digital media center GmbH";
$subitem->description   = ["Software Engineer im Bereich Internet", "seit 10/2008 als Advanced Software Engineer (Levels: Junior, Intermediate, Advanced, Senior)", "Kerntechnologien: PHP, MySQL, Javascript, HTML / CSS"];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 12, 1, 2004));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 1, 31, 2006));
$subitem->title         = "Top21 GmbH";
$subitem->description   = ["Applikationsentwickler im Bereich Intra- und Internet", "Kerntechnologien: ColdFusion, Java, Oracle, Javascript, HTML / CSS"];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 9, 1, 2002));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 6, 30, 2004));
$subitem->title         = "Fischer-Cross-Media GmbH";
$subitem->description   = ["Applikationsentwickler im Bereich Internet und Neue Medien", "Kerntechnologien: PHP, ColdFusion, Java, MySQL, HTML / CSS"];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 1, 1, 1999));
$subitem->to            = null;
$subitem->title         = "Selbständige Tätigkeit";
$subitem->description   = ["PC-Service, Webprogrammierung, -design und Applikationsentwicklung", "Kerntechnologien: PHP, MySQL, Javascript, HTML / CSS, Windows"];
$item->content[]        = $subitem;

$cv[] = $item;

// teaching
$item                   = new stdClass();
$item->title            = "Dozententätigkeit";
$item->content          = [];

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 3, 1, 2011));
$subitem->to            = null;
$subitem->title         = "Hochschule Furtwangen University";
$subitem->description   = ["Vorlesung „Webdesign – PHP“ im Fachbereich Wirtschaftsinformatik"];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 7, 1, 2010));
$subitem->to            = null;
$subitem->title         = "SAE Institute";
$subitem->description   = ["Vorlesungen wie z.B. „Javascript“ und „Datensicherheit“ im Fachbereich Webdevelopment"];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 10, 1, 2009));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 12, 31, 2011));;
$subitem->title         = "Dualen Hochschule Baden-Württemberg";
$subitem->description   = ["Vorlesungen „Einführung in Internettechnologien“ und „Workshop Software-Engineering“ im Fachbereich Wirtschaftsinformatik"];
$item->content[]        = $subitem;

$cv[] = $item;

// university
$item                   = new stdClass();
$item->title            = "Studium";
$item->content          = [];

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 9, 1, 1999));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 8, 31, 2002));
$subitem->title         = "Berufsakademie Stuttgart";
$subitem->description   = ["Studium der Informationstechnik", "Abschluss als Dipl.-Ing. und Bachelor of Science", "Durchschnittsnote: 1,9", "Ausbildungsbetrieb: Fischer-Cross-Media GmbH"];
$item->content[]        = $subitem;

$cv[] = $item;

// school
$item                   = new stdClass();
$item->title            = "Schulische Ausbildung";
$item->content          = [];

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 9, 1, 1990));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 8, 31, 1999));
$subitem->title         = "Stiftsgymnasium Sindelfingen";
$subitem->description   = ["Abschluss mit der allgemeinen Hochschulreife", "Durchschnittsnote: 2,6"];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 9, 1, 1986));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 8, 31, 1990));
$subitem->title         = "Grundschule Königsknoll in Sindelfingen";
$subitem->description   = [];
$item->content[]        = $subitem;

$cv[] = $item;

// certificates
$item                   = new stdClass();
$item->title            = "Zertifizierungen / Seminare";
$item->content          = [];

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 1, 1, 2014));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 1, 1, 2014));
$subitem->title         = "MongoDB for DBAs";
$subitem->description   = [];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 8, 1, 2013));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 8, 1, 2013));
$subitem->title         = "Scaled Agile Framework Agilis";
$subitem->description   = [];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 7, 1, 2013));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 7, 1, 2013));
$subitem->title         = "MongoDB for Java Developers";
$subitem->description   = [];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 3, 1, 2012));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 3, 1, 2012));
$subitem->title         = "Fast track to scala & Advanced scala";
$subitem->description   = [];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 12, 1, 2011));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 12, 1, 2011));
$subitem->title         = "Professional Scrum Master I";
$subitem->description   = [];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 7, 1, 2009));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 7, 1, 2009));
$subitem->title         = "Zend Framework Zertifizierung";
$subitem->description   = [];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 1, 1, 2008));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 1, 1, 2008));
$subitem->title         = "Zend PHP Zertifizierung";
$subitem->description   = [];
$item->content[]        = $subitem;

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 10, 1, 2007));
$subitem->to            = date("m.Y", mktime(0, 0, 0, 10, 1, 2007));
$subitem->title         = "MySQL Developer Zertifzierung";
$subitem->description   = [];
$item->content[]        = $subitem;

$cv[] = $item;

// volunteering
$item                   = new stdClass();
$item->title            = "Ehrenamtliche Tätigkeiten";
$item->content          = [];

$subitem                = new stdClass();
$subitem->from          = date("m.Y", mktime(0, 0, 0, 1, 1, 1990));
$subitem->to            = null;
$subitem->title         = "Mitarbeit im Jugendrotkreuz und Deutsches Rotes Kreuz Sindelfingen";
$subitem->description   = ["u.a. als Leiter einer Jugendgruppe, stellv. Leiter des Jugendrotkreuzes", "Mitarbeit in der Öffentlichkeitsarbeit, bei sozialen Aktivitäten, im Katastrophenschutz", "Konzeption und Erstellung des Internetauftritts"];
$item->content[]        = $subitem;

$cv[] = $item;

$smarty = new Smarty();
$smarty->assign('baseData', $baseData);
$smarty->assign('cv', $cv);
$smarty->display('cv.tpl.html');
?>