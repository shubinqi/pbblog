
<!DOCTYPE html>
<!-- saved from url=(0037)http://daneden.github.io/animate.css/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>BBQ前端博客之Animate.css_舒彬琪博客_CSS3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, minimal-ui">

  <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
  <link rel="dns-prefetch" href="http://code.jquery.com/">

  <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{pboot:sitetplpath}/Animate/animate.min.css">
  <link rel="stylesheet" href="{pboot:sitetplpath}/Animate/style.css">
</head>
<body style="">
<header class="site__header island">
  <div class="wrap">
   <span id="animationSandbox" style="display: block;"><h1 class="site__title mega">Animate.css</h1></span>
    <span class="beta subhead">Just-add-water CSS animations</span>
  </div>
</header><!-- /.site__header -->

<main class="site__content island" role="content">
  <div class="wrap">
    <form>
      <select class="input input--dropdown js--animations">
        <optgroup label="Attention Seekers">
          <option value="bounce">bounce</option>
          <option value="flash">flash</option>
          <option value="pulse">pulse</option>
          <option value="rubberBand">rubberBand</option>
          <option value="shake">shake</option>
          <option value="swing">swing</option>
          <option value="tada">tada</option>
          <option value="wobble">wobble</option>
        </optgroup>

        <optgroup label="Bouncing Entrances">
          <option value="bounceIn">bounceIn</option>
          <option value="bounceInDown">bounceInDown</option>
          <option value="bounceInLeft">bounceInLeft</option>
          <option value="bounceInRight">bounceInRight</option>
          <option value="bounceInUp">bounceInUp</option>
        </optgroup>

        <optgroup label="Bouncing Exits">
          <option value="bounceOut">bounceOut</option>
          <option value="bounceOutDown">bounceOutDown</option>
          <option value="bounceOutLeft">bounceOutLeft</option>
          <option value="bounceOutRight">bounceOutRight</option>
          <option value="bounceOutUp">bounceOutUp</option>
        </optgroup>

        <optgroup label="Fading Entrances">
          <option value="fadeIn">fadeIn</option>
          <option value="fadeInDown">fadeInDown</option>
          <option value="fadeInDownBig">fadeInDownBig</option>
          <option value="fadeInLeft">fadeInLeft</option>
          <option value="fadeInLeftBig">fadeInLeftBig</option>
          <option value="fadeInRight">fadeInRight</option>
          <option value="fadeInRightBig">fadeInRightBig</option>
          <option value="fadeInUp">fadeInUp</option>
          <option value="fadeInUpBig">fadeInUpBig</option>
        </optgroup>

        <optgroup label="Fading Exits">
          <option value="fadeOut">fadeOut</option>
          <option value="fadeOutDown">fadeOutDown</option>
          <option value="fadeOutDownBig">fadeOutDownBig</option>
          <option value="fadeOutLeft">fadeOutLeft</option>
          <option value="fadeOutLeftBig">fadeOutLeftBig</option>
          <option value="fadeOutRight">fadeOutRight</option>
          <option value="fadeOutRightBig">fadeOutRightBig</option>
          <option value="fadeOutUp">fadeOutUp</option>
          <option value="fadeOutUpBig">fadeOutUpBig</option>
        </optgroup>

        <optgroup label="Flippers">
          <option value="flip">flip</option>
          <option value="flipInX">flipInX</option>
          <option value="flipInY">flipInY</option>
          <option value="flipOutX">flipOutX</option>
          <option value="flipOutY">flipOutY</option>
        </optgroup>

        <optgroup label="Lightspeed">
          <option value="lightSpeedIn">lightSpeedIn</option>
          <option value="lightSpeedOut">lightSpeedOut</option>
        </optgroup>

        <optgroup label="Rotating Entrances">
          <option value="rotateIn">rotateIn</option>
          <option value="rotateInDownLeft">rotateInDownLeft</option>
          <option value="rotateInDownRight">rotateInDownRight</option>
          <option value="rotateInUpLeft">rotateInUpLeft</option>
          <option value="rotateInUpRight">rotateInUpRight</option>
        </optgroup>

        <optgroup label="Rotating Exits">
          <option value="rotateOut">rotateOut</option>
          <option value="rotateOutDownLeft">rotateOutDownLeft</option>
          <option value="rotateOutDownRight">rotateOutDownRight</option>
          <option value="rotateOutUpLeft">rotateOutUpLeft</option>
          <option value="rotateOutUpRight">rotateOutUpRight</option>
        </optgroup>

        <optgroup label="Specials">
          <option value="hinge">hinge</option>
          <option value="rollIn">rollIn</option>
          <option value="rollOut">rollOut</option>
        </optgroup>

        <optgroup label="Zoom Entrances">
          <option value="zoomIn">zoomIn</option>
          <option value="zoomInDown">zoomInDown</option>
          <option value="zoomInLeft">zoomInLeft</option>
          <option value="zoomInRight">zoomInRight</option>
          <option value="zoomInUp">zoomInUp</option>
        </optgroup>

        <optgroup label="Zoom Exits">
          <option value="zoomOut">zoomOut</option>
          <option value="zoomOutDown">zoomOutDown</option>
          <option value="zoomOutLeft">zoomOutLeft</option>
          <option value="zoomOutRight">zoomOutRight</option>
          <option value="zoomOutUp">zoomOutUp</option>
        </optgroup>
      </select>

      <button class="butt js--triggerAnimation">Animate it</button>
    </form>
    <hr>
    <p class="meta"><a href="{pboot:sitetplpath}/Animate/animate.css" download="animate.css">下载 Animate.css</a> or <a href="https://github.com/confidence68/animate.css">GitHub</a></p>
    <p><small>Another thing from  Daniel Eden </small></p>
  </div>
</main><!-- /.site__content -->

<script src="{pboot:sitetplpath}/Animate/jquery-1.10.2.min.js"></script>
<script>
  function testAnim(x) {
    $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass();
    });
  };

  $(document).ready(function(){
    $('.js--triggerAnimation').click(function(e){
      e.preventDefault();
      var anim = $('.js--animations').val();
      testAnim(anim);
    });

    $('.js--animations').change(function(){
      var anim = $(this).val();
      testAnim(anim);
    });
  });

</script>
</body>
</html><?php return array (
); ?>