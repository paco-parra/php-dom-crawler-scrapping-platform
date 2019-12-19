<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ScrapersRepository")
 */
class Scrapers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $keyName;

    /**
     * @ORM\Column(type="date")
     */
    private $lastScrapDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $scrapedElements;

    /**
     * @ORM\Column(type="integer")
     */
    private $lastScrapeElements;

    public function __construct()
    {
        $this->lastScrapDate = new \DateTime();
        $this->lastScrapeElements = 0;
        $this->scrapedElements = 0;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKeyName(): ?string
    {
        return $this->keyName;
    }

    public function setKeyName(string $keyName): self
    {
        $this->keyName = $keyName;

        return $this;
    }

    public function getLastScrapDate(): ?\DateTimeInterface
    {
        return $this->lastScrapDate;
    }

    public function setLastScrapDate(\DateTimeInterface $lastScrapDate): self
    {
        $this->lastScrapDate = $lastScrapDate;

        return $this;
    }

    public function getScrapedElements(): ?int
    {
        return $this->scrapedElements;
    }

    public function setScrapedElements(int $scrapedElements): self
    {
        $this->scrapedElements = $scrapedElements;

        return $this;
    }

    public function getLastScrapeElements(): ?int
    {
        return $this->lastScrapeElements;
    }

    public function setLastScrapeElements(int $lastScrapeElements): self
    {
        $this->lastScrapeElements = $lastScrapeElements;

        return $this;
    }
}
