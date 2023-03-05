@include('Layout.UserHeader')

<div class="container" >
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$SinglePlane['plane_name']}}</h5>
    <p class="card-text">Price : {{$SinglePlane['price']}}</p>
    <p class="card-text">Expiration Day : {{$SinglePlane['expiration_day']}}</p>
    <p class="card-text">Usecase : {{$SinglePlane['number_of_usecase']}}</p>
    <p class="card-text">word generate : {{$SinglePlane['maximum_word_generator']}}</p>
    <p class="card-text">Custom Search : {{$SinglePlane['enable_custom_search_search']}}</p>
    <p class="card-text">Description : {{$SinglePlane['description']}}</p>
    <form action="{{route('paypal')}}" method="POST">
        @csrf
        <button class="btn btn-primary" >Buy Now</button>
    </form>
  </div>
</div>
</div>
       
@include('Layout.UserFooter')