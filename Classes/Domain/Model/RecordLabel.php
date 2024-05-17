<?php
namespace Milly\CrudUI\Showcase\Domain\Model;

/*
 * This file is part of the Milly.CrudUI.Showcase package.
 */

use Milly\CrudUI\Domain\Model\LabelledModelTrait;
use Neos\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class RecordLabel
{
    use LabelledModelTrait;

    /**
     * @var string
     */
    public string $name = '';

}
