<style>
ul {
  list-style-type: none;
}

a {
  text-decoration: none !important;
}

h1 {
  color: #ff6363;
  font-weight: bold;
}

p {
  font-size: 20px;
  color: #484848;
}

.section {
  text-align: center;
}

.skillbar {
  cursor: pointer;
}

.hide {
  display: none;
}

.display {
  display: block;
}

/* flash alert styles */

.flash-container {
  width: 100%;
  position: fixed;
  z-index: 700;
  padding-top: 20px;
  font-weight: bold;
}

.alert {
  text-align: center !important;
  width: 500px !important;
  margin-left: auto !important;
  margin-right: auto !important;
  color: #211809 !important;
}

/* Nav Screen */

.nav-screen {
  height: 100%;
  z-index: 500;
  position: fixed;
  background-color: #000;
  opacity: 1;
  right: -285px; /* start off behind the scenes */
  -webkit-font-smoothing: antialiased;
  position: fixed;
  width: 285px;
}

.nav-screen .active {
  display: block;
}

/* nav header links */

.nav-brand {
  position: fixed;
  left: 0;
  z-index: 600;
  padding: 10px;
}

.nav-brand img {
  width: 50px;
}

.fa-bars {
  display: none !important;
  color: #ff6363;
  float: right;
  padding: 20px;
  position: fixed;
  right: 0;
  z-index: 500;
  cursor: pointer;
}

.fa-times {
  color: #ff6363;
  float: right;
  padding: 20px;
  right: 0;
  z-index: 600;
  cursor: pointer;
}

.header-links {
  position: fixed;
  width: 100%;
  z-index: 500;
}

.header-links li {
  color: white;
  display: inline;
  float: right;
  padding: 15px;
  font-size: 16px;
}

.header-links a {
  color: #757575;
  -webkit-transition: all 0.2s ease-in;
}

.header-links a:hover {
  color: #ff6363 !important;
}

/* slide out nav menu styles */

.nav-container {
  padding-top: 10%;
}

.nav-links {
  width: 250px;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}

.nav-links ul {
  margin-top: 15%;
  text-align: center;
  padding-top: 10%;
}

.nav-links a {
  color: #ffffff;
  font-size: 30px;
  line-height: 2.5;
  font-weight: bold;
  text-decoration: none;
  margin-left: auto;
  margin-right: auto;
}

.nav-links a:hover {
  color: #ff6363;
  -webkit-transition: all 0.6s ease-in-out;
  -o-transition: all 0.6s ease-in-out;
  -ms-transition: all 0.6s ease-in-out;
  -moz-transition: all 0.6s ease-in-out;
  transition: all 0.6s ease-in-out;
}

#fp-nav ul li .fp-tooltip {
  color: #5f5f5f !important;
}

/* Expanding border effect */

.header-links a::after {
  display: block;
  margin: 0 auto;
  margin-top: 5px;
  width: 0;
  height: 2px;
  background-color: #fff;
  content: "";
  opacity: 0;
  -webkit-transition: width 0.6s, opacity 0.8s;
  -moz-transition: width 0.6s, opacity 0.8s;
  transition: width 0.6s, opacity 0.8s;
}

.header-links a:hover::after,
.header-links a:focus::after {
  opacity: 1;
  width: 100%;
}

/* main header section */

.opaque-bg {
  margin-left: auto;
  margin-right: auto;
  max-width: 380px;
  padding: 1px 1px 5px 5px;
}

.aboutme {
  background: url("https://s3-us-west-2.amazonaws.com/files.bradengelhardt.com/brad-bg-main.jpg")
    no-repeat;
  background-size: cover;
}

.aboutme p {
  color: white;
  font-weight: 100;
  font-size: 17.4px;
}

/* bouncing arrow */

.fa-chevron-down {
  color: #ff6363 !important;
  bottom: 10px;
  margin-left: -30px;
  cursor: pointer;
  position: absolute;
  opacity: 0;
  -webkit-transition: 1.2s ease;
}

