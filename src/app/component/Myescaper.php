<?php
// escaper for sanitizing the inputs
use Phalcon\Escaper;

class Myescaper
{
    public function sanitize($param)
    {
        return $this->escaper->escapeHtml($param);
    }
}
