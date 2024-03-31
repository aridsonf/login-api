<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API - Login",
 *      description="Documentação da API",
 *      @OA\Contact(
 *          email="filhoaridson@gmail.com"
 *      ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="https://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 *
 * @OA\Server(
 *        url="http://0.0.0.0:80",
 *        description="Ambiente de desenvolvimento do projeto localmente"
 *  ),
 *
 * @OA\PathItem(
 *       path="/app"
 *   ),
 *
 * @OA\OpenApi(
 *       x={
 *           "tagGroups"={
 *               {"name"="LOGIN", "tags"={"login"}},
 *           }
 *       },
 *   )
 */
abstract class Controller
{
    //
}
