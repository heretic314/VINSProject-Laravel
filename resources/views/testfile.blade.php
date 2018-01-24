<div class="row">
    <div id="sketch1">
      <canvas id="paint1" style="background: url('https://i.imgur.com/1bvTivk.png');"></canvas>

</div>


<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(){

      var canvas = document.getElementById('paint1');
      var ctx = canvas.getContext('2d');

      var sketch1 = document.getElementById('sketch1');
      var sketch1_style = getComputedStyle(sketch1);
      canvas.width = 600;
      canvas.height = 475;

      var mouse = {x: 0, y: 0};

      /* Mouse Capturing Work */
      canvas.addEventListener('mousemove', function(e) {
      mouse.x = e.pageX - this.offsetLeft;
      mouse.y = e.pageY - this.offsetTop;
      }, false);

      /* Drawing on paint1 App */
      ctx.lineJoin = 'round';
      ctx.lineCap = 'round';

      ctx.strokeStyle = "red";
      function getColor(colour){ctx.strokeStyle = colour;}

      function getSize(size){ctx.lineWidth = size;}


      //ctx.strokeStyle =
      //ctx.strokeStyle = document.settings.colour[1].value;

      canvas.addEventListener('mousedown', function(e) {
        ctx.beginPath();
        ctx.moveTo(mouse.x, mouse.y);

        canvas.addEventListener('mousemove', onpaint1, false);
      }, false);

      canvas.addEventListener('mouseup', function() {
        canvas.removeEventListener('mousemove', onpaint1, false);
      }, false);

      var onpaint1 = function() {
        ctx.lineTo(mouse.x, mouse.y);
        ctx.stroke();
      };
    });
</script>
