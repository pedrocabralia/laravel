@extends('layouts.main')    <!-- pulling the  layouts-->
@section('title','CREATE EVENTS')
@section('content')

   
    <div id="event-create-container" class="col-md-6 offeset-md-3">
        <h1>CREATE YOUR EVENT</h1>
        <form action="/events" method="post" enctype = "multipart/form-data">
         @csrf
         <div class="form-group">
                <label for="image"> Upload your image: </label>
                <input type="file" name="image" id="image" class = "from-control-file">
            </div> 
            <div class="form-group">
                <label for="title"> Event: </label>
                <input type="text" class="form-control" id="title" name="title" placeholder = "Name of event">
            </div> 

            <div class="form-group">
                <label for="City"> City: </label>
                <input type="text" class="form-control" id="city" name="city" placeholder = "City of event">
               
            </div>

            <div class="form-group">  
                <label for="Description"> Description: </label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="description"></textarea>
            </div>
            <div class="form-group"> 
                <label for="private"> Is private?: </label>
                    <select name="private" id="private">
                        <option value="0">NO</option>
                        <option value="1">YES</option>
                    </select>
            </div>
                
             
               

                <input type="submit" class="btn btn-primary" value="Create event">
                            
            </div>


        </form>

    </div>

@endsection