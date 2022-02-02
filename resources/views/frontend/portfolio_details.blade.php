<!-- Portfolio Modals-->
        <!-- Modal -->
        @if (is_countable($portfolio) && count($portfolio) > 0)
        @foreach ($portfolio as $portfolio)
		<div class="modal fade" id="portfolioModal<?php echo $portfolio->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="modal-body">
								<!-- Project Details Go Here-->
								<h2 class="text-uppercase" id="exampleModalLabel">{{$portfolio->title}}</h2>
								<img class="img-fluid d-block mx-auto" src="{{url($portfolio->big_image)}}" alt="" />
								<p>{{$portfolio->description}}</p>
								<ul class="list-inline">
									<li>Date: {{$portfolio->created_at->toDateString()}}</li>
									<li>Client: {{$portfolio->client}}</li>
									<li>Category: {{$portfolio->category}}</li>
								</ul>
								<button class="btn btn-primary" data-dismiss="modal" type="button">
									<i class="fas fa-times mr-1"></i>
									Close Project
								</button>
							</div>
						</div>
					</div>
				</div>
			  </div>
			</div>
		  </div>
        @endforeach
        @endif 