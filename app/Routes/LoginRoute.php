<?php

namespace App\Routes;


/**
 * @OA\Post(
 *      path="/api/login",
 *      summary="Login de um usuário",
 *      description="Execute a autenticação do usuário usando o username e a senha fornecidos e emite um token de acesso como resultado.",
 *      operationId="login",
 *      tags={"Autenticação"},
 *      @OA\RequestBody(
 *          description="Dados do usuário",
 *          required=true,
 *          @OA\JsonContent(
 *              required={"username","password"},
 *              @OA\Property(property="username", type="string", example="exampleuser"),
 *              @OA\Property(property="password", type="string", format="password", example="password")
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="Autenticação bem-sucedida",
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(
 *                  property="user",
 *                  type="object",
 *                  @OA\Property(property="name", type="string", example="John Doe"),
 *                  @OA\Property(property="username", type="string", example="john_doe"),
 *                  @OA\Property(property="email", type="string", example="john@example.com")
 *              ),
 *              @OA\Property(property="token", type="string", example="13|7VOHQ7le0lY1dKjNmrBcC3fxcVG0Bc02Q9ZGRfGZ7e834a60")
 *          )
 *      ),
 *      @OA\Response(
 *          response=400,
 *          description="Dados inválidos"
 *      ),
 *      @OA\Response(
 *          response=401,
 *          description="Não autorizado - Credenciais inválidas ou expiradas"
 *      )
 *  )
 *
 * @OA\Post(
 *      path="/api/logout",
 *      summary="Encerra a sessão do usuário.",
 *      description="Revoga o token de acesso atual do usuário.",
 *      operationId="logout",
 *      tags={"Autenticação"},
 *      security={{"bearerAuth":{}}},
 *      @OA\Response(
 *          response=204,
 *          description="Desconectado com sucesso"
 *      ),
 *      @OA\Response(
 *          response=401,
 *          description="Não autorizado"
 *      )
 *  )
 *
 */
class LoginRoute
{

}
