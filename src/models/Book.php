<?php

class Book
{
    private string $idUser;

    private int $idModule;

    private string $publisher;

    private float $price;

    private int $pages;

    private string $status;

    private string $photo;

    private string $comments;

    private string $soldDate;

    public function __construct(string $idUser, int $idModule, string $publisher, float $price, int $pages, string $status, string $photo, string $comments, string $soldDate = "")
    {
        $this->idUser = $idUser;
        $this->idModule = $idModule;
        $this->publisher = $publisher;
        $this->price = $price;
        $this->pages = $pages;
        $this->status = $status;
        $this->photo = $photo;
        $this->comments = $comments;
        $this->soldDate = $soldDate;
    }

    public function toJson(): string
    {
        $mapa = array();
        foreach ($this as $clave => $valor) {
            $mapa[$clave] = $valor;
        }
        return json_encode($mapa);
    }

    public function __toString(): string
    {
        return "<div class='book'>
        <h6>Id User: " . $this->getIdUser() . "</h6>
        <h6>ID Module: " . $this->getIdModule() . "</h6>
        <h6>Publisher: " . $this->getPublisher() . "</h6>
        <h6>Price: " . $this->getPrice() . "</h6>
        <h6>Pages: " . $this->getPages() . "</h6>
        <h6>Status: " . $this->getStatus() . "</h6>
        <h6>Photo: " . $this->getPhoto() . "</h6>
        <h6>Comments: " . $this->getComments() . "</h6>
        <h6>Sold Date: " . $this->getSoldDate() . "</h6>
        </div>";
    }


    public function getIdUser(): string
    {
        return $this->idUser;
    }

    public function setIdUser(string $idUser): void
    {
        $this->idUser = $idUser;
    }

    public function getIdModule(): int
    {
        return $this->idModule;
    }

    public function setIdModule(int $idModule): void
    {
        $this->idModule = $idModule;
    }

    public function getPublisher(): string
    {
        return $this->publisher;
    }

    public function setPublisher(string $publisher): void
    {
        $this->publisher = $publisher;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPages(): int
    {
        return $this->pages;
    }

    public function setPages(int $pages): void
    {
        $this->pages = $pages;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    public function getComments(): string
    {
        return $this->comments;
    }

    public function setComments(string $comments): void
    {
        $this->comments = $comments;
    }

    public function getSoldDate(): string
    {
        return $this->soldDate;
    }

    public function setSoldDate(string $soldDate): void
    {
        $this->soldDate = $soldDate;
    }

}