<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Muli&display=swap');
</style>
<div class="alert alert-success" role="alert">
  @if (session('report'))
  {{session('report')}}
@endif      </div>

<form action="{{url('/update')}}" method="post">
    @csrf
     <input type="hidden" name="id" value="{{$contacts->id}}">
<div class="form-group">
    <label for="">Name</label>
    <input type=" text"  name="uname" id="" value="{{$contacts->name}}" class="form-control" />
       </div>
        <span class="text-danger">
        @error('uname')
        {{$message}}
        
       @enderror
       </span>
        <div class="form-group">
        <label for="">Email</label>
        <input type="email "  name="uemail" id="" class="form-control" value="{{$contacts->email}}"/>
           </div>
<span class="text-danger">
@error('uemail')
{{$message}}
@enderror
 </span>
<div class="form-group">
<label for="">Subject</label>
<input type="text" name="usubject" id="subject" placeholder="" class="form-control" value="{{$contacts->subject}}"/>
</div>
<span class="text-danger">
    @error('usubject')
    {{$message}}
        @enderror
  </span>
  <div class="form-group">
    <label for="">Textarea</label>
    <input type="text "  name="utextarea" id="" class="form-control" value="{{$contacts->textarea}}"/>
  </textarea>
<span class="text-danger">
    @error('utextarea')
    {{$message}}
        @enderror
    
    </span>
  <div class="form-group">
    <button class="btn btn-primary">
      submit
     </button>
     
  </div>
</form>
</div>
</div>
</div>
</main>
</x-app-layout>

