/* default dom id (particles-js) */
//particlesJS();

/* config dom id */
//particlesJS('dom-id');

/* config dom id (optional) + config particles params */
particlesJS('particles-js', {
  particles: {
    color: '#333',
    color_random: true,
    shape: 'circle', // "circle", "edge" or "triangle"
    opacity: {
      opacity: 0.8,
      anim: {
        enable: true,
        speed: 2.0,
        opacity_min: 0,
        sync: false
      }
    },
    size: 4,
    size_random: true,
    nb: 150,
    line_linked: {
      enable_auto: false,
      distance: 80,
      color: '#D64541',
      opacity: 0.6,
      width: 0.5,
      condensed_mode: {
        enable: false,
        rotateX: 700,
        rotateY: 600
      }
    },
    anim: {
      enable: true,
      speed: 1
    }
  },
  interactivity: {
    enable: true,
    mouse: {
      distance: 200
    },
    detect_on: 'window', // "canvas" or "window"
    mode: 'grab', // "grab" or false
    line_linked: {
      opacity: 1
    },
    events: {
      onclick: {
        enable: true,
        mode: 'push', // "push" or "remove"
        nb: 4
      },
      onresize: {
        enable: true,
        mode: 'bounce', // "out" or "bounce"
        density_auto: false,
        density_area: 800 // nb_particles = particles.nb * (canvas width *  canvas height / 1000) / density_area
      }
    }
  },
  /* Retina Display Support */
  retina_detect: true
});