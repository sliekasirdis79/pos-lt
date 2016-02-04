//     pos-lt
//  /db/dbcon.php
//  ignas79
// Visos teisės saugomos!
// 2015
<?php
    $g_link = false;
    
    function sqlcon()
    {
        global $g_link;
        if( $g_link )
            return $g_link;
        $g_link = mysql_connect( 'host.name', 'user', 'password') or die('Klaida: sql_db, could not connect to server.' );
        mysql_select_db('database_name', $g_link) or die('Klaida: sql_db, db was not selected correctly, please check /db/dbcon.php.');
        return $g_link;
    }
    
    function CleanUpDB()
    {
        global $g_link;
        if( $g_link != false )
            mysql_close($g_link);
        $g_link = false;
    }
    
?>
//Šį kodą reiketu naudoti įtraukian sql į serverį
//<?php
//    $res = mysql_query("SELECT ...", sqlcon() );
//?> 
//
//
