<?php
function write_copyright() {
    $year = date('Y');
    echo '&copy; ' . $year . 'kisu';
}
?>
<footer>
    <?php wrtie_logo(); ?>
    <?php write_copyright(); ?>
</footer>
</body>
</html>