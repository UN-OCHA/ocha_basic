// https://www.bramstein.com/writing/web-font-loading-patterns.html

var font = new FontFaceObserver('Mali');

var html = document.documentElement;

html.classList.add('fonts-loading');

font.load().then(function () {
    console.log('Font is available');
    html.classList.remove('fonts-loading');
    html.classList.add('fonts-loaded');
}).catch(function () {
    html.classList.remove('fonts-loading');
    html.classList.add('fonts-failed');
});