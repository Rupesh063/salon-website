<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<style>
* {
font-family:'Muli', sans-serif; /* Change your font family */
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
background-color: #e9e1e1eb;
}

</style>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900"> 
    <table>
   @foreach ($contacts as $contact)

  <tr>
    <td>ID=</td>
    <td> {{$contact->id}}</td>
  </tr>
  <tr>
    <td>Name=</td>
    <td> {{$contact->name}}</td>
  </tr>
  <tr>
    <td>Email=</td>
    <td> {{$contact->email}}</td>
  </tr>
  <tr>
    <td>Subject=</td>
    <td> {{$contact->subject}}</td>
  </tr>
  <tr>
    <td>Textarea=</td>
    <td> {{$contact->textarea}}</td>
  </tr>
  @endforeach

</table>
</x-app-layout>
