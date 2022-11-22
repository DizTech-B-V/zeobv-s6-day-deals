import ZeobvDayDealTimerPlugin from './zeobv-day-deal-timer/zeobv-day-deal-timer.plugin'
import ZeobvDayDealPlugin from './zeobv-day-deal/zeobv-day-deal.plugin'

// Register your plugin via the existing PluginManager
const PluginManager = window.PluginManager
PluginManager.register(
    'ZeobvDayDealTimerPlugin',
    ZeobvDayDealTimerPlugin,
    '[data-zeobv-day-deal-timer-plugin]'
)
PluginManager.register(
    'ZeobvDayDealPlugin',
    ZeobvDayDealPlugin,
    '[data-zeobv-day-deal-plugin]'
)
