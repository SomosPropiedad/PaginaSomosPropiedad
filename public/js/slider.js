window.addEventListener('load', function(){
    let opciones = {
        slidesToShow: 5,
        slidesToScroll: 5,
        dots: '.dots',
        rewind: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
   
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1.5,
                    slidesToScroll: 1.5
                }
            }, {
                breakpoint: 200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
   
        ]
    };
    let opslid = {
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: '.dots',
        rewind: true,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5
   
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1.5,
                    slidesToScroll: 1.5
                }
            }, {
                breakpoint: 200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
   
        ]


    };
    slider = new Glider(document.querySelector(".lista"), opciones);
    let actual = 0;
    const conteo = slider.track.childElementCount;
    let timeout = null;
    slider.scrollItem(actual);
    function deslizar(milisegs){
        timeout = setTimeout(()=>{
            if(actual<conteo-4) actual++;
            else actual = 0;
            slider.scrollItem(actual);
        }, milisegs);
    }
    slider.ele.addEventListener("glider-animated", function(){
        actual = slider.slide;
        window.clearInterval(timeout);
        deslizar(3000);
    });



    slid = new Glider(document.querySelector(".slider"), opslid);
    let posicion = 0;
    const contador = slid.track.childElementCount;
    let time = null;
    slid.scrollItem(posicion);
    function pasar(milisegus){
        time = setTimeout(()=>{
            if(posicion<contador-5) posicion++;
            else posicion = 0;
            slid.scrollItem(posicion);
        }, milisegus);
    }
    slid.ele.addEventListener("glider-animated", function(){
        posicion  = slid.slide;
        window.clearInterval(time);
        pasar(3000);
    });



});





























 slider = new Glider(document.querySelector('.slider'), {
     slidesToShow: 5,
     slidesToScroll: 5,
     draggable: true,
     dots: '.dots',
     rewind: true,
     responsive: [{
             breakpoint: 1200,
             settings: {
                 slidesToShow: 5,
                 slidesToScroll: 5

             }
         },
         {
             breakpoint: 1100,
             settings: {
                 slidesToShow: 4,
                 slidesToScroll: 4
             }
         },
         {
             breakpoint: 800,
             settings: {
                 slidesToShow: 3,
                 slidesToScroll: 3
             }
         },
         {
             breakpoint: 575,
             settings: {
                 slidesToShow: 2,
                 slidesToScroll: 2
             }
         },
         {
             breakpoint: 400,
             settings: {
                 slidesToShow: 1.5,
                 slidesToScroll: 1.5
             }
         }, {
             breakpoint: 200,
             settings: {
                 slidesToShow: 1,
                 slidesToScroll: 1
             }
         }

     ]


 });
 let actual = 0;
 const conteo = slider.track.childElementCount;
 let time = null;
 slider.scrollItem(actual);

 function deslizar(milisegs) {
     time = setTimeout(() => {
         if (actual < conteo - 1) actual++

         else actual = 0;
         slider.scrollItem(actual);
     }, milisegs);
 }
 slider.ele.addEventListener("glider-animated", function () {
     actual = slider.slide;
     window.clearInterval(time)
     deslizar(5000)

 });
