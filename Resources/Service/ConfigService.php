<?php declare(strict_types=1);

namespace ZeobvDayDeals\Service;

use Shopware\Core\System\SystemConfig\SystemConfigService;

class ConfigService {

    /**
     * @var SystemConfigService
     */
    protected $configService;

    /**
     * ConfigService constructor.
     *
     * @param SystemConfigService $systemConfigService
     */
    public function __construct(
        SystemConfigService $systemConfigService
    )
    {
        $this->configService = $systemConfigService;
    }

    public function isActive(string $salesChannelId = null)
    {
        return $this->configService->getBool('ZeobvDayDeals.config.isActive', $salesChannelId);
    }
    public function titleCookie(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.titleCookie', $salesChannelId);
    }

    public function textComponent(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.textComponent', $salesChannelId);
    }
    public function buttonText(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.buttonText', $salesChannelId);
    }
    public function backgroundColor(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.backgroundColor', $salesChannelId);
    }
    public function borderColor(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.borderColor', $salesChannelId);
    }
    public function borderSize(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.borderSize', $salesChannelId);
    }
    public function borderType(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.borderType', $salesChannelId);
    }
    public function titleColor(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.titleColor', $salesChannelId);
    }
    public function textColor(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.textColor', $salesChannelId);
    }
    public function buttonBgColor(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.buttonBgColor', $salesChannelId);
    }
    public function buttonTextColor(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.buttonTextColor', $salesChannelId);
    }
    public function linkTextColor(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.linkTextColor', $salesChannelId);
    }
    public function imageCookie(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.imageCookie', $salesChannelId);
    }
    public function positionCookie(string $salesChannelId = null)
    {
        return $this->configService->get('ZeobvDayDeals.config.positionCookie', $salesChannelId);
    }

}