/* Scroll down indicator (bouncing) */

@-webkit-keyframes bounce {
  0%,
  20%,
  50%,
  80%,
  100% {
    -webkit-transform: translateY(0);
    transform: translateX(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  60% {
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}

@-moz-keyframes bounce {
  0%,
  20%,
  50%,
  80%,
  100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-30px);
  }
  60% {
    transform: translateY(-15px);
  }
}

@keyframes bounce {
  0%,
  20%,
  50%,
  80%,
  100% {
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -ms-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  60% {
    -ms-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}

.bounce {
  -webkit-animation: bounce 2s infinite;
  animation: bounce 2s infinite;
}

/* about section */

/* Skill bars */

.container-skillbar {
  width: 100%;
  padding-top: 30px;
  padding-right: 2%;
  padding-left: 2%;
  height: auto;
  overflow: none;
}
.skillbar {
  position: relative;
  display: block;
  margin-bottom: 15px;
  width: 100%;
  background: #efefef;
  height: 30px;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  -webkit-transition: 0.4s linear;
  -moz-transition: 0.4s linear;
  -ms-transition: 0.4s linear;
  -o-transition: 0.4s linear;
  transition: 0.4s linear;
  -webkit-transition-property: width, background-color;
  -moz-transition-property: width, background-color;
  -ms-transition-property: width, background-color;
  -o-transition-property: width, background-color;
  transition-property: width, background-color;
}

.skillbar-title {
  position: absolute;
  top: 0;
  left: 0;
  width: 110px;
  font-weight: bold;
  font-size: 13px;
  color: #fff;
  background: #6adcfa;
  -webkit-border-top-left-radius: 3px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-topleft: 3px;
  -moz-border-radius-bottomleft: 3px;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}

.skillbar-title span {
  display: block;
  background: rgba(0, 0, 0, 0.15);
  padding: 0 20px;
  height: 30px;
  line-height: 30px;
  -webkit-border-top-left-radius: 3px;
  -webkit-border-bottom-left-radius: 3px;
  -moz-border-radius-topleft: 3px;
  -moz-border-radius-bottomleft: 3px;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}

.skillbar-bar {
  height: 30px;
  width: 0px;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
}

.skill-bar-percent {
  position: absolute;
  right: 10px;
  top: 0;
  font-size: 11px;
  height: 30px;
  line-height: 30px;
  color: #ffffff;
  color: rgba(0, 0, 0, 0.5);
}

/* portfolio section */

.content {
  margin-left: auto;
  margin-right: auto;
  max-width: 800px;
}

.content-slide {
  margin-left: auto;
  margin-right: auto;
  max-width: 800px;
}

.content-slide img {
  width: 70%;
}

.fp-controlArrow.fp-next {
  border-color: transparent transparent transparent #ff6363 !important;
  right: 45px !important;
}

.fp-controlArrow.fp-prev {
  border-color: transparent #ff6363 transparent transparent !important;
  left: 45px !important;
}

#fp-nav ul li a span,
.fp-slidesNav ul li a span {
  background: rgba(0, 0, 0, 0.62) !important;
}

/* contact us styles */

.fa-paper-plane {
  color: #484848;
}

/* paper plane shake on hover */

.plane-animated {
  animation-duration: 6s;
  animation-fill-mode: both;
  animation-iteration-count: infinite;
  animation-play-state: paused;
}

.fa-paper-plane:hover {
  /* Toggle our animation play state to running when we are hovering over our sticker */
  animation-play-state: running;
}

@keyframes shake {
  0%,
  100% {
    transform: translateX(0);
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    transform: translateX(-10px);
  }
  20%,
  40%,
  60%,
  80% {
    transform: translateX(10px);
  }
}
.shake {
  animation-name: shake;
}

/* input field styles */

.contact-form {
  padding: 0px 15px 0px 15px;
}

.form-control {
  border: 2px solid rgba(0, 0, 0, 0.27);
  width: 100%;
  max-width: 100%;
  height: 3em;
  font-size: 16px;
  padding: 1em;
  margin: 0.5em 0 2em 0;
  font-weight: bold;
}

textarea {
  min-height: 10em;
}

label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 500;
}

#submit {
  outline: none;
  padding: 12px;
  min-width: 200px;
  border-radius: 2px;
  border: 2px solid #ff6363;
  text-align: center;
  font-size: 1em;
  color: #ff6363;
  background-color: white;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: bold;
}

#submit:hover {
  background-color: #ff6363;
  color: white;
  -webkit-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

/* footer styles */

.footer {
  background-color: #484848;
  height: 100px;
  padding-top: 10px;
}

.footer p {
  color: white;
  font-weight: bold;
  font-size: 16px;
}

.social-links a {
  color: white;
  padding: 0px 5px 0px 5px;
}

.social-links a:hover {
  color: #ff6363;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

/* smaller resolution styles */

@media (min-width: 100px) and (max-width: 500px) {
  .fa-bars {
    display: block !important;
  }

  .header-links {
    display: none;
  }
}

/* mobile styles */

@media (min-width: 100px) and (max-width: 400px) {
  .content {
    max-width: 300px;
  }

  .aboutme h1 {
    font-size: 28px;
  }
}

/* loading screen animation */

.spinner {
  position: fixed;
  width: 100%;
  height: 100%;
  padding: 25%;
  background-color: #2f2f2f;
  text-align: center;
  font-size: 10px;
  z-index: 1000;
}

.spinner > div {
  background-color: #ff6363;
  height: 100%;
  width: 6px;
  display: inline-block;

  -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
  animation: sk-stretchdelay 1.2s infinite ease-in-out;
}

.spinner .rect2 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}

.spinner .rect3 {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}

.spinner .rect4 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}

