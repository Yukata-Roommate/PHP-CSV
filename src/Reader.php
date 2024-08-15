<?php

namespace YukataRm\Csv;

use YukataRm\Csv\Interface\ReaderInterface;
use YukataRm\File\Base\Reader as BaseReader;

use YukataRm\Csv\Trait\Format;

/**
 * Reader
 * 
 * @package YukataRm\Csv
 */
class Reader extends BaseReader implements ReaderInterface
{
    use Format;

    /*----------------------------------------*
     * Read Line
     *----------------------------------------*/

    /**
     * get file data
     * 
     * @param \SplFileObject $file
     * @return array<string>|false
     */
    protected function getFileData(\SplFileObject $file): array|false
    {
        return $file->fgetcsv(
            $this->separator(),
            $this->enclosure(),
            $this->escape()
        );
    }
}
