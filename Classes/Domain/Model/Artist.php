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
class Artist
{

    /**
     * @ORM\OneToMany(mappedBy="artist")
     * @var Collection<Album>
     */
    public $albums;

    /**
     * @var string
     */
    public string $name = '';


}
