<?php

namespace App;

/**
 * Represents a document with title, content, summary, author, and date.
 *
 * @package App
 */
class Document implements DocumentInterface
{
    /**
     * The title of the document.
     *
     * @var string
     */
    private $title;

    /**
     * The content of the document.
     *
     * @var string
     */
    private $content;

    /**
     * The summary of the document.
     *
     * @var string
     */
    private $summary;

    /**
     * The author of the document.
     *
     * @var string
     */
    private $author;

    /**
     * The date of the document.
     *
     * @var string
     */
    private $date;

    /**
     * Constructs a new Document object.
     *
     * @param string $title The title of the document.
     * @param string $content The content of the document.
     * @param string $summary The summary of the document.
     * @param string $author The author of the document.
     * @param string $date The date of the document.
     */
    public function __construct(
        string $title,
        string $content,
        string $summary,
        string $author,
        string $date
    ) {
        $this->title = $title;
        $this->content = $content;
        $this->summary = $summary;
        $this->author = $author;
        $this->date = $date;
    }

    /**
     * Gets the title of the document.
     *
     * @return string The title of the document.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Gets the content of the document.
     *
     * @return string The content of the document.
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Gets the summary of the document.
     *
     * @return string The summary of the document.
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * Sets the title of the document.
     *
     * @param string $title The title of the document.
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Sets the content of the document.
     *
     * @param string $content The content of the document.
     * @return void
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * Sets the summary of the document.
     *
     * @param string $summary The summary of the document.
     * @return void
     */
    public function setSummary(string $summary): void
    {
        $this->summary = $summary;
    }

    /**
     * Gets the author of the document.
     *
     * @return string The author of the document.
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Sets the author of the document.
     *
     * @param string $author The author of the document.
     * @return void
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * Gets the date of the document.
     *
     * @return string The date of the document.
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Sets the date of the document.
     *
     * @param string $date The date of the document.
     * @return void
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }
}
