<?php

/**
 * @author Jonathan T.A <jonyjony777@gmail.com>
 */

namespace Libs;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Monolog\Logger;

class SlimHandlerError extends \Slim\Handlers\Error {

    protected $log;

    public function __construct(Logger $log, $displayErrorDetails = false) {
        parent::__construct($displayErrorDetails);
        $this->log = $log;
    }

    public function __invoke(Request $request, Response $response, \Exception $exception) {
        $this->log->error($exception);

        return parent::__invoke($request, $response, $exception);
    }

}
