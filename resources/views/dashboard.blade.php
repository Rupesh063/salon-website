<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Muli&display=swap');

* {
  font-family:'Muli', sans-serif; Change your font family
}

table {
  border-collapse: collapse;
  margin: 30px auto;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

table,th,tr {
/*   background-color: #009879; */
  color: black;
  text-align: center;
  font-size:16px;
  border-bottom: 1px solid #f0eeee;
}

table th,
table td {
  padding: 20px;
}
table, td:last-of-type{
  padding-right:40px;
}
table, td:first-of-type{
  padding-left: 40px;
}

table,  tr {
  text-align: center;
  font-size:16px;
  border-bottom: 1px solid #f0eeee;
  color: darkslategray;
  background-color: #fffdfd;
}
  
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">       
                <table>
                    
                    ddddd
                
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Textarea</th>
                        <th>Action</th>
                    </tr>
                    
                    <div class="alert alert-success" role="alert">
                      @if (session('report'))
                      {{session('report')}}
                    @endif      </div>
                    

                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td> {{$contact->name}}</td>
                        <td> {{$contact->email}}</td>
                        <td> {{$contact->subject}}</td>
                        <td> {{$contact->textarea}}</td>
                        <td>
                          <a href="{{ 'view-data/' . $contact->id }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button>
                          </a>
                          
                            <a href="{{ 'edit/' .$contact->id }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a> 
                           
                            <a href="{{ 'delete/' .$contact->id }}"><button class="btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</button></a>  
                        </td>
                    </tr>
                   
                    @endforeach
                </table>
            </div> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
