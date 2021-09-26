<?php
/* [SUPER GET ] Function V 1.0
** This function used to get any data from any fild in any rols and ordering from DB
*/

function superGet($field, $table, $where = NULL, $oField = NULL, $oType = NULL, $limit = NULL){
    
    global $con;
    
    if ($where !== NULL){$WHERE = 'WHERE';}else{$WHERE = NULL ;}
    if ($oField !== NULL){$ObY = 'ORDER BY';}else{$ObY = NULL;}
    if ($limit !== NULL){$LIMIT = 'LIMIT';}else{$LIMIT = NULL;}
    
 
    
    $getAll = $con->prepare("SELECT $field FROM $table $WHERE $where  $ObY  $oField  $oType $LIMIT $limit ");
    
	$getAll->execute();
	$all = $getAll->fetchAll();
    
    return $all ;
    
}
?>