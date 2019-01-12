<?php
/**
 * This file is part of the Aggrego.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace spec\Aggrego\MessengerCommandConsumer;

use Aggrego\MessengerCommandConsumer\Client;
use PhpSpec\ObjectBehavior;
use Symfony\Component\Messenger\MessageBusInterface;

class ClientSpec extends ObjectBehavior
{
    function let(MessageBusInterface $bus)
    {
        $this->beConstructedWith($bus);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }
}
