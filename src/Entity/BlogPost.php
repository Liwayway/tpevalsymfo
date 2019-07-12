<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlogPostRepository")
 */
class BlogPost
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Slug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Content;

    /**
     * @ORM\Column(type="integer")
     */
    private $Date;

   

    /**
     * @ORM\Column(type="boolean")
     */
    private $Featured;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="relation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CategoryOfBlogPost;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->Slug;
    }

    public function setSlug(?string $Slug): self
    {
        $this->Slug = $Slug;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }

    public function getDate(): ?int
    {
        return $this->Date;
    }

    public function setDate(int $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->Category;
    }

    public function setCategory(string $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getFeatured(): ?bool
    {
        return $this->Featured;
    }

    public function setFeatured(bool $Featured): self
    {
        $this->Featured = $Featured;

        return $this;
    }

    public function getCategoryOfBlogPost(): ?Category
    {
        return $this->CategoryOfBlogPost;
    }

    public function setCategoryOfBlogPost(?Category $CategoryOfBlogPost): self
    {
        $this->CategoryOfBlogPost = $CategoryOfBlogPost;

        return $this;
    }
}
