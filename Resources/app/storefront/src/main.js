// Import all necessary Storefront plugins
import DayDealPlugin from "./day-deal-plugin/daydeal.plugin";

// Register your plugin via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register('DayDealPlugin', DayDealPlugin, '[data-day-deal-plugin]');
