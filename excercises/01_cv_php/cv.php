<?php
// base data
$baseData = new stdClass();
$baseData->title = 'Persönliche Angaben';
$baseData->content                      = new stdClass();
$baseData->content->dateOfBirth         = new stdClass();
$baseData->content->dateOfBirth->title  = "Geburtsdatum";
$baseData->content->dateOfBirth->data   = date("d.m.Y", mktime(0, 0, 0, 6, 14, 1979));
$baseData->content->placeOfBirth        = new stdClass();
$baseData->content->placeOfBirth->title = "Geburtsort";
$baseData->content->placeOfBirth->data  = "Langen / Hessen";
$baseData->content->familyStatus        = new stdClass();
$baseData->content->familyStatus->title = "Familienstand";
$baseData->content->familyStatus->data  = "unverheiratet";

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
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Björn Zapadlo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">

        <div class="page-header row">
            <div class="col-md-1 hidden-sm hidden-xs big-bullet"></div>
            <div class="col-md-6">
                <h1>Björn Zapadlo</h1>
            </div>
            <div class="col-md-2">
                Mainaustr. 90<br />
                78464 Konstanz<br />
                +49 172 / 71 88 284<br />
            </div>
            <div class="col-md-3">
                <a href="mailto:bjoern@zapadlo.de"><i class="fa fa-envelope"></i></a>
                <a href="../icon/twitter"><i class="fa fa-twitter"></i></a>
                <a href="../icon/twitter"><i class="fa fa-xing"></i></a>
                <a href="../icon/twitter"><i class="fa fa-linkedin"></i></a>
                <a href="../icon/twitter"><i class="fa fa-home"></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <nav class="navbar" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Lebenslauf</a></li>
                        <li><a href="#">Qualifikationen</a></li>
                        <li><a href="#">Referenzen</a></li>
                        <li><a href="#">Zeugnisse</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Basedata -->
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <h2><?php echo $baseData->title; ?></h2>

                <?php
                foreach($baseData->content as $currentProperty) {
                    ?>

                    <div class="row">
                        <div class="col-md-3 text-right"><?php echo $currentProperty->title; ?></div>
                        <div class="col-md-9"><?php echo $currentProperty->data; ?></div>
                    </div>

                    <?php
                }
                ?>


            </div>
        </div>

        <?php
        foreach($cv as $currentTopic) {
            ?>

            <div class="row">
                <div class="col-md-11 col-md-offset-1">
                    <h2><?php echo $currentTopic->title; ?></h2>

                    <?php
                    foreach($currentTopic->content as $currentProperty) {
                        ?>

                        <div class="row">
                            <div class="col-md-3 text-right">
                                <?php
                                if($currentProperty->to === null) {
                                    echo "seit " . $currentProperty->from;
                                } else if($currentProperty->to === $currentProperty->from) {
                                    echo $currentProperty->from;
                                } else {
                                    echo $currentProperty->from . " - " . $currentProperty->to;
                                }
                                ?>
                            </div>
                            <div class="col-md-9">
                                <h4><?php echo $currentProperty->title; ?></h4>
                                <p><?php echo join("<br />", $currentProperty->description); ?></p>
                            </div>
                        </div>

                    <?php
                    }
                    ?>


                </div>
            </div>

            <?php
        }
        ?>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>