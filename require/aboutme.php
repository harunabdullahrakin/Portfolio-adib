<?php
if ((empty($aboutme_system) && !empty($aboutme) && !empty($aboutme_url)) || ($aboutme_system === "text" && !empty($aboutme))) {

    ?>
    <h3 id="text05"><span class="p"><?php echo htmlspecialchars($aboutme, ENT_QUOTES, 'UTF-8'); ?></span></h3>
    <?php
} elseif ($aboutme_system === "url" && !empty($aboutme_url)) {
    ?>
    <h3 id="text05"><span class="p" id="line2"></span></h3>

    <script>
        window.onload = function() {
            const url = "<?php echo htmlspecialchars($aboutme_url, ENT_QUOTES, 'UTF-8'); ?>";
            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('loading..');
                    }
                    return response.text(); 
                })
                .then(data => {
                    document.getElementById('line2').innerText = data; 
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                    document.getElementById('line2').innerText = 'Failed to load!';
                });
        };
    </script>
    <?php
} elseif (empty($aboutme) && empty($aboutme_url)) {
    
    ?>
    <h3 id="text05"><span class="p"><?php echo "Hi, I'm " . htmlspecialchars($fullname, ENT_QUOTES, 'UTF-8'); ?></span></h3>
    <?php
}
// dont touch unless you know what you're doing
?>
