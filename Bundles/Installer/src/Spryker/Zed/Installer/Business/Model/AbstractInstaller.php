<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Installer\Business\Model;

use Psr\Log\AbstractLogger;
use Spryker\Zed\Messenger\Business\Model\MessengerInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractInstaller extends AbstractLogger implements MessengerInterface
{

    /**
     * @var \Spryker\Zed\Messenger\Business\Model\MessengerInterface
     */
    protected $messenger;

    /**
     * @param \Spryker\Zed\Messenger\Business\Model\MessengerInterface $messenger
     *
     * @return $this
     */
    public function setMessenger(MessengerInterface $messenger)
    {
        $this->messenger = $messenger;

        return $this;
    }

    /**
     * @return void
     */
    abstract public function install();

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     *
     * @return void
     */
    public function log($level, $message, array $context = [])
    {
        $this->messenger->log($level, $message, $context);
    }

    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @param string $message
     *
     * @return void
     */
    public function updateOutput(OutputInterface $output, $message)
    {
        $output->write($message);
        $output->write(str_repeat("\x08", strlen($message)));
    }

}
