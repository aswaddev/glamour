<?php require APPROOT . '/views/inc/header.php';?>
<section>
	<div class="container">
		<main>
			<section id="dashboard-area">
				<?php require APPROOT . '/views/users/sidebar.php'; ?>
				<div class="main">
					<h1 class="uppercase">Orders</h1>
					<div class="well">
						<h3>Your Orders</h3>
						<small>For any queries or issues please contact us on <?php echo $store_data->email_id; ?></small>
						<hr>
						<table class="table uppercase mt-3 text-center">
							<thead class="bg-dark">
								<tr>
									<th scope="col">Order ID</th>
									<th scope="col">Order Date</th>
									<th scope="col">Total Amount</th>
									<th scope="col">Current Status</th>
									<th scope="col">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php
									if(count($data['orders']) > 0){
										foreach($data['orders'] as $order){
								?>
								<tr>
									<td><?php echo $order->order_id; ?></td>
									<td><?php echo $order->date; ?></td>
									<td>PKR <?php echo number_format($order->total_amount); ?></td>
									<td><?php echo $order->status; ?></td>
									<td>
										<a class="d-block m-1" href="<?php getLink('users/order/' . $order->order_id); ?>"><button class="btn btn-block btn-primary"><i class="fas fa-eye"></i></button></a>
									</td>
								</tr>
								<?php }}else{ ?>
								<tr>
									<td colspan="6">
										<h1 class="text-center">You have no orders at the time</h1>
									</td>
								</tr>
								<?php } ?>
							</tbody>
							<tfoot class="bg-dark">
								<tr>
									<td colspan="6" class="text-center">
										END
									</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</section>
		</main>
	</div>
</section>
<?php require APPROOT . '/views/inc/footer.php';?>
