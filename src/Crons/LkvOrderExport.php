<?php

namespace LkvAnbindung\Crons;

use Plenty\Modules\Cron\Contracts\CronHandler as Cron;
use Plenty\Plugin\Log\Loggable;

class LkvOrderExport extends Cron 
{
    use Loggable;

    public function handle()
    {
        $this->getLogger(__FUNCTION__)->debug('LkvAnbindung::orderExport.jobStarted', 'running');
    }

}