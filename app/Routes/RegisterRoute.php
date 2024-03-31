<?php

namespace App\Routes;

/**
 * @OA\Post(
 *      path="/api/register",
 *      summary="Registra um novo usuário na base de dados",
 *      description="Registra um novo usuário com as informações de nome, username, email e senha fornecidas, e gera um token de acesso como retorno.",
 *      operationId="createUser",
 *      tags={"Autenticação"},
 *      @OA\RequestBody(
 *          description="Dados do novo usuário",
 *          required=true,
 *          @OA\JsonContent(
 *              required={"name", "username", "email", "password", "password_confirmation"},
 *              @OA\Property(property="name", type="string", example="Teste User"),
 *              @OA\Property(property="username", type="string", example="testuser"),
 *              @OA\Property(property="email", type="string", format="email", example="testuser@example.com"),
 *              @OA\Property(property="password", type="string", format="password", example="password"),
 *              @OA\Property(property="password_confirmation", type="string", format="password", example="password")
 *          )
 *      ),
 *      @OA\Response(
 *          response=201,
 *          description="Usuário registrado com sucesso",
 *          @OA\JsonContent(
 *               type="object",
 *               @OA\Property(property="data", type="object",
 *                   @OA\Property(property="id", type="int", example="2John Doe"),
 *                   @OA\Property(property="name", type="string", example="John Doe"),
 *                   @OA\Property(property="username", type="string", example="John Doe"),
 *                   @OA\Property(property="email", type="string", example="john@example.com")
 *               )
 *           )
 *      ),
 *      @OA\Response(
 *          response=400,
 *          description="Dados inválidos"
 *      )
 *  )
 *
 */
class RegisterRoute
{

}
