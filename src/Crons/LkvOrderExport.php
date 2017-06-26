<?php

namespace LkvAnbindung\Crons;

use Plenty\Modules\Cron\Contracts\CronHandler;
use Plenty\Plugin\Log\Loggable;

class LkvOrderExport extends CronHandler {
    use Loggable;

    public function handle()
    {
        $this->getLogger("LkvOrderExport_handle")->debug('LkvOrderExport', ['running' => 'run']);
    }

}