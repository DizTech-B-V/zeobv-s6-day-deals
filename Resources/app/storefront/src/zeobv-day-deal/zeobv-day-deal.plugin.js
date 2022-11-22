import Plugin from 'src/plugin-system/plugin.class'

export default class ZeobvDayDealPlugin extends Plugin {
    init() {
        if (this.el.clientWidth > 450) {
            this.el.classList.add('zeobv-day-deal--wide-view')
        }
    }
}
