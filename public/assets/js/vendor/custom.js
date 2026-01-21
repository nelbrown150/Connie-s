(function(window, document, $, undefined) {
    'use strict';

    document.getElementById("current_year").textContent = new Date().getFullYear();

    // Minimal slider: shows 4 items, advances by 1 every 2500ms, seamless loop via cloning
    window.addEventListener('load', function(){
        const track = document.querySelector('.clientes-track');
        if(!track) return;
        const visible = 3;
        const speed = 2500;
        const items = Array.from(track.children);
        const total = items.length;
        // clone first 'visible' items to allow seamless loop
        for(let i=0;i<visible;i++){ track.appendChild(items[i].cloneNode(true)); }
        let index = 0;
        const stepPercent = 100 / visible;
        // ensure item flex-basis set (in case CSS loads later)
        Array.from(track.children).forEach(function(it){ it.style.flex = '0 0 ' + (100/visible) + '%'; it.style.maxWidth = (100/visible) + '%'; });
        let animating = false;
        setInterval(function(){
            if(animating) return;
            animating = true;
            index++;
            track.style.transition = 'transform .6s ease';
            track.style.transform = 'translateX(-' + (index * stepPercent) + '%)';
            track.addEventListener('transitionend', function handler(){
                animating = false;
                if(index >= total){
                    // reset to start without animation
                    track.style.transition = 'none';
                    index = 0;
                    track.style.transform = 'translateX(0)';
                }
                track.removeEventListener('transitionend', handler);
            });
        }, speed);
    });
})(window, document, jQuery);