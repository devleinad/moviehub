# moviehub
A web application that shows lists of movies

This is a simple web application that utilizes the <a href="https://developers.themoviedb.org/3/configuration/get-api-configuration">themoviedb api</a> to get list of movies with their details. 

<b>NB: I will be assuming you are atleast familiar with the basics of Laravel. If not then please visit the <a href="https://laravel.com/docs">Laravel Documentation</a> and learn the basics</b>

HOW TO USE IT:
1. First and foremost, you'd have to signup to themoviedb platform to generate a unique token and api key. Without the token and api you cannot interact with themoviedb. To signup use this <a href="https://www.themoviedb.org/">link</a>. After a successful sign up, click on your avatar and select <b>Settings->API</b> and follow the instructions to generate an API key and Token.

2. When you clone this repo, create a <b>.env</b> environment if it doen't exist, and copy everything from <b>.env.example</b> and paste it in the .env file. Be sure to change the following environment variables to suit yours:
<ul>
  <li>TMDB_API_KEY</li>
  <li>TMDB_TOKEN=<YOUR_TMDB_TOKEN></li>
</ul>

Set their values to the api key and token generated for you when signed up. Also, so as not to manually include our api and token key, yet would want them to be accessible, we have included the variables in our services as <b>tmdb</b>.

3. After successful configuration in the above steps, start your development server (<b>php artisan serve</b>), open a browser and hit the uri: <b>127.0.0.1:8000/movies</b>.
NB: Since you will be making an API call to a remote server, be sure to have internet connection.

