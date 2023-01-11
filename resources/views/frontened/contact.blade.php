@extends('frontened.layouts.main')
@section('main-container')
      <main class="contact">
        
        <div id="home">
        <h1>Contact Us</h1>
               <div class="flex-container">
            <div class="flex-item-left">
                <h4>We are located at</h4>
                <p>Gokarneshwor, Jorpati</p>
                <p>kathmandu, Nepal</p>
                <h4>Phone</h4>
                <p>+977-9818831676</p>
                <h4>Email</h4>
                <p>rupeshthakur063@gmail.com</p>
            </div>
            <div class="flex-item-right">
                
                <form action="{{url('/')}}/contact" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type=" text"  name="uname" id="" class="form-control" value="{{old('name')}}" />
                           </div>
                           <span class="text-danger">
                            @error('uname')
                            {{$message}}
                            
                           @enderror
                           </span>
                           <div class="form-group">
                            <label for="">Email</label>
                            <input type="email "  name="uemail" id="" class="form-control" value="{{old('email')}}"/>
                               </div>
            <span class="text-danger">
              @error('uemail')
              {{$message}}
                  @enderror
            </span>
            <div class="form-group">
                <label for="">Subject</label>
                    <input type="text" name="usubject" id="subject" placeholder="">
                    <span class="text-danger">
                        @error('usubject')
                        {{$message}}
                            @enderror
                      </span>
                      <div class="form-group">
                        <label for="">Textarea</label>
                    <textarea name="utextarea" id="textarea" cols="30" rows="10">
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
                         <div class="alert alert-success" role="alert">
                            @if (session('report'))
                            {{session('report')}}
                        @endif      </div>
                      
                      </div>
                </form>
            </div>
            </div>
        </div>
    </main>
    
  @endsection
 