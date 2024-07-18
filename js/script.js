let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.add('active');
}

document.querySelector('#nav-close').onclick = () =>{
    navbar.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.add('active');
}

document.querySelector('#close-search').onclick = () =>{
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');

    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active');
    }else{
        document.querySelector('.header').classList.remove('active');
    }
};

function CreateEmailAddress()
{
var x = 'gotrek22&gmail*c_o_m'
var y = 'mai'
var z = 'lto'
var s = '?subject=Customer Inquiry'
x = x.replace('&','@')

x = x.replace('*','.')
x = x.replace('_','')
x = x.replace('_','')
var b = y + z +':'+ x + s
window.location=b
}

window.onload = () =>{
    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active');
    }else{
        document.querySelector('.header').classList.remove('active');
    }
};


var swiper = new Swiper(".home-slider", {
    loop:true, 
    grabCursor:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".product-slider", {
    loop:true, 
    grabCursor:true,
    spaceBetween: 20,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
    },
});

var swiper = new Swiper(".review-slider", {
    loop:true, 
    grabCursor:true,
    spaceBetween: 20,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".blogs-slider", {
    loop:true, 
    grabCursor:true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        991: {
          slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".clients-slider", {
    loop:true, 
    grabCursor:true,
    spaceBetween: 20,
    breakpoints: {
        0: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
    },
});





var refJSON = {"isPreview":false,"greetingEnabled":true,"greetingTitle":"Message Us","greetingMessage":"Hello, how may we help you? Just send us a message now to get assistance.","position":"right","verticalOffset":0,"horizontalOffset":0,"displayMode":"everywhere","primaryColor":"#57A580","isDefaultMainCBImage":true,"mainCBImage":"https://app.getchatbutton.com/assets/cb/cb/main-transparent.png","bottomLabel":null,"callToAction":"Contact Us Now","greetingIcon":"https://app.getchatbutton.com/assets/cb/cb/empty-avatar.png","items":[{"name":"WhatsApp","slug":"whatsapp","target":"+919004726795","color":"#42AF39","faName":["fab","whatsapp"],"link":"https://wa.me/","placeholder":"Phone number (e.g. +1 123456789)","showInputHint":false}],"env":"production"}
var baseURL = "https://static.getchatbutton.com"

function loadCB() {

  var rootDiv = document.createElement("div")
  rootDiv.id = "oursky-cb"
  document.body.appendChild(rootDiv)

  var fbRoot = document.createElement("div")
  fbRoot.id = "fb-root"
  fbRoot.style.opacity = "0"
  document.body.appendChild(fbRoot)

  var fbCustomerChat = document.createElement("div")
  fbCustomerChat.id = "fb-customer-chat"
  fbCustomerChat.classList.add("fb-customerchat")
  document.body.appendChild(fbCustomerChat)

  if (!document.getElementById("facebook-jssdk")) {
    var script = document.createElement("script")
    script.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js"
    script.crossOrigin = "anonymous"
    document.body.appendChild(script)
  }


  fetch(baseURL + '/asset-manifest.json')
    .then(function (response) { return response.json() })
    .then(function (data) {

      const entryPoints = data.entrypoints
      entryPoints.forEach(function (entryPoint) {
        var url = baseURL + '/' + entryPoint
        if (url.endsWith(".js")) {
          var script = document.createElement("script")
          script.src = url
          document.body.appendChild(script)
        } else if (url.endsWith(".css")) {
          var stylesheet = document.createElement("link")
          stylesheet.href = url
          stylesheet.rel = "stylesheet"
          document.head.appendChild(stylesheet)
        }
      })
      // console.log("[cb] script loaded")
    })
    .catch(function (error) {
      console.error("[cb] unable to load GetChatButton from manifest")
    })
}

if (document.readyState !== 'complete') {
  window.addEventListener('load', loadCB)
} else {
  loadCB()
}
    
