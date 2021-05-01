<?php

namespace App\Entity;

use App\Repository\RealisationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
/**
 * @ORM\Entity(repositoryClass=RealisationRepository::class)
 * @Vich\Uploadable()
 */
class Realisation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;


    /**
     * @var string|null
     * @ORM\Column(type="string", length=255 )
     */
    private $filename;

    /**
     * @var File|null
     * @Assert\Image(
     *     mimeTypes={
     *      "image/jpeg",
     *     "image/png",
     *     "image,gif",
     *     "image/svg+xml"
     *     }
     * )
     * @Vich\UploadableField(mapping="realisation_image", fileNameProperty="filename")
     */
    private $images;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publishedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    public function __construct()
    {
        $this->filename = "empty.jpg";
        $this->publishedAt = new \DateTime();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImages(): ?File
    {
        return $this->images;
    }

    /**
     * @param File|null $images
     */
    public function setImages(?File $images): void
    {
        $this->images = $images;
        if ($this->images instanceof UploadedFile) {
            $this->updatedAt = new \DateTime('now');
        }
    }




    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string|null $filename
     */
    public function setFilename(?string $filename): void
    {
        $this->filename = $filename;
    }

    /**
     * @return \DateTime
     */
    public function getPublishedAt(): \DateTime
    {
        return $this->publishedAt;
    }

    public function getFormattedDate(){

        $date = $this->publishedAt;
        return $date->format("d-m-Y");
    }

    /**
     * @param \DateTime $publishedAt
     */
    public function setPublishedAt(\DateTime $publishedAt): void
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }


}
