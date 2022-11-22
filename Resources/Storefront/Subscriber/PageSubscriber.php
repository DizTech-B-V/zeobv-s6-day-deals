<?php declare(strict_types=1);

namespace CookiePopUp\Storefront\Subscriber;

use CookiePopUp\Service\ConfigService;
use Shopware\Core\Framework\Struct\ArrayStruct;
use Shopware\Core\Framework\Struct\Struct;
use Shopware\Storefront\Event\StorefrontRenderEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class PageSubscriber implements EventSubscriberInterface
{
    /**
     * @var ConfigService
     */
    private $configService;

    public function __construct(
        \CookiePopUp\Service\ConfigService $configService
    )
    {
        $this->configService = $configService;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            StorefrontRenderEvent::class => 'onStorefrontRender',
        ];
    }

    /**
     * @param StorefrontRenderEvent $event
     */
    // page load onclick
    public function onStorefrontRender(StorefrontRenderEvent $event): void
    {
        $page = $event->getParameters()['page'] ?? null;

        if (!$page instanceof Struct) {
            return;
        }
        // active sales channel
        $salesChannelId = $event->getSalesChannelContext()->getSalesChannel()->getId();

        $options = [
            'isActive' => $this->configService->isActive($salesChannelId),
            'titleCookie' => $this->configService->titleCookie($salesChannelId),
            'textComponent' => $this->configService->textComponent($salesChannelId),
            'buttonText' => $this->configService->buttonText($salesChannelId),
            'backgroundColor' => $this->configService->backgroundColor($salesChannelId),
            'borderColor' => $this->configService->borderColor($salesChannelId),
            'borderSize' => $this->configService->borderSize($salesChannelId),
            'borderType' => $this->configService->borderType($salesChannelId),
            'titleColor' => $this->configService->titleColor($salesChannelId),
            'textColor' => $this->configService->textColor($salesChannelId),
            'buttonBgColor' => $this->configService->buttonBgColor($salesChannelId),
            'buttonTextColor' => $this->configService->buttonTextColor($salesChannelId),
            'linkTextColor' => $this->configService->linkTextColor($salesChannelId),
            'imageCookie' => $this->configService->imageCookie($salesChannelId),
            'positionCookie' => $this->configService->positionCookie($salesChannelId)
        ];

        if ($page->getExtension('CookiePopUp')) {
            $page->getExtension('CookiePopUp')->assign($options);
        } else {
            $page->addExtension('CookiePopUp', new ArrayStruct($options));
        }
    }
}
