jQuery(($) => {
'use strict';
let $book = $('#book').show();
let arrowsLeft = document.getElementById('arrows-left');
let arrowsRight = document.getElementById('arrows-right');
let pageNumber = document.getElementById('page-number');
let pageInput = document.getElementById('page-input');
let audioContext = new AudioContext();
let totalPages;
let sample;

function playSound() {
	let source = audioContext.createBufferSource();
	source.buffer = sample;
	source.connect(audioContext.destination);
	source.start();
}

fetch('res/page-flip.' + (new Audio().canPlayType('audio/ogg;codecs=opus') ? 'opus' : 'mp3'))
.then((response) => response.arrayBuffer())
.then((buffer) => audioContext.decodeAudioData(buffer))
.then((data) => sample = data);

$book.turn({
	animatedAutoCenter: true,
	autoScaleContent: true,
	pageHeight: 750,
	pageWidth: 500,
	responsive: true,
	when: {
		first() {
			pageNumber.textContent = 1;
			arrowsLeft.classList.add('disabled');
		},
		last() {
			pageNumber.textContent = totalPages;
			arrowsRight.classList.add('disabled');
		},
		tap(event) {
			$book.turn('toggleZoom', event);
		},
		turned(event, page) {
			if (page == 1) $book.turn('peel', 'br');
		},
		turning(event, page, view) {
			pageNumber.textContent = view.join(' - ');
			arrowsLeft.classList.remove('disabled');
			arrowsRight.classList.remove('disabled');
			playSound();
		},
		resize() {
			if ($book.turn('zoom') == 1) {
				let page = $book.turn('page');
				if (page > 1 && page < totalPages) {
					pageNumber.textContent = $book.turn('view').join(' - ');
				}
				$book.css('font-size', $book.height() / 40 + 'px');
			}
		}
	}
}).turn('peel', 'br');

document.getElementById('total-pages').textContent = pageInput.max = totalPages = $book.turn('pages');

document.addEventListener('touchstart', () => audioContext.resume(), { once: true });

document.getElementById('arrow-first')
	.addEventListener('click', () => $book.turn('page', 1));
document.getElementById('arrow-prev')
	.addEventListener('click', () => $book.turn('previous'));
document.getElementById('arrow-next')
	.addEventListener('click', () => $book.turn('next'));
document.getElementById('arrow-last')
	.addEventListener('click', () => $book.turn('page', totalPages));

pageInput.addEventListener('blur', () => {
	$book.turn('page', pageInput.value);
	pageInput.value = '';
});

document.getElementById('page-selector').addEventListener('submit', (event) => {
	event.preventDefault();
	pageInput.blur();
});
});
