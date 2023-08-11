@extends('halamanDepan.index')

@section('home')
<style>
	body {
    font-family: sans-serif;
    background-color: #81d4fa;
    font-weight: bold;
}

.text-box {
    margin-left: 44vw;
   margin-top: 42vh;
}

.btn:link,
.btn:visited {
    text-transform: uppercase;
    text-decoration: none;
    padding: 15px 40px;
    display: inline-block;
    border-radius: 100px;
    transition: all .2s;
    position: absolute;
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
    transform: translateY(-1px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn-white {
    background-color: #fff;
    color: #777;
}

.btn::after {
    content: "";
    display: inline-block;
    height: 100%;
    width: 100%;
    border-radius: 100px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all .4s;
}

.btn-white::after {
    background-color: #fff;
}

.btn:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}

.btn-animated {
    animation: moveInBottom 5s ease-out;
    animation-fill-mode: backwards;
}

@keyframes moveInBottom {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }

    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}
</style>

	<div class="row mt-5">
		<div class="col-sm-6">
			<h1 class="title-utama">Selamat datang di Elite Motor Enthusiasts!</h1>
			<p class="title-kedua">Kami adalah tempat berkumpulnya pecinta motor berkelas dan berkualitas.</p>
			 <a href="#" class="btn btn-white btn-animate">Here</a>
		</div>
		<div class="col-sm-6 mx-auto" >
			
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<script>
    var textWrapper = document.querySelector('.title-utama');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
    .add({
      targets: '.title-utama .letter',
      translateX: [0,0],
      translateZ: 0,
      opacity: [0,1],
      easing: "easeOutExpo",
      duration: 2500,
      delay: (el, i) => 100 + 50 * i
    }).add({
      targets: '.title-utama .letter',
      translateX: [0,-30],
      opacity: [1,0],
      easing: "easeInExpo",
      duration: 3000,
      delay: (el, i) => 100 + 50 * i
    });
  </script>
@endsection