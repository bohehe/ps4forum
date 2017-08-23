<template>
  <div id="banner-index" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#banner-index" data-slide-to="0" class="active"></li>
        <li data-target="#banner-index" data-slide-to="1"></li>
        <li data-target="#banner-index" data-slide-to="2"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="../../assets/images/b4.jpg" alt="First slide">
            <div class="carousel-caption">标题 1</div>
        </div>
        <div class="item">
            <img src="../../assets/images/b5.jpg" alt="Second slide">
            <div class="carousel-caption">标题 2</div>
        </div>
        <div class="item">
            <img src="../../assets/images/b6.jpg" alt="Third slide">
            <div class="carousel-caption">标题 3</div>
        </div>
    </div>
  </div>
</template>
<script>
  export default {
    name: 'ps-slider'
  }
</script>