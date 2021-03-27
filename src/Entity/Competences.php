<?php

namespace App\Entity;

use App\Repository\CompetencesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;


/**
 * @ORM\Entity(repositoryClass=CompetencesRepository::class)
 * @Vich\Uploadable
 */
class Competences
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $niveauCompetence;

    /**
     * @ORM\ManyToMany(targetEntity=CompetencesCategories::class, inversedBy="competences")
     */
    private $competencesCategories;

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
     * @Vich\UploadableField(mapping="competences_image", fileNameProperty="filename")
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $updated_at;


    public function __construct()
    {
        $this->filename = "empty.jpg";
        $this->competencesCategories = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNiveauCompetence(): ?int
    {
        return $this->niveauCompetence;
    }

    public function setNiveauCompetence(int $niveauCompetence): self
    {
        $this->niveauCompetence = $niveauCompetence;

        return $this;
    }

    /**
     * @return Collection|CompetencesCategories[]
     */
    public function getCompetencesCategories(): Collection
    {
        return $this->competencesCategories;
    }

    public function addCompetencesCategory(CompetencesCategories $competencesCategory): self
    {
        if (!$this->competencesCategories->contains($competencesCategory)) {
            $this->competencesCategories[] = $competencesCategory;
        }

        return $this;
    }

    public function removeCompetencesCategory(CompetencesCategories $competencesCategory): self
    {
        $this->competencesCategories->removeElement($competencesCategory);

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
     * @return File|null
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param File|null $imageFile
     */
    public function setImageFile(?File $imageFile): void
    {
        $this->imageFile = $imageFile;
        if ($this->imageFile instanceof UploadedFile) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

}
