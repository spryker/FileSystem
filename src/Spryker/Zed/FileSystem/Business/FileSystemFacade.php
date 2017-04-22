<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\FileSystem\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Spryker\Zed\FileSystem\FileSystemConfig getConfig()
 * @method \Spryker\Zed\FileSystem\Business\FileSystemBusinessFactory getFactory()
 */
class FileSystemFacade extends AbstractFacade implements FileSystemFacadeInterface
{

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     *
     * @return string|false
     */
    public function getMimeType($fileSystemName, $path)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->getMimeType($fileSystemName, $path);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     *
     * @return string|false
     */
    public function getTimestamp($fileSystemName, $path)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->getTimestamp($fileSystemName, $path);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     *
     * @return string|false
     */
    public function getSize($fileSystemName, $path)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->getSize($fileSystemName, $path);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $dirname
     * @param array $config
     *
     * @return string|false
     */
    public function createDir($fileSystemName, $dirname, array $config = [])
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->createDir($fileSystemName, $dirname, $config);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $dirname
     *
     * @return string|false
     */
    public function deleteDir($fileSystemName, $dirname)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->deleteDir($fileSystemName, $dirname);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     * @param string $newpath
     *
     * @return string|false
     */
    public function copy($fileSystemName, $path, $newpath)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->copy($fileSystemName, $path, $newpath);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     *
     * @return bool
     */
    public function delete($fileSystemName, $path)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->delete($fileSystemName, $path);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     *
     * @return bool
     */
    public function has($fileSystemName, $path)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->has($fileSystemName, $path);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     * @param string $content
     *
     * @return bool
     */
    public function put($fileSystemName, $path, $content)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->put($fileSystemName, $path, $content);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     *
     * @return string|false
     */
    public function read($fileSystemName, $path)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->read($fileSystemName, $path);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $newpath
     * @param string $path
     *
     * @return string|false
     */
    public function rename($fileSystemName, $path, $newpath)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->rename($fileSystemName, $path, $newpath);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     * @param string $content
     *
     * @return bool
     */
    public function write($fileSystemName, $path, $content)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->write($fileSystemName, $path, $content);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     * @param resource $resource
     * @param array $config
     *
     * @return bool
     */
    public function putStream($fileSystemName, $path, $resource, array $config = [])
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->putStream($fileSystemName, $path, $resource, $config);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     *
     * @return resource|false
     */
    public function readStream($fileSystemName, $path)
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->readStream($fileSystemName, $path);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     * @param mixed $resource
     * @param array $config
     *
     * @return bool
     */
    public function updateStream($fileSystemName, $path, $resource, array $config = [])
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->updateStream($fileSystemName, $path, $resource, $config);
    }

    /**
     * @api
     *
     * @param string $fileSystemName
     * @param string $path
     * @param mixed $resource
     * @param array $config
     *
     * @return bool
     */
    public function writeStream($fileSystemName, $path, $resource, array $config = [])
    {
        return $this->getFactory()
            ->createFileSystemHandler()
            ->writeStream($fileSystemName, $path, $resource, $config);
    }

}
