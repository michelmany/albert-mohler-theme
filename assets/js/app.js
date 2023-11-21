
$('.site_header .toggle, .mobile_menu .close_btn').click(function () {
	$('.mobile_menu').toggleClass('opened');
	$('.nav_menu').toggleClass('opened');
	$('.site_header .toggle').toggleClass('opened')
});

$('.mobile_menu .menu .dropdown .nav_link').click(function (e) {
	$(this).next().toggleClass('opened');
	return false;
});
$('.mobile_menu .menu .back_btn').click(function (e) {
	$(this).parent().removeClass('opened');
});

$('ul.menus li').addClass('nav_item');
$('ul.menus li a').addClass('nav_link');

$('.footer-menu ul').removeClass('menu');


// end


// end
$(document).click(function (event) {
	if (!$(event.target).closest(".site_header .toggle, .mobile_menu .inner").length) {
		$("body").find(".mobile_menu .inner").parent().removeClass("opened");
		$('.site_header .toggle').removeClass('opened');
	}
});


// var content_box = new Swiper(".content_box .slider1", {
// 	freeMode: true,
// 	slidesPerView: "auto",
// 	spaceBetween: 25,

// 	navigation: {
// 		nextEl: ".content_box .next_arrow ",
// 		prevEl: ".content_box .prev_arrow",
// 	},
// 	// pagination: {
// 	// 	el: ".hero .swiper-pagination",
// 	// },
// 	// autoplay: {
// 	// 	delay: 2000,
// 	// 	disableOnInteraction: false,
// 	// },
// });


// var content_box2 = new Swiper(".content_box .slider2", {
// 	freeMode: true,
// 	slidesPerView: "auto",
// 	spaceBetween: 25,

// 	navigation: {
// 		nextEl: ".content_box .next_arrow ",
// 		prevEl: ".content_box .prev_arrow",
// 	},
// 	// pagination: {
// 	// 	el: ".hero .swiper-pagination",
// 	// },
// 	// autoplay: {
// 	// 	delay: 2000,
// 	// 	disableOnInteraction: false,
// 	// },
// });


$('.result .head .tags .tag .close_btn').click(function () {
	$(this).parent().hide()
});



// // Player
// document.getElementById("track").load();


// /* upload audio file */
// function handleFiles(event) {
// 	var files = event.target.files;
// 	$("#track").attr("src", URL.createObjectURL(files[0]));
// 	document.getElementById("track").load();
// 	console.log(event);
// 	$("div.player").toggleClass('d-none');
// 	$(".file-upload-wrapper").toggleClass('d-none');
// }
// document.getElementById("audiofile").addEventListener("change", handleFiles, false);

// $('#track').each(function (index, audio) {
// 	$(audio).on('canplay', function () {
// 		console.log(audio.duration);
// 		$("#duration")[0].innerHTML = sec2time(audio.duration);
// 		$("#timeslieder")[0].max = audio.duration * 1000;
// 	});
// });

// /* start button */
// $("#start").click(function () {
// 	$("#track")[0].play();
// 	$(this).toggleClass('d-none');
// 	$("#pause").toggleClass('d-none');
// });
// /* pause button */
// $("#pause").click(function () {
// 	$("#track")[0].pause();
// 	$(this).toggleClass('d-none');
// 	$("#start").toggleClass('d-none');
// });
// /* reset button */
// $("#reset").click(function () {
// 	$("#track")[0].load();
// 	$("#start").toggleClass('d-none');
// 	$("#pause").toggleClass('d-none');
// });
// $(".player .play_btn").click(function () {
// 	$(this).toggleClass('active')
// });
// /* timeupdate log */
// $("#track")[0].addEventListener('timeupdate', function () {
// 	var currentTimeSec = this.currentTime;
// 	var currentTimeMs = this.currentTime * 1000;
// 	$("#currentTime")[0].innerHTML = sec2time(currentTimeSec);
// 	$("#timeslieder")[0].value = currentTimeMs;
// 	initRangeEl();
// 	var arrayTime = [sec2time(currentTimeSec), currentTimeMs];
// 	console.log(currentTimeMs);
// }, false);

// function sec2time(timeInSeconds) {
// 	var pad = function (num, size) {
// 		return ('000' + num).slice(size * -1);
// 	},
// 		time = parseFloat(timeInSeconds).toFixed(3),
// 		hours = Math.floor(time / 60 / 60),
// 		minutes = Math.floor(time / 60) % 60,
// 		seconds = Math.floor(time - minutes * 60),
// 		milliseconds = time.slice(-3);
// 	return pad(hours, 2) + ':' + pad(minutes, 2) + ':' + pad(seconds, 2);
// }


// /* timeline slieder */
// function valueTotalRatio(value, min, max) {
// 	return ((value - min) / (max - min)).toFixed(2);
// }

// function getLinearGradientCSS(ratio, leftColor, rightColor) {
// 	return [
// 		'-webkit-gradient(',
// 		'linear, ',
// 		'left top, ',
// 		'right top, ',
// 		'color-stop(' + ratio + ', ' + leftColor + '), ',
// 		'color-stop(' + ratio + ', ' + rightColor + ')',
// 		')'
// 	].join('');
// }

// function updateRangeEl(rangeEl) {
// 	var ratio = valueTotalRatio(rangeEl.value, rangeEl.min, rangeEl.max);
// 	rangeEl.style.backgroundImage = getLinearGradientCSS(ratio, 'rgba(96, 96, 54, 1)', '#fffcfc');
// }

// function initRangeEl() {
// 	var rangeEl = document.getElementById("timeslieder");
// 	updateRangeEl(rangeEl);
// 	rangeEl.addEventListener("input", function (e) {
// 		updateRangeEl(e.target);
// 	});
// }

// $("#timeslieder")[0].addEventListener("input", function (e) {
// 	updateRangeEl(e.target);
// 	this.value = e.target.value;
// 	$("#track")[0].currentTime = e.target.value / 1000;
// });












// var SKIP_s = 3;
// var v = document.querySelector('audio');
// var fw = document.querySelector('.reset_btn');
// var rw = document.querySelector('.reset_btn');

// // actually forward or rewind
// fw.addEventListener('click', () => v.fastSeek(v.currentTime + SKIP_s));
// rw.addEventListener('click', () => v.fastSeek(v.currentTime - SKIP_s));

// // only enable buttons when the video is ready
// v.addEventListener('canplay', () => fw.disabled = false, rw.disabled = false)






$('.search_bar > .btn').click(function () {
	$(this).toggleClass('active');
	$(this).parent().find('.bar').toggleClass('opened');
});

