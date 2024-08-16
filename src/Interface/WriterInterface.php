<?php

namespace YukataRm\Csv\Interface;

use YukataRm\File\Base\Interface\WriterInterface as BaseWriterInterface;
use YukataRm\Csv\Interface\FormatInterface;

/**
 * Writer Interface
 * 
 * @package YukataRm\Csv\Interface
 */
interface WriterInterface extends BaseWriterInterface, FormatInterface
{
    /*----------------------------------------*
     * Content
     *----------------------------------------*/

    /**
     * get content to write
     * 
     * @return array<array<string>>
     */
    public function content(): array;

    /**
     * set content to write
     * 
     * @param array<array<string>> $content
     * @return static
     */
    public function setContent(array $content): static;

    /**
     * add content to write
     * 
     * @param array<string> $content
     * @return static
     */
    public function addContent(array $content): static;

    /*----------------------------------------*
     * Header
     *----------------------------------------*/

    /**
     * get headers
     * 
     * @return array<string>
     */
    public function headers(): array;

    /**
     * set headers
     * 
     * @param array<string> $content
     * @return static
     */
    public function setHeaders(array $content): static;
}
