<?php

declare(strict_types=1);

namespace CubaDevOps\Flexi\Modules\Auth\Tests\TestDoubles;

use Flexi\Contracts\Classes\HttpHandler;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class TestHttpHandler extends HttpHandler
{
    private ?ResponseInterface $response = null;

    public function __construct(ResponseFactoryInterface $responseFactory)
    {
        parent::__construct($responseFactory);
    }

    public function setMockResponse(ResponseInterface $response): void
    {
        $this->response = $response;
    }

    protected function process(ServerRequestInterface $request): ResponseInterface
    {
        return $this->response ?? $this->createResponse();
    }
}
