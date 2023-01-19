<?php

//
// Componente de acceso a datos donde se implementan 
// la lógica de acceso a datos relacionada con el usuario,
// en una bd de tipo SQLite.
//

require_once(__DIR__ . '/globals.php');

//
// Función que contiene la lógica para la obtención
// de un usuario a partir del username.
//
function getByUsername(string $username): ?object {
   global $gConn;
   $user = null;
   // Query.
   $query = 'SELECT * FROM users WHERE username = :username';
   // SQLite3Stmt.
   $statement = $gConn->prepare($query);
   if ( $statement !== false ) {
      $statement->bindValue(':username', $username, SQLITE3_TEXT);
      // SQLite3Result.
      $result = $statement->execute();
      if ( $result !== false ) {
         if ( $row = $result->fetchArray(SQLITE3_ASSOC) ) {
            $user = (object) $row;
         }
      }
   }
   return $user;
}