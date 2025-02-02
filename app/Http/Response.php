<?php

namespace App\Http;

class Response
{
    private $httpCode = 200;

    private $headers = [];

    private $contentType = 'text/html';

    private $content;

    public function __construct($httpCode, $content, $contentType = 'text/html') {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->contentType = $contentType;
        $this->setContentType($contentType);
    }

    public function setContentType($contentType) {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    public function addHeader($key, $value) {
        $this->headers[$key] = $value;
    }
}