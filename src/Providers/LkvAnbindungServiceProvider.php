<?php
 
namespace LkvAnbindung\Providers;
 
use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Cron\Services\CronContainer;
use Plenty\Modules\EventProcedures\Services\EventProceduresService;
use Plenty\Log\Services\ReferenceContainer;
use LkvAnbindung\Cron\LkvOrderExport;
 
class LkvAnbindungServiceProvider extends ServiceProvider
{
 
    /**
     * Register the service provider.
     */
 
    public function register()
    {
        $this->getApplication()->register(LkvAnbindungServiceProvider::class);
    }

    public function boot(CronContainer $container, EventProceduresService $eventProceduresService, ReferenceContainer $referenceContainer) {
        $container->add(CronContainer::EVERY_FIFTEEN_MINUTES, LkvOrderExport::class);
    }
}