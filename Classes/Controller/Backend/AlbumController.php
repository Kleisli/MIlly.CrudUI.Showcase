<?php
namespace Milly\CrudUI\Showcase\Controller\Backend;

/*
 * This file is part of the Milly.CrudUI.Showcase package.
 */

use Milly\CrudUI\Controller\CrudControllerTrait;
use Milly\CrudUI\Showcase\Domain\Model\Album;
use Neos\Flow\Annotations as Flow;
use Neos\Neos\Controller\Backend\ModuleController;

class AlbumController extends ModuleController
{
    const ENTITY_CLASSNAME = Album::class;
    use CrudControllerTrait;
}
