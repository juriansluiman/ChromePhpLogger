<?php

namespace ChromePhpLogger\Log\Writer;

use Zend\Log\Writer\AbstractWriter,
    ChromePhpLogger\Log\Formatter\ChromePhp as Formatter;

class ChromePhp extends AbstractWriter
{
    public function __construct ()
    {
        $this->_formatter = new Formatter();
    }

    public static function factory($options = array())
    {
        return new self;
    }

    protected function _write($event)
    {
        $event = $this->_formatter->format($event);

        switch ($event['severity']) {
            case 'error':
                \ChromePhp::error($event['message']);
                break;
            case 'warn':
                \ChromePhp::warn($event['message']);
                break;
            default:
                \ChromePhp::log($event['message']);
        }
    }
}
