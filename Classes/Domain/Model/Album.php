<?php
namespace Milly\CrudUI\Showcase\Domain\Model;

/*
 * This file is part of the Milly.CrudUI.Showcase package.
 */

use Doctrine\Common\Collections\Collection;
use Neos\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Album
{

    /**
     * @ORM\ManyToOne(inversedBy="albums")
     * @var Artist|null
     */
    public ?Artist $artist = null;

    /**
     * @ORM\OneToMany(mappedBy="album")
     * @ORM\OrderBy({"sorting" = "ASC"})
     * @var Collection<Track>
     */
    public $tracks;

    /**
     * @var string
     */
    public string $title = '';

    /**
     * @var boolean
     */
    public bool $isAiGenerated = false;

    /**
     * @ORM\Column(nullable=TRUE)
     * @var \DateTime|null
     */
    public ?\DateTime $releaseDate;

}
