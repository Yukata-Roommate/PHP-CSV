<?php

namespace YukataRm\Csv\Proxy;

use YukataRm\Csv\Interface\ReaderInterface;
use YukataRm\Csv\Reader;
use YukataRm\Csv\Interface\WriterInterface;
use YukataRm\Csv\Writer;

/**
 * Proxy Manager
 * 
 * @package YukataRm\Csv\Proxy
 */
class Manager
{
    /**
     * make Reader instance
     *
     * @return \YukataRm\Csv\Interface\ReaderInterface
     */
    public function reader(): ReaderInterface
    {
        return new Reader();
    }

    /**
     * make Writer instance
     *
     * @return \YukataRm\Csv\Interface\OperatorInterface
     */
    public function writer(): WriterInterface
    {
        return new Writer();
    }
}
