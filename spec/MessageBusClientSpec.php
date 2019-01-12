<?php

namespace spec\Aggrego\MessengerCommandConsumer;

use Aggrego\MessengerCommandConsumer\MessageBusClient;
use PhpSpec\ObjectBehavior;
use Symfony\Component\Messenger\MessageBusInterface;

class MessageBusClientSpec extends ObjectBehavior
{
    function let(MessageBusInterface $bus)
    {
        $this->beConstructedWith($bus);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(MessageBusClient::class);
    }
}
