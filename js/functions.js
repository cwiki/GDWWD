/**
 * Created by codywikman on 4/22/16.
 */



$(document).ready(function () {
    as = new animation();
    //sk = new skype(); /*Deprecated due to req, style overrides*/
    moved = false;

    /*Run on Load*/
    chromeAlert();
    scrollTriggers();
    showNavs();
    animationCycle();
    linkSlider();
    dynoCenter();
    diamondTrigger();
});

function chromeAlert() {
    if (!window.chrome) {
        as.scroll('fadeIn', 'browser-alert');
        $('#browser-alert').on('click', function (e) {
            window.open('https://www.google.com/chrome');
        });
    }
}

/*Window Scrolling Actions*/
function scrollTriggers() {
    /*Hide the Header*/
    var header = document.getElementsByTagName("HEADER");
    header[0].style.display = "none";
    window.onscroll = function (e) {
        showNavs(header);
        moved = true;
        /*Activates the animation for social links*/
        if (($('#angle-box').offset().top - window.innerHeight) <= window.scrollY)
            $('#angle-box').addClass('angle-box');

    };
}

/*Runs diamonds after load is completed*/
function diamondTrigger() {
    $("img:last").one("load", function () {
        diamond()
    }).each(function () {
        if (this.complete) $(this).load();
    });
}

/*Center of screen text*/
function dynoCenter() {
    var divs = document.getElementsByClassName('dyno-center').length;
    var vh = window.innerHeight;
    /*Loops through all of the gallery elements*/
    for (i = 0; i < divs; i++) {
        var div = document.getElementsByClassName('dyno-center')[i];
        var divH = div.offsetHeight;
        var offset = (vh - divH) / 2;
        /*add a slight adjustment for the h1*/
        if (document.getElementsByClassName('dyno-center')[i].getElementsByTagName('h1').length > 0)
            var adj = document.getElementsByClassName('dyno-center')[i].getElementsByTagName('h1')[0].offsetHeight;
        else
            var adj = 0;

        adj += 12;

        div.style.top = (offset - adj) + 'px';
    }
}

/*Processes the centering of diamond images within their divs*/
function diamond() {
    var galleryLength = document.getElementsByClassName('df-image').length;

    /*Loops through all of the gallery elements*/
    for (i = 0; i < galleryLength; i++) {

        /*Grab all of the dimensions of df-holder and df-image*/
        var image = document.getElementsByClassName('df-image')[i];
        var holder = document.getElementsByClassName('df-holder')[i];
        var imageW = image.offsetWidth;
        var imageH = image.offsetHeight;
        var holderW = holder.offsetWidth;
        var holderH = holder.offsetHeight;

        /*Check to see which dimention is greater*/
        if (imageW > imageH) {
            var offset = (imageW - holderW) / 2 * -1;
            //image.style.height = holderH + 'px';
            image.style.left = offset + 'px';

        } else {
            /*Remove Default, has to be set for image import*/
            image.style.height = 'auto';

            var offset = (imageH - holderH) / 2 * -1;
            image.style.width = holderW + 'px';
            image.style.top = offset + 'px';
        }

    }
}

/*Triggers sliding to views*/
function linkSlider() {
    $('.nav>li>a').on('click', function (e) {
        e.preventDefault();
        var ref = $(this).attr('href');
        var tar = document.getElementById(ref.substring(1));
        $('html, body').animate({
            scrollTop: tar.offsetTop
        }, 1000);

    });
}

/*Activate animations triggers*/
function animationCycle() {
    if (document.documentElement.scrollTop != 0) {
        return;
    }

    /*Set Any Variables*/
    actions = {
        'step1': ['fadeOut', 'wwdlogo', '3500'],
        'step2': ['fadeIn', 'specialty', '1000'],
        'step3': ['fadeOut', 'specialty', '4500'],
        'step4': ['fadeIn', 'stay', '1000'],
        'step5': ['fadeOut', 'stay', '4500'],
        'step9': ['fadeIn', 'wwdlogo', '1000'],
        'step6': ['fadeIn', 'email', '1000'],
        'step8': ['slide', 'biography', '2500'],
    }

    /*Scans through the actions object*/
    var delay = 0;
    var steps = Object.keys(actions);
    for (i = 0; i < Object.keys(actions).length; i++) {
        var step = actions[steps[i]];
        delay += parseFloat(step[2]);
        //console.log(delay);

        /*Create a function to lock in values*/
        (function () {
            var action = step[0];
            var id = step[1];
            setTimeout(function () {
                as.scroll(action, id);
            }, delay);

        })();


    }
}

/*Determines if the header is show or hidden*/
function showNavs() {
    var header = document.getElementsByTagName("HEADER");
    var nav = document.getElementsByTagName("NAV");

    /*offsetBottom*/
    var s2p = document.getElementById('scene').offsetTop + document.getElementById('scene').offsetHeight;

    if (window.pageYOffset > s2p - (s2p * .5)) {
        $(header[0]).fadeIn();
        $(nav).fadeIn();
    } else {
        $(header[0]).fadeOut();
        $(nav).fadeOut();
    }
}

class animation {
    constructor() {
    }

    scroll(action, id) {
        var tar = document.getElementById(id);
        switch (action) {
            case 'fadeOut':
                $(tar).fadeOut(750);
                break;
            case 'fadeIn':
                $(tar).fadeIn(750);
                break;
            case 'slide':
                if (!moved) {
                    $('html, body').animate({
                        scrollTop: tar.offsetTop
                    }, 3000);

                }
                break;
        }

    }
}

class skype {
    constructor() {
        var targ = this;
        targ.getSkype(function () {
            targ.skypeStyle();
        });
    }

    getSkype(callback) {
        Skype.ui({
            "name": "chat",
            "element": "SkypeButton_Call_cody.wiki_1",
            "participants": ["cody.wiki"]
        });
        callback();
    }

    skypeStyle() {
        this.nodeles = document.getElementById('SkypeButton_Call_cody.wiki_1');
        if (this.nodeles) {
            //console.log(this.nodeles);
            this.nodeles.childNodes[1].childNodes[0].childNodes[0].style.margin = '0';
            /*a tag*/
            this.nodeles.childNodes[1].childNodes[0].childNodes[0].style.float = 'left';
            /*image*/
            this.nodeles.childNodes[1].childNodes[0].childNodes[0].style.padding = '0.2em 0';
            /*image*/

        }
    }

}