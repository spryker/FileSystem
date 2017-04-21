<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\FileSystem;

/**
 * @method \Spryker\Service\FileSystem\FileSystemServiceFactory getFactory()
 */
interface FileSystemServiceInterface
{

    /**
     * @api
     *
     * @param string $name
     *
     * @return \Spryker\Service\FileSystem\Model\FileSystemStorageInterface
     */
    public function getStorageByName($name);

    /**
     * @api
     *
     * @return \Spryker\Service\FileSystem\Model\FileSystemStorageInterface[]
     */
    public function getStorageCollection();

}
