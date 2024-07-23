<?php

namespace App;

use Exception;

class DocumentProxy implements DocumentInterface
{
    private Document $document;
    private User $user;

    public function __construct(Document $document, User $user)
    {
        $this->document = $document;
        $this->user = $user;
    }

    public function getTitle(): string
    {   
        $this->checkAccess(User::LEVEL_ONE);

        return $this->document->getTitle();
    }

    public function getContent(): string
    {
        $this->checkAccess(User::LEVEL_THREE);

        return $this->document->getContent();
    }

    public function getSummary(): string
    {   
        $this->checkAccess(User::LEVEL_TWO);
        return $this->document->getSummary();
    }

    public function setTitle(string $title): void
    {
        $this->checkAccess(User::LEVEL_THREE);

        $this->document->setTitle($title);
    }

    public function setContent(string $content): void
    {
        $this->checkAccess(User::LEVEL_THREE);

        $this->document->setContent($content);
    }

    public function setSummary(string $summary): void
    {
        $this->checkAccess(User::LEVEL_THREE);

        $this->document->setSummary($summary);
    }

    public function getAuthor(): string
    {
        return $this->document->getAuthor();
    }

    public function setAuthor(string $author): void
    {
        $this->checkAccess(User::LEVEL_THREE);
        $this->document->setAuthor($author);
    }

    public function getDate(): string
    {
        return $this->document->getDate();
    }

    public function setDate(string $date): void
    {
        $this->checkAccess(User::LEVEL_THREE);
        $this->document->setDate($date);
    }
    
    private function checkAccess(int $minimumLevel): void
    {
        if ($this->user->getAccessLevel() < $minimumLevel) {
            throw new Exception('Access denied');
        }
    }


}
