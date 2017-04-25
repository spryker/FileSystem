<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\FileSystem\Business;

use Generated\Shared\Transfer\FileSystemContentTransfer;
use Generated\Shared\Transfer\FileSystemCopyTransfer;
use Generated\Shared\Transfer\FileSystemCreateDirectoryTransfer;
use Generated\Shared\Transfer\FileSystemDeleteDirectoryTransfer;
use Generated\Shared\Transfer\FileSystemDeleteTransfer;
use Generated\Shared\Transfer\FileSystemListTransfer;
use Generated\Shared\Transfer\FileSystemQueryTransfer;
use Generated\Shared\Transfer\FileSystemRenameTransfer;
use Generated\Shared\Transfer\FileSystemStreamTransfer;
use Generated\Shared\Transfer\FileSystemVisibilityTransfer;
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
     * @param \Generated\Shared\Transfer\FileSystemQueryTransfer $fileSystemQueryTransfer
     *
     * @return \Generated\Shared\Transfer\FileSystemResourceMetadataTransfer|null
     */
    public function getMetadata(FileSystemQueryTransfer $fileSystemQueryTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->getMetadata($fileSystemQueryTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemQueryTransfer $fileSystemQueryTransfer
     *
     * @return false|string
     */
    public function getMimeType(FileSystemQueryTransfer $fileSystemQueryTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->getMimeType($fileSystemQueryTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemQueryTransfer $fileSystemQueryTransfer
     *
     * @return false|string
     */
    public function getTimestamp(FileSystemQueryTransfer $fileSystemQueryTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->getTimestamp($fileSystemQueryTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemQueryTransfer $fileSystemQueryTransfer
     *
     * @return false|string
     */
    public function getSize(FileSystemQueryTransfer $fileSystemQueryTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->getSize($fileSystemQueryTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemQueryTransfer $fileSystemQueryTransfer
     *
     * @return bool
     */
    public function isPrivate(FileSystemQueryTransfer $fileSystemQueryTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->isPrivate($fileSystemQueryTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemVisibilityTransfer $fileSystemVisibilityTransfer
     *
     * @return bool
     */
    public function markAsPrivate(FileSystemVisibilityTransfer $fileSystemVisibilityTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->markAsPrivate($fileSystemVisibilityTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemVisibilityTransfer $fileSystemVisibilityTransfer
     *
     * @return bool
     */
    public function markAsPublic(FileSystemVisibilityTransfer $fileSystemVisibilityTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->markAsPublic($fileSystemVisibilityTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemCreateDirectoryTransfer $fileSystemCreateDirectoryTransfer
     *
     * @return false|string
     */
    public function createDirectory(FileSystemCreateDirectoryTransfer $fileSystemCreateDirectoryTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->createDirectory($fileSystemCreateDirectoryTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemDeleteDirectoryTransfer $fileSystemDeleteDirectoryTransfer
     *
     * @return bool
     */
    public function deleteDirectory(FileSystemDeleteDirectoryTransfer $fileSystemDeleteDirectoryTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->deleteDirectory($fileSystemDeleteDirectoryTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemCopyTransfer $fileSystemCopyTransfer
     *
     * @return false|string
     */
    public function copy(FileSystemCopyTransfer $fileSystemCopyTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->copy($fileSystemCopyTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemDeleteTransfer $fileSystemDeleteTransfer
     *
     * @return bool
     */
    public function delete(FileSystemDeleteTransfer $fileSystemDeleteTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->delete($fileSystemDeleteTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemQueryTransfer $fileSystemQueryTransfer
     *
     * @return bool
     */
    public function has(FileSystemQueryTransfer $fileSystemQueryTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->has($fileSystemQueryTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemContentTransfer $fileSystemContentTransfer
     *
     * @return bool
     */
    public function put(FileSystemContentTransfer $fileSystemContentTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->put($fileSystemContentTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemQueryTransfer $fileSystemQueryTransfer
     *
     * @return false|string
     */
    public function read(FileSystemQueryTransfer $fileSystemQueryTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->read($fileSystemQueryTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemRenameTransfer $fileSystemRenameTransfer
     *
     * @return false|string
     */
    public function rename(FileSystemRenameTransfer $fileSystemRenameTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->rename($fileSystemRenameTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemContentTransfer $fileSystemContentTransfer
     *
     * @return bool
     */
    public function write(FileSystemContentTransfer $fileSystemContentTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->write($fileSystemContentTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemStreamTransfer $fileSystemStreamTransfer
     * @param mixed $stream
     *
     * @return bool
     */
    public function putStream(FileSystemStreamTransfer $fileSystemStreamTransfer, $stream)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->putStream($fileSystemStreamTransfer, $stream);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemStreamTransfer $fileSystemStreamTransfer
     *
     * @return false|resource
     */
    public function readStream(FileSystemStreamTransfer $fileSystemStreamTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->readStream($fileSystemStreamTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemStreamTransfer $fileSystemStreamTransfer
     * @param mixed $stream
     *
     * @return bool
     */
    public function updateStream(FileSystemStreamTransfer $fileSystemStreamTransfer, $stream)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->updateStream($fileSystemStreamTransfer, $stream);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemStreamTransfer $fileSystemStreamTransfer
     * @param mixed $stream
     *
     * @return bool
     */
    public function writeStream(FileSystemStreamTransfer $fileSystemStreamTransfer, $stream)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->writeStream($fileSystemStreamTransfer, $stream);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemListTransfer $fileSystemListTransfer
     *
     * @return \Generated\Shared\Transfer\FileSystemResourceTransfer[]
     */
    public function listContents(FileSystemListTransfer $fileSystemListTransfer)
    {
        return $this->getFactory()
            ->createFileSystemAdapter()
            ->listContents($fileSystemListTransfer);
    }

}
