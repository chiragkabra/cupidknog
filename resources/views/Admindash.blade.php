<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <input type="search" placeholder="search" name="search" id="search" class="form-control">
        <div class="table-responsive">
            <h3 align="center">Total Data : <span id="total_records"></span></h3>
        <table class="table table-striped table-bordered">
            <thead>
            <th>Id</th>
            <th>name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>occupation</th>
            <th>family_type</th>
            <th>manglik</th>
            </thead>
            <tbody>
            {{-- @foreach($user as $user)
                <tr>
           <td>{{$user->id}}</td>
           <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>
           <td>{{$user->gender}}</td>
           <td>{{$user->occupation}}</td>
                </tr>

            @endforeach --}}
            </tbody>
        </table>
    </div>
</div>
</x-app-layout>
<script>
$(document).ready(function(){

fetch_customer_data();

function fetch_customer_data(query = '')
{
 $.ajax({
  url:"{{ route('livesearch') }}",
  method:'GET',
  data:{query:query},
  dataType:'json',
  success:function(data)
  {
   $('tbody').html(data.table_data);
   $('#total_records').text(data.total_data);
  }
 })
}

$(document).on('keyup', '#search', function(){
 var query = $(this).val();
 fetch_customer_data(query);
});
});

    </script>
