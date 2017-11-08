<style>
.perfback {
  background-color: #ecf0f1;
  height: 50%;
}
</style>

<script>
$(document).ready(function()
{

  $(".md-modal").draggable({ scroll: false, cursor: 'pointer'});


});
</script>

<div class="perfback">
  <div class="md-modal md-effect-19 class="ui-draggable"" id="modal-19">
    <div class="md-content">
      <h3>Performance 1</h3>
      <div>
        <p>We are playing at this place at this time</p>
        <ul>
          <li><strong>Details:</strong> Details go here</li>
          <li><strong>Tickets:</strong> Contact this guy for tickets. Email Address Here</li>
          <li><strong>Close:</strong> click on the button below to close..</li>
        </ul>
        <button class="md-close">Close me!</button>
      </div>
    </div>
  </div>

  <button class="md-trigger md-setperspective" data-modal="modal-19">Performance 1</button>


</div>
