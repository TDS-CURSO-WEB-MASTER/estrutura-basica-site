<?php
	
require_once __DIR__.'/connection.php';
require_once __DIR__.'/../functions/functions.php';

//Deleta registros
function DBDelete($table, $where = null){
    $where = ($where) ? " WHERE {$where}" : null;

    $query = "DELETE FROM {$table}{$where}";

    DBExecute($query);
}

//Altera registros
function DBUpdate($table, array $data, $where = null){
    $data 	= DBEscape($data);
    foreach ($data as $key => $value) {
        $fields[] = "{$key} = '{$value}'";
    }

    $fields = implode(', ', $fields);

    $where = ($where) ? " WHERE {$where}" : null;

    $query = "UPDATE {$table} SET {$fields}{$where}";

    return DBExecute($query);
}

//Lê registros no banco de dados
function DBSelect($table, $params = null, $fields = '*'){

    $params = $params ? " {$params}" : null;
    $query = "SELECT {$fields} FROM {$table}{$params}";
    
    $result = DBExecute($query);

    if(mysqli_num_rows($result)){
        while ($res = mysqli_fetch_assoc($result)) {
            $data[] = $res;
        }
        return $data;
    }

    return 'A consulta não retornou nenhum resultado.';
}
	
//Insere no banco de dados
function DBCreate($table, array $data){
    $data 	= DBEscape($data);
    $fields	= implode(', ', array_keys($data));
    $values = "'".implode("', '", $data)."'";

    $query = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} )";

    return DBExecute($query);
}

//Executa Queries
function DBExecute($query){
    
    $link 	= DBConnect();
    $result = @mysqli_query($link, $query) or die(mysqli_error($link));
    
    DBClose($link);
    return $result;
}