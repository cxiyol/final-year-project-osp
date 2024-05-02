<?php include ("includes/header.html"); ?>

<div class="hero-section container-fluid" id="hero-section">
	<h2 class="section-title-text text-center text-uppercase fs-1 fw-bold ">
		digital essentials: elevate your tech game
	</h2>
	<h5 class="section-title-text text-center text-capitalize fs-5 fw-normal">
		Empowering Your Digital Lifestyle, One Device at a time
	</h5>
	<img class="banner-container" src="includes/img/banner-hero.jpg" width="70%" />
</div>

<div class="hp-section container-fluid" id="hp-section">
	<h2 class="section-title-text text-center text-uppercase fs-1 fw-bold ">
		hot picks
	</h2>
	<div class="container" id="hp-section-container">
		<div class="row row-cols-2 text-center">
			<div class="col text-center">
				<iframe id="hp-1" width="100%" height="300"
					src="https://embed.studio.binkies3d.com/live3d/65f6f1478a7ebf00527f6f4a" frameborder="0"
					allowfullscreen=""></iframe>
			</div>
			<div class="col" id="hp-1-content">
				<h3 class="hp-1-text text-start text-capitalize fs-2 fw-bold ">
					Apple iPhone 14 Pro Max
				</h3>
				<h5 class="hp-1-text text-start text-capitalize fs-5 fw-normal">
					beyond the horizon: the pinnacle of smartphone excellence
				</h5>
				<a href="cart.html" class="btn bg-black" id="btn-more">Learn More</a>
			</div>

			<div class="col" id="hp-2-content">
				<h3 class="hp-2-text text-start text-capitalize fs-2 fw-bold">
					Beats by Dr Dre Studio 2
				</h3>
				<h5 class="hp-2-text text-start text-capitalize fs-5 fw-normal">
					enjoy crisp highs and deep bass that bring tracks to life while you are on the go
				</h5>
				<a href="cart.html" class="btn bg-black" id="btn-more">Learn More</a>
			</div>
			<div class="col text-center">
				<iframe id="showcase-iframe" width="100%" height="300"
					src="https://embed.studio.binkies3d.com/live3d/65a642a1a008420054961b87" frameborder="0"
					allowfullscreen=""></iframe>
			</div>
		</div>
	</div>
</div>

<div class="fprods-section" id="fprods-section">
	<h2 class="section-title-text text-center text-uppercase fs-1 fw-bold ">
		featured products
	</h2>
	<div class="row" id="fprods-cards">
		<div class="col-sm-3 mb-3 mb-sm-0">
			<div class="card">
				<img src="includes/img/prods/accs/img1.png" class="card-img-top">
				<a href="accs.html" class="card-body-container">
					<div class="card-body">
						<p class="card-text">Prod Brand</p>
						<h5 class="card-title">Prod Name</h5>
						<p class="card-text">RM2,999.00</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card">
				<img src="includes/img/prods/accs/img1.png" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn bg-black" id="btn-cart">Buy Now</a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card">
				<img src="includes/img/prods/accs/img1.png" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn bg-black" id="btn-cart">Buy Now</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="carousel slide" data-bs-ride="carousel" id="cust-section">
	<h2 class="section-title-text text-center text-uppercase fs-1 fw-bold ">
		happy customers
	</h2>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="includes/img/cust/cust1.jpg" style="width: 15%">
			<img src="includes/img/cust/cust2.jpg" style="width: 15%">
			<img src="includes/img/cust/cust3.jpg" style="width: 15%">
			<img src="includes/img/cust/cust4.jpg" style="width: 15%">
		</div>
		<div class="carousel-item">
			<img src="includes/img/cust/cust5.jpg" style="width: 15%">
			<img src="includes/img/cust/cust6.jpg" style="width: 15%">
			<img src="includes/img/cust/cust7.jpg" style="width: 15%">
			<img src="includes/img/cust/cust8.jpg" style="width: 15%">
		</div>
		<div class="carousel-item">
			<img src="includes/img/cust/cust9.jpg" style="width: 15%">
			<img src="includes/img/cust/cust10.jpg" style="width: 15%">
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#cust-section" data-bs-slide="prev">
		<span class="carousel-control-prev-icon bg-black" aria-hidden="true" id="btn-prev"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#cust-section" data-bs-slide="next">
		<span class="carousel-control-next-icon bg-black" aria-hidden="true" id="btn-next"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>

<div class="accordion accordion-flush" id="faq-section">
	<h2 class="section-title-text text-center text-uppercase fs-1 fw-bold ">
		frequently asked questions
	</h2>
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
				data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
				What brands of mobile phones, earbuds, and headphones do you sell?
			</button>
		</h2>
		<div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">We sell mobile phones from Apple, Asus, Google, Honor, Huawei, Lenovo, Nothing,
				OnePlus, Oppo, Realme, Samsung, Sony, Vivo, and Xiaomi. We sell earbuds and headphones from Apple,
				Huawei, Oppo, Realme, Samsung, Xiaomi, Moxom, Celebrat, Joyroom, Wekome, Yison, Sendem, and McDodo.
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
				data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
				What are the key features of the products you sell?
			</button>
		</h2>
		<div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">Our products are of excellent quality and available at very reasonable prices.
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
				data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
				Do you offer any bundles or special deals on your products?
			</button>
		</h2>
		<div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">We plan to offer bundles and special deals soon, so stay tuned for updates.
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
				data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
				What payment methods do you accept?
			</button>
		</h2>
		<div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">We accept typical payment methods such as credit/debit cards and online
				transfers.
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
				data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
				What are your shipping options and estimated delivery times?
			</button>
		</h2>
		<div id="flush-collapseOFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">We deliver straight to the customer's door, with estimated delivery times of 3-7
				working days.
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
				data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
				Do you offer international shipping?
			</button>
		</h2>
		<div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">No, we only offer shipping within Malaysia.
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
				data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
				What is your return and exchange policy?
			</button>
		</h2>
		<div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">Please refer to our return and exchange policy, which is similar to industry
				standards.
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
				data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
				Are there any fees associated with returns or exchanges?
			</button>
		</h2>
		<div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">Customers must cover the return fee on their own when shipping the item to us;
				otherwise, there are no additional fees.
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
				data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
				What are your customer support hours?
			</button>
		</h2>
		<div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">Our customer support is available from 9:00 am to 9:00 pm.
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
				data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
				How can customers get in touch with customer support?
			</button>
		</h2>
		<div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">Customers can contact us via email at oldskoolphone.ent@gmail.com or WhatsApp at
				011-7111 7101.
			</div>
		</div>
	</div>
</div>

test

<?php include ("includes/footer.html"); ?>