<?php

//
// Componente de negocio donde se implementan los procedimientos 
// (lógica de negocio) relacionados con el usuario.
//

require_once(__DIR__ . '/sqliteuserdao.php');

//
// Estructura que representa un tipo enumerado para los errores de login.
//
abstract class LoginValErrStatus {
   const ERR_USERNAME = 0;
   const ERR_PASSWORD = 1;
}

//
// Función que contiene la lógica del login del usuario.
//
function login(string $username, string $password, int &$valStatus): bool {
   $loginRes = false;
   // Obtener la entidad usuario llamando a la función del componente DAO.
   $user = getByUsername($username);
   if ($user) {
      if (password_verify($password, $user->password)) {
         $loginRes = true;
      } else {
         $valStatus = LoginValErrStatus::ERR_PASSWORD;
      }
   } else { 
      $valStatus  = LoginValErrStatus::ERR_USERNAME;
   }
   return $loginRes;
}
