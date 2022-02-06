<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://kit.fontawesome.com/fef63b5107.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>

<script>

    $(function(){
        var scroll = $(document).scrollTop();
        var navHeight = $('.navigation').outerHeight();
        
        var data = {
            "english":
            {
                "name": "English",
                "title":"World's Number 1 entrusted services app",
                "Description":"Download our Apps for an awesome experience.",
                "logo": "https://www.countryflags.io/us/flat/32.png",
                "title2": "Why Choose Us",
                "Description2": "Open an online shop and buy and sell in our app.",
                "Description6": "Guaranteed with the simplicity and efficiency of the app." ,
                "title3": "Shop List",
                "Description3": "Open an online shop and buy and sell in our app. Guaranteed with the simplicity and efficiency of the App.",
                "title4": "HOW TO USE OUR APP",
                "Description4": "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expand the actual teachings of the great explorer of",
                "Description5": "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I",
                "title5":"Contact Us",
                "title6":"Connect With Us",
                "title7":"Download the APP",
                "title8":"Language",
                "title9": "Our Services",
            },
            "indonesia":
            {
                "name": "Indonesia",
                "title":"Aplikasi Jasa Titip nomor 1 di dunia",
                "Description":"Download Aplikasi kami untuk pengalaman yang luar biasa.",
                "logo": "https://www.countryflags.io/id/flat/32.png",
                "title2": "Kenapa pilih Kami",
                "Description2": "Buka toko online dan jual-beli dalam app kami.",
                "Description6": "Dijamin dengan kesederhanaan dan efisiensi app." ,
                "title3": "List Toko",
                "Description3": "Buka toko online dan jual-beli dalam app kami. Dijamin dengan kesederhanaan dan efisiensi App.",
                "title4": "Cara Menggunakan APP Kami",
                "Description4": "Tetapi saya harus menjelaskan kepada Anda bagaimana semua gagasan keliru tentang mencela kesenangan dan memuji rasa sakit ini lahir dan saya akan memberi Anda penjelasan lengkap tentang sistem ini, dan memperluas ajaran sebenarnya dari penjelajah besar dunia.",
                "Description5": "Tetapi saya harus menjelaskan kepada Anda bagaimana semua gagasan keliru tentang mencela kesenangan dan memuji rasa sakit ini lahir dan saya",
                "title5":"Hubungi Kami",
                "title6":"Cari tau berita terbaru",
                "title7":"Unduh Aplikasi",
                "title8":"Bahasa",
                "title9": "Service Kita",
            }
        }
        
        const link = document.querySelectorAll('a');
        const titleEl = document.querySelector('.title');
        const descriptionEl = document.querySelector('.Description');
        const title2 = document.querySelector('.title2');
        const description2 = document.querySelector('.description2');
        const description6 = document.querySelector('.description6');
        const title9 = document.querySelector('#title9');
        const title4 = document.querySelector('#title4');
        const title3 = document.querySelector('.title3');
        const title5 = document.querySelector('.title5');
        const title6 = document.querySelector('.title6');
        const title7 = document.querySelector('.title7');
        const title8 = document.querySelector('.title8');
        const description3 = document.querySelectorAll('.Description3');
        const description4 = document.querySelectorAll('.Description4');
        const description5 = document.querySelectorAll('.Description5');
        
        const nameEl = document.querySelector('.name-lang');
        const logoEl = document.querySelector('.menu-image');
        
        link.forEach(el =>{
            el.addEventListener('click', ()=>{
                const attr = el.getAttribute('language')
                
                titleEl.textContent = data[attr].title;
                descriptionEl.textContent=data[attr].Description;
                nameEl.textContent = data[attr].name;
                title2.textContent = data[attr].title2;
                description2.textContent = data[attr].Description2;
                description6.textContent = data[attr].Description6;
                title9.textContent = data[attr].title9;
                title3.textContent = data[attr].title3;
                title4.textContent = data[attr].title4;
                title5.textContent = data[attr].title5;
                title6.textContent = data[attr].title6;
                title7.textContent = data[attr].title7;
                title8.textContent = data[attr].title8;
                logoEl.src = data[attr].logo;
                for (i = 0; i < description3.length; i++) {
                  description3[i].textContent = data[attr].Description3;
                }
                for (i = 0; i < description4.length; i++) {
                  description4[i].textContent = data[attr].Description4;
                }
                for (i = 0; i < description5.length; i++) {
                  description5[i].textContent = data[attr].Description5;
                }
                title4.textContent = data[attr].title4;
                title4.textContent = data[attr].title4;
                title4.textContent = data[attr].title4;
            });
        });
        
        $(window).scroll(function(){
            var scrolled = $(document).scrollTop();
            
            if(scrolled > navHeight){
                $('.navigation').addClass('animate');
            }else{
                $('.navigation').removeClass('animate');
            }
            
            if(scrolled > scroll){
                $('.navigation').removeClass('sticky');
            }else{
                $('.navigation').addClass('sticky');
            }
            scroll = $(document).scrollTop();
        });
        
        window.sr = ScrollReveal();
        
        sr.reveal('.animate-left',{
            origin:'left',
            duration: 1000,
            distance:'25rem',
            reset:true,
            delay: 300,
        });
        
        sr.reveal('.animate-right',{
            origin:'right',
            duration: 1000,
            distance:'25rem',
            reset:true,
            delay: 300,
        });
        
        sr.reveal('.animate-right1',{
            origin:'right',
            duration: 1000,
            distance:'25rem',
            delay: 300,
        });
        
        sr.reveal('.animate-left1',{
            origin:'left',
            duration: 1000,
            distance:'25rem',
            delay: 300,
        });
        
        sr.reveal('.animate-title',{
            origin:'bottom',
            duration: 1000,
            distance:'25rem',
            delay: 300,
        });
        
        sr.reveal('.animate-top',{
            origin:'top',
            duration: 1000,
            distance:'15rem',
            reset:true,
            delay: 300,
        });
        
        sr.reveal('.animate-bottom',{
            origin:'bottom',
            duration: 1000,
            delay: 200,
            reset:true,
            distance:'10rem',
        });
        
    });

</script>