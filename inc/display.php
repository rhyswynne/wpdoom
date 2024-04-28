<?php

function wpdoom_display() {
    $wpdoomstring = '<div id="dos"></div>';

    $wpdoomstring .= '<script>
        Dos(document.getElementById("dos"), {
            url: "' . WPDOOM_PLUGIN_URL . '/inc/js/doom.jsdos",
        });
    </script>';

    return $wpdoomstring;
} add_shortcode( 'wpdoom', 'wpdoom_display' );