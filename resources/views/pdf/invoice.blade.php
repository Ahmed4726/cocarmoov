
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<title>Invoice # {{ $invoice->id }}</title>

<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
<style type="text/css">
    .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
    </style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
    		<div class="invoice-title">
    			<h2>Invoice</h2>
    		</div>
        </div>
        <div class="col-md-6">
        <h3 class="text-right">Invoice # {{ $invoice->id }}</h3>
        </div>
        </div>
    		<hr>
    		<div class="row">
    			<div class="col-md-6">
    				<address>
    				<strong>Address from:</strong><br>
                        {{ $invoice->pickup_address }}
    				</address>
    			</div>
    			<div class="col-md-6">
    				<address class="text-right">
        			<strong>Shipped To:</strong><br>
                        {{-- {{ isset($listing->to_address) ? $listing->to_address }} --}}
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					    Credit Card
    				</address>
    			</div>
    			<div class="col-md-6 ">
    				<address class="text-right">
    					<strong>Order Date:</strong><br>
    					{{ $invoice->created_at }}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price </strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								{{-- <td>{{ $listing->id }}</td>
    								<td class="text-center">{{ $listing->package_amount }}</td>
    								<td class="text-center">1</td>
    								<td class="text-right">{{ $listing->package_amount }}</td> --}}
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
</section>
<script src="code.jquery.com/jquery-1.11.1.min.js"></script>

