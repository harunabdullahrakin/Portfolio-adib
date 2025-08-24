<?php 
require 'config.php';
?>



<script>
        function myFunction() {
          var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
        function back() {
            var x = document.getElementById("buttons01");
            if (x.style.display === "none") {
              x.style.display = "block";
            } else {
              x.style.display = "none";
            }
          }
        </script>


    <script>
        // Array of image URLs
        const images = [
            '<?php echo $pfp1 ?>',
            '<?php echo $pfp3 ?>',
            '<?php echo $pfp4 ?>'
       ];


        // Function to get a random image from the array
        function getRandomImage() {
            const randomIndex = Math.floor(Math.random() * images.length);
            return images[randomIndex];
        }

        // Set the random image source to the <img> tag
        document.getElementById('randomImage').src = getRandomImage();
    </script>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script>




<!-- title script -->
<script>
  var rev = "fwd";
  function titlebar(val){
      var msg  = "<?php echo $title; ?>";
      var res = " ";
      var speed = 450;
      var pos = val;
      msg = msg;
      var le = msg.length;
      if(rev == "fwd"){
          if(pos < le){
              pos = pos+1;
              scroll = msg.substr(0,pos);
              document.title = scroll;
              timer = window.setTimeout("titlebar("+pos+")",speed);
          }
          else {
              rev = "bwd";
              timer = window.setTimeout("titlebar("+pos+")",speed);
          }
      }

  }
  titlebar(0);
</script>


<!-- extra -->
<style>
    #container07 {
        background-image: url(''), url('<?php echo $banner ?>');
    }
</style>