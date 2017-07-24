<?php
 
namespace LkvAnbindung\Providers;
 
use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Cron\Services\CronContainer;
use Plenty\Modules\EventProcedures\Services\EventProceduresService;
use Plenty\Log\Services\ReferenceContainer;
use LkvAnbindung\Crons\LkvOrderExport;
use Plenty\Plugin\Log\Loggable;
 
class LkvAnbindungServiceProvider extends ServiceProvider
{
    use Loggable;

    public function boot(CronContainer $container, EventProceduresService $eventProceduresService, ReferenceContainer $referenceContainer) {
        $container->add(CronContainer::EVERY_FIFTEEN_MINUTES, LkvOrderExport::class);
        $this->getLogger('LkvAnbindungServiceProvider_boot')->debug('cron angemeldet');
    }
}