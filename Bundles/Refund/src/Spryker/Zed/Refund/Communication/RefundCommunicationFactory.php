<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Refund\Communication;

use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Spryker\Zed\Refund\Communication\Table\RefundTable;
use Spryker\Zed\Refund\RefundDependencyProvider;

/**
 * @method \Spryker\Zed\Refund\RefundConfig getConfig()
 * @method \Spryker\Zed\Refund\Persistence\RefundQueryContainer getQueryContainer()
 */
class RefundCommunicationFactory extends AbstractCommunicationFactory
{

    /**
     * @return \Spryker\Zed\Refund\Communication\Table\RefundTable
     */
    public function createRefundTable()
    {
        $refundTable = new RefundTable(
            $this->getQueryContainer(),
            $this->getDateFormatter(),
            $this->getCurrencyManager()
        );

        return $refundTable;
    }

    /**
     * @return \Spryker\Shared\Library\DateFormatterInterface
     */
    protected function getDateFormatter()
    {
        return $this->getProvidedDependency(RefundDependencyProvider::DATE_FORMATTER);
    }

    /**
     * @return \Spryker\Shared\Library\Currency\CurrencyManagerInterface
     */
    protected function getCurrencyManager()
    {
        return $this->getProvidedDependency(RefundDependencyProvider::CURRENCY_MANAGER);
    }

}
