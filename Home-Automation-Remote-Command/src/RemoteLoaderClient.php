<?php

namespace App;

use App\Commands\MarcoCommand;
use App\Commands\TurnOffCeilingFanCommand;
use App\Commands\TurnOffHottubCommand;
use App\Commands\TurnOffLightCommand;
use App\Commands\TurnOnCeilingFanCommand;
use App\Commands\TurnOnHottubCommand;
use App\Commands\TurnOnLightCommand;
use App\Devices\CeilingFan;
use App\Devices\Hottub;
use App\Devices\Light;
use App\Devices\Television;

class RemoteLoaderClient
{
    /**
     * @var \App\RemoteControlInvoker
     */
    private $remoteControl;

    private const SLOT_ONE = 0;
    private const SLOT_TWO = 1;
    private const SLOT_THREE = 2;
    private const SLOT_FOUR = 3;

    public function __construct()
    {
        $this->remoteControl = new RemoteControlInvoker();
    }

    public function run()
    {
        $ceilingFan = new CeilingFan();
        $light = new Light();
        $hottub = new Hottub();
        $television = new Television();

        $this->remoteControl->setCommand(
            self::SLOT_ONE,
            new TurnOnCeilingFanCommand($ceilingFan),
            new TurnOffCeilingFanCommand($ceilingFan)
        );

        $this->remoteControl->setCommand(
            self::SLOT_TWO,
            new TurnOnLightCommand($light),
            new TurnOffLightCommand($light)
        );

        $this->remoteControl->setCommand(
            self::SLOT_THREE,
            new TurnOnHottubCommand($hottub),
            new TurnOffHottubCommand($hottub)
        );

        $this->remoteControl->setCommand(
            self::SLOT_FOUR,
            new MarcoCommand([
                new TurnOnCeilingFanCommand($ceilingFan),
                new TurnOnHottubCommand($hottub),
                new TurnOnLightCommand($light)
            ]),
            new MarcoCommand([
                new TurnOffCeilingFanCommand($ceilingFan),
                new TurnOffHottubCommand($hottub),
                new TurnOffLightCommand($light)
            ])
        );

        $this->remoteControl->onButtonWasPushed(self::SLOT_ONE);
        $this->remoteControl->offButtonWasPushed(self::SLOT_ONE);

        $this->remoteControl->onButtonWasPushed(self::SLOT_TWO);
        $this->remoteControl->offButtonWasPushed(self::SLOT_TWO);

        $this->remoteControl->onButtonWasPushed(self::SLOT_THREE);
        $this->remoteControl->offButtonWasPushed(self::SLOT_THREE);

        $this->remoteControl->undoButtonWasPushed();

        $this->remoteControl->onButtonWasPushed(self::SLOT_FOUR);
        $this->remoteControl->offButtonWasPushed(self::SLOT_FOUR);
    }
}
