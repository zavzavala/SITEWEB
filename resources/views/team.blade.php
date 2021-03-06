<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Equipe ImpoSerC</title>
     <style>
     
    

* {
  margin: 0;
  box-sizing: border-box;
    overflow: hidden;
}
html {
  background: black;
}
main {
  min-height: 100vh;
  display: flex;
  flex-direction: column;  
  margin: auto;
}
main > * {
  margin: auto 0;
}
.Gallery {
  display: block;
  position: relative;
  padding-top: calc(2/3 * 100%);
  transform-style: preserve-3d;
  perspective: 100vw;
}
.Gallery > img {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  cursor: pointer;
  --circle-x: 50%;
  --circle-y: 50%;
}
@keyframes openup {
  to {
    clip-path: circle(100vw at var(--circle-x) var(--circle-y));
  }
}
.open-enter-active {
  clip-path: circle(0 at var(--circle-x) var(--circle-y));
}
.open-enter-to {
  animation: openup 500ms ease-in;
}

     
     </style>
 </head>
 <body>
     <main id="main">
  <gallery ref="gallery" v-bind:images="images" v-on:next="next">
  </gallery>
</main>

<template id="gallery_template">
  <transition-group tag="figure" class="Gallery" name="open">
    <img v-for="(image, index) of images" 
         v-bind:src="image" 
         v-bind:key="index"
         v-on:click="onClick"
         v-bind:style="{'--circle-x': x, '--circle-y': y}">
  </transition-group>
</template>
<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.4/vue.min.js') }}"></script>
<script src="{{ asset('vue.min.js') }}"></script>
<script>
     Vue.component('gallery', {
  template: '#gallery_template',
  props: {
    images: Array
  },
  data() {
    return {
      x: '100%',
      y: '100%'
    }
  },
  methods: {
    onClick(event) {
      const x = event.offsetX - event.target.offsetLeft
      const y = event.offsetY - event.target.offsetTop
      const xPercent = `${Math.round(100 * x / event.target.offsetWidth)}%`
      const yPercent = `${Math.round(100 * y / event.target.offsetHeight)}%`
      this.x = xPercent
      this.y = yPercent
      this.$emit('next', {x: xPercent, y: yPercent})
    }
  }
})

const vm = new Vue({
  el: '#main',
  data: {
    images: [
      'images/2.jpg',
      'images/4.jpg',
      'images/3.jpg',
      'images/5.jpg',
      'https://images.pexels.com/photos/794064/pexels-photo-794064.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260',
      'https://images.pexels.com/photos/871495/pexels-photo-871495.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260',
      'https://images.pexels.com/photos/1524105/pexels-photo-1524105.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260',
      'https://images.pexels.com/photos/1497244/pexels-photo-1497244.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
    ]
  },
   methods: {
    next() {
      const image = this.images.shift()
      this.$nextTick(() => this.images.push(image))
    }
  }
})
     
</script>
 </body>
 </html>