<?php

namespace App;

class CsvIterator implements \Iterator
{
    const ROW_SIZE = 4096;

    /**
     * The pointer to the CSV file.
     *
     * @var resource
     */
    protected $filePointer = null;

    /**
     * The row counter.
     *
     * @var int
     */
    protected $rowCounter = null;

    /**
     * The delimiter for the CSV file.
     *
     * @var string
     */
    protected $delimiter = null;

    /**
     * The constructor tries to open the CSV file. It throws an exception on
     * failure.
     *
     * @param string $file The CSV file.
     * @param string $delimiter The delimiter.
     *
     * @throws \Exception
     */
    public function __construct($file, $delimiter = ',')
    {
        try {
            $this->filePointer = fopen($file, 'rb');
            $this->delimiter = $delimiter;
        } catch (\Exception $e) {
            throw new \Exception('The file "' . $file . '" cannot be read.');
        }
    }

    /**
     * This method resets the file pointer.
     */
    public function rewind(): void
    {
        $this->rowCounter = 0;
        rewind($this->filePointer);
    }

    /**
     * This method returns the current CSV row as a 2-dimensional array.
     *
     * @return array The current CSV row as a 2-dimensional array.
     */
    public function current(): array
    {
        return fgetcsv($this->filePointer, self::ROW_SIZE, $this->delimiter);
    }

    /**
     * This method returns the current row number.
     *
     * @return int The current row number.
     */
    public function key(): int
    {
        return $this->rowCounter;
    }

    /**
     * This method checks if the end of file has been reached.
     *
     * @return bool Returns true on EOF reached, false otherwise.
     */
    public function next() : void
    {
        $this->rowCounter++;
    }

    /**
     * This method checks if the next row is a valid row.
     *
     * @return bool If the next row is a valid row.
     */
    public function valid(): bool
    {
        return !feof($this->filePointer);
    }
}