.spinner .rect5 {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}

@-webkit-keyframes sk-stretchdelay {
  0%,
  40%,
  100% {
    -webkit-transform: scaleY(0.4);
  }
  20% {
    -webkit-transform: scaleY(1);
  }
}

@keyframes sk-stretchdelay {
  0%,
  40%,
  100% {
    transform: scaleY(0.4);
    -webkit-transform: scaleY(0.4);
  }
  20% {
    transform: scaleY(1);
    -webkit-transform: scaleY(1);
  }
}

.blinking-cursor {
  font-weight: 500;
  margin-left: 4px;
  font-size: 20px;
  color: white !important;
  -webkit-animation: 1s blink step-end infinite;
  -moz-animation: 1s blink step-end infinite;
  -ms-animation: 1s blink step-end infinite;
  -o-animation: 1s blink step-end infinite;
  animation: 1s blink step-end infinite;
}

@keyframes "blink" {
  from,
  to {
    color: transparent;
  }
  50% {
    color: white;
  }
}

@-moz-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: white;
  }
}

@-webkit-keyframes "blink" {
  from,
  to {
    color: transparent;
  }
  50% {
    color: white;
  }
}

@-ms-keyframes "blink" {
  from,
  to {
    color: transparent;
  }
  50% {
    color: white;
  }
}

@-o-keyframes "blink" {
  from,
  to {
    color: transparent;
  }
  50% {
    color: white;
  }
}

.success {
  padding: 1em;
  margin-bottom: 0.75rem;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  color: #468847;
  background-color: #dff0d8;
  border: 1px solid #d6e9c6;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.error {
  padding: 1em;
  margin-bottom: 0.75rem;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  color: #b94a48;
  background-color: #f2dede;
  border: 1px solid rgba(185, 74, 72, 0.3);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}


@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

:root {
  --font: "Montserrat", sans-serif;

  --font-color: #1c1c1c;

  --bg-color: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
  --bg-card: #ecf4ff;
  --bg-projetc: rgba(192, 192, 192, 0.6);

  --grey: #44475a;
  --orange: #ffb86c;
  --purple: #bd93f9;
}

/*===== Body =====*/

body {
  background: var(--bg-color) no-repeat;
  background-size: auto;
  font-family: var(--font);
  height: 100vh;
}

