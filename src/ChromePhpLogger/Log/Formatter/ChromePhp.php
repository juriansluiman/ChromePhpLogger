<?php

namespace ChromePhpLogger\Log\Formatter;

use Zend\Log\Formatter\AbstractFormatter;

class ChromePhp extends AbstractFormatter
{
    /**
     * Map the Zend\Log priorities to severities of ChromePhp
     *
     * @var array
     */
    protected $severities = array(
        0 => 'error',
        1 => 'error',
        2 => 'error',
        3 => 'error',
        4 => 'warn',
        5 => 'log',
        6 => 'log',
        7 => 'log',
    );

    public static function factory($options = array())
    {
        return new self;
    }

    public function format($event)
    {
        return array(
            'message'  => $event['message'],
            'severity' => $this->severities[$event['priority']],
        );
    }
}