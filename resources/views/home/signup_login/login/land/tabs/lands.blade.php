<div class="container" style="background:black">
  @foreach($parking_spaces as $parking_space)
  <div class="row">
    <div class="col">
      <div class="app">
        <header>
        </header>
        <main>
          <h1 style="color:blue;">{{$parking_space->name}}</h1>
          <p style="color:black; font-size:15px;"> {{$parking_space->description}}</p><p style="color:black; font-size:15px;"> {{$parking_space->address}} </p>
          <button class="button button2" href="#">
            <?php
          $status = $parking_space->reservation_status;
          if ($status == 0) {
            echo "CLOSE";
          }
          else {
            echo "OPEN";
          }
           ?></button>
           <br><br><br>
            <a href="/images">Read full article</a>
          </main>
          <nav>
            <!-- <button class="button button2" href="#">View</button> -->
            <!-- <button class="button button2" href="#">Request Update</button> -->
            <!-- <button type="button" href="#">Request Delete</button> -->
            <button type="button" class="btn btn-outline-info">View</button>
            <button type="button" class="btn btn-outline-success">Request Update</button>
            <button type="button" class="btn btn-outline-danger">Request Delete</button>

          </nav>
        </div>
      </div>

    </div>
@endforeach
  </div>
