<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>{{$title ?? 'themovieshub'}}</title>
    <style>
      body{
        margin:0;
        padding:0;
      }
      .container{
        width: 0 auto;
        margin-top: 5px;
      }

      .container .movies-container{
        padding: 5px 5px;
      }

      .container .single-movie-container{
        padding: 2rem;
        display: grid;
        grid-template-columns: 25% 75%;
        grid-column-gap: 1rem;
        margin-top: 40px;
        background-color: #273746;
        height: auto;
        
      }

      .container .single-movie-container .single-movie-image-container{
        width: 100%;
        flex: 1;
      }

      .container .single-movie-container .single-movie-image-container img{
        width: 100%;
      }

      .container .single-movie-container .single-movie-details{
        padding: 10px;
      }
      .container .single-movie-container .single-movie-details .rating{
        color:#fff;
      }

      .container .single-movie-container .single-movie-details .grid-info{
        display: grid;
        grid-template-columns: 30% 40% 20%;
      }
     
      .container .movies-container .popular-movies-container h2 {
        font-weight: bolder;
        font-size: 22px;
        margin-left: 105px;
      }

      .container .movies-container .popular-movies-container .movie{
        display: flex;
        flex-wrap: wrap;  
        justify-content: center;
        
       
      
      }
      .container .movies-container .popular-movies-container .movie .popular-movie{
        margin:1rem;
        width: 200px;
        box-shadow: 3px 3px 5px rgba(0,0,0,0.1);
        border-radius: 5px;
      }
    
      .container .movies-container .popular-movies-container .movie .popular-movie img{
       max-width: 100%;
      }
      
      .container .movies-container .popular-movies-container
       .movie .popular-movie .movie-info{
        position: relative;
        padding-left: 10px;
        padding-top: 7px;
        padding-right: 4px;
        padding-bottom: 7px;
      }

    
       .container .movies-container
       .popular-movies-container 
       .movie .popular-movie .movie-info .rating h5{
         font-size: 13px;
       }

      .container .movies-container 
      .popular-movies-container .movie .popular-movie .movie-info .movie-title{
        font-weight:bolder;
        font-size: 17px;  
      }
      .container .movies-container
       .popular-movies-container 
       .movie .popular-movie .movie-info .movie-release-date{
        font-size: 13px;
      }

      .container  .movies-container
       .popular-movies-container 
       .movie .popular-movie .movie-info .genre-box i{
         font-size: 13px;
       }


      @media(max-width:200px){
        .container .movies-container .popular-movies-container h2 {
        font-weight: bolder;
        font-size: 22px;

      }


        .container .movies-container
       .popular-movies-container 
       .movie .popular-movie .movie-info .rating{
        position: absolute;
         left: 130px;
         padding: 6px;
         border-radius: 50%;
         background-color: #1A5276;
         text-align: center;
       }
      }
     

    </style>
  </head>
  <body>
    @include('includes.navbar')
    <div class="container">
      @yield('content')
    </div>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>