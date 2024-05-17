<?php
namespace Milly\CrudUI\Showcase\Domain\Model;

/*
 * This file is part of the Milly.CrudUI.Showcase package.
 */

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Neos\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\ResourceManagement\PersistentResource;

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
    public Collection $tracks;

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
    public ?\DateTime $releaseDate = null;

    /**
     * @var ?PersistentResource
     * @ORM\OneToOne(cascade={"all"}, orphanRemoval=true)
     */
    public ?PersistentResource $coverImage = null;

    /**
     * @var ?RecordLabel
     * @ORM\ManyToOne
     */
    public ?RecordLabel $recordLabel = null;

    /**
     * @param $cause int The cause of the object initialization.
     * @see http://flowframework.readthedocs.org/en/stable/TheDefinitiveGuide/PartIII/ObjectManagement.html#lifecycle-methods
     */
    public function initializeObject($cause)
    {
        if ($cause === ObjectManagerInterface::INITIALIZATIONCAUSE_CREATED) {
            $this->tracks = new ArrayCollection();
        }
    }

}
