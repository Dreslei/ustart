<?php 
    namespace App\http;

    class Request {
        private $httpMethod;

        private $uri;

        private $query_Params = [];

        private $post_vars = [];

        private $headers = [];

        public function __construct() {
            $this->queryParams = $_GET ?? [];
            $this->queryVars = $_POST ?? [];
            $this->headers = getallheaders();
            $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
            $this->uri = $_SERVER['REQUEST_URI'] ?? '';
        }

        public function getHttpMethod() {
            return $this->httpMethod;
        }

        public function getUri() {
            return $this->uri;
        }

        public function getQuery_Params() {
            return $this->query_Params;
        }

        public function getpostVars() {
            return $this->post_vars;
        }

        public function getHeaders() {
            return $this->headers;
        }
    }
?>