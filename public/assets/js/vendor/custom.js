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

    // google maps
    window.initMap = function() {
    // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -11.8732434, lng: -77.1257196},
            zoom: 16,
            scrollwheel:  false,
            navigationControl: false,
            mapTypeControl: false,
            scaleControl: false,
        styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
            },
            {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
            },
            {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#263c3f'}]
            },
            {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#6b9a76'}]
            },
            {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#38414e'}]
            },
            {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{color: '#212a37'}]
            },
            {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9ca5b3'}]
            },
            {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#746855'}]
            },
            {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#1f2835'}]
            },
            {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#f3d19c'}]
            },
            {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{color: '#2f3948'}]
            },
            {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
            },
            {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#17263c'}]
            },
            {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#515c6d'}]
            },
            {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#17263c'}]
            }
        ]
        });

        // Agregar marcador en la ubicación
        var marker = new google.maps.Marker({
            position: {lat: -11.8732434, lng: -77.1257196},
            map: map,
            title: 'Dr. Yohann Antonio Alcala Alvarado - Av Pedro Beltran 175, Ventanilla'
        });
    }

    // Ajusta la variable CSS con la altura real del header y maneja clicks en anclas
    document.addEventListener('DOMContentLoaded', function () {
        var header = document.querySelector('.axil-header');
        var root = document.documentElement;
        if (header && root) {
            var h = header.offsetHeight + 10; // margen extra
            root.style.setProperty('--axil-header-offset', h + 'px');
        }

        // Captura clicks en enlaces internos y aplica scroll con offset
        document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                var href = this.getAttribute('href');
                if (!href || href === '#') return;
                var target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    // Recalcular altura del header justo antes del scroll (por si cambia el estado del header)
                    if (header) {
                        var hNow = header.offsetHeight + 10;
                        root.style.setProperty('--axil-header-offset', hNow + 'px');
                    }
                    var offset = parseInt(getComputedStyle(root).getPropertyValue('--axil-header-offset')) || (header ? header.offsetHeight + 10 : 120);
                    var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
                    window.scrollTo({ top: top, behavior: 'smooth' });
                    try { history.pushState(null, '', href); } catch (err) {}
                }
            }, false);
        });

        // Fallback: si el enlace contiene un fragmento pero NO empieza por '#',
        // forzamos la navegación (útil cuando estamos en otra página como /experiencia)
        document.addEventListener('click', function(e){
            var a = e.target.closest && e.target.closest('a');
            if(!a) return;
            var href = a.getAttribute('href') || '';
            if(href.indexOf('#') > -1 && !href.startsWith('#')){
                var hash = href.substring(href.indexOf('#'));
                var target = document.querySelector(hash);
                if(!target){
                    // Forzamos navegación a la URL (permite que el browser cargue /#fragment)
                    e.preventDefault();
                    window.location.href = href;
                }
            }
        }, false);

        // Si se carga la página con hash, desplazar con offset
        if (window.location.hash) {
            var target = document.querySelector(window.location.hash);
            if (target) {
                var offset = parseInt(getComputedStyle(root).getPropertyValue('--axil-header-offset')) || 120;
                var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo(0, top);
            }
        }
    });

})(window, document, jQuery);