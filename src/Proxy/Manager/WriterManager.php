<?php

namespace YukataRm\Csv\Proxy\Manager;

use YukataRm\Csv\Interface\WriterInterface;
use YukataRm\Csv\Writer;

/**
 * Writer Proxy Manager
 * 
 * @package YukataRm\Csv\Proxy\Manager
 */
class WriterManager
{
    /*----------------------------------------*
     * Make
     *----------------------------------------*/

    /**
     * make Writer instance
     *
     * @return \YukataRm\Csv\Interface\WriterInterface
     */
    public function make(): WriterInterface
    {
        return new Writer();
    }

    /**
     * make Writer instance from path
     * 
     * @param string $path
     * @return \YukataRm\Csv\Interface\WriterInterface
     */
    public function makeFrom(string $path): WriterInterface
    {
        return $this->make()->setPath($path);
    }

    /*----------------------------------------*
     * Write
     *----------------------------------------*/

    /**
     * write file
     * 
     * @param string $path
     * @param array<string> $headers
     * @param array<array<string>> $content
     * @param bool $useFileAppend
     * @param bool $useLockEx
     * @return bool
     */
    public function write(string $path, array $headers, array $content, bool $useFileAppend = false, bool $useLockEx = false): bool
    {
        $writer = $this->makeFrom($path)->setHeaders($headers)->setContent($content);

        if ($useFileAppend) $writer->useFileAppend();
        if ($useLockEx) $writer->useLockEx();

        return $writer->write();
    }
}
