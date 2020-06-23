<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Complain</h2>
  <form action="/complaneinsert" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-row">
          <div class="form-group col-md-12">
              <label for="exampleFormControlInput1">Purpose: </label>
              <select name="perpose" class="form-control" id="exampleFormControlSelect1">
                  <option value="Driver">Driver</option> 
                  <option value="Mannager">Mannager</option> 
                  <option value="Transport">Transport</option> 
                  <option value="Passenger">Passenger</option>                    
              </select>
          </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
            <label for="exampleFormControlInput1">Transport Name: </label>
            {{csrf_field()}}
            <input type="text" name="transport_name" class="form-control" id="exampleFormControlInput1" placeholder="Transport name">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
            <label for="exampleFormControlInput1">Complane Massage: </label>
            {{csrf_field()}}
            <textarea class="form-control" name="complane_message" id="exampleFormControlTextarea1" rows="3"></textarea>
            <!-- <input type="text" name="complane_message" class="form-control" id="exampleFormControlInput1" placeholder="Complane massage"> -->
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
