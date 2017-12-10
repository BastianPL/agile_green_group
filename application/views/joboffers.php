<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Hello, <?=$_SESSION['firstname']." ".$_SESSION['lastname']?>!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci nulla pellentesque dignissim enim sit. Magna sit amet purus gravida quis blandit.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

 <div class="container">
  <h2>Job Offers</h2>
  <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th>Position</th>
        <th>Description</th>
		<th>Test link</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Example position</td>
        <td>Example description</td>
        <td>LINK</td>
      </tr>
    </tbody>
  </table>
</div>