.centered {
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}

.container {
  width: 600px;
  background: var(--bg-card);
  color: var(--title-color);

  padding: 3rem;

  border-radius: 20px;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
  display: block;
}

/*===== Header =====*/
.perfil {
  display: flex;
  align-items: center;
}

.perfil > img {
  max-width: 10rem;
  max-height: 10rem;
  border-radius: 50%;
  box-shadow: 0px 0px 21px 2px rgba(0, 0, 0, 0.2);
}

.title {
  margin-left: 1rem;
}

.title h1 {
  font-weight: bolder;
  font-size: 1.8rem;
}

.title h3 {
  font-weight: 400;
  font-size: 1rem;
}

.title p {
  font-weight: 400;
  font-size: 0.8rem;
  color: #949494;
  margin-bottom: 0.3rem;
}

/*==== texto animado ===== */
.line-1 {
  position: relative;
  top: 50%;
  width: 28em;
  border-right: 2px solid rgba(255, 255, 255, 0.75);
  font-size: 0.8rem;
  color: var(--grey);
  white-space: nowrap;
  overflow: hidden;
  font-weight: 400;
  transform: translateY(-50%);
}

/* Animation */
.anim-typewriter {
  animation: typewriter 4s steps(44) 1s 1 normal both,
    blinkTextCursor 500ms steps(44) infinite normal;
}

@keyframes typewriter {
  from {
    width: 0;
  }
  to {
    width: 28em;
  }
}

@keyframes blinkTextCursor {
  from {
    border-right-color: rgba(255, 255, 255, 0.75);
  }
  to {
    border-right-color: transparent;
  }
}

@keyframes caret {
  0%,
  100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}

/*===== Icons ===== */
.lista-links {
  color: var(--title-color);
}

.link-icon {
  text-decoration: none;
  font-size: 1.3rem;
  color: var(--purple);
  transition: color 0.2s;
}

.link-icon:hover {
  color: var(--orange);
}

/*===== Projetos =====*/
.projetos {
  margin-top: 1rem;
}

.container-projetos {
  padding: 1.1rem 1rem;
  background: var(--bg-projetc);
  /*box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2);*/
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
}

.container-projetos h4 {
  font-size: 1.1rem;
  margin-bottom: 1rem;
}

.container-projetos ol {
  margin-left: 1rem;
  color: var(--title);
}

.container-projetos li {
  font-size: 0.9rem;
}

.container-projetos a {
  text-decoration: none;
  font-size: 0.9rem;
  color: var(--title);
}

.container-projetos a:hover {
  color: var(--purple);
}

.container-projetos li:hover {
  color: var(--purple);
}

</style>


<x-app-layout>
<div class="container mx-auto px-6 py-8">
    <header class="perfil">
     
      <img 
                    src="/images/{{ auth()->user()->profile }}"
                    alt="Your avatar">
      <div class="title">
        <h1>{{auth()->user()->name}}</h1>
        <h3>{{auth()->user()->email}}</h3>
        <p> Rol : <b>
                    @foreach(auth()->user()->roles as $role)
                        {{ $role->name }}
                    @endforeach 
                </b> </p>

        <!-- Icons -->
        <a title="Codepen" class="link-icon" target="_blank" href="https://codepen.io/golin">
          <i class="fab fa-codepen"></i>
        </a>

        <a title="GitHub" class="link-icon" target="_blank" href="https://github.com/lgolin">
          <i class="fab fa-github-square"></i>
        </a>

        <a title="Linkedin" class="link-icon" target="_blank" href="https://www.linkedin.com/in/laisgolin/">
          <i class="fab fa-linkedin"></i>
        </a>

        <a title="Twitter" class="link-icon" target="_blank" href="https://twitter.com/laisgolin">
          <i class="fab fa-twitter-square"></i>
        </a>
      </div>
    </header>

    <!-- estrutura do projeto -->
   
  </div>


   
@yield('js')
</x-app-layout>