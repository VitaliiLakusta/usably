jQuery(document).ready(function($) {
    var canvas = $("#star_rate");
    var ctx = canvas.get(0).getContext("2d");
    ctx.scale(0.3, 0.3);
    ctx.translate(10, 15);
    var color_bg = "#337ab7";
    var color_fill = "#fff";

    // CANVAS
    var draw_figure = function(is_clip) {
        ctx.beginPath();
        ctx.moveTo(107.8, 0.0);
        ctx.lineTo(141.2, 67.5);
        ctx.lineTo(215.7, 78.3);
        ctx.lineTo(161.8, 130.9);
        ctx.lineTo(174.5, 205.1);
        ctx.lineTo(107.8, 170.1);
        ctx.lineTo(41.2, 205.1);
        ctx.lineTo(53.9, 130.9);
        ctx.lineTo(0.0, 78.3);
        ctx.lineTo(74.5, 67.5);
        ctx.lineTo(107.8, 0.0);
        ctx.lineWidth = 8;
        ctx.lineJoin = "round";
        ctx.strokeStyle = "#fff";
        ctx.stroke();
        if (is_clip)
            ctx.clip();
        else
            ctx.closePath();
    }
    var draw_fill = function(fill_percent) {
        fill_percent = typeof fill_percent !== 'undefined' ? fill_percent : 0;
        var w = ctx.canvas.width * 3;
        var h = ctx.canvas.height * 2.8;
        var h_scaled = h / 100;
        var fill_level = h - h_scaled * fill_percent;
        ctx.save(); // save current clipping setting as default
        ctx.beginPath();
        ctx.rect(0, fill_level, w, h);
        //ctx.rect(0,0,w,fill_level);
        ctx.clip();

        // Fill
        ctx.fillStyle = color_fill;
        ctx.fillRect(0, 0, w, h);
        ctx.restore();
    }

    var draw = function(is_initial, fill_percent) {
        fill_percent = typeof fill_percent !== 'undefined' ? fill_percent : 0;

        if (is_initial) {
            // Draw background figure
            draw_figure(false);
            draw_figure(true); // main clipping mask - figure
        } else {
            draw_fill(fill_percent); // progress clipping mask - rectangle
        }
    }

    // ANIMATION
    var animate_progress = function(upto, duration_ms) {
        duration_ms = typeof duration_ms !== 'undefined' ? duration_ms : 1400;
        var this_counter = 0;
        draw(true);

        jQuery({
            Counter: this_counter
        }).animate({
            Counter: upto
        }, {
            duration: duration_ms,
            easing: 'swing',
            step: function() {
                this_counter = Math.ceil(this.Counter);

                // Percent display
                $("#counter").text(this_counter);
                // Progress image
                draw(false, this_counter);
            }
        });
    }
    animate_progress($("#counter").data("fill"));
});