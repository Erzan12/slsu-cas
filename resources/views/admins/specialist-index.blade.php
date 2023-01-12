

@extends('layouts.main')
@section('contents')

    
   <h4> List of Specialist </h4>

    <div class="row justify-content-center my-3">
        <div class="col-md-6 col-lg-10 p-8">
    <form method="get">
    <div class="d-flex">
        <div class="d-flex gap-2">
            <input class="form-control" type="text" name="search" placeholder="search" id="search">
            <button class="submit btn btn-primary">
                 Search
            </button>
    </form>  
    <?php
    $con = new PDO("mysql:host=127.0.0.1;dbname=slsu_cas",'root','');
    if (isset($_GET["sumbit"])){
        $str = $_GET["search"];
        $sth = $con->prepare("SELECT * FROM 'search' WHERE first_name= '$str'");

        $sth->setFecthMode(PDO:: FETCH_OBJ);
        $sth->execute();
        if($row = $sth->fetch()){
            
        echo "first_name";
           
            

        }
             
    }
    else{
        echo"";
    }
    ?>
    
        </div>
        <a class="submit btn btn-success ms-auto"  href="{{route('specialists.create')}}">
            Add Specialist     
        </a>
    </div>

        <div>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Employee ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Position</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($specialists as $specialist)
            <tr>
                <th scope="row">{{$specialist->employee_id}}</th>
                <td>{{$specialist->first_name}}</td>
                <td>{{$specialist->last_name}}</td>
                <td>{{$specialist->position}}</td>
                <td>
                
                    </div>
        <a class="submit btn btn-success ms-auto"  href="/specialists/{{$specialist->id}}/edit">
            Edit Specialist     
        </a>
    </div>
                    <button class="sumbit btn btn-danger">
                        Delete
                        
                    </button>
                </td>
                

            </tr>
        @endforeach
       
  </tbody>
</table>
</div>
</div>
</div>



@endsection