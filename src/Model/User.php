<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\ModuleTemplate\Model;

/**
 * @eshopExtension
 * @mixin \OxidEsales\Eshop\Application\Model\User
 */
class User extends User_parent
{
    public const OETM_USER_GREETING_FIELD = 'oetmgreeting';

    public function getPersonalGreeting(): string
    {
        return (string)$this->getRawFieldData(self::OETM_USER_GREETING_FIELD);
    }

    //NOTE: we only assign the value to the model.
    //Calling save() method will then store it in the database
    public function setPersonalGreeting(string $personalGreeting): void
    {
        $this->assign([
            self::OETM_USER_GREETING_FIELD => $personalGreeting,
        ]);
    }
}
