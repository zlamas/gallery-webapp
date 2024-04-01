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
		tap(e) {
			$book.turn('toggleZoom', { pageX: e.pageX, pageY: e.pageY });
		},
		turned(e, page) {
			if (page == 1) $book.turn('peel', 'br');
		},
		turning(e, page, view) {
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

document.addEventListener('touchstart', () => audioContext.resume(), { once: true });

document.getElementById('arrow-first')
	.addEventListener('click', () => $book.turn('page', 1));
document.getElementById('arrow-prev')
	.addEventListener('click', () => $book.turn('previous'));
document.getElementById('arrow-next')
	.addEventListener('click', () => $book.turn('next'));
document.getElementById('arrow-last')
	.addEventListener('click', () => $book.turn('page', totalPages));

document.getElementById('total-pages').textContent = pageInput.max = totalPages = $book.turn('pages');

pageInput.addEventListener('blur', function() {
	$book.turn('page', this.value);
	this.value = '';
});

document.getElementById('page-selector').addEventListener('submit', event => {
	event.preventDefault();
	pageInput.blur();
});
});
