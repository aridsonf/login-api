<?php

namespace App\Routes;


/**
 * @OA\Get(
 *      path="/api/user/profile",
 *      summary="Recupera os dados do usuário.",
 *      description="Fornece os dados do usuário autenticado.",
 *      operationId="getUser",
 *      tags={"User"},
 *      security={{"bearerAuth":{}}},
 *      @OA\Response(
 *          response=200,
 *          description="Dados do usuário obtidos com sucesso",
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="int", example="2John Doe"),
 *                  @OA\Property(property="name", type="string", example="John Doe"),
 *                  @OA\Property(property="username", type="string", example="John Doe"),
 *                  @OA\Property(property="email", type="string", example="john@example.com")
 *              )
 *          )
 *      ),
 *      @OA\Response(
 *          response=401,
 *          description="Não autorizado"
 *      )
 *  )
 *
 */
class UserRoute
{

}
