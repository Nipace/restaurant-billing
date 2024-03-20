@extends('layouts.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->

			<!--begin::Row-->
			<div class="row mt-0 mt-lg-8">
				<div class="col-xl-4">
					<!--begin::Mixed Widget 2-->
					<div class="card card-custom bg-gray-100 gutter-b card-stretch">
						<!--begin::Header-->
						<div class="card-header border-0 bg-primary py-5">
							<h3 class="card-title font-weight-bolder text-white">Quick Links</h3>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0 position-relative overflow-hidden">
							<!--begin::Chart-->
							<div id="kt_mixed_widget_2_chart" class="card-rounded-bottom bg-primary"
								style="height: 200px; min-height: 200px;">
								<div id="apexchartswjpdzr53"
									class="apexcharts-canvas apexchartswjpdzr53 apexcharts-theme-light"
									style="width: 932px; height: 200px;"><svg id="SvgjsSvg2240" width="932" height="200"
										xmlns="http://www.w3.org/2000/svg" version="1.1"
										xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
										class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
										style="background: transparent;">
										<g id="SvgjsG2242" class="apexcharts-inner apexcharts-graphical"
											transform="translate(0, 0)">
											<defs id="SvgjsDefs2241">
												<clipPath id="gridRectMaskwjpdzr53">
													<rect id="SvgjsRect2245" width="939" height="203" x="-3.5" y="-1.5"
														rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
														stroke-dasharray="0" fill="#fff"></rect>
												</clipPath>
												<clipPath id="gridRectMarkerMaskwjpdzr53">
													<rect id="SvgjsRect2246" width="936" height="204" x="-2" y="-2"
														rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
														stroke-dasharray="0" fill="#fff"></rect>
												</clipPath>
												<filter id="SvgjsFilter2253" filterUnits="userSpaceOnUse" width="200%"
													height="200%" x="-50%" y="-50%">
													<feFlood id="SvgjsFeFlood2254" flood-color="#287ed7"
														flood-opacity="0.5" result="SvgjsFeFlood2254Out"
														in="SourceGraphic"></feFlood>
													<feComposite id="SvgjsFeComposite2255" in="SvgjsFeFlood2254Out"
														in2="SourceAlpha" operator="in"
														result="SvgjsFeComposite2255Out"></feComposite>
													<feOffset id="SvgjsFeOffset2256" dx="0" dy="5"
														result="SvgjsFeOffset2256Out" in="SvgjsFeComposite2255Out">
													</feOffset>
													<feGaussianBlur id="SvgjsFeGaussianBlur2257" stdDeviation="3 "
														result="SvgjsFeGaussianBlur2257Out" in="SvgjsFeOffset2256Out">
													</feGaussianBlur>
													<feMerge id="SvgjsFeMerge2258" result="SvgjsFeMerge2258Out"
														in="SourceGraphic">
														<feMergeNode id="SvgjsFeMergeNode2259"
															in="SvgjsFeGaussianBlur2257Out"></feMergeNode>
														<feMergeNode id="SvgjsFeMergeNode2260" in="[object Arguments]">
														</feMergeNode>
													</feMerge>
													<feBlend id="SvgjsFeBlend2261" in="SourceGraphic"
														in2="SvgjsFeMerge2258Out" mode="normal"
														result="SvgjsFeBlend2261Out"></feBlend>
												</filter>
												<filter id="SvgjsFilter2263" filterUnits="userSpaceOnUse" width="200%"
													height="200%" x="-50%" y="-50%">
													<feFlood id="SvgjsFeFlood2264" flood-color="#287ed7"
														flood-opacity="0.5" result="SvgjsFeFlood2264Out"
														in="SourceGraphic"></feFlood>
													<feComposite id="SvgjsFeComposite2265" in="SvgjsFeFlood2264Out"
														in2="SourceAlpha" operator="in"
														result="SvgjsFeComposite2265Out"></feComposite>
													<feOffset id="SvgjsFeOffset2266" dx="0" dy="5"
														result="SvgjsFeOffset2266Out" in="SvgjsFeComposite2265Out">
													</feOffset>
													<feGaussianBlur id="SvgjsFeGaussianBlur2267" stdDeviation="3 "
														result="SvgjsFeGaussianBlur2267Out" in="SvgjsFeOffset2266Out">
													</feGaussianBlur>
													<feMerge id="SvgjsFeMerge2268" result="SvgjsFeMerge2268Out"
														in="SourceGraphic">
														<feMergeNode id="SvgjsFeMergeNode2269"
															in="SvgjsFeGaussianBlur2267Out"></feMergeNode>
														<feMergeNode id="SvgjsFeMergeNode2270" in="[object Arguments]">
														</feMergeNode>
													</feMerge>
													<feBlend id="SvgjsFeBlend2271" in="SourceGraphic"
														in2="SvgjsFeMerge2268Out" mode="normal"
														result="SvgjsFeBlend2271Out"></feBlend>
												</filter>
											</defs>
											<g id="SvgjsG2272" class="apexcharts-xaxis" transform="translate(0, 0)">
												<g id="SvgjsG2273" class="apexcharts-xaxis-texts-g"
													transform="translate(0, -4)"></g>
											</g>
											<g id="SvgjsG2275" class="apexcharts-grid">
												<g id="SvgjsG2276" class="apexcharts-gridlines-horizontal"
													style="display: none;">
													<line id="SvgjsLine2278" x1="0" y1="0" x2="932" y2="0"
														stroke="#e0e0e0" stroke-dasharray="0"
														class="apexcharts-gridline"></line>
													<line id="SvgjsLine2279" x1="0" y1="20" x2="932" y2="20"
														stroke="#e0e0e0" stroke-dasharray="0"
														class="apexcharts-gridline"></line>
													<line id="SvgjsLine2280" x1="0" y1="40" x2="932" y2="40"
														stroke="#e0e0e0" stroke-dasharray="0"
														class="apexcharts-gridline"></line>
													<line id="SvgjsLine2281" x1="0" y1="60" x2="932" y2="60"
														stroke="#e0e0e0" stroke-dasharray="0"
														class="apexcharts-gridline"></line>
													<line id="SvgjsLine2282" x1="0" y1="80" x2="932" y2="80"
														stroke="#e0e0e0" stroke-dasharray="0"
														class="apexcharts-gridline"></line>
													<line id="SvgjsLine2283" x1="0" y1="100" x2="932" y2="100"
														stroke="#e0e0e0" stroke-dasharray="0"
														class="apexcharts-gridline"></line>
													<line id="SvgjsLine2284" x1="0" y1="120" x2="932" y2="120"
														stroke="#e0e0e0" stroke-dasharray="0"
														class="apexcharts-gridline"></line>
													<line id="SvgjsLine2285" x1="0" y1="140" x2="932" y2="140"
														stroke="#e0e0e0" stroke-dasharray="0"
														class="apexcharts-gridline"></line>
													<line id="SvgjsLine2286" x1="0" y1="160" x2="932" y2="160"
														stroke="#e0e0e0" stroke-dasharray="0"
														class="apexcharts-gridline"></line>
													<line id="SvgjsLine2287" x1="0" y1="180" x2="932" y2="180"
														stroke="#e0e0e0" stroke-dasharray="0"
														class="apexcharts-gridline"></line>
													<line id="SvgjsLine2288" x1="0" y1="200" x2="932" y2="200"
														stroke="#e0e0e0" stroke-dasharray="0"
														class="apexcharts-gridline"></line>
												</g>
												<g id="SvgjsG2277" class="apexcharts-gridlines-vertical"
													style="display: none;"></g>
												<line id="SvgjsLine2290" x1="0" y1="200" x2="932" y2="200"
													stroke="transparent" stroke-dasharray="0"></line>
												<line id="SvgjsLine2289" x1="0" y1="1" x2="0" y2="200"
													stroke="transparent" stroke-dasharray="0"></line>
											</g>
											<g id="SvgjsG2248" class="apexcharts-area-series apexcharts-plot-series">
												<g id="SvgjsG2249" class="apexcharts-series" seriesName="NetxProfit"
													data:longestSeries="true" rel="1" data:realIndex="0">
													<path id="SvgjsPath2252"
														d="M 0 200L 0 125C 54.36666666666667 125 100.96666666666667 87.5 155.33333333333334 87.5C 209.70000000000002 87.5 256.3 120 310.6666666666667 120C 365.03333333333336 120 411.6333333333333 25 466 25C 520.3666666666667 25 566.9666666666667 100 621.3333333333334 100C 675.7 100 722.3 100 776.6666666666666 100C 831.0333333333333 100 877.6333333333333 100 932 100C 932 100 932 100 932 200M 932 100z"
														fill="transparent" fill-opacity="1" stroke-opacity="1"
														stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
														class="apexcharts-area" index="0"
														clip-path="url(#gridRectMaskwjpdzr53)"
														filter="url(#SvgjsFilter2253)"
														pathTo="M 0 200L 0 125C 54.36666666666667 125 100.96666666666667 87.5 155.33333333333334 87.5C 209.70000000000002 87.5 256.3 120 310.6666666666667 120C 365.03333333333336 120 411.6333333333333 25 466 25C 520.3666666666667 25 566.9666666666667 100 621.3333333333334 100C 675.7 100 722.3 100 776.6666666666666 100C 831.0333333333333 100 877.6333333333333 100 932 100C 932 100 932 100 932 200M 932 100z"
														pathFrom="M -1 200L -1 200L 155.33333333333334 200L 310.6666666666667 200L 466 200L 621.3333333333334 200L 776.6666666666666 200L 932 200">
													</path>
													<path id="SvgjsPath2262"
														d="M 0 125C 54.36666666666667 125 100.96666666666667 87.5 155.33333333333334 87.5C 209.70000000000002 87.5 256.3 120 310.6666666666667 120C 365.03333333333336 120 411.6333333333333 25 466 25C 520.3666666666667 25 566.9666666666667 100 621.3333333333334 100C 675.7 100 722.3 100 776.6666666666666 100C 831.0333333333333 100 877.6333333333333 100 932 100"
														fill="none" fill-opacity="1" stroke="#287ed7" stroke-opacity="1"
														stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
														class="apexcharts-area" index="0"
														clip-path="url(#gridRectMaskwjpdzr53)"
														filter="url(#SvgjsFilter2263)"
														pathTo="M 0 125C 54.36666666666667 125 100.96666666666667 87.5 155.33333333333334 87.5C 209.70000000000002 87.5 256.3 120 310.6666666666667 120C 365.03333333333336 120 411.6333333333333 25 466 25C 520.3666666666667 25 566.9666666666667 100 621.3333333333334 100C 675.7 100 722.3 100 776.6666666666666 100C 831.0333333333333 100 877.6333333333333 100 932 100"
														pathFrom="M -1 200L -1 200L 155.33333333333334 200L 310.6666666666667 200L 466 200L 621.3333333333334 200L 776.6666666666666 200L 932 200">
													</path>
													<g id="SvgjsG2250" class="apexcharts-series-markers-wrap"
														data:realIndex="0">
														<g class="apexcharts-series-markers">
															<circle id="SvgjsCircle2296" r="0" cx="0" cy="0"
																class="apexcharts-marker w0d3lt7wo no-pointer-events"
																stroke="#287ed7" fill="#eee5ff" fill-opacity="1"
																stroke-width="3" stroke-opacity="0.9"
																default-marker-size="0"></circle>
														</g>
													</g>
												</g>
												<g id="SvgjsG2251" class="apexcharts-datalabels" data:realIndex="0"></g>
											</g>
											<line id="SvgjsLine2291" x1="0" y1="0" x2="932" y2="0" stroke="#b6b6b6"
												stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs">
											</line>
											<line id="SvgjsLine2292" x1="0" y1="0" x2="932" y2="0" stroke-dasharray="0"
												stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
											<g id="SvgjsG2293" class="apexcharts-yaxis-annotations"></g>
											<g id="SvgjsG2294" class="apexcharts-xaxis-annotations"></g>
											<g id="SvgjsG2295" class="apexcharts-point-annotations"></g>
										</g>
										<g id="SvgjsG2274" class="apexcharts-yaxis" rel="0"
											transform="translate(-18, 0)"></g>
										<g id="SvgjsG2243" class="apexcharts-annotations"></g>
									</svg>
									<div class="apexcharts-legend"></div>
									<div class="apexcharts-tooltip apexcharts-theme-light">
										<div class="apexcharts-tooltip-title"
											style="font-family: Poppins; font-size: 12px;"></div>
										<div class="apexcharts-tooltip-series-group"><span
												class="apexcharts-tooltip-marker"
												style="background-color: transparent;"></span>
											<div class="apexcharts-tooltip-text"
												style="font-family: Poppins; font-size: 12px;">
												<div class="apexcharts-tooltip-y-group"><span
														class="apexcharts-tooltip-text-label"></span><span
														class="apexcharts-tooltip-text-value"></span></div>
												<div class="apexcharts-tooltip-z-group"><span
														class="apexcharts-tooltip-text-z-label"></span><span
														class="apexcharts-tooltip-text-z-value"></span></div>
											</div>
										</div>
									</div>
									<div
										class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
										<div class="apexcharts-xaxistooltip-text"
											style="font-family: Poppins; font-size: 12px;"></div>
									</div>
									<div
										class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
										<div class="apexcharts-yaxistooltip-text"></div>
									</div>
								</div>
							</div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-spacer mt-n25">
								<!--begin::Row-->
								@role('Super-Admin|Admin|Tester|User')
								<div class="row m-0">

									<div class="col bg-white px-6 py-8 rounded-xl mb-7 mr-7  text-center">
										<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												@role('Super-Admin|Admin|Tester')
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"></polygon>
													<path
														d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
														fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
													<path
														d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
														fill="#000000" fill-rule="nonzero"></path>
												</g>
												@endrole
												@role('User')
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M5,2 L19,2 C20.1045695,2 21,2.8954305 21,4 L21,6 C21,7.1045695 20.1045695,8 19,8 L5,8 C3.8954305,8 3,7.1045695 3,6 L3,4 C3,2.8954305 3.8954305,2 5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L16,6 C16.5522847,6 17,5.55228475 17,5 C17,4.44771525 16.5522847,4 16,4 L11,4 Z M7,6 C7.55228475,6 8,5.55228475 8,5 C8,4.44771525 7.55228475,4 7,4 C6.44771525,4 6,4.44771525 6,5 C6,5.55228475 6.44771525,6 7,6 Z"
														fill="#000000" opacity="0.3" />
													<path
														d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,13 C21,14.1045695 20.1045695,15 19,15 L5,15 C3.8954305,15 3,14.1045695 3,13 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L16,13 C16.5522847,13 17,12.5522847 17,12 C17,11.4477153 16.5522847,11 16,11 L11,11 Z M7,13 C7.55228475,13 8,12.5522847 8,12 C8,11.4477153 7.55228475,11 7,11 C6.44771525,11 6,11.4477153 6,12 C6,12.5522847 6.44771525,13 7,13 Z"
														fill="#000000" />
													<path
														d="M5,16 L19,16 C20.1045695,16 21,16.8954305 21,18 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,18 C3,16.8954305 3.8954305,16 5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L16,20 C16.5522847,20 17,19.5522847 17,19 C17,18.4477153 16.5522847,18 16,18 L11,18 Z M7,20 C7.55228475,20 8,19.5522847 8,19 C8,18.4477153 7.55228475,18 7,18 C6.44771525,18 6,18.4477153 6,19 C6,19.5522847 6.44771525,20 7,20 Z"
														fill="#000000" />
												</g>
												@endrole
											</svg>
											<!--end::Svg Icon-->
										</span>
										@role('Super-Admin|Admin|Tester')
										<a href="{{route('users.index')}}"
											class="text-warning font-weight-bold font-size-h6">Users</a>
										@endrole
										@role('User')
										<a href="{{route('users.index')}}"
											class="text-warning font-weight-bold font-size-h6">User</a>
										@endrole

									</div>
									<div class="col bg-white px-6 py-8 rounded-xl mb-7 text-center">
										<span class="svg-icon svg-icon-3x svg-icon-info d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g id="Stockholm-icons-/-Food-/-Miso-soup" stroke="none"
													stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24"></rect>
													<path
														d="M2,14 L22,14 L22,14 C22,18.9705627 17.9705627,23 13,23 L11,23 C6.02943725,23 2,18.9705627 2,14 Z"
														id="Combined-Shape" fill="#000000"></path>
													<path
														d="M16.7233675,1.41763641 C17.1846056,1.68393238 17.3426375,2.27371529 17.0763415,2.73495343 C17.070507,2.74505905 17.0644896,2.75505793 17.0582922,2.76494514 L10.5379559,13.1673758 C10.3897629,13.4038004 10.08104,13.4805452 9.83939289,13.3410302 C9.59774579,13.2015152 9.50984729,12.8957809 9.64050046,12.6492297 L15.3891015,1.80123745 C15.6384827,1.33063867 16.2221417,1.15130634 16.6927405,1.40068748 C16.7030512,1.40615136 16.7132619,1.41180193 16.7233675,1.41763641 Z M21.8768598,4.21665558 C22.2332333,4.61244851 22.2012776,5.22219993 21.8054847,5.57857348 C21.796813,5.58638154 21.7880002,5.59403156 21.7790508,5.60151976 L12.3633147,13.4799245 C12.1493155,13.6589835 11.8319871,13.6365715 11.6452796,13.4292118 C11.458572,13.221852 11.4694527,12.9039193 11.6698998,12.7098092 L20.4893582,4.16917098 C20.8719568,3.79866796 21.4824663,3.80847334 21.8529693,4.19107192 C21.8610869,4.19945456 21.8690517,4.20798385 21.8768598,4.21665558 Z"
														id="Combined-Shape" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="{{route('foods.index')}}"
											class="text-primary font-weight-bold font-size-h6 mt-2">Foods</a>

									</div>

								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row m-0">
									<div class="col bg-white px-6 py-8 rounded-xl mr-7 text-center">
										<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">

												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M9,15 L7.5,15 C6.67157288,15 6,15.6715729 6,16.5 C6,17.3284271 6.67157288,18 7.5,18 C8.32842712,18 9,17.3284271 9,16.5 L9,15 Z M9,15 L9,9 L15,9 L15,15 L9,15 Z M15,16.5 C15,17.3284271 15.6715729,18 16.5,18 C17.3284271,18 18,17.3284271 18,16.5 C18,15.6715729 17.3284271,15 16.5,15 L15,15 L15,16.5 Z M16.5,9 C17.3284271,9 18,8.32842712 18,7.5 C18,6.67157288 17.3284271,6 16.5,6 C15.6715729,6 15,6.67157288 15,7.5 L15,9 L16.5,9 Z M9,7.5 C9,6.67157288 8.32842712,6 7.5,6 C6.67157288,6 6,6.67157288 6,7.5 C6,8.32842712 6.67157288,9 7.5,9 L9,9 L9,7.5 Z M11,13 L13,13 L13,11 L11,11 L11,13 Z M13,11 L13,7.5 C13,5.56700338 14.5670034,4 16.5,4 C18.4329966,4 20,5.56700338 20,7.5 C20,9.43299662 18.4329966,11 16.5,11 L13,11 Z M16.5,13 C18.4329966,13 20,14.5670034 20,16.5 C20,18.4329966 18.4329966,20 16.5,20 C14.5670034,20 13,18.4329966 13,16.5 L13,13 L16.5,13 Z M11,16.5 C11,18.4329966 9.43299662,20 7.5,20 C5.56700338,20 4,18.4329966 4,16.5 C4,14.5670034 5.56700338,13 7.5,13 L11,13 L11,16.5 Z M7.5,11 C5.56700338,11 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,4 7.5,4 C9.43299662,4 11,5.56700338 11,7.5 L11,11 L7.5,11 Z"
														fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="{{route('report.index')}}"
											class="text-danger font-weight-bold font-size-h6 mt-2">Reports</a>
									</div>
									<div class="col bg-white px-6 py-8 rounded-xl text-center">
										<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z"
														fill="#000000" opacity="0.3" />
													<path
														d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z"
														fill="#000000" />
													<path
														d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z"
														fill="#000000" />
													<path
														d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
														fill="#000000" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="{{route('schemes.index')}}"
											class="text-success font-weight-bold font-size-h6 mt-2">Scheme</a>
									</div>
								</div>
								@endrole
								@role('Cashier')
								<div class="row m-0">

									<div class="col bg-white px-6 py-8 rounded-xl mb-7 mr-7  text-center">
										<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
														fill="#000000" opacity="0.3" />
													<path
														d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
														fill="#000000" />
													<rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2"
														rx="1" />
													<rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2"
														rx="1" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="{{route('billing.index')}}"
											class="text-warning font-weight-bold font-size-h6">Billing</a>

									</div>

									<div class="col bg-white px-6 py-8 rounded-xl mb-7 text-center">
										<span class="svg-icon svg-icon-3x svg-icon-info d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g id="Stockholm-icons-/-Food-/-Miso-soup" stroke="none"
													stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24"></rect>
													<path
														d="M2,14 L22,14 L22,14 C22,18.9705627 17.9705627,23 13,23 L11,23 C6.02943725,23 2,18.9705627 2,14 Z"
														id="Combined-Shape" fill="#000000"></path>
													<path
														d="M16.7233675,1.41763641 C17.1846056,1.68393238 17.3426375,2.27371529 17.0763415,2.73495343 C17.070507,2.74505905 17.0644896,2.75505793 17.0582922,2.76494514 L10.5379559,13.1673758 C10.3897629,13.4038004 10.08104,13.4805452 9.83939289,13.3410302 C9.59774579,13.2015152 9.50984729,12.8957809 9.64050046,12.6492297 L15.3891015,1.80123745 C15.6384827,1.33063867 16.2221417,1.15130634 16.6927405,1.40068748 C16.7030512,1.40615136 16.7132619,1.41180193 16.7233675,1.41763641 Z M21.8768598,4.21665558 C22.2332333,4.61244851 22.2012776,5.22219993 21.8054847,5.57857348 C21.796813,5.58638154 21.7880002,5.59403156 21.7790508,5.60151976 L12.3633147,13.4799245 C12.1493155,13.6589835 11.8319871,13.6365715 11.6452796,13.4292118 C11.458572,13.221852 11.4694527,12.9039193 11.6698998,12.7098092 L20.4893582,4.16917098 C20.8719568,3.79866796 21.4824663,3.80847334 21.8529693,4.19107192 C21.8610869,4.19945456 21.8690517,4.20798385 21.8768598,4.21665558 Z"
														id="Combined-Shape" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="{{route('generalstocks.index')}}"
											class="text-primary font-weight-bold font-size-h6 mt-2">Stocks</a>

									</div>

								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row m-0">

									<div class="col bg-white px-6 py-8 rounded-xl text-center">
										<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z"
														fill="#000000" opacity="0.3" />
													<path
														d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z"
														fill="#000000" />
													<path
														d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z"
														fill="#000000" />
													<path
														d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
														fill="#000000" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="{{route('report.currentUserCollection')}}"
											class="text-success font-weight-bold font-size-h6 mt-2">Record</a>
									</div>
								</div>
								@endrole
								<!--end::Row-->
							</div>
							<!--end::Stats-->
							<div class="resize-triggers">
								<div class="expand-trigger">
									<div style="width: 933px; height: 429px;"></div>
								</div>
								<div class="contract-trigger"></div>
							</div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 2-->
				</div>
				<div class="col-md-4">
					<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-primary"
						style="height: 250px; background-image: url(assets/media/svg/patterns/taieri.svg)">
						<div class="card-body d-flex">
							<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
								<div class="flex-grow-1">
									<a href="#" class="text-white font-weight-bolder font-size-h3">Sell Food Items</a>
									<p class="text-white opacity-75 font-weight-bold mt-3">Easy Access to all your
										managed food.</p>
								</div>
								<a href="{{route('billing.index')}}"
									class="btn btn-link btn-link-white font-weight-bold">View More
									<span class="svg-icon svg-icon-lg svg-icon-white">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24"></polygon>
												<rect fill="#000000" opacity="0.3"
													transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
													x="11" y="5" width="2" height="14" rx="1"></rect>
												<path
													d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
													fill="#000000" fill-rule="nonzero"
													transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)">
												</path>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span></a>
							</div>
						</div>
					</div>

					<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b"
						style="height: 250px; background-image: url(assets/media/stock-600x400/img-28.jpg)">
						<!--begin::Body-->
						<div class="card-body">
							@role('Super-Admin|Admin|Tester|User')
							<a href="#" class="text-dark-75 text-hover-primary font-weight-bolder font-size-h3">Daily
								Sales Stats</a>
							<div class="text-dark-50 font-weight-bold font-size-lg pt-2">Total Sales:
								{{$totalSalesToday}} items sold / Rs {{$dailyTransactionToday}} </div>
							@endrole
							@role('Cashier')
							<a href="#" class="text-dark-75 text-hover-primary font-weight-bolder font-size-h3">Daily
								Sales Stats</a>
							<div class="text-dark-50 font-weight-bold font-size-lg pt-2">Total Sales:
								{{$totalUserSalesToday}} items sold / Rs
								{{$dailyUserTransactionToday}} </div>
							@endrole
						</div>
						<!--end::Body-->
					</div>
				</div>

				<div class="col-xl-4">
					<div class="card card-custom gutter-b card-stretch">
						<!--begin::Header-->
						@role('Admin|Super-Admin|Tester|User')

						<div class="card-header border-0 pt-5">
							<div class="card-title">

								<div class="card-label">
									<div class="font-weight-bolder">Overall Overview</div>
								</div>
							</div>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Items-->
							<div class="flex-grow-1">
								<!--begin::Item-->
								<div class="d-flex align-items-center justify-content-between mb-10">
									<div class="d-flex align-items-center mr-2">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="{{asset('assets/dashboard/popularity.png')}}" alt=""
													class="h-50">
											</div>
										</div>
										<div>
											<a href="#"
												class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Popular
												Foods</a>
											<div class="font-size-sm  font-weight-bold mt-1">
												@foreach($food_order->slice(0,3) as $order)
												<span style="font-size:12px">{{$order->food_name}} | </h6>
													@endforeach



											</div>
										</div>
									</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center justify-content-between mb-10">
									<div class="d-flex align-items-center mr-2">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="{{asset('assets/dashboard/tag.png')}}" alt="" class="h-50">
											</div>
										</div>
										<div>
											<a href="#"
												class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Total
												Sales </a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">{{$sales_total}}
												Items Sold / Rs. {{$transaction_total}}</div>
										</div>
									</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center justify-content-between mb-10">
									<div class="d-flex align-items-center mr-2">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="{{asset('assets/dashboard/weekly-calendar.png')}}" alt=""
													class="h-50">
											</div>
										</div>
										<div>
											<a href="#"
												class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Weekly
												Sales</a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">{{$weeklySales}}
												Items Sold / Rs. {{$weeklyTransaction }}</div>
										</div>
									</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center mr-2">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="{{asset('assets/dashboard/calendar.png')}}" alt=""
													class="h-50">
											</div>
										</div>
										<div>
											<a href="#"
												class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Monthly
												Sales</a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">{{$monthlySales}}
												Items Sold / Rs. {{$monthlyTransaction }}</div>
										</div>
									</div>
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->

						</div>
						<!--end::Body-->
						@endrole

						@role('Cashier')

						<div class="card-header border-0 pt-5">
							<div class="card-title">

								<div class="card-label">
									<div class="font-weight-bolder">Recently Added Category</div>
								</div>
							</div>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Items-->
							<div class="flex-grow-1">
								@foreach($categories as $category)
								<div class="d-flex flex-wrap align-items-center mb-10">
									<!--begin::Symbol-->
									<div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
										<div class="symbol-label"
											style="background-image: url('/storage/{{ $category->category_image}}')">
										</div>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="d-flex flex-column ml-4 flex-grow-1 mr-2">
										<a href="#"
											class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">{{$category->name}}</a>
									</div>
									<!--end::Title-->
									<!--begin::btn-->
									<span
										class="label label-lg label-light-primary label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4">{{$category->created_at->diffForHumans()}}</span>
									<!--end::Btn-->
								</div>
								@endforeach
							</div>
							<!--end::Items-->

						</div>
						<!--end::Body-->
						@endrole

					</div>
				</div>

				<div class="col-xl-12">
					<!--begin::List Widget 12-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0">
							<h3 class="card-title font-weight-bolder text-dark">Recently Added Foods</h3>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-2">
							@foreach($foods->slice(0,4) as $food)
							<!--begin::Item-->
							<div class="d-flex flex-wrap align-items-center mb-10">
								<!--begin::Symbol-->
								<div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
									<div class="symbol-label"
										style="background-image: url('/storage/{{ $food->food_image}}')"></div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div class="d-flex flex-column ml-4 flex-grow-1 mr-2">
									<a href="#"
										class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">{{$food->name}}</a>
									<span class="text-muted font-weight-bold">Price: Rs {{$food->price}}</span>
								</div>
								<!--end::Title-->
								<!--begin::btn-->
								<span
									class="label label-lg label-light-primary label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4">{{$food->created_at->diffForHumans()}}</span>
								<!--end::Btn-->
							</div>
							<!--end::Item-->
							@endforeach
							<!--end::Item-->
							@role('Super-Admin|Admin|Tester')
							<div class="d-flex flex-wrap align-items-center mb-10">
								<a href="{{route('foods.index')}}" class="btn btn-primary">See All</a>
							</div>
							@endrole
						</div>
						<!--end::Body-->
					</div>
					<!--end::List Widget 12-->
				</div>
				{{-- <div class="col-md-6">
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0">
							<h3 class="card-title font-weight-bolder text-dark">Recently Added Stocks</h3>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-2">
							@foreach($stocks->slice(0,4) as $stock)
							<!--begin::Item-->
							<div class="d-flex flex-wrap align-items-center mb-10">
								<!--begin::Symbol-->
								<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
									<div class="symbol-label"
										style="background-image: url('/storage/{{ $stock->food->food_image}}')"></div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
									<a href="#"
										class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$stock->food->name}}</a>
									<span class="text-muted font-weight-bold font-size-sm my-1">Date:
										{{ $stock->from_date }}</span>

								</div>
								<!--end::Title-->
								<!--begin::Info-->
								<div class="d-flex align-items-center py-lg-0 py-2">
									<div class="d-flex flex-column text-right">
										<span
											class="text-dark-75 font-weight-bolder font-size-h4">{{$stock->remaining_quantity}}/{{$stock->total_quantity}}</span>
										<span class="text-muted font-size-sm font-weight-bolder">items</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Item-->
							@endforeach
							@role('Super-Admin|Admin|Tester')

							<div class="d-flex flex-wrap align-items-center mb-10">
								<a href="{{route('stocks.index')}}" class="btn btn-primary">See All</a>
							</div>
							@endrole
						</div>
						<!--end::Body-->
					</div>
				</div> --}}


			</div>
			<!--end::Row-->



			<!--end::Dashboard-->
		</div>
		<!--end::Container-->
	</div>
</div>
@endsection