<style>
.perfback {
  background-color: #ecf0f1;

}

.perftitle {
  font-size: 300%;
  padding-top: 20px;
}

.performancebox {
  margin-top: 10px;
  background-color: ;
  border-style: solid;
  border-width: medium;
  border-color: black;
  height: %;
  width: 95%;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 10px;
}

.perfitem {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
 margin-top: auto;
  margin-bottom: auto;
  background-color: ;
  border-bottom: ;
  border-width: thin;
  border-color: black;
  vertical-align: middle;
}

 {

}

</style>

<script>
$(document).ready(function()
{

  $(".tabname").draggable({ scroll: false, cursor: 'pointer', stack: ".md-modal", handle: "#titledrag"});
  $( ".sizeit" ).resizable();




});
</script>

<div class="perfback" id="performances">
  <h1 class="perftitle" align="center">Upcoming Performances</h1>

  <table class="table table-hover" style="margin-bottom: 0;">
    <thead>
      <tr>
        <th scope="col">When?</th>
        <th scope="col">Where?</th>
        <th scope="col">More Info?</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>December 5th</th>
        <td>Deer Valley HighSchool</td>
        <td><button style="font-size: .75em;" class="md-trigger md-setperspective" data-modal="modal-19">More Info</button></td>
      </tr>
      <tr>
        <td>December 9th</th>
        <td>Lone Tree Golf Course</td>
        <td><button style="font-size: .75em;" class="md-trigger md-setperspective" data-modal="modal-18">More Info</button></td>
      </tr>

    </tbody>
  </table>







  <div class="md-modal md-effect-19" id="modal-19">
    <div class="tabname sizeit">
      <div class="md-content">
        <h3 id="titledrag">December 5th</h3>
        <div>
          <center>
          <p>We are playing at DeerValley Highschool.</p>
          <ul>
            <li><strong>Details:</strong> The Brentwood Big Band will play alongside local HighSchools.</li>
            <li><strong>Tickets:</strong> For ticket information please contact: Larry Widener</li>
            <li><strong></strong> larrywidener@antioch.k12.ca.us</li>
          </ul>
        </center>
          <button class="md-close">Close me!</button>
        </div>
    </div> <!--tabname-->
    </div>
  </div>


  <div class="md-modal md-effect-19" id="modal-18">
    <div class="tabname sizeit">
      <div class="md-content">
        <h3 id="titledrag">December 9th</h3>
        <div>
          <center>


          <p>We are playing at the Lone Tree Golf Course!</p>
          <ul>
            <li><strong>Details:</strong> This performance is a Salvation Army Benefit!</li>
            <li><strong>Tickets:</strong> For More info Contact Glenn Niessner:</li>
            <li><strong></strong>Nieszner2261@comcast.net</li>
          </ul>
          </center>
          <button class="md-close">Close me!</button>
        </div>
    </div> <!--tabname-->
    </div>
  </div>





</div>
