<?php

/**
 * This file is part of OXID eSales AmazonPay module.
 *
 * OXID eSales AmazonPay module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales AmazonPay module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales AmazonPay module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2020
 */

declare(strict_types=1);

namespace OxidProfessionalServices\AmazonPay\Tests\Unit\Core;

use OxidProfessionalServices\AmazonPay\Core\AmazonClient;
use OxidProfessionalServices\AmazonPay\Core\AmazonService;
use OxidProfessionalServices\AmazonPay\Core\ServiceFactory;
use OxidEsales\TestingLibrary\UnitTestCase;

class ServiceFactoryTest extends UnitTestCase
{
    /** @var ServiceFactory */
    private $serviceFactory;

    protected function setUp()
    {
        $this->serviceFactory = new ServiceFactory();
    }

    public function testGetClient(): void
    {
        $this->assertInstanceOf(AmazonClient::class, $this->serviceFactory->getClient());
    }

    public function testGetService(): void
    {
        $this->assertInstanceOf(AmazonService::class, $this->serviceFactory->getService());
    }
}
