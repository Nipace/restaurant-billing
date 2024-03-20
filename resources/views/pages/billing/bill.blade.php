<style>
    @import url('https://fonts.googleapis.com/css2?family=Petrona:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        font-size: 12px;
        font-family: 'Petrona', serif;
    }

    td,
    th,
    tr,
    table {
        text-align: center;
        border-top: 1px solid black;
        border-collapse: collapse;
    }

    td.sn,
    th.sn {
        width: 10px;
        text-align: center;

        max-width: 10px;
    }

    td.item,
    th.item {
        width: 65px;
        text-align: center;

        max-width: 75px;
        /*word-break: break-all;*/
    }

    td.qty,
    th.qty {
        width: 30px;
        text-align: center;

        max-width: 30px;
        word-break: break-all;
    }

    td.rate,
    th.rate {
        width: 35px;
        text-align: center;

        max-width: 35px;
        word-break: break-all;
    }

    td.total,
    th.total {
        width: 40px;
        text-align: center;

        max-width: 40px;
        word-break: break-all;
    }

    .centered {
        text-align: center;
        align-content: center;
    }

    .ticket {
        width: 155px;
        max-width: 155px;
    }

    img {
        max-width: inherit;
        width: inherit;
    }

    @media print {

        .hidden-print,
        .hidden-print * {
            display: none !important;
        }
    }

</style>

<!--<div class="d-flex flex-column-fluid">-->
<!--begin::Container-->
<!--	<div class="container-fluid">-->
<!--		<div class="row">-->

<!--			<div class="px-2" style="width:500px;">-->
<!-- begin::Card-->
<!--				<div class="card card-custom overflow-hidden p-0">-->
<!--					<div class="card-body p-0">-->
<!-- begin: Invoice-->
<!-- begin: Invoice header-->
<!--						<div class="row justify-content-center px-4 pt-md-27 px-md-0">-->
<!--							<div class="col-md-9">-->
<!--								<div class="d-flex justify-content-between flex-column flex-md-row">-->
<!--									<h1 class="display-4 font-weight-boldest mb-10">INVOICE</h1>-->
<!--									<div class="d-flex flex-column align-items-md-end px-0">-->
<!--begin::Logo-->
<!--										<a href="#" class="mb-5">-->

<!--											<img src="{{ asset('storage/'. session('settings_restaurant_logo'))}}" style="height:50px;width:50px" alt="">-->
<!--										</a>-->

<!--									</div>-->
<!--								</div>-->

<!--							</div>-->
<!--						</div>-->
<!-- end: Invoice header-->
<!-- begin: Invoice body-->
<!--						<div class="row justify-content-center px-8  px-md-0">-->
<!--							<div class="col-md-9">-->
<!--								<div class="table-responsive">-->

<!--									<table class="table" style="font-size:14px;">-->
<!--										<thead style="font-size:14px;">-->
<!--											<tr>-->
<!--												<th class="pl-0 font-weight-bold text-muted text-uppercase"> Name</th>-->
<!--												<th class="text-right font-weight-bold text-muted text-uppercase">Price</th>-->
<!--												<th class="text-right font-weight-bold text-muted text-uppercase">Quantity</th>-->
<!--												<th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Scheme</th>-->
<!--												<th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Total</th>-->

<!--											</tr>-->
<!--										</thead>-->
<!--										<tbody>-->
<!--											@foreach($order->foods as $key => $food)-->
<!--											<tr>-->
<!--												<td class="pl-0 pt-7">{{ $food->name }}</td>-->
<!--												<td class="text-right pt-7">{{ $food->price }}</td>-->
<!--												<td class="text-right pt-7">{{ $food->pivot->quantity }}</td>-->
<!--												<td class="text-right pt-7">{{ $food->pivot->scheme }}</td>-->

<!--												<td class="text-danger pr-0 pt-7 text-right">{{ $food->price*$food->pivot->quantity }} </td>-->
<!--											</tr>-->
<!--											@endforeach-->

<!--											@foreach($cartConditions as $key => $condition)-->

<!--											<tr>-->
<!--												<td class=" pt-2" colspan="5">-->

<!--													{{$condition->getName()}}-->

<!--												</td>-->
<!--											</tr>-->
<!--											@endforeach-->

<!--											<tr>-->
<!--												<td class="pl-0 pt-7" colspan="5">-->
<!--													<b> Grand Total:</b> Rs {{ $order->grand_total }}</td>-->
<!--											</tr>-->
<!--										</tbody>-->

<!--									</table>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!-- end: Invoice body-->

<!-- begin: Invoice action-->
<!--						<div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">-->
<!--							<div class="col-md-9">-->
<!--								<div class="d-flex justify-content-between">-->
<!--										<button type="submit" id="printButton" class="btn btn-primary font-weight-bold" onclick="window.print()">Print Invoice</button>-->


<!--<form action="{{route('print')}}" method="POST">-->
<!--	@csrf-->
<!--	<input type="hidden" value={{$order->grand_total}} name="grandTotal">-->
<!--	@foreach($order->foods as $item)-->

<!--	<input type="hidden" value={{$item->name}} name="foods[name][]">-->
<!--	<input type="hidden" value={{$item->price}} name="foods[price][]">-->
<!--	<input type="hidden" value={{$item->pivot->quantity}} name="foods[quantity][]">-->
<!--	@endforeach-->
<!--	<button type="submit" class="btn btn-primary font-weight-bold">Print Invoice</button>-->
<!--</form>-->

<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!-- end: Invoice action-->
<!-- end: Invoice-->
<!--					</div>-->
<!--				</div>-->
<!-- end::Card-->
<!--			</div>-->

<!--		</div>-->
<!--	</div>-->
<!--end::Container-->
<!--</div>-->
<div class="ticket">
    <p class="centered"><span style="font-size:13px;font-weight:700;">{{ Session::get('settings_restaurant_name') }}</span>
        Mairtipath-5, Bhairahawa
        <br>☎ 071-590303
        <br>📞 9814090303</p>
    <p>Date: <?php $mytime = Carbon\Carbon::now();
echo $mytime->toDateTimeString();?><br>
        Bill No: {{$order->id}}<br>
        Table: {{$table}}
    </p>



    <table>
        <thead>
            <tr>
                <th class="sn">S.N.</th>
                <th class="item">Items</th>
                <th class="qty">Qty</th>
                <th class="rate">Rate</th>
                <th class="total">Total</th>

            </tr>
        </thead>
        <tbody>
            <?php $sn=0?>
            @foreach($order->foods as $key => $food)
            <tr>
                <td class="sn">{{++$sn}}</td>
                <td class="item">{{ $food->name }}</td>
                <td class="qty">{{ $food->pivot->quantity }}</td>
                <td class="rate">{{ $food->price }}</td>
                <th class="total">{{$food->price * $food->pivot->quantity}}</th>

            </tr>
            @endforeach
            <tr>
                <td colspan="5" style="text-align:left;"> <b>Discount:</b> Rs {{ $discountAmount }}</td>
            </tr>

            <tr>
                <td colspan="5" style="text-align:left;"> <b> Grand Total:</b> Rs {{ $order->grand_total }}</td>
            </tr>

        </tbody>
    </table>

    <p class="centered">Thank You for dining with us.<br>
        Visit Again.<br><br>
        <span style="font-size:9px;">* All prices are inclusive of Government Taxes. *</span></p>

</div>
<button id="btnPrint" onclick="doPrint() " class="hidden-print">Print</button>
<script>
    function doPrint() {
        window.print();
        document.location.href = "https://localhost:8000/billing/";
    }

</script>
