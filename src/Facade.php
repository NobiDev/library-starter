<?php
/*
 * Copyright (c) 2021 NobiDev
 */

declare(strict_types=1);

namespace NobiDev\LibraryStarter;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * @package NobiDev\LibraryStarter
 */
class Facade extends BaseFacade
{
    /**
     * @noinspection PhpMissingParentCallCommonInspection
     */
    protected static function getFacadeAccessor(): string
    {
        // parent::getFacadeAccessor();
        return Constant::getName();
    }
}
