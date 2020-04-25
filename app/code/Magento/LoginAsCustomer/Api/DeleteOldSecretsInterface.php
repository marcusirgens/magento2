<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\LoginAsCustomer\Api;

/**
 * @api
 */
interface DeleteOldSecretsInterface
{
    /**
     * Delete old secret key records
     */
    public function execute():void;
}
