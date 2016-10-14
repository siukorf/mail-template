<?php
function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

$content = ob_get_contents();
ob_end_clean();

ob_start("sanitize_output");

echo "<div id=\"PreviewPos\">" . htmlspecialchars_decode($content, ENT_NOQUOTES) . "</div>";

?>

<p class="buttonsCC"><a id="preview" class="boldR1970">Preview</a>&nbsp;|&nbsp;<a id="html">HTML</a></p>

<?php

echo "<textarea id=\"contentOutput\" readonly=\"readonly\">" . htmlspecialchars_decode($content, ENT_NOQUOTES);
ob_end_flush();
include "signature.html";
echo "</textarea>";

?>

<script src="jquery-1.11.1.min.js"></script>

<script>
    $('#preview').on('click', function(){
        $('#contentOutput').removeClass('showR1970');
        $(this).addClass('boldR1970');
        $('#html').removeClass('boldR1970');
    });
    $('#html').on('click', function(){
        $('#contentOutput').addClass('showR1970');
        $(this).addClass('boldR1970');
        $('#preview').removeClass('boldR1970');
    });
</script>

</body>

</html>