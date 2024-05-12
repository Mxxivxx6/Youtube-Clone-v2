document.querySelectorAll('.video-he').forEach(function(link) {
    var img = link.querySelector('.thumbnail');
    var video = link.querySelector('.video');

    link.addEventListener('mouseover', function() {
        img.style.display = 'none';
        video.style.display = 'block';
        video.play();
        console.log("hehe");
    });

    link.addEventListener('mouseout', function() {
        video.pause();
        video.style.display = 'none';
        img.style.display = 'block';
    });
});