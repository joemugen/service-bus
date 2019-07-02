<?php

/**
 * This file is part of prooph/service-bus.
 * (c) 2014-2019 Alexander Miertsch <kontakt@codeliner.ws>
 * (c) 2015-2019 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ProophTest\ServiceBus\Mock;

final class CustomMessageEventHandler
{
    private $lastMessage;

    private $invokeCounter = 0;

    public function onEvent($message): void
    {
        $this->lastMessage = $message;
        $this->invokeCounter++;
    }

    public function getLastMessage()
    {
        return $this->lastMessage;
    }

    public function getInvokeCounter(): int
    {
        return $this->invokeCounter;
    }
}
