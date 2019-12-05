<?php
/* Template Name: Coming Page */
get_header();
$img_path = get_template_directory_uri( '/' );

?>
	<section class="coming-soon">
        <div class="logo">
            <img src="<?php echo $img_path.'/images/text-image.png' ?>" alt="">
        </div>
        <h1><span>We're Coming Soon</span></h1>

        <div id="countdown">
                <div>
                    <span id="day"></span>
                    <span class="unit">Days</span>
                </div>
                <div>
                    <span id="hour"></span>
                    <span class="unit">Hours</span>

                </div>
                <div>
                    <span id="min"></span>
                    <span class="unit">Minutes</span>
                </div>
                <div>
                    <span id="sec"></span>
                    <span class="unit">Seconds</span>
                </div>
            </div>
    </section>
<?php get_footer(); ?>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 1, 2020 0:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("day").innerHTML = days;
        document.getElementById("hour").innerHTML = hours;
        document.getElementById("min").innerHTML = minutes;
        document.getElementById("sec").innerHTML = seconds;

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
