<?php
    /* This is the only variable that needs to be changed from site to site*/
       $CamsSysFN = "C:\inetpub\wwwroot\cssServiceRequests\web.ini";
    /***********************************************************************/

    $SysIni = parse_ini_file($CamsSysFN,true);
    $countyName = $SysIni["Titles"]["Client1"].' '.$SysIni["Titles"]["Client2"];
    $countyNameShort = $SysIni["Titles"]["Client1"];
    $countyAbbrev = $SysIni["CAMS"]["ClientAbbr"];
    $FiscYear = $SysIni["CAMS"]["CurFY"];

    $db_host = $SysIni["Database"]["HOST"];
    $db_username = $SysIni["Database"]["USER_NAME"];
    $db_password = $SysIni["Database"]["PASSWORD"];
