<?php

namespace App;

interface DocumentInterface{

    /**
     * Get the title of the document
     *
     * @return string
     */
    public function getTitle() : string;

    /**
     * Get the content of the document
     *
     * @return string
     */
    public function getContent() : string;

    /**
     * Get the summary of the document
     *
     * @return string
     */
    public function getSummary() : string;

    /**
     * Set the title of the document
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title) : void;
    
    /**
     * Set the content of the document
     *
     * @param string $content
     * @return void
     */
    public function setContent(string $content) : void;

    /**
     * Set the summary of the document
     *
     * @param string $summary
     * @return void
     */
    public function setSummary(string $summary) : void;

    /**
     * Get the author of the document
     * 
     * @return string $author
     */
    public function getAuthor() : string;

    /**
     * Set the author of the document
     *
     * @param string $author
     * @return void
     */
    public function setAuthor(string $author) : void;

    /**
     * Get the date of the document
     * 
     * @return string $date
     */
    public function getDate() : string;

    /**
     * Set the date of the document
     *
     * @param string $date
     * @return void
     */
    public function setDate(string $date) : void;
}
