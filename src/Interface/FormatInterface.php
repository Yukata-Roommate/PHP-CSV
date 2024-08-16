<?php

namespace YukataRm\Csv\Interface;

/**
 * CSV Format Interface
 * 
 * @package YukataRm\Csv\Interface
 */
interface FormatInterface
{
    /**
     * get separator
     * 
     * @return string
     */
    public function separator(): string;

    /**
     * set separator
     * 
     * @param string $separator
     * @return static
     */
    public function setSeparator(string $separator): static;

    /**
     * get enclosure
     * 
     * @return string
     */
    public function enclosure(): string;

    /**
     * set enclosure
     * 
     * @param string $enclosure
     * @return static
     */
    public function setEnclosure(string $enclosure): static;

    /**
     * get escape
     * 
     * @return string
     */
    public function escape(): string;

    /**
     * set escape
     * 
     * @param string $escape
     * @return static
     */
    public function setEscape(string $escape): static;
}
