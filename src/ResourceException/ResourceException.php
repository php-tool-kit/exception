<?php

/**
 * Prooph was here at `%package%` in `%year%`! Please create a .docheader in the project root and run `composer cs-fix`
 */

declare(strict_types=1);

/*
 * The MIT License
 *
 * Copyright 2021 Everton.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace PTK\Exception\ResourceException;

use RuntimeException;
use Throwable;

/**
 * Quanto um recurso apresenta falha.
 *
 * Recurso pode ser um arquivo, banco de dados, link ou outra forma de acesso a dados ou processamento.
 */
class ResourceException extends RuntimeException
{
    private string $resource = '';

    /**
     *
     * @param string $resource Caminho para o arquivo/diretório, string de conexão ao banco de dados, link,
     *  IP ou outra forma de representação textual do recurso.
     * @param string $message
     * @param int $code
     * @param Throwable $previous
     */
    public function __construct(string $resource, string $message = '', int $code = 0, Throwable $previous = null)
    {
        $this->resource = $resource;

        parent::__construct($message, $code, $previous);
    }

    /**
     * Retorna o recurso.
     *
     * @return string
     */
    public function getResource(): string
    {
        return $this->resource;
    }
}
