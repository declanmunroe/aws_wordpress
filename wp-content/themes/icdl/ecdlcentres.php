<?php
/*
Template Name: CentreListing
*/
?>

<?php
get_header();

$centres = json_decode(file_get_contents("https://cms.ics-skills.net/centre/list?token=28052015tk"));
?>

<IMG SRC="https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/img/ecdl-half-full-width.png" class="img-responsive" ALT="ECDL image">

<div class="block-vertical list-of-centers">
	<div class="container">
		<div class="col-md-12" style="text-align: center;">
			<h2 class="text-center">List of current ECDL centres</h2>
		</div>

		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

			<thead>
				<tr>

					<th>Centre</th>
					<th>Coordinator</th>
					<th>Phone</th>
					<th>Address</th>
					<th></th>
					<th></th>
					<th>County</th>
					<th>Walk In Tests</th>

				</tr>
			</thead>

			<tfoot>
				<tr>

					<th>Centre</th>
					<th>Coordinator</th>
					<th>Phone</th>
					<th>Address</th>
					<th></th>
					<th></th>
					<th>County</th>
					<th>Walk In Tests</th>

				</tr>
			</tfoot>

			<tbody>
				<?php foreach($centres as $centre):?>

				<tr>
					<td><?php echo $centre->org?></td>

					<td><?php echo $centre->coordinator;?></td>
					<td><?php echo $centre->phone?></td>
					<td><?php echo $centre->address1;?></td>
					<td><?php echo $centre->address2;?></td>
					<td><?php echo $centre->address3;?></td>
					<td><?php echo $centre->county;?></td>
					<td><?php echo $centre->walkInTests;?></td>

				</tr>


				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>


<?php get_footer(); ?>
