// form is used to take input from a user to enter the data in movie table 
<form action= "movie.php" method="post">
  <label for ="movie"> movie </label><br>             
  <input type="text" id="movie" name="movie"><br>
  <label for="actor"> actor </label><br>               
  <input type="text" id="actor" name="actor"><br>
  <label for="actress"> actress </label><br>          
  <input type="text" id="actress" name="actress"><br>
  <label for="director"> director </label><br>
  <input type="text" id="director" name="director"><br>    
  <label for="year"> release year </label><br>
  <input type="year" id="year" name="year"><br>           
  <button type="submit" class="btn btn-primary">Submit</button>     // button to push the above form's data into the database
</form><br>

// form to fetch all contents of the database according to the lead actor's name. note: we can perform the same code by changing the where clause for other fetching operations.
// please enter lead actor's name below
<form action= "movie.php" method="post">
  <label for="actor1"> actor </label><br>
  <input type="text" id="actor1" name="actor1">
  <button type="submit" class="btn btn-primary">Submit</button>   // button to execute the fetching process from the database
</form>