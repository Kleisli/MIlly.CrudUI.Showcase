<?php
namespace Milly\CrudUI\Showcase\Domain\Model;

/*
 * This file is part of the Milly.CrudUI.Showcase package.
 */

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Milly\CrudUI\Domain\Model\LabelledModelTrait;
use Neos\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Exception;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;

/**
 * @Flow\Entity
 */
class Artist
{
    use LabelledModelTrait;

    /**
     * @ORM\OneToMany(mappedBy="artist")
     * @var Collection<Album>
     */
    public Collection $albums;

    /**
     * @var string
     */
    public string $name = '';

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    public string $biography = '';

    /**
     * @ORM\ManyToMany
     * @var Collection<Style>
     */
    public Collection $styles;

    /**
     * @param $cause int The cause of the object initialization.
     * @see http://flowframework.readthedocs.org/en/stable/TheDefinitiveGuide/PartIII/ObjectManagement.html#lifecycle-methods
     */
    public function initializeObject($cause)
    {
        if ($cause === ObjectManagerInterface::INITIALIZATIONCAUSE_CREATED) {
            $this->albums = new ArrayCollection();
            $this->styles = new ArrayCollection();
        }
    }
}
