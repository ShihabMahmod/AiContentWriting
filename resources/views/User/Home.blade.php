@include('Layout.UserHeader')
    <div class="container">
<br></br>
<table  >

<table class="table">
  <thead>
    <tr>
    <th>Serial No</th>
        <th>Plane Name</th>
        <th>Price</th>
        <th>No of word generated</th>
        <th>Usecase</th>
        <th>Action</th>
  </thead>
  <tbody>
  @foreach($allPlane as $allPlane)
        <tr>
            <td>{{ $allPlane['serial_no'] }}</td>
            <td>{{ $allPlane['plane_name'] }}</td>
            <td>{{ $allPlane['price'] }}</td>
            <td>{{ $allPlane['maximum_word_generator'] }}</td>
            <td>{{ $allPlane['number_of_usecase'] }}</td>
            <td>
                <form action="{{route('paypal')}}" method="POST">
                    @csrf
                <button class="btn btn-info btn-sm" type="submit" >Buy Now</button>
                </form>
                  <a class="btn btn-primary btn-sm" href="{{url('/plane-details',$allPlane['id'])}}">Details</a>
            </td>
        </tr>
        @endforeach
  </tbody>
</div>
@include('Layout.UserFooter')

