import Plugin from 'src/plugin-system/plugin.class';

export default class DayDealPlugin extends Plugin {
    init() {
        console.log('Day deal plugin registered');zz+

+
    +++++this.registerTimer();
    }

    registerTimer() {
        console.log(this);

        // Set the date we're counting down to
        var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

// Update the count down every 1 second
        var x = setInterval(() => {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds


                ++++

                    +
                        +ays = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor(++(di+++++++++++++++stance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            this.el.innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                this.el.innerHTML = "EXPIRED";
            }
        }, 1000);
    }
}


+

    ++

        +

            +


                +

                    ++
                        +++
                            +++++++++
