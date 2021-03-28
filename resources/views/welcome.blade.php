<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
    </head>
    <body >
        <header>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg  bg-transparent">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav ml-auto">
          <a class="nav-link " href="#">Whatapp</a>
          <a class="nav-link" href="#">Instagram</a>
          <a class="nav-link" href="#">Facebook</a>
          <a class="nav-link disabled" href="#" >help?</a>
        </div>
      </div>
    </nav>
    <!-- /navigasi -->
    <!-- jumbotron -->
      <div class="jumbotron jumbotron-fluid ">
        <div class="container ">
          <div class="animasitext">
              <h1 class="display-4">Guyup Rukun</h1>
              <p class="lead">Lembaga pemuda-pemudi desa<sapn class="ketik">|</sapn></p>
          </div>
          <div class="contianer text-center">
               <a class="" id="starter" href="{{route('login')}}"><button class="btn btn-primary py-10">View More</button></a>
          </div>
        </div>
      </div>
    <!-- /jumboton -->
    </header>
    <div class="container">
        <div class="jumbotron bg-transparent">
             <div class="row">
                <div class="col  card">
                    <h2>Apa itu Lembaga Kepemudaan</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate unde maiores odio hic consectetur dicta expedita odit iste? Error et totam repellat enim tempore obcaecati alias numquam exercitationem expedita, quae.</p>
                </div>
                <div class="col ">
                    <img src="{{asset('/image/lpp.png')}}" alt="image" >
                </div>
            </div> 
        </div>
        <div class="jumbotron text-center bg-light">
               <h2>Lembaga Kami</h2>
              <div class="row ">
                <div class="col  card">
                    <h3>Visi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus adipisci ab qui neque eos libero non accusantium corporis quas dignissimos officiis vero nemo, veritatis animi expedita labore omnis, doloribus maxime?</p>
                </div>
                <div class="col  bg-primary card">
                   <h3>Misi</h3>
                   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni ex culpa deleniti, doloribus numquam tenetur nostrum autem aspernatur eius cumque, commodi quidem sed dolorem iure, nesciunt aliquid necessitatibus voluptatum impedit.</p>
                </div>
            </div>
        </div>
        <div class="jumbotron bg-transparent">
            <h2 class="text-center">Kegiatan</h2>
             <div class="row">
                <div class="col ">
                    <img src="{{asset('/image/holiday.jpg')}}" alt="image">
                </div>
                <div class="col card">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa consequuntur rem perspiciatis ipsa. Libero quidem, quisquam alias ipsa facilis eveniet a? Totam ipsum dolore odio veritatis soluta, aperiam perspiciatis autem.</p>
                </div>
            </div>
        </div>
        <div class="jumbotron bg-transparent">
            <h2 class="text-center">Event</h2>
            <div class="row">
                <div class="col  card">
                    <h4>Ket.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea saepe iusto a nam, alias aperiam odit autem aspernatur expedita cumque quis dolores doloribus placeat voluptas repellat quia excepturi. Impedit, quisquam.</p>
                </div>
                <div class="col">
                    <img src="{{asset('/image/event.jpg')}}" alt="image">
                </div>
            </div>
        </div>
        <div class="jumbotron bg-transparent" id="testimoni">
           <div class="row text-center">
               <div class="col col-12">
                   <h2>Testimonial</h2>
               </div>
               <div class="col col-12">
                  <img src="{{asset('/image/lpp.png')}}" alt="img">
                  <img src="{{asset('/image/banner.jpg')}}" alt="img">
                  <img src="{{asset('/image/holiday.jpg')}}" alt="img">
               </div>
           </div> 
        </div>
    </div>

     <footer class="bg-dark ">
        <p class="text-center text-white">&copy; reservedesign byagung|agungprayogi291@gmail.com</p>
</footer>
    </body>
</html>
