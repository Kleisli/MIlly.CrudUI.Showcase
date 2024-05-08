<?php
namespace Milly\CrudUI\Showcase\Domain\Repository;

/*
 * This file is part of the Milly.CrudUI.Showcase package.
 */

use Milly\Sortable\Domain\Repository\SortingRepositoryTrait;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Persistence\QueryInterface;
use Neos\Flow\Persistence\Repository;

/**
 * @Flow\Scope("singleton")
 */
class TrackRepository extends Repository
{
    use SortingRepositoryTrait;
    protected $defaultOrderings = ['sorting' => QueryInterface::ORDER_ASCENDING];
    // add customized methods here
}
