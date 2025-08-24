
<style>

  #snow-canvas {

    position: fixed;

    top: 0;

    left: 0;

    width: 100vw;

    height: 100vh;

    pointer-events: none;

    z-index: 9999;

  }

</style>


<canvas id="snow-canvas"></canvas>


<script>

  document.addEventListener("DOMContentLoaded", function () {

    const canvas = document.getElementById("snow-canvas");

    const ctx = canvas.getContext("2d");


    // Set canvas to cover the entire page

    function setCanvasSize() {

      canvas.width = window.innerWidth;

      canvas.height = window.innerHeight;

    }

    setCanvasSize();

    window.addEventListener("resize", setCanvasSize);


    const snowflakes = [];

    const snowflakeShapes = ["❄", "✻", "✼"]; // Snowflake symbols


    function createSnowflakes() {

      const total = 40; // Adjust the number of snowflakes

      for (let i = 0; i < total; i++) {

        snowflakes.push({

          x: Math.random() * canvas.width,

          y: Math.random() * canvas.height,

          size: Math.random() * 5 + 8, // Snowflake size

          speed: Math.random() * 1 + 0.5, // Snowflake speed

          shape: snowflakeShapes[Math.floor(Math.random() * snowflakeShapes.length)],

          opacity: Math.random() * 0.8 + 0.2,

        });

      }

    }


    function drawSnowflakes() {

      ctx.clearRect(0, 0, canvas.width, canvas.height);

      snowflakes.forEach((flake) => {

        ctx.globalAlpha = flake.opacity;

        ctx.font = `${flake.size}px Arial`;

        ctx.fillStyle = "white";

        ctx.fillText(flake.shape, flake.x, flake.y);

      });

      updateSnowflakes();

    }


    function updateSnowflakes() {

      snowflakes.forEach((flake) => {

        flake.y += flake.speed;

        if (flake.y > canvas.height) {

          flake.y = 0;

          flake.x = Math.random() * canvas.width;

        }

      });

    }


    function animateSnowflakes() {

      drawSnowflakes();

      requestAnimationFrame(animateSnowflakes);

    }


    createSnowflakes();

    animateSnowflakes();

  });

</script>

