gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(TextPlugin);
gsap.registerPlugin(MotionPathPlugin);

// Initialisation de Swiper après le chargement du DOM

let swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
});
//Infolettre
gsap
  .timeline({
    scrollTrigger: {
      trigger: ".info-lettre",
      start: "top bottom",
    },
  })
  .from(".info-lettre__newsletter", { y: "-60vh", duration: 2 })
  .from(".info-lettre__send", { y: "-60vh", x: "-100vw", duration: 2 });

ScrollTrigger.refresh();

// Accordeon

// Toujours 1 accordeon ouvert
const accordionInputs = document.querySelectorAll(".services__input");

accordionInputs.forEach((input) => {
  input.addEventListener("change", () => {
    accordionInputs.forEach((i) => {
      if (i !== input) {
        i.checked = false;
      }
    });
  });
});


// 404 ERREUR
var container = document.getElementById('container');
var nullObject = document.getElementById('null-object');
var p0NullObject = document.getElementById('p0-null-object');
var p1NullObject = document.getElementById('p1-null-object');
var lineSVGNode = document.getElementById('line-svg-node');
var l0 = document.getElementById('l0');
var p0 = document.getElementById('p0');
var p1 = document.getElementById('p1');

TweenMax.set(container, {
  position: 'absolute',
  top: '50%',
  left: '50%',
  xPercent: -50,
  yPercent: -50
})

TweenMax.set([p0, p1], {
  drawSVG: '40 90',
  transformOrigin: '50% 50%'
})

TweenMax.set(lineSVGNode, {
  position: 'absolute'
})
TweenMax.set([p0, p1], {
  position: 'absolute',
  scale: 1
})

TweenMax.set(nullObject, {
  position: 'absolute',
  x: 0,
  y: 0
})
TweenMax.set(p0NullObject, {
  position: 'absolute',
  x: 0,
  y: 400
})
TweenMax.set(p1NullObject, {
  position: 'absolute',
  x: 0,
  y: 400
})

function point0Update(e) {

  //move point0
  TweenMax.set(p0, {
    attr: {
      cx: p0NullObject._gsTransform.x,
      cy: p0NullObject._gsTransform.y
    }
  })

  p0cX = p0NullObject._gsTransform.x;
  p0cY = p0NullObject._gsTransform.y;
  p1cX = p1NullObject._gsTransform.x;
  p1cY = p1NullObject._gsTransform.y;

  updateLine();

}

function point1Update(e) {

  //move point1
  TweenMax.set(p1, {
    attr: {
      cx: p1NullObject._gsTransform.x,
      cy: p1NullObject._gsTransform.y
    }
  })

  p0cX = p0NullObject._gsTransform.x;
  p0cY = p0NullObject._gsTransform.y;
  p1cX = p1NullObject._gsTransform.x;
  p1cY = p1NullObject._gsTransform.y;

  updateLine();

}

function updateLine() {
  nullX = nullObject._gsTransform.x;
  nullY = nullObject._gsTransform.y;

  TweenMax.set(l0, {
    attr: { d: "M" + p0cX + "," + p0cY + " Q" + nullX + "," + nullY + " " + p1cX + "," + p1cY }
  })


}

function initPoints() {
  TweenMax.set(p0, {
    attr: {
      cx: p0NullObject._gsTransform.x,
      cy: p0NullObject._gsTransform.y
    }
  })
  TweenMax.set(p1, {
    attr: {
      cx: p1NullObject._gsTransform.x,
      cy: p1NullObject._gsTransform.y
    }
  })
  point0Update();
  point1Update();
  updateLine();
}


var tl = new TimelineMax({ repeat: -1, repeatDelay: 2, yoyo: true });
tl.timeScale(3)

  .to(p1NullObject, 2, {
    bezier: {
      type: 'thru', values: [
        { x: 0, y: 400 }, { x: 300, y: 400 }]
    },
    ease: Power3.easeInOut,
    onUpdate: point1Update
  })
  .to(nullObject, 2, {
    x: 0,
    y: 0,
    ease: Back.easeOut,
    onUpdate: updateLine
  }, '-=2')

tl.to(p0NullObject, 2, {
  bezier: {
    type: 'cubic', values: [
      { x: 0, y: 400 }, { x: 200, y: 0 },
      { x: 400, y: 0 }, { x: 600, y: 400 }]
  },
  ease: Power4.easeInOut,
  onUpdate: point0Update
})
  .to(nullObject, 2, {
    x: 450,
    y: 0,
    ease: Back.easeIn.config(0.6),
    onUpdate: updateLine
  }, '-=2')

  .to(p1NullObject, 2, {
    bezier: {
      type: 'cubic', values: [
        { x: 300, y: 400 }, { x: 500, y: 0 },
        { x: 700, y: 0 }, { x: 900, y: 400 }]
    },
    ease: Power4.easeInOut,
    onUpdate: point1Update
  })
  .to(nullObject, 2, {
    x: 750,
    y: 0,
    ease: Back.easeOut,
    onUpdate: updateLine
  }, '-=2')

  .to(p0NullObject, 2, {
    bezier: {
      type: 'cubic', values: [
        { x: 600, y: 400 }, { x: 800, y: 0 },
        { x: 1000, y: 0 }, { x: 1200, y: 400 }]
    },
    ease: Power4.easeInOut,
    onUpdate: point0Update
  })
  .to(nullObject, 2, {
    x: 1050,
    y: 0,
    ease: Back.easeIn.config(0.3),
    onUpdate: updateLine
  }, '-=2')

  .to(p1NullObject, 2, {
    bezier: {
      type: 'cubic', values: [
        { x: 900, y: 400 }, { x: 1100, y: 0 },
        { x: 1300, y: 0 }, { x: 1500, y: 400 }]
    },
    onUpdate: point1Update
  })
  .to(nullObject, 2, {
    x: 1350,
    y: 0,
    ease: Power1.easeOut,
    onUpdate: updateLine
  }, '-=2')

  .to(p0NullObject, 2, {
    bezier: {
      type: 'thru', values: [
        { x: 1200, y: 0 }, { x: 1500, y: 0 }
      ]
    },
    ease: Power2.easeOut,
    onUpdate: point0Update
  })
  .to(nullObject, 2, {
    x: 1500,
    y: 0,
    ease: Back.easeOut.config(2),
    onUpdate: updateLine
  }, '-=2')


initPoints();