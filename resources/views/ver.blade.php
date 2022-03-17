@foreach ($produto as $prod )
   <p> {{$prod->nome}} </p> <br>
   <p> {{$prod->valor}} </p> <br>
   <p> {{$prod->quantidade}} </p> <br>
@endforeach
