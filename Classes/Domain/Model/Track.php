<?php
namespace Milly\CrudUI\Showcase\Domain\Model;

/*
 * This file is part of the Milly.CrudUI.Showcase package.
 */

use Milly\CrudUI\Showcase\Domain\Repository\TrackRepository;
use Milly\Sortable\Domain\Model\SortableModelTrait;
use Neos\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Persistence\QueryInterface;

/**
 * @Flow\Entity
 */
class Track
{
    use SortableModelTrait;

    /**
     * @ORM\ManyToOne(inversedBy="tracks")
     * @var Album|null
     */
    public ?Album $album = null;

    /**
     * @var string
     */
    public string $title = '';

    /**
     * @param QueryInterface $query
     * @return object
     */
    public function getSortingCondition(QueryInterface $query): object
    {
        return $query->equals('album', $this->album);
    }

}
