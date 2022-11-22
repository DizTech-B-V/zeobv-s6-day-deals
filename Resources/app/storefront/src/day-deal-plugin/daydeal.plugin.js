import Plugin from 'src/plugin-system/plugin.class';

export default class DayDealPlugin extends Plugin {
    init() {
        this.registerTimer()

    }

    registerTimer() {
        console.log(this);

        // Set the date we're counting down to

        const currentDateTime = new Date();

        currentDateTime.setHours(23)
        currentDateTime.setMinutes(59)
        currentDateTime.setSeconds(59)
        console.log(currentDateTime);
        let countDownDate = currentDateTime.getTime();

// Update the count down every 1 second
        let x = setInterval(() => {

            // Get today's date and time
            let now = new Date().getTime();

            // Find the distance between now and the count down date
            let distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            this.el.innerHTML = hours + "h "
                + minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                this.el.innerHTML = "The Day Deal is over. Wait for the next deal to appear";
            }
        }, 1000);
    }

}


